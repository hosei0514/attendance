<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Date;
use App\Models\Work;


use function GuzzleHttp\Promise\all;

class CheckController extends Controller
{
    public function index()
    {
        $workTable = Date::get()->first();

        if (!$workTable) {
            return redirect()->back()->with('message', '勤務履歴がありません。');
        }

        $users = Work::join('dates', 'dates.id', 'works.date_id')
        ->join('users', 'users.id', 'user_id')
        ->get();

        $allDate = Date::select('date')->simplePaginate(1);

        foreach ($allDate as $date) {
            $date->date;
        }

        $users = Work::join('users', 'users.id', 'works.user_id')
        ->where('attendance_date', $date->date)
        ->paginate(5, ["*"], 'userPage');

        return view('check', compact('allDate' ,'users'));

    }

}