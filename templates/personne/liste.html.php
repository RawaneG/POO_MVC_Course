<div class="card ml-5">
        <div class="card-body">
            <h4 class="card-title">Liste des Utilisateurs</h4>
            <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Role</th>
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
                            <?=
                                $ac->role;
                            ?>
                        </td>
                    </tr>
                    <?php     
                        }
                    ?>
                </tbody>
            </table>
            </p>
        </div>
    </div>