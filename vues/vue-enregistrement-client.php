<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="utf-8">
		<title>Sanaya Bio Ateliers - Connexion</title>
</head>

<body>
	<h1>S'enregistrer</h1>

	<form name="Formulaire" action="../controleurs/ctrl-enregistrer-client.php" method="post" onSubmit="return verification()" >
 
      <table border="0" cellpadding="5" cellspacing="10">
	  		 
			<tr>
            <td><label for="nom">Nom: </label></td>
            <td><input type="text" id="nom" name="nom"></td>
         </tr>  
              
         <tr>
            <td><label for="prenom">Prénom : </label></td>
            <td><input type="text" id="prenom" name="prenom"></td>
         </tr>

         <tr>
            <td><label for="civilite">Civilité</label></td>
            <td><select id="civilite" name="civilite">
               <option name="monsieur" value="monsieur" selected>Monsieur</option>
               <option name="madame" value="madam">Madame</option>
         </tr>

         <tr>
            <td><label for="naissance">Date de Naissance : </label></td>
            <td><input type="date" id="naissance" name="naissance"></td>
         </tr>

			<tr>
			   <td><label for="mail">Adresse Electronique : </label></td>
				<td><input type="email" id="mail" name="mail"></td>
         </tr>

         <tr>
            <td><label for="mdp"> Mot de Passe :</label></td>
            <td><input type="password" id="password" name="mdp"></td>
         </tr> 

         <tr>
            <td><label for="adresse_postale">Adresse Postale :</label></td>
            <td><input type="adresse_postale" id="adresse_postale" name="adresse postale"></td>
         </tr>
         
         <tr>
            <td><label for="code_postal">Code Postal : </label></td>
            <td><input type="text" id="code_postal" name="code_postal"></td>
         </tr>  

         <tr>
            <td><label for="ville">Ville :</label></td>
            <td><input type="ville" id="ville" name="vile"></td>
         </tr>

         <tr>
            <td><label for="telephone">Numéro de Mobile :</label></td>
            <td><input type="text" id="telephone" name="telephone"></td>
         </tr>

      </table>
       
             <table border="0" cellpadding="0" cellspacing="0">
                    
                   <tr style="height:10px"></tr>
              
                   <tr>                    
                      <td><input type="submit" name="envoi" class="envoi" value="S'enregistrer" style="margin-left: 20px;"/>
                          <input type="reset" name="annule" class="annule" value="Reset"/>
                      </td>
                       
                   </tr>      
              
             </table>
       </table>
 
</form>


</body>

</html>