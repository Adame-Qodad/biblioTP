<body>

    <?php include "header.php"; 
    include "connexionPDO.php";
    $num=$_GET['num'];

    $req=$monPdo->prepare("select * from nationalite where num= :num");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $req-> bindParam(':num', $num);
    $req->execute();
    $laNationalite=$req->fetch(); 

    ?>
    <div class="container mt-5">
        <h2 class="pt-4 text-center">Modifier une Nationalitée</h2>
        <form action="valideModifNatio.php" method="post" class="col-md-6 offset-md-3">
            <div class="form-group">
                <label for='libelle' > Libéllé </label>
                <input type="text" class='form-control' id='libelle' placehoder='Saisir le libellé' name='libelle' value="<?php echo $laNationalite->libelle;?>">
            </div>
            <input type="hidden" id="num" name="num" value="<?php echo $laNationalite->num; ?>">
            <div class="row">
                <div class="col"><a href=listeNationalites.php class='btn btn-danger btn-block'>Revenir à la liste</a></div>
                <div class="col"><button type='submit' class='btn btn-success btn-block'> Modifier </button></div>
            </div>
        </form>
    </div>


    <?php include "footer.php"; ?>
    
</body>
