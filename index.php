<link rel="stylesheet" href="public/assets/css/style.css">

<p class="titre">Exo1. Créer une variable name et l'initialiser avec la valeur de votre choix.  Afficher son contenu. </p>
<p class="exo"><?php
$name = 'bob';
echo " $name ";
?></p>


<p class="titre"> Exo2. Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  Afficher leur contenu. </p>

<p class="exo"<?php
$lastname = 'bob';
$firstname = 'vance';
$age = 28;
echo "> $lastname, $firstname, $age "
?></p>



<p class="titre">Exo3. Créer une variable km. L'initialiser à 1. Afficher son contenu.  
Changer sa valeur par 3. Afficher son contenu.  
Changer sa valeur par 125. Afficher son contenu. </p>

<p class="exo"><?php
$km = 1;
echo " $km ";
$km = 3;
echo "$km ";
$km = 125;
echo "$km "
?></p>


<p class="titre">Exo4. Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.  
Les afficher. </p>

<?php
$phrase = 'bonjour canard';
$number = 2;
$float = 1.2;
$boy = true;
?>
<p class="exo"><?php echo "$phrase"  ?></p>
<p class="exo"><?php echo "$number" ?></p>
<p class="exo"><?php echo "$float" ?></p>
<p class="exo"><?php echo "$boy" ?></p>



<p class="titre">Exo5. Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.  
Donner une valeur à cette variable et l'afficher. </p>

<p class="exo"><?php 
$inte ;
echo "$inte";
$inte = 2;
echo "$inte";
?></p>

<p class="titre">Exo6. Créer une variable name et l'initialiser avec la valeur de votre choix.  
Afficher : Bonjour + name + , comment vas tu ?. </p>

<p class="exo"><?php 
$name = 'Enzo le bg';
echo "Bonjour  $name ,comment vas tu ?";
?></p>

<p class="titre">Exo7.Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  
Afficher : Bonjour + lastname + firstname + , tu as + age + ans.</p>

<p class="exo"><?php 
$lastname = "canare";
$firstname = "tourond";
$age = 28;
echo "Bonjour $lastname $firstname, tu as $age ans"
?></p>

<p class="titre">Exo8.Créer 3 variables.  
Dans la première mettre le résultat de l'opération 3 + 4.  
Dans la deuxième mettre le résultat de l'opération 5 * 20.  
Dans la troisième mettre le résultat de l'opération 45 / 5.  
Afficher le contenu des variables.</p>

<p class="exo"><?php 
$resultatcalc1 = 3+4;
$resultatcalc2 = 5*20;
$resultatcalc3 = 45/5;
echo "3+4 = $resultatcalc1 , 5*20 = $resultatcalc2 et enfin pour finir 45/5 = $resultatcalc3";
?></p>