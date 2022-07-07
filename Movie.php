<?php
class Movie{
    public $titolo;
    public $anno;
    public $regista;
    public $cast;
    public $eta;

    public function __construct(string $titolo, int $anno, string $regista, string $cast, int $eta )
    {
        $this ->titolo = $titolo;
        $this ->anno = $anno;
        $this ->regista = $regista; 
        $this ->cast = $cast;
        $this -> eta = $eta;  
    }
    public function controlloeta (){
        if($this-> eta >= 18){
            return 'questo è un film per maggiori di 18 anni ';
        } else {
            return 'questo è un film per bambini';
        }
    }


}