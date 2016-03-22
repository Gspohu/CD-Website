<script type="text/javascript">
var id="";
var Hidshw_Connexion="Show_Connexion";
function change_class_Connexion()
{
var id = "Connexion_window";
var clas = document.getElementById("Connexion_window"); 
        if(clas.className=="Hidden_Connexion")
        {
                clas.className= "Show_Connexion";
        }
        else if(clas.className=="Show_Connexion")
        {
                clas.className= "Hidden_Connexion";
        }
}
</script>
<div id="Nav">
        <div class="Accueil">
                <dt><a href="index.php"><img src="images/logo.png" width="170" height="41.55" alt="Accueil" /></a></dt>
        </div>
        <dl>
                <dt><a href="produits_Cairn.php">NOS PRODUITS</a></dt>
        </dl>
        <dl>
                <dt><a href="forum.php">FORUM</a></dt>
        </dl>
        <dl>
                <dt><a href="gitware.php">GITWARE</a></dt>
        </dl>
        <dl>
        <dt><a onclick='change_class_Connexion();'><?php if( isset($_SESSION['Pseudo']) ){echo $_SESSION['Pseudo'];}else{echo "CONNEXION";}?></a></dt>
        </dl>
</div>
<?php if( isset($_SESSION['Pseudo']) )
{
echo'<div class="Hidden_Connexion" id="Connexion_window">
        <p><a href="panier.php">Mon panier </a></p>
        <p><a href="vie_privee.php">Gestion de la vie privée</a></p>
        <p><a href="profile.php">Mon compte</a></p>
        <p><a href="profile.php">Mes Commandes</a></p>
        <p><a href="profile.php">S.A.V</a></p></br>
        <a href="controller/logout.php"><input class="Bouton_submit_deco" value="Déconnexion"/></a></br>
</div>';
}
else
{
echo '<div class="Hidden_Connexion" id="Connexion_window">
<form method="post" >
IDENTIFIANT <p><label for="Login"></label><input class="form_inscrip" type="text" name="co_login" id="Login" /><br /></p>
MOT DE PASSE <p><label for="Mot de passe"></label><input class="form_inscrip" type="password" name="co_password" id="Mot de passe" /><br />
        <a href="index.php"><input class="Bouton_submit" type="submit" value="Envoyer"  /></a></p></br>
        <p><a href="mdp_oublie.php">Mot de passe oublié ?</a></p>
        <p><a href="inscription.php">Pas encore inscrit ?</a></p>
</form>
</div>';
}
