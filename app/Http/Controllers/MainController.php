<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Dish;
use Database\seeders\DishesSeed;

class MainController extends Controller
{
    public function home()
    {
        return view ('home');
    }
    public function about()
    {
        return view ('about');
    }
    public function review()
    {
        $reviews = new Contact();
       return view ('review', ['reviews' => $reviews->all()]);
    }
    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:20|max:1000',
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
    public function category()
    {
       $categories=Category::all();
        return view('category', ['categories'=>$categories]);
        
        
    }
    public function category_id($id)
    {

       $category=Category::find($id);
       $dishes=Dish::where('category_id', $id)->get();
        return view('category_id', [
            'category'=>$category,
            'dishes'=>$dishes
    ]);

            
    }
    public function dish_id($id)
    {
       $dish=Dish::find($id);
        return view('dish_id', ['dish'=>$dish]);
    }
    public function find(Request$request){

        $dishes = Dish::where('name', 'LIKE', '%' . $request->search . '%')->get();
        return view ('find', ['dishes'=>$dishes]);
    }
    public function create()
    {
       
        
       /* $dishes             = new Dish();
        $dishes ->name        = '';
        $dishes ->user_id;
        $dishes ->text;
        $dishes ->category_id;
        $dishes->timestamps();
        $dishes ->save();*/
         return view ('create');
    }


}
