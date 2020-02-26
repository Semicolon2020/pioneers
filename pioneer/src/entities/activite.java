/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package entities;



/**
 *
 * @author user
 */
public class activite {
   private String nom;
    
     private int  niveau;
      private String   type;
       private String  lieu;
      private String description;
      private int     id_ac;

    public activite(String nom,  int niveau, String type, String lieu, String description, int id_ac) {
       this.nom= nom ;
       
       this.niveau=niveau ;
       this.type=type ;
       this.lieu=lieu ;
       this.description=description ;
       this.id_ac=id_ac;
    }

   

    public String getDescription() {
        return description;
    }

    public int getId_ac() {
        return id_ac;
    }
    public String getid_ac()
    {  
        return Integer.toString(id_ac)  ;
    }

    public String getLieu() {
        return lieu;
    }

    public int getNiveau() {
        return niveau;
    }
     public String getniveau() {
        return Integer.toString(niveau);
    }

    public String getNom() {
        return nom;
    }

    public String getType() {
        return type;
    }

    

    public void setDescription(String description) {
        this.description = description;
    }

    public void setId_ac(int id_ac) {
        this.id_ac = id_ac;
    }

    public void setLieu(String lieu) {
        this.lieu = lieu;
    }

    public void setNiveau(int niveau) {
        this.niveau = niveau;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setType(String type) {
        this.type = type;
    }

    @Override
    public String toString() {
        return "acttivite{" + "id_ac=" + id_ac + ", nom=" + nom + ", niveau=" + niveau + ", type=" + type + ", lieu=" + lieu + ",description=" + description + '}';
    
    }

   
                                                        
}
