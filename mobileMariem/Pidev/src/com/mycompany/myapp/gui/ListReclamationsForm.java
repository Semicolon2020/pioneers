/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.services.ServiceReclamations;
import com.mycompany.myapp.entities.Reclamations;
import java.util.ArrayList;

/**
 *
 * @author User
 */
public class ListReclamationsForm extends Form{
        public ListReclamationsForm(Form previous) {
        setTitle("List Reclamations");
        setLayout(BoxLayout.yCenter());

     /*  SpanLabel sp = new SpanLabel();
        
        sp.setText(ServiceReclamations.getInstance().getAllReclamations().toString());
        add(sp);*/
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
      ArrayList<Reclamations> rec = ServiceReclamations.getInstance().getAllReclamations();
        
         for(int i=0 ; i<rec.size();i++)
         {
          
           SpanLabel titre= new SpanLabel();
           titre.setText("Title: "+rec.get(i).getObjet());
           
           
           SpanLabel date= new SpanLabel();
           date.setText("Date: "+rec.get(i).getDate());
           SpanLabel recl= new SpanLabel();
           recl.setText("Relamation: "+rec.get(i).getText());

           Container c = new Container(BoxLayout.y());
           c.add(date);
           c.add(titre);  
           c.add(recl);
          // c.add(desc);
           Label choix = new Label();
           c.add(choix);
           c.setLeadComponent(choix);
           add(c);
           
           Reclamations r = rec.get(i);
           
    }
    
    
}}
