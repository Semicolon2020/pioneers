/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenInterface;

import ImenEntite.Jeux;
import ImenService.ServiceJeux;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.CheckBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
public class VoixAnimauxController implements Initializable {
String path = "D:\\programs\\wamp64\\www\\Pioneers\\voix\\lion.wav";
    Media media = new Media(new File(path).toURI().toString()); 
    MediaPlayer mediaPlayer = new MediaPlayer(media);
    
     String path1 = "D:\\programs\\wamp64\\www\\Pioneers\\voix\\coq.mp3";
    Media media1 = new Media(new File(path1).toURI().toString()); 
    MediaPlayer mediaPlayer1 = new MediaPlayer(media1);
    
    
     String path2= "D:\\programs\\wamp64\\www\\Pioneers\\voix\\vache.mp3";
    Media media2 = new Media(new File(path2).toURI().toString()); 
    MediaPlayer mediaPlayer2 = new MediaPlayer(media2);
    
     String path3= "D:\\programs\\wamp64\\www\\Pioneers\\voix\\cheval.mp3";
    Media media3 = new Media(new File(path3).toURI().toString()); 
    MediaPlayer mediaPlayer3 = new MediaPlayer(media3);
    @FXML
    private ImageView tigre;
    @FXML
    private ImageView lion;
    @FXML
    private ImageView coq;
    @FXML
    private ImageView crocodile;
     @FXML
    private ImageView girafe;
     @FXML
    private ImageView vache;
     @FXML
    private ImageView cheval;
        @FXML
    private ImageView lapin;
            @FXML
    private Label score1 ;
             @FXML
    private Label nom1 ;
            @FXML
    private TextField id_e1;
    @FXML
    private CheckBox a;
     @FXML
    private CheckBox b;
     @FXML
    private CheckBox c;
     @FXML
    private CheckBox d;
     @FXML
    private CheckBox e;
     @FXML
    private CheckBox f;
     @FXML
    private CheckBox g;
     @FXML
    private CheckBox h;
     

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        Image image=new Image("/ImageImen/cheval.jpg");
        cheval.setImage(image);
        
         Image image1=new Image("/ImageImen/coq.jpg");
        coq.setImage(image1);
        
         Image image2=new Image("/ImageImen/crocodile.jpg");
        crocodile.setImage(image2);
        
         Image image3=new Image("/ImageImen/giraffe.jpg");
        girafe.setImage(image3);
        
         Image image4=new Image("/ImageImen/lapin.jpg");
        lapin.setImage(image4);
        
         Image image5=new Image("/ImageImen/lion.jpg");
       lion.setImage(image5);
        
         Image image6=new Image("/ImageImen/tigre.jpg");
        tigre.setImage(image6);
        
         Image image7=new Image("/ImageImen/vache.jpg");
        vache.setImage(image7);
        
        
       
        
      
        
        
    
        // TODO
    }    

    @FXML
    private void play(ActionEvent event) {
        mediaPlayer.play();
    }

    @FXML
    private void stop(ActionEvent event) {
        mediaPlayer.stop();
    }

    @FXML
    private void play1(ActionEvent event) {
        mediaPlayer1.play();
    }

    @FXML
    private void stop1(ActionEvent event) {
        mediaPlayer1.stop();
    }

    @FXML
    private void play2(ActionEvent event) {
        mediaPlayer2.play();
    }

    @FXML
    private void stop2(ActionEvent event) {
        mediaPlayer2.stop();
    }

    @FXML
    private void play3(ActionEvent event) {
        mediaPlayer3.play();
    }

    @FXML
    private void stop3(ActionEvent event) {
        mediaPlayer3.stop();
    }
    
    @FXML
    private void handlea(){  if (a.isSelected()){ b.setSelected(false);}}
     @FXML
    private void handleb(){ 
        
        if (b.isSelected()){ a.setSelected(false);
        
       
        
    }}
    
    @FXML
    private void handlec(){  
        
        if (c.isSelected()){ d.setSelected(false);
       
        
        }}
     @FXML
    private void handled(){  if (d.isSelected()){ c.setSelected(false);}}
    
    @FXML
    private void handlee(){  if (e.isSelected()){ f.setSelected(false);}}
     @FXML
    private void handlef(){  if (f.isSelected()){ e.setSelected(false);}}
    
     @FXML
    private void handleg(){  if (g.isSelected()){ h.setSelected(false);}}
     @FXML
    private void handleh(){  if (h.isSelected()){ g.setSelected(false);}}
     
    
    @FXML
public void terminer(ActionEvent actionEvent) throws SQLException {
       
         int i = 0;
        if (b.isSelected()||c.isSelected()||f.isSelected()||h.isSelected()){  
        i=i+1;
        
         String str = String.valueOf(i);
       score1.setText(str);
        }else
        
       if (b.isSelected()){  
        i=i+1;
        
         String str = String.valueOf(i);
       score1.setText(str);
        }else
       if (c.isSelected()){  
        i=i+1;
        
         String str = String.valueOf(i);
       score1.setText(str);
        }else
       if (f.isSelected()){  
        i=i+1;
        
         String str = String.valueOf(i);
       score1.setText(str);
        }else
       if (h.isSelected()){  
        i=i+1;
        
         String str = String.valueOf(i);
       score1.setText(str);
        }else
       if ((b.isSelected()&&c.isSelected())||(b.isSelected()&&f.isSelected())||(b.isSelected()&&h.isSelected())){  
        i=i+2;
        
         String str = String.valueOf(i);
       score1.setText(str);
        }else
       if ((b.isSelected()&&c.isSelected()&&f.isSelected())||(b.isSelected()&&c.isSelected()&&h.isSelected())||(b.isSelected()&&f.isSelected()&&h.isSelected())||(c.isSelected()&&f.isSelected()&&h.isSelected())){
       
        i=i+3;
        
         String str = String.valueOf(i);
       score1.setText(str);
       
       }else if (b.isSelected()&&c.isSelected()&&f.isSelected()&&h.isSelected()){  
        i=i+4;
        
         String str = String.valueOf(i);
       score1.setText(str);
        }
         String sql= "Insert into cours Values (null,'"+nom1+"','"+score1+"','"+id_e1+"');";
       int score = Integer.parseInt(score1.getText()) ;
        String nom =nom1.getText();
        int id_e =Integer.parseInt(id_e1.getText());
        ServiceJeux sp = new ServiceJeux();
            Jeux j = new Jeux(1, nom, score,id_e);
            sp.addJeux(j);
        
       
       
            }
        

@FXML

public void retourner(ActionEvent actionEvent) throws IOException{
Parent view2 = FXMLLoader.load(getClass().getResource("Loisir.fxml")); 
Scene scene2 = new Scene(view2);
Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
window.setScene(scene2);
window.show();



   }
    
    
}
