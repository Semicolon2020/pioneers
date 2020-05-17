/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.User;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
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
public class SignUp extends Form {
     Form current;

    public SignUp(Form previous) {
        
        setTitle("Sign Up");
        setLayout(BoxLayout.yCenter());
        
        TextField cin = new TextField("","Cin ...",10,TextArea.USERNAME);
        TextField Nom = new TextField("","Nom ...",10,TextArea.USERNAME);
        TextField Prenom = new TextField("","Prenom ...",10,TextArea.USERNAME);
        TextField Etat = new TextField("","Etat Civil ...",10,TextArea.USERNAME);
        TextField mail = new TextField("","E-mail ...",20,TextArea.USERNAME);
        TextField Username = new TextField("","Username ...",10,TextArea.USERNAME);
        TextField Password = new TextField("","Password ...",10,TextArea.PASSWORD);
        TextField Num = new TextField("","Num ...",10,TextArea.USERNAME);
         Button Next = new Button("Next");
        addAll(cin,Nom,Prenom,Num,Etat,mail,Username,Password,Next);
        
        
       
        
        Next.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
           
               if(Username.getText().length()==0 || Password.getText().length()==0 || cin.getText().length()!=8 || Nom.getText().length()==0 
                    || Prenom.getText().length()==0 || Etat.getText().length()==0 || mail.getText().length()==0  || Num.getText().length()!=8)
               {
                    Dialog.show("Alert", "Verify fields", new Command("OK"));
               }
               else
               {
                   User user = new User(Username.getText(), Password.getText(), cin.getText(), Nom.getText(), Prenom.getText(), Num.getText(), Etat.getText(),mail.getText());
                   
                   if(!Services.ServiceAuth.getInstance().addUser(user))
                       
                   {
                     Dialog.show("Alert", "Verify fields", new Command("OK"));
                       
                   }
                   else
                   {
                       new AddEnfant(user).show();
                   }
                   
               }
                    

            
            }
        });
        
        
       getToolbar().addMaterialCommandToLeftBar("Back", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());

        
    }
     
     
     
    
    
}
