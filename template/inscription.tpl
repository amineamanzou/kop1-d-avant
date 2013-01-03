{include file=$chemin_header}
{if $redirection_profil == 1}
<meta http-equiv="refresh" content="5;url=profil.php" />
<p>{$erreur}</p>
{elseif $inscription == 1}
<form method="POST" 
      action="{$action_ajouter_image}" 
      enctype="multipart/form-data">
      <fieldset>
     <!-- Limite du fichier à {$poids_max}octets maxim -->
     <input type="hidden" name="MAX_FILE_SIZE" value={$poids_max}> 
     <p><label> Fichier : <input type="file" name="avatar"></label></p>
     <p>{$poids_max} octets maximum, jpg uniquement</p>
     <input type="submit" name="envoyer_photo_profil" value="Envoyer le fichier">
     </fieldset>
</form>
{else}
<form action="{$action_formulaire_inscription}"
      method="post"
      enctype="application/w-www-form-urlencoded">
    <fieldset> 
    <legend> Inscription </legend>
    <p><label> Email <input id=email name=email type=email maxlength=40 placeholder="ex : arnaud@chezwam.net" required autofocus></label></p>
    <p><label> Mot de passe <input id="MotDePasse" name=MotDePasse maxlength=20 type="password" placeholder="votre mot de passe" required></label></p>
    <p><label> Nom <input id=Nom name=Nom maxlength=20  placeholder="ex : Dupond" required></label></p>
    <p><label> Prenom <input id=Prenom name=Prenom maxlength=20  placeholder="ex : Axel" required></label></p>
    <p><label> DateDeNaissance <input id=DateDeNaissance type=date name=DateDeNaissance maxlength=20  placeholder="ex : Axel" required></label></p>
    <p><label> Civilité <input type=radio name="genre" value="homme"> Homme </label>
       <label>          <input type=radio name="genre" value="femme"> Femme </label></p>
    <p><label> Ville <input id=Ville name=Ville type=cityname  placeholder="ex : Paris" required></label></p>
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <p><label> CodePostale <input id=CodePostale name=CodePostale placeholder="ex : 93330" required></label></p>
    <legend> </legend>
    <button type=submit name="inscription">Inscription</button>
    </fieldset>
</form>
{/if}
{include file=$chemin_footer}
