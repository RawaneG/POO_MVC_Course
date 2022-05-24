<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Liste des Classes</h4>
                <a href="/classe-add" class="btn btn-outline-success text-decoration-none color-success">Ajouter une Classe</a>
        </div>
            <p class="card-text">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Libellé</th>
                    <th scope="col">Filière</th>
                    <th scope="col">Niveau</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($classes == null)
                    {
                        return;
                    }
                    else
                    {
                        foreach ($classes as $classe) 
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['libelle','filiere','niveau'],$classe); ?>
                        <td>
                            <a href="/classe-edit/<?=$classe->id?>" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/classe-delete/<?=$classe->id?>" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/classe-details/<?=$classe->id?>" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
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