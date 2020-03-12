/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenInterface;

import GUI.InscriptionParentController;
import GUI.ResponsableMainController;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class AdminController implements Initializable {

    /**
     * Initializes the controller class.
     * 
     * 
     */
    private String cin;
    @FXML
    private ImageView retour;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
        retour.setImage(new Image("/Image/retour-8.png"));
    }    

    public void SetCin(String cin )
    {
        this.cin=cin;
    }
    
    @FXML

public void cours(ActionEvent actionEvent) throws IOException{
Parent view2 = FXMLLoader.load(getClass().getResource("Coursadmin.fxml")); 
Scene scene2 = new Scene(view2);
Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
window.setScene(scene2);
window.show();



   }

   @FXML

public void livre(ActionEvent actionEvent) throws IOException{
Parent view2 = FXMLLoader.load(getClass().getResource("LivreAdmin.fxml")); 
Scene scene2 = new Scene(view2);
Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
window.setScene(scene2);
window.show();



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
