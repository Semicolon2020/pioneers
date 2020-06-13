/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author User
 */
public class Rappels {
        private int id ;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Rappels() {
    }

    public Rappels(String enfant, String objet, String text) {
        this.enfant = enfant;
        this.objet = objet;
        this.text = text;
    }

    public Rappels(int id, String date, String enfant, String objet, String text) {
        this.id = id;
        this.date = date;
        this.enfant = enfant;
        this.objet = objet;
        this.text = text;
    }

    private String date,enfant,objet,text;

 

    @Override
    public String toString() {
        return "Rappel{" + "date=" + date + ", enfant=" + enfant + ", objet=" + objet + ", text=" + text + '}';
    }

    public Rappels(String date, String enfant, String objet, String text) {
        this.date = date;
        this.enfant = enfant;
        this.objet = objet;
        this.text = text;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
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

    public String getText() {
        return text;
    }

    public void setText(String text) {
        this.text = text;
    }
    
}
