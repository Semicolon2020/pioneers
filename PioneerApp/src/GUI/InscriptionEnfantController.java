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
import javafx.scene.input.MouseEvent;
import javax.swing.JFileChooser;
import javax.swing.SpringLayout;
import javax.swing.filechooser.FileNameExtensionFilter;
import pioneerapp.JavaMail;

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
    
    private String EmailText;
    private String mail;
    @FXML
    private ImageView attendezimg;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        comboboxSexe.setItems(listCombo);
        ComboboxAge.setItems(listComboAge);
        
      Image FrontImg= new Image("/Image/Attendezimg.png");
      attendezimg.setImage(FrontImg);
      attendezimg.setVisible(false);
     
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
    
    public void SetEmailText(String text)
    {
        EmailText=text;
    }
    
    public void Setmail(String mail)
    {
        this.mail=mail;
    }

    @FXML
    private void validerEAction(ActionEvent event) {
        
                if(comboboxSexe.getValue()==null || NomText.equals("") || prenomText.equals("") || imagepdpE.getImage() ==null || ComboboxAge.getValue()==null)
                {
                     labelErreur.setVisible(true);
                     attendezimg.setVisible(false);
                                     
                }
                else
                {
                    
                    
                        EmailText+="Enfant: "+NomText.getText()+" "+prenomText.getText()+"\n"+"Age: "+ComboboxAge.getValue()+"\n"+ "Sexe: "+comboboxSexe.getValue()+"\n \n \n ";
                            
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
                                    apc.SetEmailText(EmailText);
                                    apc.Setmail(mail);
                                     prenomText.getScene().setRoot(root);
                                    } catch (IOException ex) {
                                        Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                    }
                        
                                }
                                
                                else
                                {
                                   
                                  
                                      
                                            try {
                                                JavaMail.SendMail(mail,EmailText);
                                            } catch (Exception ex) {
                                                Logger.getLogger(InscriptionEnfantController.class.getName()).log(Level.SEVERE, null, ex);
                                            }
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

    @FXML
    private void validerPressed(MouseEvent event) {
        attendezimg.setVisible(true); 
    }


    
    
}
