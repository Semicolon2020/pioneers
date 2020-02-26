/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pioneersapp;

import com.pioneers.Entite.Cours;
import com.pioneers.Service.ServiceCours;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author FUJITSU
 */
public class PioneersApp {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws SQLException {
    ServiceCours ser1 = new ServiceCours();
        
        Cours j1 = new Cours( 3,"snake","aventure","22/2/2020");
        
       
           
           
           
            ser1.deleteCours(7);
           
       //ser1.updateCours(j1);
           
            
   // List<Cours> list = ser1.getAll();}
        
      
            
         
           /*
           Select p.id_j, p.nom, p.type, p.score, p.nom_e 
                   from jeux p  
                 where p.id_j= 1
           */
         
           
        
           
          
            
            
      
    }}
    

