<?php //Gia tutto definito, sono tutte le funzioni per la CRUD, index e show le conosciamo, il nostro compito è solo riempire i corpi di queste funzioni,dobbiamo popolarlo

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Models
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.comics.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'nullable|max:2048',
            'price' => 'required|numeric',
            'series' => 'nullable|max:64',
            'sale_date' => 'nullable|date',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ]);
        $comic = new Comic();
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->sale_date = $request->input('sale_date');
        $comic->artists =  $request->input('artists');
        $comic->writers = $request->input('writers');

        return redirect()->route('admin.comics.show', ['comic', $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view ('admin.comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
