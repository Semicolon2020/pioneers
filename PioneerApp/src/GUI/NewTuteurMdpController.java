/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class NewTuteurMdpController implements Initializable {

   private String Tcin;
    @FXML
    private TextField NewMdp;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
       NewMdp.setText(Tcin);
        
    } 
    
    public void SetCin(String cin)
    {
        this.Tcin=cin;
    }
           
    
}
