/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemInterface;

import Entities.Responsable;
import GUI.ResponsableMainController;
import MariemEntite.Reclamation;
import MariemService.ServiceReclamation;
import Service.ServiceResponsable;
//import com.sun.xml.internal.ws.client.sei.ResponseBuilder.Body;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextArea;
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
public class EmailController implements Initializable {

    private String cin;
    private String nom;
    private String prenom;
    
    
    @FXML
    private TextField objet;
    @FXML
    private TextArea message;
    @FXML
    private ImageView envoyBtn;
    @FXML
    private ImageView bgimg;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
      
        envoyBtn.setImage(new Image("/Image/EnvoyerMail-8.png"));  
        bgimg.setImage(new Image("/Image/bgmain.png"));  
    }    

    
    
    public void SetCin(String cin)
    {
        this.cin = cin;
         Responsable r= new Responsable();
            r.setCin(cin);
           
       ServiceResponsable sr= new ServiceResponsable();
       
        try {
            nom=sr.readUser(r).getNom();
            prenom=sr.readUser(r).getPrenom();
        } catch (SQLException ex) {
            Logger.getLogger(ResponsableMainController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
    }

    @FXML
    private void envoyBtnAction(MouseEvent event) {
        
        mail m = new mail();
        
        
        
        try {
            mail.sendMail("jardin.pioneer@gmail.com", message.getText(),objet.getText(),nom,prenom);
        } catch (Exception ex) {
            Logger.getLogger(EmailController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
  }

