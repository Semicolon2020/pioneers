/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;


import java.io.File;
import javafx.scene.image.Image;
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
    private File file;

    public Enfant(int id_e,String nom, String prenom, String sexe, String cin_p, String age,String photo) {
        this.id_e=id_e;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.cin_p = cin_p;
        this.age = age;
        this.photo=photo;

        
    }
        
       public Enfant(int id_e,String nom, String prenom, String sexe, String cin_p, String age,File file) {
       
        this.id_e=id_e;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.cin_p = cin_p;
        this.age = age;
        this.file=file;
        
        
         }
       
       public Enfant(int id_e,String nom, String prenom, String sexe, String cin_p, String age) {
       
        this.id_e=id_e;
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.cin_p = cin_p;
        this.age = age;
        
        
        
         }
       public Enfant(int id_e,String nom,String prenom)
       {  this.id_e=id_e;
           this.nom=nom;
           this.prenom=prenom;
       }
       public Enfant(){}

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

    public File getFile() {
        return file;
    }

    public void setFile(File file) {
        this.file = file;
    }

    @Override
    public String toString() {
        return "Enfant{" + "id_e=" + id_e + ", nom=" + nom + ", prenom=" + prenom + ", sexe=" + sexe + ", cin_p=" + cin_p + ", age=" + age + '}';
    }
        
    
    
}

