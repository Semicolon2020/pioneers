/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;



import Services.ServiceEvenement;
import entities.activite;
import entities.evenement;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.Tab;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author House
 */
public class AddEvenementController implements Initializable {
   
    @FXML
    private TextField tfLieu;
    @FXML
    private TextField tfInvite;
    @FXML
    private TextField tfNom;
    @FXML
    private TextField tfDescription;
    @FXML
    private TextField tfNiveau;
    @FXML
    private Button Bajouter;
    @FXML
    private Tab afficher;
    @FXML
    private Tab modifierEvenement;
    @FXML
    private TextField MEnom;
    @FXML
    private TextField MElieu;
    @FXML
    private TextField MEinvite;
    @FXML
    private TextField MEdescription;
    @FXML
    private TextField MEniveau;
    @FXML
    private Button ModifierEvenement;
    @FXML
    private TableColumn<evenement, String> AFnom;
    @FXML
    private TableColumn<evenement, String> AFlieu;
    @FXML
    private TableColumn<evenement, String> AFinvite;
    @FXML
    private TableColumn<evenement, String> AFdescription;
    @FXML
    private TableColumn<evenement, String> AFniveau;
    
  ServiceEvenement sE = new ServiceEvenement();
    @FXML
    private TableView<evenement> Table;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void ajouter(ActionEvent event) {
        try {
            
            String lieuA = tfLieu.getText();
            String typeA = tfInvite.getText();
            String descriptionA = tfDescription.getText();
            String nomA = tfNom.getText();
            int niveauA = Integer.parseInt(tfNiveau.getText());
       
            
            ServiceEvenement sE = new ServiceEvenement();
            evenement e = new evenement(nomA, niveauA, typeA, lieuA, descriptionA);
            sE.ajouter1(e);
            
        }
            
           
         catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }

    @FXML
    private void AfficherEvenement(Event event) {
            try { 
            AFniveau.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getniveau()));
            AFnom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getNom()));
            AFlieu.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getLieu()));
            
            AFdescription.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getDescription()));
            AFinvite.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getInvite()));
            ObservableList<evenement> list = sE.readAllV2();
            System.out.println(list);
            Table.setItems(list);
         } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    @FXML
    private void ModifierEvenement(ActionEvent event) {
    }

    

    
    
}