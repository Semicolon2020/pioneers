/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.awt.Image;
import java.io.File;
import java.sql.Date;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileNameExtensionFilter;

/**
 *
 * @author Alfa Shel
 */
public class Tuteur {
    
    private String cin;
    private String nom;
    private String prenom;
    private String email;
    private String sexe;
    private String password;
    private String num_tel;
    private String photo;
    private Image icon;
    private String dateEmbauche;

    public Tuteur(String cin, String nom, String prenom, String email,String sexe, String password, String num_tel) {
        this.cin = cin;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe=sexe;
        this.email = email;
        this.password = password;
        this.num_tel = num_tel;
        
         JFileChooser file = new JFileChooser();
        file.setCurrentDirectory(new File(System.getProperty("user.home")));
        FileNameExtensionFilter filter = new FileNameExtensionFilter("*.Images","jpg","png","jpeg");
        file.addChoosableFileFilter(filter);
        int result = file.showSaveDialog(null);
        if(result== JFileChooser.APPROVE_OPTION)
        {
            File selecteFile = file.getSelectedFile();
             this.photo = selecteFile.getAbsolutePath();
        }
    }
        public Tuteur(String cin, String nom, String prenom,String sexe,String dateEmbauche , String email, String password, String num_tel, Image icon) {
        this.cin = cin;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.dateEmbauche = dateEmbauche;
        this.email = email;
        this.password = password;
        this.num_tel = num_tel;
        this.icon = icon;
    }
        
        
    

    public String getSexe() {
        return sexe;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    
    public String getCin() {
        return cin;
    }

    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public String getEmail() {
        return email;
    }

    public String getPassword() {
        return password;
    }

    public String getNum_tel() {
        return num_tel;
    }

    public String getPhoto() {
        return photo;
    }

    public Image getIcon() {
        return icon;
    }

    public String getDateEmbauche() {
        return dateEmbauche;
    }

    public void setCin(String cin) {
        this.cin = cin;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public void setNum_tel(String num_tel) {
        this.num_tel = num_tel;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    public void setIcon(Image icon) {
        this.icon = icon;
    }

    public void setDateEmbauche(String dateEmbauche) {
        this.dateEmbauche = dateEmbauche;
    }

    @Override
    public String toString() {
        return "Tuteur{" + "cin=" + cin + ", nom=" + nom + ", prenom=" + prenom + ", email=" + email + ", sexe=" + sexe + ", password=" + password + ", num_tel=" + num_tel + ", photo=" + photo + ", dateEmbauche=" + dateEmbauche + '}';
    }
    
    
    
    
    
    
    
}
