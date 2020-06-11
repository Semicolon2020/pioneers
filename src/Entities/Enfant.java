/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author ASUS
 */
public class Enfant {
    
    int id_e;
    String nom,prenom,cin_p;

    public Enfant() {
    }

    public Enfant(Double id_e, String nom, String prenom, String cin_p) {
        this.id_e = id_e.intValue();
        this.nom = nom;
        this.prenom = prenom;
        this.cin_p = cin_p;
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

    @Override
    public String toString() {
        return "Enfant{" + "id=" + id_e + ", nomEnfant=" + nom + ", prenomEnfant=" + prenom +'}';
    }
    
    @Override
    public int hashCode() {
        int hash=0;
        hash = this.id_e;
        return hash;
    }
    
    
    
}
