/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

import java.util.Objects;

/**
 *
 * @author Alfa Shel
 */
public class User {
    
    private String id;
    private String UserName;
    private String password;
    private String Role;
    
    private String cin;
    private String Nom;
    private String Prenom;
    private String Num;
    private String EtatCivil;
    private String mail;
    private String photo;
    

    public User(){}
    
    public User(String id, String UserName, String password, String Role) {
        this.id = id;
        this.UserName = UserName;
        this.password = password;
        this.Role = Role;
    }
    
    public User( String UserName, String password,String cin , String Nom , String Prenom,String Num,String EtatCivil,String mail) {
      
        this.UserName = UserName;
        this.password = password;
        this.cin = cin;
        this.Nom = Nom;
        this.Prenom = Prenom;
        this.Num = Num;
        this.EtatCivil = EtatCivil;
        this.mail=mail;

        
    }
    
    public User( String id,String UserName, String password,String Role,String cin , String Nom , String Prenom,String Num,String EtatCivil,String mail,String photo) {
      
        this.id=id;
        this.UserName = UserName;
        this.password = password;
        this.cin = cin;
        this.Nom = Nom;
        this.Prenom = Prenom;
        this.Num = Num;
        this.EtatCivil = EtatCivil;
        this.mail=mail;
        this.photo=photo;
        this.Role=Role;
        
        
        
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getUserName() {
        return UserName;
    }

    public void setUserName(String UserName) {
        this.UserName = UserName;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getRole() {
        return Role;
    }

    public void setRole(String Role) {
        this.Role = Role;
    }

    @Override
    public String toString() {
        return "User{" + "id=" + id + ", UserName=" + UserName + ", password=" + password + ", Role=" + Role + '}';
    }

   

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final User other = (User) obj;
        if (!Objects.equals(this.Role, other.Role)) {
            return false;
        }
        return true;
    }

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
    }

    public String getNom() {
        return Nom;
    }

    public void setNom(String Nom) {
        this.Nom = Nom;
    }

    public String getPrenom() {
        return Prenom;
    }

    public void setPrenom(String Prenom) {
        this.Prenom = Prenom;
    }

    public String getNum() {
        return Num;
    }

    public void setNum(String Num) {
        this.Num = Num;
    }

    public String getEtatCivil() {
        return EtatCivil;
    }

    public void setEtatCivil(String EtatCivil) {
        this.EtatCivil = EtatCivil;
    }

    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }

    public String getPhoto() {
        return photo;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }
    
    
    
}
