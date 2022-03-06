<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Contact;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        $applications = Application::latest()->paginate(10);
        return redirect('dashboard', compact('applications', $applications));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apply(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'contactNumber' => 'required',
            'email' => 'required',
            'idNo' => 'required',
            'message' => 'required'
        ]);

        Application::create([
            'name' => $request->get('name'),
            'contactNumber' => $request->get('contactNumber'),
            'email' => $request->get('email'),
            'idNo' => $request->get('idNo'),
            'message' => $request->get('message'),
        ]);

        return back()->with('message', 'Application Submitted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Database\Eloquent\Builder
     */
    public function show($model)
    {
        $application = Application::findorfail($model);
        $applications = Application::latest()->paginate(10);
        $queries = Contact::latest()->paginate(10);
        $totalQueries = Contact::all()->count();
        $totalApplications = Application::all()->count();
        $totalUsers = User::all()->count();
        return view('admin.viewApplication', compact('applications','queries', 'totalQueries', 'totalApplications', 'totalUsers','application', $application,  $applications, $queries, $totalQueries, $totalApplications, $totalUsers));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function allApplications()
    {
        $applications = Application::latest()->paginate(10);
        $queries = Contact::latest()->paginate(10);
        $totalQueries = Contact::all()->count();
        $totalApplications = Application::all()->count();
        $totalUsers = User::all()->count();
        return view('admin.allApplications', compact('applications','queries', 'totalQueries', 'totalApplications', 'totalUsers',  $applications, $queries, $totalQueries, $totalApplications, $totalUsers));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
