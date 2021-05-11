<?php

namespace blogapp\vue;

use blogapp\vue\Vue;

class UtilisateurVue extends Vue {
    const NOUVEAU_VUE = 1;
    
    private $cont;
    private $source;
    private $selecteur;

    public function __construct($cont, $src, $sel) {
        $this->cont = $cont;
        $this->source = $src;
        $this->selecteur = $sel;
    }

    public function render() {
        switch($this->selecteur) {
        case self::NOUVEAU_VUE:
            $content = $this->nouveau();
            break;
        }
        return $this->userPage($content);
    }

    public function nouveau() {
        $res = "";

        $res .= "<form method=\"post\" action=\"{$this->cont['router']->pathFor('util_cree')}\">";
        $res .= "<input type=\"text\" name=\"nom\">";
        $res .= "<input type=\"submit\" value=\"Go go go !\">";
        $res .= "</form>";

        return $res;
    }
}