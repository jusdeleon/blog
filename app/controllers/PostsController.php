<?php

class PostsController extends \BaseController {

	public function getIndex()
	{
		$posts = Post::with('user')->get();
		return View::make('posts.index', compact('posts'));
	}

	public function getPost($id)
	{
		$post = Post::with('user')->find($id);
		return View::make('posts.post', compact('post'));
	}
}