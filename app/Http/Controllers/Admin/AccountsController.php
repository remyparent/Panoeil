<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $accounts = Account::all();
        return view('admin.accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $account = new Account();
        return view('admin.accounts.create', compact('account'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $account = Account::create($this->params($request));
        return redirect(route('admin.accounts.show', $account->slug))->with('success', "L'account a été créé");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        $account = Account::findBySlug($slug);
        $medias = $account->videos;
        return view('admin.accounts.show',compact('account','medias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Account             $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account) {
        //
    }

    public function params($request) {
        $user = Auth::user();
        //        if ($user->can('changeOwner', Post::class)) {
        //            return $request->all();
        //        } else {
        // recupere données de la requete
        $params = $request->except('user_id', '_token');
//        $params['user_id'] = $user->id;
        return $params;
        //        }
    }

}
