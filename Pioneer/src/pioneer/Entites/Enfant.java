/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pioneer.Entites;

/**
 *
 * @author ASUS
 */
public class Enfant {
    
    String cin_p,nom,prenom,sexe;
    int age,id_e,id_c;

    public Enfant() {
    }

    public Enfant(String nom, String prenom, String sexe, String cin_p, int age, int id_e, int id_c) {
        this.nom = nom;
        this.prenom = prenom;
        this.sexe = sexe;
        this.cin_p = cin_p;
        this.age = age;
        this.id_e = id_e;
        this.id_c = id_c;
    }

    

    public int getAge() {
        return age;
    }

    public String getCin_p() {
        return cin_p;
    }

    public int getId_e() {
        return id_e;
    }

    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public String getSexe() {
        return sexe;
    }

    public int getId_c() {
        return id_c;
    }
    
    
    public void setAge(int age) {
        this.age = age;
    }

    public void setCin_p(String cin_p) {
        this.cin_p = cin_p;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    public void setId_c(int id_c) {
        this.id_c = id_c;
    }
    
    

    @Override
    public String toString() {
         return "Enfant{" + "nom=" + nom + ", prenom=" + prenom + ", sexe=" + sexe + ", cin_p=" + cin_p + ", age=" + age + ", id_e=" + id_e + ", id_c=" + id_c +'}';
    }
    
    
}
