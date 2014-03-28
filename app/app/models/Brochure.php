<?php

/**
 *
 * @author hugh
 */
class Brochure extends Eloquent
{

    protected $guarded = ['id'];
    
    public function company()
    {
        return $this->belongsTo('Company');
    }

}
