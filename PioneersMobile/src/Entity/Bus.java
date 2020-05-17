/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

/**
 *
 * @author ASUS-PC
 */
public class Bus {
    
        private int id,Capacite;
    private String name,Chauffeur;

    public Bus() {
    }


    

    @Override
    public String toString() {
        return "Bus{" + "id=" + id + ", Capacite=" + Capacite + ", name=" + name + ", Chauffeur=" + Chauffeur + '}';
    }
    
    
    public Bus(int id,  String name,int Capacite, String Chauffeur) {
        this.id = id;
        this.Capacite = Capacite;
        this.name = name;
        this.Chauffeur = Chauffeur;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getCapacite() {
        return Capacite;
    }

    public void setCapacite(int Capacite) {
        this.Capacite = Capacite;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getChauffeur() {
        return Chauffeur;
    }

    public void setChauffeur(String Chauffeur) {
        this.Chauffeur = Chauffeur;
    }
    
    
}
