/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package edu.testapplication.gui;

import edu.esprit.services.Salle_service;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author MLLE-BAHRI
 */
public class Inscription_nadaController implements Initializable {

    @FXML
    private TextField fxidsalle;
    @FXML
    private TextField fxnomsalle;
    @FXML
    private TextField fxcapacité;
    @FXML
    private TextField fxtype;
    @FXML
    private TextField fxdescription;
    @FXML
    private TextField fxnb_et_res;
    @FXML
    private TextField fxprixres;
    @FXML
    private Button fxajouter;
    @FXML
   

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void savesalle(ActionEvent event) {
        int ID_salle = Integer.parseInt(fxidsalle.getText());
        String Nom_Salle =fxnomsalle.getText();
        String type =fxtype.getText();
        String description =fxdescription.getText();
        int capacité = Integer.parseInt(fxcapacité.getText());
        int nb_eta_res = Integer.parseInt(fxnb_et_res.getText());
        int prix_res =Integer.parseInt(fxprixres.getText());
        //Salle S new Salle(ID_salle,Nom_Salle,type,description,capacité,nb_eta_res,prix_res);
        Salle_service pc = new Salle_service();
        pc.ajouterSalle();
    }
    
}
