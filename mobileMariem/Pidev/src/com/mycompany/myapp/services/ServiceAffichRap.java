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
import com.mycompany.myapp.entities.Rappels;
import static com.mycompany.myapp.services.ServiceRappel.instance;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author User
 */
public class ServiceAffichRap {
            public ArrayList<Rappels> rappels ;
    
    public static ServiceAffichRap instance=null;
    public boolean resultOK;
    private ConnectionRequest req;
    
     public ServiceAffichRap() {
         req = new ConnectionRequest();
    }
        public static ServiceAffichRap getInstance() {
        if (instance == null) {
            instance = new ServiceAffichRap();
        }
        return instance;
    }

    public ArrayList<Rappels> parseRappel(String jsonText){
        try {
            rappels=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> RappelListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
         
            List<Map<String,Object>> list = (List<Map<String,Object>>)RappelListJson.get("root");
            
            
            for(Map<String,Object> obj : list){
                Rappels t = new Rappels();

              //  float id = Float.parseFloat(obj.get("id").toString());
                //t.setId((int)id);
                t.setDate(obj.get("date").toString()); 
                t.setText(obj.get("text").toString());
                t.setObjet(obj.get("objet").toString());  
                 t.setEnfant(obj.get("enfant").toString());  
               
                rappels.add(t);
                System.out.println(obj.get("enfant").toString());
                System.out.println("hello");

            }
            
            
            
        } catch (IOException ex) {
            
        }
  
        return rappels;
    }
    
    public ArrayList<Rappels> getAllRappel(){
        String url = Statics.BASE_URL+"/rappel";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                
                rappels = parseRappel(new String(req.getResponseData()));
                req.removeResponseListener(this);
                
            }
                            
        });
         NetworkManager.getInstance().addToQueueAndWait(req);
        return rappels;
    }
    
}
