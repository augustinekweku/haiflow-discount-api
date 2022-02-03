<?php

namespace App\Http\Controllers;

use App\Models\Discount_codes;
use Illuminate\Http\Request;

class DiscountCodesController extends Controller
{
    public function PostCode($code)
    {
        $discount_code = Discount_codes::create([
            'code' => $code,
        ]);
        return $discount_code;
    }

    public function getAllCodes()
    {
        return Discount_codes::orderBy('id', 'desc')->get();
    }
    public function updateCodeStatus($code)
    {
        return Discount_codes::where('code', $code)->update([
            'status' => 'used'
        ]);
    }
}
