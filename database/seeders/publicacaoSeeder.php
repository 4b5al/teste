<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class publicacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /* DB::table('publicacao')->insert([
            'titulo' => 'Olá',
            'data' => '28/10/2021',
            'mensagem' => 'olá mundo !!! kkkkkkkkkkkkkkk'
        ]);*/

        factrory(publicacaoFactory::class)->create();
    }
}
