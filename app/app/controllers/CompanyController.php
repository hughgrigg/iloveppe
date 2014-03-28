<?php

/**
 *
 * @author hugh
 */
class CompanyController
extends BaseController
{
    
    protected $layout = 'layouts.master';

    public function indexAction()
    {
        $companies = Company::with('address', 'brochures')->get();
        $this->layout->content = View::make('company.index')
                ->with('companies', $companies);
    }
    
    public function locationsAction()
    {
        $locations = Address::with('company')
                ->groupBy('province')
                ->get();
        $this->layout->content = View::make('company.locations')
                ->with('locations', $locations);
    }

}
