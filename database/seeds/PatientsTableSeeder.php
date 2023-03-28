<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('patients')->insert([
            [
                'nom' => 'Doe',
                'prenom' => 'John',
                'genre' => 1,
                'civilité' => 1,
                'date_naissance' => '1980-01-01',
                'profession' => 'Ingénieur',
                'situation_familiale' => 1,
                'gsm' => '0650000000',
                'gsm_whatsapp' => null,
                'fix' => '0522000000',
                'fax' => null,
                'adresse' => 'Rue A',
                'ville' => 'Casablanca',
                'pays' => 'Maroc',
                'commentaire' => null,
                'created_by' => 'Seeder',
                //'mutuelle_id' => null,
                'photo_patient' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'nom' => 'Smith',
                'prenom' => 'Jane',
                'genre' => 0,
                'civilité' => 1,
                'date_naissance' => '1985-05-01',
                'profession' => 'Avocat',
                'situation_familiale' => 1,
                'gsm' => '0650000001',
                'gsm_whatsapp' => '0650000001',
                'fix' => null,
                'fax' => null,
                'adresse' => 'Rue B',
                'ville' => 'Rabat',
                'pays' => 'Maroc',
                'commentaire' => null,
                'created_by' => 'Seeder',
                //'mutuelle_id' => null,
                'photo_patient' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Garcia',
                'prenom' => 'Juan',
                'genre' => 1,
                'civilité' => 1,
                'date_naissance' => '1970-12-15',
                'profession' => 'Médecin',
                'situation_familiale' => 2,
                'gsm' => '0650000002',
                'gsm_whatsapp' => '0650000002',
                'fix' => '0522300000',
                'fax' => null,
                'adresse' => 'Rue C',
                'ville' => 'Marrakech',
                'pays' => 'Maroc',
                'commentaire' => null,
                'created_by' => 'Seeder',
                //'mutuelle_id' => null,
                'photo_patient' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Lee',
                'prenom' => 'David',
                'genre' => 1,
                'civilité' => 1,
                'date_naissance' => '1995-08-10',
                'profession' => 'Étudiant',
                'situation_familiale' => 0,
                'gsm' => '0650000003',
                'gsm_whatsapp'
                => null,
                'fix' => null,
                'fax' => null,
                'adresse' => 'Rue D',
                'ville' => 'Tanger',
                'pays' => 'Maroc',
                'commentaire' => null,
                'created_by' => 'Seeder',
                //'mutuelle_id' => null,
                'photo_patient' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

    }
}
