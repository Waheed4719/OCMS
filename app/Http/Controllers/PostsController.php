<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Post;
use App\User;
class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      if(Auth::guard('therapist')->check()){
          $this->middleware('auth:therapist');
      }
      else{
      // $this->middleware('auth', ['except' =>['index', 'show']]);
    }
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $TI = Post::all()->where('category','Teenage Issues')->count();
      $MI = Post::all()->where('category','Marital Issues')->count();
      $PI = Post::all()->where('category','Parental Issues')->count();
      $PP = Post::all()->where('category','Peer Pressure')->count();
        $posts = Post::orderBy('created_at', 'asc')->paginate(4);
        $ALL = $posts->count();
        return view('posts.index')->with('posts', $posts)->with(compact('TI','MI','PI','PP','ALL'));

    }

    public function filter($filter)
    {
      $TI = Post::all()->where('category','Teenage Issues')->count();
      $MI = Post::all()->where('category','Marital Issues')->count();
      $PI = Post::all()->where('category','Parental Issues')->count();
      $PP = Post::all()->where('category','Peer Pressure')->count();
      if($filter == 'TI'){
        $posts = Post::all()->where('category','Teenage Issues')->sortBy('created_at');
      }
      elseif($filter == 'MI'){
        $posts = Post::all()->where('category','Marital Issues')->sortBy('created_at');
      }
      elseif($filter == 'PI'){
        $posts = Post::all()->where('category','Parental Issues')->sortBy('created_at');
      }
      else{
        $posts = Post::all()->where('category','Peer Pressure')->sortBy('created_at');
      }

      if($posts->count() > 4){
        $posts = $posts->paginate(4);
      }
      $ALL = Post::all()->count();

        return view('posts.index')->with('posts', $posts)->with(compact('TI','MI','PI','PP','ALL'))->with('success','Filtered on demand');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|nullable|max:10000',
            'category' => 'required',
        ]);

        //Handle file upload
        if($request->hasFile('image')){
            //Get filename with exetension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        // create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->user_id = auth()->guard('therapist')->user()->id;
        $post->image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = Post::find($id);
       return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        //Check for correct user
        if(Auth::guard('therapist')->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
       return view('posts.edit')->with('post', $post);
    }


    public function myposts()
    {
      $user_id = Auth::guard('therapist')->user()->id;
      $user = Therapists::find($user_id);
      $posts = $user->posts()->paginate(3);
      return view('posts.myposts',compact('posts'));


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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

         //Handle file upload
         if($request->hasFile('image')){
            //Get filename with exetension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

        }


        // create post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('image')){
            $post->image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //Check for correct user
        if(Auth::guard('therapist')->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($post->image != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/images/'.$post->image);
        }

        $post->delete();
        return redirect('/posts')->with('error', 'Post Deleted');
    }
}
