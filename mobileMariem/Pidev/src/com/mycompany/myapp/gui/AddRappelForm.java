/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Rappels;
import com.mycompany.myapp.services.ServiceRappel;

/**
 *
 * @author User
 */
public class AddRappelForm extends Form
{ public AddRappelForm(Form previous) {
       
        setTitle("Ajouter un rappel");
        setLayout(BoxLayout.y());
        
        TextField tfText = new TextField("","text");
         TextField tfprenomenfant = new TextField("","Prénom");
        ComboBox<String> cb = new ComboBox();
        cb.addItem("Nutrition");
        cb.addItem("Environement");
        cb.addItem("Médicaments");
        cb.addItem("sieste");
        cb.addItem("Maladie");
     String    Objet = cb.getSelectedItem();

        Button btnValider = new Button("ajouter");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfText.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                        Rappels t = new Rappels(tfprenomenfant.getText(),tfText.getText(), cb.getSelectedItem());
                        if( ServiceRappel.getInstance().addRappel(t))
                            Dialog.show("Success","Connection accepted",new Command("OK"));
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
        addAll(tfprenomenfant,tfText,cb,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); 
                
    }

    
}
