/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Responsable;
import ImenInterface.AdminController;
import gestiontransport.gui.AdminController1;
import MariemInterface.ArecController;
import Service.ServiceEnfant;
import Service.ServiceParent;
import Service.ServiceResponsable;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class ResponsableMainController implements Initializable {

    
    
    public String cin;
    @FXML
    private ImageView RespUI;
    @FXML
    private ImageView ParentIcon;
    @FXML
    private ImageView tuteuricon;
    @FXML
    private ImageView logout;
    @FXML
    private Label labelNbrEnf;
    @FXML
    private PieChart piechart;
    @FXML
    private ImageView Homeicon;
    @FXML
    private Label RespName;
    @FXML
    private ImageView nbrenfimg;
    @FXML
    private ImageView msgbtnimg;
    @FXML
    private ImageView profileChange;
    @FXML
    private ImageView LoisirsInterface;
    @FXML
    private ImageView transpInterface;
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
            
        
        RespUI.setImage( new Image("/Image/bgmain.png"));
        RespUI.setSmooth(true);
        //RespUI.setPreserveRatio(false);
        
        ParentIcon.setImage(new Image("/Image/ParentInterface.png"));
        tuteuricon.setImage(new Image("/Image/tuteurInterface.png"));
        logout.setImage(new Image("/Image/logout.png"));
        Homeicon.setImage(new Image("/Image/home.png"));
        nbrenfimg.setImage(new Image("/Image/nbEnf-8.png"));     
        msgbtnimg.setImage(new Image("/Image/RecParent-8.png"));  
        profileChange.setImage(new Image("/Image/profiileicon-8.png")); 
        LoisirsInterface.setImage(new Image("/Image/AdminIcon-8.png")); 
        transpInterface.setImage(new Image("/Image/transpIcon-8.png")); 
        
        Service.ServiceEnfant se=new ServiceEnfant();
        try {
            labelNbrEnf.setText(labelNbrEnf.getText()+se.NombreEnfInscri());
        } catch (SQLException ex) {
            Logger.getLogger(ResponsableMainController.class.getName()).log(Level.SEVERE, null, ex);
        }
             
        ////stats
        
        ServiceParent sp=new ServiceParent();
        try {
          List<Integer> stat=   sp.StatSexe();
           ObservableList<PieChart.Data> piechartdata= FXCollections.observableArrayList(new PieChart.Data("Femme",stat.get(1)),
                                                                                         new PieChart.Data("Homme",stat.get(2)));
           piechart.setData(piechartdata);
          
        } catch (SQLException ex) {
            Logger.getLogger(ResponsableMainController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
       
        
        
        
        
                
      
    }    
    
    
    public void setCin(String cin)
    {
       this.cin=cin;
        Responsable r= new Responsable();
            r.setCin(cin);
           
       ServiceResponsable sr= new ServiceResponsable();
       
        try {
            RespName.setText("Mr/Md "+sr.readUser(r).getNom()+" "+sr.readUser(r).getPrenom());
        } catch (SQLException ex) {
            Logger.getLogger(ResponsableMainController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
    
    public String getCin()
    {
        return this.cin;
    }

    

    @FXML
    private void SwitchToParentApp(MouseEvent event) {
        
                                      FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("RespoParentApprove.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               RespoParentApproveController apc = loader.getController();
                                               apc.SetCinR(cin);

                                              
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }

    @FXML
    private void tuteurinterfaceSwitch(MouseEvent event) {
        
                                                FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("InscriptionTuteur.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               InscriptionTuteurController apc = loader.getController();
                                              apc.SetCinR(cin);
                                              
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }

    @FXML
    private void logoutAction(MouseEvent event) {
        
                                                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("Login.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               LoginController apc = loader.getController();
                                              
                                              
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }

    @FXML
    private void AffReclamation(MouseEvent event) {
        
        
                                                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/MariemInterface/Arec.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ArecController apc = loader.getController();
                                               apc.SetCin(cin);
                                              
                                                 
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
        
    }

    @FXML
    private void profileChangeAction(MouseEvent event) {
        
        
                                                    FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("ResponsableProfile.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ResponsableProfileController apc = loader.getController();
                                               apc.SetCin(cin);
                                              
                                                 
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }

    @FXML
    private void LoisirsInterfaceAction(MouseEvent event) {
        
                                        FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/ImenInterface/Admin.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               AdminController apc = loader.getController();
                                               apc.SetCin(cin);
                                              
                                                 
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }

    @FXML
    private void transpInterfaceAction(MouseEvent event) {
        
                        Stage stage = null;                                
      try {    
        Parent root = FXMLLoader.load(getClass().getResource("/gestiontransport.gui/Admin.fxml"));
          Scene scene = new Scene(root);
        //scene.getStylesheets().add("Styles.css");
        stage.setTitle("Transport");
        stage.setScene(scene);
        stage.show(); } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
    }
    
}
