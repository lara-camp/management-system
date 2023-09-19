<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_key',
        'user_id',
        'category_id',
        'attachment_id',
        'name',
        'slug',
        'quantity',
    ];

    public array $rules = [
        'category_id' => 'required',
        'attachment_id' => 'nullable',
        'name' => ['required', 'string'],
        'slug' => ['required', 'string'],
        'quantity' => ['required', 'numeric']
    ];


}
