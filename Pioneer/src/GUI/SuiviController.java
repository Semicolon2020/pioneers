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
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
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
    
    ObservableList<String> NUTRITION = FXCollections.observableArrayList("Faible nutrition", "Bonne Nutrition");
    ObservableList<String> SOMMEIL = FXCollections.observableArrayList("Sommeil agité","Sommeil calme");
    ObservableList<String> SOCIABILITE = FXCollections.observableArrayList("Introverti et réservé", "Sociable et communicatif");


    @FXML
    private ChoiceBox tfClasse;
    @FXML
    private ChoiceBox tfEnfant;
    @FXML
    private ChoiceBox tfNutrition;
    @FXML
    private ChoiceBox tfSommeil;
    @FXML
    private ChoiceBox tfSociabilite;
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
    
    
    @FXML
    private Tab ajouterSuivi;
    @FXML
    private Tab readSuivi;
    @FXML
    private Tab updateSuivi;
    @FXML
    private TabPane TabPane;
    @FXML
    private TextField tfNom1;
    
    ObservableList<String> listC;
    ObservableList<String> listCE;
    @FXML
    private ImageView Im1;
    @FXML
    private ImageView IM1;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        Im1.setImage(new Image("/Image/notebook.png"));
        IM1.setImage(new Image("/Image/notebook.png"));
        
        ID.setVisible(false);
        addButtonToTable();
        tfNutrition.setItems(NUTRITION);
        tfNutrition1.setItems(NUTRITION);
        tfSommeil.setItems(SOMMEIL);
        tfSommeil1.setItems(SOMMEIL);
        tfSociabilite.setItems(SOCIABILITE);
        tfSociabilite1.setItems(SOCIABILITE);
        
        
        
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
                       tfEnfant.setItems(listCE);
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

            String nutrition = (String) tfNutrition.getSelectionModel().getSelectedItem();
            String sommeil = (String) tfSommeil.getSelectionModel().getSelectedItem();
            String sociabilite = (String) tfSociabilite.getSelectionModel().getSelectedItem();
            String psychologie = tfPsy.getText();
            String cl = (String) tfClasse.getSelectionModel().getSelectedItem();
            int idc = ser.getIdClasse(cl);
            String enf = (String) tfEnfant.getSelectionModel().getSelectedItem();
            int ide = ser.readNom(enf);
            
            Suivi p = new Suivi(idc , ide ,nutrition,sommeil,sociabilite,psychologie);
            ser.ajouter1(p);
            

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }

    }

    @FXML
    private void afficher(ActionEvent event) {
        try {

            
            ID.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getid()));
            Enfant.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getNomEnfant()));
            Nutrition.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getNutrition()));
            Sommeil.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getSommeil()));
            Sociabilite.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getSociabilite()));
            Psychologie.setCellValueFactory(c -> new SimpleStringProperty(c.getValue().getPsychologie()));
            
            
            ObservableList<Suivi> list = ser.readAllV2();
            System.out.println("liste du control" + list);
            
            table.setItems(list);
        } catch (SQLException ex) {
            System.out.println(ex);
        }

        
    }

    @FXML
    private void modifier(ActionEvent event) {
        
        try {
            int id = data.getId();
            String nutrition = (String) tfNutrition1.getSelectionModel().getSelectedItem();
            String sociabilite = (String) tfSociabilite1.getSelectionModel().getSelectedItem();
            String sommeil = (String) tfSommeil1.getSelectionModel().getSelectedItem();
            String psychologie = tfPsy1.getText();

           
            Suivi p = new Suivi(id,nutrition,sommeil,sociabilite,psychologie);
            ser.update(p);

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
        
    }
    
    
      private void modifierSuivi(Suivi e) {

        TabPane.getSelectionModel().select(updateSuivi);
        if (e != null) {

            tfNom1.setText(e.getNomEnfant());
            tfPsy1.setText(e.getPsychologie());
            tfNutrition1.setValue(e.getNutrition());
            tfSommeil1.setValue(e.getSommeil());
            tfSociabilite1.setValue(e.getSociabilite());

        } else {

            tfNom1.setText("");
            tfPsy1.setText("");
            tfNutrition1.setValue("");
            tfSommeil1.setValue("");
            tfSociabilite1.setValue("");

        }
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
                            modifierSuivi(data);
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

        Callback<TableColumn<Suivi, Void>, TableCell<Suivi, Void>> cellFactorySupp = new Callback<TableColumn<Suivi, Void>, TableCell<Suivi, Void>>() {
            @Override
            public TableCell<Suivi, Void> call(final TableColumn<Suivi, Void> param) {
                final TableCell<Suivi, Void> cell = new TableCell<Suivi, Void>() {

                    private final Button btnS = new Button("Supprimer");

                    {
                        btnS.setOnAction((ActionEvent event) -> {
                            Suivi data = getTableView().getItems().get(getIndex());
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
