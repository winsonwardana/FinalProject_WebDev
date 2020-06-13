<?php

namespace App\Http\Controllers;


use App\User;
use App\Detail;
use App\Post;
use App\Comment;

use Carbon\Traits\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('posts')
        //     ->orderBy('post_id','DESC')
        //     -> get();
    $posts = Http::withHeaders([
        'Accept' => 'application/json',
    ])->get(env('API_URL','35.240.231.119').'/api/welcome');
    $data = json_decode($posts->body(), true);    
    // dump($data);
    return view ("welcome", compact('data'));

        //  return view('detailpost', compact('post','comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
         $email = ($request->input("email"));
         $password = $request->input("password");

         $response = Http::withHeaders([
            'Accept' => 'application/json',
            

        ])->post(env('API_URL2','35.240.231.119').'/api/login', [
            "email" => $email,
            "password" => $password,
            
        ]); 
        $user = json_decode($response->body(), true);

        if($user['message'] === "Your Credential is wrong"){
            return Redirect::to(URL::previous())->with('message', 'Invalid  Username and or Passwords');
        }
        else{
            // $data = DB::table('users')
            //     -> join('details','details.detail_id','=','users.detail_id')
            //     ->where('details.detail_id',$detail_id)
            //     -> get();
                 foreach ($data as $dat) {
                    
                    Session::put('first_name',$user['first_name']);
                    Session::put('user_id',$user['user_id']);
            // dump($user);
           return Redirect::to('/');
            
        }

        }
    }

    public function store(Request $request)
    {
        $first_name =$request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            

        ])->post(env('API_URL2','35.240.231.119').'/api/signup', [
            "first_name"=>$first_name,

            "email" => $email,
            "password" => $password,
            
        ]); 
        $user = json_decode($response->body(), true);

        // $details= new Detail;

        // $details->first_name =  $request->name;
        // $details->save();
        // $detail_ids = DB::table('details')->get()->last()->detail_id;
        
        // User::create([
        //     'email' => $request->email),
        //     'password' => Hash::make($request->password),
        //     'detail_id' => $detail_ids
        // ]);

        return view('login');
    }

    public function detail($id)
    {
        // $posts = Http::withHeaders([
        //     'Accept' => 'application/json',
        // ])->get('/api/detail');
        // $data = json_decode($posts->body(), true);    
        // // dump($data);
        // return view ("welcome", compact('data'));

        // $comments = Http::withHeaders([
        //     'Accept' => 'application/json',
        // ])->get('/api/detail');
        // $comments = json_decode($comments->body(), true);    
        // dump($data);

        $response1 = Http::withHeaders([
            'Accept' => 'application/json',
        
        ])->get(env('API_URL','35.240.231.119').'/api/detailID', [
            "id" => $id
            
        ]);
        $post = json_decode($response1->body(), true);    


        $response2 = Http::withHeaders([
            'Accept' => 'application/json',
        
        ])->get(env('API_URL','35.240.231.119').'/api/detailComment', [
            "id" => $id
            
        ]);
        $comments = json_decode($response2->body(), true);    

         return view('detailpost', compact('post','comments'));


        // $post = DB::table('posts')
        // ->where('post_id',$id)
        // -> get();        

        // $comments = DB::table('comments')
        // ->join('users','users.user_id','=','comments.user_id')
        // // ->join('posts','users.post_id','=','comments.post_id')
        // ->join('details','details.detail_id','=','users.detail_id')
        // ->where('comments.post_id',$id)
        
        // ->get();
        //  return view('detailpost', compact('post','comments'));
        // //dump($comments);


    }

    public function createcomment(Request $request, $id)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            

        ])->post(env('API_URL','35.240.231.119').'/api/comment', [
            'user_id' =>$request->session()->get('user_id'),
            'post_id'=> $id,
            'comment' =>  $request->input('comment')
            
        ]); 
        return Redirect::to("/detail/$id");
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

    public function logout(Request $request) {
        Session::flush();
        $request->session()->regenerate();
        // $request->session()->flush();
        return Redirect::to("/");
    }
}
