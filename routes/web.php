<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Phone;
use App\Http\Controllers\PhoneController;

Route::get('/', function () {
    $phones = Phone::all();
    return view('phones.index', ['phones' => $phones]);
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
        'brand' => 'required',
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'model' => 'required',
        'price' => 'nullable',
        'features' => 'required',
    ]);

    $imageName = time() . "." . $request->image->extension();
    $request->image->move(public_path('img2'), $imageName);

    Phone::create([
        'brand' => $request->input('brand'),
        'path' => $imageName,
        'model' => $request->input('model'),
        'price' => $request->input('price'),
        'features' => $request->input('features'),
]);

    return redirect()->route('phones.index');
});


Route::get('/phones/create', function () {
    return view('phones.create');
});

Route::get('/phones/{id}', function ($id) {
    $phone = Phone::find($id);
    return view('phones.show', ['phone' => $phone]);
});
Route::delete('/phones/{id}', function ($id) {
    $phone = Phone::findOrFail($id);
    if ($phone->path && file_exists(public_path('img2/' . $phone->path))) {
        unlink(public_path('img2/' . $phone->path));
    }
    $phone->delete();
    return redirect()->route('phones.index')->with('success', 'Phone deleted successfully.');
})->name('phones.destroy');
Route::get('/phones', function () {
    $phones = Phone::all();
    return view('phones.index', ['phones' => $phones]);
})->name('phones.index');

<<<<<<< HEAD
Route::get('/phones', [PhoneController::class, 'index']);
=======
Route::get('/carrinho', function () {
    return view('carrinho');
});
>>>>>>> b64bb50e01358182c255bb6cc4161ee1d653e083
