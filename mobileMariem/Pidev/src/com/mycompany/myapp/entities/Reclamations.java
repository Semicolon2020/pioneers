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
public class Reclamations {
    private int id ;

    public Reclamations(String text, String objet) {
        this.text = text;
        this.objet = objet;
    }

    public Reclamations() {
    }

  

  

    @Override
    public String toString() {
        return "Reclamations{" + "id=" + id + ", text=" + text + ", date=" + date + ", objet=" + objet + '}';
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getText() {
        return text;
    }

    public void setText(String text) {
        this.text = text;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getObjet() {
        return objet;
    }

    public void setObjet(String objet) {
        this.objet = objet;
    }

    public Reclamations(int id, String text, String date, String objet) {
        this.id = id;
        this.text = text;
        this.date = date;
        this.objet = objet;
    }
    private String text, date, objet;
}
