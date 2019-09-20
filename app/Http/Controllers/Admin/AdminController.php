<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\User;
use App\Models\Product;
use Helper;
use App\Models\SellerProduct;



class AdminController extends Controller
{
    public function __construct()
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
        return view('admin.home.home');
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
        //
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

    public function contact(){
      try {
        $contacts=Contact::all();
        return view('admin.contact.index',compact('contacts'));

      } catch (\Exception $e) {
        return $e->getMessage();

      }

    }
 public function view_contact($id)
 {

    try {
          $contact=Contact::findorfail($id);
           return view('admin.contact.view',compact('contact'));
        } catch (\Exception $e) {
          return $e->getMessage();

      }

  }

  public function users()
  {

    try {
      $users=User::all();
      return view('admin.users.users',compact('users'));

    } catch (\Exception $e) {

    }

  }
 public function get_seller_product()
 {
   try {
      $s_products=Product::where('status',0)->get();
      return view('admin.seller_product.manage',compact('s_products'));

   } catch (\Exception $e) {
     return $e->getMessage();

   }

 }

 public function updateStatus(Request $request , $id)
 {
   try {
     $status = Product::findOrFail($id);
     $status->status = $request->status;
     $status->save();

     Helper::notifySuccess(' Product Status Updated ');
     return back();
   } catch (\Exception $e) {
     Helper::notifyError($e->getMessage());
     return back();
   }
 }



}
