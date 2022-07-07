<?php
include __DIR__ . '/Movie.php';

$pulpfiction = new Movie('Pulp Fiction', 1994, 'Quentin Tarantino','John Travolta, Samuel L. Jackson, Uma Thurman, Bruce Willis, ', 18 );
$pulArray = (array) $pulpfiction;


$forrestgump = new Movie('Forrest Gump', 1994, 'Robert Zemeckis', ' Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson, Sally Field ', 13);
$forrestArray = (array) $forrestgump;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body> <?php
foreach($pulpfiction as $key){
    ?> <ul>
        <li><?php echo $key ?></li>
    </ul><?php
}
?> <br> <?php
foreach ($forrestgump as $forrkey){
    ?> <ul>
    <li><?php echo $forrkey ?></li>
</ul><?php
}

?>
</body>
</html>