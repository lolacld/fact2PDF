<?php

require_once('/wamp64/www/fact2PDF/global/header.html');
require_once('/wamp64/www/fact2PDF/model/clientModel.php');
require_once('/wamp64/www/fact2PDF/model/database.php');


// instanciation 
$client = new Client();

$stmt = $client->getAllClients();

$itemCount = $stmt->fetchAll(PDO::FETCH_ASSOC);

  ?>

<body>
 <h1>Liste des clients</h1>
 <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>nom</th>
       <th>Adresse email</th>
       <th>Télphone</th>
       <th>Adresse</th>
     </tr>
   </thead>

   <?php foreach($itemCount as $client){
    ?>
    <tr>
      <td><?= $client['id'] ?></td>
      <td><?= $client['nom'] ?></td>
      <td><?= $client['email'] ?></td>
      <td><?= $client['telephone'] ?></td>
      <td><?= $client['adresse'] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>

