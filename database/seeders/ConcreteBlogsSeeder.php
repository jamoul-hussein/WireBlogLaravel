<?php

namespace Database\Seeders;

use App\Models\AbstractBlogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcreteBlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("concrete_blogs")->truncate();

        DB::beginTransaction();

        $csvFile = fopen(base_path("database/data/concrete_blogs.csv"), "r");
        //todo: create a factory for that
        while (($data = fgetcsv($csvFile, 100, ",")) !== FALSE) {
            DB::table("concrete_blogs")->insert([
                "content" => $data['0'],
            ]);
        }

        fclose($csvFile);

        DB::commit();
    }

}
