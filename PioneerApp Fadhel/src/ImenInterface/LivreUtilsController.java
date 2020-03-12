/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenInterface;

import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 * 
 */

public class LivreUtilsController implements Initializable {
    @FXML
    private ImageView tree1;

    String path = "D:\\programs\\wamp64\\www\\Pioneers\\contes\\la petite fille aux allumette.mp3";
    Media media = new Media(new File(path).toURI().toString()); 
    MediaPlayer mediaPlayer = new MediaPlayer(media);
    
     String path1 = "D:\\programs\\wamp64\\www\\Pioneers\\contes\\Le_secret_de_maitre_Cornille.mp3";
    Media media1 = new Media(new File(path1).toURI().toString()); 
    MediaPlayer mediaPlayer1 = new MediaPlayer(media1);
    
    
     String path2= "D:\\programs\\wamp64\\www\\Pioneers\\contes\\Le_petit_chaperon_rouge.mp3";
    Media media2 = new Media(new File(path2).toURI().toString()); 
    MediaPlayer mediaPlayer2 = new MediaPlayer(media2);
    
     String path3= "D:\\programs\\wamp64\\www\\Pioneers\\contes\\Le_petit_poucet.mp3";
    Media media3 = new Media(new File(path3).toURI().toString()); 
    MediaPlayer mediaPlayer3 = new MediaPlayer(media3);
    
    

    
  
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        Image image10=new Image("/ImageImen/tree1.GIF");
        tree1.setImage(image10);
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
@FXML
   public void retour2(ActionEvent actionEvent) throws IOException{
Parent view2 = FXMLLoader.load(getClass().getResource("Loisir.fxml")); 
Scene scene2 = new Scene(view2);
Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
window.setScene(scene2);
window.show();



   }
    
}
