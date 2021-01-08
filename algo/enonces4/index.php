<?php
echo "Exercice 4.2<br>
Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !<br>
Il lira au clavier l’heure et les minutes, et il affichera l’heure qu’il sera une minute plus tard. Par exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :<br>
\"Dans une minute, il sera 21 heure(s) 33\".<br>
NB : on suppose que l'utilisateur entre une heure valide. Pas besoin donc de la vérifier.<br>
<form method=\"POST\" action=\"\">
<label for=\"hour\" >Entrer l'heure</label><br>
<input type=\"number\" name=\"hour\" ><br>
<label for=\"minute\" >Entrer la minute</label><br>
<input type=\"number\" name=\"minute\" >
<button type=\"submit\">Envoyer</button>
</form><br>";
if(!empty($_POST['hour'])&&!empty($_POST['minute']))
{
    echo "dans une minute il sera ".$_POST['hour']."h".($_POST['minute'] +1)."minute";
}
    echo "<hr>";

echo "Exercice 4.4<br>
    Un magasin de reprographie facture 0,10 E les dix premières photocopies, 0,09 E les vingt suivantes et 0,08 E au-delà.<br>
     Ecrivez un algorithme qui demande à l’utilisateur le nombre de photocopies effectuées et qui affiche la facture correspondante.<br>
    <form method=\"POST\" action=\"\">
    <label for=\"nbrcop\" >Entrer le nombre de copie</label><br>
    <input type=\"number\" name=\"nbrcop\" ><br>
    <button type=\"submit\">Envoyer</button>
    </form><br>";
    if(!empty($_POST['nbrcop'])&&is_numeric($_POST['nbrcop']))
    {

       if($_POST['nbrcop']>0&&$_POST['nbrcop']<=10)
       {
            $resufinal = $_POST['nbrcop']*0.10;
        }
        else if($_POST['nbrcop']>10&&$_POST['nbrcop']<=30)
        {
            $result1 = $_POST['nbrcop']-10;
            $result10 = 10 *0.10;
            $result30 = $result1 *0.09;
            $resufinal = $result10+$result30;
        }
        else if($_POST['nbrcop']>30)
        {
            $result1 = parseFloat($_POST['nbrcop'])-10;
            $result10 = 10 *0.10;
            $result301 = parseFloat($_POST['nbrcop'])-20;
           $result30 = $result301 *0.09;
            $resulsup1 = $_POST['nbrcop']-30;
           $resulsup = $resulsup1 *0.08;
          $resufinal = $result10+$result30+$resulsup;
        
        }
        else
        {
            echo "nous avons un souci entré correctement le nombre de copie";
        }
        echo "sa vous coûtera ".$resufinal." euro"; 
    }
    echo "<hr>";
echo "Exercice 4.5<br>
    Les habitants de Zorglub paient l’impôt selon les règles suivantes :<br>
    les hommes de plus de 20 ans paient l’impôt<br>
    les femmes paient l’impôt si elles ont entre 18 et 35 ans<br>
    les autres ne paient pas d’impôt<br>
    Le programme demandera donc l’âge et le sexe du Zorglubien, et se prononcera donc ensuite sur le fait que l’habitant est imposable.<br>
    <form method=\"POST\" action=\"\">
    <label for=\"age\" >Entrer votre âge</label><br>
    <input type=\"number\" name=\"age\" ><br>
    Vous êtres ?
    <label for=\"h\" >un homme </label>
    <input type=\"radio\" name=\"sex\" id=\"h\"value=\"Homme\">
    <label for=\"f\" >une femme </label>
    <input type=\"radio\" name=\"sex\" id=\"f\"value=\"femme\"><br>
    <button type=\"submit\">Envoyer</button>
    </form><br>";

if(!empty($_POST['sex'])&&!empty($_POST['age']))
    {
    //si c'est un homme est que sont âge est supérieur à 20 ans alors il paye
    if($_POST['sex'] =="Homme"&& $_POST['age']  > 20){
    echo "vous payez des impôts";
    }else if($_POST['sex'] =="femme"&& $_POST['age'] >= 18 && $_POST['age'] <=35){// si sont âge est compris entre 18 et 35 et c'est une femme paye pas
        echo "vous payez des impôts";
    }else{//tout les autres ne paye pas d'impôt
        echo "vous payez pas d'impôts";
    }
}
    echo "<hr>";
    echo "Exercice 4.6<br>
    Les élections législatives, en Guignolerie Septentrionale, obéissent à la règle suivante :<br>
lorsque l'un des candidats obtient plus de 50% des suffrages, il est élu dès le premier tour.<br>
en cas de deuxième tour, peuvent participer uniquement les candidats ayant obtenu au moins 12,5% des voix au premier tour.<br>
Vous devez écrire un algorithme qui permette la saisie des scores de quatre candidats au premier tour. Cet algorithme <br>
traitera ensuite le candidat numéro 1 (et uniquement lui) : il dira s'il est élu, battu, s'il se trouve en ballottage <br>
favorable (il participe au second tour en étant arrivé en tête à l'issue du premier tour) <br>
ou défavorable (il participe au second tour sans avoir été en tête au premier tour).<br>
    <form method=\"POST\" action=\"\">
    <label for=\"ca1\" >Entrer candidat N°1</label><br>
    <input type=\"number\" name=\"ca1\" ><br>
    <label for=\"ca2\" >Entrer candidat N°2</label><br>
    <input type=\"number\" name=\"ca2\" ><br>
    <label for=\"ca3\" >Entrer candidat N°3</label><br>
    <input type=\"number\" name=\"ca3\" ><br>
    <label for=\"ca4\" >Entrer candidat N°4</label><br>
    <input type=\"number\" name=\"ca4\" ><br>
    <button type=\"submit\">Envoyer</button>
    </form><br>";
    if(!empty($_POST['ca1'])&&!empty($_POST['ca2'])&&!empty($_POST['ca3'])&&!empty($_POST['ca4']))
    {
        if($_POST['ca1']>50){// si supérieur à  50% il a gagné
            echo "vous être élu";
        }else if($_POST['ca2']>50||$_POST['ca3']>50||$_POST['ca4']>50){//si l'un des candidats a plus de 50% il a perdu
            echo "vous avez perdu";
        }else if($_POST['ca1']>=12.5){//si supérieur ou égal à  12.5 c'est favorable
            echo" vous être en ballottage favorable";
        }else{//sinon défavorable
            echo" vous être en ballottage défavorable";
        }
    }

    echo "<hr>";
  
?>