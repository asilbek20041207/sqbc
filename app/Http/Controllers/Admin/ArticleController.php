<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('id')->paginate(15);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(StoreArticleRequest $request)
    {

        $attributes = $request->validated();

        $attributes['preview'] = $request->file('preview')->store('articles');
        $attributes['banner'] = $request->file('banner')->store('articles');

        if ($request->images) {
            $images = [];
            foreach ($request->images as $image) {
                $images[] = $image->store('articles');
            }
        } else {
            $images = null;
        }

        $attributes['subtitles_ru'] = serialize($request->input('subtitles_ru'));
        $attributes['subtitles_uz'] = serialize($request->input('subtitles_uz'));
        $attributes['descriptions_ru'] = serialize($request->input('descriptions_ru'));
        $attributes['descriptions_uz'] = serialize($request->input('descriptions_uz'));
        $attributes['images'] = serialize($images);

        Article::create($attributes);

        return redirect()->route('articles.index')->with('success', 'Статья успешно добавлена!');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $attributes = $request->validated();

        $attributes['preview'] = $article->updateImage($request, 'preview');
        $attributes['banner'] = $article->updateImage($request, 'banner');

        if ($request->images) {
            $images = unserialize($article->images);
            foreach ($request->images as $key => $value) {
                if (array_key_exists($key, $images)) {
                    unlink(public_path('storage/' . $images[$key]));
                }

                $images[$key] = $value->store('articles');
            }

            $attributes['images'] = serialize($images);
        }

        $attributes['subtitles_ru'] = serialize($request->input('subtitles_ru'));
        $attributes['subtitles_uz'] = serialize($request->input('subtitles_uz'));
        $attributes['descriptions_ru'] = serialize($request->input('descriptions_ru'));
        $attributes['descriptions_uz'] = serialize($request->input('descriptions_uz'));

        $article->update($attributes);

        return redirect()->route('articles.index')->with('success', 'Статья успешно обновлена!');
    }

    public function destroy(Article $article)
    {
        $article->deleteArticle();
        return redirect()->route('articles.index')->with('success', 'Статья успешно удалена!');
    }

}
