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
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.CategoryAxis;
import javafx.scene.chart.XYChart;
import javafx.util.Callback;
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
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         ObservableList<String> items = null;
        try {
            items = ser.readAct();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
        ObservableList<String> list = FXCollections.observableArrayList(items);
        
        ObservableList<String> list2 = null;
        try {
            list2 = ser.readAllA();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
        XYChart.Series<String , Integer> series  = new XYChart.Series<>();
        Xaxis.setCategories(list);
        /*for(i =0 ; i<list2.size();i++){
         if(list2.get(i).substring(11,19).equals("09:00:00")){
         j++;
         }if(list2.get(i).substring(11,19).equals("10:45:00")){
           k++;
         }  switch (list2.get(i).substring(11,19)) {
                case "13:30:00":
                    l++;
                    break;
                case "15:00:00":
                    m++;
                    break;
            }
        }*/
        /*series.getData().add(new XYChart.Data<>("9:00:00", j));
         series.getData().add(new XYChart.Data<>("10:45:00", k));
          series.getData().add(new XYChart.Data<>("13:30:00", l));
           series.getData().add(new XYChart.Data<>("15:00:00", m));*/
        // barchar.getData().add(series);
    }    
    
}
