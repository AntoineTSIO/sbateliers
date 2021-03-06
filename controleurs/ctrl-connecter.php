<?php
	
	$login = $_POST[ 'mail' ] ;
	$mdp = $_POST[ 'mdp' ] ;
	$lf = fopen("/var/log/sbateliers/access.log", "a+");
	
	try {

		$bd = new PDO(
						'mysql:host=localhost;dbname=sbateliers' ,
						'sanayabio' ,
						'sb2021'
			) ;
			
		$sql = 'select * '
			 . 'from Client '
			 . 'where adresse_electronique = :email '
			 . 'and mot_de_passe = :mdp' ;
			 
		$st = $bd -> prepare( $sql ) ;
		
		$st -> execute( array( 
								':email' => $login ,
								':mdp' => $mdp 
						) 
					) ;
		$resultat = $st -> fetchall() ;
			
		unset( $bd ) ;
		
		if( count( $resultat ) == 1 ) {
			session_start() ;
			$_SESSION['numero'] = $resultat[0]['numero'] ;
			$_SESSION['civilité'] = $resultat[0]['civilite'];
			$_SESSION['nom'] = $resultat[0]['nom'] ;
			$_SESSION['prenom'] = $resultat[0]['prenom'] ;
			$_SESSION['dateNaissance'] = $resultat[0]['date_de_naissance'];
			$_SESSION['email'] = $resultat[0]['adresse_electronique'];
			$_SESSION['adresse'] = $resultat[0]['adresse_postale'];
			$_SESSION['codePostal'] = $resultat[0]['code_postal'];
			$_SESSION['ville'] = $resultat[0]['ville'];
			$_SESSION['telephone'] = $resultat[0]['numero_de_telephone'];

			
			$_SESSION[ 'login' ] = $login ;
			
			$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Ok\n" ;
			fwrite($lf, $journal);

			header( 'Location: ../vues/vue-liste-ateliers.php' ) ;
		}
		else {

			$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Nok\n" ;
			fwrite($lf, $journal);
			
			header( 'Location: ../vues/vue-connexion.php?echec=1' ) ;

		}
	}
	catch( PDOException $e ){

		$journal = $_SERVER['REMOTE_ADDR']." ".date("Y-M-d:H:i:s")." ".$_SESSION['nom']." ".$_SERVER['HTTP_USER_AGENT']." "."Connexion Nok\n" ;
		fwrite($lf, $journal);
		
		header( 'Location: ../vues/vue-connexion.php?echec=0' ) ;

	}	

?>