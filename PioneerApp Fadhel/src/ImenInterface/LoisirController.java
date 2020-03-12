/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenInterface;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import static java.util.logging.Level.SEVERE;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author FUJITSU
 */
 
public class LoisirController implements Initializable {
    
    public String cin;
    
 @FXML
    private ImageView c;
 @FXML
    private ImageView c1;
 @FXML
    private ImageView j;

    @FXML
    private Button btncours;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
 Image image=new Image("/ImageImen/livre.jpg");
        c1.setImage(image);
Image image1=new Image("/ImageImen/maitresse.jpg");
        c.setImage(image1);
        Image image2=new Image("/ImageImen/kidsplay1.jpg");
        j.setImage(image2);
// TODO
    } 
    
    public void SetCin(String cin )
    {
        this.cin=cin;
    }
    
   
  @FXML
   public void cours(ActionEvent actionEvent) throws IOException{
Parent view2 = FXMLLoader.load(getClass().getResource("CoursUtils.fxml")); 
Scene scene2 = new Scene(view2);
Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
window.setScene(scene2);
window.show();

   }

@FXML

public void aller(ActionEvent actionEvent) throws IOException{
Parent view2 = FXMLLoader.load(getClass().getResource("LivreUtils.fxml")); 
Scene scene2 = new Scene(view2);
Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
window.setScene(scene2);
window.show();



   }
@FXML

public void jouer(ActionEvent actionEvent) throws IOException{
Parent view2 = FXMLLoader.load(getClass().getResource("VoixAnimaux.fxml")); 
Scene scene2 = new Scene(view2);
Stage window = (Stage)((Node)actionEvent.getSource()).getScene().getWindow();
window.setScene(scene2);
window.show();



   }





}