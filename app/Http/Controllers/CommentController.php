<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_id' =>'required',
            'komentar' =>'required'
        ]);

        $komentar = Comment::create([
            'post_id' => $request->post_id,
            'komentar' => $request->komentar
        ]);

        return redirect('/post/show/'.$request->post_id)
            ->with(['success' => 'Komentar berhasil ditambah']);
    }
}
