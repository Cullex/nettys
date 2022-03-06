<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function allQueries()
    {
        $applications = Application::latest()->paginate(10);
        $queries = Contact::latest()->paginate(10);
        $totalQueries = Contact::all()->count();
        $totalApplications = Application::all()->count();
        $totalUsers = User::all()->count();
        return view('admin.allQueries', compact('applications','queries', 'totalQueries', 'totalApplications', 'totalUsers',  $applications, $queries, $totalQueries, $totalApplications, $totalUsers));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'contactNumber' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'description' => ['required']
        ]);

        Contact::create([
            'name' => $request->get('name'),
            'contactNumber' => $request->get('contactNumber'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'description' => $request->get('description'),

        ]);
        return redirect()->back()->with('message', 'Appointment Successfully Booked');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($model)
    {
        $query = Contact::findorfail($model);
        $applications = Application::latest()->paginate(10);
        $queries = Contact::latest()->paginate(10);
        $totalQueries = Contact::all()->count();
        $totalApplications = Application::all()->count();
        $totalUsers = User::all()->count();
        return view('admin.viewQuery', compact('applications','queries', 'totalQueries', 'totalApplications', 'totalUsers','query', $query,  $applications, $queries, $totalQueries, $totalApplications, $totalUsers));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
