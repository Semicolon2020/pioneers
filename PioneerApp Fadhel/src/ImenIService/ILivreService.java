/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenIService;

import ImenEntite.Livre;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author FUJITSU
 */
public interface ILivreService {
     public void addLivre(Livre l) throws SQLException;
    public void deleteLivre(int id_l);
    public void updateLivre(Livre l);
    public List<Livre> getAll(); 
  
    
}
