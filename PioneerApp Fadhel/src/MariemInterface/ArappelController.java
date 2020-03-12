/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemInterface;

import GUI.InscriptionParentController;
import GUI.TuteurMainController;
import MariemEntite.Rappel;
import MariemEntite.Reclamation;
import MariemService.ServiceRappel;
import MariemService.ServiceReclamation;
import java.io.IOException;
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
import javafx.fxml.FXMLLoader;
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
 * @author User
 */
public class ArappelController implements Initializable {
    private String cin;
    @FXML
    private TableView<Rappel> tabrappel;
    @FXML
    private TableColumn<Rappel, String> date;
    @FXML
    private TableColumn<Rappel, String> nom;
    @FXML
    private TableColumn<Rappel, String> prenom;
    @FXML
    private TableColumn<Rappel, String> Rappel;
    @FXML
    private ImageView Rimg;
    @FXML
    private ImageView retour;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
         Rimg.setImage(new Image("/Image/bgmain.png"));
         ServiceRappel es = new ServiceRappel();
            ObservableList<Rappel> list = FXCollections.observableArrayList();
            
            list=Getlist();
            tabrappel.setItems(list);
            
            nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
            prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
            Rappel.setCellValueFactory(new PropertyValueFactory<>("Text"));
            date.setCellValueFactory(new PropertyValueFactory<>("date"));
            tabrappel.setItems(list);
            retour.setImage(new Image("/Image/retour-8.png"));
    }    

    public void SetCin(String cin )
    {
        this.cin = cin ;
    }
    
    
    private ObservableList<Rappel> Getlist() {
   ServiceRappel es = new ServiceRappel();
                 List<Rappel> arr=new ArrayList<>();
                 ObservableList<Rappel> list = FXCollections.observableArrayList();
        try {
            arr=es.readAll();
        } catch (SQLException ex) {
            Logger.getLogger(ArappelController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i=0;i< arr.size();i++)
                {
                   list.add(new Rappel(arr.get(i).getDate(),arr.get(i).getNom(),arr.get(i).getPrenom(), arr.get(i).getText()));
                }

      return list;  }

    @FXML
    private void retourAction(MouseEvent event) {
                                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/GUI/TuteurMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               TuteurMainController apc = loader.getController();
                                               apc.SetCin(cin);
                                              
                                                 
                                            retour.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }
 }
    

