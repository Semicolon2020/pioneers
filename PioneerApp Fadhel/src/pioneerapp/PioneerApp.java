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
import com.github.sarxos.webcam.Webcam;
import com.github.sarxos.webcam.WebcamPanel;
import com.github.sarxos.webcam.WebcamResolution;
import com.teknikindustries.yahooweather.WeatherDisplay;
import com.teknikindustries.yahooweather.WeatherDoc;
import java.awt.image.BufferedImage;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.PrintWriter;
import javafx.scene.image.Image;
import javax.imageio.ImageIO;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileNameExtensionFilter;
import org.apache.commons.net.ftp.FTP;
import org.apache.commons.net.ftp.FTPClient;
import org.apache.commons.net.ftp.FTPReply;
      
import org.apache.commons.net.ProtocolCommandEvent;
import org.apache.commons.net.ProtocolCommandListener;

/**
 *
 * @author Alfa Shel
 */
public class PioneerApp {

   
   
    
    public static void main(String[] args) {
       
        
    /*
        try {
            Webcam webcam = Webcam.getDefault();
            
            webcam.open();
            BufferedImage image = webcam.getImage();
            webcam.setViewSize(WebcamResolution.VGA.getSize());
            // save image to PNG file
            ImageIO.write(image, "PNG", new File("test.png"));
        } catch (IOException ex) {
            Logger.getLogger(PioneerApp.class.getName()).log(Level.SEVERE, null, ex);
        }*/
    
    
   String name = "sdfsd";
   
    if (!name.matches("[a-zA-Z_]+")) {
    System.out.println("Invalid name"); // "[0-9]+"
}
    else 
    {
        System.out.println("name");
    }
    
      
		

//	|| !cin.getText().matches("[0-9]+") || !Num.getText().matches("[0-9]+") ||  !Nom.getText().matches("[a-zA-Z_]+") ||  !Prenom.getText().matches("[a-zA-Z_]+")
//                       ||  !Etat.getText().matches("[a-zA-Z_]+")
        
            
            
          
    }
    
}
           
    