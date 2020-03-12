/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenService;

import ImenEntite.Jeux;
import ImenIService.IJeuxService;
import DB.DataBase;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;

/**
 *
 * @author FUJITSU
 */
public class ServiceJeux implements IJeuxService {
 Connection cn = DataBase.getInstance().getConnection();
    Statement st; //execute la req
    PreparedStatement pst;
    private ResultSet rs;
    @Override
    public void addJeux(Jeux j) throws SQLException {
    st = cn.createStatement();
        String requeteInsert = "INSERT INTO `pionnersapp`.`jeux` (`id_j`, `nom`, `score`, `id_e`) VALUES (NULL, '" + j.getNom() + "', '" + j.getScore() + "', '" + j.getId_e() + "');";
        st.executeUpdate(requeteInsert);     
    }

    @Override
    public void deleteJeux(int id_j) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public boolean updateJeux(Jeux j) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Jeux> getAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
    
    
   
    
}
