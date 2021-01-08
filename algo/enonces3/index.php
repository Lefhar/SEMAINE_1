<?php
echo "Exercice 3.1<br>
Ecrire un algorithme qui demande un nombre à l’utilisateur, et l’informe ensuite <br>
si ce nombre est positif ou négatif (on laisse de côté le cas où le nombre vaut zéro).<br>
<form method=\"POST\" action=\"\">
<label for=\"nombre\" >Entrer un nombre</label><br>
<input type=\"number\" name=\"nombre\" >
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['nombre']))
{
    if($_POST['nombre']< 0)
    {
        echo $_POST['nombre']." est négatif";
    }elseif($_POST['nombre']> 0)
    {
        echo $_POST['nombre']." est Positif";
}
}
    echo "<hr>";

echo "Exercice 3.2<br>
    Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur produit est négatif ou positif <br>
    (on laisse de côté le cas où le produit est nul). Attention toutefois : on ne doit pas calculer le produit des deux nombres.<br>
    entrez deux nombre<br>
<form method=\"POST\" action=\"\">
<label for=\"nombre1\" >Entrer un premier nombre</label><br>
<input type=\"number\" name=\"nombre1\" ><br>
<label for=\"nombre2\" >Entrer un second nombre</label><br>
<input type=\"number\" name=\"nombre2\" ><br>
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['nombre1'])&&!empty($_POST['nombre2']))
{

    if ($_POST['nombre1'] < 0 && $_POST['nombre2'] <0){
        echo "le produit de ".$_POST['nombre1']." ".$_POST['nombre2']." est négatif";
    }else if($_POST['nombre1']>0 ||$_POST['nombre2']>0){
        echo "le produit de ".$_POST['nombre1']." ".$_POST['nombre2']." est Positif";
    }else{
        echo "vous n'avez pas correctement entré les deux valeur demandé";

    }
}
echo "<hr>";
echo "Exercice 3.3<br>
Ecrire un algorithme qui demande trois noms à l’utilisateur <br>
et l’informe ensuite s’ils sont rangés ou non dans l’ordre alphabétique.<br>
<form method=\"POST\" action=\"\">
<label for=\"prenom1\" >Entrer un premier prenom</label><br>
<input type=\"text\" name=\"prenom1\" ><br>
<label for=\"prenom2\" >Entrer un second prenom</label><br>
<input type=\"text\" name=\"prenom2\" ><br>
<label for=\"prenom3\" >Entrer un troisiéme prenom</label><br>
<input type=\"text\" name=\"prenom3\" ><br>
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['prenom1'])&&!empty($_POST['prenom2'])&&!empty($_POST['prenom3']))
{

    if ($_POST['prenom1'] < $_POST['prenom2'] &&$_POST['prenom2'] < $_POST['prenom3']){
        echo "Ces noms sont classés alphabétiquement";
    }else{
        echo "Ces noms ne sont pas classés";

    }
}
echo "<hr>";
echo "Exercice 3.4<br>
Ecrire un algorithme qui demande un nombre à l’utilisateur,<br>
 et l’informe ensuite si ce nombre est positif ou négatif (on inclut cette fois le traitement du cas où le nombre vaut zéro).<br>
 <form method=\"POST\" action=\"\">
 <label for=\"nombre\" >Entrer un nombre</label><br>
 <input type=\"number\" name=\"nombre\" >
 <button type=\"submit\">Envoyer</button>
 </form><br>";
 if(!empty($_POST['nombre']))
{
    if($_POST['nombre']< 0)
    {
        echo $_POST['nombre']." est négatif";
    }elseif($_POST['nombre']> 0)
    {
        echo $_POST['nombre']." est Positif";
    }else{
        echo $_POST['nombre']." est Neutre";
    
}
}

echo "<hr>";
echo "Exercice 3.5<br>
Ecrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite <br>
si le produit est négatif ou positif (on inclut cette fois le traitement du cas où le produit peut être nul). <br>
Attention toutefois, on ne doit pas calculer le produit !<br>
<form method=\"POST\" action=\"\">
<label for=\"nombre1\" >Entrer un premier nombre</label><br>
<input type=\"number\" name=\"nombre1\" ><br>
<label for=\"nombre2\" >Entrer un second nombre</label><br>
<input type=\"number\" name=\"nombre2\" ><br>
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['nombre1'])&&!empty($_POST['nombre2']))
{

    if ($_POST['nombre1'] < 0 && $_POST['nombre2'] <0){
        echo "le produit de ".$_POST['nombre1']." ".$_POST['nombre2']." est négatif";
    }else if($_POST['nombre1']>0 ||$_POST['nombre2']>0){
        echo "le produit de ".$_POST['nombre1']." ".$_POST['nombre2']." est Positif";
    }else if($_POST['nombre1']==0 ||$_POST['nombre2']==0){
        echo "le produit de ".$_POST['nombre1']." ".$_POST['nombre2']." est Neutre";
    }else{
        echo "vous n'avez pas correctement entré les deux valeur demandé";

    }
}
echo "<hr>";

echo "Exercice 3.6<br>
Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. Ensuite, il l’informe de sa catégorie :<br>
    Poussin de 6 à 7 ans<br>
    Pupille de 8 à 9 ans<br>
    Minime de 10 à 11 ans<br>
    Cadet après 12 ans<br>
<form method=\"POST\" action=\"\">
<label for=\"age\" >Entrer un votre âge</label><br>
<input type=\"number\" name=\"age\" ><br>
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['age']))
{
if($_POST['age']>=6&&$_POST['age']<=7)
{
    echo "vous êtres poussin";
}elseif($_POST['age']>=8&&$_POST['age']<=9)
{
    echo "vous êtres Pupille";
}elseif($_POST['age']>=10&&$_POST['age']<=11)
{
    echo "vous êtres Minime";
}elseif($_POST['age']>=12)
{
    echo "vous êtres Cadet";
}else{
    echo "vous êtres rien";
}
}
echo "<hr>";
    ?>