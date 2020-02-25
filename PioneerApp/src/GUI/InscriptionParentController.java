/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Parent;
import Service.ServiceParent;
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
import javafx.scene.control.PasswordField;
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
public class InscriptionParentController implements Initializable {

    @FXML
    private Button btnpdp;
    private String photopath;
    private File photoFile;
    
    ObservableList<String> listComboEtat= FXCollections.observableArrayList("Marié(e)","Veuf(ve)","Divorcé(e)");

    ObservableList<String> listCombo= FXCollections.observableArrayList("Femme","Homme");
    ObservableList<String> listComboNBR= FXCollections.observableArrayList("1","2","3","4");

    @FXML
    private ImageView imagepdp;
    @FXML
    private ComboBox<String> comboboxSexe;
    @FXML
    private ComboBox<String> comboboxEtat;
    @FXML
    private Button btnValider;
    @FXML
    private TextField cinText;
    @FXML
    private TextField nomText;
    @FXML
    private TextField prenomText;
    
    @FXML
    private TextField mailText;
    @FXML
    private TextField tlfText;
    @FXML
    private Label labelErreur;
    @FXML
    private Label labelexiste;
    @FXML
    private PasswordField pawdText;
    @FXML
    private ComboBox<String> nbrE;
    
    private String EmailText;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        comboboxSexe.setItems(listCombo); 
        comboboxEtat.setItems(listComboEtat);
        nbrE.setItems(listComboNBR);
        EmailText="Votre demande d'inscription à notre Jardin d'enfant Pioneers a été bien reçu \n veuillez attendre que nous examinions votre demande \n  ";
    }    

    @FXML
    private void btnpdp(ActionEvent event) {
        
       
        
        JFileChooser file = new JFileChooser();
        file.setCurrentDirectory(new File(System.getProperty("user.home")));
        FileNameExtensionFilter filter = new FileNameExtensionFilter("*.Images","jpg","png","jpeg");
        file.addChoosableFileFilter(filter);
        int result = file.showSaveDialog(null);
        if(result== JFileChooser.APPROVE_OPTION)
        {
             photoFile = file.getSelectedFile();
            Image image;
            photopath=photoFile.getAbsolutePath();
            
            image = new Image(photoFile.toURI().toString(),270,280,true,true); 
           // imagepdp=new ImageView(image);
            System.out.println(photoFile.toURI().toString());
            imagepdp.setImage(image);
            imagepdp.setFitHeight(270);
           imagepdp.setFitHeight(280);
          imagepdp.setPreserveRatio(true);
          
        }
    }

    @FXML
    private void btnValiderAction(ActionEvent event) {
       
        if( tlfText.getLength()!=8|| nbrE.getValue()==null || comboboxEtat.getValue()==null || comboboxSexe.getValue()==null ||cinText.equals("") || cinText.getLength()!=8 || nomText.equals("") || prenomText.equals("") || tlfText.equals("") || pawdText.equals("") || mailText.equals("") || imagepdp.getImage() ==null)
        {
            labelexiste.setVisible(false);
            labelErreur.setVisible(true);
          
        }
        
        else 
        { 
           Parent p=new Parent(cinText.getText(), nomText.getText(), prenomText.getText(), mailText.getText(), comboboxSexe.getValue(), pawdText.getText(), tlfText.getText(), comboboxEtat.getValue(),photopath);
                  p.setFile(photoFile);
           Service.ServiceParent sp=new ServiceParent();
           
           EmailText+="Mr "+nomText.getText()+" "+prenomText.getText()+"\n CIN: "+cinText.getText()+"\n Mot de Passe: "+pawdText.getText()+"\n Telephone: "+tlfText.getText()+"\n \n \n";
           
            try {
                sp.ajouter(p);
                ///Transition interface
                
                 FXMLLoader loader = new FXMLLoader
                        (getClass()
                         .getResource("InscriptionEnfant.fxml"));
            
                javafx.scene.Parent root;
               try {
                   root = loader.load();
                   InscriptionEnfantController apc = loader.getController();
                   apc.SetCin(cinText.getText());
                   apc.SetnbrE(nbrE.getValue());
                   apc.SetlabelAff(Integer.parseInt(nbrE.getValue()), 1);
                   apc.SetEmailText(EmailText);
                   apc.Setmail(mailText.getText());
                imagepdp.getScene().setRoot(root);
               } catch (IOException ex) {
                   Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
               }
                
           
        
                
                
                
            } catch (SQLException ex) {
               labelexiste.setVisible(true);
               labelErreur.setVisible(false);
            }
            
        
    }
    
}

    @FXML
    private void retourLoginAction(ActionEvent event) {
        
        FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("Login.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               LoginController apc = loader.getController();
                                              
                                              
                                            labelErreur.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }
}
