<?php
class Movie{
    public $titolo;
    public $anno;
    public $regista;
    public $cast;

    public function __construct(string $titolo, int $anno, string $regista, string $cast )
    {
        $this ->titolo = $titolo;
        $this ->anno = $anno;
        $this ->regista = $regista; 
        $this ->cast = $cast;  
    }
}