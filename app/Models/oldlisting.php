<?php
namespace App\Models;

class Listing_Old{
    public static function all (){
        return[
            [
                'id'=> 1,
                'title'=> 'title one',
                'description' => "lorem ipson"
            ],
            [
                'id'=> 2,
                'title'=> 'title two',
                'description' => "lorem ipson 2"
            ],
        ];

    }
    public static function find ($id){
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id']== $id) {
                return $listing;
            }
        }
    }
}