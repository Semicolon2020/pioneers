/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemInterface;

//import com.employe.gui.AfficheEmployeController;
import GUI.InscriptionParentController;
import GUI.ResponsableMainController;
import MariemEntite.Reclamation;
import MariemService.ServiceReclamation;
import java.io.IOException;
import java.lang.reflect.Array;
import java.net.URL;
import java.sql.SQLException;
import java.sql.Timestamp;
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
public class ArecController implements Initializable {
    private String cin;
    @FXML
    private TableView<Reclamation> TableRec;
    @FXML
    private TableColumn<Reclamation,Timestamp> tfDate;
    @FXML
    private TableColumn<Reclamation, String> tfNom;
    @FXML
    private TableColumn<Reclamation, String> tfPrenom;
    @FXML
    private TableColumn<Reclamation, String> tfReclamation;
    @FXML
    private ImageView retour;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
       // System.out.println("fhfh");
         ServiceReclamation es = new ServiceReclamation();
            ObservableList<Reclamation> list = FXCollections.observableArrayList();
            
            list=Getlist();
            TableRec.setItems(list);
            
            tfNom.setCellValueFactory(new PropertyValueFactory<>("nom"));
            tfPrenom.setCellValueFactory(new PropertyValueFactory<>("objet"));
            tfReclamation.setCellValueFactory(new PropertyValueFactory<>("Text"));
            tfDate.setCellValueFactory(new PropertyValueFactory<>("date"));
            TableRec.setItems(list);
            
            retour.setImage(new Image("/Image/retour-8.png"));
    }
    
    public void SetCin(String cin )
    {
        this.cin=cin;
    }
   
    public ObservableList<Reclamation> Getlist()
    {
                 ServiceReclamation es = new ServiceReclamation();
                 List<Reclamation> arr=new ArrayList<>();
                 ObservableList<Reclamation> list = FXCollections.observableArrayList();
        try {
            arr=es.readAll();
        } catch (SQLException ex) {
            Logger.getLogger(ArecController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i=0;i< arr.size();i++)
                {
                   list.add(new Reclamation(arr.get(i).getDate(),arr.get(i).getNom(),arr.get(i).getObjet(), arr.get(i).getText()));
                }

      return list;  
    }

    @FXML
    private void retourAction(MouseEvent event) {
        
                             FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/GUI/ResponsableMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ResponsableMainController apc = loader.getController();
                                              apc.setCin(cin);
                                              
                                            retour.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }
    }    
    

