<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\ProductSize;

class ProductOptionController extends Controller
{
  public function __construct ()
  {
    $this->middleware('auth:admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
         return view('admin.product_option.create',compact('products'));
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
    public function store(Request $request)
    {
      try {

         $size= new ProductSize ();
         $size->product_size=json_encode(request('product_size'));
         $size->prize=json_encode(request('prize'));
         $size->type=json_encode(request('type'));

         $size->status=1;
         $size->save();
         return redirect('admin/product_options')->with([
           'message'=>'Product Color Add Successfully',
         ]);



      } catch (\Exception $e) {
       return $e->getMessage();

      }

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
