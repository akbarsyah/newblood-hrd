<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //get semua data
    public function index(){
        return Employee::all();
    }

    //memasukkan data pendaftar
    public function input(){
        return Employee::create([
            'name' => request('name'),
            'email' => request('email'),
            'address' => request('address'),
            'phone' => request('phone'),
            'division' => request('division')
        ]);
        
        return 'Data Created Successfully';
    }

    //update data pendaftar
    public function update(Employee $employee){
        $employee->update([
            'name' => request('name'),
            'email' => request('email'),
            'address' => request('address'),
            'phone' => request('phone'),
            'division' => request('division')
        ]);
    }

    //hapus data pendaftar
    public function delete(Employee $employee){
        $berhasil = $employee->delete();
        return [
            'Data Deleted' => $berhasil
        ];
    }
}
