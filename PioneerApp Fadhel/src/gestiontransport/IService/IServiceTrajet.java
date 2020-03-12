/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.IService;

import gestiontransport.Entite.Bus;
import gestiontransport.Entite.Trajet;
import java.awt.AWTException;
import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author ASUS-PC
 */
public interface IServiceTrajet {

    /**
     *
     * @param busname
     * @param nametrajet
     * @throws SQLException
     * @throws java.awt.AWTException
     */
    
    public void ajouter(String name,int id) throws SQLException ;
    public int recherche(String cbus) throws SQLException ;
    public void delete(String nametrajet) throws SQLException;
    public void update(String nametrajet,String busname) throws SQLException;
    public List<Trajet> afficher() throws SQLException ;
    
}
