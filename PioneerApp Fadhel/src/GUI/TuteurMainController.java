/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Responsable;
import MariemInterface.ArappelController;
import MariemInterface.ReclamationController;
import OmarInterface.AddActiviteController;
import OmarInterface.AddEvenementController;
import Service.ServiceResponsable;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class TuteurMainController implements Initializable {

    private String cin;
    @FXML
    private ImageView RappelBtn;
    @FXML
    private Label labelName;
    @FXML
    private ImageView logoutBtn;
    @FXML
    private ImageView AddActBtn;
    @FXML
    private ImageView eventBtnimg;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
        RappelBtn.setImage(new Image("/Image/Rappel-8.png"));    
        logoutBtn.setImage(new Image("/Image/logout.png"));  
        AddActBtn.setImage(new Image("/Image/ActivImg-8.png"));  
        eventBtnimg.setImage(new Image("/Image/eventimg-8.png"));  
       
    }    

    public void SetCin(String cin )
    {
        this.cin=cin;
        Responsable r= new Responsable();
       r.setCin(cin);
           
       ServiceResponsable sr= new ServiceResponsable();
       
        try {
            labelName.setText("Mr/Md "+sr.readUser(r).getNom()+" "+sr.readUser(r).getPrenom());
        } catch (SQLException ex) {
            Logger.getLogger(ResponsableMainController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    @FXML
    private void RecbtnAction(MouseEvent event) {
        
          FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/MariemInterface/Arappel.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               ArappelController apc = loader.getController();
                                              
                                               apc.SetCin(cin);
                                              
                                            RappelBtn.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }

    @FXML
    private void LogoutBtnAction(MouseEvent event) {
        
                                  FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/GUI/Login.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               LoginController apc = loader.getController();
                                              
                                              
                                            logoutBtn.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }

    @FXML
    private void AddActAction(MouseEvent event) {
        
                                            FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/OmarInterface/addActivite.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                             AddActiviteController apc = loader.getController();
                                             apc.SetCin(cin);
                                              
                                            logoutBtn.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
                                           
    }

    @FXML
    private void eventBtnAction(MouseEvent event) {

                 FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/OmarInterface/addEvenement.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                             AddEvenementController apc = loader.getController();
                                             apc.SetCin(cin);
                                              
                                            logoutBtn.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }
    
}
