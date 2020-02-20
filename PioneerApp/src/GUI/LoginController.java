/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Parent;
import Entities.Responsable;
import Entities.Tuteur;
import Service.ServiceParent;
import Service.ServiceResponsable;
import Service.ServiceTuteur;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.RadioButton;
import javafx.scene.control.TextField;
import javafx.scene.control.ToggleGroup;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class LoginController implements Initializable {

    @FXML
    private ImageView FrontImage ;
    @FXML
    private Button btnConnecter;
    @FXML
    private TextField cinText;
    @FXML
    private PasswordField mdpText;
    @FXML
    private Label LabelErreur;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
      Image FrontImg= new Image("/Image/Wlcimage.jpg");
      FrontImage.setImage(FrontImg);
      
      LabelErreur.setVisible(false);
      
    
       
    }    

    @FXML
    private void btnConnecterAction(ActionEvent event) {
      
       if(cinText.getText().equals("") || mdpText.getText().equals("") || cinText.getLength()!=8 )
        {
            System.out.println("erreur");
            LabelErreur.setText("Cin ou mot de passe incorrect!");
            LabelErreur.setVisible(true);
            
        }
       else
        {
            try {
                
                Responsable r=new Responsable(cinText.getText(), mdpText.getText());
                Service.ServiceResponsable sr =new ServiceResponsable();
                
                if(sr.LoginResponsable(r)==0)
                {System.out.println(" Responsable ");
                
                                                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("ResponsableMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ResponsableMainController apc = loader.getController();
                                               apc.setCin(cinText.getText());
                                              
                                            cinText.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
                
                
                }
                
                else if(sr.LoginResponsable(r)==1)
                {System.out.println(" Tuteur ");}
                
                else if (sr.LoginResponsable(r)==2)
                {System.out.println(" Parent ");}
                
                else if(sr.LoginResponsable(r)==3)
                {   LabelErreur.setText("Compte Non activé!");
                    LabelErreur.setVisible(true);
                    }
                
                else {LabelErreur.setText("Vérifiez les champs !");
                    LabelErreur.setVisible(true);}
            } catch (SQLException ex) {
                Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
            }
          
         } 
          
        
    }

    @FXML
    private void inscriptionaction(ActionEvent event) throws IOException {
        
        ///////////move between scenes
         FXMLLoader loader = new FXMLLoader
                        (getClass()
                         .getResource("InscriptionParent.fxml"));
            try {
                javafx.scene.Parent root = loader.load();
                InscriptionParentController apc = loader.getController();
               
                cinText.getScene().setRoot(root);
            } catch (IOException ex) {
                System.out.println(ex.getMessage());
                }
    
    }
    
       
    
}
