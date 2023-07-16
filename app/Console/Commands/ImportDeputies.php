<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Deputy;

class ImportDeputies extends Command
{
    protected $signature = 'app:import-deputies';
    protected $description = 'Command description';

    public function handle()
    {
        $url = 'https://dadosabertos.almg.gov.br/ws/legislaturas/19/deputados/em_exercicio?formato=json';
        
        $response = Http::get($url);
        
        if ($response->successful()) {
            $decoded = json_decode($response->body());
            foreach ($decoded->list as $user) {
                $user = (array) $user;
                Deputy::firstOrCreate(
                    ['id' => $user['id']],
                    ['nome' => $user['nome']]
                );
            }
            $this->info('API called successfully!');
        } else {
            $this->error('Failed to call the API.');
        }
    }
}
