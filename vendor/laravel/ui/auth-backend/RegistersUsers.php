<?php

namespace Illuminate\Foundation\Auth;

use App\Mail\PengesahanPengguna;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // $this->validator($request->all())->validate();

        // event(new Registered($user = $this->create($request->all())));
        $user = new User;
        $user->name = $request->name;
        $user->icPengguna = $request->icPengguna;
        $user->email = $request->email;
        $user->notelbimbitPengguna = $request->notelbimbitPengguna;
        $user->nofaxPengguna = $request->nofaxPengguna;
        $user->namaSyarikat = $request->namaSyarikat;
        $user->alamatSyarikat = $request->alamatSyarikat;
        $user->daerah = $request->daerah;
        $user->negeri = $request->negeri;
        $user->sijilKompeten = $request->sijilKompeten;
        $user->kelayakanAkademik = $request->kelayakanAkademik;
        $user->password = Hash::make($request['password']);
        $user->katalaluan = $request->password;
        $user->save();
        // $user->assignRole('Pengguna');
        Mail::to('najhan.mnajib@gmail.com')->send(new PengesahanPengguna());
        alert()->success('Pendaftaran telah berjaya, sila tunggu pengesahan dari pihak JKR', 'Berjaya');
        return redirect('/login');

        // $this->guard()->login($user);

        // if ($response = $this->registered($request, $user)) {
        //     return $response;
        // }

        // return $request->wantsJson()
        //             ? new JsonResponse([], 201)
        //             : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
