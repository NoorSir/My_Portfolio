<?php

namespace App\Http\Controllers\frontend;

use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  

class HomeController extends Controller
{
    //
    public function  index(){
      return view('frontend.index');
    }

    public function indexform()
    {
        
        return view('frontend.index');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required'
        ]);
  
        contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
