/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.Reservation;
import java.sql.Connection;
import edu.esprit.entities.Salle;
import edu.esprit.utils.MyConnection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author MLLE-BAHRI
 */
public class Salle_service {
    List<Reservation> liste= new ArrayList<Reservation>();

    Connection cnx2;

    public Salle_service() {
        cnx2 = MyConnection.getInstance().getCnx();

    }

    public void ajouterSalle() {
        try {
            String requete = "INSERT INTO Salle ( Nom_salle , type ,description ,capacité,nb_eta_res,prix_res)"
                    + "VALUES('palace' , 'plein air', 'nada ' ,'....','2','3/06/2006',1000')";
            Statement st = new MyConnection().getCnx().createStatement();
            st.executeUpdate(requete);
            System.out.println("Salle ajoutée avec succès");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

    }

    public void ajouterSalle2(Salle S) {
        try {
            String requete2 = "INSERT INTO Salle (Nom_salle,type,description,capacité,nb_eta_res,prix_res)"
                    + "values(?,?,?,?,?,?)";
            java.sql.PreparedStatement pst = cnx2.prepareStatement (requete2);
            pst.setString(1, S.getNom_salle());
            pst.setString(2, S.getType());
            pst.setString(3, S.getDescription());
            pst.setInt(4, S.getCapacité());
            pst.setInt(5, S.getNb_eta_res());
            pst.setInt(6,S.getPrix_res());
            pst.executeUpdate();
            System.out.println("votre Salle est ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public List<Salle> AfficherSalle() {
        List<Salle> myList = new ArrayList();
        try {

            String requete3 = "SELECT * FROM Salle";
            Statement st = cnx2.createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while (rs.next()) {
                Salle S = new Salle();
                S.setID_salle(rs.getInt(1));
                S.setNom_salle(rs.getString("Nom_salle"));
                S.setType(requete3);
                S.setDescription(requete3);
                S.setCapacité(5);
                S.setNb_eta_res(5);
                S.setPrix_res(5);
                myList.add(S);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList;
    }

    public boolean deleteSalle(Salle salle) {
        boolean b = false;

        try {

            String sql = "delete from salle where ID_salle='" + salle.getID_salle() + "'";
            Statement st = cnx2.createStatement();
            System.out.println(sql);
            st.executeUpdate(sql);
            System.out.println("User deleted ...");
            b = true;

        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.err.println("problem in deleting ...");
        }
        return b;
    }

    public  void update(int ID_salle, String Nom_salle) {
        String sql = "update salle set Nom_salle='" + ID_salle + "' where ID_salle=" + Nom_salle + "";
        int nblignesaffectees = 0;
        try {
             Statement st = cnx2.createStatement();
             nblignesaffectees = st.executeUpdate(sql);
        } catch (SQLException e) {
// TODO Auto-generated catch block
            e.printStackTrace();;
        }
        System.out.println(nblignesaffectees);

    }
    
    public void ChercherSalle() throws SQLException {
        System.out.println("entre l'Id de la salle à Chercher");
        Scanner sc = new Scanner(System.in);
        String h = sc.nextLine();
        List<Salle> Salle = new ArrayList<>();

        try {
            String sql = "SELECT * FROM Salle where ID_salle=" + h;
           // System.out.println("==<>>>>> " + sql);
            ResultSet rs;
            PreparedStatement ste;
            ste = cnx2.prepareStatement(sql);
            rs = ste.executeQuery();
            while (rs.next()) {
                Salle s = new Salle();
                s.setID_salle(rs.getInt(1));
                s.setNom_salle(rs.getString("Nom_salle"));
                s.setType(rs.getString("type"));
                s.setDescription(rs.getString("description"));
                s.setCapacité(rs.getInt("capacité"));
                s.setNb_eta_res(rs.getInt("nb_eta_res"));
                s.setPrix_res(rs.getInt("prix_res"));
                System.out.println(s);
                Salle.add(s);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
    }


    

}
