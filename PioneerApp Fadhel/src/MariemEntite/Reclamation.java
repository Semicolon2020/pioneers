/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemEntite;

import java.sql.Date;
//import java.sql.Timestamp;


/**
 *
 * @author asus
 */
public class Reclamation {
    private String date;
    private String cin;
    private String prenom;
    private String Text;
    private String nom;
    private String objet;

    @Override
    public String toString() {
        return "Reclamation{" + "date=" + date + ", prenom=" + prenom + ", Text=" + Text + ", nom=" + nom + '}';
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
    }

    public Reclamation(String date, String nom, String objet,String Text) {
        this.objet = objet;
        this.Text = Text;
        this.nom = nom;
        this.date=date;
    }

    public Reclamation(String cin, String Text,String objet) {
        this.cin = cin;
        this.Text = Text;
        this.objet= objet;
    }
    
    
  
    public String getDate() {
        return date;
    }

    public void setDate(String date) {
          this.date = date;
    }

   
    
 
     public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getText() {
        return Text;
    }

    public void setText(String Text) {
        this.Text = Text;
    }

    

    private String Format$(Date date, String yyyymmdd) {
        return null;
    }

    public String getObjet() {
        return objet;
    }

    public void setObjet(String objet) {
        this.objet = objet;
    }

   

    
}


