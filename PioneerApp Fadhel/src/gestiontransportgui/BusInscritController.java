/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransportgui;

import com.teamdev.jxmaps.LatLng;
import gestiontransport.Entite.Listmap;
import gestiontransport.Entite.Station;
import gestiontransport.Entite.Trajet;
import DB.DataBase;
import GUI.InscriptionParentController;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author ASUS-PC
 */
public class BusInscritController implements Initializable {
 @FXML
    private String  loginimage2;
 
 
           
    @FXML
    private ComboBox<String>  Ctrajet;
     
    @FXML
    private Button consulter;
      @FXML
    private TextField adresse;
    @FXML
    private Button sinscrire;
    
    @FXML
    private Button supp;
       @FXML
    private Label alerte;
    
            
       
 
    /**
     * Initializes the controller class.
     */
  
     private String id2;
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
     //    DataBase mdb = new DataBase();
         //       Connection  con = DataBase.getInstance().getConnection();
           
        
       
    }
      public  void Setid2(String id2)
    {
        this.id2=id2;
      //  DataBase mdb = new DataBase();
        Connection  con = DataBase.getInstance().getConnection();
  
   PreparedStatement pt2 = null;
   System.out.println(id2);
   int inscrit=0;
     try {
         pt2 = con.prepareStatement("SELECT inscrit from busetcov where cin_p='"+id2+"'");
         ResultSet rs2 = null;
          rs2 = pt2.executeQuery();
         while (rs2.next()){inscrit=rs2.getInt(1); System.out.println(inscrit);}
     } catch (SQLException ex) {
         Logger.getLogger(BusInscritController.class.getName()).log(Level.SEVERE, null, ex);
     }
            
     consulter.setDisable(true);
     Ctrajet.setItems(affichertrajet());
      // System.out.println(inscrit);
           if (inscrit!=0){
                  consulter.setDisable(false);
                sinscrire.setDisable(true);
       adresse.setDisable(true);
       adresse.setText("");
        supp.setDisable(false);
       Ctrajet.setItems(null);}
    }
      
      public void suppinscrit(ActionEvent event) throws SQLException{
      
     // DataBase mdb = new DataBase();
                Connection  con = DataBase.getInstance().getConnection();
    int nombre=0;
    
   Statement stm1= con.createStatement();
       String requeteInsert2 = "UPDATE `busetcov` SET inscrit ="+nombre+"  WHERE cin_p="+id2+";";
       stm1.executeUpdate(requeteInsert2); 
       supp.setDisable(false);
                consulter.setDisable(false);
                sinscrire.setDisable(false);
       adresse.setDisable(false);
       adresse.setText("");
       Ctrajet.setItems(affichertrajet());
      
      
      }
    
      public void  retour(ActionEvent event) throws IOException {
          
           
          
                                                 FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("Transport.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               TransportController apc = loader.getController();
                                                try {
                                                    apc.SetEverything(id2);
                                                    alerte.getScene().setRoot(root);
                                                } catch (SQLException ex) {
                                                    Logger.getLogger(CovoiturageController.class.getName()).log(Level.SEVERE, null, ex);
                                                }
                                              
                                            
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
            
        } 
      
      public void sinscrire(ActionEvent event) throws SQLException, MalformedURLException, IOException{
      
          
            if(!adresse.getText().equals("")&&!Ctrajet.getValue().equals("")){
             String adresse1=adresse.getText().replace(" ", "%20");
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
                //DataBase mdb = new DataBase();
                Connection  con = DataBase.getInstance().getConnection();
          int idtrajet=0;
          
       PreparedStatement pt;
     

            pt = con.prepareStatement("select id FROM Trajet WHERE name='"+Ctrajet.getValue()+"';");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
            idtrajet= rs.getInt(1);
            }

  
       
      
            int nombre=0;
            
                     PreparedStatement pt2;
       
     pt2 = con.prepareStatement("SELECT COUNT(*) from enfant where cin_p='"+id2+"'");
            ResultSet rs2 = pt2.executeQuery();
            while (rs2.next()){nombre=rs2.getInt(1);}
       int inscrit=1;
       
 
       Statement stm= con.createStatement();
       String requeteInsert = "UPDATE `busetcov` SET id_trajet='"+idtrajet+"',longitude='"+longi+"',laltitude='"+lalti+"',nombre_enfant='"+nombre+"',inscrit='"+inscrit+"' WHERE cin_p="+id2+";";
       stm.executeUpdate(requeteInsert);
       
       
       
       Statement stm1= con.createStatement();
       String requeteInsert2 = "UPDATE `bus` SET Capacite = Capacite-"+nombre+"  WHERE id="+idtrajet+";";
       stm1.executeUpdate(requeteInsert2);
       
       sinscrire.setDisable(true);
       adresse.setDisable(true);
        adresse.setText("");
       Ctrajet.setItems(null);
         consulter.setDisable(false);
          supp.setDisable(false);
          alerte.setText("");
       
                
       } else {alerte.setText("champ vide");}
      
      }
      
      
      
       public void consulter(ActionEvent event) throws SQLException{
       
          
		
             //DataBase mdb = new DataBase();
                Connection  con = DataBase.getInstance().getConnection();
 int idtrajet = 0;
 String name = null;
  Double longi = null,lalti = null;
  //  ObservableList<Double> longis = FXCollections.observableArrayList();
  //   ObservableList<Double> laltis = FXCollections.observableArrayList();
   
    PreparedStatement pt3;
  if(Ctrajet.getValue()!=null){
        pt3 = con.prepareStatement("select id FROM trajet WHERE Name='"+Ctrajet.getValue()+"';");
            ResultSet rs3 = pt3.executeQuery();
            while (rs3.next()) {idtrajet=rs3.getInt(1);}//momken 1
            System.out.println(idtrajet);}
  if(Ctrajet.getValue()==null){
  PreparedStatement pt;
    System.out.println(id2);
        pt = con.prepareStatement("select id_trajet FROM busetcov WHERE cin_p='"+id2+"';");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {idtrajet=rs.getInt(1);}//momken 1
            System.out.println(idtrajet);}
  PreparedStatement pt2;
        pt2 = con.prepareStatement("select longtitude,altitude,Name FROM station WHERE idtrajet='"+idtrajet+"'");
            ResultSet rs2 = pt2.executeQuery();
                      ObservableList<Listmap> stations = FXCollections.observableArrayList();
            while (rs2.next()) {
           /*    names.add(rs.getString(2));
            longis.add( rs.getDouble(4));
             laltis.add( rs.getDouble(5));*/
       stations.add(new Listmap( rs2.getDouble(1),null,null,rs2.getDouble(2),rs2.getString(3)));
       /* longi=rs2.getDouble(1);
        lalti=rs2.getDouble(2);
        name=rs2.getString(3);  */
        
        
       
            }
            
            final Mapa example = new Mapa("les stations de ton trajet");
             for (int i=0;i<stations.size();i++)
        {
        example.generateMarker(new LatLng(stations.get(i).getLongi(),stations.get(i).getLalti()),stations.get(i).getNamestation());
        }
          
    //boucle for station and if map exit yarja3 lel acceuil and id2 null
          //  inscrit hasb capacite
              
           // for (Car c : carOL) {
           //  example.generateMarker(new LatLng(longis.,lalti),name);
             
              
           
           
            

       
       
       }
    
    
         public ObservableList<String>  affichertrajet()
    {
        //  DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
         ObservableList<String> buss = FXCollections.observableArrayList();
         PreparedStatement pt;
        try {

            pt = con.prepareStatement("select Name from trajet");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
                
                buss.add(rs.getString(1));
            }
        } catch (SQLException ex) {
            
        }

     
        return buss;
    }
       
    
}
