/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

/**
 *
 * @author Alfa Shel
 */
public class Actualite {
    
    
    
    private String id;
    private String Date;
    private String description;
    private String titre;
    private String photo;
    
    public Actualite() {
       
    }

    public Actualite(String id, String Date, String description, String titre, String photo) {
        this.id = id;
        this.Date = Date;
        this.description = description;
        this.titre = titre;
        this.photo = photo;
    }
    
      public Actualite( String Date, String description, String titre, String photo) {
        this.Date = Date;
        this.description = description;
        this.titre = titre;
        this.photo = photo;
    }


    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getDate() {
        return Date;
    }

    public void setDate(String Date) {
        this.Date = Date;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getPhoto() {
        return photo;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    @Override
    public String toString() {
        return "Actualite{" + "id=" + id + ", Date=" + Date + ", description=" + description + ", titre=" + titre + ", photo=" + photo + '}';
    }
    
    
    
}
