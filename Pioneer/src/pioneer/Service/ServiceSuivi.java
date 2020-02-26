/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pioneer.Service;

import pioneer.Entites.Suivi;
import pioneer.IService.IService;
import java.sql.SQLException;
import java.util.List;
import java.sql.*;
import pioneer.Utils.DataBase;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import pioneer.Entites.Evaluation;

/**
 *
 * @author ASUS
 */
public class ServiceSuivi implements IService<Suivi> {
 
    private Connection con;
    private Statement ste;

    public ServiceSuivi() {
        con = DataBase.getInstance().getConnection();
    }
    
    
    public void ajouter1(Suivi p) throws SQLException
    {
    PreparedStatement pre=con.prepareStatement("INSERT INTO `pioneersapp`.`suivi` (`nutrition`, `sommeil`, `sociabilite`, `psychologie`, `id_e`, `id_c`) VALUES ( ?, ?, ?, ?, ?, ?);");
    pre.setString(1, p.getNutrition());
    pre.setString(2, p.getSommeil());
    pre.setString(3, p.getSociabilite());
    pre.setString(4, p.getPsychologie());
    pre.setInt(5, p.getId_e());
    pre.setInt(6, p.getId_c());
    pre.executeUpdate();
    }
            

    @Override
    public boolean delete(Suivi t) throws SQLException {
            
        ste = con.createStatement();
        String requeteDelete = "DELETE FROM `suivi` WHERE id = '"+ t.getId() +"'";
          
        
        if(ste.executeUpdate(requeteDelete) == 1)
        {
            System.out.println("Cette evaluation a été supprimée avec succès");
        return true;   
        }
        else 
        {
            System.out.println("Cette evaluation n'existe pas");
            return false;
        }
        }
        


    @Override
    public boolean update(Suivi t) throws SQLException {
       
        ste = con.createStatement();
        String requeteDelete = "UPDATE `suivi` SET `nutrition`= '"+ t.getNutrition()+"' ,`sommeil`= '"+ t.getSommeil() +"',`sociabilite`= '"+ t.getSociabilite() +"',`psychologie`= '"+ t.getPsychologie()+"' WHERE id = '"+ t.getId() +"' ";
          
        
        if(ste.executeUpdate(requeteDelete) == 1)
        {
            System.out.println("Suivi mis à jour !");
        return true;   
        }
        else 
        {
            System.out.println("Ce suivi n'existe pas");
            return false;
        }
        }
    

    @Override
    public List<Suivi> readAll() throws SQLException {
    List<Suivi> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT `nutrition`, `sommeil`, `sociabilite`, `psychologie`, `id_e`, `id_c` FROM `suivi` ");
     while (rs.next()) {                
               String nutrition=rs.getString(1);
               String sommeil=rs.getString(2);
               String sociabilite=rs.getString(3);
               String psychologie=rs.getString(4);
               int id_e=rs.getInt(5);
               int id_c=rs.getInt(6);
               Suivi p = new Suivi(id_c, id_e ,nutrition, sommeil, sociabilite, psychologie);
     arr.add(p);
     }
    return arr;
    }
    
    public ObservableList<Suivi> readAllV2() throws SQLException {
    ObservableList<Suivi> Data = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT v.id, nutrition, sommeil, sociabilite, psychologie,(SELECT concat(e.nom,' ',e.prenom) WHERE e.id_e=v.id_e) nom, v.id_c FROM suivi v , enfant e WHERE e.id_e = v.id_e");
     while (rs.next()) {                
               int id=rs.getInt(1);
               String nutrition=rs.getString(2);
               String sommeil=rs.getString(3);
               String sociabilite=rs.getString(4);
               String psychologie=rs.getString(5);
               String nom =rs.getString(6);
               int id_c=rs.getInt(7);
               Suivi p = new Suivi(id , nutrition,sommeil,sociabilite,psychologie,nom,id_c);
     Data.add(p);
     }
    return Data;
    }
    
    
    public ObservableList<String> readNomEnfantClasse(String nom) throws SQLException {
        ObservableList<String> arr = FXCollections.observableArrayList();
        System.out.println("classe"+nom);
        ste=con.createStatement();
        ResultSet rs=ste.executeQuery("SELECT Distinct e.nom FROM enfant e , classe c WHERE e.id_c = (SELECT id FROM classe WHERE nom ='"+nom+"')");
        while (rs.next()) {
            String Nom = rs.getString(1);
            arr.add(Nom);
         }
        return arr;
        }
    
    public ObservableList<String> readAllS() throws SQLException {
    ObservableList<String> ClasseData = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select nom from classe");
    while (rs.next()) {
        
               String nom =rs.getString(1);

     ClasseData.add(nom);
     }
    return ClasseData;
    }
    
    
    public int getIdClasse(String i) throws SQLException
    {
            int id = -1;
            ste=con.createStatement();
            ResultSet rs=ste.executeQuery("select c.id from classe c where c.nom ='" +i+"'"); 
            while (rs.next()) {
               id =rs.getInt(1);
        }
        return id;
    }
    
    public int readNom(String nom)throws SQLException{
        int id = -1;
        ste=con.createStatement();
        ResultSet rs=ste.executeQuery("select e.id_e from enfant e where e.nom ='" +nom+"'"); 
        while (rs.next()) {
               id =rs.getInt(1);
        }
        return id;
    }
    
    
}
