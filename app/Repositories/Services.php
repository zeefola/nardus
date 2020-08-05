<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Services{

    public static function getServices(){

        $datas = collect([


            //1
            (object)[
             'featured_thumbnail' => '/images/c.jpg',
             'featured_title' => 'Essential Oils',
             'featured_description' => 'As humans we have used traditional methods to medicate ourselves for ages, and essential oils are an important part of',
              'go_to' => '/essential-oil', 
            ],


            //2
            (object)[
                'featured_thumbnail' => '/images/3.jpg',
                'featured_title' => 'Hand Sanitizer',
                'featured_description' => 'Hand sanitizer is often an alcohol-based gelatinous solution that’s effective against harmful agents which have the potential of',
                'go_to' => '/hand-sanitizer',    
            ],


               //3
            (object)[
                'featured_thumbnail' => '/images/2.jpg',
                'featured_title' => 'Hydrosol',
                'featured_description' => 'Also known as herbal distillates or floral waters, hydrosols are “by products” of essential oils extracted through',
                'go_to' => '/hydrosol',    
            ],

        ])->all();

        return $datas;
    }
}