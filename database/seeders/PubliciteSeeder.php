<?php

namespace Database\Seeders;

use App\Models\Publicite;
use Illuminate\Database\Seeder;

class PubliciteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publicite1 = Publicite::create([
            'titre' => '-50% Nissan Navara',
            'description' => 'Découvrez les meilleures offres sur les Navara neuves.',
            'image_principale' => 'nissan_navara_principale.jpg',
            'images_secondaires' => ['nissan_navara_1.jpg', 'nissan_navara_2.jpg', 'nissan_navara_3.jpg', 'nissan_navara_4.jpg'],
            'type1' => 'Diesel',
            'type2' => 'Manuelle',
            'type3' => 'Confort',
            'prix' => 20000000,
            'etat' => 1,
            'marque_id' => 1, // ID de Nissan
        ]);

        $publicite1->models()->attach([1, 2]); // IDs des modèles Navara et Kicks

        $publicite2 = Publicite::create([
            'titre' => 'Promo Volkswagen',
            'description' => 'Volkswagen en réduction exceptionnelle.',
            'image_principale' => 'volkswagen_principale.webp',
            'images_secondaires' => ['volkswagen_1.jpg', 'volkswagen_2.webp'],
            'type1' => 'Diesel',
            'type2' => 'Manuelle',
            'type3' => 'Confort',
            'prix' => 35000,
            'etat' => 1,
            'marque_id' => 2, // ID de Volkswagen
        ]);

        $publicite2->models()->attach([4, 5]); // IDs des modèles Golf et Passat

        $publicite3 = Publicite::create([
            'titre' => 'Offre spéciale Venucia',
            'description' => 'Découvrez les offres spéciales sur Venucia.',
            'image_principale' => 'venucia_principale.png',
            'images_secondaires' => ['venucia_1.jpg', 'venucia_2.jpg', 'venucia_3.jpg'],
            'type1' => 'Diesel',
            'type2' => 'Manuelle',
            'type3' => 'Confort',
            'prix' => 15000000,
            'etat' => 1,
            'marque_id' => 3, // ID de Venucia
        ]);

        $publicite3->models()->attach([7, 8]); // IDs des modèles D50 et T90

        $publicite4 = Publicite::create([
            'titre' => 'New Holland en promo',
            'description' => 'Offres exceptionnelles sur les véhicules New Holland.',
            'image_principale' => 'new_holland_principale.jpg',
            'images_secondaires' => ['new_holland_1.webp', 'new_holland_2.jpg'],
            'type1' => 'Diesel',
            'type2' => 'Manuelle',
            'type3' => 'Confort',
            'prix' => 25000000,
            'etat' => 1,
            'marque_id' => 4, // ID de New Holland
        ]);

        $publicite4->models()->attach([10, 11]); // IDs des modèles T7 et T8
    }
}
