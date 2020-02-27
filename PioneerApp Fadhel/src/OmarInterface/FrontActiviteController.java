/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package OmarInterface;

import OmarService.ServiceActivite;
import OmarService.ServiceActiviteEtEnfant;
import OmarEntite.activite;
import OmarEntite.enfantETactivite;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.util.Callback;

/**
 * FXML Controller class
 *
 * @author user
 */

public class FrontActiviteController implements Initializable {
    
    //nrigloha fel integration 
     private String cin;
    @FXML
    private TableColumn<activite, String> FAFnom;
    @FXML
    private TableColumn<activite, String> FAFlieu;
    @FXML
    private TableColumn<activite, String> FAFtype;
    @FXML
    private TableColumn<activite, String> FAFniveau;
    @FXML
    private TableColumn<activite, String> FAFdescription;
    ServiceActivite sA = new ServiceActivite();
    ServiceEnfant sE= new ServiceEnfant();
    ServiceActiviteEtEnfant sEA= new ServiceActiviteEtEnfant();
    @FXML
    private TableView<activite> Table1;
    private int id ;
    private int id1 ;
    @FXML
    private TableView<Enfant> Table2;
    @FXML
    private TableColumn<Enfant, String> Enom;
    @FXML
    private TableColumn<Enfant, String> Eprenom;
    @FXML
    private Tab FrontAfficherActiviteEtEnfant;
    @FXML
    private TableColumn<Enfant, String> id_e;
    @FXML
    private Button ValiderAffectation;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        addButtonToTable();
        addButtonToTable1();
      
    }    

    public void SetCin(String cin)
    {
        this.cin=cin;
        
 
         try { 
            id_e.setCellValueFactory(new PropertyValueFactory<>("id_e"));

            Enom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getNom()));
            Eprenom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getPrenom()));
          // ray hadhra
            ObservableList<Enfant> list = sE.readAllV2(cin);
            System.out.println(list);
            Table2.setItems(list);
            
            } catch (SQLException ex) {
            System.out.println(ex);
        }
        
        
    
    }
    

    @FXML
    private void FrontAfficherActiviteEtEnfant(Event event) {
        try { 
            
            FAFnom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getNom()));
            FAFlieu.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getLieu()));
            FAFtype.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getType()));
            FAFniveau.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getniveau()));
            FAFdescription.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getDescription()));
            ObservableList<activite> list = sA.readAllV2();
            System.out.println(list);
            Table1.setItems(list);
            
            
            } catch (SQLException ex) {
            System.out.println(ex);
    
        }
         try { 
            id_e.setCellValueFactory(new PropertyValueFactory<>("id_e"));

            Enom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getNom()));
            Eprenom.setCellValueFactory(c-> new SimpleStringProperty(c.getValue().getPrenom()));
          // ray hadhra
            ObservableList<Enfant> list = sE.readAllV2(cin);
            System.out.println(list);
            Table2.setItems(list);
            
            } catch (SQLException ex) {
            System.out.println(ex);
        }
        
    }
    private void addButtonToTable() {
        System.out.println("je suis mla ");
        TableColumn<activite, Void> colBtn = new TableColumn("Action");
        
        colBtn.setMinWidth(20);
        
        Callback<TableColumn<activite, Void>, TableCell<activite, Void>> cellFactory = new Callback<TableColumn<activite, Void>, TableCell<activite, Void>>() {
            @Override
            public TableCell<activite, Void> call(final TableColumn<activite, Void> param) {
                final TableCell<activite, Void> cell = new TableCell<activite, Void>() {

                    private final Button btn = new Button("Affecter");
                    

                    {
                        btn.setOnAction((ActionEvent event) -> {
                            activite data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            AffecterActivite(data);
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
        colBtn.setCellFactory(cellFactory);
        Table1.getColumns().add(colBtn);
    }
        private void addButtonToTable1() {
        System.out.println("je suis mla ");
        TableColumn<Enfant, Void> colBtn = new TableColumn("Action");
        
        colBtn.setMinWidth(20);
        
        Callback<TableColumn<Enfant, Void>, TableCell<Enfant, Void>> cellFactory = new Callback<TableColumn<Enfant, Void>, TableCell<Enfant, Void>>() {
            @Override
            public TableCell<Enfant, Void> call(final TableColumn<Enfant, Void> param) {
                final TableCell<Enfant, Void> cell = new TableCell<Enfant, Void>() {

                    private final Button btn = new Button("Affecter");
                    

                    {
                        btn.setOnAction((ActionEvent event) -> {
                            Enfant data = getTableView().getItems().get(getIndex());
                            System.out.println("selectedData: " + data);
                            AffecterEnfant(data);
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
        colBtn.setCellFactory(cellFactory);
        Table2.getColumns().add(colBtn);
    }

    private void AffecterActivite(activite data)
    {
      activite act = Table1.getSelectionModel().getSelectedItem();
      System.out.println(act);
      id=act.getId_ac();
      
      
      
    }
    private void AffecterEnfant(Enfant data)
    {
      Enfant enf = Table2.getSelectionModel().getSelectedItem();
      System.out.println(enf);
      id1=enf.getId_e();
    }

    @FXML
    private void ValiderAffectation(ActionEvent event) {
         try {
            int id_E=id1;
            int id_A=id;
            
            
            
            enfantETactivite a = new enfantETactivite(id1, id);
            sEA.ajouter(a);
            
        }
            
           
         catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
    }
}
