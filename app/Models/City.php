<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';

    protected $primaryKey = 'City_Id';

    protected $keyType = 'string';

    protected $fillable = [
        'Name',
        'CountryCode',
        'District',
        'Population',
    ];
}
