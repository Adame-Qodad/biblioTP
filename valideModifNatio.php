<?php include "header.php"; 

        include "connexionPDO.php"; 
        $libelle=$_POST['libelle'];
        $num=$_POST['num'];

        $req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
        $req-> bindParam(':num', $num);
        $req-> bindParam(':libelle', $libelle);
        $nb=$req->execute();
        echo '<div class="container mt-5>';
    
        echo '<div class="row mt-5">
            <div class="col pt-5">
            <div class="col mt-5">';

        if($nb == 1)
        {
            echo '<div class="alert alert-success " role="alert">
                La nationalitée a bien été modifiée
                </div>';
        }

        else 
        {
            echo '<div class="alert alert-danger " role="alert">
            La nationalitée n\'a pas été modifiée
          </div>';
        }

        ?>
        </div>
        </div>
        </div>

        <a href="listeNationalites.php" class="btn btn-primary col mt-2">Retour à la liste des nationalitées</a>




<?php include "footer.php" ?>