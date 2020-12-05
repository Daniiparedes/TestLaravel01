<?php

namespace App\Http\Controllers;
use App\Models\phone;

use Illuminate\Http\Request;
use App\Http\Resources\phoneResource;
class phoneController extends Controller
{
    public function index()
    {
        $phones = phone::orderBy('brand')->get();
        return phoneResource::collection($phones);
    }

    public function show(phone $phone){
        return new phoneResource($phone);
    }

    protected function validateRequest()
    {
        return request()->validate([
            'Model' => 'required|min:5|max:50',
            'Price' => 'required|min:5|max:50',
        ]);
    }

    public function store()
    {
        $data = $this->validateRequest();
        $phone = phone::create($data);
        return new phoneResource($phone);
    }

    public function update(phone $phone)
    {
        $data = $this->validateRequest();
        $phone -> update($data);
        return new phoneResource($phone);
    }

    public function destroy(phone $phone)
    {
        $phone -> delete();
        return response()->noContent();
    }
}
