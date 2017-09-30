<?php

use Illuminate\Database\Seeder;

class Chaussures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chaussures')->insert([
            'marque'    => 'Calvin Klein',
            'couleur'   => 'Noir',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Femme',
            'type'      => 'Bottines',
            'modele'    => 'Madeira',
            'img'       => '',
            'prix'      => 129.95,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Adidas',
            'couleur'   => 'Blanche',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Femme',
            'type'      => 'Baskets',
            'modele'    => 'Stan Smith',
            'img'       => '',
            'prix'      => 94.95,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Guess',
            'couleur'   => 'Rouge',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Femme',
            'type'      => 'Escarpins',
            'modele'    => 'Elave',
            'img'       => '',
            'prix'      => 184.95,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Adidas',
            'couleur'   => 'Blanche',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Homme',
            'type'      => 'Baskets',
            'modele'    => 'Superstar',
            'img'       => '',
            'prix'      => 99.95,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Palladium',
            'couleur'   => 'Noir',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Homme',
            'type'      => 'Bottines',
            'modele'    => 'Baggy Army',
            'img'       => '',
            'prix'      => 89.95,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Asics',
            'couleur'   => 'Rouge',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Homme',
            'type'      => 'Running',
            'modele'    => 'GT-2000',
            'img'       => '',
            'prix'      => 140,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Dr Martens',
            'couleur'   => 'Noir',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Enfant',
            'type'      => 'Bottines',
            'modele'    => 'Delaney Softy',
            'img'       => '',
            'prix'      => 99.95,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Nike',
            'couleur'   => 'Bleu',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Enfant',
            'type'      => 'Running',
            'modele'    => 'Revolution 3',
            'img'       => '',
            'prix'      => 22.45,
        ]);

        DB::table('chaussures')->insert([
            'marque'    => 'Ugg',
            'couleur'   => 'Brun',
            'promotion' => 0,
            'reduction' => 0,
            'sexe'      => 'Enfant',
            'type'      => 'Chaussons',
            'modele'    => 'Ryder',
            'img'       => '',
            'prix'      => 49.95,
        ]);
    }
}
