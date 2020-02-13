/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author Alfa Shel
 */
public class Classe {
    
    private String id_c;
    private String tuteur;
    private String activite;

    public Classe(String tuteur, String activite) {
        this.tuteur = tuteur;
        this.activite = activite;
    }

    public Classe(String id_c,String tuteur, String activite) {
        this.tuteur = tuteur;
        this.activite = activite;
        this.id_c=id_c;
    }
    
    public Classe(String id_c) {
        
        this.id_c=id_c;
    }
    
    
    
    
    
    
    public String getId_c() {
        return id_c;
    }

    public String getTuteur() {
        return tuteur;
    }

    public String getActivite() {
        return activite;
    }

    public void setId_c(String id_c) {
        this.id_c = id_c;
    }

    public void setTuteur(String tuteur) {
        this.tuteur = tuteur;
    }

    public void setActivite(String activite) {
        this.activite = activite;
    }

    @Override
    public String toString() {
        return "Classe{" + "id_c=" + id_c + ", tuteur=" + tuteur + ", activite=" + activite + '}';
    }
    
    
            
}
