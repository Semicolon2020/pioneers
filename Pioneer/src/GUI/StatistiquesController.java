/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.Observable;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.CategoryAxis;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.util.Callback;
import pioneer.Entites.Evaluation;
import pioneer.Service.ServiceEvaluation;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class StatistiquesController implements Initializable {

    @FXML
    private BarChart<String,Integer> barchar;
    @FXML
    private CategoryAxis Xaxis;
    
    ServiceEvaluation ser = new ServiceEvaluation();
    
    @FXML
    private Button bAfficher;
    @FXML
    private TableView<Evaluation> table;
    @FXML
    private TableColumn<Evaluation, String> Nom;
    @FXML
    private TableColumn<Evaluation, String> Score;
    @FXML
    private TableColumn<Evaluation, String> Remarque;
    @FXML
    private TableColumn<Evaluation, String> Activite;
    @FXML
    private TableColumn<Evaluation, String> ID;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        XYChart.Series<String , Integer> series  = new XYChart.Series<>();
       
         int j = 0;
         int k =0;
         int f = 0;
        ID.setVisible(false);

         ObservableList<String> items = null;
         ObservableList<Evaluation> moyenneScore = null;
        try {
            items = ser.readAct();
            
        
            moyenneScore = ser.readAllV3();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
        ObservableList<String> list = FXCollections.observableArrayList(items);
         Xaxis.setCategories(list);
        System.out.println(list);
        
        
        for(int i =0 ; i<moyenneScore.size();i++){
         if(moyenneScore.get(i).getActivite().equals(list.get(i))){
         j += moyenneScore.get(i).getScore();
         k++;
         String pres = moyenneScore.get(i).getActivite();
         
         series.getData().add(new XYChart.Data<>(list.get(i), j/k));
         
         }
         
       
         
         barchar.getData().add(series);
    }    
    }
    @FXML
    private void afficher(ActionEvent event) {
        try {

            
            ID.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getid()));
            Nom.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getNomEnfant()));
            Score.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getscore()));
            Remarque.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getRemarque()));
            Activite.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getActivite()));
            
            
            ObservableList<Evaluation> list = ser.readAllV3();
            System.out.println("liste du control" + list);
            
            table.setItems(list);
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    
    
}
