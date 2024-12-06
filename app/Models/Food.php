<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';

    public function search($query)
    {
        return $this->where('name', 'LIKE', '%' . $query . '%')
                    ->orWhere('food_type', 'LIKE', '%' . $query . '%');
    }
}
