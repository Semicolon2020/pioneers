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

    

       PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`user` ( `cin`, `password`, `role`, `nom`, `prenom`, `email`, `num_tel`, `etat_compte`, `etat_civil`, `photo`, `sexe`, `date_embauche`) "
                 + "    VALUES (?,?,'R',?,?,?,?,'1',?,?,?,now());");
    
        try {
            InputStream is= new FileInputStream(new File(t.getPhoto()));
        
    
    pre.setString(1, t.getCin());
    pre.setString(2, t.getPassword());
    pre.setString(3, t.getNom());   
    pre.setString(4, t.getPrenom());
    pre.setString(9, t.getSexe());
    pre.setString(5, t.getEmail());
    pre.setString(6, t.getNum_tel());
    pre.setString(7, t.getEtat_civil());    
    pre.setBlob(8, is);
    
    pre.executeUpdate();
    
        } 
    catch (FileNotFoundException ex) {
            Logger.getLogger(ServiceResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    @Override
    public boolean delete(Responsable t) throws SQLException {

    PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`user` where cin =?;");
    
    pre.setString(1, t.getCin());
    
     return pre.executeUpdate()==0;

    }

    @Override
    public boolean update(Responsable t) throws SQLException {

    PreparedStatement     pre=con.prepareStatement("update `pionnersapp`.`user`SET `cin`=?,`password`=?,`nom`=?,`prenom`=?,`email`=?,"
                + "             `num_tel`=?,`etat_civil`=?,`photo`=?,`sexe`=? WHERE cin=? and role='R';");
    
    
    pre.setString(1, t.getCin());  
    pre.setString(2, t.getPassword()); 
    pre.setString(3, t.getNom());
    pre.setString(4, t.getPrenom());
    pre.setString(5, t.getEmail());
    pre.setString(6, t.getNum_tel());
    //pre.setString(7, t.getEtat_compte());
    pre.setString(7, t.getEtat_civil());
    pre.setString(8, t.getPhoto());
    pre.setString(9, t.getSexe());
    pre.setString(10, t.getCin());
     
    return pre.executeUpdate()==0;
    }

    @Override
    public List<Responsable> readAll() throws SQLException {
        
    List<Responsable> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from user where role='R' ");
     while (rs.next()) {   
                
               
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
               
               byte[] img=rs.getBytes(7);
               ImageIcon image = new ImageIcon(img);
               Image im = image.getImage();
               
              /* 
                Image MyImg= im.getScaledInstance(label.getWidh(), label.getHeight(),Image.SCALE_SMOOTH);
               ImageIcon newImage = new ImageIcon(MyImg);
               label.setIcon(newImage);
               
               
               */
               
               Responsable c =new Responsable (rs.getString(1),cin, nom, prenom,sexe,date,email,password,num_tel,im,etat_compte,etat_civil);
     arr.add(c);
     }
    return arr;


    }
    
    
     @Override
    public  Responsable read(Responsable t) throws SQLException
    {
        PreparedStatement pre=con.prepareStatement(" select * from user where role='R' and cin=?;");
         pre.setString(1, t.getCin());
       Responsable c=new Responsable();  
    ResultSet rs=pre.executeQuery();
     while (rs.next()) {                
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
               
                  }
     
     return c;
    }
    
     @Override
    public  int  LoginResponsable(Responsable t) throws SQLException
    {
        PreparedStatement pre=con.prepareStatement(" select * from user where   cin=? and password=? ;");
         pre.setString(1, t.getCin());
         pre.setString(2, t.getPassword());
      
    ResultSet rs=pre.executeQuery();
     while (rs.next()) {
         if(rs.getString(9).equals("0")){return 3;}
         else if (rs.getString(9).equals("2")) return 5;
         
            switch (rs.getString(4)) {
                case "R":
                    return 0;
                case "T":
                    return 1;
                case "P":
                    return 2;
                default:
                    break;
            }
         
                         }
     
     return -1;
    }
    
    
 @Override
    public  Responsable readUser(Responsable t) throws SQLException
    {
        PreparedStatement pre=con.prepareStatement(" select * from user where cin=?;");
         pre.setString(1, t.getCin());
       Responsable c=new Responsable();  
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
    
    
}
