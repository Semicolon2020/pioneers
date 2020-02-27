/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Enfant;
import Entities.Parent;
import Service.ServiceEnfant;
import Service.ServiceParent;
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
import javafx.scene.input.InputMethodEvent;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileNameExtensionFilter;
import pioneerapp.JavaMail;

/**
 * FXML Controller class
 *
 * @author Alfa Shel
 */
public class RespoParentApproveController implements Initializable {

    private String cin;
    private int id_e;
    private File photoFile;
    
    @FXML
    private ImageView RespUI;
    //////////Table Parent
    
    @FXML
    private TableColumn<Parent, String> tab_cin;
    @FXML
    private TableColumn<Parent, String> tab_mdp;
    @FXML
    private TableColumn<Parent, String> tab_nom;
    @FXML
    private TableColumn<Parent, String> tab_prenom;
    @FXML
    private TableColumn<Parent, String> tab_tlf;
    @FXML
    private TableColumn<Parent, String> tab_compte;
    @FXML
    private TableColumn<Parent, String> tab_sexe;
    @FXML
    private TableColumn<Parent, String> tab_date;
    @FXML
    private TableColumn<Parent, String> tab_mail;
    @FXML
    private TableView<Parent> table;
    @FXML
    private TableColumn<Parent, String> tab_civil;
    
    
    
    private String Pcin;
    
    ObservableList<Parent> parentlist =FXCollections.observableArrayList();
    @FXML
    private ImageView pdpParent;
    @FXML
    private ImageView pdpEnfant;
    ////////////////////////////
    ////////////////Table Enfant
    @FXML
    private TableColumn<Enfant,String> nomTabEnf;
    @FXML
    private TableColumn<Enfant,String> prenomTabEnf;
    @FXML
    private TableColumn<Enfant,String> ageTabEnf;
    @FXML
    private TableColumn<Enfant,String> sexeTabEnf;
    
    ObservableList<Enfant> enfantlist =FXCollections.observableArrayList();
    @FXML
    private TableView<Enfant> EnfantTableView;
   
    @FXML
    private ImageView validerbtn;
    @FXML
    private ImageView suppbtn;
    @FXML
    private ComboBox<String> comboboxSexe;
    @FXML
    private ComboBox<String> comboboxEtat;
    @FXML
    private ComboBox<String> comboboxCompte;
    
    ObservableList<String> listComboEtat= FXCollections.observableArrayList("Marié(e)","Veuf(ve)","Divorcé(e)");
    ObservableList<String> listCombo= FXCollections.observableArrayList("Femme","Homme");
    ObservableList<String> listetatCompte= FXCollections.observableArrayList("Activé","Désactivé");
    ObservableList<String> listeSexeEnf= FXCollections.observableArrayList("Fille","Garçon");
    ObservableList<String> listeAgeEnf= FXCollections.observableArrayList("3","4","5");
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
    private String photopath;
    @FXML
    private Label labelErr;
    private String etatCompte;
    private String photopathEnfant;
    @FXML
    private ImageView PhotoEnfant;
    @FXML
    private TextField nomModifEnf;
    @FXML
    private TextField prenomModifEnf;
    @FXML
    private ComboBox<String> comboSexeEnf;
    @FXML
    private ComboBox<String> comboAgeEnf;
    @FXML
    private ImageView validbtnEnf;
    @FXML
    private ImageView suppbtnEnf;
    @FXML
    private Label labelerrenf;
    @FXML
    private TextField RechercheText;
    @FXML
    private ImageView parenticon;
    @FXML
    private ImageView tuteuricon;
    @FXML
    private ImageView logouticon;
    @FXML
    private ImageView homeicon;
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
        tab_compte.setCellValueFactory(new PropertyValueFactory<>("etat_compte"));
        tab_civil.setCellValueFactory(new PropertyValueFactory<>("etat_civil"));
        
        ///TabEnf
        
        ageTabEnf.setCellValueFactory(new PropertyValueFactory<>("age"));
        nomTabEnf.setCellValueFactory(new PropertyValueFactory<>("nom"));
        prenomTabEnf.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        sexeTabEnf.setCellValueFactory(new PropertyValueFactory<>("sexe"));
        
        
        parentlist=GetTableParent("");
        table.setItems(parentlist);
        
        
        photo.setVisible(false);
        labelErr.setVisible(false);
         
