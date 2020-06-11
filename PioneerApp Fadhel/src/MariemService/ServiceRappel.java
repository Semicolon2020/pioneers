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
        String requeteInsert ="INSERT INTO `rap` (`objet`, `date`, `text`,`enfant`) VALUES ( '"+t.getObjet()+"', current_timestamp(), '"+t.getText()+"','"+t.getEnfant()+"')";
        ste.executeUpdate(requeteInsert);
    }

 
 
    @Override
    public List<Rappel> readAll() throws SQLException {
        List<Rappel> arr=new ArrayList<>();
    ste=con.createStatement();
    ResultSet rs=ste.executeQuery("SELECT    objet , enfant, text , date\n" +
"from rap ");
     while (rs.next()) {                
               
               String objet=rs.getString("objet");
               String enfant=rs.getString("enfant");
               String date=rs.getString("date");
               String Text=rs.getString("text");
               Rappel r=new Rappel(date,objet,enfant,Text);
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
    
