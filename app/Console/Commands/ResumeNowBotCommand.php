<?php

namespace App\Console\Commands;

use App\Models\Title;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ResumeNowBotCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resume-now:bot';

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

    public function handle()
    {

        $alphabet = [
            'a' => 'a',
            'b' => 'b',
            'c' => 'c',
            'd' => 'd',
            'e' => 'e',
            'f' => 'f',
            'g' => 'g',
            'h' => 'h',
            'i' => 'i',
            'j' => 'j',
            'k' => 'k',
            'l' => 'l',
            'm' => 'm',
            'n' => 'n',
            'o' => 'o',
            'p' => 'p',
            'q' => 'q',
            'r' => 'r',
            's' => 's',
            't' => 't',
            'u' => 'u',
            'v' => 'v',
            'w' => 'w',
            'x' => 'x',
            'y' => 'y',
            'z' => 'z'
        ];

        $alphabet = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
        ];


        $title = $alphabet[0];
        $true = true;
        while ($true){
            dump($title);
            $request = $this->request($title);

            if (is_array($json = $request->json())){
                if (count($json) == 10){
                    $title .= $alphabet[0];

                }else{
                    $lastElement = substr($title, -1);
                    if ($lastElement == 'z'){
                        $title = Str::replaceLast($lastElement, '', $title);
                        $lastElement = substr($title, -1);
                    }
                    $nextElement = array_search($lastElement, $alphabet) + 1;
                    $title = Str::replaceLast($lastElement, $alphabet[$nextElement], $title);
                }

                $this->insertJobTitle($json);
            }
            if ($title == 'zz'){
                $true = false;
            }
        }
    }

    public function insertJobTitle($items){
        foreach ($items as $item){
            if (! is_array($item)) continue;
            if (array_key_exists('title', $item)) Title::updateOrCreate([ 'title' => $item['title'] ]);
        }
    }

    public function request($title){
        sleep(rand(0,2));
        return Http::withHeaders([
            'Host' => ' www.resume-now.com',
            'User-Agent' => ' Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:97.0) Gecko/20100101 Firefox/97.0',
            'Accept' => ' application/json',
            'Accept-Language' => ' en-US,en;q=0.5',
            'Accept-Encoding' => ' gzip, deflate, br',
            'Referer' => ' https://www.resume-now.com/build-resume/section/expr-det',
            'Content-Type' => ' application/json',
            'Origin' => ' https://www.resume-now.com',
            'Content-Length' => ' 253',
            'DNT' => ' 1',
            'Connection' => ' keep-alive',
            'Cookie' => ' ak_bmsc=800C85D351B0FDA2D9FB5F5C300C0875~000000000000000000000000000000~YAAQx2QRApI2rAF/AQAAcZ5NAg6qu4Ya0bmnRE2uOKh2NmQOa3C7gMENFzU1Tvw/Lyf326bxAUsz4oniMubPBPHgM82+nVWTXLyEISZ8w3Kjs3mA7tTduex2rSeVqN8yupig3jFjOimoMN18jReCxkKCKuRW5UAITKMf1DMoECgolZMQbZzXFdrPBrh7d4Vn24Wb36ZRb+od8GOrX/aj8wYUJV35YUWc18UjK58lSnyEDdxH8QJjk2/NnuWlZItFIR11ygvkxTUSxTSF2SKH6wv4CbHhpxTCGVXUOwOGNkwJ/nf8M/g8qMLQL9AhxsFk9fzs8d8D6NL4wQXK15HzSfBwpL7KDIVLrQTRU7wWJ95eb5l1cVL6K4axjREKZNPXaifP0X77rzNkFQ0osgkSrBjo5inlZHkGBNRAveKy+c1lLVtZFdL1K2S4PEVpsagueLjyOKyED1A/+GoqzAgjiwOA55nkPWHOyA1jOnO5zo0buH1TDK9Fl1BiSX/gMw==; bm_sv=BAC96E10A0BFEA4BAFE12B36FBA72C92~AZ/EyzqCAPs7YbQOI+Xd55NBSRWXxM5eQRf2uCf7C7K81WOG/IkOoTsKFT/GfSiDyTMdVCzoEn5+8KZznV/03eUdygs779g+XS6WtLGqldR/fZnvocltJHO4HrUI8inudnd8qA3Ab+3DrjtBGyZlWPcR1qlva2o3bQ3j9NwBmu0=; vssessionuid=c36896b1-920b-412b-a63c-b77c3053a66c; vstr=18da2eb0-1433-46cc-ba36-652d2e27f6d1; vsuid=9a354c72-e494-4c7f-ad9a-91dda4adcf45; ref=3; visitinfo=[City,Baku]&[State,BA]&[Country,AZ]&[PostalCode,]&[BrowserName,Firefox]&[BrowserVersion,97.0]&[DeviceType,]&[OSName,macOS]&[DeviceModel,Macintosh]&[OSVersion,10.15]; vsutms=e9cf136b-f5d9-4aa3-ae64-0252420a7334#18da2eb0-1433-46cc-ba36-652d2e27f6d1#9a354c72-e494-4c7f-ad9a-91dda4adcf45#1645011116##||||; Auth=fFfQHpxScXqxQ8aF4Gsq9mBfVKAFwzN5BKLv7KpvGBfwstNSzXOjFGu7uRcxkY8UD8tW65XpAiz0mOdnY3rYywrHmZkZ7l0xMmfglLIeI04lim-jb_epVzpXkmtgI2QHltLdGevl9cd1VDwmochsrPYON0SRIqtczjXSX6aXYkryRSjp21BJU_p-_Oh7_pLMY5Uqu-28SDhTbF_WALNu49e3qcRK2ruaE9IqmWU8R1AIBB3GNhKwTAZuCX6UPvrhWiPuqjSFsdSQ-2z4vONXbSZb3Tl58U2Hiew4Aym7oucpus7H2SzECIHhA1C2nEAwyihPym7wZf_7SysE6bAoM0cdap-RKH5G7NvcLrhGADnZ4X1g7z6Wc4QsIzI-vrAZk2LyYwfwsCZsiyRvMVLQToEo01GYzHlfjVWqksfmaPaxbnd-DbEomd7MNGK-6MXxs2NAERQgddaUwyn_MKwDF_snqDtZFLNJiFaqmODW92Rp8QpCp8cVstanZE2ICv2W2Ia4ILc5RcRK6FNRp9pX5doRY9gtQX2-dPiZdTnUaKMa9q-4yvXyXhNqH-jhUjF9z-HWx1b5qrIzLTHEA6ofkpvniuSz8O96vpYOrSggK1OtOmndDjCPZ30VKAXCOiFJbUbGzkpbkY9ak7s2vqTscRjtSlwlGYIc5gPAkiWuy0wZj0r5XuD6QxERG6y-WZpeHzZVAR7fU53ZTVD6YQET_JNEArbK25xGv7m8Ti85xPFAI8Eu2PonbBEhU27h4j9GXObAZgJqisBIKDN2X_I-LHVEuzkCFGm9Lhf1oW-j4ZoULUVqpwhqN0Fl91keKjpsi4fAPij0N6Zv5j4HVNf5DALkdZhz-fyqupx6aBoKMbSPV6VNCimjAYD4aVin63Au58aqFD6iL7iFcsPwZOLlWUoDbkeYCTcXxAh7jbZ-sshSl79Se00KVVaOqxert94YMplWv4aV6oDo7vY1eMNL9DEhBwK4ACaMiYWjGFmQ_8z-Q_SHIXyFkheTDKpDhfUZaMlI3WMPPsTQup0AJONMxUtsETWNKNh_HL9mKIHJtxtCHQhpMyIFuOh_RQHqhSYUcGrbAyOPZF5-w8XyalN7eD6kFJqkB4DoKOE1BleglYGep0k6lwRPvtFs2VXSSUA3NHRcYSrhK9dd0MyVjnMSvA; UserStatus={"IsUserLoggedIn":false,"User":{"Role":0,"UserId":"19d0e98c-c2c4-4208-a2be-be8dc7b975de","AccDisplayName":"Guest","CreatedOn":"2/16/2022 11:32:00 AM"}}; acc_session={f9b4f34a-06cf-4dbf-b111-1284762176bf}; useruid=19d0e98c-c2c4-4208-a2be-be8dc7b975de; _gcl_au=1.1.1187096408.1645011122; fs_user=0; ajs_anonymous_id=e3f21bd5-d582-45a7-99a8-de83055b9b7f; _uetsid=10c4b2508f1c11ec914d9f7350f0638a; _uetvid=10c4eba08f1c11ec85ad3fa95e0b8711; ajs_user_id=19d0e98c-c2c4-4208-a2be-be8dc7b975de; runtest=fa846a7b-a1ff-4376-b724-14fa57218854_3; DocumentID=03db2295-6be6-40da-9411-1d4a86dcff66; bm_sv=BAC96E10A0BFEA4BAFE12B36FBA72C92~AZ/EyzqCAPs7YbQOI+Xd55NBSRWXxM5eQRf2uCf7C7K81WOG/IkOoTsKFT/GfSiDyTMdVCzoEn5+8KZznV/03eUdygs779g+XS6WtLGqldREWeAfG/1SjcPy4o0ynht7QxpNrI55EHYsleIcfBQ+Srqr8wm81jSzWrIyEq0PWOw=',
            'Sec-Fetch-Dest' => ' empty',
            'Sec-Fetch-Mode' => ' cors',
            'Sec-Fetch-Site' => ' same-origin',
            'TE' => ' trailers'
        ])->post('https://www.resume-now.com/eb/api/v1/content/jobtitles',[
            "AcceptLanguage" => "en-US",
            "countrycd" => "AZ",
            "DocumentID" => "03db2295-6be6-40da-9411-1d4a86dcff66",
            "Placement" => "Experience",
            "PortalCD" => "RNA",
            "ProductCD" => "RSM",
            "SearchString" => "$title",
            "UserID" => "19d0e98c-c2c4-4208-a2be-be8dc7b975de",
            "isTypeAheadWithFuzzy" =>false
        ]);
    }

}
