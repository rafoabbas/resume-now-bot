<?php

namespace App\Console\Commands;

use App\Models\Description;
use App\Models\IntersectTitle;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Psy\Util\Str;

class IntersectTitleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'intersect:title';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $titles = Storage::disk('public')->get('new-titles.json');
        $titles = json_decode($titles, true);

        $titles = Arr::pluck($titles, 'title');


        $group = [];
        foreach ($titles as $key => $title){

            if (IntersectTitle::where('title', $title)->count() > 0){
                continue;
            }

            $titleArray = [];

            $descriptions = Description::where('title', $title)->pluck('description')->toArray();

            $array_intersect = [];
            $count = 0;
            foreach ($descriptions as $description){

                $array = Description::where('description', $description)->pluck('title')->toArray();
                if (true){
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

            $uuid = \Illuminate\Support\Str::uuid();

            foreach ($array_intersect as $intersectTitle){
                IntersectTitle::create([
                    'group_id' => $uuid,
                    'title' => $intersectTitle,
                ]);
            }


//            if ($key == 20){
////                dd($group);
//                die;
//            }

        }
    }
}
