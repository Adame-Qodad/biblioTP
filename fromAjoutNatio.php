<body>

    <?php include "header.php"; ?>
    <div class="container mt-5">
        <h2 class="pt-4 text-center">Ajouter une Nationalitée</h2>
        <form action="valideAjoutNationalite.php" method="post" class="col-md-6 offset-md-3">
            <div class="form-group">
                <label for='libelle' > Libéllé </label>
                <input type="text" class='form-control' id='libelle' placehoder='Saisir le libellé' name='libelle'>
            </div>
            <div class="row">
                <div class="col"><a href=listeNationalites.php class='btn btn-danger btn-block'>Revenir à la liste</a></div>
                <div class="col"><button type='submit' class='btn btn-success btn-block'> Ajouter </button></div>
            </div>
        </form>
    </div>


    <?php include "footer.php"; ?>
    
</body>

