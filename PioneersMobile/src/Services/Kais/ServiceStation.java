/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services.Kais;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import Entity.Bus;
import Entity.Station;
import Utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author ASUS-PC
 */
public class ServiceStation {
    
      public ArrayList<Station> buss;
    
    public static ServiceStation instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceStation() {
         req = new ConnectionRequest();
    }

    public static ServiceStation getInstance() {
        if (instance == null) {
            instance = new ServiceStation();
        }
        return instance;
    }
    
    
       public boolean addstation(String nom , int id) {
        
        String url =  "http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/stationadd/"+nom+"/"+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    
    public boolean deletestation(int id) {
        
        String url = "http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/stationdel/"+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public ArrayList<Station> parseStation(String jsonText){
        try {
            buss=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Station t = new Station();
                float id = Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
                t.setName(obj.get("name").toString());
                buss.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }
        return buss;
    }
    
    public ArrayList<Station> getAll(int id){
        String url ="http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/"+id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                buss = parseStation(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return buss;
    }
    

    
}
