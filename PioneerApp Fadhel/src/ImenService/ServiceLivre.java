/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenService;

import ImenEntite.Cours;
import ImenEntite.Livre;
import ImenIService.ILivreService;
import DB.DataBase;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author FUJITSU
 */
public class ServiceLivre implements ILivreService{
  Connection cn = DataBase.getInstance().getConnection();
    Statement st; //execute la req
    PreparedStatement pst;
    private ResultSet rs;
    @Override
   public void addLivre(Livre l) throws SQLException {
    
        st = cn.createStatement();
        String requeteInsert = "INSERT INTO `pionnersapp`.`livre` (`id_l`, `titre_l`, `age`) VALUES (NULL, '" + l.getTitre_l() + "', '" + l.getAge() +  "');";
        st.executeUpdate(requeteInsert);    
    }

    @Override
    public void deleteLivre(int id_l) {
         String req = "delete from livre where id_l =?";
        PreparedStatement preparedStatement;
        try {
            preparedStatement = cn.prepareStatement(req);
            preparedStatement.setInt(1, id_l);
            preparedStatement.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }}

    @Override
    public void updateLivre(Livre l) {
        String req = "update livre set id_l='" +l.getId_l()+"' ,titre_l='"+l.getTitre_l() +"' ,age='"+l.getAge()+"';";
       try{
     
           st=cn.createStatement();
           st.executeUpdate(req);
           
       }catch(SQLException ex)
       {
           System.out.println("erreur");
       }
    }

    @Override
    public List<Livre> getAll() {
         List<Livre> cats = new ArrayList<>();
        String req = "select * from livre ";
        PreparedStatement preparedStatement;
        try {
            preparedStatement = cn.prepareStatement(req);
            ResultSet resultSet = preparedStatement.executeQuery();

            while (resultSet.next()) {
                Livre l= new Livre(
                        resultSet.getInt("id_l"),
                       
                        resultSet.getString("titre_l"),
                        resultSet.getInt("age")
                       
                       
                        
                );
                cats.add(l); 
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return cats;
    }

    
}

    
    

