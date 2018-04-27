<!DOCTYPE HTML>
<html lang="">
<head>
    <meta charset="UTF-8">
    <title>exo php</title>
	<link rel="stylesheet" type="text/css" href="">
	<style>
        ul {
            border: 3px solid black;
            list-style: none;
        }
    </style>
</head>
    
<body>

    <?php
       
     $livre1 = array(
 
      'nom' => 'le livre A', 
      'prix' => 20, 
      'note' => '3/5', 
      'prime' => true
  );
    
    $livre2 = array(
 
      'nom' => 'le livre B', 
      'prix' => 15, 
      'note' => '5/5', 
      'prime' => false
  );
    
    $livre3 = array(
 
      'nom' => 'le livre C', 
      'prix' => 20, 
      'note' => '2/5', 
      'prime' => true
  );
    
    $livre4 = array(
 
      'nom' => 'le livre D', 
      'prix' => 10, 
      'note' => '4/5', 
      'prime' => true
  );
    
    $livre5 = array(
 
      'nom' => 'le livre E', 
      'prix' => 19, 
      'note' => '2/5', 
      'prime' => false 
  );
    
    $livre6 = array(
 
      'nom' => 'le livre F', 
      'prix' => 20, 
      'note' => '3/5', 
      'prime' => true
  );
    
    $livre7 = array(
 
      'nom' => 'le livre G', 
      'prix' => 15, 
      'note' => '5/5', 
      'prime' => false
  );
    
    $livre8 = array(
 
      'nom' => 'le livre H', 
      'prix' => 20, 
      'note' => '2/5', 
      'prime' => true
  );
    
    $livre9 = array(
 
      'nom' => 'le livre I', 
      'prix' => 10, 
      'note' => '4/5', 
      'prime' => true
  );
    
    $livre10 = array(
 
      'nom' => 'le livre G', 
      'prix' => 19, 
      'note' => '2/5', 
      'prime' => false 
  );
    
    $pavet = array($livre1, $livre2, $livre3, $livre4, $livre5, $livre6, $livre7, $livre8, $livre9, $livre10);
        
        foreach ($pavet as $livres){
            if ($livres['prime']== true){
                echo '<ul><li>'.$livres['nom'].'</li><li>'.$livres['prix'].'€ </li><li>'.$livres['note'].'</li><li>prime</li></ul>';
            }
            else { echo '<ul><li>'.$livres['nom'].'</li><li>'.$livres['prix'].'€ </li><li>'.$livres['note'].'</li><li> pas prime</li></ul>';
                  }
        }
  
    
 /* $livre0 = array (
  
         array('Hamon',20,'3/5',true),
         array('Hamon',15,'5/5',false),
         array('Hamon',20,'2/5',true),
         array('Hamon',10,'4/5',true),
         array('Hamon',19,'2/5',false),
         array('Hamon',20,'3/5',true),
         array('Hamon',15,'5/5',false),
         array('Hamon',20,'2/5',true),
         array('Hamon',10,'4/5',true),
         array('Hamon',19,'2/5',false),
  
  
  ) ; */
    ?>
    
</body>
</html>
