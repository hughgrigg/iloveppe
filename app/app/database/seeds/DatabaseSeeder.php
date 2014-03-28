<?php

class DatabaseSeeder extends Seeder
{

    protected $englishFaker;
    protected $chineseFaker;

    public function getEnglishFaker()
    {
        if (empty($this->englishFaker))
        {
            $this->englishFaker = Faker\Factory::create('en_EN');
        }
        
        return $this->englishFaker;
    }
    
    public function getChineseFaker()
    {
        if (empty($this->chineseFaker))
        {
            $this->chineseFaker = Faker\Factory::create('zh_CN');
        }
        
        return $this->chineseFaker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CompanyTableSeeder');
        $this->call('AddressTableSeeder');
        $this->call('BrochureTableSeeder');
    }

}
