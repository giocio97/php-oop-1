<?php
include __DIR__ . '/Movie.php';

$pulpfiction = new Movie('Pulp Fiction', 1994, 'Quentin Tarantino','John Travolta, Samuel L. Jackson, Uma Thurman, Bruce Willis, ' );
var_dump($pulpfiction);

$forrestgump = new Movie('Forrest Gump', 1994, 'Robert Zemeckis', ' Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson, Sally Field ');
var_dump($forrestgump); 