<?php

namespace Database\Seeders;

use App\Models\siteContacto;
use Illuminate\Database\Seeder;

class siteContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteContacto=new siteContacto();
        $siteContacto->nome='Pessoa 1';
        $siteContacto->telefone='911234567';
        $siteContacto->email='pessoa@flag.pt';
        $siteContacto->motivo=1;
        $siteContacto->mensagem='Primeira mensagem';
        $siteContacto->save();
    }
}
