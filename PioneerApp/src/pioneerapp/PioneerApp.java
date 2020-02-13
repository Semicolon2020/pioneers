/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pioneerapp;

import Entities.Classe;
import Entities.Responsable;
import Entities.Tuteur;
import Service.ServiceClasse;
import Service.ServiceResponsable;
import Service.ServiceTuteur;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;


/**
 *
 * @author Alfa Shel
 */
public class PioneerApp {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       
        
        Classe c=new Classe("Mr Mahdi","jogging");
        Classe c1= new Classe ("7");
        Classe c2= new Classe ("7","Fadhel","Creating");

        ServiceClasse sc=new ServiceClasse();
        
        //Responsable r=new Responsable("12345678", "Shel", "Fadhel", "sds", "123", "527788");      
        ServiceResponsable sr = new ServiceResponsable();
        
       Tuteur t = new Tuteur("32356", "FF", "SS", "ss", "F", "sdsd", "333");
        ServiceTuteur st = new ServiceTuteur();
        
        
        
        
        try {
          //  sc.ajouter(c);
           // sc.delete(c1);
          //  sc.updateTuteur(c2);
         sc.updateActivite(c2);
        // sr.ajouter(r);
        
             st.ajouter(t);
            System.out.println(st.readAll());
            
        } catch (SQLException ex) {
            Logger.getLogger(PioneerApp.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
    
}
