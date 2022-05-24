<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Liste des Attachés</h4>
                <a href="/" class="btn btn-outline-success text-decoration-none color-success">Ajouter un Attaché</a>
            </div>
            <p class="card-text">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Rôle</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($acs == null)
                    {
                        return;
                    }
                    else
                    {
                        foreach ($acs as $ac) 
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['nom_complet','role'],$ac); ?>
                        <td>
                            <a href="/edit" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/delete" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/details" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
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