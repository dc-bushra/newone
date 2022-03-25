<?php

use App\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(


                // UserTableSeeder::class,
                // SubjectTableSeeder::class,
                // PaperTypeTableSeeder::class,
                // ReferenceTableSeeder::class,
                // CategoryTableSeeder::class,
                // TagsTableSeeder::class,
                AcademicLevelSeeder::class,
                CountrySeeder::class,
                DatabaseSeeder::class,
                DeadlineSeeder::class,
                FareSeeder::class,
                PaperTypeSeeder::class,
                ReferenceStyleSeeder::class,
                SubjectSeeder::class,
                WebSettingTableSeeder::class,
                // ServiceTableSeeder::class,

        );
    }
}
