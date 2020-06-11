/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MariemEntite;

/**
 *
 * @author User
 */
public class Rappel {
     private String date;
    private String nom;
    private String prenom;
    private String Text;
    private String enfant;
    private String objet;
    private String cin;
    
    public Rappel(String cin, String Text)
    {
        this.Text = Text;
        this.cin = cin;
    }
    
    public Rappel(String objet, String enfant, String Text)
    {
        this.Text =Text;
        this.objet =objet ;
        this.enfant = enfant;  
    }

    public Rappel(String date, String objet, String enfant, String Text) {
        this.date = date;
        this.objet = objet;
        this.enfant = enfant;
        this.Text = Text;
       
    }
    

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
    }

    public String getEnfant() {
        return enfant;
    }

    public void setEnfant(String enfant) {
        this.enfant = enfant;
    }

    public String getObjet() {
        return objet;
    }

    public void setObjet(String objet) {
        this.objet = objet;
    }


    

    @Override
    public String toString() {
        return "Rappel{" + "date=" + date + ", nom=" + nom + ", prenom=" + prenom + ", Text=" + Text + '}';
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
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

    public String getText() {
        return Text;
    }

    public void setText(String Text) {
        this.Text = Text;
    }

    
    
}
