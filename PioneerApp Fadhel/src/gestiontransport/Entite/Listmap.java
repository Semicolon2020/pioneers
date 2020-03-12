/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gestiontransport.Entite;

/**
 *
 * @author ASUS-PC
 */
public class Listmap {
    
    Double longi;
String nomparent;
String num;
    Double lalti;

    public Double getLongi() {
        return longi;
    }

    public void setLongi(Double longi) {
        this.longi = longi;
    }

    public String getNomparent() {
        return nomparent;
    }

    public void setNomparent(String nomparent) {
        this.nomparent = nomparent;
    }

    public String getNum() {
        return num;
    }

    public void setNum(String num) {
        this.num = num;
    }

    public Double getLalti() {
        return lalti;
    }

    public void setLalti(Double lalti) {
        this.lalti = lalti;
    }

    public String getNamestation() {
        return namestation;
    }

    public void setNamestation(String namestation) {
        this.namestation = namestation;
    }

    public Listmap(Double longi, String nomparent, String num, Double lalti, String namestation) {
        this.longi = longi;
        this.nomparent = nomparent;
        this.num = num;
        this.lalti = lalti;
        this.namestation = namestation;
    }
    String namestation;
    
}
