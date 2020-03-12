/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MahdiEntite;

/**
 *
 * @author ASUS
 */
public class Suivi {
    
    private int id,id_e,id_c;
    private String nutrition,sommeil,sociabilite,psychologie,NomEnfant;

    public Suivi() {
    }

    public Suivi(int id_e, String nutrition, String sommeil, String sociabilite, String psychologie) {
        
        this.id_e= id_e;
        this.nutrition = nutrition;
        this.sommeil = sommeil;
        this.sociabilite = sociabilite;
        this.psychologie = psychologie;
    }
    
    public Suivi( String nutrition, int id,String sommeil, String sociabilite, String psychologie) {
        
        this.id= id;
        this.nutrition = nutrition;
        this.sommeil = sommeil;
        this.sociabilite = sociabilite;
        this.psychologie = psychologie;
    }
    
    public Suivi(int id_c,int id_e,String nutrition, String sommeil, String sociabilite, String psychologie) {
        this.id_c=id_c;
        this.id_e=id_e;
        this.nutrition = nutrition;
        this.sommeil = sommeil;
        this.sociabilite = sociabilite;
        this.psychologie = psychologie;
    }
    
    public Suivi(String nutrition, String sommeil, String sociabilite, String psychologie) { 
        this.nutrition = nutrition;
        this.sommeil = sommeil;
        this.sociabilite = sociabilite;
        this.psychologie = psychologie;
    }
    
    public Suivi(int id ,String nutrition, String sommeil, String sociabilite, String psychologie,String NomEnfant) { 
        this.id= id ;
       // this.id_c= idc ;
        this.NomEnfant=NomEnfant;
        this.nutrition = nutrition;
        this.sommeil = sommeil;
        this.sociabilite = sociabilite;
        this.psychologie = psychologie;
    }

    public int getId() {
        return id;
    }

    public int getId_e() {
        return id_e;
    }

    public String getNutrition() {
        return nutrition;
    }

    public String getPsychologie() {
        return psychologie;
    }

    public String getSociabilite() {
        return sociabilite;
    }

    public String getSommeil() {
        return sommeil;
    }

    public int getId_c() {
        return id_c;
    }

    public String getNomEnfant() {
        return NomEnfant;
    }
    
    
    
    

    public void setId(int id) {
        this.id = id;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }

    public void setNutrition(String nutrition) {
        this.nutrition = nutrition;
    }

    public void setPsychologie(String psychologie) {
        this.psychologie = psychologie;
    }

    public void setSociabilite(String sociabilite) {
        this.sociabilite = sociabilite;
    }

    public void setSommeil(String sommeil) {
        this.sommeil = sommeil;
    }

    public void setId_c(int id_c) {
        this.id_c = id_c;
    }
    
    

    @Override
    public String toString() {
                return "Suivi{" + "id=" + id + ",nutrition=" + nutrition + ", psychologie=" + psychologie + ", sociabilite=" + sociabilite + ", sommeil=" + sommeil + ", id_enfant=" + id_e + ", id_classe=" + id_c +'}';

    }
    
    public String getid(){
        return Integer.toString(id);
    }
    
    public String getide(){
        return Integer.toString(id_e);
    }
    
}
