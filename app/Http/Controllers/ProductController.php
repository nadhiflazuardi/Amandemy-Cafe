<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Amandemy Cafe',
            'products' => [
                [
                    'name' => 'Espresso',
                    'picture' => asset('images/espresso.jpg'),
                    'price' => 'Rp. 18.000',
                    'description' => 'Espresso adalah minuman kopi khas Italia yang disajikan dalam cangkir kecil. Ini dibuat dengan mengekstrak kopi yang sangat pekat dari bubuk kopi halus...'
                ],
                [
                    'name' => 'Macchiato',
                    'picture' => asset('images/macchiato.jpg'),
                    'price' => 'Rp. 20.000',
                    'description' => 'Macchiato adalah minuman kopi yang berasal dari Italia yang terdiri dari espresso yang dicampur dengan sedikit susu atau busa susu. Nama "macchiato"...'
                ],
                [
                    'name' => 'Latte',
                    'picture' => asset('images/latte.jpg'),
                    'price' => 'Rp. 25.000',
                    'description' => 'Latte adalah minuman kopi yang populer yang terdiri dari espresso dicampur dengan susu panas dan ditutupi dengan lapisan busa susu. Rasio kopi dengan...'
                ],
                [
                    'name' => 'Cappucino',
                    'picture' => asset('images/cappucino.jpg'),
                    'price' => 'Rp. 19.000',
                    'description' => 'Cappucino adalah minuman kopi yang terdiri dari espresso, susu panas, dan busa susu. Minuman ini memiliki rasio kopi dengan susu yang seiumbang, yaitu...'
                ],
            ]
        ]);
    }
}
