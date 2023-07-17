<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpendingController extends Controller
{
    public function show(Request $request, $month)
    {
        $this->validateMonth($month);

        $mostSpentDeputies = DB::table('spendings')
            ->join('deputies', 'deputies.id', '=', 'spendings.congressperson_id')
            ->where('spendings.month', $month)
            ->orderByDesc('spendings.value')
            ->take(5)
            ->select('spendings.month', 'deputies.nome', 'spendings.value')
            ->get();

        return response()->json($mostSpentDeputies);
    }

    private function validateMonth($month)
    {
        if (!is_numeric($month) || $month < 1 || $month > 12) {
            abort(400, 'Invalid month. Month must be a number between 1 and 12.');
        }
    }
}
