<?php
namespace App\Applications\Admin\Http\Controllers;

class DashboardController extends BaseController
{
    //protected $viewNamespace = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application index.
     *
     * @return Response
     */
    public function index()
    {
        return $this->view('admin::dashboard.index');
    }
}
