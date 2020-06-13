/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import java.io.IOException;
/**
 *
 * @author User
 */
public class HomeForm extends Form{
    Resources theme;
    Form current;
      public HomeForm() {
        current = this;
        setTitle("Reclamations");
        setLayout(BoxLayout.y());
        
        
        
        ImageViewer home;
        
        try {
            home = new ImageViewer(Image.createImage("/Pioneers.png"));
            add(home);
          home.addPointerReleasedListener(e-> new AddReclamationsForm(current).show());

        } catch (IOException ex) {
        }
            
       Button btnAddRappel = new Button("Add Rappel");
        Button btnListRappel = new Button("List Rappel");
        
        Button btnAddReclamations = new Button("Add Reclamations");
        Button btnListReclamations = new Button("List Reclamations");
        Button btnmail = new Button("envoyer un mail ");

        btnmail.addActionListener(e -> new MailForm(current).show());
        btnAddReclamations.addActionListener(e -> new AddReclamationsForm(current).show());
        btnListReclamations.addActionListener(e -> new ListReclamationsForm(current).show());
        btnAddRappel.addActionListener(e -> new AddRappelForm(current).show());
        btnListRappel.addActionListener(e -> new ListRappelForm(current).show());
    
        addAll(btnAddReclamations, btnListReclamations,btnmail,btnAddRappel,btnListRappel);


}}
