/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Reclamations;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author User
 */
public class ServiceReclamations {
      public ArrayList<Reclamations> Reclamations ;
    
    public static ServiceReclamations instance=null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceReclamations() {
         req = new ConnectionRequest();
    }

    public static ServiceReclamations getInstance() {
        if (instance == null) {
            instance = new ServiceReclamations();
        }
        return instance;
    }

    public boolean addReclamtions(Reclamations t) {
        String url = "http://localhost/pioneers/PioneersWeb/web/app_dev.php/api" + "/rec/add"  + "/" + t.getText() + "/" + t.getObjet(); 
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public ArrayList<Reclamations> parseReclamations(String jsonText){
        try {
            Reclamations=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> ReclamationsListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
         
            List<Map<String,Object>> list = (List<Map<String,Object>>)ReclamationsListJson.get("root");
            
            
            for(Map<String,Object> obj : list){
                Reclamations t = new Reclamations();
                float id = Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
                t.setDate(obj.get("date").toString()); 
                t.setText(obj.get("text").toString());
                t.setObjet(obj.get("objet").toString());  
               
                Reclamations.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }
  
        return Reclamations;
    }
    
    public ArrayList<Reclamations> getAllReclamations(){
        String url = "http://localhost/pioneers/PioneersWeb/web/app_dev.php/api"+"/rec";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Reclamations = parseReclamations(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }

           
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Reclamations;
    }
}
