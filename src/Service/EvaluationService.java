/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.Activite;
import Entities.Enfant;
import Entities.Evaluation;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import java.io.IOException;
import java.util.ArrayList;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author ASUS
 */
public class EvaluationService {

    public ConnectionRequest req;
    public static EvaluationService instance = null;
    public boolean resultOK;
    public ArrayList<Evaluation> tasks;
    public ArrayList<Enfant> tasksE;
    public ArrayList<Activite> tasksA;
    public Evaluation ti = new Evaluation();

    public EvaluationService() {
        req = new ConnectionRequest();
    }

    public static EvaluationService getInstance() {
        if (instance == null) {
            instance = new EvaluationService();
        }
        return instance;
    }

    public ArrayList<Evaluation> parseEvaluation(String jsonText) throws Exception {
        try {
            tasks = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            System.out.println("size :" + list.size());
            for (Map<String, Object> obj : list) {
                Evaluation t = new Evaluation();

                float id = Float.parseFloat(obj.get("id").toString());

                Map<String, Object> enfant = (Map<String, Object>) obj.get("idE");

                Map<String, Object> idActivite = (Map<String, Object>) obj.get("idAc");

                float score = Float.parseFloat(obj.get("score").toString());

                String remarque = obj.get("remarque").toString();

                t.setId((int) id);
                Enfant e = new Enfant((Double) enfant.get("idE"), enfant.get("nom").toString(), enfant.get("prenom").toString(), enfant.get("cinP").toString());
                t.setId_e(e);
                Activite a = new Activite((Double) idActivite.get("idAc"), idActivite.get("nom").toString());
                t.setId_ac(a);
                t.setRemarque(remarque);
                t.setScore(score);

                tasks.add(t);
            }

        } catch (IOException ex) {
            System.out.println(ex);
        }
        System.out.println("Tasks = " + tasks);
        return tasks;
    }

    public boolean addEvaluation(Evaluation t) {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/newEval?id_ac="+t.getId_ac().getId_ac()+
         "&score="+t.getScore()+"&id_e="+t.getId_e().getId_e()+"&remarque="+t.getRemarque(); 
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
               /* une fois que nous avons terminé de l'utiliser.
                 La ConnectionRequest req est unique pour tous les appels de 
                 n'importe quelle méthode du Service task, donc si on ne supprime
                 pas l'ActionListener il sera enregistré et donc éxécuté même si 
                 la réponse reçue correspond à une autre URL(get par exemple)*/
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return true;
    }

    public ArrayList<Evaluation> getAllEvaluation() {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/afficherEval";
        System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    tasks = parseEvaluation(new String(req.getResponseData()));
                    req.removeResponseListener(this);
                } catch (Exception ex) {
                    System.out.println(ex.getMessage());
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return tasks;
    }
    
    public ArrayList<Evaluation> getEvalEnf(String nom) {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/afficherEvalS/"+nom;
        System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    tasks = parseEvaluation(new String(req.getResponseData()));
                    req.removeResponseListener(this);
                } catch (Exception ex) {
                    System.out.println(ex.getMessage());
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return tasks;
    }

    public ArrayList<Evaluation> suppEvaluation(int id) {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/supprimerEval?id=" + id;
        System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    tasks = parseEvaluation(new String(req.getResponseData()));
                } catch (Exception ex) {

                }
                req.removeResponseListener(this);

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return tasks;
    }

    public boolean modifierEvaluation(Evaluation t) {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/modifierEval?id_ac=" + t.getId_ac().getId_ac()
                + "&score=" + t.getScore() + "&id_e=" + t.getId_e().getId_e() + "&remarque=" + t.getRemarque() + "&id=" + t.getId();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return true;
    }
    
    public ArrayList<Enfant> parseEnfant(String jsonText) throws Exception {
        try {
            tasksE = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            //System.out.print("size :" + list.size());
            for (Map<String, Object> obj : list) {
                Enfant e = new Enfant();
                float id = Float.parseFloat(obj.get("idE").toString());
                String nom = obj.get("nom").toString();
                String prenom = obj.get("prenom").toString();
                String cinp = obj.get("cinP").toString();
                e.setId_e((int) id);
                e.setNom(nom);
                e.setPrenom(prenom);
                e.setCin_p(cinp);
                tasksE.add(e);
            }
        } catch (IOException ex) {
            System.out.println(ex);
        }
        return tasksE;
    }
    
    
    public ArrayList<Enfant> getAllEnfant() {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/afficherEnf";
        //System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    tasksE = parseEnfant(new String(req.getResponseData()));

                    req.removeResponseListener(this);
                } catch (Exception ex) {
                    System.out.println(ex.getMessage());
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return tasksE;
    }
    
    public ArrayList<Enfant> getEnfantParent(String cin) {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/enfantStat/"+cin;
        System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    tasksE = parseEnfant(new String(req.getResponseData()));
                    System.out.println(tasksE);
                    req.removeResponseListener(this);
                } catch (Exception ex) {
                    System.out.println(ex.getMessage());
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return tasksE;
    }
    
    public ArrayList<Activite> parseActivite(String jsonText) throws Exception {
        try {
            tasksA = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            //System.out.print("size :" + list.size());
            for (Map<String, Object> obj : list) {
                Activite a = new Activite();
                float id = Float.parseFloat(obj.get("idAc").toString());
                String nom = obj.get("nom").toString();
                a.setId_ac((int) id);
                a.setNom(nom);

                tasksA.add(a);
            }
        } catch (IOException ex) {
            System.out.println(ex);
        }
        return tasksA;
    }
    
    
    public ArrayList<Activite> getAllActivite() {
        String url = "http://localhost/pioneers-Web_Actualite/web/app_dev.php/pioneer/afficherAct";
        //System.out.println(url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                try {
                    tasksA = parseActivite(new String(req.getResponseData()));
                    System.out.println(tasksA);
                    req.removeResponseListener(this);
                } catch (Exception ex) {
                    System.out.println(ex.getMessage());
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return tasksA;
    }
    
}
