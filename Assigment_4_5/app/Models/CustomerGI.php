<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerGI extends Model
{
    public $table = 'customers_general_information';
    public $guarded = [];

    public function customer_contact_information()
    {
        return $this->belongsTo(CustomerCI::class, 'personal_id', 'personal_id');
    }
}