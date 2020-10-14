<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;

class LoginController extends Controller
{
    public function index()
    {
    	return view('front.login.login');
    }

    public function admin_login()
    {
        return view('admin.login');
    }

    public function admin_login_in(Request $Request)
    {
        $data['name'] = $Request->name;
        $data['password'] = $Request->password;


        $user = DB::table('admin')->where('name', $Request->name)->where('password', $Request->password)->first();

        if (!empty($user)) {
            session()->put('id', $user->id);

            return redirect::to('admin');
        }else{
            return redirect::back();
        }
    }

    public function home()
    {

        $value = session()->get('email');
        $txtCompanyid = session()->get('txtCompanyName');

        if ($value !='') {
            $data['login_yes'] = 1;
            $data['applicants_id'] = $value;
        }
        if ($txtCompanyid !='') {
            $data['txtCompanyid'] = $txtCompanyid;
        }

        $data['data'] = DB::table('job_categorys')->get();
    	return view('front.home.home', $data);
    }

    public function signUp()
    {
    	//return view('front.login.registration');
        return view('front.login.registration_view');
    }

    public function sign_up_reg(Request $Request)
    {
    	$data['email'] = $Request->email;
    	$data['password'] = $Request->password;
    	$data['name'] = $Request->name;

    	DB::table('users')->insert($data);

    	return redirect::to('/home');
    }

    public function sign_up_reg_2(Request $Request)
    {
        
        $data['name'] = $Request->name;
        $data['fathername'] = $Request->fathername;
        $data['mothername'] = $Request->mothername;
        $data['b_day'] = $Request->b_day;
        $data['b_month'] = $Request->b_month;
        $data['b_year'] = $Request->b_year;
        $data['sex'] = $Request->sex;
        $data['nationality'] = $Request->nationality;
        $data['religion'] = $Request->religion;
        $data['passport'] = $Request->passport;
        $data['passport_no'] = $Request->passport_no;
        $data['breg_no'] = $Request->breg_no;
        $data['breg'] = $Request->breg;
        $data['mstatus'] = $Request->mstatus;
        $data['s_name'] = $Request->s_name;
        $data['mstatus'] = $Request->mstatus;
        $data['ffq'] = $Request->ffq;
        $data['present_care'] = $Request->present_care;
        $data['present_vill'] = $Request->present_vill;
        $data['menu_one'] = $Request->menu_one;
        $data['present_post'] = $Request->present_post;
        $data['present_pcode'] = $Request->present_pcode;
        $data['copy'] = $Request->copy;
        $data['permanent_care'] = $Request->permanent_care;
        $data['permanent_vill'] = $Request->permanent_vill;
        $data['menu_two'] = $Request->menu_two;
        $data['menu_two_list'] = $Request->menu_two_list;
        $data['permanent_pcode'] = $Request->permanent_pcode;
        $data['mobileno'] = $Request->mobileno;
        $data['confirmmobile'] = $Request->confirmmobile;
        $data['Email'] = $Request->Email;


        $data['exam1'] = $Request->exam1;
        $data['institute1'] = $Request->institute1;
        $data['roll1'] = $Request->roll1;
        $data['result1'] = $Request->result1;
        $data['result_gpa1'] = $Request->result_gpa1;
        $data['subject1'] = $Request->subject1;
        $data['year1'] = $Request->year1;
        $data['exam2'] = $Request->exam2;
        $data['institute2'] = $Request->institute2;
        $data['roll2'] = $Request->roll2;
        $data['result2'] = $Request->result2;
        $data['result_gpa2'] = $Request->result_gpa2;
        $data['subject2'] = $Request->subject2;
        $data['year2'] = $Request->year2;
        $data['exam3'] = $Request->exam3;
        $data['other_exam3'] = $Request->other_exam3;
        $data['result3'] = $Request->result3;
        $data['result_gpa3'] = $Request->result_gpa3;
        $data['loading3'] = $Request->loading3;
        $data['subject3'] = $Request->subject3;

        $data['other_subject3'] = $Request->other_subject3;
        $data['year3'] = $Request->year3;
        $data['institute3'] = $Request->institute3;
        $data['other_institute3'] = $Request->other_institute3;
        $data['duration3'] = $Request->duration3;
        $data['password'] = $Request->password;

        if ($image=$Request->file('picture')) {
           $uploadPath = 'user_picture';
           $dbUrl = $uploadPath."/".$image->getClientOriginalName();
           $image->move($uploadPath,$image->getClientOriginalName());

           $data['picture']= $dbUrl;
        }

        if ($image=$Request->file('signature')) {
           $uploadPath = 'user_picture';
           $dbUrl = $uploadPath."/".$image->getClientOriginalName();
           $image->move($uploadPath,$image->getClientOriginalName());

           $data['signature']= $dbUrl;
        }

        // if ($image=$Request->file('pdf')) {
        //    $uploadPath = 'cv';
        //    $dbUrl = $uploadPath."/".$image->getClientOriginalName();
        //    $image->move($uploadPath,$image->getClientOriginalName());

        //    $data['pdf']= $dbUrl;
        // }

        DB::table('user_details')->insert($data);

        return redirect::to('/home')->with('success', 'Submited Successfully');
    }

    public function login(Request $Request)
    {
    	$data['email'] = $Request->email;
    	$data['password'] = $Request->password;

        if ($Request->type) {

            $user = DB::table('user_details')->where('name', $Request->email)->where('password', $Request->password)->first();
            if (empty($user->name)) {
                return redirect::back();
            }
        }else{
            $user = DB::table('company_details')->where('txtCompanyName', $Request->email)->where('txtPassword', $Request->password)->first();
            if (empty($user->txtCompanyName)) {
                return redirect::back();
            }

            session()->put('txtCompanyName', $user->id);
        }

    	if (!empty($user)) {
            session()->put('email', $user->id);

    		return redirect::to('/home');
    	}else{
    		return redirect::back();
    	}
    }

    public function logout()
    {
        Session::flush();
        return redirect::to('home');
    }

    public function employer_reg()
    {
        $data['job_categorys'] = DB::table('job_categorys')->get();
        return view('front.login.employee_reg' , $data);
    }

    public function employer_reg_submit(Request $Request)
    {
       DB::table('company_details')->insert($Request->all());

        return redirect::to('/home')->with('success', 'Submited Successfully');
    }

}
