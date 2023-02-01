
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Jumbotron Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">

    


    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">
    <link rel="stylesheet" href="style.css">



<link rel="apple-touch-icon" href="/docs/4.6/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/22107901ed.css" crossorigin="anonymous">
  </head>
 <body>

 <?php include "header.php"; 
       include "connexionPDO.php"; 

       $req=$monPdo->prepare("select * from nationalite");
       $req->setFetchMode(PDO::FETCH_OBJ);
       $req->execute();
       $lesNationalite=$req->fetchAll(); 


       ?>


  <div class="container mt-5">
      <div class="row pt-4">
        <div class="col-9"><h2>Liste des Nationalités</h2></div>
        <div class="col-3"><a href="" class='btn btn-success'><i class="fas fa-plus-circle"></i>Créer une Nationalité</a></div>
   
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
