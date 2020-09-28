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
             'img_alt' => 'essential oils',
             'img_title' => 'benefits of essential oils',
             'featured_title' => 'Essential Oils',
             'featured_description' => 'As humans we have used traditional methods to medicate ourselves for ages, and essential oils are an important part of',
              'go_to' => '/essential-oil', 
            ],


            //2
            (object)[
                'featured_thumbnail' => '/images/sani.png',
                'img_alt' => 'lemongrass hand sanitizer',
                'img_title' => 'nardus lemongrass hand sanitizer',
                'featured_title' => 'Hand Sanitizer',
                'featured_description' => 'Hand sanitizer is often an alcohol-based gelatinous solution that’s effective against harmful agents which have the potential',
                'go_to' => '/hand-sanitizer',    
            ],


               //3
            (object)[
                'featured_thumbnail' => '/images/2.jpg',
                'img_alt' => 'hydrosol',
                'img_title' => 'benefits of lemongrass hydrosol',
                'featured_title' => 'Hydrosol',
                'featured_description' => 'Also known as herbal distillates or floral waters, hydrosols are “by products” of essential oils extracted through',
                'go_to' => '/hydrosol',    
            ],

        ])->all();

        return $datas;
    }
}