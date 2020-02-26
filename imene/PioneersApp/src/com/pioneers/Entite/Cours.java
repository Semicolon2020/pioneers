/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.pioneers.Entite;

/**
 *
 * @author FUJITSU
 */
public class Cours {
    private int id_c;
     private String titre;
     private String tuteur;
     private String date;

    public Cours(int id_c, String titre, String tuteur, String date) {
        this.id_c = id_c;
        this.titre = titre;
        this.tuteur = tuteur;
        this.date = date;
    }

    public int getId_c() {
        return id_c;
    }

    public void setId_c(int id_c) {
        this.id_c = id_c;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getTuteur() {
        return tuteur;
    }

    public void setTuteur(String tuteur) {
        this.tuteur = tuteur;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    @Override
    public String toString() {
        return "Cours{" + "id_c=" + id_c + ", titre=" + titre + ", tuteur=" + tuteur + ", date=" + date + '}';
    }
     
}
