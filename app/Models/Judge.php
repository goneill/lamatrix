<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    protected $table='judges';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'court'];
//   use HasFactory; - i commented this out but have no idea what it is!

    public static function find($id)
    {

        $judge = static::all()->firstWhere('id', $id);
        return $judge;
        

    }

    public static function findOrFail($id)
    {

        $judge = static::find($id); 
        if (!$id) {

            throw new ModelNotFoundException();
        } else {
            return $id;
        }

    }

}
