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

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
      Image FrontImg= new Image("/Image/Wlcimage.jpg");
      FrontImage.setImage(FrontImg);
    
       
    }    

    @FXML
    private void btnConnecterAction(ActionEvent event) {
      
       if(cinText.getText().equals("") || mdpText.getText().equals("") || cinText.getLength()!=8 )
        {
            System.out.println("erreur");
        }
       else
        {
            try {
                
                Responsable r=new Responsable(cinText.getText(), mdpText.getText());
                Service.ServiceResponsable sr =new ServiceResponsable();
                
                if(sr.LoginResponsable(r)==0)
                {System.out.println(" Responsable SUCCESSSSSSS");}
                
                else if(sr.LoginResponsable(r)==1)
                {System.out.println(" Tuteur SUCCESSSSSSS");}
                
                else if (sr.LoginResponsable(r)==2)
                {System.out.println(" Parent SUCCESSSSSSS");}
                
                else if(sr.LoginResponsable(r)==3)
                {System.out.println("Compte Non active");}
                
                else {System.out.println("Utilisateur non trouve verifier your credentials");}
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
