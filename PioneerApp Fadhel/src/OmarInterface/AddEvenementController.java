/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package OmarInterface;



import OmarService.ServiceEvenement;
import OmarEntite.activite;
import OmarEntite.evenement;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
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
public class AddEvenementController implements Initializable {
   
    private String cin;
    
    @FXML
    private TextField tfLieu;
    @FXML
    private TextField tfInvite;
    @FXML
    private TextField tfNom;
    @FXML
    private TextField tfDescription;
    @FXML
    private TextField tfNiveau;
    @FXML
    private Button Bajouter;
    @FXML
    private Tab afficher;
    @FXML
    private Tab modifierEvenement;
    @FXML
    private TextField MEnom;
    @FXML
    private TextField MElieu;
    @FXML
    private TextField MEinvite;
    @FXML
    private TextField MEdescription;
    @FXML
    private TextField MEniveau;
    @FXML
    private Button ModifierEvenement;
    @FXML
    private TableColumn<evenement, String> AFnom;
    @FXML
    private TableColumn<evenement, String> AFlieu;
    @FXML
    private TableColumn<evenement, String> AFinvite;
    @FXML
    private TableColumn<evenement, String> AFdescription;
    @FXML
    private TableColumn<evenement, String> AFniveau;
    
  ServiceEvenement sE = new ServiceEvenement();
   private int id ;
    @FXML
    private TableView<evenement> Table;
    @FXML
    private TabPane TabGestion;
    @FXML
    private TableColumn<evenement, String> AFid;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        addButtonToTable();
    }    

    public void SetCin(String cin)
    {
        this.cin = cin ;
    }
    
    @FXML
    private void ajouter(ActionEvent event) {
        try {
            
            String lieuA = tfLieu.getText();
            String typeA = tfInvite.getText();
            String descriptionA = tfDescription.getText();
            String nomA = tfNom.getText();
            int niveauA = Integer.parseInt(tfNiveau.getText());
       
            
            ServiceEvenement sE = new ServiceEvenement();
            evenement e = new evenement(nomA, niveauA, typeA, lieuA, descriptionA);
            sE.ajouter1(e);
            
        }
            
           
         catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }

    @FXML
    private void AfficherEvenement(Event event) {
            try { 
            AFniveau.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getniveau()));
            AFnom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getNom()));
            AFlieu.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getLieu()));
            AFid.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getid()));
            AFdescription.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getDescription()));
            AFinvite.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getInvite()));
            ObservableList<evenement> list = sE.readAllV2();
            System.out.println(list);
            Table.setItems(list);
         } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    @FXML
    private void ModifierEvenement(ActionEvent event) {
         try {
             //int idA = Integer.parseInt(MEid.getText());
            String nomA = MEnom.getText();
            int niveauA = Integer.parseInt(MEniveau.getText());
            String inviteA = MEinvite.getText();
            String descriptionA = MEdescription.getText();
            String lieuA = MElieu.getText();
            
            evenement a = new evenement(id,nomA, niveauA, inviteA, lieuA, descriptionA);
            
            sE.update(a);
            
        }
            
           
         catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    private void addButtonToTable() {
        TableColumn<evenement, Void> colBtn = new TableColumn("Action");
        TableColumn<evenement, Void> colBtnS = new TableColumn("Action");
        colBtn.setMinWidth(40);
        colBtnS.setMinWidth(40);
        Callback<TableColumn<evenement, Void>, TableCell<evenement, Void>> cellFactory = new Callback<TableColumn<evenement, Void>, TableCell<evenement, Void>>() {
            @Override
            public TableCell<evenement, Void> call(final TableColumn<evenement, Void> param) {
                final TableCell<evenement, Void> cell = new TableCell<evenement, Void>() {

                    private final Button btn = new Button("Modifier");
                    

                    {  
                        btn.setOnAction((ActionEvent event) -> {
                            evenement data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            evenement EF = Table.getSelectionModel().getSelectedItem();
                            id=EF.getId();
                            ModifierEvenement(data);
                            
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
        
        Callback<TableColumn<evenement, Void>, TableCell<evenement, Void>> cellFactorySupp = new Callback<TableColumn<evenement, Void>, TableCell<evenement, Void>>() {
            @Override
            public TableCell<evenement, Void> call(final TableColumn<evenement, Void> param) {
                final TableCell<evenement, Void> cell = new TableCell<evenement, Void>() {

                    private final Button btnS = new Button("Supprimer");
                    

                    {
                        btnS.setOnAction((ActionEvent event) -> {
                            evenement data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            try {
                                sE.delete(data);
                                ////
                                
                                 AFniveau.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getniveau()));
                                        AFnom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getNom()));
                                        AFlieu.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getLieu()));
                                        AFid.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getid()));
                                        AFdescription.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getDescription()));
                                        AFinvite.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getInvite()));
                                        ObservableList<evenement> list = sE.readAllV2();
                                        System.out.println(list);
                                        Table.setItems(list);
             
                                
                                ////
                            } catch (SQLException ex) {
                                Logger.getLogger(AddEvenementController.class.getName()).log(Level.SEVERE, null, ex);
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
    private void ModifierEvenement(evenement data){
            TabGestion.getSelectionModel().select(modifierEvenement);
        
            MEnom.setText(data.getNom());
           
            
            MEniveau.setText(data.getniveau());
            MEdescription.setText(data.getDescription());
            MEinvite.setText(data.getInvite());
            MElieu.setText(data.getLieu());

            


        }

    
    
}