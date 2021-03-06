<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Liste des Professeurs</h4>
                <a href="/professeurs-add" class="btn btn-outline-success text-decoration-none color-success">Ajouter un Professeur</a>
            </div>
            <p class="card-text">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($profs == null)
                    {
                        return;
                    }
                    else
                    {
                        foreach ($profs as $prof)
                        {

                    ?>
                    <tr>
                        <?= HtmlProvider::td(['nom_complet','grade'],$prof); ?>
                        <td>
                            <a href="/professeurs-edit/<?=$prof->id; ?>" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/professeurs-delete/<?=$prof->id?>" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/professeurs-details/<?=$prof->id?>" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
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