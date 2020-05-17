/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI.KAIS;

import com.codename1.components.SpanLabel;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import Services.Kais.ServiceBus;
import java.io.UnsupportedEncodingException;

/**
 *
 * @author bhk
 */
public class HomeForm extends Form{
Form current;
 String url;
    ConnectionRequest con;
    public HomeForm() {
        current=this;
        setTitle("Login");
        setLayout(BoxLayout.yCenter());
        Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS) );
        Button btnOk = new Button("login");
        TextField tfLogin = new TextField();
        TextField tfPass = new TextField("","",20,TextArea.PASSWORD);
        c.addAll(tfLogin,tfPass,btnOk);
        add(c);
        btnOk.addActionListener(new ActionListener()  {
            
                @Override
                public void actionPerformed(ActionEvent evt) {
                   // byte[] data = (byte[]) evt.getMetaData();
     
                 if ("kais".equals(tfLogin.getText())) {
                
                new home2Form(current).show();
                 }else{new home3(current).show();}
        } });
        
      
        
        
        
        
        
        
    
    
        
    }
    
    
}
