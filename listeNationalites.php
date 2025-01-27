
<?php include "header.php";
include "connexionPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req-> execute();
$lesNationalites=$req->fetchALL();


?>


<div class="container mt-5">

<div class="row pt-3">
    <div class="col-9"> <h2>Liste des nationalités</h2></div>
    <div class="col63">a href="" class= 'btn btn success'></a> </div>
   
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Libellé</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($lesNationalites as $nationalite){
      echo "<tr>";
      echo "<td>$nationalite->num</td>";  
      echo "<td>$nationalite->libelle</td>";
      echo "<td></td>";  
      echo "</tr>";
    }
    ?>
    
</tbody>
</table>
</div>
</main>

<?php include "footer.php";



