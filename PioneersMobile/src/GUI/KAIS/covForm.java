/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI.KAIS;

import com.codename1.components.WebBrowser;
import com.codename1.ui.BrowserComponent;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;


/**
 *
 * @author esprit
 */
public class covForm extends Form{
    
       
 public covForm(Form previous){
     
  
        setLayout(BoxLayout.yCenter());
      Container c = new Container(new BoxLayout(BoxLayout.Y_AXIS) );
          Button btnOk = new Button("demande");
          Button btnOk2 = new Button("offre");
          
          c.addAll(btnOk,btnOk2);
     add(c);
       btnOk.addActionListener(e ->{
            Form f2 = new Form(new BoxLayout(BoxLayout.Y_AXIS));
         WebBrowser browser = new WebBrowser();
         browser.setURL("http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/offre");
         f2.add(browser);
           f2.getToolbar().addCommandToOverflowMenu("back", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
      previous.showBack();
               
         }
     });
       f2.show();
       });
       
       btnOk2.addActionListener(e ->{
            Form f2 = new Form(new BorderLayout());
         WebBrowser browser = new WebBrowser();
         browser.setURL("http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php/transport/demande");
         BrowserComponent browserr = new BrowserComponent();
         browserr.setURL("http://localhost/Web2.0/INT/PioneersWeb/web/app_dev.php");
         
              f2.getToolbar().addCommandToOverflowMenu("Back", null, new ActionListener() {

         @Override
         public void actionPerformed(ActionEvent evt) {
       previous.showBack();
               
         }
     });
         f2.add(BorderLayout.CENTER,browserr);
        
      
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
