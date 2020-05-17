/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.Actualite;
import Entity.User;
import Utils.Statics;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
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
public class ListBlog extends Form{
     
    EncodedImage enc;
    String URL; 
    Form current;
    
    public ListBlog(Form previous,User user) 
    {
        current=this;
         try { enc=  EncodedImage.create("/Lo.png");    } catch (IOException ex) {}
        setTitle("News");
        setLayout(BoxLayout.y());
        
        ArrayList<Actualite> acts = Services.ServiceActualite.getInstance().getAllActs();
        
         for(int i=0 ; i<acts.size();i++)
         {
           URL=Statics.IMG_URL+acts.get(i).getPhoto();
           Image   img= URLImage.createToStorage(enc, URL, URL, URLImage.RESIZE_SCALE);
           ImageViewer   imgv=new ImageViewer(img);
           
           
           SpanLabel titre= new SpanLabel();
           titre.setText("Title: "+acts.get(i).getTitre());
           
           
           SpanLabel date= new SpanLabel();
           date.setText("Date: "+acts.get(i).getDate());
           
           
          // SpanLabel desc= new SpanLabel();
          // desc.setText(acts.get(i).getDescription());
           
           
           Container c = new Container(BoxLayout.y());
           c.add(imgv);
           c.add(titre);
           c.add(date);
          // c.add(desc);
           Label choix = new Label();
           c.add(choix);
           c.setLeadComponent(choix);
           add(c);
           
           Actualite News = acts.get(i);
           
           choix.addPointerReleasedListener(e-> new ListCmt(current,News,user).show());

        
         }
         
             
       
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());
    }
    
    
    
}
