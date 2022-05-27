<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Liste des Inscrits</h4>
                <a href="/inscription-add" class="btn btn-outline-success text-decoration-none color-success">Inscrire un Étudiant</a>
        </div>
            <p class="card-text">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Année Scolaire</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($inscriptions == null)
                    {
                        return;
                    }
                    else
                    {
                        foreach ($inscriptions as $inscription)
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['nom_complet','matricule','adresse','sexe','libelle','libelle_annee'],$inscription); ?>
                        <td>
                            <a href="/inscription-edit/<?=$inscription->id?>" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/inscription-delete/<?=$inscription->id?>" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/inscription-details/<?=$inscription->id?>" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            </p>
        </div>
    </div>