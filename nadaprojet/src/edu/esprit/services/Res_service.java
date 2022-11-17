/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;
 
import edu.esprit.entities.Reservation;
import edu.esprit.entities.Salle;
import edu.esprit.utils.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import javafx.scene.input.KeyCode;
import static javafx.scene.input.KeyCode.R;
import static javafx.scene.input.KeyCode.S;
import static jdk.nashorn.internal.runtime.Debug.id;

/**
 *
 * @author MLLE-BAHRI
 */
public class Res_service {
        List<Reservation> myList = new ArrayList();

    Connection cnx2;
    

    public Res_service() {
        cnx2 = MyConnection.getInstance().getCnx();

    }

    public void ajouterReservation() {
        try {
            String requete = "INSERT INTO Reservation ( Nom_salle , Nom_artiste)"
                    + "values(?,?)";
            Statement st = new MyConnection().getCnx().createStatement();
            st.executeUpdate(requete);
            System.out.println("Reservation ajoutée avec succées");

        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }

    }

    public void ajouterReservation2 (Reservation R) {
        try {
            String requete2 = "INSERT INTO Reservation (Nom_salle , Nom_artiste)"
                    + "values(?,?)";
            java.sql.PreparedStatement pst = cnx2.prepareStatement(requete2);
            pst.setString(1, R.getNom_salle());
            pst.setString(2, R.getNom_artiste());
            pst.executeUpdate();
            System.out.println("votre Reservation est ajoutée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public int AfficherReservation() {
        List<Reservation> myList = new ArrayList();
        try {

            String requete3 = "SELECT * FROM Reservation";
            Statement st = cnx2.createStatement();
            ResultSet rs = st.executeQuery(requete3);
            while (rs.next()) {
                Reservation R = new Reservation(requete3, requete3);
                R.setID_res(rs.getInt(1));
                R.setNom_salle(rs.getString("Nom_salle"));
                R.setNom_artiste(requete3);        
                myList.add(R);
            }
        } catch (SQLException ex) {
            System.err.println(ex.getMessage());
        }
        return myList.size();
    }
   
    

   /* public boolean deleteReservation(Reservation reservation) {
        boolean b = false;

        try {

            String sql = deleteReservation(reservation).getID_res() + "delete from Reservation where ID_res='" + "'";
            Statement st = cnx2.createStatement();
            System.out.println(sql);
            st.executeUpdate(sql);
            System.out.println("reservation deleted ...");
            b = true;

        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.err.println("problem in deleting ...");
        }
        return b;
    }*/

   
    public  void updateReservation(int ID_res, String Nom_salle) {
        String sql = "update Reservation set Nom_salle='" + ID_res + "' where ID_res=" + Nom_salle + "";
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
    
    public void ChercherReservation() throws SQLException {
        System.out.println("entre l'Id du reservation à Chercher");
        Scanner sc = new Scanner(System.in);
        String h = sc.nextLine();
        ArrayList<Object> ListReservation = null;
        List<Reservation> Reservation = new ArrayList<>();

        try {
            String sql = "SELECT * FROM Reservation where ID_res=" + h;
           // System.out.println("==<>>>>> " + sql);
            ResultSet rs;
            PreparedStatement ste;
            ste = cnx2.prepareStatement(sql);
            rs = ste.executeQuery();
            while (rs.next()) {
                Reservation R = new Reservation();
                R.setID_res(rs.getInt(1));
                R.setNom_salle(rs.getString("Nom_salle"));
                R.setNom_artiste(rs.getString("type"));
            
                System.out.println(R);
                Reservation.add(R);
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());

        }
    }

  int remise=0;
    public String remiseReservation( int ID){
         String requete3 = "SELECT prix_res FROM Reservation where ID_res=ID";
            Statement st = cnx2.createStatement();
            ResultSet rs = st.executeQuery(requete3);
        
        
        int liste = AfficherReservation();
        if(liste>3){
           // remise+=reservation.getPrix_res()*10/100;
        }
    return "hello"+liste;
    }
    

    
}

    

