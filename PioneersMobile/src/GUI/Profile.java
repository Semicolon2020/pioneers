/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.User;
import Utils.Statics;
import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import java.io.IOException;

/**
 *
 * @author Alfa Shel
 */
public class Profile extends Form {
    
    Form Current;
    EncodedImage enc;
    String URL; 
    
    public Profile(User user,Form previous)
    {
         Current =this;
         setTitle("Profile "+user.getUserName());
         setLayout(BoxLayout.yCenter());
        
        try { enc=  EncodedImage.create("/Lo.png");    } catch (IOException ex) {}
        URL=Statics.IMG_URL+user.getPhoto();
        Image   imgB= URLImage.createToStorage(enc, URL, URL, URLImage.RESIZE_SCALE);
        ImageViewer   imgvB=new ImageViewer(imgB);
        
        SpanLabel Nom= new SpanLabel();
        Nom.setText("Nom: "+user.getNom());
        
        SpanLabel Prenom= new SpanLabel();
        Prenom.setText("Prenom: "+user.getPrenom());
        
        SpanLabel cin= new SpanLabel();
        cin.setText("CIN: "+user.getCin());
        
        SpanLabel etat= new SpanLabel();
        etat.setText("Status: "+user.getEtatCivil());
        
        SpanLabel Mail= new SpanLabel();
        Mail.setText("E-mail: "+user.getMail());
        
        SpanLabel Num= new SpanLabel();
        Num.setText("Num: "+user.getNum());
        
        SpanLabel Username= new SpanLabel();
        Username.setText("Username: "+user.getUserName());
        
        Button changePass = new Button("Change Password");
        
        addAll(imgvB,Nom,Prenom,cin,etat,Mail,Num,Username,changePass);
        
        
        changePass.addActionListener(new ActionListener() {
             @Override
             public void actionPerformed(ActionEvent evt) {
            
             new ChangePass( user, Current).show();
             }
         });
        
        
        
         getToolbar().addCommandToSideMenu("Menu", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
      
            previous.showBack();
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
