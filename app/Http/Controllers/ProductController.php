<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    //********************************************************************************   index  ********************************************************************************
    public function index()
    {
        $product = Product::get();
//        $category= Category::all();
        return view('product.index')->with(compact('product'));
    }
    //**************************************************************************************************************************************************************************





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */





    //********************************************************************************   create  *******************************************************************************
    public function create()
    {
        $users=User::all();
        $categories = Category::all();
        return view('product.createProduct')->with('categories', $categories)->with('users',$users);
    }
    //**************************************************************************************************************************************************************************


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   store  ********************************************************************************
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'product_Name'=>'required',
            'cost_price'=>'required|numeric',
            'sales_price'=>'required|numeric',
            'labled_price'=>'required|numeric',
            'weight'=>'required|numeric',
             'category_id'=>'required'

        ],[
            'product_Name.required' =>'Product name is required',
            'cost_price.required'=> 'Cost price is required',
            'sales_price.required'=> 'Sales price is required',
            'labled_price.required'=> 'Labled price is required',
            'weight.required'=> 'Weight should be grams'


        ]);

        Product::create($validateData);
//        Product::create($request->all());

        return redirect()->route('product.index')->with('alert', 'Data added for product table successfully!'); //product=product = product kiyana folder name (views wala thiyana ) category= catagory.blade.php
        //return redirect('product.index')->with('add','Data added to product table successfully');
    }
    //**************************************************************************************************************************************************************************



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   show  ********************************************************************************
    public function show(Product $product)
    {
        $user = User::all();
        return view('product.showProduct', compact('product'))->with('user',$user);
    }
    //**************************************************************************************************************************************************************************





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   edit  ********************************************************************************
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('product.edit', compact('product'))->with('categories',$categories);

        //dd($product);
    }
    //**************************************************************************************************************************************************************************






    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   update  ********************************************************************************
    public function update(Request $request, Product $product)
    {
//        $product->update($request->all());
        //return redirect()->route('product.index');


        $this->Validate($request,[
            'product_Name'=>'required',
            'cost_price'=>'required|numeric',
            'sales_price'=>'required|numeric',
            'labled_price'=>'required|numeric',
            'weight'=>'required|numeric',
//            'Expire_date'=>'required',
            'category_id'=>'required'

        ],[
            'product_Name.required' =>'Product name is required',
            'cost_price.required'=> 'Cost price is required',
            'sales_price.required'=> 'Sales price is required',
            'labled_price.required'=> 'Labled price is required',
            'weight.required'=> 'Weightis required',
//            'Expire_date.required'=> 'Expire date is required',
            'category_id.required'=> 'category is required'

        ]);


                $product->update($request->all());

        return redirect()->route('product.index')->with('alert', 'Data updated for product table successfully!');


    }
    //***************************************************************************************************************************************************************************





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   destroy  ********************************************************************************
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('alert', 'Data deleted from product table successfully!');
    }
    //***************************************************************************************************************************************************************************


    //********************************************************************************   destroy  ********************************************************************************
    public function search()
    {
        // $search_text = $_GET['query'];
        // $product = Product::where('product_Name', 'LIKE', '%'.$search_text.'%')->with('category')->get();
        // return view('product.search', compact('product'));
    }
    //***************************************************************************************************************************************************************************




    public function form()
    {
        return view('createProduct');
    }

    public function productPost(Request $request)
    {
        alert()->success('we will contact you soon')->persistent('Close')->autoclose(3500);
        return back();
    }








    public function productreport()
    {
        $product = Product::get();
        return view('reports.productreport')->with(compact('product'));
    }

    //==============================================================API=======================================================

    public function viewcategories(){
        $categories = Category::get();
        return $categories;
    }

    public function viewcategoryproducts($id){
        $products = DB::table('products')->where('category_id',$id)->get();
        return $products;

    }

}
