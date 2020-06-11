/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.util.Objects;

/**
 *
 * @author ASUS
 */
public class Suivi {
    
    int id; 
    Enfant id_e;
    String nutrition,sommeil,sociabilite,psychologie;

    public Suivi(int id, Enfant id_e, String nutrition, String sommeil, String sociabilite, String psychologie) {
        this.id = id;
        this.id_e = id_e;
        this.nutrition = nutrition;
        this.sommeil = sommeil;
        this.sociabilite = sociabilite;
        this.psychologie = psychologie;
    }
    
    public Suivi() {
    }
    
    
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Enfant getId_e() {
        return id_e;
    }

    public void setId_e(Enfant id_e) {
        this.id_e = id_e;
    }

    public String getNutrition() {
        return nutrition;
    }

    public void setNutrition(String nutrition) {
        this.nutrition = nutrition;
    }

    public String getSommeil() {
        return sommeil;
    }

    public void setSommeil(String sommeil) {
        this.sommeil = sommeil;
    }

    public String getSociabilite() {
        return sociabilite;
    }

    public void setSociabilite(String sociabilite) {
        this.sociabilite = sociabilite;
    }

    public String getPsychologie() {
        return psychologie;
    }

    public void setPsychologie(String psychologie) {
        this.psychologie = psychologie;
    }

    @Override
    public boolean equals(Object obj) {
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Suivi other = (Suivi) obj;
        if (this.id != other.id) {
            return false;
        }
        return true;
    }
    
    
    
}
