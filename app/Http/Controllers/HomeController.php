<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employees;
use App\Models\User;
use Illuminate\Http\Request;
use function Illuminate\Foundation\Bus\dispatch_now;

class HomeController extends Controller
{
    public function findDepartmentByName(Request $request)
    {
        $deptName = $request->input('dept_name');
        $department = Department::where('dept_name', $deptName)->first();

        return response()->json($department);
    }

    public function showEmployees($id)
    {
        $employee = Employees::find($id);
        return view('employee', ['employee' => $employee]);
    }
    public function sendWelcomeEmail()
    {
        $user = User::find(1);
        dispatch(new \App\Jobs\SendEmailJob($user));

        return response()->json(['message' => 'Email penghantaran dijadualkan']);
    }
    public function sendWelcomeEmailImmediately()
    {
        $user = User::find(1);
        // dispatch_now(new \App\Jobs\SendEmailJob($user));

        return response()->json(['message' => 'Email telah dihantar dengan segera']);
    }
}
