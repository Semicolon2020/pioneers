/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.Stroke;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.RoundRectBorder;
import com.codename1.ui.plaf.Style;
import com.mycompany.myapp.MyApplication;
import Entities.Evaluation;
import Entities.Activite;
import Entities.Enfant;
import java.util.ArrayList;
import Service.EvaluationService;
import com.codename1.ui.Toolbar;

/**
 *
 * @author MehdiS
 */
public class GuiEvaluation extends Form{
     Form current;
    StatEvaluation se = new StatEvaluation(current);
  ArrayList<Enfant> ListE;
  ArrayList<Activite> ListAc;
   ComboBox<String> cbEnfant;
   ComboBox<String> cbActivite ;
   ComboBox<String> cbRemarque;
   TextField tfScore = new TextField("","Score");
    public GuiEvaluation(Form previous) {
        current=this;
        Toolbar tb = getToolbar();
      setLayout(BoxLayout.y());
     tb.addMaterialCommandToLeftBar("back", 
                FontImage.MATERIAL_BACKUP, ev->{new GererEvaluation(current , ListAc, ListE ).show();});
          tb.addCommandToOverflowMenu("Exit",
            null, ev->{Display.getInstance().exitApplication();});
          
        Style catRecStyle= getAllStyles();
        catRecStyle.setBgColor(0xAACDFC);
                
       
        cbRemarque =new ComboBox("Remarque");
        cbRemarque.addItem("Passable");
        cbRemarque.addItem("Moyen");
        cbRemarque.addItem("Bien");
        cbRemarque.addItem("Très Bien");
         cbEnfant = new ComboBox("Liste Enfants");
         ListE = EvaluationService.getInstance().getAllEnfant();
         
        cbActivite = new ComboBox("Liste Activités");
        ListAc = EvaluationService.getInstance().getAllActivite();
        System.out.println("list"+ListAc);

        for(int i=0;i<ListE.size();i++)
        { cbEnfant.addItem(ListE.get(i).getNom());
        }
        for(int i=0;i<ListAc.size();i++)
        { cbActivite.addItem(ListAc.get(i).getNom());
        }
        
        Button ajouter=new Button("Ajouter");
        //style button
        Stroke borderStroke = new Stroke(2, Stroke.CAP_SQUARE, Stroke.JOIN_MITER, 1);
        Style butStyle5=ajouter.getAllStyles();
        butStyle5.setBorder(RoundRectBorder.create().
        strokeColor(0).
        strokeOpacity(120).
        stroke(borderStroke));
        butStyle5.setBgColor(0xAACDFC);
        butStyle5.setBgTransparency(255);
        butStyle5.setMarginUnit(Style.UNIT_TYPE_DIPS);
        butStyle5.setMargin(Component.BOTTOM, 0);       
        butStyle5.setMargin(Component.TOP,0);           
        butStyle5.setMargin(Component.LEFT,0);  
        butStyle5.setMargin(Component.RIGHT,0); 
        
                    this.getToolbar().addCommandToRightBar("Affichage", null, ev->{
         new  GererEvaluation(current , ListAc , ListE).show();
        });
                    this.getToolbar().addCommandToRightBar("Statistique", null, ev->{
                        se.show();
        });
                        
        ajouter.addActionListener(new ActionListener() {

            @Override
             public void actionPerformed(ActionEvent evt) {
               
                    try {
                        Enfant e = rechercherEtudiant(cbEnfant.getSelectedItem());
                        Activite c = rechercherClasse(cbActivite.getSelectedItem());
                        String r = cbRemarque.getSelectedItem();
                        float s = Float.parseFloat(tfScore.getText());
                        Evaluation t = new Evaluation(e,c,r,s);
                        System.out.println(t.toString());
                        if( EvaluationService.getInstance().addEvaluation(t))
                        { Dialog.show("Success","Connection accepted",new Command("OK"));
             
                            
                        }
                           
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Nb places must be a number", new Command("OK"));
                    }
             }
                
            
            
        });
       
        
        //add to show
        current.addAll(cbEnfant,cbActivite,cbRemarque,tfScore,ajouter);
        current.show();

        
    }


    public Enfant rechercherEtudiant(String nom) {
       for(int i = 0; i<ListE.size();i++){
           if(ListE.get(i).getNom().equals(nom)){
              return ListE.get(i);
           }
       }
           return null;
       
    }
    
     public Activite rechercherClasse(String nom) {
       for(int i = 0; i<ListAc.size();i++){
           if(ListAc.get(i).getNom().equals(nom)){
              return ListAc.get(i);
           }
       }
           return null;
       
    }
  
    
    
}
