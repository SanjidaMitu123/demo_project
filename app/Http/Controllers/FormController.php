<?php

namespace App\Http\Controllers;
use App\Model\Form;
use App\Model\Category;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()

    {
        return view('backend.partials.home');
    }

    public function showform()

    {
        $categories=Category::select(['name','id'])->get();
        return view('backend.partials.form', compact('categories'));
    }
    

   public function info(Request $request)

   {  
      

       Form::create([
           
                  'product_name'=>$request ->input ( 'product_name'),
                  'description'=>$request -> input ('description'),
                  'price'=>$request ->input ( 'price'),
                  'category_id'=>$request -> input ('category_id')
       ]);
       return redirect() -> back()->with ('message','created sucessfully'); 
   }

   
    
   public function list()
   {
       $list=form::get();
       $categories=Category::with('categoryR');
    
       return view ('backend.partials.list',compact('list'));
   }

   public function delete($id)
    {
       $form=Form::find($id);
       if(!empty($form))
       {
           $form->delete();
           $message="data deleted Successfully";
       }else{
           $message="No data found.";
       }
        return redirect()->back()->with('message',$message);
    }

    public function viewdata($p_id)
    { 
       
        $form=Form::find($p_id);
        
            return view('backend.partials.data-view',compact('form'));
    }


}
