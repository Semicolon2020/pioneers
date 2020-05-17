/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.User;
import GUI.KAIS.transport;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import java.io.IOException;

/**
 *
 * @author Alfa Shel
 */
public class Menu extends Form {
    Form current;
    
    public Menu(Form previous,User user)
    {
        current=this;
        setTitle("Welcome "+user.getUserName());
        setLayout(BoxLayout.yCenter());
                
        ImageViewer NewsImage;
        ImageViewer TransImage;
        
        try {
            NewsImage = new ImageViewer(Image.createImage("/News2.png"));
            add(NewsImage);
          NewsImage.addPointerReleasedListener(e-> new ListBlog(current,user).show());

        } catch (IOException ex) {
        }
        
         try {
            TransImage = new ImageViewer(Image.createImage("/Transport.png"));
            add(TransImage);
          TransImage.addPointerReleasedListener(e-> new transport(current).show());

        } catch (IOException ex) {
        }
        
  
        
     // getToolbar().addMaterialCommandToLeftBar("Log out", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());
     
     
      
       getToolbar().addCommandToSideMenu("Profile", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
      
           new Profile(user,current).show();
         }
     });
       
       getToolbar().addCommandToSideMenu("Log out", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
      
            new Auth().show();
         }
     });

       

    }
    
}
