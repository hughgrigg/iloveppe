<?php

/**
 *
 * @author hugh
 */
class AddressTableSeeder extends DatabaseSeeder
{

    public function run()
    {
        $faker = $this->getEnglishFaker();

        $companies = Company::all();

        foreach ($companies as $company)
        {
            $streetAddress = $faker->streetAddress;
            $district = $faker->streetName;
            $city = $faker->city;
            $province = $faker->state;
            $country = $faker->country;
            $postcode = $faker->postcode;

            Address::create([
                    'street_address' => $streetAddress,
                    'district' => $district,
                    'city' => $city,
                    'province' => $province,
                    'country' => $country,
                    'postcode' => $postcode,
                    'company_id' => $company->id
            ]);
        }
    }

}
