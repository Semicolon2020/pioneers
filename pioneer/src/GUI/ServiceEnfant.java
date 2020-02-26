/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import pioneer.utils.DataBase;
import entities.activite;

import java.awt.Image;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.OutputStream;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javax.swing.ImageIcon;


/**
 *
 * @author Alfa Shel
 */
public class ServiceEnfant implements CrudInterface.IServiceEnfant<Enfant>{

     private Connection con;
     private Statement ste;
    
    public ServiceEnfant() {
                con = DataBase.getInstance().getConnection();    
    }
    
    @Override
    public void ajouter(Enfant t) throws SQLException {

        
PreparedStatement pre=con.prepareStatement("INSERT INTO `enfant`(`nom`, `prenom`, `sexe`, `cin_p`, `age`, `photo`)"
        + " VALUES (?,?,?,?,?,?);");
    
        try {
            InputStream is= new FileInputStream(new File(t.getPhoto()));
        
    //FTPUploader ftp=new FTPUploader();
   // ftp.FTPTransfer(t.getFile());
            
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getSexe());
    pre.setString(4, t.getCin_p());
    pre.setString(5, t.getAge());
    pre.setString(6, t.getFile().toURI().toString());
    
    pre.executeUpdate();
    
        } 
    catch (FileNotFoundException ex) {
            
        }
    }

    @Override
    public boolean delete(Enfant t) throws SQLException {
        
        PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`enfant` where id_e =?;");
    
    pre.setInt(1, t.getId_e());
    
     return pre.executeUpdate()==0;
    }

    @Override
    public boolean update(Enfant t) throws SQLException {
        
        if(t.getPhoto()!=null)
{
        PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`enfant` SET `nom`=?,`prenom`=?,"
                                                    + " `sexe`=?,`age`=?, `photo`=?  WHERE id_e=?;");
    
            try {
                InputStream is= new FileInputStream(new File(t.getPhoto()));
            
   
    //ftp.FTPTransfer(t.getFile());
   
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getSexe());
    pre.setString(4, t.getAge());
    pre.setString(5, t.getFile().toURI().toString());
    pre.setInt(6, t.getId_e());
      
     
    return pre.executeUpdate()==0;
    } catch (FileNotFoundException ex) {
                Logger.getLogger(ServiceEnfant.class.getName()).log(Level.SEVERE, null, ex);
            }
}
        else
        {
            PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`enfant` SET `nom`=?,`prenom`=?,"
                                                    + " `sexe`=?,`age`=?  WHERE id_e=?;");
    
            
               
  // FTPUploader ftp=new FTPUploader();
  // ftp.FTPTransfer(t.getFile());         
    
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getSexe());
    pre.setString(4, t.getAge()); 
    pre.setInt(5, t.getId_e());
      
     
    return pre.executeUpdate()==0;
    
        }
        return false;
    }

    @Override
    public List<Enfant> readAll() throws SQLException {
        
    List<Enfant> arr=new ArrayList<>();

    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from enfant ");
     while (rs.next()) {                
               int id_e=rs.getInt(1);
               String nom=rs.getString(2);
               String prenom=rs.getString(3);
               String sexe=rs.getString(4);
               String cin_p=rs.getString(5);
               String age=rs.getString(6);
               
               
               
                Enfant c =new Enfant (id_e, nom, prenom,sexe,cin_p,age);
     arr.add(c);
     }
    return arr;

    }
    
    
    @Override
    public List<Enfant> readParent(String cin) throws SQLException {
        
    List<Enfant> arr=new ArrayList<>();

    ste=con.createStatement();
    
    PreparedStatement pre=con.prepareStatement(" select * from enfant where cin_p =?;");
       pre.setString(1, cin);
        
    ResultSet rs=pre.executeQuery();
    
    
     while (rs.next()) {                
               int id_e=rs.getInt(1);
               String nom=rs.getString(2);
               String prenom=rs.getString(3);
               String sexe=rs.getString(4);
               String cin_p=rs.getString(5);
               String age=rs.getString(6);
               
               
               
                Enfant c =new Enfant (id_e, nom, prenom,sexe,cin_p,age);
     arr.add(c);
     }
    return arr;

    }
    
    
    public ObservableList<Enfant> readAllV2(String cin) throws SQLException {
    ObservableList<Enfant> ActiviteData = FXCollections.observableArrayList();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from enfant where cin_p='"+cin+"'");
    while (rs.next()) {
               String nom=rs.getString(1);
               
               int id =rs.getInt(6);
               
               String prenom=rs.getString(2);
              
              
               Enfant p = new Enfant(id,nom,prenom);
               System.out.println(p);
     ActiviteData.add(p);
     }
    return ActiviteData;
    }
    
    @Override
    public  Enfant read(Enfant t) throws SQLException{
        
        PreparedStatement pre=con.prepareStatement(" select * from enfant where id_e=? and cin_p=? ;");
         pre.setInt(1, t.getId_e());
         pre.setString(2, t.getCin_p());
       Enfant c=new Enfant();  
    ResultSet rs=pre.executeQuery();
     while (rs.next()) {
         
               c.setId_e(rs.getInt(1));
               c.setNom(rs.getString(2));
               c.setPrenom(rs.getString(3));
               c.setSexe(rs.getString(4));            
               c.setAge(rs.getString(6));
               c.setCin_p(rs.getString(5));
                c.setPhoto(rs.getString(7));
     
             

     
                  }
     
     return c;
    }
    
     @Override
    public int NombreEnfInscri() throws SQLException {
        
      //  PreparedStatement pre=con.prepareStatement(" select COUNT(*) from enfant e left join user p on e.cin_p= p.cin where p.etat_compte='1' and p.role='P'");
    
        ste=con.createStatement();
     String requeteInsert = "select COUNT(*) from enfant e left join user p on e.cin_p= p.cin where p.etat_compte='1' and p.role='P'";
     ResultSet rs =  ste.executeQuery(requeteInsert);
        int nbr=0;
     while (rs.next()) {     
     
                nbr=rs.getInt(1);
              
     }
    
 return nbr;  
    }

    @Override
    public ObservableList<Enfant> readParentV2(String cin) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
    
}
