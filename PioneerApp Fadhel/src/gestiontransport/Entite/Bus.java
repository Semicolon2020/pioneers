/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.Entite;

import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;

/**
 *
 * @author ASUS-PC
 */

public class Bus {
    private SimpleIntegerProperty id;
    private SimpleStringProperty name;
    private SimpleStringProperty Chauffeur;
    private SimpleIntegerProperty Capacite;
   
    public String getChauffeur() {
        return Chauffeur.get();
    }

   

    public String getName() {
        return name.get();
    }

  

    public Bus(Integer id,String name, int Capacite,String Chauffeur) {
        this.id=new SimpleIntegerProperty(id);
        this.name=new SimpleStringProperty(name);
        this.Capacite=new SimpleIntegerProperty(Capacite);
        this.Chauffeur=new SimpleStringProperty(Chauffeur);
    }
    
    public Bus() {
    }
   
   

    public int getId() {
        return id.get();
    }

  

    public int getCapacite() {
        return Capacite.get();
    }

    @Override
    public String toString() {
        return "Bus{" + "id=" + id.get() + ", name=" + name + ", Chauffeur=" + Chauffeur + ", Capacite=" + Capacite + '}';
    }

    

   

    
}
