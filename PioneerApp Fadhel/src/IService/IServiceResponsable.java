/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IService;

import Entities.Responsable;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author Alfa Shel
 */
public interface IServiceResponsable <T> {
    void ajouter(T t) throws SQLException;
    boolean delete(T t) throws SQLException;
    boolean update(T t) throws SQLException;
    List<T> readAll() throws SQLException;
    Responsable read(T t) throws SQLException;
    int LoginResponsable(Responsable t) throws SQLException;
    public  T readUser(T t) throws SQLException;

}
