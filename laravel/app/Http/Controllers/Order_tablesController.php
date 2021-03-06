<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_table;
use App\Models\Picker;
use App\Models\Cart;
use Validator;

class Order_tablesController extends Controller
{
    //データ取得処理
    public function OrderList(){
        // $orders = Order_table::orderBy('onum','asc')->get();
        $pickers = Picker::orderBy('pid','asc')->get();
        // cartstableとitemstableをinnerjoinして取得
        // $orderDetail = Cart::join('items','carts.oiid','=','items.iid')
        //         ->SELECT('carts.onum','carts.oiid','carts.sprice','items.iname','items.iprice','items.pic','items.shop','items.cold')
        //         ->get();
        $orders = Order_table::
            leftjoin('pickers','order_tables.pid','=','pickers.pid')
                // ->SELECT('carts.onum','carts.oiid','carts.sprice','items.iname','items.iprice','items.pic','items.shop','items.cold')
            ->get();
        // ピッカー未割当
            $pickerTab = array();
        // ピッカー配送中
            $deliveryTab = array();
        // ピッカー配送完了
            $compTab = array();

        // Order_tableのデータ整形処理
            foreach($orders as $order){
                if($order["pid"] == 0){
                    array_push($pickerTab,$order);
                } elseif ($order["comp"] == 0) {
                    array_push($deliveryTab,$order);
                } elseif ($order["comp"] == 1){
                    array_push($compTab,$order);
                }
            }
        return view('manage/index',[
            'orders' => $orders,
            'pickers'=> $pickers,
            'pickerTab'=> $pickerTab,
            'deliveryTab'=> $deliveryTab,
            'compTab'=> $compTab
        ]);    
    }
    // ピッカー更新処理
    public function PickerAssign(Request $request){
        foreach ($request->onum as $index => $onum) {
            // ->get()の中から最初の一つを取り出す。
            Order_table::where('onum',$onum)
                        ->update(['pid' => $request->picker_id[$index]],['timelimit' => $request->limit_time[$index]]);
            // Order_table::find($onum)
            // ->upadate(['timelimit' => $request->limit_time[$index]],
            //         ['pid' => $request->picker_id[$index]]);
        }

        return redirect('/manage/index');

        // echo '<pre>';
        // var_dump($request);
        // echo '</pre>';
    }
}
