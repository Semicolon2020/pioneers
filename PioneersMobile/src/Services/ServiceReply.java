/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entity.Actualite;
import Entity.Comment;
import Entity.Reply;
import static Services.ServiceComment.instance;
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
public class ServiceReply {
    
    public boolean resultOk;
    public ArrayList <Reply> Replies;
    public static ServiceReply instance;
    private ConnectionRequest req;
    private ServiceReply()    
    {
        req = new ConnectionRequest();
    }
    
     public static ServiceReply getInstance()
    {
        if(instance ==null) instance =new ServiceReply();
        return instance;
                
    }
     
     
     public ArrayList<Reply> parseCmts(String jsonText)
    {
        try {
            Replies = new ArrayList<>();
            JSONParser j = new JSONParser();
            
            Map<String,Object> actsListJason = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)actsListJason.get("root");
            for(Map<String,Object> obj : list)
            {
                Replies.add(new Reply(obj.get("id").toString().substring(0,obj.get("id").toString().length()-2),obj.get("id_cmt").toString().substring(0,obj.get("id_cmt").toString().length()-2),
                        obj.get("id_u").toString().substring(0,obj.get("id_u").toString().length()-2),obj.get("text").toString(),
                        obj.get("point").toString().substring(0,obj.get("point").toString().length()-2)
                ,obj.get("date").toString(),obj.get("UserName").toString(),obj.get("UserPhoto").toString() ));
            }
            
        } catch (IOException ex) {
        }
        return Replies;
    }
     
     
     public ArrayList<Reply> getReply(String id)
    {
        String url = Statics.BASE_URL+"/listrep/"+id;
        req.setUrl(url);
        req.setPost(false);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
           
                Replies= parseCmts(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Replies;
    }
     
     
     public boolean addReply (String idC,Reply c)
    {
         String url = Statics.BASE_URL+"/addReply/"+idC+"/"+c.getId_u()+"/"+c.getText();
         req.setUrl(url);
         req.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
            resultOk= req.getResponseCode()==200;
            req.removeResponseListener(this);
             }
         });
         NetworkManager.getInstance().addToQueueAndWait(req);
         return resultOk;
    }    
     
     public boolean addLikeR (String idC)
    {
         String url = Statics.BASE_URL+"/addliker/"+idC;
         req.setUrl(url);
         req.addResponseListener(new ActionListener<NetworkEvent>() {
             @Override
             public void actionPerformed(NetworkEvent evt) {
            resultOk= req.getResponseCode()==200;
            req.removeResponseListener(this);
             }
         });
         NetworkManager.getInstance().addToQueueAndWait(req);
         return resultOk;
    }    
     
     
     
}
