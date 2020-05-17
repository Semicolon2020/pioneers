/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.Enfant;
import Entity.User;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;

/**
 *
 * @author Alfa Shel
 */
public class AddEnfant extends Form {
    
     Form current;
     
       public AddEnfant(User user) {
           
           setTitle("Enfant");
           setLayout(BoxLayout.yCenter());
           
        TextField Nom = new TextField("","Nom ...",10,TextArea.USERNAME);   
        TextField prenom = new TextField("","Prenom ...",10,TextArea.USERNAME);
        ComboBox<String> Sexe = new ComboBox<>("Garçon","Fille");
        ComboBox<String> Age = new ComboBox<>("3","4","5");
        
        Button Autre = new Button("Autre");
        Button Terminer = new Button("Terminer");
           
        addAll(Nom,prenom,Age,Sexe,Autre,Terminer);
        
        
        Autre.addActionListener(new ActionListener() {
               @Override
               public void actionPerformed(ActionEvent evt) {
        
                   if(Nom.getText().length()==0 || prenom.getText().length()==0 )
                   {
                     Dialog.show("Alert", "Empty Fileds", new Command("OK"));

                   }
                   else
                   {
                       Enfant e = new Enfant(Nom.getText(), prenom.getText(), user.getCin(), Sexe.getSelectedItem(), Age.getSelectedItem());
                       if(Services.ServiceAuth.getInstance().addEnfant(e))
                       {
                            new AddEnfant(user).show();
                       }
                       else
                       {
                             Dialog.show("Alert", "Verify fields", new Command("OK"));
                       }
                       
                   }
               
               }
           });
        
        
        Terminer.addActionListener(new ActionListener() {
               @Override
               public void actionPerformed(ActionEvent evt) {
                   
                   if(Nom.getText().length()==0 || prenom.getText().length()==0 )
                   {
                     Dialog.show("Alert", "Empty Fileds", new Command("OK"));

                   }
                   else
                   {
                       Enfant e = new Enfant(Nom.getText(), prenom.getText(), user.getCin(), Sexe.getSelectedItem(), Age.getSelectedItem());
                       if(Services.ServiceAuth.getInstance().addEnfant(e))
                       {
                             Dialog.show("", "Success", new Command("OK"));
                             new Auth().show();
                       }
                       else
                       {
                             Dialog.show("Alert", "Verify fields", new Command("OK"));
                       }
                       
                   }
           
               
               }
           });
        
       }
    
}
