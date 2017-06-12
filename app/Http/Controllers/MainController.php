<?php namespace App\Http\Controllers;

use App\Paper;
use App\Breeze;
use App\Fan;

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
                'path' => 'assets/images/tanday10_.jpg',
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

// TML Fans (Posts)
	
    public function fans()
    {

        $posts = Fan::all();
        return view('layouts.primary', [
            'page' => 'pages.fans',
            'title' => 'Посты',
            'content' => '<p>Привет, меня зовут Новости!</p>',
            'image' => [
                'path' => 'assets/images/tanday10.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'posts',
			'posts' => $posts
        ]);
    }

// TML Fan (Post)

    public function fan(Request $request)
    {

        $post = Fan::find($request->id);
        return view('layouts.primary', [
            'page' => 'pages.fan',
            'title' => 'Новости',
            'content' => '<p>Привет, меня зовут Новости!</p>',
            'image' => [
                'path' => 'assets/images/tanday10.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'posts',
			'post' => $post
        ]);
    }
	
// TML News
	
    public function news()
    {

        $posts = Breeze::all();
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

// TML Breeze (New)

    public function breeze(Request $request)
    {

        $post = Breeze::find($request->id);
        return view('layouts.primary', [
            'page' => 'pages.new',
            'title' => 'Новости',
            'content' => '<p>Привет, меня зовут Новости!</p>',
            'image' => [
                'path' => 'assets/images/tanday10.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'news',
			'post' => $post
        ]);
    }
	
// TML Articles
	
    public function articles()
    {
//        tml QB
//        $posts = DB::table('papers')->get();

//        tml ORM

        $posts = Paper::all();

//		debug(  $posts);
		
        return view('layouts.primary', [
            'page' => 'pages.articles',
            'title' => 'Статьи',
            'image' => [
                'path' => 'assets/images/tanday10.jpg',
                'alt' => 'Image'
            ],
            'activeMenu' => 'articles',
			'posts' => $posts
        ]);
    }
	
// TML Article

    public function article(Request $request)
    {
        $post = Paper::find($request->id);

		debug ($post);
//		echo $post;
//		die;
		
        return view('layouts.primary', [
            'page' => 'pages.article',
            'title' => 'Статьи',
            'image' => [
            ],
            'activeMenu' => 'articles',
			'post' => $post
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



        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255|min:6',
            'password2' => 'required|same:password',
            'phone' => 'required|regex:/\+\d{1}\s{1}\(\d{3}\)\s{1}\d{3}\-\d{2}\-\d{2}/',
            'is_confirmed' => 'accepted'
        ]);
		
		
        return view('layouts.primary', [
            'page' => 'pages.add_article',
            'title' => 'Добавление статьи',
            'image' => [
            ],
            'activeMenu' => 'articles',

        ]);
    }
	
}
