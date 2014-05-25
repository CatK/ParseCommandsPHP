  <?php 
  
   /*
   * Sample
   * @author CatK
   * Fichier d'exemple
   */
  
   //Ont inclus parse.php
   include 'parse.php';
   
   $x = $connexion->query('SELECT * FROM commands');
	 while ($d = $x->fetch())
	 {
	 
	 $f = get($d['functions'])
	 $cn = $d['name'];//Nom de commande
	 //Ont affiches 
	 
	 echo "<br/>$cn -";
	 echo type($f[0]);
	  }
	  
	  ?>
