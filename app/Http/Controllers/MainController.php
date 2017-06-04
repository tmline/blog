<?php namespace App\Http\Controllers;

use App\Paper;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
	
// TML Articles
	
    public function articles()
    {
        $posts = DB::table('articles_table')->get();

		debug(  $posts);
		
        return view('layouts.primary', [
            'page' => 'pages.articles',
            'title' => 'Статьи',
            'image' => [
            ],
            'activeMenu' => 'articles',
			'posts' => $posts
        ]);
    }
	
// TML Article

    public function article()
    {
        $posts = DB::table('articles_table')->get();

		debug(  $posts);
		
        return view('layouts.primary', [
            'page' => 'pages.articles',
            'title' => 'Статьи',
            'image' => [
            ],
            'activeMenu' => 'articles',
			'posts' => $posts
        ]);
    }
	
    public function add_article()
    {
		
        return view('layouts.primary', [
            'page' => 'pages.add_article',
            'title' => 'Добавление статьи',
            'image' => [
            ],
            'activeMenu' => 'articles',

        ]);
    }
	
	
//    public function add_articlePost(Request $request)
//    {
//	debug($request);

//		DB::table('articles_table')->insert(
//			['name' => $request -> input('name'), 'author' =>  $request -> input('author'), 'notes' => $request -> input('notes'),]
//		);
		
//        return view('layouts.primary', [
//            'page' => 'pages.add_article',
//            'title' => 'Добавление статьи',
//            'image' => [
//            ],
//            'activeMenu' => 'articles',

//        ]);
//    }

	
    public function add_articlePost(Request $request)
    {
debug($request);

//		DB::table('articles_table')->insert(
//			['name' => $request -> input('name'), 'author' =>  $request -> input('author'), 'notes' => $request -> input('notes'),]
//		);

        $paper = new Paper;

        $paper->name = $request->name;

        $paper->author = $request->author;

        $paper->notes = $request->notes;

        $paper->save();
		
		
        return view('layouts.primary', [
            'page' => 'pages.add_article',
            'title' => 'Добавление статьи',
            'image' => [
            ],
            'activeMenu' => 'articles',

        ]);
    }
	
}
