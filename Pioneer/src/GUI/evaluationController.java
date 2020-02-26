/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import pioneer.Entites.Evaluation;
import pioneer.Entites.Enfant;
import pioneer.Service.ServiceEvaluation;
import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.CategoryAxis;
import javafx.scene.chart.NumberAxis;
import javafx.scene.chart.XYChart;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.util.Callback;
import static jdk.nashorn.internal.runtime.Debug.id;

/**
 * FXML Controller class
 *
 * @author House
 */
public class evaluationController implements Initializable {

    private Connection con;
    
    private Statement ste;
    
    ServiceEvaluation ser = new ServiceEvaluation();
    
    ObservableList<String> REMARQUES = FXCollections.observableArrayList("Mauvais", "Assez Bien", "Moyen" , "Bien", "Très Bien");
    
    @FXML
    private TextField tfScore;
    @FXML
    private ChoiceBox tfRemarque;
    @FXML
    private ChoiceBox tfClasse;
    @FXML
    private ChoiceBox tfNom;
    @FXML
    private ChoiceBox tfActivite;
    @FXML
    private Button bAjouter;
    
    @FXML
    private Tab ajouterEval;
    @FXML
    private Tab updateEval;
    @FXML
    private Tab readEval;
   
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
    @FXML
    private Button bAfficher;
    
    
    
    @FXML
    private Button bValider;
    @FXML
    private TextField tfNom1;
    @FXML
    private ChoiceBox tfRemarque1;
    @FXML
    private ChoiceBox tfActivite1;
    @FXML
    private TextField tfScore1;
    @FXML
    private TabPane TabPane;
    
    ObservableList<String> listC;
    ObservableList<String> listCE;
    ObservableList<String> listA;
   
    
    
    Evaluation data;
    @FXML
    private ImageView Im1;
    @FXML
    private ImageView IM1;

    /*    @FXML
    private Button bValider;
    @FXML
    private TextField tfID1;
    @FXML
    private TextField tfRemarque1;
    @FXML
    private TextField tfID_E1;
    @FXML
    private TextField tfScore1;
    
     */
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        Im1.setImage(new Image("/Image/satisfaction.png"));
        IM1.setImage(new Image("/Image/satisfaction.png"));
        
        ID.setVisible(false);
        addButtonToTable();
        tfRemarque.setItems(REMARQUES);
        tfRemarque1.setItems(REMARQUES);
        
        try {
            listA = ser.readAllA();
            tfActivite.setItems(listA);
            tfActivite1.setItems(listA);
        } catch (Exception e) {
        }
        
        try {
           listC = ser.readAllS();
           tfClasse.setItems(listC);

           tfClasse.getSelectionModel().selectedIndexProperty().addListener(new ChangeListener<Number>() {
              
               @Override
               public void changed(ObservableValue <? extends Number> ov, Number t, Number t1) {
                   try{
                       System.out.println(listC.get(t1.intValue()));
                       listCE = ser.readNomEnfantClasse(listC.get(t1.intValue()));
                       System.out.println(listCE);
                       tfNom.setItems(listCE);
                    }catch (SQLException ex) {
                       System.out.println(ex);
                   }

               }
           });



        } catch (SQLException ex) {
            System.out.println(ex);
        }

    }

    @FXML
    private void ajouter(ActionEvent event) {
        try {

            int score = parseInt(tfScore.getText());
            String remarque = (String) tfRemarque.getSelectionModel().getSelectedItem();
            String cl = (String) tfClasse.getSelectionModel().getSelectedItem();
            int idc = ser.getIdClasse(cl);
            String enf = (String) tfNom.getSelectionModel().getSelectedItem();
            int ide = ser.readNom(enf);

            String activite = (String) tfActivite.getSelectionModel().getSelectedItem();
            ServiceEvaluation sp = new ServiceEvaluation();
            
            Evaluation p = new Evaluation(score, ide,idc, remarque,activite);
            
            if ((p.getScore() <= 20) && (p.getScore() >= 0)) {
                sp.ajouter1(p);
            } else {
                System.out.println("Score supérieur à 20");
            }

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }

    }

    @FXML
    private void modifier(ActionEvent event) {
        try {
            int score = parseInt(tfScore1.getText());
            int id = data.getId();
            System.out.println(id);
            String remarque = (String) tfRemarque1.getSelectionModel().getSelectedItem();
            String activite = (String) tfActivite1.getSelectionModel().getSelectedItem();

           
            ServiceEvaluation sp = new ServiceEvaluation();
            Evaluation p = new Evaluation(score, id, remarque, activite);
            sp.update(p);

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }

    }

    private void modifierEval(Evaluation e) {

        TabPane.getSelectionModel().select(updateEval);
        if (e != null) {

            tfNom1.setText(e.getNomEnfant());
            tfScore1.setText(e.getscore());
            tfRemarque1.setValue(e.getRemarque());
            tfActivite1.setValue(e.getActivite());

        } else {

            tfNom1.setText("");
            tfScore1.setText("");
            tfRemarque1.setValue("");
            tfActivite1.setValue("");

        }
    }
    
    
