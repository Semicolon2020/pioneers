/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package OmarEntite;


/**
 *
 * @author user
 */
public class evenement {
   private String nom;
    
     private int  niveau;
      private String   invite;
       private String  lieu;
      private String description;
      private int     id;

    public evenement() {
    }

    public evenement(int id ,String nom,  int niveau, String invite, String lieu, String description) {
        this.nom = nom;
        
        this.niveau = niveau;
        this.invite = invite;
        this.lieu = lieu;
        this.description = description;
        this.id=id;
        
    }
       public evenement(String nom,  int niveau, String invite, String lieu, String description) {
        this.nom = nom;
        
        this.niveau = niveau;
        this.invite = invite;
        this.lieu = lieu;
        this.description = description;
        
        
    }

      
   

    public String getDescription() {
        return description;
    }

    public int getId() {
        return id;
    }
    public String getid() {
        return Integer.toString(id);
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

    public String getInvite() {
        return invite;
    }

    

   

    public void setDescription(String description) {
        this.description = description;
    }

    public void setId(int id) {
        this.id = id;
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

    public void setInvite(String invite) {
        this.invite = invite;
    }

    

    @Override
    public String toString() {
        return "acttivite{" + "id=" + id +",invite="+ invite + ", nom=" + nom + ", niveau=" + niveau +  ", lieu=" + lieu + ",description=" + description + '}';
    
    }
      
                                                        
}
