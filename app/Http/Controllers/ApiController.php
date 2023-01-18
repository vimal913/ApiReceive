<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    

    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.'2|jOlXVpv5tcDxwnEnugjPXmcBBGf1cdKcang62XNh' 
        ])->get('http://127.0.0.1:8000/api/products');
    
        $jsonData = $response->json();
          
        // dd($jsonData);
        return view('api.display', compact('jsonData'));
    }
public function insert(){
    return view('api.insert');
}
    public function store(Request $request){
        $name = $request->name;
        $detail = $request->detail;
        // dd($name);
    $responses = Http::withHeaders([
        'Authorization' => 'Bearer '.'2|jOlXVpv5tcDxwnEnugjPXmcBBGf1cdKcang62XNh' ,
    ])->post('http://127.0.0.1:8000/api/products',[
        'name' => $name,
        'detail' => $detail,
    ]);
    if($responses){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.'2|jOlXVpv5tcDxwnEnugjPXmcBBGf1cdKcang62XNh' 
        ])->get('http://127.0.0.1:8000/api/products');
    
        $jsonData = $response->json();
          
        // dd($jsonData);
        return view('api.display', compact('jsonData'));
    }
        // $jsonData = $response->json();
      
        // dd($jsonData);
    }
public function edit(Request $request){
    $id=$request->id;
    $response = Http::withHeaders([
        'Authorization' => 'Bearer '.'2|jOlXVpv5tcDxwnEnugjPXmcBBGf1cdKcang62XNh' 
    ])->get('http://127.0.0.1:8000/api/products/'.$id);

    $jsonData = $response->json();
    // dd($jsonData);
    return view('api.edit', compact('jsonData'));

}
    public function update()
    {
        $name = $request->name;
        $detail = $request->detail;
        $response = Http::put('http://127.0.0.1:8000/api/products/1', [
                    'name' =>  $name,
                    'detail' => $detail,
                ]);
  
        $jsonData = $response->json();
      
        dd($jsonData);
    }

    public function delete(Request $request)
    {
        // dd($request->id);
        $responses = Http::withHeaders([
            'Authorization' => 'Bearer '.'2|jOlXVpv5tcDxwnEnugjPXmcBBGf1cdKcang62XNh' ,
        ])->delete('http://127.0.0.1:8000/api/products/'.$request->id);
        if($responses){
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.'2|jOlXVpv5tcDxwnEnugjPXmcBBGf1cdKcang62XNh' 
            ])->get('http://127.0.0.1:8000/api/products');
        
            $jsonData = $response->json();
              
            // dd($jsonData);
            return view('api.display', compact('jsonData'));
        }
        
    }

}
