<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Show all employees
    public function index() {
        return view('employees.index', [
            'employees' => Employee::all()
        ]);
    }

    // Show single employee
    public function show($id) {
        $employee = Employee::find($id);

        if ($employee) {
            return view('employees.show', [
                'employee' => $employee
            ]);
        } else {
            abort('404');
        }
    }

    // Show Create Employee Form
    public function create() {
        return view('employees.create');
    }
}
