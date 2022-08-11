<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $query = Models\Product::Orderby('id');

        $products = $query->get();

        return response()->json(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request)
    {
        $result = new Collection();

        $calories = $request->kcal;

        $part = $calories / 4;

        $flour = Models\Product::where('group', 1);
        $fruit = Models\Product::where('group', 2);
        $vegetable = Models\Product::where('group', 3);
        $nut = Models\Product::where('group', 4);

        $weekDays = collect([
            ['code' => 0, 'day' => 'Monday'],
            ['code' => 1, 'day' => 'Tuesday'],
            ['code' => 2, 'day' => 'Wednesday'],
            ['code' => 3, 'day' => 'Thursday'],
            ['code' => 4, 'day' => 'Friday'],
            ['code' => 5, 'day' => 'Saturday'],
            ['code' => 6, 'day' => 'Sunday']
        ])->all();

        for ($i = 0; $i < 7; $i++) {
            $componentOne = $flour->inRandomOrder()->first();
            $componentTwo = $fruit->inRandomOrder()->first();
            $componentThree = $vegetable->inRandomOrder()->first();
            $componentFour = $nut->inRandomOrder()->first();

            $componentOne->gramms = round($part / ($componentOne->kcal) * 100);
            $componentTwo->gramms = round($part / ($componentTwo->kcal) * 100);
            $componentThree->gramms = round($part / ($componentThree->kcal) * 100);
            $componentFour->gramms = round($part / ($componentFour->kcal) * 100);

            $products = $result->push($weekDays[$i], $componentOne, $componentTwo, $componentThree, $componentFour);
        }

        return response()->json(compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Models\Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Models\Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Models\Product $product)
    {
        //
    }
}
