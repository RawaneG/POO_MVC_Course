<div class="card ml-5">
        <div class="card-body">
            <h4 class="card-title">Liste des Personnes</h4>
            <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Nom Complet</th>
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
                    </tr>
                    <?php     
                        }
                    ?>
                </tbody>
            </table>
            </p>
        </div>
    </div>