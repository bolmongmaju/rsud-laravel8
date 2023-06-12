<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:link.index|link.create|link.edit|link.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::latest()->when(request()->q, function ($links) {
            $links = $links->where('name', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.link.index', compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'url'  => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image')->store('assets/links', 'public');
        }

        $link = Link::create([
            'name' => $request->input('name'),
            'url'  => $request->input('url'),
            'image'  => ($request->file('image')) ? $image : null,
        ]);

        if ($link) {
            //redirect dengan pesan sukses
            return redirect()->route('link.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('link.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        return view('admin.link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        $this->validate($request, [
            'name' => 'required',
            'url'  => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->file('image')) {
            Storage::delete($link->image);
            $image = $request->file('image')->store('assets/links', 'public');
        }

        $link = Link::findOrFail($link->id)->update([
            'name' => $request->input('name'),
            'url'  => $request->input('url'),
            'image' => ($request->file('image')) ? $image : $link->image,
        ]);

        if ($link) {
            //redirect dengan pesan sukses
            return redirect()->route('link.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('link.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::findOrFail($id);
        Storage::delete($link->image);
        $link->delete();

        if ($link) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
