<?php

namespace Lumis\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use App\Models\App;
use Auth;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
		$adminApps = Auth::user()->getApps();
		$clientApps = App::getClient();
        return view('dashboard::index')->with(compact('adminApps', 'clientApps'));
    }


}
