<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order , OrderDetail $orderDetail , Cart $idcart)
    {
        $validatedData = $request->validate([
            'phone'=>'required|min:10|max:10',
            'adress'=>'required|min:5',
            'comment'=>'required|min:5',
        ]);
        
        $validatedData['total']=$request->input('total');
        $validatedData['city_id']=$request->input('city');
        $validatedData['restaurant_id']=$request->input('restaurant');
        $validatedData['user_id']=Auth::user()->id;
        Order::create($validatedData);

        $id =DB::getPdo()->lastInsertId();
        // order details:
        foreach (Cart::content() as $product) {
            $validatedData1['quantity']=$request->input('qty');
            $validatedData1['price']=$request->input('price');
            $validatedData1['product_id']=$product->id;
            $validatedData1['order_id']=$id;
            OrderDetail::create($validatedData1);
        }
        Cart::destroy($idcart);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
