/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI.KAIS;

import com.codename1.components.SpanLabel;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Slider;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;

import Entity.Bus;
import Entity.Trajet;
import Services.Kais.ServiceBus;
import Services.Kais.ServiceTrajet;
import com.codename1.ui.FontImage;


/**
 *
 * @author esprit
 */
public class trajetForm extends Form{
     int sid=0;  
       int w=0;
       int v=0;
 public trajetForm(Form previous){
     setLayout(BoxLayout.yCenter());
     setTitle("liste de trajets");
          
          Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS));
          Button btnOk = new Button("ajouter un trajet");
           c.addAll(btnOk);
          add(c);
          btnOk.addActionListener(e ->{
          Form f2 = new Form(new BoxLayout(BoxLayout.Y_AXIS));
          f2.getToolbar().addCommandToOverflowMenu("back", null, new ActionListener() {
          @Override
          public void actionPerformed(ActionEvent evt) {
         new trajetForm(previous).show();
          }
     });
           SpanLabel p1 = new SpanLabel("depart");
        TextField tfName = new TextField("");
        SpanLabel p2 = new SpanLabel("arrive");
        TextField tfName2 = new TextField("");
         SpanLabel p3 = new SpanLabel("bus");
        ComboBox<String> cv = new ComboBox<>();
         for (Bus a:  new ServiceBus().getbuss())
     {
      cv.addItem(a.getName());
     }
          
        Button btnValider = new Button("Ajouter un trajet");
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
             
                for (Bus a:  new ServiceBus().getbuss())
     {
                   if(cv.getSelectedItem().equals(a.getName())){w=a.getId();}
     }
             String trtt=tfName.getText()+"-"+tfName2.getText();
                
              
                 Trajet t = new Trajet(1,trtt,w);
                
                for (Trajet m:  new ServiceTrajet().addTrajet(t))
     {
                    new stationform(previous,m.getId()).show();
        // System.out.println(m.getId());
     } 
                          
                       
                    
                }  
        });
        if (new ServiceBus().getbuss().isEmpty()){ Button bt = new Button("ajouter bus ");
        SpanLabel z=new SpanLabel("ajouter un bus d'abord ");
         f2.add(z);
        f2.add(bt);
         
         f2.show();
        bt.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
             new busback(previous).show();
            
            }});
        
        }else{
        f2.addAll(p1,tfName,p2,tfName2,p3,cv,btnValider);
          
        f2.show();}
       });
         
          
          
          
     for (Trajet t:  new ServiceTrajet().getAll2())
     {
         Slider s=new Slider();
     Button p1 = new Button("Trajet: "+t.getName()+",bus: "+t.getNamebus());
      Button btnOk2 = new Button("Editer trajet");
       Button btnOk3= new Button("Supprimer trajet");
       Container c2 = new Container(new BoxLayout(BoxLayout.X_AXIS) );
       Container c3 = new Container(new BoxLayout(BoxLayout.X_AXIS) );
      add(s);
       c2.addAll(p1);
         add(c2);
         c3.addAll(btnOk2,btnOk3);
         add(c3);
          btnOk3.addActionListener(e ->{  
                        if( ServiceTrajet.getInstance().deletetrajet(t.getId()))
                        { Dialog.show("","Trajet Supprime",new Command("OK"));
                          new trajetForm(previous).show();
                        }
          
          });
          
           btnOk2.addActionListener(e ->{
            Form f2 = new Form(new BoxLayout(BoxLayout.Y_AXIS));
              Container c4 = new Container(new BoxLayout(BoxLayout.X_AXIS) );
            f2.getToolbar().addCommandToOverflowMenu("back", null, new ActionListener() {
         @Override
         public void actionPerformed(ActionEvent evt) {
        new trajetForm(previous).show();
          }
     });
             SpanLabel pp = new SpanLabel("depart");
               SpanLabel pppp = new SpanLabel("bus");
               SpanLabel ppp = new SpanLabel("arrive");
        TextField tfName = new TextField("");
        TextField tfName2 = new TextField("");
        ComboBox<String> cv = new ComboBox<>();
        if (new ServiceBus().getbuss().isEmpty()){ Button bt = new Button("ajouter bus ");
         f2.add(bt);}
         for (Bus a:  new ServiceBus().getbuss())
         { 
      cv.addItem(a.getName());
         }
         
        
        Button btnValider = new Button("editer ");
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                int x = 0;
                for (Bus a:  new ServiceBus().getbuss())
     {
                   if(cv.getSelectedItem().equals(a.getName())){v=a.getId();}
     }
             String trt=tfName.getText()+"-"+tfName2.getText();
                
                if ((tfName.getText().length()==0 && tfName2.getText().length()==0 ))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try { Trajet d = new Trajet(t.getId(),trt,v);
                   if (ServiceTrajet.getInstance().edittrajet(d))
                     new stationform(previous,t.getId()).show();
                   } catch (NumberFormatException e) {
                  }
                 } 
                }
               });
        
        if (new ServiceBus().getbuss().isEmpty()){ Button bt = new Button("ajouter bus ");
        SpanLabel z=new SpanLabel("ajouter un bus d'abord ");
        f2.add(z);
         f2.add(bt);
         
        bt.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
             new busback(previous).show();
            
            }});
        
        }
        else{
        f2.addAll(pp,tfName,ppp,tfName2,pppp,cv,btnValider);
        f2.show();}
       });
       
          
     
     
     
 }
     

       getToolbar().addMaterialCommandToLeftBar("Back", FontImage.MATERIAL_ARROW_BACK, new ActionListener() {
         @Override
         public void actionPerformed(ActionEvent evt) {
             new backtransp(previous).show();
         }
     });
    
 
 }
}
