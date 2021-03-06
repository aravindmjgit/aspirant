<?php

namespace App\Http\Controllers\Faculty;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RoleUsers;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    protected $faculty, $students, $admins, $users;

    public function __construct(RoleUsers $user)
    {
        $this->users = $user;
    }

    public function getHome()
    {
        $count = array();
        $title = 'Faculty | Home';
        $roles = ['users', 'admins', 'superadmin', 'faculty'];
        $data = $this->users
            ->select(DB::raw('count(*) as count'))
            ->groupBy('role_id')
            ->get()->toArray();

        foreach ($data as $key => $each) {
            $count[$roles[$key]] = $each['count'];
        }

        return view('protected.dashboard', [
            'title' => $title,
            'count' => $count
        ]);
    }

}
