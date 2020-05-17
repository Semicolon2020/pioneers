/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI.KAIS;

import com.codename1.components.SpanLabel;
import com.codename1.components.WebBrowser;
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
import Entity.Station;
import Services.Kais.ServiceStation;

 


/**
 *
 * @author esprit
 */
public class stationform extends Form{
    
       
 stationform(Form previous,int id){
     setLayout(BoxLayout.yCenter());
     setTitle("liste des stations");
      Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS));
          Button btnOk = new Button("ajouter un station");
          btnOk.addActionListener(e ->{
            Form f2 = new Form(new BoxLayout(BoxLayout.Y_AXIS));
            
        TextField tfName = new TextField("");
         
        
        Button btnValider = new Button("Ajouter le station");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (tfName.getText().length()==0 )
                    Dialog.show("Alert", "false entry", new Command("OK"));
                else
                { try {
                        if( ServiceStation.getInstance().addstation(tfName.getText(),id))
                        { Dialog.show("","Station ajoute",new Command("OK"));
                       new stationform(previous,id).show(); }
                        else
                            { Dialog.show("ERROR", "Server error", new Command("OK"));}
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                }  }
        });
        
        f2.addAll(tfName,btnValider);
        f2.show();
       });
          c.addAll(btnOk);
          add(c);
     for (Station a:  new ServiceStation().getAll(id))
     {Slider s=new Slider();
     Button p1 = new Button("Nom du Station = "+a.getName());
       Button btnOk3= new Button("Supprimer");
       Container c2 = new Container(new BoxLayout(BoxLayout.X_AXIS) );
       Container c3 = new Container(new BoxLayout(BoxLayout.X_AXIS) );
       add(s);
       c2.addAll(p1);
         add(c2);
         c3.addAll(btnOk3);
         add(c3);
          btnOk3.addActionListener(e ->{  
                        if( ServiceStation.getInstance().deletestation(a.getId()))
                        { Dialog.show("","station supprimer",new Command("OK"));
                          new stationform(previous,id).show();
                        }
          
          });
       
    
        
     
          
     
          getToolbar().addCommandToOverflowMenu("Logout", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
      
             new HomeForm().show();
        
         }
         });
      getToolbar().addCommandToOverflowMenu("back", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
      
            new backtransp(previous).show();
         }
     });
        getToolbar().addCommandToSideMenu("Transport", null, new ActionListener() {
         
            @Override
            public void actionPerformed(ActionEvent evt) {
              
              new transport(previous).show();
           }
        });
    
    
     
 }

   


 
    
}
}