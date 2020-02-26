/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import CrudInterface.Iservice;
import entities.enfantETactivite;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
import pioneer.utils.DataBase;

/**
 *
 * @author user
 */
public class ServiceActiviteEtEnfant implements Iservice<enfantETactivite> {
   private Connection con;
    private Statement ste;

    public ServiceActiviteEtEnfant() {
        con = DataBase.getInstance().getConnection();

    }
    @Override
    public void ajouter(enfantETactivite p) throws SQLException {
         PreparedStatement pre=con.prepareStatement("INSERT INTO `pioneersapp`.`enfantetactivite` ( `id_e`, `id_ac`, `id`) VALUES ( ?, ?, ?);");
    pre.setInt(1, p.getId_e());
    
    pre.setInt(2, p.getId_ac());
    pre.setInt(3, p.getId());
    
    pre.executeUpdate();
        
    }

    @Override
    public boolean delete(enfantETactivite t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean update(enfantETactivite t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<enfantETactivite> readAll() throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
