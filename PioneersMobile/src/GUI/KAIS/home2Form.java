/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI.KAIS;

import com.codename1.components.SpanLabel;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;


/**
 *
 * @author bhk
 */
public class home2Form extends Form{

    public home2Form(Form previous) {
        setTitle("home");
        
         getToolbar().addCommandToOverflowMenu("Logout", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
      
      previous.showBack();
                
         }
     });
  
     
    getToolbar().addCommandToSideMenu("Transport", null, new ActionListener() {
         
            @Override
            public void actionPerformed(ActionEvent evt) {
              
              new transport(previous).show();
           }
        });
    
    
}}
