/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entity.User;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import java.util.Random;


/**
 *
 * @author Alfa Shel
 */
public class ChangePass extends Form {
    
    public ChangePass(User user,Form previous)
    {
        setTitle("Change password");
        setLayout(BoxLayout.yCenter());
        
        TextField OldPass = new TextField("","Current Password...",10,TextArea.PASSWORD);
        TextField NewPass = new TextField("","New Password",10,TextArea.PASSWORD);
        
        
        TextField CaptchaT = new TextField("","Captcha ...",10,TextArea.USERNAME);
        Button Submit = new Button("Submit");
        
        String RandomS =CaptchaGen();
        
        
        addAll(OldPass,NewPass,new Label("Im not a robot: "+RandomS),CaptchaT,Submit);
        
        
        Submit.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
           
            if(CaptchaT.getText().equalsIgnoreCase(RandomS) && OldPass.getText().equalsIgnoreCase(user.getPassword()))
            {
                user.setPassword(NewPass.getText());
                Services.ServiceAuth.getInstance().ChangePass(user);
                 Dialog.show("Password Changed", "Please Log again", new Command("OK"));
                 new Auth().show();
            }
            
            else 
            {
                new ChangePass(user, previous).show();
            }
            
            }
        });
        
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());
    }
    
    
    
    
    
    
    public String CaptchaGen()
    {
        Random rand = new Random();
        char[] word = new char[5];
        for(int j = 0; j < word.length; j++)
        {
            word[j] = (char)('a' + rand.nextInt(26));
        }
      return new String(word);
    }
    
}
