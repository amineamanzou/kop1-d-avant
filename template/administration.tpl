{include file=$chemin_header}
{if $droit_admin == 'FALSE'}
<p>Vous n'êtes pas administateur de ce site, et ne pouvez acceder à cette page.</p>
{else}
{if $ajouter_etablissement == 'TRUE'}
<fieldset>
<legend> Action : Ajouter un établissement </legend>
<form action="{$chemin_administration}"
      method="post"
      enctype="application/w-www-form-urlencoded">
    <p><label> Nom <input id=Ville name=Ville type=cityname  placeholder="ex : IUT de Fontainebleau" required></label></p>
    <p><label> Ville <input id=Ville name=Ville type=cityname  placeholder="ex : Paris" required></label></p>
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <p><label> CodePostale <input id=CodePostale name=CodePostale placeholder="ex : 93330" required></label></p>
    <button type=submit name="ajouter_etablissement">Valider</button>
</form>
</fieldset>
{elseif $supprimer_etablissement == 'TRUE'}
<fieldset>
<legend> Action : Supprimer un établissement </legend>
<form action="{$chemin_administration}"
      method="post"
      enctype="application/w-www-form-urlencoded">
    <p><label> Nom <input id=Ville name=Ville type=cityname  placeholder="ex : IUT de Fontainebleau" required></label></p>
    <p><label> Ville <input id=Ville name=Ville type=cityname  placeholder="ex : Paris" required></label></p>
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <p><label> CodePostale <input id=CodePostale name=CodePostale placeholder="ex : 93330" required></label></p>
    <button type=submit name="supprimer_etablissement">Valider</button>
</form>
</fieldset>
{else}
<fieldset>
<legend> Actions : </legend>
<form id="ajouter_etablissement" action="administration.php" method="get">
<p><input type="hidden" name="ajouter_etablissement" value="modifier"></p>
<button type=submit>Ajouter Etablissement</button>
</form>
<form id="supprimer_etablissement" value="supprimer_etablissement" action="administration.php" method="get">
<p><input type="hidden" name="supprimer_etablissement" value="modifier"></p>
<button type=submit>Supprimer Etablissement</button>
</form>
</fieldset>
{/if}
{/if}
{include file=$chemin_footer}