        RespUI.setImage(new Image("/Image/bgmain.png"));
        RespUI.setSmooth(true);
        RespUI.setPreserveRatio(false);
        photo.setImage(new Image("/Image/photobtn.png"));
        suppbtn.setImage(new Image("/Image/suppbtn.png"));
        validerbtn.setImage(new Image("/Image/validerbtn.png"));
        PhotoEnfant.setImage(new Image("/Image/photobtn.png"));
        validbtnEnf.setImage(new Image("/Image/validerbtn.png"));
        suppbtnEnf.setImage(new Image("/Image/suppbtn.png"));
        parenticon.setImage(new Image("/Image/ParentInterface.png"));
         tuteuricon.setImage(new Image("/Image/tuteurInterface.png"));
         logouticon.setImage(new Image("/Image/logout.png"));
         homeicon.setImage(new Image("/Image/home.png"));
        
    }    
    
    public void SetCinR(String cin)
    {
        this.cin=cin;
    }
    
    ////Fonction ParentTable View
    public  ObservableList<Parent> GetTableParent(String Word)
    {
        Service.ServiceParent sp= new ServiceParent();
        List<Parent> arr=new ArrayList<>();
        
        ObservableList<Parent> parentlist =FXCollections.observableArrayList();
        
        try {
            if(Word.equals("")){arr=sp.readAll();}
            else {arr=sp.readRecherche(Word);}
            
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i =0 ; i<arr.size();i++)
        {
            if(arr.get(i).getEtat_compte().equals("1")){arr.get(i).setEtat_compte("Activé");}
            else{arr.get(i).setEtat_compte("Désactivé");}
            
            parentlist.add(new Parent(arr.get(i).getId(),arr.get(i).getCin(),arr.get(i).getNom(),arr.get(i).getPrenom(),arr.get(i).getSexe(),arr.get(i).getDateEmbauche(),arr.get(i).getEmail(),arr.get(i).getPassword(),arr.get(i).getNum_tel(),arr.get(i).getEtat_compte(),arr.get(i).getEtat_civil()));
        }
        
        return parentlist;
    }
    
    ///Fonction TableView Enfant
    
    public  ObservableList<Enfant> GetTableEnfant()
    {
        Service.ServiceEnfant se= new ServiceEnfant();
        List<Enfant> arr=new ArrayList<>();
        
        ObservableList<Enfant> Enfantlist =FXCollections.observableArrayList();
        
        try {
            arr=se.readParent(Pcin);
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        for(int i =0 ; i<arr.size();i++)
        {
           
            
            Enfantlist.add(new Enfant(arr.get(i).getId_e(),arr.get(i).getNom(),arr.get(i).getPrenom(),arr.get(i).getSexe(),arr.get(i).getCin_p(),arr.get(i).getAge()));
        }
        
        return Enfantlist;
    }
    
    
    
    public void SetCin(String cin)
    {
        this.Pcin=cin;
    }
    public String GetCin()
    {
        return this.Pcin;
    }

    @FXML
    private void SelectParentTableViewAction(MouseEvent event) {
        
        Parent parent = table.getSelectionModel().getSelectedItem();
        System.out.println(parent);
        SetCin(parent.getCin());
        ServiceParent sp=new ServiceParent();
        
        enfantlist=GetTableEnfant();
        EnfantTableView.setItems(enfantlist);
        
        
        try {
             pdpParent.setImage(new Image(sp.read(parent).getPhoto(),270,280,true,true)); 
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
       
        cinTextField.setText(parent.getCin());
        nomTextField.setText(parent.getNom());
        prenomTextField.setText(parent.getPrenom());
        mailTextField.setText(parent.getEmail());
        tlfTextField.setText(parent.getNum_tel());
        mdpTextField.setText(parent.getPassword());   
        photo.setVisible(true); /// show button to select new prfile pic 
        //PhotoEnfant.setVisible(true);
        comboboxCompte.setItems(listetatCompte);
        comboboxEtat.setItems(listComboEtat);
        comboboxSexe.setItems(listCombo);
        comboboxCompte.setValue(parent.getEtat_compte());
        
       if(parent.getEtat_compte().equals("Activé")){ etatCompte="1"; }
       else etatCompte="0";
       
       comboboxSexe.setValue(parent.getSexe());
       comboboxEtat.setValue(parent.getEtat_civil());

        
                
        
        
        
    }
    
    public void Setphotopath(String photopath)
    {
        this.photopath=photopath;
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
    private void ValiderAction(MouseEvent event) {
        
        if( comboboxCompte.getValue()==null || tlfTextField.getLength()!=8 || comboboxEtat.getValue()==null || comboboxSexe.getValue()==null ||cinTextField.equals("") || cinTextField.getLength()!=8 || nomTextField.equals("") || prenomTextField.equals("") || tlfTextField.equals("") || mdpTextField.equals("") || mailTextField.equals("") || photo.getImage() ==null)
        {
            
            labelErr.setVisible(true);
          
        }
        
        else 
        {       
             
           Parent p=new Parent(cinTextField.getText(), nomTextField.getText(), prenomTextField.getText(), mailTextField.getText(), comboboxSexe.getValue(), mdpTextField.getText(), tlfTextField.getText(), comboboxEtat.getValue(),photopath);
                  p.setFile(photoFile);
           if(comboboxCompte.getValue().equals("Activé")){ p.setEtat_compte("1");}
          else p.setEtat_compte("0");
           Service.ServiceParent sp=new ServiceParent();
           
           if(comboboxCompte.getValue().equals("Activé")){
               try {
                   sp.approve(p,Pcin);
                   } catch (SQLException ex) {
                   Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
               }
                   
                   String content="Bienvenue dans notre jardin d'enfants Mr/Md "+p.getNom()+", nous vous souhaitons la bienvenue ainsi qu'à vos enfant(s)\n" +
"vous pouvez vous connecter à notre plate-forme avec le cin :'"+p.getCin()+"' et mot de passe :'"+p.getPassword()+"' ";
              try {
                      JavaMail.SendMail(p.getEmail(),content);
                   } catch (Exception ex) {
                       Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
                   }
           }
           
           
            try {
                sp.update(p,GetCin()); 
            } catch (SQLException ex) {
                Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
            }
            
            
                  
                                             FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("RespoParentApprove.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               RespoParentApproveController apc = loader.getController();
                                              
                                              
                                            table.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
                   
                   
               
                
                
            
           
    }
        
    }

    @FXML
    private void suppAction(MouseEvent event) {
        Parent p=new Parent(cinTextField.getText(), nomTextField.getText(), prenomTextField.getText(), mailTextField.getText(), comboboxSexe.getValue(), mdpTextField.getText(), tlfTextField.getText(), comboboxEtat.getValue(),photopath);
           Service.ServiceParent sp=new ServiceParent();
           
        try {
            sp.delete(p);
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
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
    private void selectNewpdp(MouseEvent event) {
        
        JFileChooser file = new JFileChooser();
        file.setCurrentDirectory(new File(System.getProperty("user.home")));
        FileNameExtensionFilter filter = new FileNameExtensionFilter("*.Images","jpg","png","jpeg");
        file.addChoosableFileFilter(filter);
        int result = file.showSaveDialog(null);
        if(result== JFileChooser.APPROVE_OPTION)
        {
             photoFile = file.getSelectedFile();
            
            
            Setphotopath(photoFile.getAbsolutePath());
          Image  image = new Image(photoFile.toURI().toString(),270,280,true,true); 
           // imagepdp=new ImageView(image);
            pdpParent.setImage(image);
            pdpParent.setFitHeight(270);
           pdpParent.setFitHeight(280);
          pdpParent.setPreserveRatio(true);
          
        }
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
             photoFile = file.getSelectedFile();
            
    
            photopathEnfant=photoFile.getAbsolutePath();
            
          Image  image = new Image(photoFile.toURI().toString(),270,280,true,true); 
           // imagepdp=new ImageView(image);
            pdpEnfant.setImage(image);
            pdpEnfant.setFitHeight(270);
           pdpEnfant.setFitHeight(280);
          pdpEnfant.setPreserveRatio(true);
          
        }
    }

    

   
    @FXML
    private void deleteenfantAction(MouseEvent event) {
        
        
         Service.ServiceEnfant se=new ServiceEnfant();
         Enfant e=new Enfant();
         e.setId_e(id_e);
           
        try {
            se.delete(e);
        } catch (SQLException ex) {
            Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
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
    private void ModifierEnf(MouseEvent event) {
         if( comboAgeEnf.getValue()==null  || comboSexeEnf.getValue()==null || comboboxSexe.getValue()==null ||nomModifEnf.equals("") || prenomModifEnf.equals("")|| pdpEnfant.getImage() ==null)
        {
            
            labelerrenf.setVisible(true);
          
        }
         else
         {
             Enfant e = new Enfant(id_e,nomModifEnf.getText(),prenomModifEnf.getText(),comboSexeEnf.getValue(),Pcin,comboAgeEnf.getValue(),photopathEnfant);
             
             ServiceEnfant se=new ServiceEnfant();
             
             try {
                 se.update(e);
             } catch (SQLException ex) {
                 Logger.getLogger(RespoParentApproveController.class.getName()).log(Level.SEVERE, null, ex);
             }
             
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
         
    }

    @FXML
    private void RechercheAction(KeyEvent event) {
        
        parentlist=GetTableParent(RechercheText.getText());
        table.setItems(parentlist); 
    }

    @FXML
    private void InterfaceTuteur(MouseEvent event) {
        
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
    private void logout(MouseEvent event) {
        
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
    private void MainInterfaceAction(MouseEvent event) {
        
        FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("ResponsableMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ResponsableMainController apc = loader.getController();
                                               apc.setCin(cin);
                                              
                                            RespUI.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }
    
    

        

}

