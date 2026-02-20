<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>





<?php
require_once('header.html');
require_once("fonctions.php");
$lesContacts = getLesContacts();
?>

<div class="container my-5">
  <a href="ajouter.html"
        class="btn btn-success float-end" >
        + Ajouter contact
      </a>
<table class="table table-hover">
<th>id</th>
<th>nom</th>
<th>prenom</th>
<th>date-naissance</th>
<th>date-embauche</th>
<th>salaire</th>
<th>service</th>
<th>update</th>
<th>delete</th>
<?php foreach ($lesContacts as $leContact): ?>
<tr>
<td><?= htmlspecialchars( $leContact['id']); ?></td>
<td><?= htmlspecialchars( $leContact['nom']); ?></td>
<td><?= htmlspecialchars($leContact['prenom']); ?></td>
<td><?= htmlspecialchars( $leContact['date_naissance']); ?></td>
<td><?= htmlspecialchars( $leContact['date_embauche']); ?></td>
<td><?= htmlspecialchars( $leContact['salaire']); ?></td>
<td><?= htmlspecialchars( $leContact['service']); ?></td>
<td>
      <button type="button" class="btn btn-primary btn-sm mb-2"><i class="bi bi-pen"></i> 
        <a href="updateform.php<?= $leContact['id']; ?>"
           class="btn btn-primary" >
          Update
        </a>
      </button>
    </td>
<td>
        <button type="button" class="btn btn-danger btn-sm mb-2"><i class="bi bi-trash"></i> 
        <a href="delete.php?id=<?= $leContact['id']; ?>"
           class="btn btn-danger" 
           onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contact ?');">
            Supprimer
        </a>
      </button>
    </td>
</tr>
<?php endforeach; ?>
</table>
</div>
<?php
require_once('footer.html');
?>






</body>
</html>