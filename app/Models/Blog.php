<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $result = [];


    public static function getAllBlog()
    {
        return [
            0 => [
                'id'          => '1',
                'category_id' => '1',
                'title'       => 'This is blog title One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique dictum tortor, eget iaculis magna maximus a. Suspendisse sit amet mi vitae lectus molestie egestas at et nibh. Cras pharetra odio sit amet vehicula auctor. Donec molestie efficitur eros, sed sagittis purus maximus vitae. Maecenas sed consectetur mauris, eget feugiat nulla. Vivamus nec metus quis neque accumsan ullamcorper et sit amet enim.',
                'image'       =>'blog-1.jpg'
            ],
            1 => [
                'id'          => '2',
                'category_id' => '1',
                'title'       => 'This is blog title Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique dictum tortor, eget iaculis magna maximus a. Suspendisse sit amet mi vitae lectus molestie egestas at et nibh. Cras pharetra odio sit amet vehicula auctor. Donec molestie efficitur eros, sed sagittis purus maximus vitae. Maecenas sed consectetur mauris, eget feugiat nulla. Vivamus nec metus quis neque accumsan ullamcorper et sit amet enim.',
                'image'       =>'blog-2.jpg'
            ],
            2 => [
                'id'          => '3',
                'category_id' => '1',
                'title'       => 'This is blog title Three',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique dictum tortor, eget iaculis magna maximus a. Suspendisse sit amet mi vitae lectus molestie egestas at et nibh. Cras pharetra odio sit amet vehicula auctor. Donec molestie efficitur eros, sed sagittis purus maximus vitae. Maecenas sed consectetur mauris, eget feugiat nulla. Vivamus nec metus quis neque accumsan ullamcorper et sit amet enim.',
                'image'       =>'about.jpg',
                ],
            3 => [
                'id'          => '4',
                'category_id' => '2',
                'title'       => 'This is blog title Four',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique dictum tortor, eget iaculis magna maximus a. Suspendisse sit amet mi vitae lectus molestie egestas at et nibh. Cras pharetra odio sit amet vehicula auctor. Donec molestie efficitur eros, sed sagittis purus maximus vitae. Maecenas sed consectetur mauris, eget feugiat nulla. Vivamus nec metus quis neque accumsan ullamcorper et sit amet enim.',
                'image'       =>'background.jpg'
            ],
            4 => [
                'id'          => '5',
                'category_id' => '3',
                'title'       => 'This is blog title Five',
                'description' => 'Cristiano Ronaldo dos Santos Aveiro(born 5 February 1985) is a Portuguese professional footballer who plays as a forward for and captains both Saudi Pro League club Al Nassr and the Portugal national team. Widely regarded as one of the greatest players of all time, Ronaldo has won five Ballon d\'Or awards, a record three UEFA Men\'s Player of the Year Awards, and four European Golden Shoes, the most by a European player. He has won 33 trophies in his career, including seven league titles, five UEFA Champions Leagues, the UEFA European Championship and the UEFA Nations League. Ronaldo holds the records for most appearances (183), goals (140) and assists (42) in the Champions League, most appearances (30), assists (8), goals in the European Championship (14), international goals (132) and international appearances (214). He is one of the few players to have made over 1,200 professional career appearances, the most by an outfield player, and has scored over 900 official senior career goals for club and country, making him the top goalscorer of all time.',
                'image'       =>'ronaldo.jpg'
            ],
            5 => [
                'id'          => '6',
                'category_id' => '3',
                'title'       => 'This is blog title Six',
                'description' => 'Toni Kroos (born 4 January 1990) is a German former professional footballer. Widely regarded as one of the greatest midfielders of all time, he was known for his vision, passing, crossing, and set-piece ability. Kroos played mainly as a central midfielder, but he also occasionally played as a defensive midfielder. Kroos is the most decorated German football player, as he won 34 trophies over his 17-year career.',
                'image'       =>'toni.jpeg'
            ],
            6 => [
                'id'          => '7',
                'category_id' => '4',
                'title'       => 'This is blog title Seven',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique dictum tortor, eget iaculis magna maximus a. Suspendisse sit amet mi vitae lectus molestie egestas at et nibh. Cras pharetra odio sit amet vehicula auctor. Donec molestie efficitur eros, sed sagittis purus maximus vitae. Maecenas sed consectetur mauris, eget feugiat nulla. Vivamus nec metus quis neque accumsan ullamcorper et sit amet enim.',
                'image'       =>'testimonial-3.jpg'
            ],
        ];
    }

    public static function getBlogById($id)
    {
        foreach (self::getAllBlog() as $blog)
        {
            if ($blog['id'] == $id)
            {
                return $blog;
            }
        }
    }

    public static function getBlogByCategory($id)
    {
        foreach (self::getAllBlog() as $blog)
        {
            if ($blog['category_id'] == $id)
            {
                array_push(self::$result, $blog);
            }
        }
        return self::$result;
    }

}

