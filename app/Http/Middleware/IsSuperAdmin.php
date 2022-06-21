<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Account;
use Session;

class IsSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userLogin = Account::where('account_id', '=', Session::get('loginId'))->first();

        if($userLogin->is_super_admin == 0 && ($request->path() == 'account-management')){
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
