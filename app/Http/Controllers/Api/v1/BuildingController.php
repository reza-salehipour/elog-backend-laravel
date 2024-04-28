<?php

namespace App\Http\Controllers\Api\v1;

class BuildingController extends Controller
{
    public function getBuildingList()
    {
        $buldingList = new CategoryList();
        $categories = $categoriesRequest->toArray(Category::where('user_id',env('USERID'))->orderBy('sort')->get());

        return response()->json([
            'categories' => $categories,
        ]);
    }

}

