<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.settings.index');
    }

    public function generalSettingsIndex(){
        $settings = Setting::all();
        return view('admin.pages.settings.general', compact('settings'));
    }
    public function generalSettingsCreate(){
        return view('admin.pages.settings.generalCreate');
    }
    public function generalSettingsStore(Request $request) {
        $validateData = $request->validate([
            'key' => 'required|unique:settings|max:255',
            'value' => 'required',
        ]);

        $setting = Setting::create([
            'key' => strtolower(str_replace(' ', '_', $validateData['key'])),
            'value' => $validateData['value'],
        ]);
        return redirect()->route('admin.settings.general-settings')->with('success', 'Setting "'.$setting->key.'" created successfully.');
    }
    public function generalSettingsUpdate(Request $request) {
        foreach ($request->input('settings') as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }
        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
