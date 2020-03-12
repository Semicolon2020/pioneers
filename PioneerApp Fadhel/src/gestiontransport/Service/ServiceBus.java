/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.Service;



import gestiontransport.Entite.Bus;
import gestiontransport.IService.IServiceBus;
import java.sql.SQLException;
import java.util.List;
import java.sql.*;
import DB.DataBase;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;



/**
 *
 * @author House
 */
public class ServiceBus implements IServiceBus {

    private Connection con;
    private Statement ste;
    private DataBase mdb;

    public ServiceBus() {
        con = DataBase.getInstance().getConnection();

    }


    @Override
     public void ajouter(Bus B) throws SQLException {
        //     DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
    
        try{
            Statement stm= con.createStatement();
       String requeteInsert = "INSERT INTO `pionnersapp`.`Bus` (`name`, `Capacite`,`Chauffeur`) VALUES ('"+ B.getName() + "', '" + B.getCapacite() +"','"+B.getChauffeur()+"');";
       stm.executeUpdate(requeteInsert);
       } catch (SQLException ex) {
            Logger.getLogger(Bus.class.getName()).log(Level.SEVERE, null, ex);
        }
       
     }
            

    @Override
    public void delete(Bus b) throws SQLException{
         //DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
    
      Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "DELETE FROM bus WHERE id='"+b.getId()+"';";
       stm.executeUpdate(requeteInsert);  
           }

    @Override
    public void update(Bus B) throws SQLException {
        
         Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "UPDATE `bus` SET `Capacite`='"+B.getCapacite()+"'`name`='"+B.getName()+"`Chauffeur`='"+B.getChauffeur() +"'   WHERE id='"+ B.getId() +"';";
       stm.executeUpdate(requeteInsert);
    
         }

    @Override
    public List<Bus> afficher() throws SQLException {
    List<Bus> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from Bus");
     while (rs.next()) {         
         int id=rs.getInt("id");
               String name=rs.getString("name");
               int capacite=rs.getInt("Capacite");
               String chauffeur=rs.getString("chauffeur");
               Bus B =new Bus(id,name,capacite,chauffeur);
     arr.add(B);
     }
    return arr;
    }
     
  
}
