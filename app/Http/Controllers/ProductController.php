<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use app\Http\Controllers\Controller;
use app\Models\Product;

class ProductController extends Controller {
   public function index(Request $request)
   {
	   $builder = Product::all();
	   
   }
}