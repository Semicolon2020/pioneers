/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MahdiService;

import MahdiEntite.Evaluation;
import MahdiEntite.Enfant;
import MahdiIService.IService;
import java.sql.SQLException;
import java.util.List;
import java.sql.*;
import DB.DataBase;
import Entities.Parent;
import java.util.ArrayList;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
/*
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author House
 */
public class ServiceEvaluation implements IService<Evaluation> {

    private Connection con;
    private Statement ste;

    public ServiceEvaluation() {
        con = DataBase.getInstance().getConnection();
    }

   
    public void ajouter1(Evaluation p) throws SQLException
    {
    PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`evaluation` (`score`, `remarque`, `id_e`, `activite`) VALUES ( ?, ?, ?, ?);");
    pre.setInt(1, p.getScore());
    pre.setString(2, p.getRemarque());
    pre.setInt(3, p.getId_e());
    pre.setString(4,p.getActivite());
   // pre.setInt(5, p.getId_c());
    pre.executeUpdate();
    }
            

    @Override
    public boolean delete(Evaluation t) throws SQLException {
            
        ste = con.createStatement();
        String requeteDelete = "DELETE FROM `evaluation` WHERE id = '"+ t.getId() +"'";
          
        
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
    public boolean update(Evaluation t) throws SQLException {
        //System.out.println(t.getId());
        ste = con.createStatement();
        System.out.println(t);
        String requeteDelete = "UPDATE `evaluation` SET `score`= '"+ t.getScore() +"',`remarque`= '"+ t.getRemarque() +"',`activite`= '"+ t.getActivite() +"' WHERE id = '"+ t.getId() +"' ";
          
        
        if(ste.executeUpdate(requeteDelete) == 1)
        {
            System.out.println("Evaluation mise à jour !");
        return true;   
        }
        else 
        {
            System.out.println("Cette evaluation n'existe pas");
            return false;
        }
        }
    

    @Override
    public List<Evaluation> readAll() throws SQLException {
    List<Evaluation> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT `score`, `remarque`, `id_e`, `activite` FROM `evaluation`");
     while (rs.next()) {                
               int score=rs.getInt("score");
               String remarque=rs.getString(2);
               int id_e=rs.getInt("id_e");
               String activite=rs.getString(4);
              // int id_c=rs.getInt(5);
               Evaluation p = new Evaluation(score, id_e, remarque,activite);
     arr.add(p);
     }
    return arr;
    }
    
    public ObservableList<Evaluation> readAllV2() throws SQLException {
    ObservableList<Evaluation> Data = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT v.id, score, remarque, (SELECT concat(e.nom,' ',e.prenom) WHERE e.id_e=v.id_e) nom, activite FROM evaluation v , enfant e WHERE e.id_e = v.id_e");
        while (rs.next()) {                
               int id=rs.getInt(1);
               int score=rs.getInt(2);
               String remarque=rs.getString(3);
               String nom =rs.getString(4);
               String activite=rs.getString(5);
              // int id_c=rs.getInt(6);
               Evaluation p = new Evaluation( id,score, nom,  remarque, activite);
     Data.add(p);
     }
    return Data;
    }
    
    public ObservableList<Evaluation> readAllV3(Parent p1) throws SQLException {
    ObservableList<Evaluation> Data = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT id ,score ,remarque ,(SELECT concat(e.nom,' ',e.prenom) FROM enfant e WHERE e.cin_p = '"+p1.getCin()+"' )nom , activite  from enfant e inner JOIN evaluation ev on e.id_e = ev.id_e where e.cin_p = '"+p1.getCin()+"'  ");
        while (rs.next()) {                
               int id=rs.getInt(1);
               int score=rs.getInt(2);
               String remarque=rs.getString(3);
               String nom =rs.getString(4);
               String activite=rs.getString(5);
               //int id_c=rs.getInt(6);
               Evaluation p = new Evaluation( id,score, nom, remarque, activite);
     Data.add(p);
     }
    return Data;
    }
    
    
    public ObservableList<String> readNomEnfantClasse() throws SQLException {
        ObservableList<String> arr = FXCollections.observableArrayList();
        //System.out.println("classe"+nom);
        ste=con.createStatement();
        ResultSet rs=ste.executeQuery("SELECT Distinct nom FROM enfant");
        while (rs.next()) {
            String Nom = rs.getString(1);
            arr.add(Nom);
         }
        return arr;
        }
    
    //"SELECT Distinct e.nom FROM enfant e , classe c WHERE e.id_c = (SELECT id FROM classe WHERE nom ='"+nom+"')"
    
    
    
    
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
    
    public ObservableList<String> readAct() throws SQLException {
    ObservableList<String> ClasseData = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select nom from activite");
    while (rs.next()) {
        
               String nom =rs.getString(1);

     ClasseData.add(nom);
     }
    return ClasseData;
    }
    
    public int readAllA(String nom,String cin) throws SQLException {
   int AVGScore = 0;
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT AVG(score) FROM enfant e inner JOIN evaluation ev on ev.id_e = e.id_e where e.cin_p = '"+cin+"' and ev.activite ='"+nom+"'");
    while (rs.next()) { 

 
    AVGScore =rs.getInt(1);
    }
    return AVGScore;
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



/*

SELECT id FROM table ORDER BY id DESC LIMIT 1



public Integer insertQueryGetId(String query) {
    Integer numero=0;
    Integer risultato=-1;
    try {
        Statement stmt = db.createStatement();
        numero = stmt.executeUpdate(query);

        ResultSet rs = stmt.getGeneratedKeys();
        if (rs.next()){
            risultato=rs.getInt(1);
        }
        rs.close();

        stmt.close();
    } catch (Exception e) {
        e.printStackTrace();
        errore = e.getMessage();
        risultato=-1;
    }
  return risultato;
}
*/
