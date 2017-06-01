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
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я веб разработчик!</p>',
            'image' => [
                'path' => 'assets/images/tanday.jpg',
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
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я веб разработчик!</p>',
            'image' => [
                'path' => 'assets/images/tanday.jpg',
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
            'content' => '<p>Привет, меня зовут Татьяна Красикова и я веб разработчик!</p>',
            'activeMenu' => 'feedback',
        ]);
    }

}
