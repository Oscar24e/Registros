<?php

namespace Database\Seeders;

use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder\c_postales;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create(); 
        $codigos_postales = ['codigo' => '20060','asentamiento' => 'Aguascalientes Centro','tipo_asenta' => 'Colonia','municipio' 
        => 'Aguascalientes','estado' => 'Aguascalientes','ciudad' => 'Aguascalientes','codigo' => '20010','asentamiento' => 'Colinas del Rio','tipo_asenta' => 'Fraccionamiento','municipio' => 'Aguascalientes','estado' => 'Aguascalientes','ciudad' => 'Aguascalientes'];
            
        DB::table('codigos')->insert([

            $codigos_postales
           

        ]);   
           
            // DB::table('codigos')->insert([
            //     'codigo' =>  '20000',
            //     'asentamiento' => 'Aguascalientes Centro',
            //     'tipo_asenta' => 'Colonia',
            //     'municipio' => 'Aguascalientes',
            //     'estado' => 'Aguascalientes',
            //     'ciudad' => 'Aguascalientes',
            // ]);
            }
       
        
    }
    

