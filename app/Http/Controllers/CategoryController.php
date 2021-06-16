<?php

namespace App\Http\Controllers;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showcategory()
    {
        return view('backend.partials.category');
    }



    public function insert(Request $request)

    {  
        $request -> validate([
                      'name' => 'required',
                      'description'=>'required'
 
        ]);
     
 
        Category::create([
            
                   'name'=>$request ->input ( 'name'),
                   'description'=>$request -> input ('description'),
        ]);
        return redirect() -> back()->with ('message','created sucessfully'); 
    
      }

    
      public function list()
      {
       
          $list=Category::get();
          
          return view ('backend.partials.tables',compact('list'));
      }
   
 


}
