/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entity.Actualite;
import Utils.Statics;
import com.codename1.components.InfiniteProgress;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;


/**
 *
 * @author Alfa Shel
 */
public class ServiceActualite {
    
    public ArrayList <Actualite> actualites;
    public static ServiceActualite instance;
    private ConnectionRequest req;
    private ServiceActualite()
            
    {
        req = new ConnectionRequest();
    }
    
    public static ServiceActualite getInstance()
    {
        if(instance ==null) instance =new ServiceActualite();
        return instance;
                
    }
    
    public ArrayList<Actualite> parseActs(String jsonText)
    {
        try {
            actualites = new ArrayList<>();
            JSONParser j = new JSONParser();
            
            Map<String,Object> actsListJason = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)actsListJason.get("root");
            for(Map<String,Object> obj : list)
            {
                actualites.add(new Actualite(obj.get("id").toString().substring(0,obj.get("id").toString().length()-2),obj.get("date").toString(),obj.get("description").toString(),obj.get("titre").toString(),obj.get("photo").toString()));
            }
            
        } catch (IOException ex) {
        }
        return actualites;
    }
    
    public ArrayList<Actualite> getAllActs()
    {
        String url = Statics.BASE_URL+"/listblogs";
        req.setUrl(url);
        req.setPost(false);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
           
                actualites= parseActs(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return actualites;
    }
    
}
