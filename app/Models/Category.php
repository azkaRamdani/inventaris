<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Goods()
    {
        return $this->hasMany(Goods::class);
    }

    public static function getCategory($request)
    {
        $categories = Category::select([
            'id',
            'name',
        ]);

        return $categories;
    }
}
