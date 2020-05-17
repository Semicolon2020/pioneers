/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entity.Enfant;
import Entity.User;
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
public class ServiceAuth {
    
     public ArrayList <User> Users;
     public static ServiceAuth instance;
     private ConnectionRequest req;
     public boolean resultOk;
    
    private ServiceAuth()
   
    
    {
        req = new ConnectionRequest();
    }
    
    public static ServiceAuth getInstance()
    {
        if(instance ==null) instance =new ServiceAuth();
        return instance;
                
    }
    
     public ArrayList<User> parseCmts(String jsonText)
    {
        try {
            Users = new ArrayList<>();
            JSONParser j = new JSONParser();
                                                                     
            Map<String,Object> actsListJason = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)actsListJason.get("root");
            for(Map<String,Object> obj : list)
            {
                Users.add(new User(obj.get("id").toString().substring(0,obj.get("id").toString().length()-2),obj.get("username").toString(),obj.get("password").toString(),obj.get("role").toString()
                                  ,obj.get("cin").toString(),obj.get("nom").toString(),obj.get("prenom").toString(),obj.get("numTel").toString(),obj.get("etatCivil").toString(),obj.get("email").toString()
                                  ,obj.get("photo").toString()));
            }
           
        } catch (IOException ex) {
        }
        return Users;
    }
     
     
      public ArrayList<User> Auth(String UserName,String password)
    {
        String url = Statics.BASE_URL+"/auth/"+UserName+"/"+password;
        req.setUrl(url);
        req.setPost(false);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
           
                Users= parseCmts(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Users;
    }
      
      
      public boolean addUser(User u)
    {
         String url = Statics.BASE_URL+"/addUser/"+u.getCin()+"/"+u.getNom()+"/"+u.getPrenom()+"/"+u.getEtatCivil()+"/"+u.getMail()+"/"+u.getUserName()+"/"+u.getPassword()+"/"+u.getNum();
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
      
      
        public boolean addEnfant(Enfant u)
    {
         String url = Statics.BASE_URL+"/addEnfant/"+u.getCin()+"/"+u.getNom()+"/"+u.getPrenom()+"/"+u.getAge()+"/"+u.getSexe();
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
        
        
         public boolean ChangePass(User u)
    {
         String url = Statics.BASE_URL+"/chgPass/"+u.getId()+"/"+u.getPassword();
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
