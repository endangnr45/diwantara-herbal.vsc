<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Produk Pertama",
            "slug" => "produk-pertama",
            "name" => "Madu",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis repellat mollitia ratione ipsum non, porro esse inventore, deserunt assumenda officiis id doloribus blanditiis in eos laborum quo, est consectetur error commodi numquam. Doloribus perferendis voluptate dolores animi dolore placeat amet, aspernatur perspiciatis dignissimos ad distinctio, vel qui commodi earum eius a eveniet? Aliquam dolore eligendi a error dicta aspernatur placeat, odit magnam ipsum dolor illum adipisci numquam autem, obcaecati, ad perferendis iste. Totam odit architecto repellat officia sit saepe et.",
            "image" => "img/madu.jpg"
        ],
        [
            "title" => "Produk Kedua",
            "slug" => "produk-kedua",
            "name" => "Susu",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur tenetur error debitis officia nemo. Consectetur est doloremque cupiditate officiis quidem, nam quae sit nesciunt, dolor aliquam perferendis id quia placeat laudantium praesentium laborum consequatur sequi culpa ut repellat quas fugiat suscipit natus odio? Eveniet quod, laboriosam officia nulla corrupti est veritatis optio, dicta nostrum consequatur aliquam quisquam, ipsa amet culpa nam asperiores totam quidem neque numquam iusto maxime sed tempore! Laborum distinctio natus modi ut voluptates id at aliquid eos eum, voluptas quia cum blanditiis fuga rem ducimus voluptate ullam ea pariatur sequi minima illum a consequuntur neque. Tenetur, odit.",
            "image" => "img/susu.jpg"
        ],
    ];

    public static function all(){
        return collect (self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
