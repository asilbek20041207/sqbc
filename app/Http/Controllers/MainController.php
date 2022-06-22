<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Article;
use App\Models\Information;
use App\Models\License;
use App\Models\Partner;
use App\Models\Project;
use App\Models\VideoArticle;

class MainController extends Controller
{
    public function index()
    {
        $info = Information::first();
        $projects = Project::orderByDesc('id')->get();
        $partners = Partner::orderByDesc('id')->get();
        $articles = Article::orderByDesc('id')->get();
        $videoArticles = VideoArticle::orderByDesc('id')->get();
        return view('frontend.index', compact('info', 'projects', 'partners', 'articles', 'videoArticles'));
    }

    public function projects()
    {
        $projects = Project::orderByDesc('id')->get();
        return view('frontend.projects', compact('projects'));
    }

    public function partners()
    {
        $partners = Partner::orderByDesc('id')->get();
        return view('frontend.partners', compact('partners'));
    }

    public function about()
    {
        $info = Information::first();
        $partners = Partner::orderByDesc('id')->get();
		$licenses = License::orderByDesc('id')->limit(3)->get();
        return view('frontend.about', compact('info', 'partners', 'licenses'));
    }

    public function contacts()
    {
        return view('frontend.contacts');
    }

    public function ads()
    {
		abort(404);
        // $ads = Ad::orderByDesc('id')->get();
        // return view('frontend.advertisement', compact('ads'));
    }

    public function licenses()
    {
        $licenses = License::orderByDesc('id')->get();
        return view('frontend.licenses', compact('licenses'));
    }

    public function news()
    {
        $articles = Article::orderByDesc('id')->get();
        $videoArticles = VideoArticle::orderByDesc('id')->get();
        return view('frontend.news', compact('articles', 'videoArticles'));
    }

    public function showArticle(Article $article)
    {
        return view('frontend.article', compact('article'));
    }

    public function showVideoArticle(VideoArticle $videoArticle)
    {
        return view('frontend.video-article', compact('videoArticle'));
    }

    public function controlMeasurement()
    {
        $info = Information::first();
        return view('frontend.control-measurement', compact('info'));
    }

    public function changeLocale($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
