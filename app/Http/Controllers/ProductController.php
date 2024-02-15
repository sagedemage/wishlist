<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DateTime;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function get(int $id): JsonResponse {
        /* READ */
        $product = DB::table('products')->where('id', $id)->first();
        return new JsonResponse([
            'name' => $product->name,
            'price' => $product->price,
        ]);
    }

    public function add(Request $request): JsonResponse {
        /* CREATE */
        $status = DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        if ($status == false) {
            return new JsonResponse([
                'err_msg' => 'Unable to add product',
            ]);
        }
        return new JsonResponse([
            'msg' => 'Added product',
        ]);
    }

    public function update(Request $request): JsonResponse {
        /* UPDATE */
        $status = DB::table('products')->where('id', $request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'updated_at' => Carbon::now(),
        ]);
        if ($status == false) {
            return new JsonResponse([
                'err_msg' => 'Unable to update product',
            ]);
        }
        return new JsonResponse([
            'msg' => 'Updated product',
        ]);
    }

    public function delete(int $id): JsonResponse {
        /* DELETE */
        $status = DB::table('products')->where('id', $id)->delete();
        if ($status == false) {
            return new JsonResponse([
                'err_msg' => 'Unable to delete product',
            ]);
        }
        return new JsonResponse([
            'msg' => 'Deleted product',
        ]);
    }
}
