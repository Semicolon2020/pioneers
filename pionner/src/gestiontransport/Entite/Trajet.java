/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.Entite;

import java.util.List;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;

/**
 *
 * @author ASUS-PC
 */
public class Trajet {
    
    private SimpleIntegerProperty  Id;
    private SimpleStringProperty  Name;
    private SimpleIntegerProperty  idbus ;  
    private   List<Station> Stations;

    public Trajet(int Id, String Name, int idbus) {
        this.Id = new SimpleIntegerProperty(Id);
        this.Name = new SimpleStringProperty(Name);
        this.idbus = new SimpleIntegerProperty(idbus);
       
    }

    public Integer getId() {
        return Id.get();
    }

    public void setId(SimpleIntegerProperty Id) {
        this.Id = Id;
    }

    public String getName() {
        return Name.get();
    }

    

    public int getIdbus() {
        return idbus.get();
    }

    

    

   

            }
