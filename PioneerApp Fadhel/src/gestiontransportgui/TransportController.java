/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransportgui;

import DB.DataBase;
import GUI.InscriptionParentController;
import GUI.ParentMainController;
import GUI.ResponsableMainController;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
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
     
     
     public void SetEverything(String id) throws SQLException
     {
         
         this.id=id;
         
          Connection  con = DataBase.getInstance().getConnection();
          PreparedStatement pt;
String nom=null,num=null;
      pt = con.prepareStatement("select nom,num_tel,prenom FROM user WHERE cin='"+id+"';");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
            
            nom=rs.getString(1)+rs.getString(3);
            num=rs.getString(2);
            
            }
            
            PreparedStatement pt3;
            String cin=null;
      pt3 = con.prepareStatement("select cin_p FROM busetcov WHERE cin_p='"+id+"';");
            ResultSet rs3 = pt3.executeQuery();
            while (rs3.next()) {
            
            cin=rs3.getString(1);
            
            }
            
            if(cin==null){
            
             Statement stm1= con.createStatement();
       String requeteInsert2 = "INSERT INTO `pionnersapp`.`busetcov` (`nomparent`, `num`,`cin_p`) VALUES ('"+nom+"','"+num+"','"+id+"');";
       stm1.executeUpdate(requeteInsert2);}
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
          
          
          
                                                     FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/GUI/ParentMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ParentMainController apc = loader.getController();
                                              apc.setCin(id);
                                              
                                            loginimage2.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
            
        } 
      
      
}
