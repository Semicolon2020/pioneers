/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenService;

import ImenEntite.Cours;
import ImenIService.ICoursService;
import DB.DataBase;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author FUJITSU
 */
public class ServiceCours implements ICoursService{
      Connection cn = DataBase.getInstance().getConnection();
    Statement st; //execute la req
    PreparedStatement pst;
    private ResultSet rs;

    @Override
    public void addCours(Cours c) throws SQLException {
       

        st = cn.createStatement();
        String requeteInsert = "INSERT INTO `pionnersapp`.`cours` (`id_c`, `titre`, `date`, `tuteur`) VALUES (NULL, '" + c.getTitre() + "', '" + c.getDate() + "', '" + c.getTuteur() + "');";
        st.executeUpdate(requeteInsert);
      
    }

    @Override
    public void deleteCours(int id_c) {
        String req = "delete from cours where id_c =?";
        PreparedStatement preparedStatement;
        try {
            preparedStatement = cn.prepareStatement(req);
            preparedStatement.setInt(1, id_c);
            preparedStatement.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }

    @Override
    public boolean updateCours(Cours c) throws SQLException {
        String req = "UPDATE `cours` SET `id_c`= '"+ c.getId_c() +"',`titre`= '"+ c.getTitre()+"',`date`= '"+ c.getDate()+"',`tuteur`= '"+ c.getTuteur()+"' ";
         st = cn.createStatement();
        if(st.executeUpdate(req) == 1)
        {
            System.out.println("succes !");
        return true;   
        }
        else 
        {
            System.out.println(" introuvable");
            return false;
        }
        }
    

    @Override
    public List<Cours> getAll() {
         List<Cours> cats = new ArrayList<>();
        String req = "select * from cours ";
        PreparedStatement preparedStatement;
        try {
            preparedStatement = cn.prepareStatement(req);
            ResultSet resultSet = preparedStatement.executeQuery();

            while (resultSet.next()) {
                Cours c= new Cours(
                        resultSet.getInt("id_c"),
                       
                        resultSet.getString("titre"),
                        resultSet.getString("date"), 
                       
                        resultSet.getString("tuteur")
                        
                );
                cats.add(c); 
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return cats;
    }

   

    

   

}
