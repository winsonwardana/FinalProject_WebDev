<?php
namespace App\Http\Controllers;

use App\User;
use App\Detail;
use App\Admin;

use App\Post;

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
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::table('posts')
        //                 ->orderBy('post_id','DESC')
        //                 -> get();

        $posts = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get('http://127.0.0.1:8000/api/loadPost');
        $data = json_decode($posts->body(), true);
        // dump($data);
        return view ("dashboardpost", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $username = ($request->input("username"));
        $password = $request->input("password");

        $response = Http::withHeaders([
            'Accept' => 'application/json',
            

        ])->post('http://127.0.0.1:8000/api/admin', [
            "username" => $username,
            "password" => $password,
            
        ]); 
        $user = json_decode($response->body(), true);

        if($user['message'] === "Your Credential is wrong"){
            return Redirect::to(URL::previous())->with('message', 'Invalid  Username and or Passwords');
        }
        else{
            
           return Redirect::to('/');
            
        }

    
    

        
        // $admin = Admin::all()->where('username',  $username)->where('password',$password);
        // $count = $admin->count();
        // if ($count == 0) {
        //     return Redirect::to(URL::previous())->with('message', 'Invalid  Username and or Passwords');
        //     }
        //     else{
        //         return Redirect::to("/dashboard-post");   
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $counts = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get('http://localhost:8000/api/getAllPost');
        $test = json_decode($counts->body(),true);
        $count = $test['message'];
        // $user = json_decode($count->body(), true);
        // dump($count);

        if ($count == 0) {
            $post_id = 1;
            
        }
        else{
            // $post_id = DB::table('posts')->get()->last()->post_id;
            $post_id = Http::get('http://localhost:8000/api/getLastID'); 

            $post_id += 1;
        }

        $image = $request->file('foto');
        $input['imagename'] =  $post_id.'.'.$image->getClientOriginalExtension();
        $dp_url = $input['imagename'];
        $destinationPath = public_path('/assets/post/');
        $image->move($destinationPath, $input['imagename']);

        $response = Http::withHeaders([
            'Accept' => 'application/json',
        ])->post('http://127.0.0.1:8000/api/createPost',[
            "img_url" => $dp_url,
            "title" =>$request->input('title'),
            "description" => $request->input('description')
        ]);

         return Redirect::to("/dashboard-post");
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
    public function delete($id)
    {
        // DB::table('posts')
        // ->where('post_id',$id)
        // ->delete();
        $delete = Http::withHeaders([
            'Accept' => 'application/json',
        ])->delete('http://127.0.0.1:8000/api/delete/'.$id);
        
        return Redirect::to("/dashboard-post");

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
        $data = DB::table('posts')
        ->where('post_id',$id)
        -> get();

        return view('dashboardupdate', compact('data'));
    }
    public function executeUpdate(Request $request, $id){
        
            $image = $request->file('foto');
            
            if($image == ""){
                $response = Http::withHeaders([
                    'Accept' => 'application/json',
                ])->get('http://127.0.0.1:8000/api/getImgUrl/'.$id);
                $post = json_decode($response->body(),true);

                foreach ($post as $data) {
                    
                    $input['imagename'] = $data['img_url'];
                    $dp_url = $input['imagename'];
                }
                
            }else{

                $input['imagename'] =  $id.'.'.$image->getClientOriginalExtension();
                $dp_url = $input['imagename'];
                $destinationPath = public_path('/assets/post/');
                $image->move($destinationPath, $input['imagename']);
            }
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->patch('http://127.0.0.1:8000/api/updatePost/'.$id,[
                "img_url" => $dp_url,
                "title" =>$request->input('title'),
                "description" => $request->input('description')
            ]);
            // $data = json_decode($response->body(), true);

            // dump($data);
    
            // $post = [
            //     'img_url' => $dp_url,
            //     'title' => $request->input("title"),
            //     'description' => $request->input("description"),
            // ];
            // Post::where('post_id', $id)->update($post);
        
        
    return Redirect::to("/dashboard-post");
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
