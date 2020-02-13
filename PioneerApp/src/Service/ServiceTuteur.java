/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import DB.DataBase;
import Entities.Responsable;
import Entities.Tuteur;
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
public class ServiceTuteur implements IService.IServiceTuteur<Tuteur> {
    
    private Connection con;
    private Statement ste;
    
    public ServiceTuteur() {
                con = DataBase.getInstance().getConnection();    
    }

    @Override
    public void ajouter(Tuteur t) throws SQLException {

         PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`tuteur`  VALUES (?,?,?,?,now(),?,?,?,?);");
    
        try {
            InputStream is= new FileInputStream(new File(t.getPhoto()));
        
    
    pre.setString(1, t.getCin());
    pre.setString(2, t.getNom());
    pre.setString(3, t.getPrenom());
    pre.setString(4, t.getSexe());
    pre.setString(5, t.getEmail());
    pre.setString(6, t.getPassword());
    pre.setString(7, t.getNum_tel());
    pre.setBlob(8, is);
    
    pre.executeUpdate();
    
        } 
    catch (FileNotFoundException ex) {
            Logger.getLogger(ServiceResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @Override
    public boolean delete(Tuteur t) throws SQLException {
PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`tuteur` where cin_t =?;");
    
    pre.setString(1, t.getCin());
    
     return pre.executeUpdate()==0;
    }

    @Override
    public boolean update(Tuteur t) throws SQLException {
        
        PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`tuteur`SET `nom`=?,`prenom`=?,"
            + "                                                `email`=?,`password`=?,`num_tel`=?,`sexe`=? WHERE cin_t=?;");
    
    
    pre.setString(1, t.getNom());
    pre.setString(2, t.getPrenom());
    pre.setString(3, t.getEmail());
    pre.setString(4, t.getPassword());
    pre.setString(5, t.getNum_tel());
    pre.setString(6, t.getSexe());
    pre.setString(7, t.getCin());
     
    return pre.executeUpdate()==0;

    }

    @Override
    public List<Tuteur> readAll() throws SQLException {

        List<Tuteur> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from tuteur");
     while (rs.next()) {                
               String cin=rs.getString(1);
               String nom=rs.getString(2);
               String prenom=rs.getString(3);
               String sexe=rs.getString(4);
               String date=rs.getDate(5).toString();
               String email=rs.getString(6);
               String password=rs.getString(7);
               String num_tel=rs.getString(8);
               
               byte[] img=rs.getBytes(9);
               ImageIcon image = new ImageIcon(img);
               Image im = image.getImage();
               
              /* 
                Image MyImg= im.getScaledInstance(label.getWidh(), label.getHeight(),Image.SCALE_SMOOTH);
               ImageIcon newImage = new ImageIcon(MyImg);
               label.setIcon(newImage);
               
               
               */
               
               Tuteur c =new Tuteur (cin, nom, prenom,sexe,date,email,password,num_tel,im);
     arr.add(c);
     }
    return arr;

    }
    
}
