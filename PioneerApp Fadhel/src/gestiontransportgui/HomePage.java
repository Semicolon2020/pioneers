/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransportgui;

import com.sun.xml.internal.ws.api.pipe.Engine;
import java.awt.Image;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;


     
    import javafx.application.Application;
    import javafx.scene.Scene;
    import javafx.scene.layout.BorderPane;
    import javafx.stage.Stage;


/**
 *
 * @author House
 */
public class HomePage extends Application {
    
    @Override
    public void start(Stage stage) throws IOException {
  
      try {    
        Parent root = FXMLLoader.load(getClass().getResource("login.fxml"));
          Scene scene = new Scene(root);
        scene.getStylesheets().add("Styles.css");
        stage.setTitle("Transport");
        stage.setScene(scene);
        stage.show(); } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
     
      
      
       
     /*   try {
            Parent root = FXMLLoader
        .load(getClass().getResource("login.fxml"));
            
            Scene scene = new Scene(root);
            
            primaryStage.setTitle("Hello");
            primaryStage.setScene(scene);
            primaryStage.show();
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }*/
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}

