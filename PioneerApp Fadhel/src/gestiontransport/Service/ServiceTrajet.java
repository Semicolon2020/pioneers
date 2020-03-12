/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.Service;


import gestiontransport.Entite.Bus;
import gestiontransport.Entite.Trajet;
import gestiontransport.IService.IServiceTrajet;
import DB.DataBase;
import java.awt.AWTException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author ASUS-PC
 */
public class ServiceTrajet implements IServiceTrajet{
    
    private Connection con;
    private Statement ste;
    private DataBase mdb;

    public ServiceTrajet() {
        con = DataBase.getInstance().getConnection();

    }


            

    @Override
    public void delete(String nametrajet) throws SQLException{
     Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "DELETE FROM trajet WHERE Name='"+nametrajet+"';";
       stm.executeUpdate(requeteInsert);  
      
           }

    @Override
    public void update(String nametrajet,String busname) throws SQLException {
        
         Statement stm= mdb.getConnection().createStatement();
       String requeteInsert = "UPDATE `trajet` SET `bus_name`='"+busname+"' WHERE Name='"+ nametrajet +"';";
       stm.executeUpdate(requeteInsert);
 }
    
     @Override
     public int recherche(String cbus) throws SQLException {
      //    DataBase mdb = new DataBase();
     Connection  con = DataBase.getInstance().getConnection();
          int idbus=0;
          
       PreparedStatement pt;
     

            pt = con.prepareStatement("select id FROM bus WHERE name='"+cbus+"';");
            ResultSet rs = pt.executeQuery();
            while (rs.next()) {
                
            idbus= rs.getInt(1);
                
            }
            return idbus;
     }
     
      @Override
    public void ajouter(String name,int id) throws SQLException {
         Connection  con = DataBase.getInstance().getConnection();
         try{ Statement stm= con.createStatement();
       String requeteInsert = "INSERT INTO `pionnersapp`.`trajet` (`Name`, `idbus`) VALUES ('"+ name +"','"+id+"');";
       stm.executeUpdate(requeteInsert);
       } catch (SQLException ex) {
            Logger.getLogger(Bus.class.getName()).log(Level.SEVERE, null, ex);
        }}
 
    @Override
    public List<Trajet> afficher() throws SQLException {
        return null;
    
   }

    
}
