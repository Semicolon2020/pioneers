/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IService;

import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author Alfa Shel
 */
public interface IServiceEnfant <T> {
    
    void ajouter(T t) throws SQLException;
    boolean delete(T t) throws SQLException;
    boolean update(T t) throws SQLException;
    List<T> readAll() throws SQLException;
    List<T> readParent(String cin) throws SQLException;
    T read(T t) throws SQLException;
    int NombreEnfInscri() throws SQLException ;

    
    
    
}
