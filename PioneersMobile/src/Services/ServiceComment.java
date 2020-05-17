/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entity.Actualite;
import Entity.Comment;
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
public class ServiceComment {
    
    public boolean resultOk;
    public ArrayList <Comment> Comments;
    public static ServiceComment instance;
    private ConnectionRequest req;
    private ServiceComment()
            
    {
        req = new ConnectionRequest();
    }
    
    public static ServiceComment getInstance()
    {
        if(instance ==null) instance =new ServiceComment();
        return instance;
                
    }
    
    
    public ArrayList<Comment> parseCmts(String jsonText)
    {
        try {
            Comments = new ArrayList<>();
            JSONParser j = new JSONParser();
            
            Map<String,Object> actsListJason = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
            List<Map<String,Object>> list = (List<Map<String,Object>>)actsListJason.get("root");
            for(Map<String,Object> obj : list)
            {
                Comments.add(new Comment(obj.get("id").toString().substring(0,obj.get("id").toString().length()-2),obj.get("id_u").toString(),obj.get("text").toString(),
                        obj.get("point").toString().substring(0,obj.get("point").toString().length()-2)
                ,obj.get("date").toString(),obj.get("UserName").toString(),obj.get("UserPhoto").toString(),obj.get("NbrCmt").toString(),
               obj.get("NbrReply").toString() ));
            }
            
        } catch (IOException ex) {
        }
        return Comments;
    }
    
    
    public ArrayList<Comment> getAllCmts(String id)
    {
        String url = Statics.BASE_URL+"/listCmt/"+id;
        req.setUrl(url);
        req.setPost(false);
        InfiniteProgress prog = new InfiniteProgress();
        Dialog d = prog.showInfiniteBlocking();
        req.setDisposeOnCompletion(d);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
           
                Comments= parseCmts(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Comments;
    }
    
    
    public boolean addCmt(String idB,Comment c)
    {
         String url = Statics.BASE_URL+"/addCmt/"+idB+"/"+c.getId_u()+"/"+c.getText();
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
    
    public boolean addLikeC (String idC)
    {
         String url = Statics.BASE_URL+"/addlikec/"+idC;
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
