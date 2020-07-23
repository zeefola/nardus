<?php
namespace App\Repositories;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Pick{
    public static function getFaq(){

        $datas = collect([

            // 1
             (object)[ 
                 'question' => 'What are the real health benefits of lemongrass?',
                 'answer' => 'Lemongrass is versatile. Its essential oil possesses many therapeutic properties. Lemongrass essential oil improves muscle and joint pain, and inflammation, as well as toothaches and headaches. It has an uplifting aroma which reduces depression, boosts self-esteem, confidence, hope, and mental strength. It has a broad spectrum of effects against microbial growth in the organ systems, and may combat body odour and skin diseases.',
                 ],


                 //2 
                 (object)[
                     'question' => 'How do you use lemongrass oil?',
                     'answer' => 'Lemongrass oil is applied topically. Because lemongrass essential oil is highly concentrated, it should not be used directly on the skin. For use in aromatherapy, you can inhale lemongrass oil directly. Add a few drops of lemongrass oil into carrier oil of your choice, then mix into a warm bath or massage into skin.',

                 ],
                 

                 //3
                 (object)[
                    'question' => 'Can I use lemongrass oil on my sensitive skin?',
                    'answer' => 'Lemongrass oil works effectively for all skin types, as an antiseptic and astringent. It is ideal for achieving even, glowing skin. Regular use of lemongrass oil will strengthen your skin tissues, cleanse your pores, and act as a natural toner.',

                ],


                //4 
                (object)[
                    'question' => 'Can I ingest lemongrass oil or add to food?',
                    'answer' => 'Unlike lemongrass infusions made by boiling the leaves in water, lemongrass oil is not edible. Do not swallow, or add to food or beverages. It is meant for cosmetic use.',

                ],


                //5
                (object)[
                    'question' => 'How do I guarantee the authenticity of your lemongrass products?',
                    'answer' => 'Our lemongrass line of products is created through the most ethical industry standards, and endorsed for quality by the appropriate local standards regulation agencies.',

                ],

                //6 
                (object)[
                    'question' => 'Where are Nardus lemongrass products made?',
                    'answer' => 'Our lemongrass is locally sourced from the best specimens to ensure superior quality and consistency. Growing and processing our products locally is part of our long-term goals to revive the Agriculture sector.',

                ],






        ])->all();

        return $datas;
    }
}