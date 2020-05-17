/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.Actualite;
import Entity.Comment;
import Entity.User;
import Services.ServiceComment;
import Utils.Statics;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
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
public class ListCmt extends Form{
    
    EncodedImage enc;
    Form current;
    String URL; 


    public ListCmt(Form previous,Actualite News,User user) {
        
        current=this;
        
         try { enc=  EncodedImage.create("/avatar.png");    } catch (IOException ex) {}
        setTitle(News.getTitre());
        setLayout(BoxLayout.y());
        
        
        URL=Statics.IMG_URL+News.getPhoto();
        Image   imgB= URLImage.createToStorage(enc, URL, URL, URLImage.RESIZE_SCALE);
        ImageViewer   imgvB=new ImageViewer(imgB);
        SpanLabel titre= new SpanLabel();
           titre.setText("Title: "+News.getTitre());
           
           
           SpanLabel date= new SpanLabel();
           date.setText("Date: "+News.getDate());
           
           
           SpanLabel desc= new SpanLabel();
           desc.setText(News.getDescription());
           
           Label line = new Label("\n");
           Label line1 = new Label("\n");
           Label des = new Label("Description:");
           
           addAll(imgvB,titre,date,line,des,desc,line1);
           
  
      
      TextField CommentText = new TextField("","Write comment...",10,TextArea.ANY);
      Button Submit = new Button("Submit");
        addAll(CommentText,Submit);    
           
        
        ArrayList<Comment> cmts = Services.ServiceComment.getInstance().getAllCmts(News.getId());
      
        if(cmts.size() !=0) {Label NbrComt = new Label("Comments("+cmts.get(0).getNbrCmt()+")"); add(NbrComt);}
        
        else {Label NbrComt = new Label("Comments(0)"); add(NbrComt);}
       
        
        
         for(int i=0 ; i<cmts.size();i++)
         {
           URL=Statics.IMG_URL+cmts.get(i).getUserPhoto();
           Image   img= URLImage.createToStorage(enc, URL, URL, URLImage.RESIZE_SCALE);
           ImageViewer   imgv=new ImageViewer(img);
           
           cmts.get(i).setIdA(News.getId());
           
           SpanLabel UserName= new SpanLabel();
           UserName.setText(cmts.get(i).getUserName());
           
           Container c1 = new Container(BoxLayout.x());
           c1.addAll(imgv,UserName);
           
          
           SpanLabel text= new SpanLabel();
           text.setText(cmts.get(i).getText());
           
            Container c2 = new Container(BoxLayout.x());
            SpanLabel dateC= new SpanLabel();
           dateC.setText(cmts.get(i).getDate()); 
           SpanLabel Likes= new SpanLabel();
           Likes.setText("Likes: "+cmts.get(i).getPoint()); 
           SpanLabel NbrReply= new SpanLabel();
           NbrReply.setText("Replies("+cmts.get(i).getNbrReply()+")");
            c2.addAll(Likes,dateC,NbrReply);
           
           Container c = new Container(BoxLayout.y());
           
           c.addAll(c1,text,c2);
           
           Label choix = new Label();
           c.add(choix);
           c.setLeadComponent(choix);
           add(c);
           Comment cmt = cmts.get(i);
         choix.addPointerReleasedListener(e-> new ListReplies( current,cmt, user).show());
         
         }
         
     
      
      
      Submit.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
              if(CommentText.getText().length()==0)
              {
                   Dialog.show("Alert", "Empty Filed", new Command("OK"));
              }
              
              else
              {
                  Comment c = new Comment();
                  c.setId_u(user.getId());
                  c.setText(CommentText.getText());
                  if( Services.ServiceComment.getInstance().addCmt(News.getId(), c))
                  {
                       Dialog.show("Succes", "Comment Added", new Command("OK"));
                        new ListCmt(previous,News,user).show();
                       
                  }
              }
                
            }
        });
              
      
     
        
        
      getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());

    }
    
    
    
    
    
    
}
