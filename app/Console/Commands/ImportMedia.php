<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Media;
class ImportMedia extends Command
{
    protected $signature = 'app:import-media';
    protected $description = 'Command description';
    public function handle()
    {
        $url = "http://dadosabertos.almg.gov.br/ws/deputados/lista_telefonica?formato=json";
        $response = Http::get($url);
        $decoded = json_decode($response->body(), true);

        if (isset($decoded['list'])) {
            foreach ($decoded['list'] as $item) {
                $redesSociais = $item['redesSociais'] ?? [];
                foreach ($redesSociais as $redeSocial) {
                    $nome = $redeSocial['redeSocial']['nome'];
                    Media::create(['media' => $nome]);
                }
            }
        }
    }
}
