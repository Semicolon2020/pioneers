/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.Actualite;
import Entity.Comment;
import Entity.Reply;
import Entity.User;
import Utils.Statics;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.notifications.LocalNotification;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author Alfa Shel
 */
public class ListReplies  extends Form{
    
    EncodedImage enc;
    Form current;
    String URL; 
    
     public ListReplies(Form previous,Comment cmt,User user) {
         
         current=this;
        
         try { enc=  EncodedImage.create("/Lo.png");    } catch (IOException ex) {}
        setTitle("Comment: "+cmt.getUserName());
        setLayout(BoxLayout.y());
        
        URL=Statics.IMG_URL+cmt.getUserPhoto();
        Image   imgB= URLImage.createToStorage(enc, URL, URL, URLImage.RESIZE_SCALE);
        ImageViewer   imgvB=new ImageViewer(imgB);
 
          addAll(imgvB);
           
          
           SpanLabel text= new SpanLabel();
           text.setText(cmt.getText());
           
            Container c2 = new Container(BoxLayout.x());
            SpanLabel dateC= new SpanLabel();
           dateC.setText(cmt.getDate()); 
           SpanLabel Likes= new SpanLabel();
           Likes.setText("Likes: "+cmt.getPoint()); 
           SpanLabel NbrReply= new SpanLabel();
           NbrReply.setText("Replies("+cmt.getNbrReply()+")");
           
           String idC = cmt.getId();
                   
            ImageViewer LikeImageC;
        try {
            LikeImageC = new ImageViewer(Image.createImage("/Heart.png"));
            
            LikeImageC.addPointerReleasedListener(new ActionListener() {
             @Override
             public void actionPerformed(ActionEvent evt) {
                 Services.ServiceComment.getInstance().addLikeC(idC);
                 ArrayList<Comment> update = Services.ServiceComment.getInstance().getAllCmts(cmt.getIdA() );
                 for(int i=0 ; i<update.size();i++)
                 {
                     if(update.get(i).getId().equalsIgnoreCase(cmt.getId()))
                     {
                       update.get(i).setIdA(cmt.getIdA());
                       new ListReplies(previous, update.get(i), user).show();  
                     }
                 }
                 
             }
         });
            
            
             c2.addAll(Likes,dateC,NbrReply,LikeImageC);
        } catch (IOException ex) {
        }
           
           
           
           
           Container c = new Container(BoxLayout.y());
           
           c.addAll(text,c2);
           
           TextField ReplyText = new TextField("","Write Reply...",10,TextArea.ANY);
            Button Submit = new Button("Submit");
           
           
         addAll(c,new Label("\n"),ReplyText,Submit,new Label("\n Replies: \n"),new Label("\n"));
         
         
         
         
          ArrayList<Reply> rep = Services.ServiceReply.getInstance().getReply(cmt.getId());
          
         for(int i=0 ; i<rep.size();i++)
         {
           URL=Statics.IMG_URL+rep.get(i).getUserPhoto();
           Image   img= URLImage.createToStorage(enc, URL, URL, URLImage.RESIZE_SCALE);
           ImageViewer   imgv=new ImageViewer(img);
           
           
           SpanLabel UserName= new SpanLabel();
           UserName.setText(rep.get(i).getUserName());
           
           Container c1 = new Container(BoxLayout.x());
           c1.addAll(imgv,UserName);
           
          
           SpanLabel textR= new SpanLabel();
           textR.setText(rep.get(i).getText());
           
           Container c22 = new Container(BoxLayout.x());
           SpanLabel dateR= new SpanLabel();
           dateR.setText(rep.get(i).getDate()); 
           SpanLabel LikesR= new SpanLabel();
           LikesR.setText("Likes: "+rep.get(i).getPoint()); 
           
           String idR = rep.get(i).getId();
           
           ImageViewer LikeImageR;
        try {
            LikeImageR = new ImageViewer(Image.createImage("/Heart.png"));
            
            
            c22.addAll(LikesR,dateR,LikeImageR);
            
             LikeImageR.addPointerReleasedListener(new ActionListener() {
             @Override
             public void actionPerformed(ActionEvent evt) {
                 
                 Services.ServiceReply.getInstance().addLikeR(idR);  
                new ListReplies(previous,cmt, user).show();   

                 
             }
         });
            
        } catch (IOException ex) {
        }
           
           
            
           
           Container cr = new Container(BoxLayout.y());
           
           cr.addAll(c1,textR,c22);

           
           add(cr);
          
         
         }
         
         
         
         
         
         Submit.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
              if(ReplyText.getText().length()==0)
              {
                   Dialog.show("Alert", "Empty Filed", new Command("OK"));
              }
              
              else
              {
                  Reply c = new Reply();
                  c.setId_u(user.getId());
                  c.setText(ReplyText.getText());
                  if( Services.ServiceReply.getInstance().addReply(cmt.getId(), c))
                  {
                       Dialog.show("Succes", "Reply Added", new Command("OK"));
                       new ListReplies( previous,cmt, user).show();
                  }
                  
                    LocalNotification n = new LocalNotification();
                    n.setId("demo-notification");
                    n.setAlertBody(ReplyText.getText());
                    n.setAlertTitle("Reply to: "+cmt.getUserName());
                    n.setAlertSound("/notification_sound_beep-01a.mp3");
                    Display.getInstance().scheduleLocalNotification(
                    n,
                    System.currentTimeMillis()+10*1000, // fire date/time
                    0 // Whether to repeat and what frequency
                    );
                  
              }
                
            }
        });
         
         
               getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e->previous.show());
            

         
     }
}
