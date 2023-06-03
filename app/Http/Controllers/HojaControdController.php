<?php

namespace App\Http\Controllers;

use App\Models\HojaControd;
use Illuminate\Http\Request;

/**
 * Class HojaControdController
 * @package App\Http\Controllers
 */
class HojaControdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hojaControds = HojaControd::paginate();

        return view('hoja-controd.index', compact('hojaControds'))
            ->with('i', (request()->input('page', 1) - 1) * $hojaControds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hojaControd = new HojaControd();
        return view('hoja-controd.create', compact('hojaControd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HojaControd::$rules);

        $hojaControd = HojaControd::create($request->all());

        return redirect()->route('hoja-controds.index')
            ->with('success', 'HojaControd created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hojaControd = HojaControd::find($id);

        return view('hoja-controd.show', compact('hojaControd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hojaControd = HojaControd::find($id);

        return view('hoja-controd.edit', compact('hojaControd'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HojaControd $hojaControd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HojaControd $hojaControd)
    {
        request()->validate(HojaControd::$rules);

        $hojaControd->update($request->all());

        return redirect()->route('hoja-controds.index')
            ->with('success', 'HojaControd updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hojaControd = HojaControd::find($id)->delete();

        return redirect()->route('hoja-controds.index')
            ->with('success', 'HojaControd deleted successfully');
    }
}
