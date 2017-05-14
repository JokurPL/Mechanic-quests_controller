<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestsRequest;
use App\Quests;
use Illuminate\Http\Request;

class QuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {

        Quests::create($request->all());
        return redirect()->route('quests.content');
    }
    
    public function quests()
    {
        $quests = Quests::all();
        return view('quests.content', compact('quests'));
    }

    public function show(Quests $quest)
    {
        return view('quests.oneq', compact('quest'));
    }

    public function destroy(Quests $quest)
    {
        $quest->delete();
        return redirect()->route('quests.content');
    }

    public function add()
    {
        return view('quests.add');
    }

    public function druk(Quests $quest)
    {
        return view('quests.print', compact('quest'));
    }

    public function edit(Quests $quest)
    {
        return view('quests.edit', compact('quest'));
    }

    public function update(QuestsRequest $request, Quests $quest)
    {
        $quest->update($request->all());
        return redirect()->route('quests.content');
    }
}