/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import DB.DataBase;
import Entities.Parent;
import Entities.Responsable;
import Entities.Tuteur;
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
import javax.swing.ImageIcon;
import pioneerapp.FTPUploader;

/**
 *
 * @author Alfa Shel
 */
public class ServiceTuteur implements IService.IServiceTuteur<Tuteur> {
    
    private Connection con;
    private Statement ste;
    
    public ServiceTuteur() {
                con = DataBase.getInstance().getConnection();    
    }

    @Override
    public void ajouter(Tuteur t) throws SQLException {

         PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`user`  (`cin`, `password`, `role`, `nom`, `prenom`, `email`, `num_tel`, `etat_compte`, `etat_civil`, `photo`, `sexe`, `date_embauche`) "
                 + "    VALUES (?,?,'T',?,?,?,?,'2',?,?,?,now());");
    
      
            
            
            
   FTPUploader ftp=new FTPUploader();
   ftp.FTPTransfer(t.getFile());
    
    pre.setString(1, t.getCin());
    pre.setString(2, t.getPassword());
    pre.setString(3, t.getNom());   
    pre.setString(4, t.getPrenom());
    pre.setString(9, t.getSexe());
    pre.setString(5, t.getEmail());
    pre.setString(6, t.getNum_tel());
    pre.setString(7, t.getEtat_civil());    
    pre.setString(8, t.getFile().toURI().toString());
    
    pre.executeUpdate();
    
        } 
    

    

    @Override
    public boolean delete(Tuteur t) throws SQLException {
    PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`user` where cin =? and role='T';");
    
    pre.setString(1, t.getCin());
    
     return pre.executeUpdate()==0;
    }

    @Override
    public boolean update(Tuteur t) throws SQLException {
        
    PreparedStatement     pre=con.prepareStatement("update `pionnersapp`.`user`SET `cin`=?,`password`=?,`nom`=?,`prenom`=?,`email`=?,"
                + "             `num_tel`=?,`etat_compte`=?,`etat_civil`=?,`photo`=?,`sexe`=? WHERE cin=? and role='T';");
    
    
    pre.setString(1, t.getCin());  
    pre.setString(2, t.getPassword());
    
    pre.setString(3, t.getNom());
    pre.setString(4, t.getPrenom());
    pre.setString(5, t.getEmail());
    pre.setString(6, t.getNum_tel());
    pre.setString(7, t.getEtat_compte());
    pre.setString(8, t.getEtat_civil());
    pre.setString(9, t.getPhoto());
    pre.setString(10, t.getSexe());
    pre.setString(11, t.getCin());
     
    return pre.executeUpdate()==0;

    }

    @Override
    public List<Tuteur> readAll() throws SQLException {

    List<Tuteur> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from user where role='T'");
     while (rs.next()) {   
                 String id=rs.getString(1);
               String cin=rs.getString(2);
               String nom=rs.getString(5);
               String prenom=rs.getString(6);
               String sexe=rs.getString(12);
               String date=rs.getDate(13).toString();
               String email=rs.getString(7);
               String password=rs.getString(3);
               String num_tel=rs.getString(8);
               String etat_compte=rs.getString(9);
               String etat_civil=rs.getString(10);
               
            
               
              /* 
                Image MyImg= im.getScaledInstance(label.getWidh(), label.getHeight(),Image.SCALE_SMOOTH);
               ImageIcon newImage = new ImageIcon(MyImg);
               label.setIcon(newImage);
               
               
               */
               
               Tuteur c =new Tuteur (id,cin, nom, prenom,sexe,date,email,password,num_tel,etat_compte,etat_civil);
     arr.add(c);
     }
    return arr;

    }
    
   @Override
    public  Tuteur read(Tuteur t) throws SQLException{
        
        PreparedStatement pre=con.prepareStatement(" select * from user where role='T' and cin=? ;");
         pre.setString(1, t.getCin());
       Tuteur c=new Tuteur();  
    ResultSet rs=pre.executeQuery();
     while (rs.next()) {
         
               c.setId(rs.getString(1));
               c.setCin(rs.getString(2));
               c.setNom(rs.getString(5));
               c.setPrenom(rs.getString(6));
               c.setSexe(rs.getString(12));
               c.setDateEmbauche(rs.getDate(13).toString());
               c.setEmail(rs.getString(7));
               c.setPassword(rs.getString(3));
               c.setNum_tel(rs.getString(8));
               c.setEtat_compte(rs.getString(9));
               c.setEtat_civil(rs.getString(10));
               c.setPhoto(rs.getString(11));
     

     
                  }
     
     return c;
    }
    
     @Override
    public  boolean LoginTuteur(Tuteur t) throws SQLException
    {
        PreparedStatement pre=con.prepareStatement(" select * from user where role='T' and cin=? and password=? ;");
         pre.setString(1, t.getCin());
         pre.setString(2, t.getPassword());
       
    ResultSet rs=pre.executeQuery();
     while (rs.next()) {
         return true;
                         }
     
     return false;
    }
    
    @Override
    public boolean updateMdp(Tuteur t) throws SQLException {
        
    PreparedStatement     pre=con.prepareStatement("update `pionnersapp`.`user`SET `password`=?, `etat_compte`='1' WHERE cin=? and role='T';");
    
    
    pre.setString(2, t.getCin());  
    pre.setString(1, t.getPassword());
    
   
     
    return pre.executeUpdate()==0;

    }

    
}
