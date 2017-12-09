<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class APIModel
{
    public static function music($id)
    {
        return DB::table('tuner')
                     ->where('id', $id)
                     ->first();
    }

    public static function musicRand()
    {
        return DB::table('tuner')
                 ->inRandomOrder()
                 ->take(1)
                 ->first();
    }

    public static function musicList($row)
    {
        return DB::table('tuner')
                     ->inRandomOrder()
                     ->take($row)
                     ->get();
    }

    public static function count()
    {
        return DB::table('tuner')->count();
    }

    public static function search($name)
    {
        return DB::table('tuner')
                     ->where('name', 'like', '%' . $name . '%')
                     ->orderBy('id', 'desc')
                     ->get();
    }
}