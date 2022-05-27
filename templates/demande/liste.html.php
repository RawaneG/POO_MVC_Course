<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Liste des Demandes</h4>
                <a href="/demande-add" class="btn btn-outline-success text-decoration-none color-success">Formuler une demande</a>
        </div>
            <p class="card-text">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Motif</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($demandes == null)
                    {
                        return;
                    }
                    else
                    {
                        foreach ($demande as $demande)
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['motif','date'],$demande); ?>
                        <td>
                            <a href="/demande-edit/<?=$demande->id?>" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/demande-delete/<?=$demande->id?>" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/demande-details/<?=$demande->id?>" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
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