/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

//import Entity.User;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
//import com.codename1.ui.layouts.BoxLayout;
import java.io.IOException;

/**
 *
 * @author Alfa Shel
 */
public class Menu extends Form {
    Form current;
    
    public Menu()
    {
        current=this;
        setTitle("Welcome");
        setLayout(BoxLayout.y());
                
        ImageViewer NewsImage;
        ImageViewer TransImage;
        
        try {
            NewsImage = new ImageViewer(Image.createImage("/satisfaction.png"));
            add(NewsImage);
          NewsImage.addPointerReleasedListener(e-> new StatEvaluation(current).show());

        } catch (IOException ex) {
        }
        
         try {
            TransImage = new ImageViewer(Image.createImage("/notebook.png"));
            add(TransImage);
          TransImage.addPointerReleasedListener(e-> new GuiSuivi(current).show());

        } catch (IOException ex) {
        }
        
     // getToolbar().addMaterialCommandToLeftBar("Log out", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());

    }
    
}

