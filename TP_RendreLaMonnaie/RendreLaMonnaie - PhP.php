<!-- Section HTML pour la saisie des données -->

<h3><u> Calcul de rendu de la monnaie </u></h3>

<form action="" method="post">    <!--Création du formulaire-->    
<label for="prixObjet">Saisir le prix de l'objet:</label>            <!--Texte/légende informant l'utilisateur sur la donnée à rentrer dans ce champ-->
<input type="number" step="0.01" name="prix"><br><br>        <!--L'utilisateur saisie le prix de l'objet. Marge de 0.01 pour ne pas mettre de valeurs au-delà du centième-->
<label for="donClient">Saisir le montant donne:</label>            
<input type="number" step="0.01" name="donne"><br><br>        <!--Le montant donné par l'acheteur est renseigné ici-->
<input type="submit" value="Valider">            <!--Un bouton pour valider les valeurs. Appuyer sur la touche Entrée fonctionne aussi-->
<p>(valider seulement lorsque les deux champs sont remplis)<br><br></p>
</form>

<!-- Section PhP pour le calcul du rendu -->

<?php
    
    //On importe les valeurs entrées par l'utilisateur
    $prix = $_POST['prix'];            
    $don = $_POST['donne'];
    $rendu = $don - $prix;
    
    $rendu = round($rendu, 2);             //Méthode round pour arrondir au centième près (2 en paramètre)
    $eurosR = intval($rendu);                //EurosRendus, méthode permettant de passer du float au integer 
    $centimes = round($rendu - $eurosR, 2);        //Les centimes non-arrondis (avec plusieurs décimales; survient dans certains cas)
    $centimesR = intval($centimes * 100);        //CentimesRendus, afin de faciliter le calcul du rendu des centimes
    
    echo "<h3><u> Montant du rendu </u></h3>";
    echo "Prix de l'objet: ". $prix. "E". "<br>";
    echo "Montant donne par l'acheteur: ". $don. "E". "<br><br>";
    echo "<strong>Rendu final:</strong> ". $rendu. "E". "<br><br>";
    echo "Euros (E) a rendre: ". $eurosR. "E" ."<br>";
    echo "Centimes (c) a rendre: ". $centimesR. "c". "<br><br>";
    
    //Les variables contenant la quantité de billets et de centimes qui seront rendus à l'acheteur
    $b50 = 0;
    $b20 = 0;
    $b10 = 0;
    $b5 = 0;
    $p2 = 0;
    $p1 = 0;
    $c50 = 0;
    $c20 = 0;
    $c10 = 0;
    $c5 = 0;
    $c2 = 0;
    $c1 = 0;
    
    //Calcul du rendu. Boucle 'Tant que' pour réduire le rendu selon les valeurs des billets
    while ($eurosR >= 50) {
        $eurosR = $eurosR - 50;
        $b50 = $b50 + 1;
    }
    while ($eurosR >= 20) {
        $eurosR = $eurosR - 20;
        $b20 = $b20 + 1;
    }
    while ($eurosR >= 10){
        $eurosR = $eurosR - 10;
        $b10 = $b10 + 1;
    }
    while ($eurosR >= 5){
        $eurosR = $eurosR - 5;
        $b5 = $b5 + 1;
    }
    while ($eurosR >= 2){
        $eurosR = $eurosR - 2;
        $p2 = $p2 + 1;
    }
    while ($eurosR >= 1){
        $eurosR = $eurosR - 1;
        $p1 = $p1 + 1;
    }
    //Lorsque le montant en euros ne peut plus être réduit, le programme passe ensuite aux centimes
    while ($centimesR >= 50){
        $centimesR = $centimesR - 50;
        $c50 = $c50 + 1;
    }
    while ($centimesR >= 20){
        $centimesR = $centimesR - 20;
        $c20 = $c20 + 1;
    }
    while ($centimesR >= 10){
        $centimesR = $centimesR - 10;
        $c10 = $c10 + 1;
    }
    while ($centimesR >= 5){
        $centimesR = $centimesR - 5;
        $c5 = $c5 + 1;
    }
    while ($centimesR >= 2){
        $centimesR = $centimesR - 2;
        $c2 = $c2 + 1;
    }
    while ($centimesR >= 1){
        $centimesR = $centimesR - 1;
        $c1 = $c1 + 1;
    }
    
    //Résultats du rendu
    echo "<h3><u>". "Resultats du rendu, quantite de billets/pieces". "</u><br></h3>";
    echo "Billets de 50E: " .$b50. "<br>";
    echo "Billets de 20E: " .$b20. "<br>";
    echo "Billets de 10E: " .$b10. "<br>";
    echo "Billets de 5E: " .$b5. "<br>";
    echo "Pieces de 2E: " .$p2. "<br>";
    echo "Pieces de 1E: " .$p1. "<br><br>";
    echo "Centimes 50c: " .$c50. "<br>";
    echo "Centimes 20c: " .$c20. "<br>";
    echo "Centimes 10c: " .$c10. "<br>";
    echo "Centimes 5c: " .$c5. "<br>";
    echo "Centimes 2c: " .$c2. "<br>";
    echo "Centimes 1c: " .$c1. "<br>";
?>