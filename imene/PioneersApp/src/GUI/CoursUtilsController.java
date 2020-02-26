/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.pioneers.Entite.Cours;
import com.pioneers.Utils.ConnectionBase;
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
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class CoursUtilsController implements Initializable {

    @FXML
    private TableView<Cours> tableCU;
    @FXML
    private TableColumn<Cours, String> tuteurU;
    @FXML
    private TableColumn<Cours, String> coursU;
    @FXML
    private TableColumn<Cours, String> dateU;

    /**
     * Initializes the controller class.
     */ObservableList<Cours> oblist = FXCollections.observableArrayList();
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
            tuteurU.setCellValueFactory(new PropertyValueFactory<>("tuteur"));
            coursU.setCellValueFactory(new PropertyValueFactory<>("titre"));
            dateU.setCellValueFactory(new PropertyValueFactory<>("date"));
            tableCU.setItems(oblist);
    }    
    }    

