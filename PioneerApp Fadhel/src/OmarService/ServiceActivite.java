/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package OmarService;
import OmarIService.Iservice;
import OmarEntite.activite;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javax.swing.JOptionPane;
import DB.DataBase;



/**
 *
 * @author House
 */
public class ServiceActivite implements Iservice<activite> {

    private Connection con;
    private Statement ste;

    public ServiceActivite() {
        con = DataBase.getInstance().getConnection();

    }
    
    @Override
    public void ajouter(activite t) throws SQLException {
        ste = con.createStatement();
        String requeteInsert = "INSERT INTO `pionnersapp`.`activite` (`nom`, `niveau`, `type`, `lieu`, `description`, `id_ac`) VALUES (NULL, '" + t.getNom()  + "', '" + t.getNiveau() + "', '" + t.getType() + "', '" + t.getLieu() + "', '" + t.getDescription() + "', '" + t.getId_ac() + "');";
        ste.executeUpdate(requeteInsert);
    }
    public void ajouter1(activite p) throws SQLException
    {
    PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`activite` ( `nom`, `niveau`, `type`, `lieu`, `description`, `id_ac`) VALUES ( ?, ?, ?, ?, ?, ?);");
    pre.setString(1, p.getNom());
    
    pre.setInt(2, p.getNiveau());
    pre.setString(3, p.getType());
    pre.setString(4, p.getLieu());
    pre.setString(5, p.getDescription());
    pre.setInt(6, p.getId_ac());
    pre.executeUpdate();
    }
            

    
      @Override
    public boolean delete(activite t) throws SQLException {
            
        ste = con.createStatement();
        String requeteDelete = "DELETE FROM `activite` WHERE id_ac = '"+ t.getId_ac() +"'";
          
        
        if(ste.executeUpdate(requeteDelete) == 1)
        {
            System.out.println("Cette activite a été supprimée avec succès");
        return true;   
        }
        else 
        {
            System.out.println("Cette activite n'existe pas");
            return false;
        }
        }
    
    @Override
    public boolean update(activite t) throws SQLException {
       
        ste = con.createStatement();
        String requeteDelete = "UPDATE `activite` SET `nom`= '"+ t.getNom()  +"',`niveau`= '"+ t.getNiveau() +"',`type`= '"+ t.getType()+"',`lieu`= '"+ t.getLieu()+"',`description`= '"+ t.getDescription()+"',`id_ac`= '"+ t.getId_ac()+"' WHERE id_ac = '"+ t.getId_ac() +"' ";
          
        
        if(ste.executeUpdate(requeteDelete) == 1)
        {
            System.out.println("activite mise à jour !");
        return true;   
        }
        else 
        {
            System.out.println("Cette activite n'existe pas");
            return false;
        }
        }

    @Override
    public List<activite> readAll() throws SQLException {
    List<activite> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from activite");
     while (rs.next()) {                
               
               String nom=rs.getString(1);
               
               int niveau=rs.getInt(2);
               String type=rs.getString(3);
               String lieu=rs.getString(4);
               String description=rs.getString(5);
               int id_ac=rs.getInt(6);
               activite a=new activite(nom,  niveau, type, lieu, description, id_ac);
     arr.add(a);
     }
    return arr;
    }

   public List readActActivite(activite e)throws SQLException{
         List<activite> arr=new ArrayList<>();
        ste=con.createStatement();
        ResultSet rs=ste.executeQuery("select * from activite where id_ac= " +e.getId_ac()); 
         while (rs.next()) {
               String nom=rs.getString(1);
              
               int niveau=rs.getInt(2);
               String type=rs.getString(3);
               String lieu=rs.getString(4);
               String description=rs.getString(5);
               int id_ac=rs.getInt(6);
               
               activite p = new activite(nom, niveau, type, lieu, description, id_ac);
     arr.add(p);
     }
    return arr;
    }

    public ObservableList<activite> readAllV2() throws SQLException {
    ObservableList<activite> ActiviteData = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from activite");
    while (rs.next()) {
               String nom=rs.getString(1);
               int niveau=rs.getInt(2);
               String type=rs.getString(3);
               String lieu=rs.getString(4);
               String description=rs.getString(5);
               int id_ac=rs.getInt(6);
              
               activite p = new activite(nom, niveau, type, lieu, description, id_ac);
     ActiviteData.add(p);
     }
    return ActiviteData;
    }
}
