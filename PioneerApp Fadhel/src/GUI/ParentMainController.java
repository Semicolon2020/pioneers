/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Responsable;
import MariemInterface.EmailController;
import MariemInterface.RappelController;
import MariemInterface.ReclamationController;
import OmarInterface.FrontActiviteController;
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
public class ParentMainController implements Initializable {

    
    private String cin;
    @FXML
    private Label labelName;
    @FXML
    private ImageView recParentimg;
    @FXML
    private ImageView RappelBtnimg;
    @FXML
    private ImageView mailBtn;
    @FXML
    private ImageView ActBtnimg;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
       
       RappelBtnimg.setImage(new Image("/Image/Rappel-8.png"));    
       recParentimg.setImage(new Image("/Image/RecParent-8.png"));   
       mailBtn.setImage(new Image("/Image/Email-8.png"));   
       ActBtnimg.setImage(new Image("/Image/ActivImg-8.png"));   
    }    
    
    
    
    
     public void setCin(String cin)
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
    
    public String getCin()
    {
        return this.cin;
    }

    @FXML
    private void RecParentAction(MouseEvent event) {
        

                                                 FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/MariemInterface/Reclamation.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               ReclamationController apc = loader.getController();
                                              
                                               apc.SetCin(cin);
                                              
                                            recParentimg.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }

    @FXML
    private void rappelAction(MouseEvent event) {
        
           FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/MariemInterface/rappel.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               RappelController apc = loader.getController();
                                              
                                               apc.SetCin(cin);
                                              
                                            recParentimg.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }

    @FXML
    private void mailBtnAction(MouseEvent event) {
        
                                             FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/MariemInterface/Email.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               EmailController apc = loader.getController();
                                              
                                               apc.SetCin(cin);
                                              
                                            recParentimg.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
        
    }

    @FXML
    private void ActBtnAction(MouseEvent event) {
        
        
                                                 FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/OmarInterface/FrontActivite.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               FrontActiviteController apc = loader.getController();
                                              
                                               apc.SetCin(cin);
                                              
                                            recParentimg.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }
    
    
    
    
    
}
