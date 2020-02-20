/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class ResponsableMainController implements Initializable {

    
    
    private String cin;
    @FXML
    private ImageView RespUI;
    @FXML
    private Button parentAppro;
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
        Image FrontImg= new Image("/Image/RespUI.png");
        
        RespUI.setImage(FrontImg);
        RespUI.setSmooth(true);
        RespUI.setPreserveRatio(false);
      
      
    }    
    
    
    public void setCin(String cin)
    {
        this.cin=cin;
    }

    @FXML
    private void parentApprouveInterface(ActionEvent event) {
        
                                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("RespoParentApprove.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               RespoParentApproveController apc = loader.getController();
                                              
                                              
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }
    
}
