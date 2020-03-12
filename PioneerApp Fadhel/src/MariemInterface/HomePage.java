/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemInterface;

import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;

/**
 *
 * @author House
 */
public class HomePage extends Application {
   
    @Override
    public void start(Stage primaryStage) throws IOException{ 
            Parent root = FXMLLoader.load(getClass().getResource("CoursUtils.fxml"));
            Scene scene = new Scene(root);
        
       // primaryStage.setTitle("javaFX");
        primaryStage.setScene(scene);
        primaryStage.show();}

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}
