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
import Utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author ASUS-PC
 */
public class ServiceBus {
    
      public ArrayList<Bus> buss;
    
    public static ServiceBus instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceBus() {
         req = new ConnectionRequest();
    }

    public static ServiceBus getInstance() {
        if (instance == null) {
            instance = new ServiceBus();
        }
        return instance;
    }
    
    
       public boolean addBus(Bus t) {
        
        String url = "http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/busmobile3/" + t.getName() + "/" + t.getCapacite()+"/" + t.getChauffeur();
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

    public boolean editBus(Bus t) {
        
        String url ="http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/busmobile/" +t.getId()+"/" + t.getName() + "/" + t.getCapacite()+"/" + t.getChauffeur();
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
    public boolean deleteBus(int id) {
        
        String url = "http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/busmobile2/"+id;
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

    
      public ArrayList<Bus> parseBus3(String jsonText){
        try {
            buss=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Bus t = new Bus();
                float id = Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
               t.setName(obj.get("name").toString());
                buss.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }
        return buss;
    }
    public ArrayList<Bus> parseBus(String jsonText){
        try {
            buss=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Bus t = new Bus();
                float id = Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
                float capa = Float.parseFloat(obj.get("capacite").toString());
                t.setCapacite((int)capa);
                 t.setChauffeur(obj.get("chauffeur").toString());
                t.setName(obj.get("name").toString());
                buss.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }
        return buss;
    }
    
    public ArrayList<Bus> getAll(){
        String url ="http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/busall";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                buss = parseBus(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return buss;
    }
    public ArrayList<Bus> getbuss(){
        String url ="http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/trajetidzz";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                buss = parseBus3(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return buss;
    }

    
}
