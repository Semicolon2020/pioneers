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
public class enfantETactivite {
    private int id_e;
    private int id_ac;
    private int id;

    public enfantETactivite() {
    }

    public enfantETactivite(int id_e, int id_ac) {
        this.id_e = id_e;
        this.id_ac = id_ac;
        
    }

   

    
     
    
    
    public int getId() {
        return id;
    }

    public int getId_ac() {
        return id_ac;
    }

    public int getId_e() {
        return id_e;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setId_ac(int id_ac) {
        this.id_ac = id_ac;
    }

    public void setId_e(int id_e) {
        this.id_e = id_e;
    }
    
    
    
    
}
