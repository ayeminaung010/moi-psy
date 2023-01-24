<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $regions = ['ရန်ကုန်တိုင်းဒေသကြီး', 'မန္တလေးတိုင်းဒေသကြီး', 'နေပြည်တော်', 'မွန်ပြည်နယ်', 'ပဲခူးတိုင်းဒေသကြီး', 'ဧရာဝတီတိုင်းဒေသကြီး', 'ပဲခူးတိုင်းဒေသကြီး', 'စစ်ကိုင်းတိုင်းဒေသကြီး', 'မန္တလေးတိုင်းဒေသကြီး', 'ရခိုင်ပြည်နယ်', 'တနင်္သာရီတိုင်းဒေသကြီး', 'ရှမ်းပြည်နယ်', 'မကွေးတိုင်းဒေသကြီး', 'ချင်းပြည်နယ်'];
        foreach($regions as $region){
            Location::create([
                'name' => $region,
            ]);
        }
    }
}