/*
    public void loadChart(ActionEvent event) {

        String query = "SELECT `score`, `remarque` FROM `evaluation` WHERE 1";
        XYChart.Series<Integer, String> series = new XYChart.Series<>();

        try {
            ste = con.createStatement();
            ResultSet rs = ste.executeQuery(query);
            while (rs.next()) {
                series.getData().add(new XYChart.Data<>(rs.getInt(1), rs.getString(2)));
            }

            barChart.getData().add(series);

        } catch (SQLException e) {
            System.out.println(e.getMessage());
        }

    }
    
*/
    private void addButtonToTable() {
        TableColumn<Evaluation, Void> colBtn = new TableColumn("Action");
        TableColumn<Evaluation, Void> colBtnS = new TableColumn("Action");
        colBtn.setMinWidth(40);
        colBtnS.setMinWidth(40);
        Callback<TableColumn<Evaluation, Void>, TableCell<Evaluation, Void>> cellFactory = new Callback<TableColumn<Evaluation, Void>, TableCell<Evaluation, Void>>() {
            @Override
            public TableCell<Evaluation, Void> call(final TableColumn<Evaluation, Void> param) {
                final TableCell<Evaluation, Void> cell = new TableCell<Evaluation, Void>() {

                    private final Button btn = new Button("Modifier");

                    {
                        btn.setOnAction((ActionEvent event) -> {
                            data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            modifierEval(data);
                        });

                    }

                    @Override
                    public void updateItem(Void item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                        } else {
                            setGraphic(btn);
                        }
                    }
                };
                return cell;
            }
        };

        Callback<TableColumn<Evaluation, Void>, TableCell<Evaluation, Void>> cellFactorySupp = new Callback<TableColumn<Evaluation, Void>, TableCell<Evaluation, Void>>() {
            @Override
            public TableCell<Evaluation, Void> call(final TableColumn<Evaluation, Void> param) {
                final TableCell<Evaluation, Void> cell = new TableCell<Evaluation, Void>() {

                    private final Button btnS = new Button("Supprimer");

                    {
                        btnS.setOnAction((ActionEvent event) -> {
                            Evaluation data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            try {
                                ser.delete(data);
                            } catch (SQLException ex) {
                                System.out.println(ex);
                            }
                        });

                    }

                    @Override
                    public void updateItem(Void item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                        } else {
                            setGraphic(btnS);
                        }
                    }
                };
                return cell;
            }
        };

        colBtn.setCellFactory(cellFactory);
        colBtnS.setCellFactory(cellFactorySupp);

        table.getColumns().addAll(colBtn, colBtnS);
    }

    @FXML
    private void afficher() {

        try {

            ServiceEvaluation sp = new ServiceEvaluation();
            
            ID.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getid()));
            Nom.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getNomEnfant()));
            Score.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getscore()));
            Remarque.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getRemarque()));
            Activite.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getActivite()));
            
            
            ObservableList<Evaluation> list = sp.readAllV2();
            System.out.println("liste du control" + list);
            
            table.setItems(list);
        } catch (SQLException ex) {
            System.out.println(ex);
        }

    }
    

}





            
          /*  FXMLLoader loader = new FXMLLoader
                        (getClass()
                         .getResource("evaluation.fxml"));
            try {
                Parent root = loader.load();
                evaluationController apc = loader.getController();
                apc.setResID(tfID);
                apc.setResScore(tfScore);
                tfNom.getScene().setRoot(root);
            } catch (IOException ex) {
                System.out.println(ex.getMessage());
                }
*/
