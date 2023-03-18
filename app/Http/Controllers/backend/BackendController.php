<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiTraits;

class BackendController extends Controller
{
    //
    use ApiTraits;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        try {
            // code...
            // $data = $this->typeofevent();
            // $data1 = $this->specificevent(1);
            // $data2 = $this->per_eventmatch(1, 194215);
            // dd($data[0], $data1, $data1[0]->competition->name, count($data1), $data2);
            return view('backend.dashboard');
        } catch (\Exception $th) {
            //throw $th;
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }

    public function accounts()
    {
        try {
            //code...
            return view('backend.accounts');
        } catch (\Exception $th) {
            //throw $th;
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }

    public function mybets()
    {
        try {
            //code...
            return view('backend.mybets');
        } catch (\Exception $th) {
            //throw $th;
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }

    public function profitloss()
    {
        try {
            //code...
            return view('backend.profit&loss');
        } catch (\Exception $th) {
            //throw $th;
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }

    public function result()
    {
        try {
            //code...
            return view('backend.result');
        } catch (\Exception $th) {
            //throw $th;
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }

    public function accountstatement()
    {
        try {
            //code...
            return view('backend.accountstatement');
        } catch (\Exception $th) {
            //throw $th;
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }
}
