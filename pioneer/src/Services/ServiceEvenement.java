/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;
import CrudInterface.Iservice;
import entities.activite;

import entities.evenement;
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
import pioneer.utils.DataBase;




/**
 *
 * @author House
 */
public  class ServiceEvenement implements Iservice<evenement>{

    private Connection con;
    private Statement ste;

    public ServiceEvenement() {
        con = DataBase.getInstance().getConnection();

    }
    
    @Override
    public void ajouter(evenement t) throws SQLException {
        ste = con.createStatement();
        String requeteInsert = "INSERT INTO `pioneersapp`.`evenement` ( `lieu`, `invite`, `description`,  `nom`, `niveau`) VALUES (NULL,  '" + t.getLieu() + "', '" + t.getInvite() + "', '" + t.getDescription()  + "', '" + t.getNom() + "', '" + t.getNiveau() + "');";
        ste.executeUpdate(requeteInsert);
    }
    public void ajouter1(evenement p) throws SQLException
    {
    PreparedStatement pre=con.prepareStatement("INSERT INTO `pioneersapp`.`evenement` ( `lieu`, `invite`, `description`,  `nom`, `niveau`) VALUES (  ?, ?, ?, ?, ?);");
    
    pre.setString(1, p.getLieu());
    pre.setString(2, p.getInvite());
    pre.setString(3, p.getDescription());
    
    pre.setString(4, p.getNom());
    pre.setInt(5, p.getNiveau());
    
    
    
    
    pre.executeUpdate();
    }
            

       @Override
    public boolean delete(evenement t) throws SQLException {
            
        ste = con.createStatement();
        String requeteDelete = "DELETE FROM `evenement` WHERE id = '"+ t.getId() +"'";
          
        
        if(ste.executeUpdate(requeteDelete) == 1)
        {
            System.out.println("Cett evenement a été supprimée avec succès");
        return true;   
        }
        else 
        {
            System.out.println("Cet evenemente n'existe pas");
            return false;
        }
        }

     @Override
    public boolean update(evenement t) throws SQLException {
       
        ste = con.createStatement();
        String requeteDelete = "UPDATE `evenement` SET `lieu`= '"+ t.getLieu() +"',`invite`= '"+ t.getInvite()+"',`description`= '"+ t.getDescription()+"',`nom`= '"+ t.getNom()+"',`niveau`= '"+ t.getNiveau()+"' WHERE id = '"+ t.getId() +"' ";
          
        
        if(ste.executeUpdate(requeteDelete) == 1)
        {
            System.out.println("evenement mise à jour !");
        return true;   
        }
        else 
        {
            System.out.println("Cette evenement n'existe pas");
            return false;
        }
        }

    @Override
    public List<evenement> readAll() throws SQLException {
    List<evenement> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from evenement");
     while (rs.next()) {                
               int id=rs.getInt(1);
               String lieu=rs.getString(2);
               String invite=rs.getString(3);
               String description=rs.getString(4);
               
               String nom=rs.getString(5);
               int niveau=rs.getInt(6);
               
               
               
               evenement e=new evenement(nom,  niveau, invite, lieu, description);
     arr.add(e);
     }
    return arr;
    }

  public ObservableList<evenement> readAllV2() throws SQLException {
    ObservableList<evenement> ActiviteData = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from evenement");
    while (rs.next()) {
               String nom=rs.getString(1);
               int niveau=rs.getInt(2);
               String invite=rs.getString(3);
               String lieu=rs.getString(4);
               String description=rs.getString(5);
               
              
               evenement e = new evenement(nom, niveau, invite, lieu, description );
     ActiviteData.add(e);
     }
    return ActiviteData;
    }
   
}
