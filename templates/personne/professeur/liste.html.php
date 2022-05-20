<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <h4 class="card-title">Liste des Professeurs</h4>
            <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($profs as $prof) 
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['nom_complet','grade','role'],$prof); ?>
                        <td>
                            <a href="/professeurs-edit" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/professeurs-delete" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/professeurs-details" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
                        </td>
                    </tr>
                    <?php     
                        }
                    ?>
                </tbody>
            </table>
                <a href="/professeurs-add" class="btn btn-outline-success text-decoration-none color-success">Ajouter</a>
            </p>
        </div>
    </div>