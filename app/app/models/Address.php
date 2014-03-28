<?php

/**
 * 
 * @author hugh
 */
class Address
        extends Eloquent
{

    protected $table = 'addresses';
    protected $guarded = ['id'];

    public function company()
    {
        return $this->belongsTo('Company');
    }

}
