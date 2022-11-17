/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.esprit.tests;

import edu.esprit.entities.Reservation;
import edu.esprit.entities.Salle;
import edu.esprit.services.Res_service;
import edu.esprit.services.Salle_service;
import edu.esprit.utils.MyConnection;
import java.sql.SQLException;
import static javafx.scene.input.KeyCode.R;
import static javafx.scene.input.KeyCode.S;

/**
 *
 * @author MLLE-BAHRI
 */
public class MainClass {
    public static void main(String[] args) throws SQLException {
        MyConnection mc = new MyConnection();
        Salle S = new  Salle (3,"ty","nada","nada", 2, 5,3);
        Salle_service pcd = new Salle_service();
       // pcd.ajouterSalle2(S);
        pcd.AfficherSalle();
        //System.out.println ( pcd.AfficherSalle());
        //Salle_service pcd = new Salle_service();
       //pcd.ajouterSalle2(S);
        //pcd.deleteSalle(S);
        //String Nom_salle = null ;
       
        //pcd.update(1, Nom_salle);
        //pcd.ChercherSalle();
        //Reservation R = new  Reservation(2,"typeee","paapap");
        Res_service nbd = new Res_service();
       // nbd.ajouterReservation2(R);
        //System.out.println(nbd.remiseReservation());
        
         //nbd.AfficherReservation();
        //System.out.println (nbd.AfficherReservation());
        //nbd.remiseReservation();
        
       //String Nom_salle = null;
       //nbd.updateReservation(1, Nom_salle);
        //nbd.deleteReservation(R);
       // nbd.ChercherReservation();
       
       
        
         
   }

    
}
