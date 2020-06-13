/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.messaging.Message;
import com.codename1.ui.Button;
import com.codename1.ui.CN;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.services.ServiceReclamations;
import java.io.IOException;
import com.codename1.io.Properties;





/**
 *
 * @author User
 */
public class MailForm extends Form{
    public MailForm ( Form previous){
        
        Properties props = new Properties();
        props.put("mail.smtp.host", "smtp.gmail.com");   
        props.put("mail.smtp.port", "587");	
        props.put("mail.smtp.auth", "true");
        props.put("mail.smtp.starttls.enable", "true");
      setTitle("contactez-nous");
      setLayout(BoxLayout.y());
    
    TextField tfObjet = new TextField("","Objet");
    TextField tfText = new TextField("","Message");
     Button btnValider = new Button("envoyer");
     btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfText.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
              
                else
                { String subject = tfObjet.getText();
          
            String usermail = "jardin.pioneer@gmail.com";
            String passmail = "jardin123";
        Message message=new Message(tfText.getText()) ;
Message.sendMessage(new String[]
{"jardin.pioneer@gmail.com"}, tfObjet.getText(), message);
                    
                    try {
                        /*       Message message=new Message(tfText.getText()) ;
                        Message.sendMessage(new String[]
                        {"meriemmnasser@gmail.com"}, tfObjet.getText(), message);*/
                        Display.getInstance().sendSMS("+21652547372", "bonjour");
                    } catch (IOException ex) {
                    }

       
                    }
                try {
                    switch(Display.getInstance().getSMSSupport()) {
    case Display.SMS_NOT_SUPPORTED:
        return;
    case Display.SMS_SEAMLESS:
        
        Display.getInstance().sendSMS("+21652547372", "bonjout");
        return;
    default:
        Display.getInstance().sendSMS("+21652547372", "bonjour");
        return;
}
                } catch (IOException ex) {
                   
                }
                }
              
        
                
            
        });
                    

    
    
        addAll(tfObjet,tfText,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); 

    }
}