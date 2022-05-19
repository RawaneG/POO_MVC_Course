<div class="card ml-5">
        <div class="card-body">
            <h4 class="card-title">Liste des AC</h4>
            <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($acs as $ac) 
                        {
                    ?>
                    <tr>
                        <td>
                            <?=
                                $ac->nom_complet;
                            ?>
                        </td>
                        <td>
                            <a href="/edit" class="btn btn-outline-warning text-decoration-none color-warning">Modifier</a>
                            <a href="/delete" class="btn btn-outline-danger text-decoration-none color-danger">Supprimer</a>
                            <a href="/details" class="btn btn-outline-primary text-decoration-none color-primary">Détails</a>
                        </td>
                    </tr>
                    <?php     
                        }
                    ?>
                </tbody>
            </table>
                <a href="/" class="btn btn-outline-success text-decoration-none color-success">Ajouter</a>
            </p>
        </div>
    </div>