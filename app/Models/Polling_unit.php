<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polling_unit extends Model
{
    use HasFactory;
    protected $table = "polling_unit";
    protected $id = "uniqueid";

    protected $fillable = [
        'polling_unit_id',
        'ward_id',
        'lga_id',
        'uniquewardid',
        'polling_unit_number',
        'polling_unit_name',
        'polling_unit_description',
        'lat',
        'long',
        'entered_by_user',
        'date_entered',
        'user_ip_address'
    ];
}
