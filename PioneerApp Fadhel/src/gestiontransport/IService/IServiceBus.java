/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.IService;

import gestiontransport.Entite.Bus;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author ASUS-PC
 */
public interface IServiceBus  {

   
    public void ajouter(Bus B)      throws SQLException ;
    public void delete(Bus id) throws SQLException;
    public void update(Bus B)   throws SQLException;
    public List<Bus> afficher() throws SQLException ;
    
}
