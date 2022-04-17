<?php

namespace blogapp\controleur;

use blogapp\vue\UtilisateurVue;
use blogapp\modele\Utilisateur;

class UtilisateurControleur {
    private $cont;
    
    public function __construct($conteneur) {
        $this->cont = $conteneur;
    }

    public function nouveau($rq, $rs, $args) {
        $bl = new UtilisateurVue($this->cont, null, UtilisateurVue::NOUVEAU_VUE);
        $rs->getBody()->write($bl->render());
        return $rs;
    }

    public function nouveaux($rq, $rs, $args) {
        $bn = new UtilisateurVue($this->cont, null, UtilisateurVue::CONNEXION_VUE);
        $rs->getBody()->write($bn->render());
        return $rs;
    }

    public function cree($rq, $rs, $args) {
        // Récupération variable POST + nettoyage

        $id = filter_var($rq->getParsedBodyParam('id'), FILTER_SANITIZE_STRING);

        $nom = filter_var($rq->getParsedBodyParam('name'), FILTER_SANITIZE_STRING);

        $prenom = filter_var($rq->getParsedBodyParam('forename'), FILTER_SANITIZE_STRING);

        $mail = filter_var($rq->getParsedBodyParam('mel'), FILTER_SANITIZE_STRING);

        $mdp = filter_var($rq->getParsedBodyParam('password'), FILTER_SANITIZE_STRING);

        $q = new Utilisateur();
        $q->id = $id;
        $q->nom = $nom;
        $q->prenom = $prenom;
        $q->mail = $mail;
        $q->mdp = $mdp;
        $q->save();

        // Ajout d'un flash
        $this->cont->flash->addMessage('info', "Bienvenue $id !");
        // Retour de la réponse avec redirection
        return $rs->withRedirect($this->cont->router->pathFor('billet_liste'));
        }
}