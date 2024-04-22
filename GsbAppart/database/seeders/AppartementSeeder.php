<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appartement;

class AppartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cpt = 1;
        $cptNumAppart = 1;

        // Créer un appartement factice
        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Rue des Tulipes';
        $appartement->Arrondissement = 'Paris 11ème';
        $appartement->Etage = 3;
        $appartement->TypeAppart = 'Studio';
        $appartement->PrixLoc = 800;
        $appartement->PrixCharge = 100;
        $appartement->Ascenseur = 'Oui';
        $appartement->Preavis = '1 mois';
        $appartement->DateLibre = '2024-05-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 1; // Remplacer par l'ID du propriétaire
        $appartement->save();

        // Créer un autre appartement factice
        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Avenue des Champs-Élysées';
        $appartement->Arrondissement = 'Paris 8ème';
        $appartement->Etage = 5;
        $appartement->TypeAppart = 'Appartement 2 pièces';
        $appartement->PrixLoc = 1500;
        $appartement->PrixCharge = 200;
        $appartement->Ascenseur = 'Oui';
        $appartement->Preavis = '3 mois';
        $appartement->DateLibre = '2024-06-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 1; // Remplacer par l'ID du propriétaire
        $appartement->save();

        // Créer un troisième appartement factice
        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Rue du Faubourg Saint-Antoine';
        $appartement->Arrondissement = 'Paris 12ème';
        $appartement->Etage = 2;
        $appartement->TypeAppart = 'Appartement 3 pièces';
        $appartement->PrixLoc = 2000;
        $appartement->PrixCharge = 300;
        $appartement->Ascenseur = 'Non';
        $appartement->Preavis = '2 mois';
        $appartement->DateLibre = '2024-07-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 2; // Remplacer par l'ID du propriétaire
        $appartement->save();



        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Rue Auguste Isaac';
        $appartement->Arrondissement = 'Lyon 1er';
        $appartement->Etage = 2;
        $appartement->TypeAppart = 'Appartement 3 pièces';
        $appartement->PrixLoc = 2000;
        $appartement->PrixCharge = 300;
        $appartement->Ascenseur = 'Non';
        $appartement->Preavis = '2 mois';
        $appartement->DateLibre = '2024-07-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 2; // Remplacer par l'ID du propriétaire
        $appartement->save();


        // Créer un quatrième appartement factice
        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Boulevard Haussmann';
        $appartement->Arrondissement = 'Paris 8ème';
        $appartement->Etage = 4;
        $appartement->TypeAppart = 'Studio';
        $appartement->PrixLoc = 1000;
        $appartement->PrixCharge = 150;
        $appartement->Ascenseur = 'Oui';
        $appartement->Preavis = '1 mois';
        $appartement->DateLibre = '2024-08-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 3; // Remplacer par l'ID du propriétaire
        $appartement->save();

        // Créer un cinquième appartement factice
        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Rue de Rivoli';
        $appartement->Arrondissement = 'Paris 1er';
        $appartement->Etage = 3;
        $appartement->TypeAppart = 'Appartement 2 pièces';
        $appartement->PrixLoc = 1800;
        $appartement->PrixCharge = 250;
        $appartement->Ascenseur = 'Oui';
        $appartement->Preavis = '2 mois';
        $appartement->DateLibre = '2024-09-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 4; // Remplacer par l'ID du propriétaire
        $appartement->save();

        // Créer un sixième appartement factice
        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Avenue des Gobelins';
        $appartement->Arrondissement = 'Paris 13ème';
        $appartement->Etage = 2;
        $appartement->TypeAppart = 'Appartement 4 pièces';
        $appartement->PrixLoc = 2200;
        $appartement->PrixCharge = 300;
        $appartement->Ascenseur = 'Oui';
        $appartement->Preavis = '3 mois';
        $appartement->DateLibre = '2024-10-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 5; // Remplacer par l'ID du propriétaire
        $appartement->save();

        // Créer un septième appartement factice
        $appartement = new Appartement();
        $appartement->NumAppart = $cptNumAppart++;
        $appartement->Rue = 'Boulevard Saint-Michel';
        $appartement->Arrondissement = 'Paris 5ème';
        $appartement->Etage = 1;
        $appartement->TypeAppart = 'Studio';
        $appartement->PrixLoc = 1200;
        $appartement->PrixCharge = 200;
        $appartement->Ascenseur = 'Non';
        $appartement->Preavis = '2 mois';
        $appartement->DateLibre = '2024-11-01';
        $appartement->image_path = '/appartement_' . $cpt++ . '.jpg';
        $appartement->Proprietaire = 6; // Remplacer par l'ID du propriétaire
        $appartement->save();
    }
}
