<!DOCTYPE html>  
<html lang="{$langage}">  
    <head>  
        <meta charset="{$charset}" />
        <meta name="description" content="{$contenu_description}" />
        <meta name="author" content="{$nom_auteurs}">
        <link rel="stylesheet" href="{$chemin_css}" />  
        <title>{$titre_page}</title> 
    </head> 

    <body> 
        <header id="hd1">
        <object class="mascotte-logo" type="image/svg+xml" data="{$chemin_mascotte}">
            <p>Votre navigateur ne supporte pas le SVG, mettez le à jour.</p>
        </object>

        <hgroupe >
        <h1>{$contenu_description}</h1>       
        <h2>{$message_secondaire}</h2>
        </hgroupe>
        {if isset($cadre_profil)}
        <h3>
            <p>{$nom_profil} {$prenom_profil}</p>
            <photo>
            <p><img src={$photo_profil} height={$taille} width={$taille} alt='Vous' ></p>
            </photo>
            <a href="deconnexion.php">Déconnexion</a>
        </h3>
        {/if}
        <h4>{$nom_page}</h4>
        </header>
        <nav>
        <a class=nav_lien href="{$chemin_accueil}" >Accueil</a>
        <a class=nav_lien href="{$chemin_inscription}" >Inscription</a>
        <a class=nav_lien href="{$chemin_profil}" >Profil</a>
        <a class=nav_lien href="{$chemin_rechercher}" >Rechercher</a>
        <a class=nav_lien href="{$chemin_connexion}" >Connexion</a>
        {if $droit_admin =='TRUE'}
        <a class=nav_lien href="{$chemin_administration}" >Administration</a>
        {/if}
        </nav>
        <section>
