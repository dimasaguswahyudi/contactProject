<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function table(Request $request)
    {
        if ($request->ajax()) {
            $data = Contact::with('user');
            if (Auth::user()->hasRole('Pengguna')) {
                $data = $data->whereHas('user', function ($query) {
                    $query->where('id', Auth::user()->id);
                });
            }
            if ($request->input('text') != "") {
                $cari = $request->input('text');
                $data = $data
                    ->where('name', 'like', '%' . $cari . '%')
                    ->orWhere('email', 'like', '%' . $cari . '%')
                    ->orWhere('no_telp', 'like', '%' . $cari . '%');
            }
            $data = $data->orderBy('created_at')->paginate(10);
            return view('contact.table', compact('data'))->render();
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::with('user');
        if (Auth::user()->hasRole('Pengguna')) {
            $data = $data->whereHas('user', function ($query) {
                $query->where('id', Auth::user()->id);
            });
        }
        $data = $data->paginate(10);
        return view('contact.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = new Contact;
        return view('contact.create_edit', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('success', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
