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
	    echo  "<h2> Tienes $" . $crédito . " de crédito en tu b. </h2>" ;

		$productos [ 'Computador' ] = 750 ;
	    $productos [ 'Auto' ] = 15000 ;
	    $productos [ 'iPhone' ] = 1000 ;
	    $productos [ 'Tostador' ] = 75 ;
		
	    $taxRate = 0.0825 ;

      function  tax_calc ( $valor , $taxRate ) {
	    	 $AddedTax = $valor * $taxRate ;
	    	$amountWithTax = round ( $valor + $AddedTax , 2 );
	    	return  $amountWithTax ;
    	}

	    foreach ( $productos  as  $clave => $valor )
		{
	    	$costWithTax = tax_calc ( $valor , $taxRate );
		    echo  "<p> El " . $clave . " cuesta $ " . $costWithTax . " con impuestos. </p>" ;
	    }

	    echo  "<h2> Artículos que puedes pagar </h2>" ;

	    foreach ( $productos  as $clave => $valor )
		{
	    	 $costWithTax = tax_calc ( $valor , $taxRate );
		    if ( $costWithTax <= $crédito ) {
		    	 echo  "<p> El " . $clave . "</p>" ;
		    }
	    }
    ?> 
  </ body > 
</ html >