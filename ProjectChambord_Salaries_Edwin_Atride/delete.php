
    <?php
    $id = $_GET['id'];

	  $servername = 'localhost';
      $username = 'sio';
      $password = 'sio';
      $dbname = "chambord";
            
      try{
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo 'Connexion réussie';
      }
            
    catch(PDOException $e){
         echo "Erreur : " . $e->getMessage();
    }

    try { 
      $sql = "delete FROM salaries where id=$id";
      $conn->exec($sql);
     header('Location: listeSalaries.php');
    }
                  
   catch(PDOException $e){
         echo "Erreur : " . $e->getMessage();
     }
  ?>
