<?php

namespace App\Http\Controllers;

use App\Models\MedicalVisit;
use Illuminate\Http\Request;

/**
 * Class MedicalVisitController
 * @package App\Http\Controllers
 */
class MedicalVisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicalVisits = MedicalVisit::paginate();

        return view('medical-visit.index', compact('medicalVisits'))
            ->with('i', (request()->input('page', 1) - 1) * $medicalVisits->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicalVisit = new MedicalVisit();
        return view('medical-visit.create', compact('medicalVisit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MedicalVisit::$rules);

        $medicalVisit = MedicalVisit::create($request->all());

        return redirect()->route('medical-visits.index')
            ->with('success', 'Visita medica realizada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicalVisit = MedicalVisit::find($id);

        return view('medical-visit.show', compact('medicalVisit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicalVisit = MedicalVisit::find($id);

        return view('medical-visit.edit', compact('medicalVisit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MedicalVisit $medicalVisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalVisit $medicalVisit)
    {
        request()->validate(MedicalVisit::$rules);

        $medicalVisit->update($request->all());

        return redirect()->route('medical-visits.index')
            ->with('success', 'Visita medica actualizada');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicalVisit = MedicalVisit::find($id)->delete();

        return redirect()->route('medical-visits.index')
            ->with('success', 'Visita medica eliminada.');
    }
}
