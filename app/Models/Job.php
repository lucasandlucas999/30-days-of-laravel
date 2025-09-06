<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {

    public static function all():array {
        return [
            [
                'id' => 1,
                'title'=> 'Laravel Developer',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title'=> 'Vue Developer',
                'salary' => '$40,000'
            ],
            [
                'id' => 3,
                'title'=> 'React Developer',
                'salary' => '$45,000'
            ]
        ];
    }

    public static function find(int $id):array {
        $job = Arr::first(self::all(), fn($item) => $item['id'] === $id);
        if(!$job){
            abort(404);
        }
        return $job;
    }

    
}