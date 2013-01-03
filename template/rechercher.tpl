{include file=$chemin_header}
{if $niveau_formulaire == 'TRUE'}
<fieldset>
<legend> Action : Niveau </legend>
<form action="{$chemin_rechercher}"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Niveau <input id=Niveau name=Niveau placeholder="ex : DUT" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
{elseif $departement_formulaire == 'TRUE'}
<fieldset>
<legend> Action : Departement </legend>
<form action="{$chemin_rechercher}"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Departement <input id=Departement name=Departement placeholder="ex : Seine-St-Denis" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
{elseif $ville_formulaire == 'TRUE'}
<fieldset>
<legend> Action : Ville </legend>
<form action="{$chemin_rechercher}"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Ville <input id=Ville name=Ville placeholder="ex : Ville" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
{elseif $etablissement_formulaire == 'TRUE'}
<fieldset>
<legend> Action : Etablissement </legend>
<form action="{$chemin_rechercher}"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Etablissement <input id=Etablissement name=Etablissement placeholder="ex : Iut De Fontainebleau" required></label></p>
    <button type=submit> Valider  </button>
</form>
</fieldset>
{elseif $date_formulaire == 'TRUE'}
<fieldset>
<legend> Action : Fourchette de date </legend>
<form action="{$chemin_rechercher}"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Date Début <input id=Debut name=Debut placeholder="ex : 01-01-2000" required></label></p>
    <p><label> Date Fin <input id=Fin name=Fin placeholder="ex : 30-06-2012" required></label></p>
    <button type=submit name="Date"> Valider </button>
</form>
</fieldset>
{elseif $affichage_resultat_formulaire == 'TRUE'}
<fieldset>
<legend> Résultat de la recherche </legend>
<ul>
{foreach from=$resultat_requete item=champs}
<li>{$champs}</li>
{/foreach}
</ul>
<form action="{$chemin_rechercher}"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <button type=submit name="Resultat"> Faire une autre recherche </button>
</form>
</fieldset>
{else}
<fieldset>
<legend> Action : Pays </legend>
<form action="{$chemin_rechercher}"
      method="get"
      enctype="application/w-www-form-urlencoded">
    <p><label> Pays <input id=Pays name=Pays placeholder="ex : France" required></label></p>
    <button type=submit> Valider </button>
</form>
</fieldset>
{/if}
{include file=$chemin_footer}
