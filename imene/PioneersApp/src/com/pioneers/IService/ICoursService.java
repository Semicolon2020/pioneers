/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.pioneers.IService;

import com.pioneers.Entite.Cours;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author FUJITSU
 */
public interface ICoursService {
    
     public void addCours(Cours c) throws SQLException;
    public void deleteCours(int id_c);
    public void updateCours(Cours c);
    public List<Cours> getAll(); 
  
    public ObservableList<Cours> rechercherCours(String x);
  
    
}
