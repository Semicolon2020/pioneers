/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Parent;
import Entities.Tuteur;
import Service.ServiceParent;
import Service.ServiceTuteur;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Platform;
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
import pioneerapp.JavaMail;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class InscriptionTuteurController implements Initializable {

    
     ObservableList<Tuteur> Tuteurlist =FXCollections.observableArrayList();
     ObservableList<String> listComboEtat= FXCollections.observableArrayList("Marié(e)","Veuf(ve)","Divorcé(e)");
    ObservableList<String> listCombo= FXCollections.observableArrayList("Femme","Homme");
     private String cinR;
     private String cin;
     private String photopath;
     private File photoFile;
    Thread UIChange; 
      
    @FXML
    private TableView<Tuteur> table;
    @FXML
    private TableColumn<Tuteur, String> tab_cin;
    @FXML
    private TableColumn<Tuteur, String> tab_mdp;
    @FXML
    private TableColumn<Tuteur, String> tab_nom;
    @FXML
    private TableColumn<Tuteur, String> tab_prenom;
    @FXML
    private TableColumn<Tuteur, String> tab_tlf;
    @FXML
    private TableColumn<Tuteur, String> tab_sexe;
    @FXML
    private TableColumn<Tuteur, String> tab_date;
    @FXML
    private TableColumn<Tuteur, String> tab_mail;
    @FXML
    private TableColumn<Tuteur, String> tab_civil;
    @FXML
    private ImageView pdptuteur;
    @FXML
    private TextField cinTextField;
    @FXML
    private TextField nomTextField;
    @FXML
    private TextField prenomTextField;
    @FXML
    private TextField tlfTextField;
    @FXML
    private TextField mailTextField;
    @FXML
    private ComboBox<String> combosexe;
    @FXML
    private ComboBox<String> comboEtat;
    @FXML
    private ImageView photo;
    @FXML
    private ImageView ajoutericon;
    @FXML
    private Label labelerreur;
    @FXML
    private ImageView suppicon;
    @FXML
    private ImageView parenticon;
    @FXML
    private ImageView tuteuricon;
    @FXML
    private ImageView homeicon;
    @FXML
    private ImageView bgicon;
    @FXML
    private ImageView homeMain;
    @FXML
    private ImageView LoadSpinner;
    
     


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        tab_cin.setCellValueFactory(new PropertyValueFactory<>("cin"));
        tab_nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        tab_prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        tab_sexe.setCellValueFactory(new PropertyValueFactory<>("sexe"));
        tab_date.setCellValueFactory(new PropertyValueFactory<>("dateEmbauche"));
        tab_mail.setCellValueFactory(new PropertyValueFactory<>("email"));
        tab_mdp.setCellValueFactory(new PropertyValueFactory<>("password"));
        tab_tlf.setCellValueFactory(new PropertyValueFactory<>("num_tel"));
        tab_civil.setCellValueFactory(new PropertyValueFactory<>("etat_civil"));
  
        table.setItems(GetTableParent());
        
        //photo.setVisible(false);
        combosexe.setItems(listCombo);
        comboEtat.setItems(listComboEtat);
        photo.setImage(new Image("/Image/photobtn.png"));
        ajoutericon.setImage(new Image("/Image/ajouter.png"));
        suppicon.setImage(new Image("/Image/suppbtn.png"));
        parenticon.setImage(new Image("/Image/ParentInterface.png"));
        tuteuricon.setImage(new Image("/Image/tuteurInterface.png"));
        homeicon.setImage(new Image("/Image/logout.png"));
        bgicon.setImage(new Image("/Image/bgmain.png"));
        homeMain.setImage(new Image("/Image/home.png"));
        LoadSpinner.setImage(new Image("/Image/Spinner.gif"));
      
        
        combosexe.setItems(listCombo);
        comboEtat.setItems(listComboEtat);
    }  
    
    public void SetCinR(String cinR)
    {
        this.cinR=cinR;
    }
    
    
     public  ObservableList<Tuteur> GetTableParent()
    {
        Service.ServiceTuteur sp= new ServiceTuteur();
        List<Tuteur> arr=new ArrayList<>();
        
        ObservableList<Parent> parentlist =FXCollections.observableArrayList();
        
        try {
            arr=sp.readAll();
            
            
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i =0 ; i<arr.size();i++)
        {

            Tuteurlist.add(new Tuteur(arr.get(i).getId(),arr.get(i).getCin(),arr.get(i).getNom(),arr.get(i).getPrenom(),arr.get(i).getSexe(),arr.get(i).getDateEmbauche(),arr.get(i).getEmail(),arr.get(i).getPassword(),arr.get(i).getNum_tel(),arr.get(i).getEtat_compte(),arr.get(i).getEtat_civil()));
        }
        
        return Tuteurlist;
    }
    
    

    @FXML
    private void SelectTuteurTableViewAction(MouseEvent event) {
        Tuteur tuteur = table.getSelectionModel().getSelectedItem();
        System.out.println(tuteur);
        SetCin(tuteur.getCin());
        ServiceTuteur sp=new ServiceTuteur();
        
        
        
        
        try {
             pdptuteur.setImage(new Image(sp.read(tuteur).getPhoto(),270,280,true,true)); 
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
       
      /*  cinTextField.setText(tuteur.getCin());
        nomTextField.setText(tuteur.getNom());
        prenomTextField.setText(tuteur.getPrenom());
        mailTextField.setText(tuteur.getEmail());
        tlfTextField.setText(tuteur.getNum_tel());
        mdpTextField.setText(tuteur.getPassword());   
        photo.setVisible(true); /// show button to select new prfile pic 
        //PhotoEnfant.setVisible(true);
        combosexe.setItems(listCombo);
        comboEtat.setItems(listComboEtat);*/

    }

    public void SetCin(String cin) {
        this.cin=cin;
    }
    
    public void ActivateSpinner()
    {
     Platform.runLater(()->{
        LoadSpinner.setVisible(true);  
}); 
     
         try {
             Thread.sleep(2000);
         } catch (InterruptedException ex) {
             Logger.getLogger(InscriptionTuteurController.class.getName()).log(Level.SEVERE, null, ex);
         }
    }

    
    @FXML
    private void ajouterTuteur(MouseEvent event) {
       if( tlfTextField.getLength()!=8 || comboEtat.getValue()==null || combosexe.getValue()==null ||cinTextField.equals("") || cinTextField.getLength()!=8 || nomTextField.equals("") || prenomTextField.equals("") || tlfTextField.equals("")  || mailTextField.equals("") || pdptuteur.getImage() ==null)
        {
            labelerreur.setVisible(true);
            LoadSpinner.setVisible(false);
            
           
        }
        else 
        {
             LoadSpinner.setVisible(true);
        }
     
        
    }

    @FXML
    private void Ajouterphoto(MouseEvent event) {
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
            pdptuteur.setImage(image);
            pdptuteur.setFitHeight(270);
           pdptuteur.setFitHeight(280);
          pdptuteur.setPreserveRatio(true);
          
        }
    }

    @FXML
    private void deleteTuteurAction(MouseEvent event) {
        
         Tuteur tuteur = table.getSelectionModel().getSelectedItem();
        System.out.println(tuteur);
        SetCin(tuteur.getCin());
        ServiceTuteur sp=new ServiceTuteur();
        
        
        
        
        try {
             sp.delete(tuteur);
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
         FXMLLoader loader = new FXMLLoader
                        (getClass()
                         .getResource("InscriptionTuteur.fxml"));
            
                javafx.scene.Parent root;
               try {
                   root = loader.load();
                   InscriptionTuteurController apc = loader.getController();
                   
                nomTextField.getScene().setRoot(root);
               } catch (IOException ex) {
                   Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
               }
        
        
        
    }

    @FXML
    private void parentActionInterface(MouseEvent event) {
         FXMLLoader loader = new FXMLLoader
                        (getClass()
                         .getResource("RespoParentApprove.fxml"));
            
                javafx.scene.Parent root;
               try {
                   root = loader.load();
                   RespoParentApproveController apc = loader.getController();
                   apc.SetCinR(cin);
                nomTextField.getScene().setRoot(root);
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
                   
                nomTextField.getScene().setRoot(root);
               } catch (IOException ex) {
                   Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
               }
    }

    @FXML
    private void MainHomeAction(MouseEvent event) {
          FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("ResponsableMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ResponsableMainController apc = loader.getController();
                                              apc.setCin(cinR);
                                              
                                            table.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }

    @FXML
    private void ActivateLoading(MouseEvent event) {
        
           if( tlfTextField.getLength()!=8 || comboEtat.getValue()==null || combosexe.getValue()==null ||cinTextField.equals("") || cinTextField.getLength()!=8 || nomTextField.equals("") || prenomTextField.equals("") || tlfTextField.equals("")  || mailTextField.equals("") || pdptuteur.getImage() ==null)
        {
            labelerreur.setVisible(true);
            LoadSpinner.setVisible(false);
            
           
        }

        else 
        {    
                UIChange=new Thread(this::ActivateSpinner);
                UIChange.start();
                        
                 Random rand = new Random(); 
                
                 String PassRand= rand.nextInt(1000)+nomTextField.getText().toUpperCase()+rand.nextInt(100);                                   
                 Tuteur p=new Tuteur(cinTextField.getText(), nomTextField.getText(), prenomTextField.getText(), mailTextField.getText(), combosexe.getValue(), PassRand, tlfTextField.getText(), comboEtat.getValue(),photopath);
                 p.setFile(photoFile);
                 Service.ServiceTuteur sp=new ServiceTuteur();
           
         String EmailText="Mr/Md "+nomTextField.getText()+" "+prenomTextField.getText()+"\n CIN: "+cinTextField.getText()+"\n Mot de Passe: "+PassRand+"\n Telephone: "+tlfTextField.getText()+"\n \n \n";
           
            try {
                sp.ajouter(p);
                ///Transition interface
                try {
                                                JavaMail.SendMail( mailTextField.getText(),EmailText);
                                            } catch (Exception ex) {
                                                Logger.getLogger(InscriptionEnfantController.class.getName()).log(Level.SEVERE, null, ex);
                                            }
                
                 FXMLLoader loader = new FXMLLoader
                        (getClass()
                         .getResource("InscriptionTuteur.fxml"));
            
                javafx.scene.Parent root;
               try {
                   root = loader.load();
                   InscriptionTuteurController apc = loader.getController();
                   apc.SetCinR(cinR);
                   
                nomTextField.getScene().setRoot(root);
               } catch (IOException ex) {
                   Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
               }
                
           
        
                
                
                
            } catch (SQLException ex) {
               
           }
            
        
    }
        
    }
    
}
