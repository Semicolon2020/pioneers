/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransportgui;

import com.teamdev.jxmaps.LatLng;
import gestiontransport.Entite.Listmap;
import DB.DataBase;
import GUI.InscriptionParentController;
import GUI.ParentMainController;
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
public class CovoiturageController implements Initializable {
 private String id2;
  
  @FXML
  private TextField adresse;
  @FXML
  private Button suppoffre;
   @FXML
  private Label alert;
  @FXML
  private Button offre;
  @FXML
  private Button cherche;
    @FXML
    private Button Retour;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        // TODO
     //   Image FrontImg= new Image("/img/hbib.jpg");
     // loginimage2.setImage(FrontImg);
    }    
      public  void Setid2(String id2)
    {
        this.id2=id2;
        // DataBase mdb = new DataBase();
                Connection  con = DataBase.getInstance().getConnection();
  
   PreparedStatement pt2 ;
   System.out.println(id2);
   int d_o=0;
     try {
         pt2 = con.prepareStatement("SELECT d_o from busetcov where cin_p='"+id2+"'");
         ResultSet rs2 = null;
          rs2 = pt2.executeQuery();
         while (rs2.next()){d_o=rs2.getInt(1); System.out.println(d_o);}
     } catch (SQLException ex) {
       //  Logger.getLogger(BusInscritController.class.getName()).log(Level.SEVERE, null, ex);
     }
            
   suppoffre.setDisable(true);
   alert.setText("");
           
     
      // System.out.println(inscrit);
           if (d_o==1){
                  suppoffre.setDisable(false);
                cherche.setDisable(true);
       offre.setDisable(true);
       }
        
        
        
    }

    @FXML
    private void cherchetrajet(ActionEvent event) throws  IOException, SQLException {
        
        
        //DataBase mdb = new DataBase();
                Connection  con = DataBase.getInstance().getConnection();
 
                
               Double longi,lalti;
               String nom=null,num=null;
       PreparedStatement pt2;
       int d_o=1;
        pt2 = con.prepareStatement("select longitude,laltitude,nomparent,num from busetcov WHERE d_o='"+d_o+"'");
            ResultSet rs2 = pt2.executeQuery();
             ObservableList<Listmap> offres = FXCollections.observableArrayList();
                     final Mapa example = new Mapa("voici tous les offres");
            while (rs2.next()) {
           /*    names.add(rs.getString(2));
            longis.add( rs.getDouble(4));
             laltis.add( rs.getDouble(5));*/
offres.add(new Listmap( rs2.getDouble(1),rs2.getString(3),rs2.getString(4),rs2.getDouble(2),null));
      
        longi=rs2.getDouble(1);
        lalti=rs2.getDouble(2);
        nom=rs2.getString(3);  
        num=rs2.getString(4); 
        
        
        

    }
            for (int i=0;i<offres.size();i++)
        {
        example.generateMarker(new LatLng(offres.get(i).getLongi(),offres.get(i).getLalti()),offres.get(i).getNomparent()+"-"+offres.get(i).getNum());
        }
           
    
    alert.setText("");
    }

    
    
    @FXML
    private void suppoffre(ActionEvent event) throws SQLException{
 //   DataBase mdb = new DataBase();
                Connection  con = DataBase.getInstance().getConnection();
    int nombre=0;
    
   Statement stm1= con.createStatement();
       String requeteInsert2 = "UPDATE `busetcov` SET d_o ="+nombre+"  WHERE cin_p="+id2+";";
       stm1.executeUpdate(requeteInsert2); 
       suppoffre.setDisable(true);
                cherche.setDisable(false);
       offre.setDisable(false);
       adresse.setDisable(false);
       alert.setText("offre supprime");
    
    }
    
    @FXML
    private void offre(ActionEvent event) throws IOException, SQLException {
       if(!adresse.getText().equals("")){
             String adresse1=adresse.getText().replace(" ","%20");
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
  // DataBase mdb = new DataBase();
   Connection  con = DataBase.getInstance().getConnection();
       
int d_o=1;



      Statement stm= con.createStatement();
       String requeteInsert = "UPDATE `pionnersapp`.`busetcov` SET longitude='"+longi+"' , laltitude='"+lalti+"',d_o='"+d_o+"' WHERE cin_p="+id2+";";
       stm.executeUpdate(requeteInsert);
       adresse.setDisable(true);
       suppoffre.setDisable(false);
      cherche.setDisable(true);
       offre.setDisable(true);
       alert.setText("offre ajoutee");
       
       
        
    } else if(adresse.getText().equals(""))
       
       
       {alert.setText("adresse vide");}}

    @FXML
    private void Retour(ActionEvent event) {
                                                  FXMLLoader loader = new FXMLLoader
                                                    (getClass()
                                                     .getResource("Transport.fxml"));

                                                     javafx.scene.Parent root;
                                           try {
                                               root = loader.load();
                                               TransportController apc = loader.getController();
                                                try {
                                                    apc.SetEverything(id2);
                                                    alert.getScene().setRoot(root);
                                                } catch (SQLException ex) {
                                                    Logger.getLogger(CovoiturageController.class.getName()).log(Level.SEVERE, null, ex);
                                                }
                                              
                                            
                                           } catch (IOException ex) {
                                               Logger.getLogger(InscriptionParentController.class.getName()).log(Level.SEVERE, null, ex);
                                           }
    }

     
     
     
     
     
         
            
}
     
     
    

