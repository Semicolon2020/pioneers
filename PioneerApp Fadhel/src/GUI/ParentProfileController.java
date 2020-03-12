/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Enfant;
import Entities.Parent;
import Entities.Tuteur;
import Service.ServiceEnfant;
import Service.ServiceParent;
import Service.ServiceTuteur;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
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
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
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
public class ParentProfileController implements Initializable {

    ObservableList<String> listComboEtat= FXCollections.observableArrayList("Marié(e)","Veuf(ve)","Divorcé(e)");
    ObservableList<String> listCombo= FXCollections.observableArrayList("Femme","Homme");
    private String cin;
    private File photoFile;
    private String photopath;
    private String photopathEnfant;
    ObservableList<Enfant> enfantlist =FXCollections.observableArrayList();
    ObservableList<String> listeSexeEnf= FXCollections.observableArrayList("Fille","Garçon");
    ObservableList<String> listeAgeEnf= FXCollections.observableArrayList("3","4","5");
    private int id_e;
    private File photoFileEnf;
    
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
    private TableView<Enfant> EnfantTableView;
    @FXML
    private TableColumn<Enfant,String> nomTabEnf;
    @FXML
    private TableColumn<Enfant,String> prenomTabEnf;
    @FXML
    private TableColumn<Enfant,String> ageTabEnf;
    @FXML
    private TableColumn<Enfant,String> sexeTabEnf;
    @FXML
    private ImageView pdpEnfant;
    @FXML
    private TextField nomModifEnf;
    @FXML
    private TextField prenomModifEnf;
    @FXML
    private ComboBox<String> comboSexeEnf;
    @FXML
    private ComboBox<String> comboAgeEnf;
    @FXML
    private ImageView PhotoEnfant;
    @FXML
    private ImageView kidhat;
    @FXML
    private ImageView validbtnEnf;
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
        PhotoEnfant.setImage(new Image("/Image/photobtn.png"));
        kidhat.setImage(new Image("/Image/kidHat-8.png"));
        validbtnEnf.setImage(new Image("/Image/validerbtn.png"));
        bgimg.setImage(new Image("/Image/bgmain.png"));
     
    }   
    
     public  ObservableList<Enfant> GetTableEnfant()
    {
        Service.ServiceEnfant se= new ServiceEnfant();
        List<Enfant> arr=new ArrayList<>();
        
        ObservableList<Enfant> Enfantlist =FXCollections.observableArrayList();
        
        try {
            arr=se.readParent(cin);
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i =0 ; i<arr.size();i++)
        {
           
            
            Enfantlist.add(new Enfant(arr.get(i).getId_e(),arr.get(i).getNom(),arr.get(i).getPrenom(),arr.get(i).getSexe(),arr.get(i).getCin_p(),arr.get(i).getAge()));
        }
        
        return Enfantlist;
    }
    
    
     public void SetCin(String cin )
    {
        this.cin =cin;
        
         Parent r= new Parent();
            r.setCin(cin);
           
       ServiceParent sr= new ServiceParent();
       
        try { 
            r=sr.read(r);
        } catch (SQLException ex) {
            Logger.getLogger(ResponsableMainController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        photopath=r.getPhoto();
        pdp.setImage(new Image(r.getPhoto()));  
        cinTextField.setText(r.getCin());
        nomTextField.setText(r.getNom());
        prenomTextField.setText(r.getPrenom());
        mailTextField.setText(r.getEmail());
        tlfTextField.setText(r.getNum_tel());
        mdpTextField.setText(r.getPassword());   
        photo.setVisible(true); /// show button to select new profile pic 
        //PhotoEnfant.setVisible(true);
        comboxSex.setItems(listCombo);
        comboetat.setItems(listComboEtat);
        
        comboetat.setValue(r.getEtat_civil());
        comboxSex.setValue(r.getSexe());
        
         
        ageTabEnf.setCellValueFactory(new PropertyValueFactory<>("age"));
        nomTabEnf.setCellValueFactory(new PropertyValueFactory<>("nom"));
        prenomTabEnf.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        sexeTabEnf.setCellValueFactory(new PropertyValueFactory<>("sexe"));
        
        enfantlist=GetTableEnfant();
        EnfantTableView.setItems(enfantlist);
        
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
            photopath="file:/D:/programs/wamp64/www/Pioneers/images/"+photoFile.getName();
            
            
            
            //file:/D:/programs/wamp64/www/Pioneers/images/image4.jpeg
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

             Parent r= new Parent(cinTextField.getText(), nomTextField.getText(), prenomTextField.getText(), mailTextField.getText() , comboxSex.getValue(), mdpTextField.getText(), tlfTextField.getText(), comboetat.getValue(),photopath);
             ServiceParent  se=new ServiceParent();
             
             try {
                 se.updateProfile(r);
             } catch (SQLException ex) {
                 Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
             }
             
               FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("ParentProfile.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ParentProfileController apc = loader.getController();
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
                                                     .getResource("ParentMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ParentMainController apc = loader.getController();
                                               apc.setCin(cin);
                                              
                                            cinTextField.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
        
    }


    @FXML
    private void SelectEnfantTableViewAction(MouseEvent event) {
         Enfant enf = EnfantTableView.getSelectionModel().getSelectedItem();
                ServiceEnfant se=new ServiceEnfant();
                
        try {
            pdpEnfant.setImage(new Image(se.read(enf).getPhoto()));
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        nomModifEnf.setText(enf.getNom());
        prenomModifEnf.setText(enf.getPrenom());
        
        PhotoEnfant.setVisible(true); /// show button to select new prfile pic 
        
        comboAgeEnf.setItems(listeAgeEnf);
        comboSexeEnf.setItems(listeSexeEnf);
        
        id_e=enf.getId_e();
        System.out.println(id_e);
        comboAgeEnf.setValue(enf.getAge());
        comboSexeEnf.setValue(enf.getSexe());
        
    }

    @FXML
    private void selectNewpdpEnfant(MouseEvent event) {
        
        JFileChooser file = new JFileChooser();
        file.setCurrentDirectory(new File(System.getProperty("user.home")));
        FileNameExtensionFilter filter = new FileNameExtensionFilter("*.Images","jpg","png","jpeg");
        file.addChoosableFileFilter(filter);
        int result = file.showSaveDialog(null);
        if(result== JFileChooser.APPROVE_OPTION)
        {
             photoFileEnf = file.getSelectedFile();
            
    
           photopathEnfant="file:/D:/programs/wamp64/www/Pioneers/images/"+photoFileEnf.getName();
            
            
            
            //file:/D:/programs/wamp64/www/Pioneers/images/image4.jpeg
           
            
          Image  image = new Image(photoFileEnf.toURI().toString(),270,280,true,true); 
           // imagepdp=new ImageView(image);
            pdpEnfant.setImage(image);
            pdpEnfant.setFitHeight(270);
           pdpEnfant.setFitHeight(280);
          pdpEnfant.setPreserveRatio(true);
          
        }
        
    }

    @FXML
    private void ModifierEnf(MouseEvent event) {
        
         if( comboAgeEnf.getValue()==null  || comboSexeEnf.getValue()==null || comboSexeEnf.getValue()==null ||nomModifEnf.equals("") || prenomModifEnf.equals("")|| pdpEnfant.getImage() ==null)
        {
            
            labelerrenf.setVisible(true);
          
        }
         else
         {
             Enfant e = new Enfant(id_e,nomModifEnf.getText(),prenomModifEnf.getText(),comboSexeEnf.getValue(),cin,comboAgeEnf.getValue(),photopathEnfant);
             
             ServiceEnfant se=new ServiceEnfant();
                e.setFile(photoFileEnf);
             try {
                 se.update(e);
             } catch (SQLException ex) {
                 Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
             }
             
               FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("ParentProfile.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ParentProfileController apc = loader.getController();
                                              apc.SetCin(cin);
                                              
                                            prenomModifEnf.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
         }
    }
}
