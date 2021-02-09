<?php

namespace App\Http\Controllers;

use App\Http\Requests\TyfRequest;
use App\Models\RecipesModel;
use Illuminate\View\View;

class TyfController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $recipes = RecipesModel::where([
            'user_id' => \Auth::id(),
        ])->latest()->get();

        return view('tyf.index', compact('recipes'));
    }

    public function create()
    {
        $now = now()->toDateString();

        return view('tyf.create', compact('now'));
    }

    public function edit(int $id)
    {
        $recipe = RecipesModel::find($id);

        return view('tyf.edit', compact('recipe'));
    }

    public function update($id, TyfRequest $request)
    {
        $params = $request->validated();
        $recipe = RecipesModel::find($id);
        $exists = RecipesModel::where([
            'user_id'    => \Auth::id(),
            'created_at' => $params['created_at'],
        ])->where('id', '!=', $id)->exists();
        $params['user_id'] = \Auth::id();
        if ($exists) {
            return back()->withErrors('今日食谱已存在');
        }
        $recipe->update($params);

        return redirect(route('tyfs.index'))->with('status', '修改成功!');
    }

    public function store(TyfRequest $request)
    {
        $params = $request->validated();
        $exists = RecipesModel::where([
            'user_id'    => \Auth::id(),
            'created_at' => $params['created_at'],
        ])->exists();
        $params['user_id'] = \Auth::id();
        if ($exists) {
            return back()->withErrors('今日食谱已存在');
        }
        RecipesModel::create($params);

        return redirect(route('tyfs.index'))->with('status', '添加成功!');
    }
}
