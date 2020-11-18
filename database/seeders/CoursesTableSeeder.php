<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Thanh Nhạc',
                'name' => 'Quốc Anh',
                'description' => 'Hát hay không bằng hay hát',
                'image' => '/img/course_1.jpg',
                'slug' => str_slug('Thanh nhac')
            ],
            [
                'title' => 'Guitar',
                'name' => 'Thanh Xuân',
                'description' => 'Có kiên trì mới có thành công',
                'image' => '/img/event_1.jpg',
                'slug' => str_slug('Guitar')
            ],
            [
                'title' => 'MC',
                'name' => 'Thanh Nga',
                'description' => 'Không ai sinh ra đã thành công liền',
                'image' => '/img/event_1.jpg',
                'slug' => str_slug('MC')
            ],           
        ];
        DB::table('course')->insert($data);
    }
}
