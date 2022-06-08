<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Validator;
class PostController extends Controller
{

public function index()
{
    $id = auth()->id();
$posts = Post::where("user_id", "=", $id)->get(); 
return response()->json([
"success" => true,
"message" => "Post List",
"data" => $posts
]);
}

public function store(Request $request)
{
$input = $request->all();
$validator = Validator::make($input, [
'title' => 'required',
'body' => 'required'
]);
if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());       
}
$post = Post::create($input);
return response()->json([
"success" => true,
"message" => "Post created successfully.",
"data" => $post
]);
} 

public function show($id)
{
$post = Post::find($id);
if (is_null($post)) {
return $this->sendError('Post not found.');
}
return response()->json([
"success" => true,
"message" => "Post retrieved successfully.",
"data" => $post
]);
}
 
public function update(Request $request, Post $post)
{
$input = $request->all();
$validator = Validator::make($input, [
'title' => 'required',
'body' => 'required'
]);
if($validator->fails()){
    
return $this->sendError('Validation Error.', $validator->errors());       
}
$post->title = $input['title'];
$post->body = $input['body'];
$post->save();
return response()->json([
"success" => true,
"message" => "Post updated successfully.",
"data" => $post
]);
}
 
public function destroy(Post $post)
{
$post->delete();
return response()->json([
"success" => true,
"message" => "Post deleted successfully.",
"data" => $post
]);
}

}