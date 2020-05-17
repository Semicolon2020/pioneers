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
import Entity.Trajet;
import Utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 * @author ASUS-PC
 */
public class ServiceTrajet {
    
      public ArrayList<Trajet> buss;
       public ArrayList<Trajet> idss;
     int busss = 0;
    public static ServiceTrajet instance=null;
    public boolean resultOK;
    int ids=0;
    private ConnectionRequest req;

    public ServiceTrajet() {
         req = new ConnectionRequest();
    }

    public static ServiceTrajet getInstance() {
        if (instance == null) {
            instance = new ServiceTrajet();
        }
        return instance;
    }
    
     public ArrayList<Trajet> addTrajet(Trajet t){
         String url = "http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/trajetadd/" + t.getName() + "/" + t.getIdbus();
         req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
              
                try {
                    buss = parseTrajet(new String(req.getResponseData()));
                } catch (IOException ex) {
                }
                
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return buss;
    }

   
     public boolean edittrajet(Trajet t) {
        String url =  "http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/trajeteditt/" + t.getName() + "/" + t.getIdbus()+"/" + t.getId();
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
    
    
   
     public boolean deletetrajet(int id) {
        String url =  "http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/trajetdel/"+id;
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
    

    public ArrayList<Trajet> parseTrajet(String jsonText) throws IOException{
     
            buss=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Trajet t = new Trajet();
                float id = Float.parseFloat(obj.get("id").toString());
                  t.setName("dd");
                t.setId((int)id);
               
                t.setIdbus(5);
                t.setNamebus("");
            
              
                buss.add(t);
            }
            
            
        
        return buss;
    }

    
    
    
     public ArrayList<Trajet> parseTrajet2(String jsonText){
        try {
            buss=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Trajet t = new Trajet();
                float id = Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
                float capa = Float.parseFloat(obj.get("idbus").toString());
                t.setIdbus((int)capa);
                t.setNamebus(obj.get("nombus").toString());
               
                t.setName(obj.get("name").toString());
                buss.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }
        return buss;
    }
    
    public ArrayList<Trajet> getAll(){
        String url ="http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/trajetall";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                try {
                    buss = parseTrajet(new String(req.getResponseData()));
                } catch (IOException ex) {
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return buss;
    } 
     public ArrayList<Trajet> getAll2(){
        String url ="http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/trajetall";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                buss = parseTrajet2(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return buss;
    }
    

    
}
