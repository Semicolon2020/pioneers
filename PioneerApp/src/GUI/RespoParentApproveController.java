/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Enfant;
import Entities.Parent;
import Service.ServiceParent;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class RespoParentApproveController implements Initializable {

    @FXML
    private ImageView RespUI;
    //////////Table Parent
    @FXML
    private TableColumn<Parent, String> tab_id;
    @FXML
    private TableColumn<Parent, String> tab_cin;
    @FXML
    private TableColumn<Parent, String> tab_mdp;
    @FXML
    private TableColumn<Parent, String> tab_nom;
    @FXML
    private TableColumn<Parent, String> tab_prenom;
    @FXML
    private TableColumn<Parent, String> tab_tlf;
    @FXML
    private TableColumn<Parent, String> tab_compte;
    @FXML
    private TableColumn<Parent, String> tab_sexe;
    @FXML
    private TableColumn<Parent, String> tab_date;
    @FXML
    private TableColumn<Parent, String> tab_mail;
    @FXML
    private TableView<Parent> table;
    @FXML
    private TableColumn<Parent, String> tab_civil;
    ////////////////////////////
    ////////////////Table Enfant
    
    
    private String Pcin;
    
    ObservableList<Parent> parentlist =FXCollections.observableArrayList();
    ObservableList<Enfant> enfantlist =FXCollections.observableArrayList();
    @FXML
    private ImageView pdpParent;
    @FXML
    private ImageView pdpEnfant;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
                
        tab_id.setCellValueFactory(new PropertyValueFactory<>("id"));
        tab_cin.setCellValueFactory(new PropertyValueFactory<>("cin"));
        tab_nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        tab_prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        tab_sexe.setCellValueFactory(new PropertyValueFactory<>("sexe"));
        tab_date.setCellValueFactory(new PropertyValueFactory<>("dateEmbauche"));
        tab_mail.setCellValueFactory(new PropertyValueFactory<>("email"));
        tab_mdp.setCellValueFactory(new PropertyValueFactory<>("password"));
        tab_tlf.setCellValueFactory(new PropertyValueFactory<>("num_tel"));
        tab_compte.setCellValueFactory(new PropertyValueFactory<>("etat_compte"));
        tab_civil.setCellValueFactory(new PropertyValueFactory<>("etat_civil"));
        
        parentlist=GetTableParent();
        table.setItems(parentlist);
        
        
        
        Image FrontImg= new Image("/Image/RespUI.png");       
        RespUI.setImage(FrontImg);
        RespUI.setSmooth(true);
        RespUI.setPreserveRatio(false);
    }    
    
    
    public  ObservableList<Parent> GetTableParent()
    {
        Service.ServiceParent sp= new ServiceParent();
        List<Parent> arr=new ArrayList<>();
        
        ObservableList<Parent> parentlist =FXCollections.observableArrayList();
        
        try {
            arr=sp.readAll();
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i =0 ; i<arr.size();i++)
        {
            if(arr.get(i).getEtat_compte().equals("1")){arr.get(i).setEtat_compte("Activé");}
            else{arr.get(i).setEtat_compte("Désactivé");}
            
            parentlist.add(new Parent(arr.get(i).getId(),arr.get(i).getCin(),arr.get(i).getNom(),arr.get(i).getPrenom(),arr.get(i).getSexe(),arr.get(i).getDateEmbauche(),arr.get(i).getEmail(),arr.get(i).getPassword(),arr.get(i).getNum_tel(),arr.get(i).getEtat_compte(),arr.get(i).getEtat_civil()));
        }
        
        return parentlist;
    }
    
    public void SetCin(String cin)
    {
        this.Pcin=cin;
    }

    @FXML
    private void SelectParentTableViewAction(MouseEvent event) {
        
        Parent parent = table.getSelectionModel().getSelectedItem();
        System.out.println(parent);
        ServiceParent sp=new ServiceParent();
        Parent p=new Parent();
        
        try {
             pdpParent.setImage(sp.read(parent).getIcon()); 
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
        
                
        
        
        
    }
    
    
}
