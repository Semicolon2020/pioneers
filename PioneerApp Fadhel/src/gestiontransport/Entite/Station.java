/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.Entite;

import javafx.beans.property.SimpleDoubleProperty;
import javafx.beans.property.SimpleFloatProperty;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;

/**
 *
 * @author ASUS-PC
 */
public class Station {
    
    private SimpleIntegerProperty id ;
    private SimpleStringProperty Name; 
    private SimpleDoubleProperty Altitude;
    private SimpleDoubleProperty Longtitude;
    private SimpleIntegerProperty Idtrajet; 

    public Station(Integer id, String Name,Double Altitude, Double Longtitude, Integer Idtrajet) {
        this.id = new SimpleIntegerProperty(id);
        this.Name = new SimpleStringProperty(Name);
        this.Altitude = new SimpleDoubleProperty(Altitude);
        this.Longtitude = new SimpleDoubleProperty(Longtitude);
        this.Idtrajet = new SimpleIntegerProperty(Idtrajet);
    }
    
    

    public Integer getId() {
        return id.get();
    }

    public void setId(SimpleIntegerProperty id) {
        this.id = id;
    }

    public void setName(SimpleStringProperty Name) {
        this.Name = Name;
    }
    public String getName() {
        return Name.get();
    }

 

    public Double getAltitude() {
        return Altitude.get();
    }

    public void setAltitude(SimpleDoubleProperty Altitude) {
        this.Altitude = Altitude;
    }

    public Double getLongtitude() {
        return Longtitude.get();
    }

    public void setLongtitude(SimpleDoubleProperty Longtitude) {
        this.Longtitude = Longtitude;
    }

    public Integer getIdtrajet() {
        return Idtrajet.get();
    }

    public void setIdtrajet(SimpleIntegerProperty Idtrajet) {
        this.Idtrajet = Idtrajet;
    }
   
   
}
