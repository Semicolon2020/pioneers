/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import static java.lang.Integer.parseInt;
import java.net.URL;
import java.sql.Connection;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.util.Callback;
import pioneer.Entites.Evaluation;
import pioneer.Entites.Suivi;
import pioneer.Service.ServiceSuivi;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class SuiviController implements Initializable {
    
    private Connection con;
    
    private Statement ste;
    
    ServiceSuivi ser = new ServiceSuivi();

    @FXML
    private ChoiceBox<?> tfClasse;
    @FXML
    private ChoiceBox<?> tfEnfant;
    @FXML
    private ChoiceBox<?> tfNutrition;
    @FXML
    private ChoiceBox<?> tfSommeil;
    @FXML
    private ChoiceBox<?> tfSociabilite;
    @FXML
    private TextArea tfPsy;
    @FXML
    private Button bAjouter;
    @FXML
    private TableView<Suivi> table;
    @FXML
    private TableColumn<Suivi, String> Enfant;
    @FXML
    private TableColumn<Suivi, String> Nutrition;
    @FXML
    private TableColumn<Suivi, String> Sommeil;
    @FXML
    private TableColumn<Suivi, String> Sociabilite;
    @FXML
    private TableColumn<Suivi, String> Psychologie;
    @FXML
    private TableColumn<Suivi, String> ID;
    @FXML
    private Button bAfficher;
    @FXML
    private ChoiceBox tfNutrition1;
    @FXML
    private ChoiceBox tfSommeil1;
    @FXML
    private ChoiceBox tfSociabilite1;
    @FXML
    private TextArea tfPsy1;
    @FXML
    private Button bValider;
    
    Suivi data;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void ajouter(ActionEvent event) {
        
        try {

            String nutrition = (String) tfNutrition.getSelectionModel().getSelectedItem();
            String sommeil = (String) tfSommeil.getSelectionModel().getSelectedItem();
            String sociabilite = (String) tfSociabilite.getSelectionModel().getSelectedItem();
            String psychologie = tfPsy.getText();
            String cl = (String) tfClasse.getSelectionModel().getSelectedItem();
            int idc = ser.getIdClasse(cl);
            String enf = (String) tfEnfant.getSelectionModel().getSelectedItem();
            int ide = ser.readNom(enf);

            
            Suivi p = new Suivi(score, ide,idc, remarque,activite);
            
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
    private void afficher(ActionEvent event) {
    }

    @FXML
    private void modifier(ActionEvent event) {
    }
    
        private void addButtonToTable() {
        TableColumn<Suivi, Void> colBtn = new TableColumn("Action");
        TableColumn<Suivi, Void> colBtnS = new TableColumn("Action");
        colBtn.setMinWidth(40);
        colBtnS.setMinWidth(40);
        Callback<TableColumn<Suivi, Void>, TableCell<Suivi, Void>> cellFactory = new Callback<TableColumn<Suivi, Void>, TableCell<Suivi, Void>>() {
            @Override
            public TableCell<Suivi, Void> call(final TableColumn<Suivi, Void> param) {
                final TableCell<Suivi, Void> cell = new TableCell<Suivi, Void>() {

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
    
}
