{include file=$chemin_header}
{if $menu_modifier == 'TRUE'}
<form id="form_modifications" action="profil.php" method="post">
<button type=submit name="appliquer_modifications">Valider / Retourner à votre profil</button>
<fieldset>
<legend>Modifier vos informations</legend>    
<p><label>Nom : </label><input type="text" name="Nom" value={$Nom} /></p>
<p><label>Prenom : </label><input type="text" name="Prenom" value={$Prenom} /></p>
<p><label>Date de naissance : </label><input type="text" name="DateDeNaissance" value={$DateDeNaissance} /></p>
<p><label>CodePostale : </label><input type="text" name="CodePostale" value={$CodePostale} /></p>
<p><label>Departement : </label><input type="text" name="Departement" value={$Departement} /></p>
<p><label>Ville : </label><input type="text" name="Ville" value={$Ville} /></p>
<p><label>Pays : </label><input type="text" name="Pays" value={$Pays} /></p>
<p><label>Adresse Mail : </label><input type="text" name="AdresseMail" value={$AdresseMail} /></p>
</fieldset>
<fieldset>
<legend>Modifier votre parcours scolaire</legend>
</fieldset>
</form>

{elseif $connexion == 'FALSE' }
<fieldset>
<legend>Connexion</legend>
<p>Vous ne pouvez acceder à votre profil si vous n'êtes pas connecté.</p>
</fieldset>

{else}
<p>{$message}</p>
<form id="modifier" action="profil.php" method="get">
<input type="hidden" name="modifier" value="modifier">
<button type=submit>Modifier votre profil</button>
</form>
<fieldset>
<legend>Vos informations</legend>    
<p><label>Nom : {$Nom}</label></p>
<p><label>Prenom : {$Prenom}</label></p>
<p><label>Date de naissance : {$DateDeNaissance}</label></p>
<p><label>Code postale : {$CodePostale}</label></p>
<p><label>Departement : {$Departement}</label></p>
<p><label>Ville : {$Ville}</label></p>
<p><label>Pays : {$Pays}</label></p>
<p><label>Adresse Mail : {$AdresseMail}</label></p>
</fieldset>
<fieldset>
<legend>Votre parcours scolaire</legend>

</fieldset>
{/if}

{include file=$chemin_footer}
