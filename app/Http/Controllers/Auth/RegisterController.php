<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Member;
use App\Service\myImage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function guard()
    {
        return Auth::guard('member');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    public function register(Request $request)
    {
        $request->validate([
            'branch' => 'required|string|max:50',
            'username' => 'required|string|unique:members',
            'email' => 'required|email|unique:members',
            'password' => 'required|string|min:6',
            'full_name' => 'required|string',
            'place_of_birth' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required', // Ubah sesuai jenis kelamin yang valid
            'status' => 'required|string',
            'address_member' => 'required|string',
            'telephone' => 'required|string',
            'fax' => 'required|string',
            'mobile_phone' => 'required|string',
            'education_mode' => 'required|string',
            'company_name' => 'required|string',
            'company_address' => 'required|string',
            'production_capacity' => 'required|string',
            'stockist_or_branch_address' => 'required|string',
            'brand' => 'required|string',
            'number_of_permanent_emp' => 'required|string',
            'income_per_month' => 'required|string',
            'number_of_outsourcing_emp' => 'required|string',
            'start_price_range' => 'required|string',
            'end_price_range' => 'required|string',
            'min_order' => 'required|integer',
            'gender_category' => 'required|string',
            'age_category' => 'required|string',
            'market' => 'required|string',
            'business_type' => 'required|string',
            'product_type' => 'required|string',
            'product_character' => 'required|string',
            'recomendation_1' => 'required|string',
            'recomendation_2' => 'required|string',
            'img_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai format dan batasan file gambar yang Anda inginkan
            'img_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai format dan batasan file gambar yang Anda inginkan
            'term_condition' => 'required',
        ]);



         // Membuat objek Member dengan data dari request
         $member = new Member();
         $member->branch = $request->branch;
         $member->username = $request->username;
         $member->email = $request->email;
         $member->password = bcrypt($request->password);
         $member->full_name = $request->full_name;
         $member->place_of_birth = $request->place_of_birth;
         $member->date_of_birth = $request->date_of_birth;
         $member->gender = $request->gender;
         $member->status = $request->status;
         $member->address_member = $request->address_member;
         $member->telephone = $request->telephone;
         $member->fax = $request->fax;
         $member->mobile_phone = $request->mobile_phone;
         $member->education_mode = $request->education_mode;
         $member->company_name = $request->company_name;
         $member->company_address = $request->company_address;
         $member->production_capacity = $request->production_capacity;
         $member->stockist_or_branch_address = $request->stockist_or_branch_address;
         $member->brand = $request->brand;
         $member->number_of_permanent_emp = $request->number_of_permanent_emp;
         $member->income_per_month = $request->income_per_month;
         $member->number_of_outsourcing_emp = $request->number_of_outsourcing_emp;
         $member->start_price_range = $request->start_price_range;
         $member->end_price_range = $request->end_price_range;
         $member->min_order = $request->min_order;
         $member->gender_category = $request->gender_category;
         $member->age_category = $request->age_category;
         $member->market = $request->market;
         $member->business_type = $request->business_type;
         $member->product_type = $request->product_type;
         $member->product_character = $request->product_character;
         $member->recomendation_1 = $request->recomendation_1;
         $member->recomendation_2 = $request->recomendation_2;

         if($request->hasFile('img_ktp')){
            $image = new myImage;
            $member->img_ktp =  $image->saveImage($request->img_ktp, $request->username,'img_ktp');
        }

        if($request->hasFile('img_photo')){
            $image = new myImage;
            $member->img_photo =  $image->saveImage($request->img_photo, $request->username,'img_photo');
        }
         // Simpan objek ke dalam database
         $member->save();

        // Auth::login($member);

        // $this->guard()->login();

        return redirect('/');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function show(Request $request)
    {
        //
    }
}
