<?php

namespace App\Console\Commands;

use App\Models\Description;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ResumeNowBotDescriptionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resume-now:bot.description';

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

        $json = file_get_contents(public_path('data/new-titles.json'));


        $items = json_decode($json);


        $array = [];
        foreach ($items as $key => $title){

            $title = $title->title;

            $this->setLastTitle($title);

            try {
                $title = str_replace(' ', '%20', $title);
                $host = "https://www.resume-now.com/eb/api/v1/content/texttunercontent?user_uid=10653e9b-16a0-4a43-a630-1bf938bfb08b&sectionTypeCD=EXPR&productCD=RSM&Jobtitle={$title}&searchItemType=jobTitle&documentID=1e639872-3a20-4c89-89c7-6fdd66c93658&cultureCD=en-US&enableFuzzySearch=true&includeKGSkills=false&fuzzySearchVariation=fuzzy&contentMatchVariance=rankWithSynonymGroup&includeUSContentInFallback=false&curatedSkillVariance=baseline&includeSynonymInIntlFallback=false";
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $host);
                curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)");
                curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1) ;
                curl_exec($curl);
                $ftp_result=curl_exec($curl);

                if ($ftp_result === false) {
                    continue;
                }

                if ($this->isJson($ftp_result)) {
                    $json = json_decode($ftp_result, true);


                    if (isset($json['result'])) {
                        $result = $json['result'];
                        foreach ($result as $item){
                            $text = $item['text'];

                            $des = Description::create([
                                'title' => $title,
                                'description' => $text
                            ]);
                            dump($des->toArray());
                        }
                    }

                }

            } catch (\Exception $e) {

            }




            sleep(rand(1,3));
        }
    }


    public function isJson($string) {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
    }
    public function setLastTitle($title)
    {
        Storage::disk('public')->put('title.txt', $title);
    }
}
