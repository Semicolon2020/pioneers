/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

/**
 *
 * @author Alfa Shel
 */
public class Enfant {
    
    
    private String nom;
    private String prenom;
    private String cin;
    private String sexe;
    private String age;

    
    public Enfant(String nom, String prenom, String cin, String sexe, String age) {
        this.nom = nom;
        this.prenom = prenom;
        this.cin = cin;
        this.sexe = sexe;
        this.age = age;
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

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
    }

    public String getSexe() {
        return sexe;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    public String getAge() {
        return age;
    }

    public void setAge(String age) {
        this.age = age;
    }
    
    
    
    
}
