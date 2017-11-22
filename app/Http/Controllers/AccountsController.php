<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\AccountsRequest;
use Illuminate\Http\Request;

class AccountsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountsRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account $accounts
     * @return \Illuminate\Http\Response
     */
    public function show(Account $accounts) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account $accounts
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $accounts) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Account             $accounts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $accounts) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account $accounts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $accounts) {
        //
    }
}
