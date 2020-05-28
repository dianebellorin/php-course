<! DOCTYPE html>
<html>
  <head>
    <title> Tienda PHP  </title>
  </head>
  <body>
    <?php 
	    $name = "Tienda PHP" ;
			$crédito = 1000 ;

	    echo  "<h1> Bienvenido a " . $name . "</h1>" ;
	    echo  "<h2> Tienes $" . $crédito . " en tu billetera. </h2>" ;

		$productos [ 'Computador' ] = 750 ;
	    $productos [ 'Auto' ] = 15000 ;
	    $productos [ 'iPhone' ] = 1000 ;
	    $productos [ 'Tostador' ] = 75 ;
		

	    foreach ( $productos  as  $clave => $valor ) {
		 echo  "<p> El " . $clave . " cuesta $" . $valor . "</p>" ;
	}

	    echo  "<h2> Artículos que puedes pagar </h2>" ;

	     foreach ( $productos  as  $clave => $valor ) {
		     if ( $valor <= $crédito ) {
		    	 echo  "<p>" . $clave . "</p>" ;
		}
	}
		$monto = 800 ;
		$taxRate = 0.0825 ;
		$AddedTax = $monto * $taxRate ;  // cantidad = 800, impuesto = .0825 
		echo  $AddedTax ;
		
		function tax_calc ($cantidad , $impuestos ) {
		$calculate_tax = $cantidad * $impuestos ;
		$cantidad = round ( $cantidad + $Calculate_tax , 2 );
		return  $monto ;
		echo  tax_calc ( 750 , 0.223 )
  }
  
  
    ?> 
  </body> 
</html>