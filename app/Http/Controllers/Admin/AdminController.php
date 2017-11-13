<?php

namespace App\Http\Controllers\Admin;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePermissionsRequest;
use App\Http\Requests\Admin\UpdatePermissionsRequest;

class AdminController extends Controller
{
    public function index()
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        return view('admin.home');
    }
}
