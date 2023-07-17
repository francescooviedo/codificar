<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    public function show()
    {
        $results = DB::table('medias')
            ->select('media', DB::raw('COUNT(*) AS count'))
            ->groupBy('media')
            ->orderByDesc('count')
            ->get();

        $responseData = $results->map(function ($result) {
            return [
                'Name' => $result->media,
                'count' => $result->count,
            ];
        });

        return response()->json([
            'message' => 'All Social Medias (ordered from most to least used):',
            'data' => $responseData,
        ]);
    }
}
