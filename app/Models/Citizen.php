<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
//     CREATE TABLE citizens (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//       first_name VARCHAR(50) NOT NULL,
//       last_name VARCHAR(50) NOT NULL,
//       date_of_birth DATE NOT NULL,
//       address VARCHAR(255),
//       phone_number VARCHAR(15),
//       has_driver_license BOOLEAN DEFAULT TRUE,
//       has_weapon_license BOOLEAN DEFAULT FALSE,
//       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   );

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'address',
        'phone_number',
        'has_driver_license',
        'has_weapon_license',
    ];

    protected $casts = [
        'has_driver_license' => 'boolean',
        'has_weapon_license' => 'boolean',
    ];

}
