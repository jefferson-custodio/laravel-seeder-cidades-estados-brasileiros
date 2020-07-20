<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Models\Estado::class)->create([
          "nome"=> "Acre",
          "uf"=>"AC"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Alagoas",
          "uf"=>"AL"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Amazonas",
          "uf"=>"AM"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Amapá",
          "uf"=>"AP"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Bahia",
          "uf"=>"BA"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Ceará",
          "uf"=>"CE"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Distrito Federal",
          "uf"=>"DF"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Espírito Santo",
          "uf"=>"ES"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Goiás",
          "uf"=>"GO"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Maranhão",
          "uf"=>"MA"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Minas Gerais",
          "uf"=>"MG"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Mato Grosso do Sul",
          "uf"=>"MS"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Mato Grosso",
          "uf"=>"MT"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Pará",
          "uf"=>"PA"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Paraíba",
          "uf"=>"PB"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Pernambuco",
          "uf"=>"PE"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Piauí",
          "uf"=>"PI"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Paraná",
          "uf"=>"PR"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Rio de Janeiro",
          "uf"=>"RJ"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Rio Grande do Norte",
          "uf"=>"RN"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Rondônia",
          "uf"=>"RO"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Roraima",
          "uf"=>"RR"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Rio Grande do Sul",
          "uf"=>"RS"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Santa Catarina",
          "uf"=>"SC"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Sergipe",
          "uf"=>"SE"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "São Paulo",
          "uf"=>"SP"
       ]);
        factory(App\Models\Estado::class)->create([
          "nome"=> "Tocantins",
          "uf"=>"TO"
       ]);
    }
}
