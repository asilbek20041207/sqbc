<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoArticleRequest;
use App\Models\VideoArticle;
use Illuminate\Http\Request;

class VideoArticleController extends Controller
{
    public function index()
    {
        $videoArticles = VideoArticle::orderByDesc('id')->paginate(15);
        return view('admin.video-articles.index', compact('videoArticles'));
    }

    public function create()
    {
        return view('admin.video-articles.create');
    }

    public function store(VideoArticleRequest $request)
    {
        $attributes = $request->validated();

        $request->validate([
            'preview' => ['required', 'image', 'mimes:jpg,png']
        ]);

        $attributes['preview'] = $request->file('preview')->store('video-articles');

        VideoArticle::create($attributes);

        return redirect()->route('video-articles.index')->with('success', 'Видео новость успешно добавлена!');
    }

    public function edit(VideoArticle $videoArticle)
    {
        return view('admin.video-articles.edit', compact('videoArticle'));
    }

    public function update(Request $request, VideoArticle $videoArticle)
    {
        $attributes = $request->validated();

        if ($request->hasFile('preview')) {
            $request->validate([
                'preview' => ['required', 'image', 'mimes:jpg,png']
            ]);

            $attributes['preview'] = $request->file('preview')->store('video-articles');
        }

        $videoArticle->update($attributes);

        return redirect()->route('video-articles.index')->with('success', 'Видео новость успешно обновлена!');
    }

    public function destroy(VideoArticle $videoArticle)
    {
        unlink(public_path('storage/' . $videoArticle->preview));
        $videoArticle->delete();

        return redirect()->route('video-articles.index')->with('success', 'Видео новость успешно удалена!');
    }
}
