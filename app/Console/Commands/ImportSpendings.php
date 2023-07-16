<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Spending;
use App\Models\Deputy;

class ImportSpendings extends Command
{
    protected $signature = 'app:import-spendings';
    protected $description = 'Command description';

    public function handle()
    {
        $deputies = Deputy::all('id');

        foreach ($deputies as $deputy) {
            for ($month = 1; $month <= 12; $month++) {
                $url = "https://dadosabertos.almg.gov.br/ws/prestacao_contas/verbas_indenizatorias/deputados/{$deputy->id}/2019/{$month}?formato=json";
                $response = Http::get($url);

                if ($response->successful()) {
                    $decoded = json_decode($response->body());
                    $totalProfit = 0;

                    foreach ($decoded->list as $gasto) {
                        $totalProfit += $gasto->valor;
                    }

                    $spending = Spending::firstOrNew([
                        'congressperson_id' => $deputy->id,
                        'month' => $month,
                    ]);

                    if (!$spending->exists) {
                        $spending->value = $totalProfit;
                        $spending->save();
                        $this->info("Spending for deputy: {$deputy->id} for month: {$month} saved");
                    } else {
                        $this->info("Spending for deputy: {$deputy->id} for month: {$month} already exists");
                    }
                    
                    sleep(2);
                } else {
                    $this->error('Failed to call the API.');
                }
            }
            sleep(12);
        }
    }
}
