<?php

namespace App\Http\Controllers;

use App\Models\TPenalidad;
use Illuminate\Http\Request;

/**
 * Class TPenalidadController
 * @package App\Http\Controllers
 */
class TPenalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tPenalidads = TPenalidad::paginate();

        return view('t-penalidad.index', compact('tPenalidads'))
            ->with('i', (request()->input('page', 1) - 1) * $tPenalidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tPenalidad = new TPenalidad();
        return view('t-penalidad.create', compact('tPenalidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TPenalidad::$rules);

        $tPenalidad = TPenalidad::create($request->all());

        return redirect()->route('t-penalidads.index')
            ->with('success', 'TPenalidad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tPenalidad = TPenalidad::find($id);

        return view('t-penalidad.show', compact('tPenalidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tPenalidad = TPenalidad::find($id);

        return view('t-penalidad.edit', compact('tPenalidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TPenalidad $tPenalidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TPenalidad $tPenalidad)
    {
        request()->validate(TPenalidad::$rules);

        $tPenalidad->update($request->all());

        return redirect()->route('t-penalidads.index')
            ->with('success', 'TPenalidad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tPenalidad = TPenalidad::find($id)->delete();

        return redirect()->route('t-penalidads.index')
            ->with('success', 'TPenalidad deleted successfully');
    }
}
