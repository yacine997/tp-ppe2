
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
    <div class="col-3"><a href="formAjoutnationalite.php" class='btn btn-success'><i class="f fas fa-plus-circle" ></i> Créer une nationalité</a> </div>
   
</div>


<table class="table table-hover">
  <thead>
    <tr class="d-flex">
      <th scope="col"class="col-md-2">Numéro</th>
      <th scope="col"class="col-md-8">Libellé</th>
      <th scope="col"class="col-md-2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($lesNationalites as $nationalite){
      echo "<tr class='d-flex'>";
      echo "<td class='col-md-2'>$nationalite->num</td>";  
      echo "<td class='col-md-8'>$nationalite->libelle</td>";
      echo "<td class='col-md-2'>
           <a href='formModifNationalite.php?num=$nationalite->num' class='btn btn-primary'><i class='f fas fa-pen' ></i></a> 
           <a href='' class='btn btn-danger'><i class='f far fa-trash-alt'></i></a> 
      </td>";  
     
      echo "</tr>";
    }
    ?>
    
</tbody>
</table>
</div>
</main>

<?php include "footer.php";



