<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{

    public function validation($data)
    {
        $validated = Validator::make($data, [
            "title" => "required|max:50",
            "description" => "",
            "price" => "required",
            "series" => "required|max:20",
            "sale_date" => "required",
            "type" => "required|max:20",
        ], [
            'title.required' => 'Il campo titolo è necessario',
            'title.max' => 'Il campo titolo non deve superare 50 caratteri',
            'price.required' => 'Il campo prezzo è necessario',
            'series.required' => 'Il campo della serie è necessario',
            'series.max' => 'Il campo della serie non può superare i 50 caratteri',
            'sale_date' => 'Il campo della data è necessario',
            'type.required' => 'Il campo del tipo è necessario',
            'type.max' => 'Il campo del tipo non può superare i 50 caratteri',

        ])->validate();

        return $validated;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view("index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $dati_validati = $this->validation($data);

        $comic = new Comic();
        $comic->fill($dati_validati);
        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $detail = Comic::find($id);
        return view("show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->except("_token", "_method");
        $comic->update($data);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
