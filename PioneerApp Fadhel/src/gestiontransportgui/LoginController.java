/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransportgui;

import DB.DataBase;
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
import gestiontransportgui.JavaMail;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;



/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class LoginController implements Initializable {

    private String id;
    @FXML
    private ImageView loginimage;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
         
        Image FrontImg= new Image("/img/hbib.jpg");
      loginimage.setImage(FrontImg);
        // TODO
    }    
    
    
    public void SetCin(String cin)
    {
        this.id=cin;
    }
    
  public void Afficher()throws IOException, SQLException 
  {
      /* try {
            JavaMail.SendMail("kais.bouafif@esprit.tn","appstart");
        } catch (Exception ex) {
            Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
        }*/
       //   DataBase mdb = new DataBase();
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
            
            
            
                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("Transport.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               TransportController apc = loader.getController();
                                              
                                               apc.Setid(id);
                                              
                                            loginimage.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                           }    
  }
    
    
    
      public void  afficherparent(ActionEvent event) throws IOException, SQLException {
   
           
       /* try {
            JavaMail.SendMail("kais.bouafif@esprit.tn","appstart");
        } catch (Exception ex) {
            Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
        }*/
       //   DataBase mdb = new DataBase();
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
            
            
            
                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("Transport.fxml"));

                                                     
                                           try {
                                               javafx.scene.Parent root;
                                               root = loader.load();
                                               TransportController apc = loader.getController();
                                              
                                               apc.Setid(id);
                                              
                                            loginimage.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                           }                         
       /*Parent tableViewParent = FXMLLoader.load(getClass().getResource("Transport.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);
        TransportController apc = tableViewParent.getcon
        //This line gets the Stage information
        Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
        
        window.setScene(tableViewScene);
        window.show();*/
            
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
    
