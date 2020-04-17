/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import DB.DataBase;
import Entities.Actualite;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Alfa Shel
 */
public class ServiceActualite implements IService.IServiceActualite<Actualite>{
    
     private Connection con;
     private Statement ste;
    
    public ServiceActualite() {
                con = DataBase.getInstance().getConnection();    
    }
    
    
    @Override
    public void ajouter(Actualite t) throws SQLException {

     PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`actualite` ( `date`, `description`) VALUES (now(),?);");
    
    pre.setString(1, t.getDescription());
    pre.executeUpdate();
        
    }

    @Override
    public void delete(Actualite t) throws SQLException {

    PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`actualite` where id =?;");
    
    pre.setInt(1, t.getId());
    
      pre.executeUpdate();
    }

    @Override
    public void update(Actualite t) throws SQLException {
    
        PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`actualite` SET `date`=now(),`description`=?  WHERE id = ?;");
    
    pre.setString(1, t.getDescription());
    pre.setInt(2, t.getId());
     
     pre.executeUpdate();

    }

    @Override
    public List<Actualite> readAll() throws SQLException {

            List<Actualite> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from actualite");
     while (rs.next()) {                
               int id=rs.getInt(1);
               String date=rs.getDate(2).toString();
               String description=rs.getString(3);
               String titre=rs.getString(4);
               
               
               Actualite c =new Actualite(id, date, description,titre);
     arr.add(c);
     }
    return arr;

    }
    
}
