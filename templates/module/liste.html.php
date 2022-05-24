<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Liste des Modules</h4>
                <a href="/Etudiant-add" class="btn btn-outline-success text-decoration-none color-success">Ajouter un module</a>
        </div>
            <p class="card-text">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Module</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($etudiants == null)
                    {
                        return;
                    }
                    else
                    {
                        foreach ($etudiants as $etudiant) 
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['nomModule','matricule','adresse','sexe','role'],$etudiant); ?>
                        <td>
                            <a href="/Etudiant-edit/<?=$etudiant->id?>" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/Etudiant-delete/<?=$etudiant->id?>" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/Etudiant-details/<?=$etudiant->id?>" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
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