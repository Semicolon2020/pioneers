/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IService;


import Entities.Parent;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author Alfa Shel
 */
public interface IServiceParent <T> {
    void ajouter(T t) throws SQLException;
    boolean delete(T t) throws SQLException;
    boolean update(T t,String cin) throws SQLException;
    List<T> readAll() throws SQLException;
    Parent read(T t) throws SQLException;
    boolean LoginParent(T t) throws SQLException;
    void approve(T t,String cin) throws SQLException;
   public List<T> readRecherche(String Word) throws SQLException;
   public List<Integer> StatSexe() throws SQLException;

}
