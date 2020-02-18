/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entities.Parent;
import java.io.File;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
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
    
    ObservableList<String> listComboEtat= FXCollections.observableArrayList("Marié(e)","Veuf(ve)","Divorcé(e)");

    ObservableList<String> listCombo= FXCollections.observableArrayList("Femme","Homme");
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
    private TextField pwdText;
    @FXML
    private TextField mailText;
    @FXML
    private TextField tlfText;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        comboboxSexe.setItems(listCombo);
        comboboxEtat.setItems(listComboEtat);
        
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
            File selectedFile = file.getSelectedFile();
            Image image;
            photopath=selectedFile.getAbsolutePath();
            
            image = new Image(selectedFile.toURI().toString(),270,280,true,true); 
           // imagepdp=new ImageView(image);
            imagepdp.setImage(image);
            imagepdp.setFitHeight(270);
           imagepdp.setFitHeight(280);
          imagepdp.setPreserveRatio(true);
          
        }
    }

    @FXML
    private void btnValiderAction(ActionEvent event) {
       
       
        if(comboboxEtat.getValue()==null || comboboxSexe.getValue()==null ||cinText.equals("") || cinText.getLength()!=8 || nomText.equals("") || prenomText.equals("") || tlfText.equals("") || pwdText.equals("") || mailText.equals("") || imagepdp.getImage() ==null)
        {
            System.out.println("Verifier les champs");
        }
        
        else 
        {
            System.out.println("SUCESS");
        }
    }
    
}
