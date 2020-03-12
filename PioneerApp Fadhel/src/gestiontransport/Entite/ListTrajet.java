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
public class ListTrajet {
    
    
     private SimpleIntegerProperty  Id;
    private SimpleStringProperty  Name;
    private SimpleStringProperty  nombus ;  
   
    private SimpleIntegerProperty  idbus ;  

    public ListTrajet(int Id, String Name,int idbus, String nombus) {
    this.Id = new SimpleIntegerProperty(Id);
        this.Name = new SimpleStringProperty(Name);
        this.nombus = new SimpleStringProperty(nombus);
          this.idbus = new SimpleIntegerProperty(idbus);
       
    }

    @Override
    public String toString() {
        return "ListTrajet{" + "Id=" + Id + ", Name=" + Name + ", nombus=" + nombus + ", idbus=" + idbus + '}';
    }

    public Integer getIdbus() {
        return idbus.get();
    }

    public String getNombus() {
        return nombus.get();
    }

    public void setNombus(SimpleStringProperty nombus) {
        this.nombus = nombus;
    }

    public void setIdbus(SimpleIntegerProperty idbus) {
        this.idbus = idbus;
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

    


    
    
}
