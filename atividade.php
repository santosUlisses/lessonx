<?php

class Atividade {

    private $nomeCurso;
    private $professor;
    

    function __construct() {
    }

    // ler propriedades
    public function getnomeCurso() : int {
        return $this->nomeCurso;
    }

    public function getprofessor() : string {
        return $this->professor;
    }
    // configura propriedades
    public function setnomeCurso( int $novonomeCurso ) {
        $this->codigo = $nomeCurso;
    }

    public function setprofessor( string $novoProfessor ) {
        $this->professor = $novoProfessor;
    }
}