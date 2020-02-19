/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.awt.Image;
import java.io.File;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileNameExtensionFilter;

/**
 *
 * @author Alfa Shel
 */
public class Enfant {
    
    private int id_e;
    private String nom;
    private String prenom;
    private String sexe;
    private String cin_p;
    private String age;
    private String photo;
    private Image icon;

    public Enfant(String nom, String prenom, String sexe, String cin_p, String age,String photo) {
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.cin_p = cin_p;
        this.age = age;
        this.photo=photo;
//        JFileChooser file = new JFileChooser();
//        file.setCurrentDirectory(new File(System.getProperty("user.home")));
//        FileNameExtensionFilter filter = new FileNameExtensionFilter("*.Images","jpg","png","jpeg");
//        file.addChoosableFileFilter(filter);
//        int result = file.showSaveDialog(null);
//        if(result== JFileChooser.APPROVE_OPTION)
//        {
//            File selecteFile = file.getSelectedFile();
//             this.photo = selecteFile.getAbsolutePath();
//        }
    }
        
       public Enfant(int id_e,String nom, String prenom, String sexe, String cin_p, String age,Image icon) {
       
        this.id_e=id_e;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.cin_p = cin_p;
        this.age = age;
        this.icon=icon;
        
        
         }

    public int getId_e() {
        return id_e;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getSexe() {
        return sexe;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    public String getCin_p() {
        return cin_p;
    }

    public void setCin_p(String cin_p) {
        this.cin_p = cin_p;
    }

    public String getAge() {
        return age;
    }

    public void setAge(String age) {
        this.age = age;
    }

    public String getPhoto() {
        return photo;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    public Image getIcon() {
        return icon;
    }

    public void setIcon(Image icon) {
        this.icon = icon;
    }

    @Override
    public String toString() {
        return "Enfant{" + "id_e=" + id_e + ", nom=" + nom + ", prenom=" + prenom + ", sexe=" + sexe + ", cin_p=" + cin_p + ", age=" + age + '}';
    }
        
    
    
}
