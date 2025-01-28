<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\student;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = student::all();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Add New Customers";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Store Customers Details";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "Show Customers Details $id";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "Edit Customers Details $id";
        $users = student::find($id);
        return $users;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "Update Customers Details";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "Destroy Customers Details $id";

    }
}
