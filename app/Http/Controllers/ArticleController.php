<?php

namespace App\Http\Controllers;

// use Request; //nga di pake krn pake validation
use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;
use App\Article;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
	public function index() {
		/*$articles = Article::all();//ambil smua data article cumann dia order by asc*/
    	$articles = Article::latest('published_at')->Published()->get();

    	return view("articles.index", compact("articles"));
	}

	public function show($id) {
		$article = Article::find($id);//ato bisa pake findOrFail mksdnya kl nga ketemu lgsg fail aja

		if (is_null($article)) {
			abort(404);
		}

		// dd($article->published_at); // kalau di dd jadinya string
		/* Hasil dr $article->published_at :
		"2015-11-09 09:57:12"
		lebih bagus kl pake carbon jadi bisa di maen2in formatnya dll kyk format dari created_at & updated_at
		CARANYA di Article.php tambahin protected $dates = ["published_at"]; buat ngasih tau kl property published_at tolong di ubah jadi carbon format
		*/
		//($article->created_at);// Created_at sm updated_at otomatis diset bentuknya carbon jadi bisa di ganti2 formatnya dll
		/* Hasil dd nya:
		Carbon {#159 ▼
		  +"date": "2015-11-09 09:57:12.000000"
		  +"timezone_type": 3
		  +"timezone": "UTC"
		}
		*/
		/* Manipulasi carbon
		dd($article->created_at->day); //buat ambil day nya aja bisa jg month,year
		dd($article->created_at->)->format('Y-m'); //buat format jadi tahun-bulan aja
		dd($article->created_at->addDays('8')); //tampilin smua dengan tanggal + 8 hari
		dd($article->created_at->addDays('8')->format('Y-m')); //tampilin tahun-month dengan tanggal + 8 hari (bisa di gabung)
		dd($article->created_at->diffForHumans()); //buat kyk timeline twitter 1day ago dll
		*/

		return view("articles.show", compact("article"));
	}

	public function create() {
		return view("articles.create");
	}

	public function store(ArticleRequest $request) { //pake use App\Http\Requests\ArticleRequest; atau App\Http\Requests\ArticleRequest $request di parameter storenya jg bs

		//Kalo nga pake validation, pake Request::all (tambahin di atas use Request;) 
		//$input = Request::all();//Buat dapet data dari post ataupun get. Untuk pake Request harus pake use Request; yg use pake request laen di buang aja

		//krn pake validation 
		$input = $request->all();
		$article = new Article();

		/*$article->create($input);//Buat cara gampangnya*/

		$article->title = $input['title'];
		$article->body = $input['body'];
		$article->published_at = $input['published_at'];
		$article->user_id = $input['user_id'];

		$article->save();

		return redirect('articles');
	}

	public function edit($id) {
		$article = Article::find($id);

		if (is_null($article)) {
			abort(404);
		}

		return view('articles.edit', compact("article"));
	}

	public function update($id, ArticleRequest $request) {
		$article = Article::findOrFail($id); //kalau nga ketemu id yang bisa di update nnt error bkn 404

		$article->update($request->all());

		return redirect('articles/' . $id);
	}
}