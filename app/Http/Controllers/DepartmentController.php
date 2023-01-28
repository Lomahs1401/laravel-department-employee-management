<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    // Show all departments
    public function index() {
        $departments = DB::select('SELECT * FROM departments;');

        return view('departments.index', [
            'departments' => Department::all()
        ]);
        // return view('departments.index', compact('departments'));
    }

    // Show single department
    public function show($id) {
        $department = Department::find($id);
        
        if ($department) {
            $employees = DB::select('SELECT `e`.id, `e`.`name`, `e`.`address` FROM departments AS `d` INNER JOIN employees AS `e` ON `e`.department_id = `d`.id WHERE `d`.id = :id', ['id' => $id]);

            // return view('departments.show', [
            //     'department' => $department,
            //     'employees' => $employees
            // ]);

            return view('departments.show', compact('department', 'employees'));
        } else {
            abort('404');
        }
    }
}
