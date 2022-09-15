<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function getContacts($id = null)
{
    $contacts = [
        1 => ['name' => 'Name 1', 'phone' => '1234567890'],
        2 => ['name' => 'Name 2', 'phone' => '2345678901'],
        3 => ['name' => 'Name 3', 'phone' => '3456789012'],
    ];
    if (isset($id)) {

        abort_unless(isset($contacts[$id]), '404');
        return $contacts[$id];
    } else {
        return $contacts;
    }
}

function getCompanies($id = null)
{
    $companies = [
        1 => ['name' => 'Company One', 'contacts' => 3],
        2 => ['name' => 'Company Two', 'contacts' => 5],
    ];
    if (isset($id)) {

        abort_unless(isset($companies[$id]), '404');
        return $companies[$id];
    } else {
        return $companies;
    }
}

Route::get('/', function () {

    $html = "
   
    ";
    // return $html;

    return view('welcome');
});

Route::get('/contacts', function () {
    $contacts = getContacts();
    $companies = getCompanies();
    return view('contacts.index', compact('contacts', 'companies'));
})->name('contacts.index');


Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    $contact = getContacts($id);
    return view('contacts.show')->with('contact', $contact);
})->whereNumber('id')->name("contacts.show");

// Route::get('/company/{name?}/{date?}', function ($name = null, $date = null) {
//     if ($name) {
//         return "Company " . $name;
//     } else {
//         return "All Companies";
//     }
// })->whereAlpha('name');
