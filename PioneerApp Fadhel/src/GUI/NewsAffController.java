/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Actualite;
import Entities.Enfant;
import Service.ServiceActualite;
import Service.ServiceEnfant;
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
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class NewsAffController implements Initializable {

    @FXML
    private TableView<Actualite> table;
    @FXML
    private TableColumn<Actualite, String> tab_titre;
    @FXML
    private TableColumn<Actualite, String> tab_des;
    @FXML
    private TableColumn<Actualite, String> tab_date;
    ObservableList<Actualite> ActualiteList =FXCollections.observableArrayList();
    @FXML
    private Button Back;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
        tab_titre.setCellValueFactory(new PropertyValueFactory<>("titre"));
        tab_des.setCellValueFactory(new PropertyValueFactory<>("description"));
        tab_date.setCellValueFactory(new PropertyValueFactory<>("date"));
        
        ActualiteList=GetTableNews();
        table.setItems(ActualiteList);
        
    }    
    
    
    public  ObservableList<Actualite> GetTableNews()
    {
        Service.ServiceActualite se= new ServiceActualite();
        List<Actualite> arr=new ArrayList<>();
        
        ObservableList<Actualite> Newslist =FXCollections.observableArrayList();
        
        try {
            arr=se.readAll();
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i =0 ; i<arr.size();i++)
        {
           
            
            Newslist.add(new Actualite(arr.get(i).getId(),arr.get(i).getDate(),arr.get(i).getDescription(),arr.get(i).getTitre()));
        }
        
        return Newslist;
    }

    @FXML
    private void backMain(ActionEvent event) {
        
         FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("ResponsableMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ResponsableMainController apc = loader.getController();
                                               
                                              
                                           Back.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }
    
    
}
