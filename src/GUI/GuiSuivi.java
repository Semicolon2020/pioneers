package GUI;

import com.codename1.io.FileSystemStorage;
import com.codename1.io.Util;
import com.codename1.ui.Button;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.mycompany.myapp.MyApplication;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author ASUS
 */
public class GuiSuivi extends Form {
    Form current;

    public GuiSuivi(Form previous) {
        
        current=this;
        getToolbar().addMaterialCommandToLeftBar("back",FontImage.MATERIAL_ARROW_BACK, ev -> previous.showBack());
        String url = "file:///C:/Users/ASUS/Downloads/Test.pdf";
        Button devGuide = new Button("Téléchargez Le Suivi en PDF");
        devGuide.addActionListener(e -> {
            FileSystemStorage fs = FileSystemStorage.getInstance();
            String fileName = url;
            if (!fs.exists(fileName)) {
                Util.downloadUrlToFile(url, fileName, true);
            }
            Display.getInstance().execute(fileName);
        });
        add(devGuide);
    }

}
