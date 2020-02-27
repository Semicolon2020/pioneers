/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemService;

import MariemEntite.Rappel;
import MariemIService.IService;
import DB.DataBase;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author User
 */
public class ServiceRappel implements IService<Rappel>{
     private Connection con;
    private Statement ste;
    
    public ServiceRappel(){
            con = DataBase.getInstance().getConnection();
        
    }    

    @Override
    public void ajouter(Rappel t) throws SQLException {
        ste = con.createStatement();
        String requeteInsert ="INSERT INTO `rappel` (`cin`, `date`, `text`) VALUES ( '"+t.getCin()+"', current_timestamp(), '"+t.getText()+"')";
        ste.executeUpdate(requeteInsert);
    }

 
 
    @Override
    public List<Rappel> readAll() throws SQLException {
        List<Rappel> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT    nom , prenom, text , date\n" +
"from rappel r inner JOIN user u\n" +
"on r.cin= u.cin");
     while (rs.next()) {                
               
               String nom=rs.getString("nom");
               String prenom=rs.getString("prenom");
               String date=rs.getString("date");
               String Text=rs.getString("text");
               Rappel r=new Rappel(date,nom,prenom,Text);
     arr.add(r);
     }
    return arr;
    }

    @Override
    public void delete(Rappel t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void update(Rappel t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
        
    }
    
