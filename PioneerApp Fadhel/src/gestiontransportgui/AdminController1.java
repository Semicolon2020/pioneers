/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransportgui;

import gestiontransport.Entite.Bus;
import gestiontransport.Entite.ListTrajet;
import gestiontransport.Entite.Station;
import gestiontransport.Entite.Trajet;
import gestiontransport.Service.ServiceBus;
import gestiontransport.Service.ServiceTrajet;
import gestiontransport.Service.TrayIconDemo;
import DB.DataBase;
import GUI.InscriptionParentController;
import GUI.ResponsableMainController;
import java.awt.AWTException;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
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
import java.util.regex.Matcher;
import java.util.regex.Pattern;
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
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.TableView;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import jdk.nashorn.internal.runtime.Debug;

/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class AdminController1 implements Initializable {

      
   
              
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
    private Button modifbb;
    
        @FXML
    private Button suppbb;
    
      
         @FXML
    private Label alerte;
          @FXML
    private Button modiftr;
     
    @FXML
    private TextField bname;
    @FXML
    private TextField Tname;
       @FXML
    private TextField Tname1;
    
       @FXML
    private Button modif1;
       @FXML
    private Button supp1;
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
     @FXML private TableView<ListTrajet> tabt;
     @FXML private TableView<Station> tabs;
    
    @FXML
      private TableColumn<Bus, String> id;
    
      @FXML
      private TableColumn<ListTrajet, String> trid;
        @FXML
      private TableColumn<ListTrajet, String> trname;
          @FXML
      private TableColumn<ListTrajet, String> tridbus;
            @FXML
      private TableColumn<Station, String> stname;
              @FXML
      private TableColumn<Station, String> stlong;
                @FXML
      private TableColumn<Station, String> stalt;
                  @FXML
      private TableColumn<Station, String> stid;
    
    
    
    
    @FXML
      private TableColumn<ListTrajet, String> busnom;
    
      @FXML
      private TableColumn<Bus, String> name;
    @FXML 
    private TableColumn<Bus, String> Capacite;
    @FXML
    private TableColumn<Bus, String> Chauffeur;
   
   // DataBase mdb = new DB();
    private  Connection  con ;
   
     
     private Statement ste;
    private Button retour;
    private String cin;
    @FXML
    private Button Retour;
   

    
     
   
        @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        trajetname.setDisable(true);
        try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController1.class.getName()).log(Level.SEVERE, null, ex);
        }
     
               modiftr.setDisable(true);
            tabt.setDisable(false);
            ajoutst.setDisable(true);
               suppst.setDisable(true);
             bid.setDisable(true);
             finajout.setDisable(true);
             modif1.setDisable(true);
             supp1.setDisable(true);
             tabs.setDisable(true);
               refreshbus();
                refreshtrajet();
                ajoutttr.setDisable(false);
                Sname.setDisable(true);
                
  
    }
    
     public void SetCinR(String cin)
    {
        this.cin=cin;
    }
    
     @FXML
    public void ajoutbus(ActionEvent event) throws SQLException{
         if(!bname.getText().equals("")&&  !bcapacite.getText().equals("") &&  !bchauffeur.getText().equals("")){
        Bus b = new Bus(5,bname.getText(),Integer.valueOf(bcapacite.getText()),bchauffeur.getText());
       ServiceBus s=new ServiceBus();
       s.ajouter(b);
      
       try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController1.class.getName()).log(Level.SEVERE, null, ex);
        }
       emptybus();
       if(ajoutttr.isDisable()==false){ refreshbus();}
       else {Cbus.setItems(afficherbus3(0));}
    
        
       
       }}
    
        @FXML
      private void suppbus(ActionEvent event) throws SQLException{  
          
         ObservableList<Bus> selectedRows, allPeople;
        allPeople = tabb.getItems();
        //this gives us the rows that were selected
        selectedRows = tabb.getSelectionModel().getSelectedItems();
       Bus b = tabb.getSelectionModel().getSelectedItem();
           ServiceBus s=new ServiceBus();
       s.ajouter(b);
       refreshbus();
       emptybus();
          
      }
      
      @FXML
      private void modifbus(ActionEvent event) throws SQLException{ 
          
       Bus B = new Bus (Integer.valueOf(bid.getText()),bname.getText(),Integer.valueOf(bcapacite.getText()),bchauffeur.getText());
      
       refreshbus();
       emptybus();
      }
      
    @FXML
       public void userClickedOnTablebus()
    {
         Bus b = tabb.getSelectionModel().getSelectedItem();    
         bid.setText(""+b.getId()+"");
         bname.setText(b.getName());
         bcapacite.setText(""+b.getCapacite()+"");
         bchauffeur.setText(b.getChauffeur());      
    }
    @FXML
       public void userClickedOnTablestation()
    {
         ObservableList<Station> selectedRows, allPeople;
        allPeople = tabs.getItems();
        //this gives us the rows that were selected
        selectedRows = tabs.getSelectionModel().getSelectedItems();
       Station S = tabs.getSelectionModel().getSelectedItem();
        Sname.setText(S.getName());     
    }
       
    @FXML
          public void userClickedOnTabletrajet() throws SQLException
    {
          refreshstation();
         ObservableList<ListTrajet> selectedRows, allPeople;
        allPeople = tabt.getItems();
        //this gives us the rows that were selected
        selectedRows = tabt.getSelectionModel().getSelectedItems();
       ListTrajet T = tabt.getSelectionModel().getSelectedItem();
        trajetname.setText(T.getName());  
        modif1.setDisable(false);
        supp1.setDisable(false);
        ajoutttr.setDisable(false);
        tabs.setDisable(false);
        ajoutst.setDisable(true);
        suppst.setDisable(true);
        finajout.setDisable(true);
        Tname1.setText("");
          Tname.setText("");
         refreshstation();
        
        
    }
       
       
      
      
      
      public ObservableList<Bus>  afficherbus()
    {
         // DataBase mdb = new DataBase();
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
      
      public ObservableList<String>  afficherbus2() throws SQLException
    { ObservableList<String> buss = FXCollections.observableArrayList();
        Connection  con = DataBase.getInstance().getConnection();
        Statement  ste=con.createStatement();
    ResultSet Rs=ste.executeQuery("select name from Bus");
     while (Rs.next()) {    buss.add(Rs.getString(1));}            
       

       
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
     
//DataBase mdb = new DataBase();
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
     
     
    @FXML
      public void ajouttrajet(ActionEvent event) throws SQLException, AWTException{
             
          if(Tname.getText().equals("") || Tname1.getText().equals("")){alerte.setText("champ vide");}
          if(Tname.getText().equals(Tname1.getText())){alerte.setText("champ duplique");}
          if(!Tname.getText().equals("")&&!Tname1.getText().equals("")&&!Tname.getText().equals(Tname1.getText())){
     
                ServiceTrajet s=new ServiceTrajet();
                int id_bus= s.recherche(Cbus.getValue());
              /* DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
          int idbus=0;
          
       PreparedStatement pt;
     

            pt = con.prepareStatement("select id FROM bus WHERE name='"+Cbus.getValue()+"';");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
            idbus= rs.getInt(1);
                
            }*/
           
       
        Trajet t = new Trajet(1,Tname.getText()+"-"+Tname1.getText(),id_bus);
      
                ServiceTrajet s1=new ServiceTrajet();
                s1.ajouter(t.getName(),t.getIdbus());
       
       refreshtrajet();
       // refreshstation();
         ajoutst.setDisable(false);
               suppst.setDisable(false);
        Sname.setText(""); 
        Sname.setDisable(false);
        tabt.setDisable(true);
        modif1.setDisable(true);
        modiftr.setDisable(true);
        tabs.setDisable(false);
        supp1.setDisable(true);
        ajoutttr.setDisable(true);
         finajout.setDisable(false);
         
       
       }}
      
      
    @FXML
    public void ajoutstation(ActionEvent event) throws SQLException, IOException{
        
        if(finajout.isDisable()==false){
        
         if(!Sname.getText().equals("")){
   
   ///////////
   
     
             String adresse1=Sname.getText().replace(" ","%20");
        URL url = new URL("https://api.opencagedata.com/geocode/v1/json?q="+adresse1+"&key=298b7f9be7d54d9ab21c3e365567b3f0&language=en&pretty=1");
InputStream is = url.openConnection().getInputStream();
BufferedReader reader = new BufferedReader( new InputStreamReader( is )  );
int i=0;
 String lalti=null;
String line = null;
   int k=0;   
 int firstIndex=-1;

  String longi="";
while( ( line = reader.readLine())  != null || i==1 || i==2 || i==0 )  {
 firstIndex =line.indexOf("geometry", 10);
   if (firstIndex==10){i++;}
   
  
    else if(i==1){  Pattern p = Pattern.compile("[0-9]*[.][0-9]*") ;  
Matcher m = p.matcher(line) ;  
  i++;
 while (m.find()) {
    System.out.println(m.group()) ;
    longi=m.group();
}}
   
     else if (i==2){ 
        Pattern p1 = Pattern.compile("[0-9]*[.][0-9]*") ; 
       
        Matcher m1 = p1.matcher(line) ;
        while (m1.find()) {
    System.out.println(m1.group()) ;
            lalti = m1.group();
}
        i=3;
      
  
}}
   
   
   /////////////
   // DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
       PreparedStatement pt;
       int id=1;
     pt = con.prepareStatement("SELECT id FROM trajet  ORDER BY id DESC LIMIT 1");
            ResultSet rs = pt.executeQuery();
            while (rs.next()){id=rs.getInt(1);}
             System.out.println(id);
       Station s=new Station(1,Sname.getText(), Double.valueOf(longi)  , Double.valueOf(lalti) ,id);
       
       Statement stm= con.createStatement();
       String requeteInsert = "INSERT INTO `pionnersapp`.`station` (`name`,`idtrajet`,`longtitude`,`altitude`) VALUES ('" +s.getName()+ "','"+s.getIdtrajet()+"','"+s.getLongtitude()+ "','"+s.getAltitude()+ "');";
       stm.executeUpdate(requeteInsert);
       refreshstation();
       Sname.setText("");}} else {
            int id3=0;
          //   DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
       PreparedStatement pt;
     pt = con.prepareStatement("SELECT id FROM trajet  where id='"+trajetname.getText()+"'");
            ResultSet rs = pt.executeQuery();
            while (rs.next()){id3=rs.getInt(1);}
            
            modifstation(id3);}
    
         
        
    
         
    }
        public void modifstation(int id1) throws SQLException, MalformedURLException, IOException{
         if(!Sname.getText().equals("")){
   
   int id=0;
   // DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
       PreparedStatement pt;
     pt = con.prepareStatement("SELECT id FROM trajet where id='"+id1+"'");
            ResultSet rs = pt.executeQuery();
            while (rs.next()){id=rs.getInt(1);}
             String adresse1=Sname.getText().replace(" ","%20");
            URL url = new URL("https://api.opencagedata.com/geocode/v1/json?q="+adresse1+"&key=298b7f9be7d54d9ab21c3e365567b3f0&language=en&pretty=1");
InputStream is = url.openConnection().getInputStream();
BufferedReader reader = new BufferedReader( new InputStreamReader( is )  );
int i=0;
String line = null;
   int k=0;   
   String longi = null,lalti = null;
 int firstIndex=-1;
while( ( line = reader.readLine())  != null || i==1 || i==2 || i==0 )  {
 firstIndex =line.indexOf("geometry", 10);
   if (firstIndex==10){i++;}
   
  
    else if(i==1){  Pattern p = Pattern.compile("[0-9]*[.][0-9]*") ;  
Matcher m = p.matcher(line) ;  
  i++;
 while (m.find()) {
     lalti=m.group();
    System.out.println(m.group()) ;
}}
   
     else if (i==2){ 
        Pattern p1 = Pattern.compile("[0-9]*[.][0-9]*") ; 
        
        Matcher m1 = p1.matcher(line) ;
        while (m1.find()) {longi=m1.group();
    System.out.println(m1.group()) ;
}
        i=3;
      
  
}}
      
      Station s=new Station(1,Sname.getText(), Double.valueOf(longi) ,Double.valueOf(lalti) ,id1);
       
       Statement stm= con.createStatement();
       String requeteInsert = "INSERT INTO `pionnersapp`.`station` (`name`,`idtrajet`,`longtitude`,`altitude`) VALUES ('" +s.getName()+ "','"+s.getIdtrajet()+"','"+s.getLongtitude()+ "','"+s.getAltitude()+ "');";
       stm.executeUpdate(requeteInsert);
       refreshstation();
       Sname.setText("");}
    
    }
    
    
    @FXML
      public void suppstation() throws SQLException{
           if(finajout.isDisable()==true){
       
      int id=0;
    //  DataBase mdb = new DataBase();
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
         Statement stm= con.createStatement();
       String requeteInsert = "DELETE FROM station WHERE idtrajet='"+id+"' and id='"+S.getId()+"';";
       stm.executeUpdate(requeteInsert);  
       refreshstation();
           }else { int id3=0;
            // DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
       PreparedStatement pt;
     pt = con.prepareStatement("SELECT id FROM trajet  where id='"+trajetname.getText()+"'");
            ResultSet rs = pt.executeQuery();
            while (rs.next()){id3=rs.getInt(1);}
            
            suppstation2(id3);
      
            
            
           }
      }
      public void  suppstation2(int id3) throws SQLException{
          Connection  con = DataBase.getInstance().getConnection();
          ObservableList<Station> selectedRows, allPeople;
        allPeople = tabs.getItems();
        //this gives us the rows that were selected
        selectedRows = tabs.getSelectionModel().getSelectedItems();
       Station S = tabs.getSelectionModel().getSelectedItem();
         Statement stm= con.createStatement();
       String requeteInsert = "DELETE FROM station WHERE idtrajet='"+id3+"' and id='"+S.getId()+"';";
       stm.executeUpdate(requeteInsert);  
       refreshstation();}
               
    public void refreshtrajet(){
        tabt.setItems(null);
              trid.setCellValueFactory(new PropertyValueFactory<ListTrajet, String>("id"));
            trname.setCellValueFactory(new PropertyValueFactory<ListTrajet, String>("Name"));
        tridbus.setCellValueFactory(new PropertyValueFactory<ListTrajet, String>("idbus"));
        busnom.setCellValueFactory(new PropertyValueFactory<ListTrajet, String>("nombus"));
     
        
            tabt.setItems(affichertrajet()); }
    
    public void refreshstation() throws SQLException{
           
         tabs.setItems(null);
        stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(afficherstation());
        
    
    }
    
   
    
 
    
      public ObservableList<Station>  afficherstation() throws SQLException
    {
        
        
         // DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
     
         ObservableList<Station> buss = FXCollections.observableArrayList();
         int id=0;
          if(tabt.isDisable()==true){
       PreparedStatement pt1;
     pt1 = con.prepareStatement("SELECT id FROM trajet  ORDER BY id DESC LIMIT 1");
            ResultSet rs1 = pt1.executeQuery();
            while (rs1.next()){id=rs1.getInt(1);}}else{
               PreparedStatement pt1;
     pt1 = con.prepareStatement("SELECT id FROM trajet  where Name='"+trajetname.getText()+"'");
            ResultSet rs1 = pt1.executeQuery();
            while (rs1.next()){id=rs1.getInt(1);}
          
          
          }
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
      
      public ObservableList<ListTrajet>  affichertrajet()
    {
        //  DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
         ObservableList<ListTrajet> buss = FXCollections.observableArrayList();
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("SELECT t.id, t.Name,t.idbus,(SELECT b.name where t.idbus = b.id )nombus FROM trajet t ,bus b where t.idbus =b.id ");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(new ListTrajet(rs.getInt(1),rs.getString(2),rs.getInt(3),rs.getString(4)));
                System.out.println(buss.toString());
            }
        } catch (SQLException ex) {
            
        }

     
        return buss;
    }
      
    @FXML
       public void supptrajet() throws SQLException {
           
           
      int id=0;
    //  DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
    
           
            ObservableList<ListTrajet> selectedRows, allPeople;
        allPeople = tabt.getItems();
        //this gives us the rows that were selected
        selectedRows = tabt.getSelectionModel().getSelectedItems();
       ListTrajet T = tabt.getSelectionModel().getSelectedItem();
        trajetname.setText(T.getName()); 
        
        
         
         Statement stm=con.createStatement();
       String requeteInsert = "DELETE station,trajet FROM trajet   INNER JOIN station ON station.idtrajet = trajet.id WHERE  trajet.id ='"+T.getId()+"';";
       stm.executeUpdate(requeteInsert);  
        Statement stm1=con.createStatement();
       String requeteInsert2 = "DELETE  FROM trajet WHERE id ="+T.getId()+";";
       stm1.executeUpdate(requeteInsert2);
       trajetname.setText("");
       refreshtrajet();
      
    
            
      }
       
       
    @FXML
        public void modifiertrajet(ActionEvent event) throws IOException, SQLException{
       Cbus.setItems(null);
           tabb.setDisable(true);
           suppbb.setDisable(true);
           modifbb.setDisable(true);
            
            tabt.setDisable(true);
           
               modiftr.setDisable(false);
               ajoutttr.setDisable(true);
               finajout.setDisable(true);
                ajoutst.setDisable(false);
               suppst.setDisable(false);
         ObservableList<ListTrajet> selectedRows, allPeople;
        allPeople = tabt.getItems();
        //this gives us the rows that were selected
        selectedRows = tabt.getSelectionModel().getSelectedItems();
       ListTrajet T = tabt.getSelectionModel().getSelectedItem();
        Cbus.setItems(afficherbus3(T.getId()));
     //  trajetname.setDisable(true);
       modif1.setDisable(true);
       supp1.setDisable(true);
     Sname.setDisable(false);
        Sname.setText("");
              
          
            
             stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(null);
        tabs.setItems(afficherstationmodif(T.getIdbus()));
        }
        
     
       
      
      
    @FXML
       public void finajout() {
           
           
           modif1.setDisable(false);
           supp1.setDisable(false);
           
           
           Sname.setText("");
            Tname.setText("");  
             Tname1.setText(""); 
            Cbus.setItems(null);
           try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController1.class.getName()).log(Level.SEVERE, null, ex);
        }
     
       stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(null);
            refreshtrajet();
            finajout.setDisable(true);
            ajoutttr.setDisable(false);
            tabt.setDisable(false);
            ajoutst.setDisable(true);
            suppst.setDisable(true);
            modiftr.setDisable(true);
            
       
       
       
       }
       
     public ObservableList<Station>  afficherstationmodif(int id) throws SQLException
    {
        //  DataBase mdb = new DataBase();
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
    @FXML
     public void modiftrajet(ActionEvent event) throws SQLException{
       
           if(!Tname1.getText().equals("") && !Tname.getText().equals("") && !Cbus.getValue().equals("")){
      // DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
          int idbus=0;
          int idt=0;
       PreparedStatement pt1;
       String trajetname1=Tname.getText()+"-"+Tname1.getText();
     
            pt1 = con.prepareStatement("select id FROM trajet WHERE Name='"+trajetname.getText()+"';");
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
          
         try{ Statement stm= con.createStatement();
       String requeteInsert = " UPDATE `trajet` SET idbus='"+idbus+"',Name='"+trajetname1+"' WHERE id='"+idt+"';";
       stm.executeUpdate(requeteInsert);
       } catch (SQLException ex) {
            Logger.getLogger(Bus.class.getName()).log(Level.SEVERE, null, ex);
        }
       refreshtrajet();
       // refreshstation();
       modif1.setDisable(true);
       supp1.setDisable(true);
         ajoutst.setDisable(true);
               suppst.setDisable(true);
               Tname.setText("");
                 Tname1.setText("");
                 modiftr.setDisable(true);
                 finajout.setDisable(true);
                 ajoutttr.setDisable(false);
                 tabb.setDisable(false);
           suppbb.setDisable(false);
           modifbb.setDisable(false);
                    
             Cbus.setItems(null);
              try {
            Cbus.setItems(afficherbus2());
            
        } catch (SQLException ex) {
            Logger.getLogger(AdminController1.class.getName()).log(Level.SEVERE, null, ex);
        }
        Sname.setText("");
        stid.setCellValueFactory(new PropertyValueFactory<Station, String>("id"));
               stname.setCellValueFactory(new PropertyValueFactory<Station, String>("Name"));
       stlong.setCellValueFactory(new PropertyValueFactory<Station, String>("Longtitude"));
       stalt.setCellValueFactory(new PropertyValueFactory<Station, String>("Altitude"));
            tabs.setItems(null);
            tabt.setDisable(false);
            
                 
               
        Sname.setDisable(true);
       
       }}

    public ObservableList<String> afficherbus3(int T) throws SQLException {
        
      //  DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
         ObservableList<String> buss = FXCollections.observableArrayList();
         PreparedStatement pt;
        

            pt = con.prepareStatement("SELECT name from bus where id not in (SELECT idbus from trajet)");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(rs.getString(1));
            }
            PreparedStatement pt2;
       

            pt2 = con.prepareStatement("SELECT name from bus where id='"+T+"'");
            ResultSet rs2 = pt2.executeQuery();
            while (rs2.next()) {
                
                
                buss.add(rs2.getString(1));
            }
            
            
            
      

     
        return buss;
        
        
   }

    @FXML
    private void RetourAction(ActionEvent event) {
        
                                       FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("/GUI/ResponsableMain.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               ResponsableMainController apc = loader.getController();
                                              apc.setCin(cin);
                                              
                                            Retour.getScene().setRoot(root);
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
        
    }

 
      
}


