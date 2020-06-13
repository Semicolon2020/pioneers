/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Rappels;
import com.mycompany.myapp.services.ServiceRappel;
import java.util.ArrayList;

/**
 *
 * @author User
 */
public class ListRappelForm extends Form{
        public ListRappelForm(Form previous) {
        setTitle("List des rappeles ");
     
     ArrayList<Rappels> rap = ServiceRappel.getInstance().getAllRappel();
     
            for (int i = 0; i < rap.size(); i++) {
                
            
          
           SpanLabel titre= new SpanLabel();
           titre.setText("Title: "+rap.get(i).getObjet());
           
            SpanLabel enfant= new SpanLabel();
           enfant.setText("Enfant: "+rap.get(i).getEnfant());
           
           SpanLabel date= new SpanLabel();
           date.setText("Date: "+rap.get(i).getDate());
           SpanLabel recl= new SpanLabel();
           recl.setText("Rappel: "+rap.get(i).getText());

           Container c = new Container(BoxLayout.y());
           c.add(date);
           c.add(titre);  
           c.add(recl);
          // c.add(desc);
           Label choix = new Label();
           c.add(choix);
           c.setLeadComponent(choix);
           add(c);
           
           Rappels r = rap.get(i);
           
    }
    }
}
