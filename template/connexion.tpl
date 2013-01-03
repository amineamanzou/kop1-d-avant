{include file=$chemin_header}
<fieldset>
<legend>Connexion</legend>
<form id="Connexion" method="POST" action="connexion.php">
    <label for=email>Email</label>
    <input id=email name=email type=email placeholder="arnaud@chezwam.net" required autofocus>
    <br />
    <label for=motdepasse>Mot de passe</label>
    <input id=motdepasse name=motdepasse type=motdepasse placeholder="******" required>
    <br />
    <button type=submit name="Connexion" value="Connexion">Connexion</button>
</form>
</fieldset>
{include file=$chemin_footer}
