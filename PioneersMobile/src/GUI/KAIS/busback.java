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
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;
import Entity.Bus;
import Services.Kais.ServiceBus;
import com.codename1.ui.FontImage;

/**
 *
 * @author esprit
 */
public class busback extends Form{
    
       
 public busback(Form previous){
     setLayout(BoxLayout.yCenter());
     setTitle("liste des bus");
        Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS));
          Button btnOk = new Button("ajouter un bus");
          btnOk.addActionListener(e ->{
          Form f2 = new Form(new BoxLayout(BoxLayout.Y_AXIS));
          f2.getToolbar().addCommandToOverflowMenu("back", null, new ActionListener() {
          @Override
          public void actionPerformed(ActionEvent evt) {
         new busback(previous).show();
          }
     });
        SpanLabel s=new SpanLabel("name");
        TextField tfName = new TextField("");
         SpanLabel ss=new SpanLabel("capacite");
        TextField tfcapa= new TextField("");
         SpanLabel sss=new SpanLabel("chauffeur");
        TextField tfchauffeur= new TextField("");
        Button btnValider = new Button("Ajouter un bus");
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfName.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                { try { Bus t = new Bus(0,tfName.getText(),Integer.parseInt(tfcapa.getText()),tfchauffeur.getText());
                        if( ServiceBus.getInstance().addBus(t))
                        { Dialog.show("Success","bus ajoute",new Command("OK"));
                            new busback(previous).show();}
                        else
                            { Dialog.show("ERROR", "Server error", new Command("OK"));}
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Capacity must be a number", new Command("OK"));
                    }
                }  }
        });
        
        f2.addAll(s,tfName,ss,tfcapa,sss,tfchauffeur,btnValider);
        f2.show();
       });
          c.addAll(btnOk);
          add(c);
     for (Bus a:  new ServiceBus().getAll())
     {
     Button p1 = new Button("chauffeur:"+a.getChauffeur()+",name:"+a.getName()+",capacite:"+a.getCapacite());
      Button btnOk2 = new Button("Editer bus");
       Button btnOk3= new Button("Supprimer bus");
         Slider   s=new Slider();
       Container c2 = new Container(new BoxLayout(BoxLayout.X_AXIS) );
       Container c3 = new Container(new BoxLayout(BoxLayout.X_AXIS) );
       add(s);
       c2.addAll(p1);
         add(c2);
         c3.addAll(btnOk2,btnOk3);
         add(c3);
          btnOk3.addActionListener(e ->{  
                        if( ServiceBus.getInstance().deleteBus(a.getId()))
                        { Dialog.show("","Bus Supprime",new Command("OK"));
                           new busback(previous).show();
                        }
          
          });
         btnOk2.addActionListener(e ->{
            Form f2 = new Form(new BoxLayout(BoxLayout.Y_AXIS));
            f2.getToolbar().addCommandToOverflowMenu("back", null, new ActionListener() {
         @Override
         public void actionPerformed(ActionEvent evt) {

             new busback(previous).show();
               
         }
     });
                SpanLabel s1=new SpanLabel("name");
        TextField tfName = new TextField("",a.getName());
            SpanLabel s2=new SpanLabel("capacite");
        TextField tfcapa= new TextField("",a.getCapacite());
            SpanLabel s3=new SpanLabel("chauffeur");
        TextField tfchauffeur= new TextField("",a.getChauffeur());
        Button btnValider = new Button("Modifier");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfName.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                        Bus t = new Bus(a.getId(),tfName.getText(),Integer.parseInt(tfcapa.getText()),tfchauffeur.getText());
                        if( ServiceBus.getInstance().editBus(t))
                        { Dialog.show("","Bus moidifie",new Command("OK"));
                            new backtransp(previous).show();}
                        else
                            { Dialog.show("ERROR", "Server error", new Command("OK"));}
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "capacity must be a number", new Command("OK"));
                    }
                }
               
            }
        });
        
        f2.addAll(s1,tfName,s2,tfcapa,s3,tfchauffeur,btnValider);
            
            
       f2.show();
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
