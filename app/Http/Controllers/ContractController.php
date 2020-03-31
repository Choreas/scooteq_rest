<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;
use App\Http\Resources\Contract as ContractResource;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contract::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = Contract::create($this->validateData());
        return ($contract);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        return $contract;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        Contract::findOrFail($contract['id'])->fill($this->validateDataUpdate())->save();
        $new = Contract::findOrFail($contract['id']);
        return ($new);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        $contract->delete();
        return "Record deleted.";
    }

    private function validateData(Contract $contract=NULL)
    {
        return request()->validate([
            'CustomerId' => 'required',
            'ScooterId' => 'required',
            'LocationId' => 'required',
            'Rented' => 'required|date',
            'Returned' => 'nullable|date',
        ]);
    }

    private function validateDataUpdate(Contract $contract=NULL)
    {
        return request()->validate([
            'Returned' => 'required|date',
        ]);
    }
}
