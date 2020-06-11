/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

/**
 *
 * @author ASUS
 */
public class Evaluation {

    
    
    int id;
    String remarque;
    Enfant id_e;
    Activite id_ac;
    float score;

    public Evaluation() {
    }

    public Evaluation(int id, String remarque, Enfant id_e, Activite id_ac, float score) {
        this.id = id;
        this.remarque = remarque;
        this.id_e = id_e;
        this.id_ac = id_ac;
        this.score = score;
    }
    
    public Evaluation( Enfant id_e,Activite id_ac,String remarque,float score) {
        this.remarque = remarque;
        this.id_e = id_e;
        this.id_ac = id_ac;
        this.score = score;
    }
    
    
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Activite getId_ac() {
        return id_ac;
    }

    public void setId_ac(Activite id_ac) {
        this.id_ac = id_ac;
    }

    public Enfant getId_e() {
        return id_e;
    }

    public void setId_e(Enfant id_e) {
        this.id_e = id_e;
    }

    public String getRemarque() {
        return remarque;
    }

    public void setRemarque(String remarque) {
        this.remarque = remarque;
    }

    public float getScore() {
        return score;
    }

    public void setScore(float score) {
        this.score = score;
    }
    
    
 
}
