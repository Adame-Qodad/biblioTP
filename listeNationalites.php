
 <body>
 <?php include "header.php"; ?>
 <?php  
       include "connexionPDO.php"; 

       $req=$monPdo->prepare("select * from nationalite");
       $req->setFetchMode(PDO::FETCH_OBJ);
       $req->execute();
       $lesNationalite=$req->fetchAll(); 


       ?>


  <div class="container mt-5">
      <div class="row pt-4">
        <div class="col-9"><h2>Liste des Nationalités</h2></div>
        <div class="col-3"><a href="fromAjoutNatio.php" class='btn btn-success'><i class="fas fa-plus-circle"></i>Créer une Nationalité</a></div>
   
      </div>
      <table class="table table-hover table-striped">
      <thead class="thead-dark">
          <tr class="d-flex">
          <th scope="col" class="col-md-2">Numéro</th>
          <th scope="col" class="col-md-8">Libellé</th>
          <th scope="col" class="col-md-2">Action</th>
          </tr>
      </thead>
      <tbody>
          <?php
          foreach($lesNationalite as $nationalite)
          {
              echo "<tr class='d-flex'>";
              echo "<td class='col-md-2'>$nationalite->num</td>";
              echo "<td class='col-md-8'>$nationalite->libelle</td>";
              echo "<td class='col-md-2'><a href='' class='btn btn-primary'><i class='fas fa-pen'></i></a>
                    <a href='' class='btn btn-danger'><i class='far fa-trash-alt'></i></a></td>";
              echo "</tr>";
          }
          ?>
      </table>
  </div>
</tbody>


<?php include "footer.php"; ?>


  

      
  </body>
</html>
