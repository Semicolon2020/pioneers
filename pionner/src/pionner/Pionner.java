/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pionner;

import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author ASUS-PC
 */
public class Pionner {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
      
       java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
           
                try {
                    new TrajetCrud().setVisible(true);
                } catch (SQLException ex) {
                    Logger.getLogger(Pionner.class.getName()).log(Level.SEVERE, null, ex);
                }
                
            }
        });
    }
        
        
}
    
