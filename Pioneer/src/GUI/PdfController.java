/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import com.lowagie.text.Document;
import com.lowagie.text.DocumentException;
import com.lowagie.text.pdf.AcroFields.Item;
import com.lowagie.text.pdf.PdfPTable;
import com.lowagie.text.pdf.PdfTable;
import com.lowagie.text.pdf.PdfWriter;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TablePosition;
import javafx.scene.control.TableView;
import javax.swing.JFileChooser;
import pioneer.Entites.Suivi;
import pioneer.Service.ServiceSuivi;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class PdfController implements Initializable {

    ServiceSuivi ser = new ServiceSuivi();

    @FXML
    private Button bAfficher;
    @FXML
    private Button bPDF;
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
   /* 
    TablePosition pos = table.getSelectionModel().getSelectedCells().get(0);
    
    int row = pos.getRow();

    */

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ID.setVisible(false);
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
            
            
            ObservableList<Suivi> list = ser.readAllV3();
            System.out.println("liste du control" + list);
            
            table.setItems(list);
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    /*
    @FXML
    private void generatePDF(ActionEvent event) throws FileNotFoundException, DocumentException {
        
        
        String path="";
        JFileChooser j = new JFileChooser();
        j.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);
        int x=j.showSaveDialog(j);
        
        if (x==JFileChooser.APPROVE_OPTION)
        {
            path=j.getSelectedFile().getPath();
        }
        
        Document doc = new Document();
        
        PdfWriter.getInstance(doc, new FileOutputStream(path+"Suivi.pdf"));
        
        doc.open();
        
        PdfPTable tb1 = new PdfPTable(5);
        
        //Adding headers
        tb1.addCell("Enfant");
        tb1.addCell("Nutrition");
        tb1.addCell("Sommeil");
        tb1.addCell("Sociabilite");
        tb1.addCell("Psychologie");
        
        
      /*  for (int i = 0; i < table.getItems().get(row); i++) {
           
            String n = (String) Nutrition.getCellObservableValue(i).getValue();
            String e = (String) Enfant.getCellObservableValue(i).getValue();
            String so = (String) Sommeil.getCellObservableValue(i).getValue();
            String s = (String) Sociabilite.getCellObservableValue(i).getValue();
            String p = (String) Psychologie.getCellObservableValue(i).getValue();
            
            tb1.addCell(e);
            tb1.addCell(n);
            tb1.addCell(so);
            tb1.addCell(s);
            tb1.addCell(p);

        }

        
       // doc.add(tb1);
        
        
        //doc.close();
    } */
    
}
