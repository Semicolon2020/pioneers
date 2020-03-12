/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenInterface;

import ImenEntite.Cours;
import ImenEntite.Livre;
import ImenIService.ILivreService;
import ImenService.ServiceCours;
import ImenService.ServiceLivre;
import DB.DataBase;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
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
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class LivreAdminController implements Initializable {
    
     @FXML
    private TextField titliv;
     @FXML
    private TextField agel;
    @FXML
     private TableView<Livre> tableLA;
    @FXML
    private TableColumn<Livre, Integer> id_l;
    @FXML
    private TableColumn<Livre, String> titre_l;
    @FXML
    private TableColumn<Livre, Integer> age_l;
    @FXML
    private Button ajouterL;
    @FXML
    private Button supprimerL;
    @FXML
    private Button modifierL;
    private ILivreService liv;
     private void AfficherAll() {

        liv = new ServiceLivre();
        list = FXCollections.observableArrayList(es.getAll());

        ObservableList observableList = FXCollections.observableArrayList(list);
        tableLA.setItems(observableList);
        id_l.setCellValueFactory(new PropertyValueFactory<>("id_l"));
        titre_l.setCellValueFactory(new PropertyValueFactory<>("titre_l"));
        age_l.setCellValueFactory(new PropertyValueFactory<>("age"));
       
       

}

    /**
     * Initializes the controller class.
     */
    ObservableList<Livre> list = FXCollections.observableArrayList();
    ServiceLivre es = new ServiceLivre();
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        try {
            Connection con =DataBase.getInstance().getConnection();
            
            ResultSet rs = con.createStatement().executeQuery("select * from Livre");
            while(rs.next()){
                list.add(new Livre(rs.getInt("id_l"),rs.getString("titre_l"),rs.getInt("age")));}
             } catch (SQLException ex) {
            Logger.getLogger(LivreAdminController.class.getName()).log(Level.SEVERE, null, ex);
        }
            id_l.setCellValueFactory(new PropertyValueFactory<>("id_l"));
            titre_l.setCellValueFactory(new PropertyValueFactory<>("titre_l"));
            age_l.setCellValueFactory(new PropertyValueFactory<>("age"));
            
            tableLA.setItems(list);
       
    }    
   
    @FXML
    public void addL(ActionEvent actionEvent) throws SQLException{
        String sql= "Insert into livre Values (null,'"+titre_l+"','"+age_l+"');";
        String titre =titliv.getText();
        int age =Integer.parseInt(agel.getText());
       
         ServiceLivre sl = new ServiceLivre();
            Livre l = new Livre(1,titre,age);
            sl.addLivre(l);
            AfficherAll();
        
            }
     @FXML
public void supp(ActionEvent actionEvent) {
        liv = new ServiceLivre();
        int index = tableLA.getSelectionModel().getSelectedItem().getId_l();
        //System.out.println(index);
        liv.deleteLivre(index);
        AfficherAll();
            }

   @FXML

        public void retourAction(ActionEvent actionEvent) throws IOException{
        Parent view2 = FXMLLoader.load(getClass().getResource("Admin.fxml")); 
        Scene scene2 = new Scene(view2);
        Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
        window.setScene(scene2);
        window.show();
        }
   
}
