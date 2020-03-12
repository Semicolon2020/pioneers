/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenIService;

import ImenEntite.Jeux;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author FUJITSU
 */
public interface IJeuxService {
    public void addJeux(Jeux j) throws SQLException;
    public void deleteJeux(int id_j);
    public boolean updateJeux(Jeux j) throws SQLException;
    public List<Jeux> getAll(); 
    
}
