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
public class Parent {
    
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
    private String etat_compte;
    private String etat_civil;
    
    public Parent(String cin){this.cin=cin;}
    public Parent(){}
    public Parent(String cin,String password){this.cin=cin;this.password=password;}

    public Parent(String cin, String nom, String prenom, String email,String sexe, String password, String num_tel,String etat_civil) {
        this.cin = cin;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe=sexe;
        this.email = email;
        this.password = password;
        this.num_tel = num_tel;
        this.etat_civil=etat_civil;
        
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

    public Parent(String cin, String nom, String prenom,String sexe,String dateEmbauche , String email, String password, String num_tel, Image icon,String etat_compte,String etat_civil) {
        
        this.cin = cin;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.dateEmbauche = dateEmbauche;
        this.email = email;
        this.password = password;
        this.num_tel = num_tel;
        this.icon = icon;
        this.etat_compte=etat_compte;
        this.etat_civil=etat_civil;

    }

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
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

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getNum_tel() {
        return num_tel;
    }

    public void setNum_tel(String num_tel) {
        this.num_tel = num_tel;
    }

    public String getPhoto() {
        return photo;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    public String getEtat_compte() {
        return etat_compte;
    }

    public void setEtat_compte(String etat_compte) {
        this.etat_compte = etat_compte;
    }

    public Image getIcon() {
        return icon;
    }

    public void setIcon(Image icon) {
        this.icon = icon;
    }

   

    public String getEtat_civil() {
        return etat_civil;
    }

    public void setEtat_civil(String etat_civil) {
        this.etat_civil = etat_civil;
    }

    public String getSexe() {
        return sexe;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    public String getDateEmbauche() {
        return dateEmbauche;
    }

    public void setDateEmbauche(String dateEmbauche) {
        this.dateEmbauche = dateEmbauche;
    }

    @Override
    public String toString() {
        return "Parent{" + "cin=" + cin + ", nom=" + nom + ", prenom=" + prenom + ", email=" + email + ", sexe=" + sexe + ", password=" + password + ", num_tel=" + num_tel + ", photo=" + photo + ", icon=" + icon + ", dateEmbauche=" + dateEmbauche + ", etat_compte=" + etat_compte + ", etat_civil=" + etat_civil + '}';
    }

    
    
    
}
