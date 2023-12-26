<?php

namespace Database\Seeders;

use App\Models\AbstractBlogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbstractBlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("abstract_blogs")->truncate();

        DB::beginTransaction();

        $csvFile = fopen(base_path("database/data/abstract_blogs.csv"), "r");

        while (($data = fgetcsv($csvFile, 100, ",")) !== FALSE) {
            DB::table("abstract_blogs")->insert([
                "name" => $data['0'],
                "description" => $data['1'],
                "category" => $data['2'],
            ]);
        }

        fclose($csvFile);

        DB::commit();
    }

}
