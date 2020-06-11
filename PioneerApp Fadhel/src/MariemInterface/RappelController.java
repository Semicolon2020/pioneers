/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemInterface;

import GUI.InscriptionParentController;
import GUI.ParentMainController;
import MariemEntite.Rappel;
import MariemService.ServiceRappel;
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
public class RappelController implements Initializable {
    private String cin;
    @FXML
    private TextField info;
    @FXML
    private Button ajout;
    @FXML
    private ImageView retourImg;
    @FXML
    private ImageView bgimg;
    @FXML
    private TextField text;
    @FXML
    private TextField objet;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        retourImg.setImage(new Image("/Image/retour-8.png"));
        bgimg.setImage(new Image("/Image/bgmain.png"));
    }    

    @FXML
    private void ajoutRappel(ActionEvent event) {
                try {
            ServiceRappel es = new ServiceRappel();
            
            es.ajouter(new Rappel(objet.getText(),info.getText(),text.getText()));
            
            JOptionPane.showMessageDialog(null,"rappel ajoutée");
        } catch (SQLException ex) {
            Logger.getLogger(RappelController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public void SetCin(String cin)
    {
        this.cin = cin;
    }

    @FXML
    private void RetourAction(MouseEvent event) {
        
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
