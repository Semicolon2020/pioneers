/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import java.io.File;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class LivreUtilsController implements Initializable {

    String path = "C:\\Users\\FUJITSU\\Desktop\\contes\\la petite fille aux allumette.mp3";
    Media media = new Media(new File(path).toURI().toString()); 
    MediaPlayer mediaPlayer = new MediaPlayer(media);
    
     String path1 = "C:\\Users\\FUJITSU\\Desktop\\contes\\Le_secret_de_maitre_Cornille.mp3";
    Media media1 = new Media(new File(path1).toURI().toString()); 
    MediaPlayer mediaPlayer1 = new MediaPlayer(media1);
    
    
     String path2= "C:\\Users\\FUJITSU\\Desktop\\contes\\Le_petit_chaperon_rouge.mp3";
    Media media2 = new Media(new File(path2).toURI().toString()); 
    MediaPlayer mediaPlayer2 = new MediaPlayer(media2);
    
     String path3= "C:\\Users\\FUJITSU\\Desktop\\contes\\Le_petit_poucet.mp3";
    Media media3 = new Media(new File(path3).toURI().toString()); 
    MediaPlayer mediaPlayer3 = new MediaPlayer(media3);

    
  
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void playsound(ActionEvent event) {
        mediaPlayer.play();
    }

    @FXML
    private void StopSound(ActionEvent event) {
        mediaPlayer.stop();
    }

   
    @FXML
    private void pause(ActionEvent event) {
        mediaPlayer.pause();
    }

    @FXML
    private void play1(ActionEvent event) {
        mediaPlayer1.play();
    }

    @FXML
    private void pause1(ActionEvent event) {
        mediaPlayer1.pause();
    }

    @FXML
    private void play2(ActionEvent event) {
        mediaPlayer2.play();
    }

    @FXML
    private void pause2(ActionEvent event) {
        mediaPlayer2.pause();
    }

    @FXML
    private void play3(ActionEvent event) {
        mediaPlayer3.play();
    }

    @FXML
    private void pause3(ActionEvent event) {
        mediaPlayer3.pause();
    }

 @FXML
    private void stop1(ActionEvent event) {
        mediaPlayer1.stop();
    }

    @FXML
    private void stop2(ActionEvent event) {
        mediaPlayer2.stop();
    }

    @FXML
    private void stop3(ActionEvent event) {
        mediaPlayer3.stop();
    }

   
    
}
