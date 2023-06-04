<?php

namespace App\Http\Controllers;

use App\Models\Hojacontrold;
use Illuminate\Http\Request;

/**
 * Class HojacontroldController
 * @package App\Http\Controllers
 */
class HojacontroldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hojacontrolds = Hojacontrold::paginate();

        return view('hojacontrold.index', compact('hojacontrolds'))
            ->with('i', (request()->input('page', 1) - 1) * $hojacontrolds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hojacontrold = new Hojacontrold();
        return view('hojacontrold.create', compact('hojacontrold'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Hojacontrold::$rules);

        $hojacontrold = Hojacontrold::create($request->all());

        return redirect()->route('hojacontrolds.index')
            ->with('success', 'Hojacontrold created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hojacontrold = Hojacontrold::find($id);

        return view('hojacontrold.show', compact('hojacontrold'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hojacontrold = Hojacontrold::find($id);

        return view('hojacontrold.edit', compact('hojacontrold'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Hojacontrold $hojacontrold
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hojacontrold $hojacontrold)
    {
        request()->validate(Hojacontrold::$rules);

        $hojacontrold->update($request->all());

        return redirect()->route('hojacontrolds.index')
            ->with('success', 'Hojacontrold updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hojacontrold = Hojacontrold::find($id)->delete();

        return redirect()->route('hojacontrolds.index')
            ->with('success', 'Hojacontrold deleted successfully');
    }
}
