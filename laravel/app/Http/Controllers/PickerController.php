<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_table;
use App\Models\Cart;
use App\Models\Item;

class PickerController extends Controller

{
    public function listall(){
        $order_tables = Order_table::where('comp', '0')->orderBy('otime', 'asc')->get();
        return view('picker/list-all', [
        'order_tables' => $order_tables
    ]);
    }


    public function listfixed(){
        $order_tables = Order_table::where('comp', '1')->orderBy('otime', 'asc')->get();
        return view('picker/list-fixed', [
        'order_tables' => $order_tables
    ]);
    }

    public function orderdetails($onum){
        $cartData = Cart::where('onum', $onum)->get();
        $items = [];

        foreach ($cartData as $cart){
            $itemId = $cart['oiid'];//カートの中のアイテムの個別idを取得
            $item = Item::where('iid', $itemId)->get();
            $items[] = $item;
        }

        // dd($items);
        return view('picker/order-details', [
            'items' => $items
            ]);
    }




}
