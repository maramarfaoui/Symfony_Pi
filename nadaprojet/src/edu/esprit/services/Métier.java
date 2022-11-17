/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.services;

import edu.esprit.entities.Reservation;
import edu.esprit.utils.MyConnection;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import static javax.swing.text.html.HTML.Tag.SELECT;

/**
 *
 * @author MLLE-BAHRI
 */
public class Métier {

    Connection cnx2;
    public void prix_remise ( ){

        
        String requete3 = "SELECT * FROM reservation";

        try {
            Statement st = new MyConnection().getCnx().createStatement();
            st = cnx2.createStatement();
            st.executeUpdate(requete3);
            System.out.println(requete3);
        } catch (SQLException ex) {
            Logger.getLogger(Métier.class.getName()).log(Level.SEVERE, null, ex);
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
      int remise=0;
    public String remiseReservation(){
        
        int liste = AfficherReservation();
        System.out.println('a');
        if(liste>3){
          // remise+=reservation.getPrix_res()*10/100;
         System.out.println('a');
        }
    return "hello"+liste;
    
    }

     
   
}
    
    
    
    
 
