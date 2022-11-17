/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.entities;

/**
 *
 * @author MLLE-BAHRI
 */
public class Reservation {
    private int ID_res;
    private String Nom_salle;
    private String Nom_artiste ;
    private int prix_res;
    public Reservation(int ID_salle) {
        this.ID_res = ID_res;
    }

    public Reservation(int ID_res, String Nom_salle, String Nom_artiste,int prix_res) {
        this.ID_res = ID_res;
        this.Nom_salle = Nom_salle;
        this.Nom_artiste = Nom_artiste;
        this.prix_res=prix_res;
    }

    public Reservation(String Nom_salle, String Nom_artiste) {
        this.Nom_salle = Nom_salle;
        this.Nom_artiste = Nom_artiste;
    }

    public Reservation() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public Reservation(int ID_res, String typeee, String paapap) {
        this.ID_res = ID_res;
        this.Nom_salle = Nom_salle;
        this.Nom_artiste = Nom_artiste;
    }

  

    public int getID_res() {
        return ID_res;
    }

    public void setID_res(int ID_res) {
        this.ID_res = ID_res;
    }

    public String getNom_salle() {
        return Nom_salle;
    }

    public void setNom_salle(String Nom_salle) {
        this.Nom_salle = Nom_salle;
    }

    public String getNom_artiste() {
        return Nom_artiste;
    }

    public void setNom_artiste(String Nom_artiste) {
        this.Nom_artiste = Nom_artiste;
    }

    public int getPrix_res() {
        return prix_res;
    }

    public void setPrix_res(int prix_res) {
        this.prix_res = prix_res;
    }

    @Override
    public String toString() {
        return "Reservation{" + "ID_res=" + ID_res + ", Nom_salle=" + Nom_salle + ", Nom_artiste=" + Nom_artiste + ", prix_res=" + prix_res + '}';
    }
    

   
}
