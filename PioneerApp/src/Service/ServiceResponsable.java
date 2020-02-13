/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import DB.DataBase;
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
public class ServiceResponsable implements  IService.IServiceResponsable<Responsable>{

    private Connection con;
     private Statement ste;
    
    public ServiceResponsable() {
                con = DataBase.getInstance().getConnection();    
    }
    
    
    @Override
    public void ajouter(Responsable t) throws SQLException {

    

        PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`responsable`  VALUES (?,?,?,?,?,?,?);");
    
        try {
            InputStream is= new FileInputStream(new File(t.getPhoto()));
        
    
    pre.setString(1, t.getCin());
    pre.setString(2, t.getNom());
    pre.setString(3, t.getPrenom());
    pre.setString(4, t.getEmail());
    pre.setString(5, t.getPassword());
    pre.setString(6, t.getNum_tel());
    pre.setBlob(7, is);
    
    pre.executeUpdate();
    
        } 
    catch (FileNotFoundException ex) {
            Logger.getLogger(ServiceResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @Override
    public boolean delete(Responsable t) throws SQLException {

    PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`responsable` where cin_resp =?;");
    
    pre.setString(1, t.getCin());
    
     return pre.executeUpdate()==0;

    }

    @Override
    public boolean update(Responsable t) throws SQLException {

    PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`responsable`SET `nom`=?,`prenom`=?,"
            + "                                                `email`=?,`password`=?,`num_tel`=? WHERE cin_resp=?;");
    
    
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getEmail());
    pre.setString(4, t.getPassword());
    pre.setString(5, t.getNum_tel());
    pre.setString(6, t.getCin());
     
    return pre.executeUpdate()==0;
    }

    @Override
    public List<Responsable> readAll() throws SQLException {
        
    List<Responsable> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from responsable");
     while (rs.next()) {                
               String cin=rs.getString(1);
               String nom=rs.getString(2);
               String prenom=rs.getString(3);
               String email=rs.getString(4);
               String password=rs.getString(5);
               String num_tel=rs.getString(6);
               
               byte[] img=rs.getBytes(7);
               ImageIcon image = new ImageIcon(img);
               Image im = image.getImage();
               
              /* 
                Image MyImg= im.getScaledInstance(label.getWidh(), label.getHeight(),Image.SCALE_SMOOTH);
               ImageIcon newImage = new ImageIcon(MyImg);
               label.setIcon(newImage);
               
               
               */
               
               Responsable c =new Responsable (cin, nom, prenom,email,password,num_tel,im);
     arr.add(c);
     }
    return arr;


    }

    
    
}
