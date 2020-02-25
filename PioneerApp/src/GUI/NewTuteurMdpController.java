/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Tuteur;
import Service.ServiceTuteur;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class NewTuteurMdpController implements Initializable {

    private String Tcin;
    @FXML
    private TextField NewMdp;
    @FXML
    private ImageView bgimage;
    @FXML
    private ImageView valider;
    @FXML
    private Label labelerror;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
       NewMdp.setText(Tcin);
       bgimage.setImage(new Image("/Image/NewTuteur-8.png"));
       valider.setImage(new Image("/Image/validerbtn.png"));
       labelerror.setVisible(false);
    } 
    
    public void SetCin(String cin)
    {
        this.Tcin=cin;
    }

  

    @FXML
    private void validerbtnAction(MouseEvent event) {
        if(NewMdp.equals(""))
        {
            labelerror.setVisible(true);
        }
        
        else
        {
            Tuteur t=new Tuteur();
            t.setCin(Tcin);
            t.setPassword(NewMdp.getText());
            Service.ServiceTuteur st= new ServiceTuteur();
            
            try {
                st.updateMdp(t);
            } catch (SQLException ex) {
                Logger.getLogger(NewTuteurMdpController.class.getName()).log(Level.SEVERE, null, ex);
            }
            
            System.out.println("success");
            
        }
    }
           
    
}
