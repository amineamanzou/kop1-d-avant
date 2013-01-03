{include file=$chemin_header}
{if $erreur}
<p>{$message}</p>
{else}
<p>{$message}</p>
<p><img src={$chemin_vers_photo_uploadee} height={$taille_carre} width={$taille_carre} ></p>
{/if}
{include file=$chemin_footer}
