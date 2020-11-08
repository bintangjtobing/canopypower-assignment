<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\sites;
use App\plan;
use Exception;

class DashboardController extends Controller
{
    public function getSite()
    {
        return sites::orderBy('created_at', 'DESC')
            ->get();
    }
    public function getList()
    {
        $list = DB::table('sites')
            ->join('plans', 'sites.plan_id', 'plans.id')
            ->orderBy('sites.created_at', 'DESC')
            ->select('sites.*', 'plans.*', 'sites.id as siteid')
            ->get();
        return $list;
    }
    public function getSiteid($siteid)
    {
        $list = DB::table('sites')
            ->join('plans', 'sites.plan_id', 'plans.id')
            ->where('sites.id', '=', $siteid)
            ->select('sites.*', 'plans.*', 'sites.id as siteid')
            ->first();
        return sites::find($siteid);
    }
    public function deletesite($siteid)
    {
        $site = sites::find($siteid);
        $site->delete();
        return 204;
    }
    public function getPlan()
    {
        return plan::all();
    }
    public function loginproses(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $check = DB::table('memberdbs')
            ->where('username', $username)
            ->first();

        if ($check && HASH::check($password, $check->password)) {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            return redirect('/admin/home');
            // return 'true';
        }
        return back()->with('gagal', 'Authenticate failed!');
        // dd($request->all());
    }
    public function addnewsite(Request $request)
    {
        $lamp = $request->file('image');
        $filename = time() . '.' . $lamp->getClientOriginalExtension();
        $request->file('image')->move('media/sites/', $filename);

        $site = new sites;
        $site->site_name = $request->site_name;
        $site->location = $request->location;
        $site->pic = $request->pic;
        $site->plan_id = $request->plan_id;
        $site->comdate = date('Y M d');
        $site->thumb = $filename;
        $site->save();
        // dd($site);
        // dd($request->all());
    }
    public function updatesite(sites $site)
    {
        // return response()->json($request->all());
        $data = $this->getForm();
        if (request()->hasFile("image")) {
            $lamp = request()->file('image');
            $data["thumb"] = time() . '.' . $lamp->getClientOriginalExtension();
            request()->file('image')->move('media/sites/', $data["thumb"]);
        }
        $site->update($data);
    }

    public function getForm()
    {
        return request()->only("site_name", "location", "pic");
    }
}
