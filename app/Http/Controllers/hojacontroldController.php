<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehojacontroldRequest;
use App\Http\Requests\UpdatehojacontroldRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\hojacontroldRepository;
use Illuminate\Http\Request;
use Flash;

class hojacontroldController extends AppBaseController
{
    /** @var hojacontroldRepository $hojacontroldRepository*/
    private $hojacontroldRepository;

    public function __construct(hojacontroldRepository $hojacontroldRepo)
    {
        $this->hojacontroldRepository = $hojacontroldRepo;
    }

    /**
     * Display a listing of the hojacontrold.
     */
    public function index(Request $request)
    {
        $hojacontrolds = $this->hojacontroldRepository->paginate(10);

        return view('hojacontrolds.index')
            ->with('hojacontrolds', $hojacontrolds);
    }

    /**
     * Show the form for creating a new hojacontrold.
     */
    public function create()
    {
        return view('hojacontrolds.create');
    }

    /**
     * Store a newly created hojacontrold in storage.
     */
    public function store(CreatehojacontroldRequest $request)
    {
        $input = $request->all();

        $hojacontrold = $this->hojacontroldRepository->create($input);

        Flash::success('Hojacontrold saved successfully.');

        return redirect(route('hojacontrolds.index'));
    }

    /**
     * Display the specified hojacontrold.
     */
    public function show($id)
    {
        $hojacontrold = $this->hojacontroldRepository->find($id);

        if (empty($hojacontrold)) {
            Flash::error('Hojacontrold not found');

            return redirect(route('hojacontrolds.index'));
        }

        return view('hojacontrolds.show')->with('hojacontrold', $hojacontrold);
    }

    /**
     * Show the form for editing the specified hojacontrold.
     */
    public function edit($id)
    {
        $hojacontrold = $this->hojacontroldRepository->find($id);

        if (empty($hojacontrold)) {
            Flash::error('Hojacontrold not found');

            return redirect(route('hojacontrolds.index'));
        }

        return view('hojacontrolds.edit')->with('hojacontrold', $hojacontrold);
    }

    /**
     * Update the specified hojacontrold in storage.
     */
    public function update($id, UpdatehojacontroldRequest $request)
    {
        $hojacontrold = $this->hojacontroldRepository->find($id);

        if (empty($hojacontrold)) {
            Flash::error('Hojacontrold not found');

            return redirect(route('hojacontrolds.index'));
        }

        $hojacontrold = $this->hojacontroldRepository->update($request->all(), $id);

        Flash::success('Hojacontrold updated successfully.');

        return redirect(route('hojacontrolds.index'));
    }

    /**
     * Remove the specified hojacontrold from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $hojacontrold = $this->hojacontroldRepository->find($id);

        if (empty($hojacontrold)) {
            Flash::error('Hojacontrold not found');

            return redirect(route('hojacontrolds.index'));
        }

        $this->hojacontroldRepository->delete($id);

        Flash::success('Hojacontrold deleted successfully.');

        return redirect(route('hojacontrolds.index'));
    }
}
