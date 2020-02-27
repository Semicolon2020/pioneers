/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package OmarIService;

import OmarInterface.Enfant;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author user
 * @param <T>
 */
public interface IServiceEnfant <T> {
      void ajouter(T t) throws SQLException;
    boolean delete(T t) throws SQLException;
    boolean update(T t) throws SQLException;
    List<T> readAll() throws SQLException;
    List<T> readParent(String cin) throws SQLException;
    public ObservableList<Enfant> readParentV2(String cin) throws SQLException ;
    T read(T t) throws SQLException;
    int NombreEnfInscri() throws SQLException ;
}
