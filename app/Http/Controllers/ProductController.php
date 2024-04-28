<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 10.99,
            'description' => 'This is product 1 description.'
        ],
        [
            'id' => 2,
            'name' => 'Product 2',
            'price' => 19.99,
            'description' => 'This is product 2 description.'
        ],
        [
            'id' => 3,
            'name' => 'Product 3',
            'price' => 29.99,
            'description' => 'This is product 3 description.'
        ],
        [
            'id' => 4,
            'name' => 'Product 4',
            'price' => 39.99,
            'description' => 'This is product 4 description.'
        ]
    ];

    public function index()
    {
        return response()->json(['message' => 'Display all products']);
    }

    public function store(Request $request)
    {
        return response()->json(['message' => 'Product created successfully']);
    }

    
    public function show($id)
    {
        return response()->json(['message' => 'Display product with ID: ' . $id]);
    }

    
    public function update(Request $request, $id)
    {
        return response()->json(['message' => 'Product with ID: ' . $id . ' updated successfully']);
    }

    
    public function destroy($id)
    {
        return response()->json(['message' => 'Product with ID: ' . $id . ' deleted successfully']);
    }

    public function uploadImageLocal(Request $request)
    {
        return response()->json(['message' => 'Image successfully stored in local disk driver']);
    }

    
    public function uploadImagePublic(Request $request)
    {
        return response()->json(['message' => 'Image successfully stored in public disk driver']);
    }
}

