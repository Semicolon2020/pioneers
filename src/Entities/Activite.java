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
public class Activite {
    
    int id_ac;
    String nom;

    public Activite() {
    }

    public Activite(Double id_ac, String nom) {
        this.id_ac = id_ac.intValue();
        this.nom = nom;
    }

    public int getId_ac() {
        return id_ac;
    }

    public String getNom() {
        return nom;
    }

    public void setId_ac(int id_ac) {
        this.id_ac = id_ac;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    @Override
    public String toString() {
    return "Activité{" + "id=" + id_ac + ", nomActivité=" + nom + '}';
    }
    
    @Override
    public int hashCode() {
        int hash=0;
        hash = this.id_ac;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Activite other = (Activite) obj;
        if (this.id_ac != other.id_ac) {
            return false;
        }
        if (!Objects.equals(this.nom, other.nom)) {
            return false;
        }
        return true;
    }
    
    
}
