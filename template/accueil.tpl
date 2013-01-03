{include file=$chemin_header}
<illustration>
<object type="image/svg+xml" data="{$chemin_illustration}">  
    <p>Votre navigateur ne supporte pas le SVG.</p>
</object>   
</illustration>

<formulaire>
<form id="Connexion" method="post" action="connexion.php">
    <label for=email>Email</label>
    <input id=email name=email type=email placeholder="arnaud@chezwam.net" required autofocus>
    <br />
    <label for=motdepasse>Mot de passe</label>
    <input id=motdepasse name=motdepasse type=motdepasse placeholder="******" required>
    <br />
    <button type=submit name="Connexion" value="Connexion">Connexion</button>
</form>
</formulaire>
{include file=$chemin_footer}
