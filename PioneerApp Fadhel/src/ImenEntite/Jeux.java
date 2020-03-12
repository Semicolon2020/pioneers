/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ImenEntite;

/**
 *
 * @author FUJITSU
 */
public class Jeux {
     private int id_j;
    private String nom;
   
    private int score;
    private int id_e;

    public Jeux(int id_j, String nom, int score, int id_e) {
        this.id_j = id_j;
        this.nom = nom;
        
        this.score = score;
        this.id_e = id_e;
    }

    public int getId_j() {
        return id_j;
    }

    public void setId_j(int id_j) {
        this.id_j = id_j;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    

    public int getScore() {
        return score;
    }

    public void setScore(int score) {
        this.score = score;
    }

    public int getId_e() {
        return id_e;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }

    @Override
    public String toString() {
        return "Jeux{" + "id_j=" + id_j + ", nom=" + nom + ", score=" + score + ", id_e=" + id_e + '}';
    }

    
    
}
