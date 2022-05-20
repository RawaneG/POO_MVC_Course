<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <h4 class="card-title">Liste des Étudiants</h4>
            <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($etudiants as $etudiant) 
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['nom_complet','matricule','adresse','sexe','role'],$etudiant); ?>
                        <td>
                            <a href="/Etudiant-edit" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/Etudiant-delete" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/Etudiant-details" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
                        </td>
                    </tr>
                    <?php     
                        }
                    ?>
                </tbody>
            </table>
                <a href="/Etudiant-add" class="btn btn-outline-success text-decoration-none color-success">Ajouter</a>
            </p>
        </div>
    </div>