/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

//import java.util.Date;

/**
 *
 * @author MLLE-BAHRI
 */
public class Salle {
    private int ID_salle;
    private String Nom_salle;
    private String type;
    private String description;
    private int capacité;
    private int nb_eta_res;
    private int prix_res;

    public Salle(int ID_salle) {
        this.ID_salle = ID_salle;
    }

    public int getPrix_res() {
        return prix_res;
    }

    public void setPrix_res(int prix_res) {
        this.prix_res = prix_res;
    }
  

    public Salle(int ID_salle, String Nom_salle, String type, String description, int capacité, int nb_eta_res,int prix_res) {
        this.ID_salle = ID_salle;
        this.Nom_salle = Nom_salle;
        this.type = type;
        this.description = description;
        this.capacité = capacité;
        this.nb_eta_res = nb_eta_res;
        this.prix_res=prix_res;
        
    }

    public Salle(String Nom_salle, String type, String description, int capacité, int nb_eta_res, int prix_res) {
        this.Nom_salle = Nom_salle;
        this.type = type;
        this.description = description;
        this.capacité = capacité;
        this.nb_eta_res = nb_eta_res;
        this.prix_res=prix_res;
        
    }

    public Salle() {
        //throw new UnsupportedOperationException("Not supported yet."); 
    }

    public int getID_salle() {
        return ID_salle;
    }

    public void setID_salle(int ID_salle) {
        this.ID_salle = ID_salle;
    }

    public String getNom_salle() {
        return Nom_salle;
    }

    public void setNom_salle(String Nom_salle) {
        this.Nom_salle = Nom_salle;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getCapacité() {
        return capacité;
    }

    public void setCapacité(int capacité) {
        this.capacité = capacité;
    }

    public int getNb_eta_res() {
        return nb_eta_res;
    }

    public void setNb_eta_res(int nb_eta_res) {
        this.nb_eta_res = nb_eta_res;
    }

 
        
    

    @Override
    public String toString() {
        return "salle{" + "ID_salle=" + ID_salle + ", Nom_salle=" + Nom_salle + ", type=" + type + ", description=" + description + ", capacit\u00e9=" + capacité + ", nb_eta_res=" + nb_eta_res + ", prix_res=" + prix_res  + "}";
    }
}
    
    

