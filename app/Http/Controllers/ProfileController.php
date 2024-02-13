<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ResumeRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\RecruitersModel;
use App\Models\User as UserModel;
use App\Traits\UserTrait;
use App\Models\ResumeBaseModel;
use App\Traits\DashboardTrait;

class ProfileController extends Controller
{
    use DashboardTrait;
    /**
    * Display the user's resume
    */
    public function index()
    {
        //redirecion caso seja o primeiro acesso e não houver informações cadastradas.
        if (UserModel::count() == 0) {
            return Redirect::route('register');
        }
        if (auth()->check()) {
            // Se estiver logado pega os dados do usuario
            $user = auth()->user();
        } else {
            // Se não houver usuário autenticado, obter o primeiro usuário
            $user = UserModel::with(['resumebase', 'portifolio'])->first();
        }
        if (ResumeBaseModel::count() == 0) {
            return Redirect::route('dashboard');
        }
        $toClean = ['email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];
        $user = UserTrait::addAttribute(UserTrait::clean($user, $toClean), [
                            'resumebase' => $user->resumebase[0],
                            'portifolio' =>$user->portifolio
                        ]);
        $user->resumebase->aboutme = UserTrait::splitText($user->resumebase->aboutme, 2);

        return view('startbootstrap.index')->with([
                                        'user'=>$user]);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = Auth::user();

        if(!ResumeBaseModel::where('user_id', $user->id)->exists()){
            ResumeBaseModel::create([
                'user_id'=>$user->id,
                'aboutme'=>'',
                'photo'=>'',
            ]);
        }
        $user = $request->user();
        $count = RecruitersModel::get()->count();
        $toClean = ['email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];
        $user = UserTrait::addAttribute(UserTrait::clean($user, $toClean), ['resumebase' => $user->resumebase[0]]);

        // dd($user->resumebase->aboutme);
        return view('profile.edit', [
            'user' => $user,
        ])->with('count', $count);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function store(ResumeRequest $request)
    {
        // dd($request->positions);
        switch($request->partresume)
        {
            case 'info':
                ResumeBaseModel::where('user_id', $request->user_id)
                            ->update([
                                'aboutme' =>$request->aboutme,
                                'positions' => "$request->positions",
                            ]);
                break;
            case 'photo':
                $newphoto = $request->file('resumephoto');
                // Gerar um nome único para o arquivo
                $photoname = uniqid() . '_' . $newphoto->getClientOriginalName();
                $newphoto->move(public_path('uploads'), $photoname);
                ResumeBaseModel::where('user_id', $request->user_id)
                                ->update(['photo'=>$photoname]);

                // return response()->json(['mensagem' => 'Upload bem-sucedido', 'nome_arquivo' => $photoname]);
                break;
        }
        return redirect()->back();
    }
}
