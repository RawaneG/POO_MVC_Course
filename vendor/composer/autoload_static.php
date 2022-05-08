<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a4733727156b31c3a742c6061bd3fc0
{
    public static $classMap = array (
        'AC' => __DIR__ . '/../..' . '/models/AC.php',
        'AnneeScolaire' => __DIR__ . '/../..' . '/models/AnneeScolaire.php',
        'Classe' => __DIR__ . '/../..' . '/models/Classe.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Etudiant' => __DIR__ . '/../..' . '/models/Etudiant.php',
        'Inscription' => __DIR__ . '/../..' . '/models/Inscription.php',
        'Personne' => __DIR__ . '/../..' . '/models/Personne.php',
        'Professeur' => __DIR__ . '/../..' . '/models/Professeur.php',
        'RP' => __DIR__ . '/../..' . '/models/RP.php',
        'User' => __DIR__ . '/../..' . '/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4a4733727156b31c3a742c6061bd3fc0::$classMap;

        }, null, ClassLoader::class);
    }
}
