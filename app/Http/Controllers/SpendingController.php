<?php

namespace App\Http\Controllers;

use App\Models\Spending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpendingController extends Controller
{
    public function getMostSpentDeputies(Request $request)
    {
        $mostSpentDeputies = DB::table('spendings')
            ->join('deputies', 'deputies.id', '=', 'spendings.congressperson_id')
            ->whereIn(
                DB::raw('(spendings.month, spendings.value)'),
                function ($query) {
                    $query->select(DB::raw('spendings.month, MAX(spendings.value)'))
                        ->from('spendings')
                        ->where('spendings.month', '>=', 2)
                        ->groupBy('spendings.month');
                }
            )
            ->select('spendings.month', 'deputies.nome', 'spendings.value')
            ->orderBy('spendings.month')
            ->get();

        return response()->json($mostSpentDeputies);
    }
}

