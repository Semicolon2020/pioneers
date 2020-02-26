/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.pioneers.Entite.Cours;
import com.pioneers.IService.ICoursService;
import com.pioneers.Service.ServiceCours;
import com.pioneers.Utils.ConnectionBase;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javax.naming.spi.DirStateFactory.Result;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class CoursadminController implements Initializable {
    @FXML
    private TextField tutadd;
     @FXML
    private TextField searchbar;
     @FXML
    private TextField titreadd;
      @FXML
    private TextField dateadd;
    @FXML
    private Button misC;
    @FXML
    private Button ajouterButton;
    @FXML
    private Button afficheC;
    @FXML
    private TableColumn<Cours,Integer> id_c;
    @FXML
    private TableColumn<Cours, String> tuteur;
    @FXML
    private TableColumn<Cours, String> titre;
    @FXML
    private TableColumn<Cours, String> date;
    @FXML
    private TableView<Cours> tab;
        
          private void AfficherAll() {

        annonceService = new ServiceCours();
        oblist = FXCollections.observableArrayList(es.getAll());

        ObservableList observableList = FXCollections.observableArrayList(oblist);
        tab.setItems(observableList);
        titre.setCellValueFactory(new PropertyValueFactory<>("titre"));
        tuteur.setCellValueFactory(new PropertyValueFactory<>("tuteur"));
        date.setCellValueFactory(new PropertyValueFactory<>("date"));
       id_c.setCellValueFactory(new PropertyValueFactory<>("id_c"));
       

}
private ICoursService annonceService;
    /**
     * Initializes the controller class.
     */
    ObservableList<Cours> oblist = FXCollections.observableArrayList();
     ServiceCours es=new ServiceCours();
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            Connection con =ConnectionBase.getInstance().getCnx();
            
            ResultSet rs = con.createStatement().executeQuery("select * from cours");
          while(rs.next()){
          oblist.add(new Cours(rs.getInt("id_c"),rs.getString("titre"),rs.getString("date"),rs.getString("tuteur")));}
        } catch (SQLException ex) {
            Logger.getLogger(CoursadminController.class.getName()).log(Level.SEVERE, null, ex);
        }
          id_c.setCellValueFactory(new PropertyValueFactory<>("id_c"));
            tuteur.setCellValueFactory(new PropertyValueFactory<>("tuteur"));
            titre.setCellValueFactory(new PropertyValueFactory<>("titre"));
            date.setCellValueFactory(new PropertyValueFactory<>("date"));
            tab.setItems(oblist);
        
    }    
    
   @FXML
    public void ajouterGC(ActionEvent actionEvent) throws SQLException{
        String sql= "Insert into cours Values (null,'"+titre+"','"+date+"','"+tuteur+"');";
        String titre =titreadd.getText();
        String date =dateadd.getText();
        String tuteur = tutadd.getText();
         ServiceCours sp = new ServiceCours();
            Cours p = new Cours(1, titre, date,tuteur);
            sp.addCours(p);
        
            
        
       
    
}

@FXML
public void SupprimerC(ActionEvent actionEvent) {
        annonceService = new ServiceCours();
        int index = tab.getSelectionModel().getSelectedItem().getId_c();
        //System.out.println(index);
        annonceService.deleteCours(index);
        AfficherAll();
            }
        }


         
      
         






