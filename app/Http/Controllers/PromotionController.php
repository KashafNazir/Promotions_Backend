<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;


class PromotionController extends Controller
{
    public function postPromotion(Request $request)
    {
        $promotion = new Promotion();
        $promotion->content = $request->input('content');
        $promotion->save();
        return response()->json(['promotion' => $promotion], 201);
    }

    public function getPromotions()
    {
        $promotions = Promotion::all();
        $response = ['promotions' => $promotions];
        return response()->json($response, 200);
    }

    public function putPromotion(Request $request, $id)
    {
        $promotion = Promotion::find($id);
        if(!$promotion){
            return response()->json(['message' => 'Promotion not Found'], 404);
        }
        $promotion->content = $request->input('content');
        $promotion->save();
        return response()->json(['promotion' => $promotion], 200);
    }

    public function deletePromotion($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();
        return response()->json(['message' => 'Promotion Deleted'], 200);
    }
}