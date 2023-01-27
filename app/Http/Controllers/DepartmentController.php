<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    // Show all departments
    public function index() {
        return view('departments.index', [
            'departments' => Department::all()
        ]);
    }

    // Show single department
    public function show($id) {
        $department = Department::find($id);

        if ($department) {
            return view('departments.show', [
                'department' => $department
            ]);
        } else {
            abort('404');
        }
    }
}
