<?php
namespace App\Http\Controllers\Admin\Product;

use App\Models\Category;
use Auth;
use Carbon\Carbon;
use Helper;
use Illuminate\Support\Str;
use Validator;
use App\ProductSize;
use App\Models\Product;
use App\Models\SubCategory;

// Models
use App\Models\ProductColor;
use Illuminate\Http\Request;
use App\Models\SellerProduct;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductForm;
use Intervention\Image\Facades\Image;

class ProductController extends Controller {

    public function __construct ()
    {
      $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        if (Auth::user()->hasRole(['seller'])) {
          $products = SellerProduct::where('seller_id', Auth::user()->id)->with(['products','products.sub_category'])->latest()->get();
          $products = $products->map(function($item, $key){
            return $item->products;
          })->paginate(10);

        }else{
          $products = Product::with('sub_category')->latest()->paginate(10);
        }
        return view('admin.products.manage', compact('products'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        try {
            $subcategories = SubCategory::all();
            return view('admin.products.create', compact('subcategories'));
        }
        catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        //dd($request->all());
        try {
            $validator = Validator::make($request->all(), [
                            'product_name' => 'required',
                            'product_title' => 'required',
                            'sub_category_id' => 'required',
                            'product_price' => 'required',
                            'product_quantity' => 'required',
                            'sku' => 'required',
                            'stock' => 'required',
                            'description' => 'required',
                            'multiple' => 'required',
                            //'multiple.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
                        ]);
            if ($validator->fails()) {
                return back()
                        ->withErrors($validator)
                        ->withInput();
            }
            if ($request->hasfile('multiple')) {
                foreach ($request->file('multiple') as $image) {
                    //$img = Image::make($image)->resize(1000, 1000);
                    $name = time().'-'.$image->getClientOriginalName();
                    Image::make($image)->resize(1000,1000)
                        ->save('uploads/documents/productimages/'.$name, 100);
                    $image_name[] = $name;
                }
//                $product = New Product();
//                $product->product_name = $request->name;
//                $product->product_title = $request->title;
//                $product->sub_category_id = $request->sub_category_id;
//                $product->type = $request->type;
//                $product->slug = Str::slug($request->title);
//                $product->product_price = $request->product_price;
//                $product->discount = $request->discount;
//                $product->start = Carbon::parse($request->start);
//                $product->end = Carbon::parse($request->end);
//                $product->product_quantity = $request->product_quantity;
//                $product->sku = $request->sku;
//                $product->stock = $request->stock;
//                $product->video_link = $request->video_link;
//                $product->multiple = json_encode($image_name);
//                $product->description = $request->description;
//                $product->color = json_encode(request('color'));
//                $product->size = json_encode(request('size'));
//                // $product->warrantly=$request->warrantly;
//                $product->status = 1;
//                $product->save();

                Product::create([
                    'product_name' => $request->product_name,
                    'product_title' => $request->product_title,
                    'sub_category_id' => $request->sub_category_id,
                    'type' => $request->type,
                    'slug' => Str::slug($request->product_name),
                    'product_price' => $request->product_price,
                    'special_price' => $request->special_price,
                    'start' =>$request->start,
                    'end' => $request->end,
                    'product_quantity' => $request->product_quantity,
                    'sku' => $request->sku,
                    'stock' => $request->stock,
                    'video_link' => $request->video_link,
                    'multiple' => json_encode($image_name),
                    'description' => $request->description,
                    'color' => json_encode(request('color')),
                    'size' => json_encode(request('size')),
                    'status' => 1,
                ]);
              }

          Helper::notifySuccess('Product Added successfully');
          return redirect(route('admin.products.index'));
      }
      catch(\Exception $e) {
          Helper::notifyError($e->getMessage());
          return back();
      }
  }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id) {
            $product = Product::where('id', $id)->first();
            return $product;
            return view('admin.products.view', compact('product'));
        }
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id) {
            try {
                $subcategories = SubCategory::all();
                
                $product = Product::where('id', $id)->first();
                //return $product->category->name;
                return view('admin.products.edit', compact('product', 'subcategories'));
            }
            catch(\Exception $e) {
                Helper::notifyError($e->getMessage());
                return back();
            }
        }
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id) {

            try {
                //return $request->all();
                $product = Product::findOrFail($id);
                
                if ($request->hasfile('multiple')) {
                    foreach ($request->file('multiple') as $image) {
                        //$img = Image::make($image)->resize(1000, 1000);
                        $name = time().'-'.$image->getClientOriginalName();
//                        $img->save('uploads/documents/productimages/'.$name, 10);
                        Image::make($image)->resize(1000,1000)
                                           ->save('uploads/documents/productimages/'.$name, 100);
                        $image_name[] = $name;
                    }
                    $product->multiple = json_encode($image_name);

                }    

                    $product->product_name = $request->product_name;
                    $product->product_title = $request->product_title;
                    $product->sub_category_id = $request->sub_category_id;
                    $product->type = $request->type;
                    $product->slug = Str::slug($request->product_name);
                    $product->product_price = $request->product_price;
                    $product->special_price = $request->special_price;
                    $product->start = $request->start;
                    $product->end = $request->end;
                    $product->product_quantity = $request->product_quantity;
                    $product->sku = $request->sku;
                    $product->stock = $request->stock;
                    $product->video_link = $request->video_link;
                    $product->description = $request->description;
                    $product->color = json_encode(request('color'));
                    $product->size = json_encode(request('size'));
                    // $product->warrantly=$request->warrantly;
                    $product->status = 1;
                    $product->save();


                  
                //return 'success';
                Helper::notifySuccess('Product Updated successfully');
                return redirect(route('admin.products.index'));
          }
          catch(\Exception $e) {
              Helper::notifyError($e->getMessage());
              return back();
          }

        }
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id) {
            try {
                $product = Product::findorfail($id);
                $product->delete();
                Helper::notifySuccess('Product Delete successfully');
                return redirect(route('admin.products.index'));
            }
            catch(\Exception $e) {
                return redirect(route('admin.products.index'))->with(['message' => $e->getMessage() ]);
            }
        }

        public function searchProducts(Request $request){
            return response()->json([
                'products' =>Product::where('id','LIKE','%'.$request->q.'%')->whereNotIn('status',[0])->get()->map(
                    function($product){
                        return ['id'=>$product->id,'product_name'=>$product->product_name,'product_images' => $product->multiple];
                })
            ]);
        }
    }
