<! DOCTYPE html>
<html>
  <head>
    <title> Tienda PHP  </title>
  </head>
  <body>
    <?php 
	    $name = "Tienda PHP" ;
			$crédito = 1000 ;

	    echo  "<h1> Bienvenido a" . $name . "</h1>" ;
	    echo  "<h2> Tienes $" . $crédito . " en tu billetera. </h2>" ;

		$productos [ 'Computadora' ] = 750 ;
	    $productos [ 'Auto' ] = 15000 ;
	    $productos [ 'iPhone' ] = 1000 ;
	    $productos [ 'Tostadora' ] = 75 ;

	    foreach ( $productos  as  $clave => $valor ) {
			if ( $valor <= $crédito ) {
		     echo  "<p> . $clave . "</p>" ;
	    }
		echo  "<h2> Artículos que puede pagar </h2>" ;
		
    ?> 
  </ body > 
</ html >