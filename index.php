<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Part 4 PHP</title>
</head>
<body>
<h1>Exercises Php Part 4</h1>
    <h2>Ex 1</h2>
    <?php
    $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" );
    function displayMarch($tab){
        echo $tab [3];
        return ;
    }
    displayMarch($months);
    ?>
     <h2>Ex 2</h2>
     <?php
    $languages = array(
        1=>  "Java",
        2=> "Python", 
        3=> "C#", 
        4=> "JavaScript",
        5=> "Pascal",
    );

        foreach ($languages as $value){
        echo ' '.$value;
        }

    ?>
     <h2>Ex 3</h2>
     <?php
    $languages = array(
      1=>  "Java",
       2=> "Python", 
        3=> "C#", 
        4=> "JavaScript",
        5=> "Pascal",
    );
        echo $languages[3];
        

    ?>
     <h2>Ex 4</h2>
     <?php
$languages=array(
    1=>  "Java",
     2=> "Python", 
      3=> "C#", 
      4=> "JavaScript",
      5=> "Pascal",
  );
array_push($languages,"Golang");
echo ($languages[6]);//put the key not the index
?> 
     <h2>Ex 5</h2>
<?php
$departements = array(
   
    1 => "Ain - Bourg-en-bresse",
    2 => "Aisne - Laon",
    3 =>"Allier - Moulins",
    4 => "Alpes-de-Haute-Provence - Digne-les-bains",
    5 => "Hautes-alpes - Gap",
    6 =>"Alpes-maritimes - Nice",
    7 => "Ardèche - Privas",
    8 => "Ardennes - Charleville-mézières",
    9 =>"Ariège - Foix",
    10 =>"Aube - Troyes",
    11 =>"Aude - Carcassonne",
    12 =>"Aveyron - Rodez",
    13 =>"Bouches-du-Rhône - Marseille",
    14 => "Calvados - Caen",
    15 => "Cantal - Aurillac",
    16 =>"Charente - Angoulême",
    17 => "Charente-maritime - La rochelle",
    18 =>"Cher - Bourges",
    19 =>"Corrèze - Tulle",
    21 =>"Côte-dOr - Dijon",
    22 =>"Côtes-dArmor - Saint-brieuc",
    23 =>"Creuse - Guéret",
    24 => "Dordogne - Périgueux",
    25 => "Doubs - Besançon",
    26 => "Drôme - Valence",
    27 => "Eure - Évreux",
    28 => "Eure-et-loir - Chartres",
    29 => "Finistère - Quimper",
    30 => "Gard - Nîmes",
    31 => "Haute-garonne - Toulouse",
    32 => "Gers - Auch",
    33 => "Gironde - Bordeaux",
    34 => "Hérault - Montpellier",
    35 => "Ille-et-vilaine - Rennes",
    36 => "Indre - Châteauroux",
    37 => "Indre-et-loire - Tours",
    38 => "Isère - Grenoble",
    39 => "Jura - Lons-le-saunier",
    40 => "Landes - Mont-de-marsan",
    41 =>"Loir-et-cher - Blois",
    42 =>"Loire - Saint-étienne",
    43 =>"Haute-loire - Le puy-en-velay",
    44 =>"Loire-atlantique - Nantes",
    45 =>"Loiret - Orléans",
    46 =>"Lot - Cahors",
    47 =>"Lot-et-garonne - Agen",
    48 =>"Lozère - Mende",
    49 =>"Maine-et-loire - Angers",
    50 =>"Manche - Saint-lô",
    51 =>"Marne - Châlons-en-champagne",
    52 =>"Haute-marne - Chaumont",
    53 =>"Mayenne - Laval",
    54 =>"Meurthe-et-moselle - Nancy",
    55 =>"Meuse - Bar-le-duc",
    56 =>"Morbihan - Vannes",
    57 =>"Moselle - Metz",
    58 =>"Nièvre - Nevers",
    59 =>"Nord - Lille",
    60 =>"Oise - Beauvais",
    61 =>"Orne - Alençon",
    62 =>"Pas-de-calais - Arras",
    63 =>"Puy-de-dôme - Clermont-ferrand",
    64 =>"Pyrénées-atlantiques - Pau",
    65 =>"Hautes-Pyrénées - Tarbes",
    66 =>"Pyrénées-orientales - Perpignan",
    67 =>"Bas-rhin - Strasbourg",
    68 =>"Haut-rhin - Colmar",
    69 =>"Rhône - Lyon",
    70 =>"Haute-saône - Vesoul",
    71 =>"Saône-et-loire - Mâcon",
    72 =>"Sarthe - Le mans",
    73 =>"Savoie - Chambéry",
    74 =>"Haute-savoie - Annecy",
    75 =>"Paris - Paris",
    76 =>"Seine-maritime - Rouen",
    77 =>"Seine-et-marne - Melun",
    78 =>"Yvelines - Versailles",
    79 =>"Deux-sèvres - Niort",
    80 =>"Somme - Amiens",
    81 =>"Tarn - Albi",
    82 =>"Tarn-et-Garonne - Montauban",
    83 =>"Vars - Toulon",
    84 =>"Vaucluse - Avignon",
    85 =>"Vendée - La roche-sur-yon",
    86 =>"Vienne - Poitiers",
    87 =>"Haute-vienne - Limoges",
    88 =>"Vosges - Épinal",
    89 =>"Yonne - Auxerre",
    90 =>"Territoire de belfort - Belfort",
    91 =>"Essonne - Évry",
    92 =>"Hauts-de-seine - Nanterre",
    93 =>"Seine-Saint-Denis - Bobigny",
    94 =>"Val-de-marne - Créteil",
    95 =>"Val-dOise - Cergy Pontoise",
    971 => "Guadeloupe - Basse-terre",
    972 => "Martinique - Fort-de-france",
    973 => "Guyane - Cayenne",
    974 => "La réunion - Saint-denis",
    976 => "Mayotte - Mamoudzou",
);
foreach ($departements as $key => $value) {
    echo $key. ' '.' '.$value."<br>";
  }

?>




</body>
</html>