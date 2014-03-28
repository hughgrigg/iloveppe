<?php

/**
 *
 * @author hugh
 */
class CompanyTableSeeder
extends DatabaseSeeder
{

    public function run()
    {
        $englishFaker = $this->getEnglishFaker();
        $chineseFaker = $this->getChineseFaker();
        
        for ($i = 0; $i < 50; $i++)
        {
            $englishName = $englishFaker->company
                    . ' '
                    . $englishFaker->companySuffix;
            $chineseName = $chineseFaker->companyPrefix
                    . $chineseFaker->companySuffix;
            $url = $englishFaker->url;
            
            Company::create([
                    'english_name' => $englishName,
                    'chinese_name' => $chineseName,
                    'url' => $url
            ]);
            
            
        }
    }

}
