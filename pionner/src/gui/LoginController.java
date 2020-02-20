/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import javafx.scene.image.Image;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.scene.image.ImageView;




/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class LoginController implements Initializable {

    
    @FXML
    private ImageView loginimage;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
         
        Image FrontImg= new Image("/img/login.jpg");
      loginimage.setImage(FrontImg);
        // TODO
    }    
  
      public void  afficherparent(ActionEvent event) throws IOException {
   
          
       Parent tableViewParent = FXMLLoader.load(getClass().getResource("Parent.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);
        
        //This line gets the Stage information
        Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
        
        window.setScene(tableViewScene);
        window.show();
            
        } 
      
       public void  afficheradmin(ActionEvent event) throws IOException {
   
          
       Parent tableViewParent = FXMLLoader.load(getClass().getResource("Admin.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);
        
        //This line gets the Stage information
        Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
        
        window.setScene(tableViewScene);
        window.show();
            
        } 
        
        
    
}
    
