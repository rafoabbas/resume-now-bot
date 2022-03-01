<?php

namespace App\Http\Controllers;

use App\Models\Description;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index(){

        $titles = Storage::disk('public')->get('new-titles.json');
        $titles = json_decode($titles, true);

        $titles = Arr::pluck($titles, 'title');



        $group = [];
        foreach ($titles as $key => $title){
            $titleArray = [];
//            dump($key);
            $descriptions = Description::where('title', $title)->pluck('description')->toArray();


            $array_intersect = [];
            $count = 0;
            foreach ($descriptions as $description){

                $array = Description::where('description', $description)->pluck('title')->toArray();
                if (count($array) > 5){
                    $array_intersect = array_intersect($array_intersect, $array);
                    $count++;

                    if ($count == 0){
                        $array_intersect = $array;
                    }else{
                        $array_intersect = array_intersect($array_intersect, $array);
                    }
//                    $titleArray[] = $array;
                    $count = 1;
                }
            }
//            $array_intersect = array_intersect(implode(',',$titleArray));

//            dd($array_intersect);

            $group[$key] = $array_intersect;

            if ($key == 5){
                dd($group);
            }

        }

    }
}
