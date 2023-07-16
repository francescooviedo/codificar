<?php

use Illuminate\Database\Seeder;
use App\Models\Deputy;

class DeputySeeder extends Seeder
{
    public function run()
    {
        $deputies = [
            ['id' => 10002, 'nome' => 'Carlos Henrique'],
            ['id' => 10434, 'nome' => 'Leandro Genaro'],
            ['id' => 12202, 'nome' => 'Gustavo Valadares'],
            ['id' => 13425, 'nome' => 'Betinho Pinto Coelho'],
            ['id' => 15245, 'nome' => 'Agostinho Patrus'],
            ['id' => 15246, 'nome' => 'Braulio Braz'],
            ['id' => 15260, 'nome' => 'Rosângela Reis'],
            ['id' => 15265, 'nome' => 'Inácio Franco'],
            ['id' => 16019, 'nome' => 'Léo Portela'],
            ['id' => 17872, 'nome' => 'Professor Wendel Mesquita'],
            ['id' => 17919, 'nome' => 'Duarte Bechir'],
            ['id' => 1832, 'nome' => 'Sávio Souza Cruz'],
            ['id' => 18848, 'nome' => 'Cassio Soares'],
            ['id' => 18849, 'nome' => 'Celinho Sintrocel'],
            ['id' => 18850, 'nome' => 'Doutor Wilson Batista'],
            ['id' => 18852, 'nome' => 'Elismar Prado'],
            ['id' => 18857, 'nome' => 'Bosco'],
            ['id' => 18858, 'nome' => 'João Vítor Xavier'],
            ['id' => 18860, 'nome' => 'Tadeu Martins Leite'],
            ['id' => 18863, 'nome' => 'Neilando Pimenta'],
            ['id' => 18867, 'nome' => 'Ulysses Gomes'],
            ['id' => 19150, 'nome' => 'Ana Paula Siqueira'],
            ['id' => 20231, 'nome' => 'Glaycon Franco'],
            ['id' => 21125, 'nome' => 'Mário Henrique Caixa'],
            ['id' => 22514, 'nome' => 'Arnaldo Silva'],
            ['id' => 22515, 'nome' => 'Thiago Cota'],
            ['id' => 22516, 'nome' => 'Fábio Avelar'],
            ['id' => 22521, 'nome' => 'Noraldino Júnior'],
            ['id' => 22523, 'nome' => 'Cristiano Silveira'],
            ['id' => 22531, 'nome' => 'Douglas Melo'],
            ['id' => 22561, 'nome' => 'João Magalhães'],
            ['id' => 22581, 'nome' => 'Doutor Jean Freire'],
            ['id' => 22607, 'nome' => 'Roberto Andrade'],
            ['id' => 22616, 'nome' => 'Tito Torres'],
            ['id' => 2267, 'nome' => 'Celise Laviola'],
            ['id' => 24621, 'nome' => 'Gustavo Santana'],
            ['id' => 26062, 'nome' => 'Charles Santos'],
            ['id' => 26098, 'nome' => 'Beatriz Cerqueira'],
            ['id' => 26101, 'nome' => 'Cleitinho Azevedo'],
            ['id' => 26105, 'nome' => 'Zé Guilherme'],
            ['id' => 26111, 'nome' => 'Mauro Tramonte'],
            ['id' => 26114, 'nome' => 'Raul Belém'],
            ['id' => 26119, 'nome' => 'Professor Cleiton'],
            ['id' => 26133, 'nome' => 'Fernando Pacheco'],
            ['id' => 26134, 'nome' => 'Guilherme da Cunha'],
            ['id' => 26135, 'nome' => 'Gustavo Mitre'],
            ['id' => 26136, 'nome' => 'Osvaldo Lopes'],
            ['id' => 26137, 'nome' => 'Professor Irineu'],
            ['id' => 26138, 'nome' => 'Rafael Martins'],
            ['id' => 26139, 'nome' => 'Zé Reis'],
            ['id' => 26143, 'nome' => 'Andréia de Jesus'],
            ['id' => 26144, 'nome' => 'Bartô'],
            ['id' => 26145, 'nome' => 'Betão'],
            ['id' => 26148, 'nome' => 'Bruno Engler'],
            ['id' => 26149, 'nome' => 'Coronel Henrique'],
            ['id' => 26150, 'nome' => 'Delegado Heli Grilo'],
            ['id' => 26151, 'nome' => 'Doorgal Andrada'],
            ['id' => 26152, 'nome' => 'Doutor Paulo'],
            ['id' => 26153, 'nome' => 'Leninha'],
            ['id' => 26163, 'nome' => 'Coronel Sandro'],
            ['id' => 26164, 'nome' => 'Delegada Sheila'],
            ['id' => 26165, 'nome' => 'Laura Serrano'],
            ['id' => 2698, 'nome' => 'Virgílio Guimarães'],
            ['id' => 27070, 'nome' => 'Bernardo Mucida'],
            ['id' => 4458, 'nome' => 'Marquinho Lemos'],
            ['id' => 5905, 'nome' => 'Hely Tarqüínio'],
            ['id' => 7327, 'nome' => 'Antonio Carlos Arantes'],
            ['id' => 7752, 'nome' => 'Alencar da Silveira Jr.'],
            ['id' => 7758, 'nome' => 'Carlos Pimenta'],
            ['id' => 7762, 'nome' => 'Gil Pereira'],
            ['id' => 7766, 'nome' => 'João Leite'],
            ['id' => 7769, 'nome' => 'Leonídio Bouças'],
            ['id' => 8095, 'nome' => 'Ione Pinheiro'],
            ['id' => 9652, 'nome' => 'Arlen Santiago'],
            ['id' => 9655, 'nome' => 'Dalmo Ribeiro Silva'],
            ['id' => 9673, 'nome' => 'Sargento Rodrigues']
        ];

        foreach ($deputies as $deputy) {
            Deputy::create($deputy);
        }
    }
}
