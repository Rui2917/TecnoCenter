<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Phones;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/sobre', function () {
    return view('Sobre');
});

Route::get('/marcas', function () {
    return view('marcas');
});

Route::get('/contatos', function () {
    return view('contatos');
});

Route::post('/phones/store', function (Request $request) {
    $request->validate([
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'brand' => 'required',
        'model' => 'required',
        'price' => 'required|numeric',
        'features' => 'required',
        'release_date' => 'nullable|date',
    ]);

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $imageName = time() . "." . $request->image->extension();
        $request->image->storeAs('phone_images', $imageName, 'public');
    } else {
        return back()->withErrors(['image' => 'Invalid image file.']);
    }

    Phones::create([
        'image_path' => $imageName,
        'brand' => $request->input('brand'),
        'model' => $request->input('model'),
        'price' => $request->input('price'),
        'features' => $request->input('features'),
        'release_date' => $request->input('release_date'),
    ]);

    return redirect()->route('phones.index');
});

Route::get('/phones/create', function () {
    return view('phones.create');
});

Route::get('/phones/{id}', function ($id) {
    $phone = Phones::find($id);
    return view('phones.show', ['phone' => $phone]);
});

Route::get('/phones', function () {
    $phones = Phones::all();
    return view('phones.index', ['phones' => $phones]);
})->name('phones.index');
