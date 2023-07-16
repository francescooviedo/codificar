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
            ->orderBy('count', 'desc')
            ->take(5)
            ->get();

        $responseData = [];
        foreach ($results as $result) {
            $responseData[] = [
                'Name' => $result->media,
                'count' => $result->count,
            ];
        }

        return response()->json([
            'message' => 'Top 5 Social Medias:',
            'data' => $responseData,
        ]);
    }
}
