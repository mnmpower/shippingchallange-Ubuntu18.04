<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Welome to my database :D</h1>"; ?>
		<table>
			<tr><td><a href="http://192.168.56.5:8001/index.php">BMW_adres</a></td></tr>
			<tr><td><a href="http://192.168.56.5:8001/tabel2.php">BMW_auto</a></td></tr>
			<tr><td><a href="http://192.168.56.5:8001/tabel3.php">BMW_info</a></td></tr>
			<tr><td><a href="http://192.168.56.5:8001/tabel4.php">BMW_land</a></td></tr>
			<tr><td><a href="http://192.168.56.5:8001/tabel5.php">Shop_categorie</a></td></tr>
			<tr><td><a href="http://192.168.56.5:8001/tabel6.php">Shop_leverancier</a></td></tr>
			<tr><td><a href="http://192.168.56.5:8001/tabel7.php">Shop_product</a></td></tr>
		</table>
    <?php

    // Connexion et sélection de la base
    $conn = mysqli_connect('db', 'maarten', 'R1234-56', "myDB");


    $query = 'SELECT * From shop_categorie';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><span class="glyphicon glyphicon-search"></span></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    /* Libération du jeu de résultats */
    $result->close();

    mysqli_close($conn);

    ?>

	</div>

</body>
</html>
