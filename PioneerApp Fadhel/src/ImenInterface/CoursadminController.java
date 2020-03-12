/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenInterface;

import ImenEntite.Cours;
import ImenIService.ICoursService;
import ImenService.ServiceCours;
import DB.DataBase;
import java.io.IOException;
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
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javax.naming.spi.DirStateFactory.Result;


/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class CoursadminController implements Initializable {
    Cours data;
    @FXML
    private TextField tutadd;
     @FXML
    private ImageView tree;
     @FXML
    private TextField titreadd;
      @FXML
    private TextField dateadd;
  
    @FXML
    private AnchorPane tat;
  
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
    @FXML
    private Button ajouterC;
    @FXML
    private Button retour;
    
     private void modifierEval(Cours e){ 
          if(e != null){
                titreadd.setText(e.getTitre());
                 dateadd.setText(e.getDate());
                  tutadd.setText(e.getTuteur());
         
          }
          
        }
        
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
        Image image9=new Image("/ImageImen/tree.GIF");
        tree.setImage(image9);
       
        
        
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
            AfficherAll();
        
            
        
       
    
}

@FXML
public void SupprimerC(ActionEvent actionEvent) {
        annonceService = new ServiceCours();
        int index = tab.getSelectionModel().getSelectedItem().getId_c();
        //System.out.println(index);
        annonceService.deleteCours(index);
        AfficherAll();
            }

@FXML
public void afficher(ActionEvent actionEvent) {
      try {
            Connection con =DataBase.getInstance().getConnection();
            
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
    private void modifier(ActionEvent actionEvent) {
       
        annonceService = new ServiceCours();
         try {
             Cours aa = tab.getSelectionModel().getSelectedItem();
              System.out.println(aa.getId_c()+"551");
           //  int id_c1 = Integer.parseInt(aa.getId_c());
                         
        int id_c1=aa.getId_c();
            String titre = titreadd.getText();
            
            String date = dateadd.getText();
            String tuteur = tutadd.getText();
            
            
           Cours a = new Cours(id_c1,tuteur, date, titre);
            
            annonceService.updateCours(a);
            
            try {
            Connection con =DataBase.getInstance().getConnection();
            
            ResultSet rs = con.createStatement().executeQuery("select * from cours");
          while(rs.next()){
          oblist.add(new Cours(rs.getInt("id_c"),rs.getString("titre"),rs.getString("date"),rs.getString("tuteur")));}
        } catch (SQLException ex) {
            Logger.getLogger(CoursadminController.class.getName()).log(Level.SEVERE, null, ex);
        }
          
            tab.setItems(oblist);
            
            
        }
            
           
         catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
         
         
       


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
        
    
//         try {
//             //int idA = Integer.parseInt(MEid.getText());
//             String titre =titreadd.getText();
//        String date =dateadd.getText();
//        String tuteur = tutadd.getText();
//         ServiceCours sp = new ServiceCours();
//            Cours a = new Cours(1, titre, date,tuteur);
//            
//            
//            
//            annonceService.updateCours(a);
//            
//        }
//            
//           
//         catch (SQLException ex) {
//            System.out.println(ex.getMessage());
//        }
//    }

        


         
      
         






