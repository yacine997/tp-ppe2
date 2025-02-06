
<?php include "header.php";
include "connexionPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req-> execute();
$lesNationalites=$req->fetchALL();

if(!empty($_SESSION['message'])){
    $mesMessages=$_SESSION['message'];
    foreach($mesMessages as $key=>$message){
    echo '<div class="container pt-5 mt-3">
            <div class="alert alert-'.$key.' alert-dismissible fade show" role="alert">'.$message.'          
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  </div>';
   } 
   $_SESSION['message']=[];
} 
  
?>


<div class="container mt-5">

<div class="row pt-3">
    <div class="col-9"> <h2>Liste des nationalités</h2></div>
    <div class="col-3"><a href="formNationalite.php?action=Ajouter" class='btn btn-success'><i class="f fas fa-plus-circle" ></i> Créer une nationalité</a> </div>
   
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
           <a href='formNationalite.php?action=Modifier&num=$nationalite->num' class='btn btn-primary'><i class='f fas fa-pen' ></i></a> 
           <a href='#modalSuppression' data-toggle='modal' data-message='Voulez vous supprimer cette nationalité'  data-suppression='supprimerNationalite.php?num=$nationalite->num' class='btn btn-danger'><i class='f far fa-trash-alt'></i></a> 
      </td>";  
      echo "</tr>";
    }

    ?>
    
</tbody>
</table>

</div>
<?php include "footer.php";

?>


