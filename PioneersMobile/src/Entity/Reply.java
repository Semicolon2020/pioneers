/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entity;

/**
 *
 * @author Alfa Shel
 */
public class Reply {
    
    private String id;
    private String id_cmt;   
    private String id_u;
    private String text;
    private String point;
    private String date;
    private String UserName;
    private String UserPhoto;
    

    public Reply(){}

    public Reply(String id, String id_cmt, String id_u, String text, String point, String date, String UserName, String UserPhoto) {
        this.id = id;
        this.id_cmt = id_cmt;
        this.id_u = id_u;
        this.text = text;
        this.point = point;
        this.date = date;
        this.UserName = UserName;
        this.UserPhoto = UserPhoto;
    }

    public String getUserName() {
        return UserName;
    }

    public void setUserName(String UserName) {
        this.UserName = UserName;
    }

    public String getUserPhoto() {
        return UserPhoto;
    }

    public void setUserPhoto(String UserPhoto) {
        this.UserPhoto = UserPhoto;
    }
    
    

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getId_cmt() {
        return id_cmt;
    }

    public void setId_cmt(String id_cmt) {
        this.id_cmt = id_cmt;
    }

    public String getId_u() {
        return id_u;
    }

    public void setId_u(String id_u) {
        this.id_u = id_u;
    }

    public String getText() {
        return text;
    }

    public void setText(String text) {
        this.text = text;
    }

    public String getPoint() {
        return point;
    }

    public void setPoint(String point) {
        this.point = point;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    @Override
    public String toString() {
        return "Reply{" + "id=" + id + ", id_cmt=" + id_cmt + ", id_u=" + id_u + ", text=" + text + ", point=" + point + ", date=" + date + '}';
    }
    
    
    
}
