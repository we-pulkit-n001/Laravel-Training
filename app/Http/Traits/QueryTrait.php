<?php

namespace App\Http\Traits;

use App\Models\Member;

trait QueryTrait
{
    public function getUserDetails($age)
    {
        // dd(Member::get()->toArray());
        $data = Member::where('age', '>', $age)->first()->toArray();

        return $data;
    }
}
