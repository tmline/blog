<?php namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $posts = [];
        /*
        dump(Auth::user());
        dump(Auth::check());
        */
        return view('layouts.primary', [
            'page' => 'pages.main',
            'title' => 'Blogplace :: Блог Татьяна Красикова - PHP разработчик, иллюстратор, графический дизайнер',
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я — веб-разработчик!</p>',
            'image' => [
                'path' => 'assets/images/tanday9.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'main',
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('layouts.primary', [
            'page' => 'pages.about',
            'title' => 'Обо мне',
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я — веб-разработчик!</p>',
            'image' => [
                'path' => 'assets/images/tanday10.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'about',
        ]);
    }

    public function feedback()
    {
        return view('layouts.primary', [
            'page' => 'pages.feedback',
            'title' => 'Написать мне',
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я — веб-разработчик!</p>',
            'activeMenu' => 'feedback',
        ]);
    }

// TML News
	
    public function news()
    {
        $posts = [];

        return view('layouts.primary', [
            'page' => 'pages.news',
            'title' => 'Новости',
            'content' => '<p>Привет, меня зовут Новости!</p>',
            'image' => [
                'path' => 'assets/images/tanday10.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'news',
			'posts' => $posts
        ]);
    }
	
}
