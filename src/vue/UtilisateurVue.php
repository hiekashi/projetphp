<?php

namespace blogapp\vue;

use blogapp\vue\Vue;

class UtilisateurVue extends Vue {
    const NOUVEAU_VUE = 1;
    
    public function render() {
        switch($this->selecteur) {
        case self::NOUVEAU_VUE:
            $content = $this->nouveau();
            break;
        }
        return $this->userPage($content);
    }

    public function nouveau() {
        return <<<YOP
        <form method="post" action="{$this->cont['router']->pathFor('util_cree')}">
        <h1>Inscription</h1>
        <label>identifiant : </label> <input type="text" name="id">
        <br/>
        <br/>
        <label>nom : </label>
        <input type="text" name="name">
        <br/>
        <br/>
        <label>prenom : </label>
        <input type="text" name="forename"><br/><br/>
        <label>mail : </label>
        <input type="text" name="mel"><br/><br/>
        <label>mot de passe : </label> <input type="password" name="password"><br/>
        <br/>
        <input type="submit" value="S'inscrire">
        </form>
YOP;
    }


}
