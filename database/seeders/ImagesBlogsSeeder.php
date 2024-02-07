<?php

namespace Database\Seeders;

use App\Models\AbstractBlogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesBlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("images_blogs")->truncate();

        DB::beginTransaction();

        $csvFile = fopen(base_path("database/data/images_blogs.csv"), "r");
        //todo: create a factory for that
        while (($data = fgetcsv($csvFile, 100, ",")) !== FALSE) {
            DB::table("images_blogs")->insert([
                "image_link" => $data['0'],
            ]);
        }

        fclose($csvFile);

        DB::commit();
    }

}
