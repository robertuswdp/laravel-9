<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Satine Zaneta",
        "body"   => "ssLorem ipsum dolor sit amet consectetur adipisicing elit. Rerum architecto quisquam recusandae blanditiis illum fugit consectetur dignissimos nostrum qui explicabo error hic asperiores alias omnis, placeat repellat impedit est expedita voluptates atque sit? Enim soluta recusandae hic? Dolore ipsum est nemo quos, consequatur labore aperiam incidunt! Sint unde ex laborum delectus. Aspernatur eius esse consectetur soluta repellendus consequatur quam explicabo delectus voluptatibus nobis nulla, voluptas odit perferendis perspiciatis reprehenderit ab neque vitae tempore, minus labore optio. Quis, amet incidunt deserunt totam nobis tempore mollitia molestias delectus veritatis est fugit. Consectetur repellendus nobis reiciendis consequatur cupiditate, maiores non quas illo officiis!"
    ],
    [
        "" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Abi Mana",
        "body"   => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, eaque minima repellendus assumenda quis vitae sequi. Delectus quis, sunt commodi neque facilis natus odio ad quam a. Deleniti, in nam. Debitis esse dolore, nihil est ducimus vitae quisquam illo officia, delectus eius expedita rerum voluptas quae explicabo vel doloribus animi tenetur doloremque neque! Cupiditate possimus laudantium aperiam, vel consequuntur voluptatem tempora iste minima eum hic quod eveniet recusandae veritatis. Qui laudantium provident ex voluptatem. Eos, similique eaque sapiente magnam esse corrupti itaque aliquid sit modi incidunt enim repudiandae temporibus vero non iste earum? Aliquam, aliquid ratione optio a deleniti quam eligendi tempora vel dolor asperiores odit alias sint odio harum nemo quisquam totam eius possimus dolorem pariatur magni? Incidunt, laudantium."
    ],
    [
        "title" => "Judul Post Ketiga",
        "slug" => "judul-post-ketiga",
        "author" => "Raffi Ahmad",
        "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis asperiores reprehenderit voluptates inventore laudantium omnis dicta labore, ea ullam vero doloremque molestias non nam debitis autem at quidem accusantium culpa ut sed reiciendis? Possimus nesciunt fuga voluptate sed sit vel qui adipisci, atque quisquam praesentium aliquam soluta expedita ratione temporibus ex incidunt obcaecati provident? Quo, vel! Consequatur praesentium qui voluptatibus facere sunt, animi beatae ea nesciunt est temporibus dolores veniam itaque dicta velit tenetur sint. Atque iusto consequuntur sed doloremque eveniet doloribus sunt quidem id nihil, similique dolorum quibusdam vitae tempore adipisci reprehenderit mollitia exercitationem optio ratione eius distinctio eos esse repudiandae. Impedit ratione est odio mollitia sequi, dolore laboriosam, voluptates excepturi voluptas perspiciatis maiores, beatae totam optio sit temporibus rerum nisi corrupti fugiat tenetur expedita voluptatibus sapiente dicta numquam facere! Magnam sunt maxime fuga dolores expedita ullam eveniet nihil in, a harum neque. Excepturi iure officiis illo at totam!"
    ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug); 
    }
}