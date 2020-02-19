/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pioneerapp;

import Entities.Actualite;
import Entities.Classe;
import Entities.Enfant;
import Entities.Parent;
import Entities.Responsable;
import Entities.Tuteur;
import Service.ServiceActualite;
import Service.ServiceClasse;
import Service.ServiceEnfant;
import Service.ServiceParent;
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
       
        
        try {
            /*   Classe c=new Classe("Mr Mahdi","jogging");
            Classe c1= new Classe ("7");
            Classe c2= new Classe ("7","Fadhel","Creating");
            
            ServiceClasse sc=new ServiceClasse();
            
            Responsable r= new Responsable("00000000", "Shel", "Fadhel", "fadhel.shel@yahoo.com", "M", "0", "52775279", "C");
            ServiceResponsable sr = new ServiceResponsable();*/
            
            //   Tuteur t = new Tuteur("323", "FFA", "SSa", "sAs", "M", "sdaAsd", "3A33");
            //   ServiceTuteur st = new ServiceTuteur();
            
            //    Parent p=new Parent ("221","aaa","aa","@a","aa","99999",1,"C");
            //  ServiceParent sp=new ServiceParent();
            
            
            
            //   Enfant e=new Enfant("ff", "qqq", "F", "221", "3");
            // ServiceEnfant se= new ServiceEnfant();
            //
            // Actualite a= new Actualite("Today is gonna rain please stay at home :)");
            
            // ServiceActualite sa=new ServiceActualite();
            
            /*
            
            try {
            //  sc.ajouter(c);
            // sc.delete(c1);
            //  sc.updateTuteur(c2);
            //sc.updateActivite(c2);
            //  sr.delete(r);
            
            //sp.update(p);
            //  se.ajouter(e);
            //  sr.ajouter(r);
            //  Actualite aa = sa.readAll().get(0);
            //aa.setDescription("It is sunny :(");
            //sa.update(aa);
            //  sa.delete(sa.readAll().get(0));
            //   st.delete(t);
            System.out.println(sa.readAll());
            
            } catch (SQLException ex) {
            Logger.getLogger(PioneerApp.class.getName()).log(Level.SEVERE, null, ex);
            }
            
            }*/
            
            JavaMail.SendMail("fadhel.shel@gmail.com");
        } catch (Exception ex) {
            Logger.getLogger(PioneerApp.class.getName()).log(Level.SEVERE, null, ex);
        }
             
             }
}
