<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch all categories from the database
        $categories = Category::all();

        // Pass the categories to the existing index view.
        return view('index', compact('categories'));
    }
}
?>
