/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IService;

import Entities.Tuteur;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author Alfa Shel
 */
public interface IServiceTuteur  <T> {
    void ajouter(T t) throws SQLException;
    boolean delete(T t) throws SQLException;
    boolean update(T t) throws SQLException;
    List<T> readAll() throws SQLException;
    Tuteur read(T t) throws SQLException;
    boolean LoginTuteur(T t) throws SQLException;
    public boolean updateMdp(Tuteur t) throws SQLException ;
    public boolean updateProfile(Tuteur t) throws SQLException ;



    
}
