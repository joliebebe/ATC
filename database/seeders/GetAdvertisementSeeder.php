<?php

namespace Database\Seeders;

use App\Models\getAdvertisement;
use Illuminate\Database\Seeder;

class GetAdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publicite1 = getAdvertisement::create([
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
            'model_id' => 1, // ID du modèle Navara
        ]);

 
        $publicite2 = getAdvertisement::create([
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
            'model_id' => 2, // ID du modèle Tiguan
        ]);

 
        $publicite3 = getAdvertisement::create([
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
            'model_id' => 3, // ID du modèle D50
        ]);

 
        $publicite4 = getAdvertisement::create([
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
            'model_id' => 4, // ID du modèle T7
        ]);
 
        $publicite5 = getAdvertisement::create([
            'titre' => 'Nouveau modèle Nissan Kicks',
            'description' => 'Découvrez le tout nouveau Nissan Kicks avec des fonctionnalités avancées.',
            'image_principale' => 'nissan_kicks_principale.jpg',
            'images_secondaires' => ['nissan_kicks_1.jpg', 'nissan_kicks_2.webp'],
            'type1' => 'Essence',
            'type2' => 'Automatique',
            'type3' => 'Sport',
            'prix' => 25000000,
            'etat' => 1,
            'marque_id' => 1, // ID de Nissan
            'model_id' => 2, // ID du modèle Kicks
        ]);

        $publicite6 = getAdvertisement::create([
            'titre' => 'Volkswagen T-roc',
            'description' => 'Le Volkswagen T-roc est maintenant disponible avec des remises exceptionnelles.',
            'image_principale' => 'volkswagen_troc_principale.webp',
            'images_secondaires' => ['volkswagen_troc_1.jpg', 'volkswagen_troc_2.webp'],
            'type1' => 'Essence',
            'type2' => 'Automatique',
            'type3' => 'Sport',
            'prix' => 30000000,
            'etat' => 1,
            'marque_id' => 2, // ID de Volkswagen
            'model_id' => 3, // ID du modèle T-roc
        ]);
        $publicite7 = getAdvertisement::create([
            'titre' => 'Nouveau modèle Venucia T60',
            'description' => 'Découvrez le tout nouveau Venucia T60 avec des fonctionnalités avancées.',
            'image_principale' => 'venucia_t60_principale.webp',
            'images_secondaires' => ['venucia_t60_1.jpg', 'venucia_t60_2.jpg'],
            'type1' => 'Essence',
            'type2' => 'Automatique',
            'type3' => 'Sport',
            'prix' => 20000000,
            'etat' => 1,
            'marque_id' => 3, // ID de Venucia
            'model_id' => 4, // ID du modèle T60
        ]);
        $publicite8 = getAdvertisement::create([
            'titre' => 'Nouveau modèle New Holland T8',
            'description' => 'Découvrez le tout nouveau New Holland T8 avec des fonctionnalités avancées.',
            'image_principale' => 'new_holland_t8_principale.jpg',
            'images_secondaires' => ['new_holland_t8_1.jpg', 'new_holland_t8_2.jpg'],
            'type1' => 'Diesel',
            'type2' => 'Automatique',
            'type3' => 'Confort',
            'prix' => 40000000,
            'etat' => 1,
            'marque_id' => 4, // ID de New Holland
            'model_id' => 5, // ID du modèle T8
        ]);
        $publicite9 = getAdvertisement::create([
            'titre' => 'Nouveau modèle Nissan Qashqai',
            'description' => 'Découvrez le tout nouveau Nissan Qashqai avec des fonctionnalités avancées.',
            'image_principale' => 'nissan_qashqai_principale.jpg',
            'images_secondaires' => ['nissan_qashqai_1.jpeg', 'nissan_qashqai_2.jpeg'],
            'type1' => 'Essence',
            'type2' => 'Automatique',
            'type3' => 'Sport',
            'prix' => 30000000,
            'etat' => 1,
            'marque_id' => 1, // ID de Nissan
            'model_id' => 3, // ID du modèle Qashqai
        ]);
        $publicite10 = getAdvertisement::create([
            'titre' => 'Nouveau modèle Volkswagen Passat',
            'description' => 'Découvrez le tout nouveau Volkswagen Passat avec des fonctionnalités avancées.',
            'image_principale' => 'volkswagen_passat_principale.jpg',
            'images_secondaires' => ['volkswagen_passat_1.webp', 'volkswagen_passat_2.jpg'],
            'type1' => 'Essence',
            'type2' => 'Automatique',
            'type3' => 'Sport',
            'prix' => 35000000,
            'etat' => 1,
            'marque_id' => 2, // ID de Volkswagen
            'model_id' => 4, // ID du modèle Passat
        ]);

    }
}
