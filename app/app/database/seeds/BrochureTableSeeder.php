<?php

/**
 *
 * @author hugh
 */
class BrochureTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $faker = $this->getEnglishFaker();
        $faker->addProvider(new \Faker\Provider\BrochureFolder($faker));

        $companies = Company::all();

        foreach ($companies as $company)
        {
            // Add random number of brochures for this company
            $i = 0;
            while ($i < 3)
            {
                $coverImage = $faker->md5;
                $folder = $faker->folderName;

                Brochure::create([
                        'company_id' => $company->id,
                        'folder' => $folder,
                        'cover_image_path' => $coverImage
                ]);

                $i += rand(0, 3);
            }
        }
    }

}
