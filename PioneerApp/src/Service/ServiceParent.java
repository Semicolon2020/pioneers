/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import DB.DataBase;
import Entities.Parent;
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
public class ServiceParent implements IService.IServiceParent<Parent>{

    private Connection con;
     private Statement ste;
    
    public ServiceParent() {
                con = DataBase.getInstance().getConnection();    
    }
    
    @Override
    public void ajouter(Parent t) throws SQLException {
        
         PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`parent` (`cin`, `nom`, `prenom`, `email`, `password`, `num_tel`, `nb_enfant`, `etat_civil`, `photo`)"
                 + "                                                             VALUES (?,?,?,?,?,?,?,?,?);");
    
        try {
            InputStream is= new FileInputStream(new File(t.getPhoto()));
        
    
    pre.setString(1, t.getCin());
    pre.setString(2, t.getNom());
    pre.setString(3, t.getPrenom());
    pre.setString(4, t.getEmail());
    pre.setString(5, t.getPassword());
    pre.setString(6, t.getNum_tel());
    pre.setInt(7, t.getNb_enf());
    pre.setString(8, t.getEtat_civil());
    pre.setBlob(9, is);
    
    pre.executeUpdate();
    
        } 
    catch (FileNotFoundException ex) {
            Logger.getLogger(ServiceResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @Override
    public boolean delete(Parent t) throws SQLException {
       
    PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`parent` where cin =?;");
    
    pre.setString(1, t.getCin());
    
     return pre.executeUpdate()==0;
    }

    @Override
    public boolean update(Parent t) throws SQLException {

    PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`parent`SET `nom`=?,`prenom`=?,"
            + "                                                `email`=?,`password`=?,`num_tel`=?,`etat_civil`=?, `nb_enfant`=? WHERE cin=?;");
    
    
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getEmail());
    pre.setString(4, t.getPassword());
    pre.setString(5, t.getNum_tel());
    pre.setString(6, t.getEtat_civil());
      
    pre.setInt(7, t.getNb_enf());
     pre.setString(8, t.getCin());
    
    return pre.executeUpdate()==0;
    }

    
    
    @Override
    public List<Parent> readAll() throws SQLException {
        
        List<Parent> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from parent");
     while (rs.next()) {     
         
         
         
         
               String cin=rs.getString(1);
               String nom=rs.getString(2);
               String prenom=rs.getString(3);
               String email=rs.getString(4);
               String password=rs.getString(5);
               String num_tel=rs.getString(6);
               int nb_enf=rs.getInt(7);
               String etat_civil=rs.getString(8);
               String etat_compte= rs.getString(10);
               
                
               
               byte[] img=rs.getBytes(9);
               ImageIcon image = new ImageIcon(img);
               Image im = image.getImage();
               
              /* 
                Image MyImg= im.getScaledInstance(label.getWidh(), label.getHeight(),Image.SCALE_SMOOTH);
               ImageIcon newImage = new ImageIcon(MyImg);
               label.setIcon(newImage);
               
               
               */
               
               Parent c =new Parent (cin, nom, prenom,email,nb_enf,etat_civil,etat_compte,password,num_tel,im);
     arr.add(c);
     }
    return arr;

    }

    @Override
    public void approve(Parent t) throws SQLException {

PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`parent`SET `etat_compte`='1' WHERE cin=?;");
      
    pre.setString(1, t.getCin());
     
     pre.executeUpdate();
    }
    
    
}
