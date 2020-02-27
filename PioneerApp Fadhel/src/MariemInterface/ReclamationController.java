/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemInterface;

import GUI.InscriptionParentController;
import GUI.ParentMainController;
import MariemEntite.Reclamation;
import MariemService.ServiceReclamation;
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
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;

/**
 * FXML Controller class
 *
 * @author User
 */
public class ReclamationController implements Initializable {

    private String cin;
    @FXML
    private TextField rec;
    @FXML
    private Button envoyer;
    @FXML
    private ImageView imgR;
    @FXML
    private ImageView retourImg;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        imgR.setImage(new Image("/Image/reclamation.png"));
        retourImg.setImage(new Image("/Image/retour-8.png"));
    }    
    
    public void SetCin(String cin)
    {
        this.cin=cin;
    }
    
    
     @FXML
  public void AjouterReclamation(ActionEvent event)  { 
        try {
            ServiceReclamation es = new ServiceReclamation();
            es.ajouter(new Reclamation(cin,rec.getText()));
            JOptionPane.showMessageDialog(null,"reclamation ajoutée");
        } catch (SQLException ex) {
            Logger.getLogger(ReclamationController.class.getName()).log(Level.SEVERE, null, ex);
        }
}

    @FXML
    private void retourAction(MouseEvent event) {
        
                                         FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/GUI/ParentMain.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               ParentMainController apc = loader.getController();
                                              
                                               apc.setCin(cin);
                                              
                                            retourImg.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }
}
