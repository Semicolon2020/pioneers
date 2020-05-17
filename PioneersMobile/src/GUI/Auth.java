/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.User;
import GUI.KAIS.backtransp;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.sun.webkit.ThemeClient;
import java.io.IOException;
import java.util.ArrayList;


/**
 *
 * @author Alfa Shel
 */
public class Auth extends Form{
    
    Form current;
    private Resources theme;
    public Auth() {
        
        current=this;
        setTitle("Authentification");
        setLayout(BoxLayout.yCenter());
        
        
        ImageViewer PioneerImage;
        try {
            PioneerImage = new ImageViewer(Image.createImage("/Pioneers.png"));
            add(PioneerImage);
            
        } catch (IOException ex) {
        }
        
        TextField Username = new TextField("","",10,TextArea.USERNAME);
        Container c = new Container(BoxLayout.x());
        c.addAll(new Label("Username"),Username);       
       
        
        TextField password = new TextField("","",10,TextArea.PASSWORD);
        Container c1 = new Container(BoxLayout.x());
        c1.addAll(new Label("Password"),password);      
        
        Button Login = new Button("Login");
        Button Signup = new Button("Sign Up");

        addAll(c,c1,Login,Signup);
        
        
        Signup.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
           
                new SignUp(current).show();
            }
        });
        
        
        Login.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
           
                if(Username.getText().length()==0 || password.getText().length()==0 )
                {
                    Dialog.show("Alert", "Empty Fileds", new Command("OK"));
                }
                else
                {
                   ArrayList<User>  Luser = Services.ServiceAuth.getInstance().Auth(Username.getText(),password.getText());
                    if(Luser.size()==1 && Luser.get(0).getRole().equalsIgnoreCase("P"))
                    {
                        new Menu(current,Luser.get(0)).show();
                    }
                    
                    else if (Luser.size()==1 && Luser.get(0).getRole().equalsIgnoreCase("R"))
                    {
                        new backtransp(current).show();
                    }
                    else
                    {
                         Dialog.show("Alert", "User not Found", new Command("OK"));
                    }
                }
            
            }
        });
        
    }
    
    
}
