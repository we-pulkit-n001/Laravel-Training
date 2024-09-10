<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Collection;
use App\Models\Member;

class CollectionController extends Controller
{
    public function index()
    {
        $item = new Collection(["one", "two", "three"]);

        $result = $item->map(function ($items) {
            return strtoupper($items);
        });

        $items = collect([
            ["name" => "orange", "price" => 80, "sale" => 250],
            ["name" => "apple", "price" => 100, "sale" => 150],
            ["name" => "banana", "price" => 50, "sale" => 300]

        ]);

        $data = Member::get();

        $user_result = $data->where('age', '>', 70);

        dd($user_result->toArray());

        dd($items->where('sale', '>', '150')->toArray());

        dd($items->max('sale'));

        // dd($items->sortBy('name')->toArray());

        dd($items->sortBy('price')->toArray());

        // dd($items->sortBy('sale')->toArray());

        dd($items->toArray());

        // dd($items->all());
        // dd($result->toArray());
    }
}
