<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'price',
        'features',
        'image',
        'path',
    ];
    
    public function index(Request $request)
{
    $letter = $request->input('letter');
    $phones = Phone::query();

    if ($letter) {
        $phones->where('brand', 'LIKE', $letter . '%');
    }

    $phones = $phones->get();

    return view('phones.index', compact('phones'));
}
}