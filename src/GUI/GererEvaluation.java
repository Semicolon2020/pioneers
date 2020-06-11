/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.MyApplication;
import Entities.Activite;
import Entities.Evaluation;
import Entities.Enfant;

import java.util.ArrayList;
import Service.EvaluationService;
import com.codename1.ui.FontImage;

/**
 *
 * @author MehdiS
 */
public class GererEvaluation extends Form {

    Form current;

    public GererEvaluation(Form previous, ArrayList<Activite> ListAc, ArrayList<Enfant> ListE) {

        current = this;

        setTitle("Affichage Evaluation");
        setLayout(BoxLayout.y());

        for (Evaluation r : new EvaluationService().getAllEvaluation()) {

            this.add(addItem(r, ListAc, ListE));
        }
        this.show();
        getToolbar().addMaterialCommandToLeftBar("back", FontImage.MATERIAL_ARROW_BACK, ev -> {

            new GuiEvaluation(this).show();
        });
    }

    public Container addItem(Evaluation c, ArrayList<Activite> ListAc, ArrayList<Enfant> ListE) {

        Container cn1 = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        Container cn2 = new Container(new BoxLayout(BoxLayout.X_AXIS));

        Label labActivite = new Label(c.getId_ac().getNom());
        Label labEnfant = new Label(c.getId_e().getNom() + " " + c.getId_e().getPrenom());
        Label labRemarque = new Label(c.getRemarque());
        Label labScore = new Label(String.valueOf(c.getScore()));

        Button btn = new Button("Editer");
        cn2.add(btn);

        cn1.add(labEnfant);
        cn1.add(labActivite);
        cn1.add(labRemarque);
        cn1.add(labScore);
        cn1.add("-----------------------");

        //supprimer   
        btn.addActionListener(e -> {
            Container cnD = new Container(new BoxLayout(BoxLayout.Y_AXIS));
            Form f2 = new Form("Details", BoxLayout.y());
            TextField tfScore = new TextField(String.valueOf(c.getScore()));

            ComboBox<String> cbRemarque = new ComboBox("", "Remarques");
            cbRemarque.addItem("Passable");
            cbRemarque.addItem("Moyen");
            cbRemarque.addItem("Bien");
            cbRemarque.addItem("Très Bien");

            ComboBox<String> cbEnfant = new ComboBox("", "Liste Enfants");
            for (int i = 0; i < ListE.size(); i++) {
                cbEnfant.addItem(ListE.get(i).getNom());

            }
            ComboBox<String> cbActivite = new ComboBox("", "Liste Activités");
            for (int i = 0; i < ListAc.size(); i++) {
                cbActivite.addItem(ListAc.get(i).getNom());

            }

            cbEnfant.setSelectedItem(c.getId_e().getNom());
            cbActivite.setSelectedItem(c.getId_ac().getNom());
            cbRemarque.setSelectedItem(c.getRemarque());
            Button btn_modif = new Button("Modifier");
            Button btn_sup = new Button("Supprimer");
            //cnD.add(cbMatieres);
            cnD.add("Evaluation").add("Enfant: ").add(cbEnfant).add("Activité: ").add(cbActivite).add("Remarque: ").add(cbRemarque).add("Score: ").add(tfScore).add(btn_sup).add(btn_modif);
            f2.add(cnD);
            btn_sup.addActionListener(ww -> {
                new EvaluationService().suppEvaluation(c.getId());
                new GererEvaluation(this, ListAc, ListE).showBack();
            }
            );
            btn_modif.addActionListener(aa -> {
                 Enfant e1 = rechercherEtudiant(ListE,cbEnfant.getSelectedItem());
                 Activite a1 = rechercherClasse(ListAc,cbActivite.getSelectedItem());
                c.setId_e(e1);
                c.setId_ac(a1);
                c.setRemarque(cbRemarque.getSelectedItem());
                c.setScore(Float.parseFloat(tfScore.getText()));

                new EvaluationService().modifierEvaluation(c);
                new GererEvaluation(this, ListAc, ListE).showBack();
            }
            );
            f2.getToolbar().addCommandToLeftBar("back", null, ev -> {
                this.show();
            });
            f2.show();
        });

        cn1.setLeadComponent(btn);
        return cn1;

    }
    
public Enfant rechercherEtudiant(ArrayList<Enfant> ListE,String nom) {
       for(int i = 0; i<ListE.size();i++){
           if(ListE.get(i).getNom().equals(nom)){
              return ListE.get(i);
           }
       }
           return null;
       
    }
    
     public Activite rechercherClasse(ArrayList<Activite> ListAc,String nom) {
       for(int i = 0; i<ListAc.size();i++){
           if(ListAc.get(i).getNom().equals(nom)){
              return ListAc.get(i);
           }
       }
           return null;
       
    }

}
