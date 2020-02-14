/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import DB.DataBase;
import Entities.Classe;
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
public class ServiceClasse implements IService.IServiceClasse<Classe>{

    
     private Connection con;
     private Statement ste;
    
    public ServiceClasse() {
                con = DataBase.getInstance().getConnection();    
    }

    
    
    @Override
    public void ajouter(Classe t) throws SQLException {

    PreparedStatement pre=con.prepareStatement("INSERT INTO `pionnersapp`.`classe` (  `tuteur`, `activite`) VALUES (  ?, ?);");
    
    pre.setString(1, t.getTuteur());
    pre.setString(2, t.getActivite());
    pre.executeUpdate();
        
    }

    @Override
    public boolean delete(Classe t) throws SQLException {
        
    PreparedStatement pre=con.prepareStatement(" delete from `pionnersapp`.`classe` where id =?;");
    
    pre.setString(1, t.getId_c());
    
     return pre.executeUpdate()==0;
    }

    @Override
    public boolean updateTuteur(Classe t) throws SQLException {
    PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`classe`SET `tuteur`=?  WHERE id = ?;");
    
    pre.setString(1, t.getTuteur());
    pre.setString(2, t.getId_c());
     
    return pre.executeUpdate()==0;

    }
    
     public boolean updateActivite(Classe t) throws SQLException {
    PreparedStatement pre=con.prepareStatement("update `pionnersapp`.`classe`SET `activite`=?  WHERE id = ?;");
    
    pre.setString(1, t.getActivite());
    pre.setString(2, t.getId_c());
     
    return pre.executeUpdate()==0;

    }
     
     
    
    

    @Override
    public List<Classe> readAll() throws SQLException {

        
     List<Classe> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("select * from classe");
     while (rs.next()) {                
               String id=rs.getString(1);
               String tuteur=rs.getString(2);
               String activite=rs.getString(3);
               
               Classe c =new Classe(id, tuteur, activite);
     arr.add(c);
     }
    return arr;

    }
    
}
