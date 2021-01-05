<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Yoeunes\Toastr\Facades\Toastr;
use Session;

class BlogController extends Controller
{
    public function blog()
    {
        $blog_display = DB::table('blog')
        ->join('users','users.id','=','blog.user_id')
        ->get();
        return view('pages.blog')->with('blog_display',$blog_display);
    }

    public function addBlog(Request $request)
    {
            $this->validate($request,[
                'blog_cate' => 'required',
                'blog_title' => 'required',
                'blog_title' => 'required',
                'blog_content' => 'required',
                'blog_image' => 'required'
            ]);     
            $data = array();
            // if($data){
            $data['user_id'] = Auth::user()->id;
            $data['blog_cate'] = $request->blog_cate;
            $data['blog_title'] = $request->blog_title;
            $data['blog_sum'] = $request->blog_sum;
            $data['blog_content'] = $request->blog_content;

            $get_img = $request->file('blog_image');
            if($get_img){
                $get_name_img = $get_img->getClientOriginalName();
                $name_img = current(explode('.',$get_name_img));
                $new_img = $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                $get_img->move('public/upload/course',$new_img);
                $data['blog_image'] = $new_img;
                DB::table('blog')->insert($data);
                $request->session()->put('mes', 'Thêm bài blog thành công!');
                return Redirect::to('/blog');
            }
            $data['blog_image'] = '';
            Toastr::success('Đăng bài blog thành công','Thông báo');
            
            return Redirect::to('/blog');

        //     }else{
        //         echo "Thêm bài blog không thành công";
        // }
    }

    // Blog Comment
    public function blogComment(Request $request,$blog_id)
    {
        $this->validate($request,[
            'blog_comment_content'=>'required'
        ]);
        $comment_blog = new BlogComment();
        $comment_blog->user_id = Auth::user()->id;
        $comment_blog->blog_id = $blog_id;
        $comment_blog->blog_comment_content = $request->input('blog_comment_content');
        $comment_blog->save();

        // $request->session()->put('mes', 'Đăng bình luận thành công!');
        Toastr::success('Đăng bình luận thành công','Thông báo');
        // $notification = array(
        //     'message' => 'Đăng bình luận thành công!',
        //     'alert-type' => 'Thông báo'
        // );
        return back();
    }

    public function blogDeleteComment($blog_id,$blog_comment_id)
    {
        $blog_comment_delete = DB::table('blog_comment')
        ->join('users','users.id','=','blog_comment.user_id')
        ->join('blog','blog.blog_id','=','blog_comment.blog_id')
        ->where('blog_comment.blog_id',$blog_id)->where('blog_comment_id',$blog_comment_id)
        ->delete();
        
        Toastr::error('Xóa bình luận thành công','Thông báo');
        return back();
    }

    public function detailBlog($blog_id)
    {
        $blog_detail = DB::table('blog')
        ->join('users','users.id','=','blog.user_id')
        // ->join('blog_comment','blog_comment.blog_id','=','blog.blog_id')
        ->where('blog_id',$blog_id)
        ->get();

        $blog_comment = DB::table('blog_comment')
        ->join('users','users.id','=','blog_comment.user_id')
        ->join('blog','blog.blog_id','=','blog_comment.blog_id')
        ->where('blog_comment.blog_id',$blog_id)
        ->get();

        if(Auth::check()){
            return view('pages.blog_detail')->with('blog_detail',$blog_detail)->with('blog_comment',$blog_comment);
        } else {
            return redirect('/dangnhap');
        }
    }
}
