/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import gestiontransport.Entite.Bus;
import gestiontransport.Entite.Station;
import gestiontransport.Entite.Trajet;
import gestiontransport.Service.ServiceBus;
import gestiontransport.Utils.DataBase;
import java.io.IOException;
import javafx.event.ActionEvent;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.TableView;
import javafx.stage.Stage;
import jdk.nashorn.internal.runtime.Debug;

/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class AdminController implements Initializable {

      
   
              
    @FXML
    private ComboBox<String>  Cbus;
     
    @FXML
    private Button ajoutst;
    @FXML
    private Button suppst;
    @FXML
    private Button ajoutttr;
    @FXML
    private Button finajout;
    
    @FXML
    private Button ajoutbus;
       
    @FXML
    private Button modifbus;
       
    @FXML
    private Button suppbus;
       @FXML
    private Button finmodif;
          @FXML
    private Button modiftr;
     
    @FXML
    private TextField bname;
    @FXML
    private TextField Tname;
    
       @FXML
    private TextField trajetname;
        @FXML
    private TextField Sname;
    @FXML
    private TextField bid;
    @FXML
    private TextField bchauffeur;
    @FXML
    private TextField bcapacite;
   
     @FXML private TableView<Bus> tabb;
     @FXML private TableView<Trajet> tabt;
     @FXML private TableView<Station> tabs;
    
    @FXML
      private TableColumn<Bus, String> id;
    
      @FXML
      private TableColumn<Trajet, String> trid;
        @FXML
      private TableColumn<Trajet, String> trname;
          @FXML
      private TableColumn<Trajet, String> tridbus;
            @FXML
      private TableColumn<Station, String> stname;
              @FXML
      private TableColumn<Station, String> stlong;
                @FXML
      private TableColumn<Station, String> stalt;
                  @FXML
      private TableColumn<Station, String> stid;
    
    
    
    
    
    
      @FXML
      private TableColumn<Bus, String> name;
    @FXML 
    private TableColumn<Bus, String> Capacite;
    @FXML
    private TableColumn<Bus, String> Chauffeur;
   
    DataBase mdb = new DataBase();
    private  Connection  con ;
   
    
     
   
        @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
        }
      finmodif.setDisable(true);
               modiftr.setDisable(true);
            
            ajoutst.setDisable(true);
               suppst.setDisable(true);
             bid.setDisable(true);
               refreshbus();
                refreshtrajet();
  
    }
    
     @FXML
    public void ajoutbus(ActionEvent event) throws SQLException{
         if(!bname.getText().equals("") &&  !bcapacite.getText().equals("") &&  !bchauffeur.getText().equals("")){
        Bus b = new Bus(5,bname.getText(),Integer.valueOf(bcapacite.getText()),bchauffeur.getText());
       
         try{ Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "INSERT INTO `pioneer`.`Bus` (`name`, `Capacite`,`Chauffeur`) VALUES ('"+ b.getName() + "', '" + b.getCapacite() +"','"+b.getChauffeur()+"');";
       stm.executeUpdate(requeteInsert);
       } catch (SQLException ex) {
            Logger.getLogger(Bus.class.getName()).log(Level.SEVERE, null, ex);
        }
       refreshbus();
        emptybus();
         try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
        }
     
       
       }}
    
        @FXML
      private void suppbus(ActionEvent event) throws SQLException{  
          
         ObservableList<Bus> selectedRows, allPeople;
        allPeople = tabb.getItems();
        //this gives us the rows that were selected
        selectedRows = tabb.getSelectionModel().getSelectedItems();
       Bus b = tabb.getSelectionModel().getSelectedItem();
         Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "DELETE FROM bus WHERE id='"+b.getId()+"';";
       stm.executeUpdate(requeteInsert);  
       refreshbus();
       emptybus();
          
      }
      
      @FXML
      private void modifbus(ActionEvent event) throws SQLException{ 
          
       Bus B = new Bus (Integer.valueOf(bid.getText()),bname.getText(),Integer.valueOf(bcapacite.getText()),bchauffeur.getText());
      try{ Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "UPDATE `bus` SET `Capacite`="+B.getCapacite()+",`name`='"+B.getName()+"',`Chauffeur`='"+B.getChauffeur()+"'  WHERE id="+B.getId()+";";
       stm.executeUpdate(requeteInsert);}
      catch (SQLException ex){
            Logger.getLogger(Bus.class.getName()).log(Level.SEVERE, null, ex);
        }
       refreshbus();
       emptybus();
      }
      
       public void userClickedOnTablebus()
    {
         Bus b = tabb.getSelectionModel().getSelectedItem();    
         bid.setText(""+b.getId()+"");
         bname.setText(b.getName());
         bcapacite.setText(""+b.getCapacite()+"");
         bchauffeur.setText(b.getChauffeur());      
    }
       public void userClickedOnTablestation()
    {
         ObservableList<Station> selectedRows, allPeople;
        allPeople = tabs.getItems();
        //this gives us the rows that were selected
        selectedRows = tabs.getSelectionModel().getSelectedItems();
       Station S = tabs.getSelectionModel().getSelectedItem();
        Sname.setText(S.getName());     
    }
       
          public void userClickedOnTabletrajet()
    {
         ObservableList<Trajet> selectedRows, allPeople;
        allPeople = tabt.getItems();
        //this gives us the rows that were selected
        selectedRows = tabt.getSelectionModel().getSelectedItems();
       Trajet T = tabt.getSelectionModel().getSelectedItem();
        trajetname.setText(T.getName());     
    }
       
       
      
      
      
      @FXML
      public ObservableList<Bus>  afficherbus()
    {
          DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
         ObservableList<Bus> buss = FXCollections.observableArrayList();
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("select * from bus");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(new Bus(rs.getInt(1),rs.getString(3),rs.getInt(2),rs.getString(4)));
            }
        } catch (SQLException ex) {
            
        }

     
        return buss;
    } 
      
      @FXML
      public ObservableList<String>  afficherbus2() throws SQLException
    { ObservableList<String> buss = FXCollections.observableArrayList();
        Statement  ste=mdb.getConnection().createStatement();
    ResultSet Rs=ste.executeQuery("select name from Bus");
     while (Rs.next()) {    buss.add(Rs.getString(1));}            
        /*  DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
         ObservableList<String> buss = FXCollections.observableArrayList();
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("select name from bus");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(rs.getString(3));
            }
        } catch (SQLException ex) {
            
        }*/

       
        return buss;
    } 
      
     public void refreshbus(){
        id.setCellValueFactory(new PropertyValueFactory<Bus, String>("id"));
       name.setCellValueFactory(new PropertyValueFactory<Bus, String>("name"));
        Capacite.setCellValueFactory(new PropertyValueFactory<Bus, String>("Capacite"));
       Chauffeur.setCellValueFactory(new PropertyValueFactory<Bus, String>("Chauffeur"));
  tabb.setItems(afficherbus());
     }
     public void emptybus(){
     
      bid.setText("");
         bname.setText("");
         bcapacite.setText("");
         bchauffeur.setText("");  
     
     }

     
     public ObservableList<String> afficherComboBus(){
     
DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
         ObservableList<String> buss = FXCollections.observableArrayList();
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("select name from bus");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                buss.add(rs.getString(3));
                
            }
            
        } catch (SQLException ex) {
            
        }    
         return buss;
       }
     
     
      public void ajouttrajet(ActionEvent event) throws SQLException{
             
          if(!Tname.getText().equals("")){
                         DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
          int idbus=0;
          
       PreparedStatement pt;
     

            pt = con.prepareStatement("select id FROM bus WHERE name='"+Cbus.getValue()+"';");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
            idbus= rs.getInt(1);
                
            }
           
       
        Trajet t = new Trajet(1,Tname.getText(),idbus);
      
         try{ Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "INSERT INTO `pioneer`.`trajet` (`Name`, `idbus`) VALUES ('"+ t.getName() +"','"+t.getIdbus()+"');";
       stm.executeUpdate(requeteInsert);
       } catch (SQLException ex) {
            Logger.getLogger(Bus.class.getName()).log(Level.SEVERE, null, ex);
        }
       refreshtrajet();
       // refreshstation();
         ajoutst.setDisable(false);
               suppst.setDisable(false);
        Sname.setText(""); 
       
       }}
      
      
    public void ajoutstation(ActionEvent event) throws SQLException{
         if(!Sname.getText().equals("")){
   int id=0;
   
    DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
       PreparedStatement pt;
     pt = con.prepareStatement("SELECT id FROM trajet  ORDER BY id DESC LIMIT 1");
            ResultSet rs = pt.executeQuery();
            while (rs.next()){id=rs.getInt(1);}
      
       Station s=new Station(1,Sname.getText(), 0.0 , 0.0 ,id);
       
       Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "INSERT INTO `pioneer`.`station` (`name`,`idtrajet`,`longtitude`,`altitude`) VALUES ('" +s.getName()+ "','"+s.getIdtrajet()+"','"+s.getLongtitude()+ "','"+s.getAltitude()+ "');";
       stm.executeUpdate(requeteInsert);
       refreshstation();
       Sname.setText("");}
    
    }
    
      public void suppstation() throws SQLException{
      int id=0;
      DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
       PreparedStatement pt;
     pt = con.prepareStatement("SELECT id FROM trajet  ORDER BY id DESC LIMIT 1");
            ResultSet rs = pt.executeQuery();
            while (rs.next()){id=rs.getInt(1);}
            
            ObservableList<Station> selectedRows, allPeople;
        allPeople = tabs.getItems();
        //this gives us the rows that were selected
        selectedRows = tabs.getSelectionModel().getSelectedItems();
       Station S = tabs.getSelectionModel().getSelectedItem();
         Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "DELETE FROM station WHERE idtrajet='"+id+"' and id='"+S.getId()+"';";
       stm.executeUpdate(requeteInsert);  
       refreshstation();
      
      
            
            
            
      }
               
    public void refreshtrajet(){
    
     
              trid.setCellValueFactory(new PropertyValueFactory<Trajet, String>("id"));
            trname.setCellValueFactory(new PropertyValueFactory<Trajet, String>("Name"));
        tridbus.setCellValueFactory(new PropertyValueFactory<Trajet, String>("idbus"));
  
            tabt.setItems(affichertrajet()); }
    
    public void refreshstation() throws SQLException{
           
        stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(afficherstation());
        
    
    }
    
   
    
 
    
     @FXML
      public ObservableList<Station>  afficherstation() throws SQLException
    {
          DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
     
         ObservableList<Station> buss = FXCollections.observableArrayList();
         int id=0;
       PreparedStatement pt1;
     pt1 = con.prepareStatement("SELECT id FROM trajet  ORDER BY id DESC LIMIT 1");
            ResultSet rs1 = pt1.executeQuery();
            while (rs1.next()){id=rs1.getInt(1);}
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("select * from station where idtrajet='"+id +"'");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(new Station(rs.getInt(1),rs.getString(2),rs.getDouble(4),rs.getDouble(5),id));
            }
        } catch (SQLException ex) {
            
        }

     
        return buss;
    } 
      
      @FXML
      public ObservableList<Trajet>  affichertrajet()
    {
          DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
         ObservableList<Trajet> buss = FXCollections.observableArrayList();
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("select * from trajet");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(new Trajet(rs.getInt(1),rs.getString(2),rs.getInt(3)));
            }
        } catch (SQLException ex) {
            
        }

     
        return buss;
    }
      
       public void supptrajet() throws SQLException{
      int id=0;
      DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
    
           
            ObservableList<Trajet> selectedRows, allPeople;
        allPeople = tabt.getItems();
        //this gives us the rows that were selected
        selectedRows = tabt.getSelectionModel().getSelectedItems();
       Trajet T = tabt.getSelectionModel().getSelectedItem();
        trajetname.setText(T.getName()); 
         Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "DELETE station,trajet FROM trajet   INNER JOIN station ON station.idtrajet = trajet.id WHERE  trajet.id ='"+T.getId() +"';";
       stm.executeUpdate(requeteInsert);  
       trajetname.setText("");
       refreshtrajet();
      
      
            
            
            
      }
       
       
        public void modiftrajet() throws IOException, SQLException{
        
            finmodif.setDisable(false);
               modiftr.setDisable(false);
               ajoutttr.setDisable(true);
               finajout.setDisable(true);
                ajoutst.setDisable(false);
               suppst.setDisable(false);
         ObservableList<Trajet> selectedRows, allPeople;
        allPeople = tabt.getItems();
        //this gives us the rows that were selected
        selectedRows = tabt.getSelectionModel().getSelectedItems();
       Trajet T = tabt.getSelectionModel().getSelectedItem();
        Tname.setText(T.getName());     
            
            
        Sname.setText("");
              
            Cbus.setItems(null);
           try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
        }
             stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(null);
        tabs.setItems(afficherstationmodif(T.getId()));
        }
        
        public void finmodif(){
            ajoutttr.setDisable(false);
               finajout.setDisable(false);
             Cbus.setItems(null);
              try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
        }
        Sname.setText("");
        stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(null);
        
        
        
        }
       
      
      
       public void finajout() {
           Sname.setText("");
            Tname.setText("");  
            Cbus.setItems(null);
           try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController.class.getName()).log(Level.SEVERE, null, ex);
        }
     
       stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(null);
       
       
       
       }
       
     @FXML
      public ObservableList<Station>  afficherstationmodif(int id) throws SQLException
    {
          DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
     
         ObservableList<Station> buss = FXCollections.observableArrayList();
     
          
         
         
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("select * from station where idtrajet='"+id +"'");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(new Station(rs.getInt(1),rs.getString(2),rs.getDouble(4),rs.getDouble(5),id));
            }
        } catch (SQLException ex) {
            
        }

     
        return buss;
    } 
       public void modifiertrajet() throws SQLException{
       
        DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
          int idbus=0;
          int idt=0;
       PreparedStatement pt1;
     
            pt1 = con.prepareStatement("select id FROM trajet WHERE Name='"+Tname.getText()+"';");
            ResultSet rs1 = pt1.executeQuery();
            while (rs1.next()) {
                
            idt= rs1.getInt(1);
                
            }
       
 PreparedStatement pt;
            pt = con.prepareStatement("select id FROM bus WHERE name='"+Cbus.getValue()+"';");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
            idbus= rs.getInt(1);
                
            }
           
       
        Trajet t = new Trajet(1,Tname.getText(),idbus);
      
         try{ Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = " UPDATE `trajet` SET `idbus`="+t.getIdbus()+",`Name`='"+t.getName()+"' WHERE id="+idt+");";
       stm.executeUpdate(requeteInsert);
       } catch (SQLException ex) {
            Logger.getLogger(Bus.class.getName()).log(Level.SEVERE, null, ex);
        }
       refreshtrajet();
       // refreshstation();
         ajoutst.setDisable(false);
               suppst.setDisable(false);
        Sname.setText(""); 
       
       }
    
    
    
    
    
    

      
}


