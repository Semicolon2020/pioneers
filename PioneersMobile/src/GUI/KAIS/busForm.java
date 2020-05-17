/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI.KAIS;

import com.codename1.components.SpanLabel;
import com.codename1.components.WebBrowser;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;
import Entity.Bus;
import Entity.Trajet;
import Services.Kais.ServiceBus;
import Services.Kais.ServiceTrajet;
import com.codename1.ui.FontImage;

/**
 *
 * @author esprit
 */
public class busForm extends Form{
      int x=0;
       
 public busForm(Form previous){
     
  setLayout(BoxLayout.yCenter());
 
      Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS) );
          Button btnOk = new Button("afficher");
         ComboBox<String> cv = new ComboBox<>();//ServiceBus.getInstance().getAll().toString()
      for (Trajet a:  new ServiceTrajet().getAll2())
     {
     cv.addItem(a.getName());
     }
         
      
         c.addAll(cv,btnOk);
          add(c);
            btnOk.addActionListener(e ->{  
                
              
                   for (Trajet a:  new ServiceTrajet().getAll2())
     {
     if (cv.getSelectedItem().equals(a.getName())){
         x=a.getId();}
     }
             Form f2 = new Form(new BoxLayout(BoxLayout.Y_AXIS));
         WebBrowser browser = new WebBrowser();
         browser.setURL("http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/trajetid/"+x);
         f2.getToolbar().addCommandToOverflowMenu("back", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
       previous.show();
               
         }
     });
         f2.add(browser);
        
      
       f2.show();
       });
     
       
      getToolbar().addMaterialCommandToLeftBar("Back", FontImage.MATERIAL_ARROW_BACK, new ActionListener() {
         @Override
         public void actionPerformed(ActionEvent evt) {
              new transport(previous).show();
         }
     });
    
     
 }

 
    
}
