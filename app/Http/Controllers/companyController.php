<?php

namespace App\Http\Controllers;
use App\Models\company;

use Illuminate\Http\Request;
use App\Http\Resources\companyResource;
class companyController extends Controller
{
    public function index()
    {
        $companys = company::orderBy('brand')->get();
        return companyResource::collection($companys);
    }

    public function show(company $company){
        return new companyResource($company);
    }

    protected function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:5|max:50',
            'Phoneid' => 'required|integer|min:100',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $company = company::create($data);
        return new companyResource($company);
    }

    public function update(company $company)
    {
        $data = $this->validateRequest();
        $company -> update($data);
        return new companyResource($company);
    }

    public function destroy(company $company)
    {
        $company -> delete();
        return response()->noContent();
    }
}
