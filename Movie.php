<?php
class Movie{
    public $titolo;
    public $anno;
    public $regista;
    public $attori;

    public function __construct(string $titolo_pass, int $anno_pass)
    {
        $this ->titolo = $titolo_pass;
        $this ->anno = $anno_pass; 
    }
}