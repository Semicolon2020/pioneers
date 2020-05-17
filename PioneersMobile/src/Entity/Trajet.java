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
public class Trajet {
     private int id,idbus;
     

    public Trajet(int id,String name,int idbus) {
        this.id = id;
        this.idbus = idbus;
        this.name = name;
    }
    private String name,namebus;

    public String getNamebus() {
        return namebus;
    }

    public void setNamebus(String namebus) {
        this.namebus = namebus;
    }

    public Trajet() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdbus() {
        return idbus;
    }

    public void setIdbus(int idbus) {
        this.idbus = idbus;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
    
    
    
    
}
