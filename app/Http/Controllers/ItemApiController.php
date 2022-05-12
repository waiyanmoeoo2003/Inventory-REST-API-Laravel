<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Item::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item=new Item();
        $item->name=$request->name;
        $item->category_id=$request->category_id;
        $item->code=$request->code;
        $item->qty=$request->qty;
        $item->buy_price=$request->buy_price;
        $item->sell_price=$request->sell_price;
        $item->sold_out_qty=$request->sold_out_qty;
        $item->status=0;
        $item->save();

        return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item= Item::find($id);
        return response()->json([
            "name"=>$item->name,
            "category"=>$item->category->name,
            "code"=>$item->code,
            "qty"=>$item->qty,
            "buy_price"=>$item->buy_price,
            "sell_price"=>$item->sell_price,
            "sold_out_qty"=>$item->sold_out_qty,
            "status"=>$item->status,
        ]);
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
        $item = Item::where('id',$id)->update($request->all());

        return Item::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Item::find($id);
        $item->delete();
        return $item;
    }
}
