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
public class Evaluation {
    
    private int id,score,id_e,id_c;
    private String remarque,activite,NomEnfant ;

    public Evaluation() {
    }

    public Evaluation(int id, int score, int id_e, int id_c, String remarque, String activite) {
        this.id = id;
        this.score = score;
        this.id_e = id_e;
        this.id_c = id_c;
        this.remarque = remarque;
        this.activite = activite;
    }

   
    public Evaluation(int score, String remarque, int id, String activite) {
        this.score = score;
        this.id = id;
        this.remarque = remarque;
        this.activite = activite;
    }
    
    public Evaluation(int score,int id_e, String remarque, String activite) {
        this.score = score;
        this.id_e = id_e;
        this.remarque = remarque;
        this.activite = activite;
       // System.out.println(score +" "+id +" "+remarque + activite);
    }
    
   
    public Evaluation(int id ,int score, String nom,String remarque, String activite) {
        this.id= id;
        this.score = score;
       // this.id_c = id_c;
        this.NomEnfant = nom;
        this.remarque = remarque;
        this.activite = activite;
    }

    public String getNomEnfant() {
        return NomEnfant;
    }
    
    
    public int getId() {
        return id;
    }

    public int getId_e() {
        return id_e;
    }

    public String getRemarque() {
        return remarque;
    }

    public int getScore() {
        return score;
    }

    public String getActivite() {
        return activite;
    }

    public int getId_c() {
        return id_c;
    }
    
    

    public void setRemarque(String remarque) {
        this.remarque = remarque;
    }

    public void setScore(int score) {
        this.score = score;
    }

    public void setActivite(String activite) {
        this.activite = activite;
    }

    public void setId_c(int id_c) {
        this.id_c = id_c;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }
    
    

    @Override
    public String toString() {
        return "Evaluation{" + "id=" + id + ", score=" + score + ", remarque=" + remarque + ", id_enfant=" + id_e + ", id_classe=" + id_c + ", activité=" + activite +'}';
    }
    
    public String getscore(){
        return Integer.toString(score);
    }
    
    public String getid(){
        return Integer.toString(id);
    }
    
    public String getide(){
        return Integer.toString(id_e);
    }
 
}
