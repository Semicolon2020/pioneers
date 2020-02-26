/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.pioneers.Entite.Cours;
import com.pioneers.Entite.Livre;
import com.pioneers.Utils.ConnectionBase;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class LivreAdminController implements Initializable {
    @FXML
     private TableView<Livre> tableLA;
    @FXML
    private TableColumn<Livre, Integer> id_l;
    @FXML
    private TableColumn<Livre, String> titre_l;
    @FXML
    private TableColumn<Livre, String> age_l;
    @FXML
    private Button afficherL;
    @FXML
    private Button ajouterL;
    @FXML
    private Button supprimerL;
    @FXML
    private Button misL;
    @FXML
    private Button modifierL;

    /**
     * Initializes the controller class.
     */
    ObservableList<Livre> list = FXCollections.observableArrayList();
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        try {
            Connection con =ConnectionBase.getInstance().getCnx();
            
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
    
}
