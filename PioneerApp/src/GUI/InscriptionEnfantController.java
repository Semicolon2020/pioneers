/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Enfant;
import Service.ServiceEnfant;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileNameExtensionFilter;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class InscriptionEnfantController implements Initializable {

    private String photopath;
    private int nbrE;
    private int Counter=1;
    ObservableList<String> listComboAge= FXCollections.observableArrayList("3","4","5");
    private String cin;
    ObservableList<String> listCombo= FXCollections.observableArrayList("Fille","Garçon");
    @FXML
    private Button Photopdp;
    @FXML
    private TextField NomText;
    @FXML
    private TextField prenomText;
    @FXML
    private ComboBox<String> comboboxSexe;
    @FXML
    private ComboBox<String> ComboboxAge;
    @FXML
    private ImageView imagepdpE;
    @FXML
    private Button ValiderE;
    @FXML
    private Label labelErreur;
    @FXML
    private Label labelnbrE;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        comboboxSexe.setItems(listCombo);
        ComboboxAge.setItems(listComboAge);
    }    

    @FXML
    private void photopdpAction(ActionEvent event) {
        
        JFileChooser file = new JFileChooser();
        file.setCurrentDirectory(new File(System.getProperty("user.home")));
        FileNameExtensionFilter filter = new FileNameExtensionFilter("*.Images","jpg","png","jpeg");
        file.addChoosableFileFilter(filter);
        int result = file.showSaveDialog(null);
        if(result== JFileChooser.APPROVE_OPTION)
        {
            File selectedFile = file.getSelectedFile();
            Image image;
            photopath=selectedFile.getAbsolutePath();
            
            image = new Image(selectedFile.toURI().toString(),270,280,true,true); 
           // imagepdp=new ImageView(image);
            imagepdpE.setImage(image);
            imagepdpE.setFitHeight(270);
           imagepdpE.setFitHeight(280);
          imagepdpE.setPreserveRatio(true);
          
        }
    }
    
    public void SetCin(String cin)
    {
        this.cin=cin;
    }
    private void SetCounter(int c)
    {
        Counter=c;
    }
    
    public void SetnbrE(String nbr)
    {
        this.nbrE=Integer.parseInt(nbr);
    }
    public void SetnbrEint(int nbr)
    {
        this.nbrE=nbr;
    }
    public void SetlabelAff(int nbr,int counter)
    {
        labelnbrE.setText(labelnbrE.getText()+"  "+counter+"/"+nbr);
    }
    

    @FXML
    private void validerEAction(ActionEvent event) {
        
                if(comboboxSexe.getValue()==null || NomText.equals("") || prenomText.equals("") || imagepdpE.getImage() ==null || ComboboxAge.getValue()==null)
                {
                     labelErreur.setVisible(true);
                }
                else
                {
                      //  Enfant(String nom, String prenom, String sexe, String cin_p, String age)
                            
                         Enfant e=new Enfant(NomText.getText(),prenomText.getText(),comboboxSexe.getValue(),cin,ComboboxAge.getValue(),photopath);
                         Service.ServiceEnfant se=new ServiceEnfant();
                          try {
                                se.ajouter(e);
                               }      catch (SQLException ex) {
                                                             Logger.getLogger(InscriptionEnfantController.class.getName()).log(Level.SEVERE, null, ex);
                                                         }  
           
                                if(Counter < nbrE)
                                {
                                    Counter++;
                                 
                        
                                 FXMLLoader loader = new FXMLLoader
                                (getClass()
                                 .getResource("InscriptionEnfant.fxml"));
                                  javafx.scene.Parent root;
                                 try {
                                    root = loader.load();
                                  InscriptionEnfantController apc = loader.getController();
                                     apc.SetCin(cin);
                                    apc.SetnbrEint(nbrE);
                                    apc.SetCounter(Counter);
                                    apc.SetlabelAff(nbrE, Counter);
                                     prenomText.getScene().setRoot(root);
                                    } catch (IOException ex) {
                                        Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                    }
                        
                                }
                                
                                else
                                {
                                    FXMLLoader loader = new FXMLLoader
                                (getClass()
                                 .getResource("Login.fxml"));
                                  javafx.scene.Parent root;
                                 try {
                                    root = loader.load();
                                  LoginController apc = loader.getController();
                                     
                                     prenomText.getScene().setRoot(root);
                                    } catch (IOException ex) {
                                        Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                    }
                                }
                        
                        
                }
                

    }
    
}
