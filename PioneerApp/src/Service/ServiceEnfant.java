/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import DB.DataBase;
import Entities.Enfant;
import Entities.Responsable;
import java.awt.Image;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.InputStream;
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

/**
 *
 * @author Alfa Shel
 */
public class ServiceEnfant implements IService.IServiceEnfant<Enfant>{

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
        
    
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getSexe());
    pre.setString(4, t.getCin_p());
    pre.setString(5, t.getAge());
    pre.setBlob(6, is);
    
    pre.executeUpdate();
    
        } 
    catch (FileNotFoundException ex) {
            Logger.getLogger(ServiceResponsable.class.getName()).log(Level.SEVERE, null, ex);
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
        
        PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`enfant` SET `nom`=?,`prenom`=?,"
                                                    + " `sexe`=?,`age`=? WHERE id_e=?;");
    
    
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getSexe());
    pre.setString(4, t.getAge());
    pre.setInt(5, t.getId_e());
      
     
    return pre.executeUpdate()==0;
    }

    @Override
    public List<Enfant> readAll() throws SQLException {
        
    List<Enfant> arr=new ArrayList<>();

    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from enfant");
     while (rs.next()) {                
               int id_e=rs.getInt(1);
               String nom=rs.getString(2);
               String prenom=rs.getString(3);
               String sexe=rs.getString(4);
               String cin_p=rs.getString(5);
               String age=rs.getString(6);
               
               byte[] img=rs.getBytes(7);
               ImageIcon image = new ImageIcon(img);
               Image im = image.getImage();
               
              /* 
                Image MyImg= im.getScaledInstance(label.getWidh(), label.getHeight(),Image.SCALE_SMOOTH);
               ImageIcon newImage = new ImageIcon(MyImg);
               label.setIcon(newImage);
               
               
               */
               
                Enfant c =new Enfant (id_e, nom, prenom,sexe,cin_p,age,im);
     arr.add(c);
     }
    return arr;

    }
    
}
