/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI.KAIS;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;


/**
 *
 * @author bhk
 */
public class transport extends Form{

    public transport(Form previous) {
        setTitle("TRANSPORT");
        setLayout(BoxLayout.yCenter());
        
         Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS) );
        
          Button btnOk = new Button("bus");
          Button btnOk2 = new Button("covoiturage");
          c.addAll(btnOk,btnOk2);
          add(c);
         btnOk2.addActionListener(new ActionListener()  {
            
                @Override
                public void actionPerformed(ActionEvent evt) {
                   // byte[] data = (byte[]) evt.getMetaData();
         new covForm(previous).show();
      
                  
        } });
        btnOk.addActionListener(new ActionListener()  {
            
                @Override
                public void actionPerformed(ActionEvent evt) {
                   // byte[] data = (byte[]) evt.getMetaData();
        new busForm(previous).show();
                  
        } });
        
        
        
    getToolbar().addMaterialCommandToLeftBar("Menu", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());
    
    
}}
