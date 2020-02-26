/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;



import Services.ServiceActivite;
import entities.activite;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.util.Callback;

/**
 * FXML Controller class
 *
 * @author House
 */
public class AddActiviteController implements Initializable {
    @FXML
    private TextField tfNom;
    @FXML
    private TextField tfNiveau;
    @FXML
    private TextField tfType;
    @FXML
    private TextField tfLieu;
    @FXML
    private TextField tfDescription;
    @FXML
    private TextField tfId_ac;
    @FXML
    private Button BouttonAJouter;
    @FXML
    private TableColumn<activite, String> AFid;
    @FXML
    private TableColumn<activite, String> AFnom;
    @FXML
    private TableColumn<activite, String> AFlieu;
    @FXML
    private TableColumn<activite, String> AFtype;
    @FXML
    private TableColumn<activite, String> AFniveau;
    @FXML
    private TableColumn<activite, String> AFdescription;
 ServiceActivite sA = new ServiceActivite();
    @FXML
    private TableView<activite> Table;
    @FXML
    private Tab afficher;
    @FXML
    private TextField Mnom;
    @FXML
    private TextField Mniveau;
    @FXML
    private TextField Mtype;
    @FXML
    private TextField Mlieu;
    @FXML
    private TextField Mdescription;
    @FXML
    private TextField Mid;
    @FXML
    private Button validerM;
    @FXML
    private Tab modifierActivite;
    @FXML
    private TabPane TabGestion;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        addButtonToTable();
    }    

    @FXML
    private void ajouter(ActionEvent event) {
        try {
            String nomA = tfNom.getText();
            int niveauA = Integer.parseInt(tfNiveau.getText());
            String typeA = tfType.getText();
            String descriptionA = tfDescription.getText();
            String lieuA = tfLieu.getText();
            int id_acA = Integer.parseInt(tfId_ac.getText());
            
            
            
            activite a = new activite(nomA, niveauA, typeA, lieuA, descriptionA, id_acA);
            sA.ajouter1(a);
            
        }
            
           
         catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }
   

    @FXML
    private void AfficherActivite(Event event) {
         try { 
            AFid.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getid_ac()));
            AFnom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getNom()));
            AFlieu.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getLieu()));
            AFtype.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getType()));
            AFniveau.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getniveau()));
            AFdescription.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getDescription()));
            ObservableList<activite> list = sA.readAllV2();
            System.out.println(list);
            Table.setItems(list);
         } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    @FXML
    private void modifier(ActionEvent event) {
        try {
            String nomA = Mnom.getText();
            int niveauA = Integer.parseInt(Mniveau.getText());
            String typeA = Mtype.getText();
            String descriptionA = Mdescription.getText();
            String lieuA = Mlieu.getText();
            int id_acA = Integer.parseInt(Mid.getText());
            activite a = new activite(nomA, niveauA, typeA, lieuA, descriptionA, id_acA);
            sA.update(a);
            
        }
            
           
         catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }
    private void addButtonToTable() {
        TableColumn<activite, Void> colBtn = new TableColumn("Action");
        TableColumn<activite, Void> colBtnS = new TableColumn("Action");
        colBtn.setMinWidth(40);
        colBtnS.setMinWidth(40);
        Callback<TableColumn<activite, Void>, TableCell<activite, Void>> cellFactory = new Callback<TableColumn<activite, Void>, TableCell<activite, Void>>() {
            @Override
            public TableCell<activite, Void> call(final TableColumn<activite, Void> param) {
                final TableCell<activite, Void> cell = new TableCell<activite, Void>() {

                    private final Button btn = new Button("Modifier");
                    

                    {
                        btn.setOnAction((ActionEvent event) -> {
                            activite data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            ModifierActivite(data);
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
        
        Callback<TableColumn<activite, Void>, TableCell<activite, Void>> cellFactorySupp = new Callback<TableColumn<activite, Void>, TableCell<activite, Void>>() {
            @Override
            public TableCell<activite, Void> call(final TableColumn<activite, Void> param) {
                final TableCell<activite, Void> cell = new TableCell<activite, Void>() {

                    private final Button btnS = new Button("Supprimer");
                    

                    {
                        btnS.setOnAction((ActionEvent event) -> {
                            activite data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            try {
                                sA.delete(data);
                            } catch (SQLException ex) {
                                Logger.getLogger(AddActiviteController.class.getName()).log(Level.SEVERE, null, ex);
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
       
        Table.getColumns().addAll(colBtn,colBtnS);
    }
    private void ModifierActivite(activite data){
            TabGestion.getSelectionModel().select(modifierActivite);

            Mnom.setText(data.getNom());
            Mid.setText(data.getid_ac());
            Mid.setDisable(true);
            Mniveau.setText(data.getniveau());
            Mdescription.setText(data.getDescription());
            Mtype.setText(data.getType());
            Mlieu.setText(data.getLieu());

            


        }

    

}