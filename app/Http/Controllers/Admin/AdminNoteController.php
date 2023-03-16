<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminNote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = AdminNote::whereUserId(Auth::id())->orderBy('created_at', 'desc')->get();
        return view('admin.pages.notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        AdminNote::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
        ]);
        activity()->log(auth()->user()->first_name . ' ' . auth()->user()->last_name . ' has created note' . $request->title);
        return redirect('admin/notes')->with('success', 'New note has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AdminNote $note)
    {
        if(Auth::user()->id == $note->user_id) {
            return view('admin.pages.notes.show', compact('note'));
        }
        else {
            return redirect()->back()->with('warning', 'You do not have permission to access this!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminNote $note)
    {
        if(Auth::user()->id == $note->user_id) {
            return view('admin.pages.notes.edit', compact('note'));
        }
        else {
            return redirect()->back()->with('warning', "You do not have permission to edit this");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminNote $note)
    {
        AdminNote::where('id', $note->id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
            'updated_at' => Carbon::now(),
        ]);
        activity()->log($request->title . ' note has been updated by ' . auth()->user()->first_name . ' ' . auth()->user()->last_name .  ' at ' . Carbon::now());
        return redirect('admin/notes')->with('success', "Note has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminNote $note)
    {
        if(Auth::user()->id == $note->user_id){
            $note = AdminNote::where('id', $note->id);
            $note->delete();
            activity()->log($note->title . ' has been deleted by ' . auth()->user->first_name . ' at '. Carbon::now());
            return redirect('admin/notes')->with('success', 'Note has been deleted');
        }
        else {
            return redirect()->back()->with('warning', 'You do not have permission to delete this!');
        }
    }
}
