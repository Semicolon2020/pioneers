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
public class Actualite {
    
    private int id;
    private String date;
    private String titre;
    private String description;

    public Actualite(String description) {
        this.description = description;
    }
    
    public Actualite(int id,String date, String description,String titre) {
        this.titre=titre;
        this.date=date;
        this.id=id;
        this.description = description;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    @Override
    public String toString() {
        return "Actualite{" + "id=" + id + ", date=" + date + ", description=" + description + '}';
    }
    
    
    
}
