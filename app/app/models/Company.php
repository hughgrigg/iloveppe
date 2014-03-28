<?php

/**
 * A generic company in the I LOVE PPE system.
 * Could be a supplier or otherwise.
 *
 * @author hugh
 */
class Company extends Eloquent
{

    protected $table = 'companies';
    protected $guarded = ['id'];
    protected $softDelete = true;
    
    public function address()
    {
        return $this->hasOne('Address');
    }

    public function brochures()
    {
        return $this->hasMany('Brochure');
    }

}
