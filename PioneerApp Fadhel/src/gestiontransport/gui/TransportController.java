/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.gui;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class TransportController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @FXML
     private ImageView loginimage2;
    private String id;
    private String id2="";
    @Override
    public void initialize(URL url, ResourceBundle rb) {
     //    Image FrontImg= new Image("/img/hbib.jpg");
     // loginimage2.setImage(FrontImg);
        // TODO
        id2=id;
    }    
    
    public  void Setid(String id)
    {
        this.id=id;
    }
     public  void Setid2(String id2)
    {
        this.id2=id2;
    }
    
      public void  afficherco(ActionEvent event) throws IOException {
    id2=id.substring(0,id.length());
           System.out.println(id2);
           
    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("Covoiturage.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               CovoiturageController apc = loader.getController();
                                              
                                               apc.Setid2(id2);
                                              
                                            loginimage2.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                           }
            
        } 
      
      
      public void  afficherbus(ActionEvent event) throws IOException {
          id2=id.substring(0,id.length());
           System.out.println(id2);
    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("BusInscrit.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               BusInscritController apc = loader.getController();
                                              
                                               apc.Setid2(id2);
                                              
                                            loginimage2.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                           }        
            
        }
      
        public void  retour(ActionEvent event) throws IOException {
          
          
          
       Parent tableViewParent = FXMLLoader.load(getClass().getResource("Login.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);
        
        //This line gets the Stage information
        Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
        
        window.setScene(tableViewScene);
        window.show();
            
        } 
      
      
}
