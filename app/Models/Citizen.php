<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Region;
use App\Models\Specialist;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'passport', 'region_id', 'city_id', 'gender', 'specialist', 'phone_number', 'birthdate', 'skill'];

    public static function regionName($id)
    {    
        return Region::where('id',$id)->first();   
    }

    public static function specialistName($id)
    {    
        return Specialist::where('id',$id)->first();   
    }
}
