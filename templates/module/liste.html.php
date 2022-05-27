<?php
    use Rawane\Core\HtmlProvider;
?>
<div class="card ml-5">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="card-title">Liste des Modules</h4>
                <a href="/module-add" class="btn btn-outline-success text-decoration-none color-success">Ajouter un module</a>
        </div>
            <p class="card-text">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Module</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($modules == null)
                    {
                        return;
                    }
                    else
                    {
                        foreach ($modules as $module)
                        {
                    ?>
                    <tr>
                        <?= HtmlProvider::td(['nomModule'],$module); ?>
                        <td>
                            <a href="/module-edit/<?=$module->id?>" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/module-delete/<?=$module->id?>" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
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