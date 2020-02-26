/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.pioneers.Entite;

/**
 *
 * @author FUJITSU
 */
public class Livre {
     private int id_l;
    private String titre_l;
    private int age;

    public Livre(int id_l, String titre_l, int age) {
        this.id_l = id_l;
        this.titre_l = titre_l;
        this.age = age;
    }

    public int getId_l() {
        return id_l;
    }

    public void setId_l(int id_l) {
        this.id_l = id_l;
    }

    public String getTitre_l() {
        return titre_l;
    }

    public void setTitre_l(String titre_l) {
        this.titre_l = titre_l;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    @Override
    public String toString() {
        return "Livre{" + "id_l=" + id_l + ", titre_l=" + titre_l + ", age=" + age + '}';
    }
    
}
