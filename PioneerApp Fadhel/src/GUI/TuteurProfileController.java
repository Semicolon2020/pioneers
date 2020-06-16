/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Responsable;
import Entities.Tuteur;
import Service.ServiceResponsable;
import Service.ServiceTuteur;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileNameExtensionFilter;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class TuteurProfileController implements Initializable {

    
    ObservableList<String> listComboEtat= FXCollections.observableArrayList("Marié(e)","Veuf(ve)","Divorcé(e)");
    ObservableList<String> listCombo= FXCollections.observableArrayList("Femme","Homme");
    private String cin;
    private File photoFile;
    private String photopath;
    
    @FXML
    private ImageView pdp;
    @FXML
    private TextField cinTextField;
    @FXML
    private TextField mdpTextField;
    @FXML
    private TextField nomTextField;
    @FXML
    private TextField prenomTextField;
    @FXML
    private TextField tlfTextField;
    @FXML
    private TextField mailTextField;
    @FXML
    private ImageView photo;
    @FXML
    private ImageView KING;
    @FXML
    private ImageView validerbtn;
    @FXML
    private ImageView retourbtn;
    @FXML
    private ComboBox<String> comboxSex;
    @FXML
    private ComboBox<String> comboetat;
    @FXML
    private Label labelerrenf;
    @FXML
    private ImageView bgimg;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
     
        photo.setImage(new Image("/Image/photobtn.png"));
        KING.setImage(new Image("/Image/king-8.png"));
        validerbtn.setImage(new Image("/Image/validerbtn.png"));
        retourbtn.setImage(new Image("/Image/retour-8.png"));
        bgimg.setImage(new Image("/Image/bgmain.png"));
    }    

    public void SetCin(String cin )
    {
        this.cin =cin;
        
         Tuteur r= new Tuteur();
            r.setCin(cin);
           
       ServiceTuteur sr= new ServiceTuteur();
       
        try { 
            r=sr.read(r);
        } catch (SQLException ex) {
            Logger.getLogger(ResponsableMainController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        photopath=r.getPhoto();
        
                String pdpm ="file:/D:/programs/wamp64/www/Web2.0/INT/PioneersWeb/web/uploads/post/"+r.getPhoto();

        pdp.setImage(new Image(pdpm));  
        cinTextField.setText(r.getCin());
        nomTextField.setText(r.getNom());
        prenomTextField.setText(r.getPrenom());
        mailTextField.setText(r.getEmail());
        tlfTextField.setText(r.getNum_tel());
        mdpTextField.setText(r.getPassword());   
        photo.setVisible(true); /// show button to select new prfile pic 
        //PhotoEnfant.setVisible(true);
        comboxSex.setItems(listCombo);
        comboetat.setItems(listComboEtat);
        
        comboetat.setValue(r.getEtat_civil());
        comboxSex.setValue(r.getSexe());
        
        
        
        
    }
    
    
    @FXML
    private void photoChangeAction(MouseEvent event) {
        
         JFileChooser file = new JFileChooser();
        file.setCurrentDirectory(new File(System.getProperty("user.home")));
        FileNameExtensionFilter filter = new FileNameExtensionFilter("*.Images","jpg","png","jpeg");
        file.addChoosableFileFilter(filter);
        int result = file.showSaveDialog(null);
        if(result== JFileChooser.APPROVE_OPTION)
        {
            
            photoFile = file.getSelectedFile();
            Image image;
           
            photopath=photoFile.getName(); 
            
            
            image = new Image(photoFile.toURI().toString(),270,280,true,true); 
           // imagepdp=new ImageView(image);
            pdp.setImage(image);
            pdp.setFitHeight(270);
           pdp.setFitHeight(280);
          pdp.setPreserveRatio(true);
        
        
    }
        
    }

    @FXML
    private void validerAction(MouseEvent event) {
        
         if( comboetat.getValue()==null || comboxSex.getValue()==null || prenomTextField.equals("")|| pdp.getImage() ==null || mdpTextField.equals("") || mailTextField.equals("") || tlfTextField.equals("")  )
        {
            
            labelerrenf.setVisible(true);
          
        }
         else
         {      // public Responsable(String cin, String nom, String prenom, String email,String sexe, String password, String num_tel,String etat_civil) {

             Tuteur r= new Tuteur(cinTextField.getText(), nomTextField.getText(), prenomTextField.getText(), mailTextField.getText() , comboxSex.getValue(), mdpTextField.getText(), tlfTextField.getText(), comboetat.getValue(),photopath);
             ServiceTuteur  se=new ServiceTuteur();
             
             try {
                 se.updateProfile(r);
             } catch (SQLException ex) {
                 Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
             }
             
               FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("TuteurProfile.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               TuteurProfileController apc = loader.getController();
                                              apc.SetCin(cin);
                                              
                                            comboetat.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
         }
        
    }

    @FXML
    private void RetourAction(MouseEvent event) {
        
                                                     FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("TuteurMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               TuteurMainController apc = loader.getController();
                                               apc.SetCin(cin);
                                              
                                            cinTextField.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }
    
}
