/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package pioneer;

import Services.ServiceActivite;
import Services.ServiceEvenement;
import entities.activite;
import entities.evenement;
import java.sql.Date;
import java.sql.SQLException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.List;

/**
 *
 * @author user
 */
public class Pioneer {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        ServiceActivite ser = new ServiceActivite();
        ServiceEvenement ser1 = new ServiceEvenement();
       
        
        activite a2 = new activite("bahroun",  2, "sportif","jardin", "10vs0", 12);
        
        evenement e1 = new evenement("wilyeeeey", 2, "sportif","jardin", "1vs1");
       

        
        try {
            // ser1.ajouter1(e1);
          ser1.ajouter1(e1);
         // ser.ajouter(a2);
           // ser1.update(e1);
           // List<activite> list = ser.readAll();
           // List<evenement> list1 = ser1.readAll();
          //  System.out.println(list1);
           // System.out.println(list1);
            ser.readActActivite(a2);
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
    
}
