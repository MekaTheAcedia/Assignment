<?php
namespace App\Http\Controllers;
use App\products;
use DB;
use Illuminate\Http\Request;

class productsController extends Controller {
	public function showProducts() {
		$result = products::paginate(4);
		return view('shop')->with([
			'result' => $result,
		]);
	}
	public function startProducts() {
		for ($i = 0; $i < 10; $i++) {
			$listname = ["Apple Headphone", "Apple iPod Air", "Wireless Charger", "Apple iPhone"];
			$name = $listname[rand(0, 3)];
			$price = rand(1, 100);
			$image = rand(1, 4);
			$today = date('Y-m-d H:i:s');
			DB::table('products')->insert([
				'Name' => $name,
				'Price' => $price,
				'Image' => $image,
				'created_at' => $today,
				'updated_at' => $today,
			]);
		}
		return redirect('shop');
	}
	public function addProduct(Request $request) {
		$today = date('Y-m-d H:i:s');
		DB::table('products')->insert([
			'Name' => $request->name,
			'Price' => $request->price,
			'Image' => $request->image,
			'created_at' => $today,
			'updated_at' => $today,
		]);
		return redirect('add');
	}
	public function productDetails(Request $request) {
		$result = products::where('id', $request->id_product)->get();
		return view('product')->with([
			'result' => $result,
		]);
	}
}