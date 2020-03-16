<?php

use Illuminate\Database\Seeder;

class SetoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setores')->insert([
            'descricao' => 'Vendas'
        ]);
        DB::table('setores')->insert([
            'descricao' => 'Escritório'
        ]);
        DB::table('setores')->insert([
            'descricao' => 'Estoque'
        ]);
        DB::table('setores')->insert([
            'descricao' => 'Administrativo'
        ]);
    }
}
