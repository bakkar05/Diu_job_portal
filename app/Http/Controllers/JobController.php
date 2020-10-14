<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class JobController extends Controller
{
    public function index()
    {
        $value = session()->get('id');

        if (!empty($value)) {
            $data['data'] = DB::table('job_categorys')->get();
            return view('welcome', $data);
        }

        
    }
    public function edit($id)
    {
        $data['data'] = DB::table('job_categorys')->where('id' , $id)->first();
        return view('admin.category.edit_category', $data);
    }

    public function delete($id)
    {
        DB::table('job_categorys')->where('id', $id)->delete();
        return Redirect::back()->with('msg', 'Deleted Successfully');
    }

    public function add()
    {
        return view('admin.category.add_category');
    }

    public function store(Request $Request)
    {
        $data['name'] = $Request->name;
        DB::table('job_categorys')->insert($data);

        return Redirect::back()->with('msg', 'Inserted Successfully');
    }
    public function update(Request $Request)
    {
        $data['name'] = $Request->name;
        DB::table('job_categorys')->where('id', $Request->id)->update($data);

        return Redirect::back()->with('msg', 'Updated Successfully');
    }

    public function add_posts($id='')
    {
        $data['category'] = DB::table('job_categorys')->get();
        if ($id !='') {
            $data['company_id'] = $id;
        }
        
        return view('admin.jobs.add_jobs' , $data);
    }

    public function job_store(Request $Request)
    {
        $data['name'] = $Request->name;
        $data['cat_id'] = $Request->cat_id;
        $data['deadline'] = $Request->deadline;
        $data['vacancy'] = $Request->vacancy;
        $data['publish_on'] = $Request->publish_on;
        $data['salary'] = $Request->salary;
        $data['work_type'] = $Request->work_type;
        $data['experence'] = $Request->experence;
        $data['age'] = $Request->age;
        $data['location'] = $Request->location;
        $data['responsibilities'] = $Request->responsibilities;
        $data['requirement'] = $Request->requirement;
        $data['education_requirement'] = $Request->education_requirement;
        $data['benifit'] = $Request->benifit;
        $data['company_name'] = $Request->company_name;
        $data['company_id'] = $Request->company_id;

        if (isset($Request->status)) {
            $data['status'] = $Request->status;
            $data['company'] = $Request->company;
        }

        DB::table('jobs')->insert($data);

        return Redirect::back()->with('msg', 'Inserted Successfully');
    }

    public function jobs_posts()
    {
        $data['data'] = DB::table('jobs')->get();
        return view('admin.jobs.jobs' , $data);
    }

    public function editPost($id)
    {
        $data['category'] = DB::table('job_categorys')->get();
        $data['data'] = DB::table('jobs')->where('id' , $id)->first();
        return view('admin.jobs.edit_jobs', $data);
    }

    public function update_jobs(Request $Request)
    {
        $data['name'] = $Request->name;
        $data['cat_id'] = $Request->cat_id;
        $data['deadline'] = $Request->deadline;
        $data['vacancy'] = $Request->vacancy;
        $data['publish_on'] = $Request->publish_on;
        $data['salary'] = $Request->salary;
        $data['work_type'] = $Request->work_type;
        $data['experence'] = $Request->experence;
        $data['age'] = $Request->age;
        $data['location'] = $Request->location;
        $data['responsibilities'] = $Request->responsibilities;
        $data['requirement'] = $Request->requirement;
        $data['education_requirement'] = $Request->education_requirement;
        $data['benifit'] = $Request->benifit;
        $data['company_name'] = $Request->company_name;

        DB::table('jobs')->where('id', $Request->id)->update($data);

        return Redirect::to('/job_posts')->with('msg', 'Updated Successfully');
    }

    public function front_posts($id)
    {
        if (session()->get('txtCompanyName')) {
            $data['company'] = 1;
        }
        $data['data'] = DB::table('jobs')->where('status' , 1)->where('cat_id' , $id)->where('deadline', '>=' , date('Y-m-d'))->get();

        return view('front.jobs.post' , $data);
    }

    public function front_post_details($id)
    {
        $value = session()->get('email');

        if ($value !='') {
            $data['login_yes'] = $value;
        }

        $data['job_id'] = $id;

        $data['data'] = DB::table('jobs')->where('id', $id)->first();
        return view('front.jobs.apply_job' , $data);
    }

    public function post_apply($user_id , $job_id)
    {
        $data['user_id'] = $user_id;
        $data['job_id'] = $job_id;
        return view('front.jobs.apply_here' , $data);
    }

    public function upload_cv(Request $Request)
    {
        $data['user_id'] = $Request->user_id;
        $data['job_id'] = $Request->job_id;

        // $validatedData = $Request->validate([
        // 'cv' => 'required',
        // ]);

        if ($image=$Request->file('cv')) {
           $uploadPath = 'cv';
           $dbUrl = $uploadPath."/".$image->getClientOriginalName();
           $image->move($uploadPath,$image->getClientOriginalName());

           $data['cv']= $dbUrl;
           
        }

        DB::table('upload_cvs')->insert($data);

        return Redirect::to('/home')->with('success','Posted successfully!');
    }

    public function job_applicants()
    {

        $data['data'] = DB::table('users')
            ->join('upload_cvs', 'upload_cvs.id', '=', 'users.id')
            ->join('jobs', 'users.id', '=', 'jobs.id')
            ->select('*')
            ->get();

        return view('admin.applicants.index' , $data);
    }

    public function contact_form(Request $Request)
    {
        $data['name'] = $Request->name;
        $data['email'] = $Request->email;
        $data['subject'] = $Request->subject;
        $data['message'] = $Request->message;

        DB::table('contracts')->insert($data);

        return Redirect::back()->with('success', 'Sent Successfully');
    }

    public function show_contract()
    {
        $value = session()->get('id');

        if (!empty($value)) {
            $data['data'] = DB::table('contracts')->get();
            return view('admin.contact', $data);
        }
    }

    public function general_user()
    {
        $value = session()->get('id');

        if (!empty($value)) {
            $data['data'] = DB::table('user_details')->get();

            return view('admin.record.general_user', $data);
        }
    }

    public function company_details()
    {
        $value = session()->get('id');

        if (!empty($value)) {
            $data['data'] = DB::table('company_details')->get();

            return view('admin.record.company', $data);
        }
    }


    public function add_post_company($id='')
    {
        // $value = session()->get('id');

        if ($id !='') {
            $data['company_id'] = $id;
            $data['txtCompanyName'] = DB::table('company_details')->select('txtCompanyName')->where('id', $id)->first();
        }



        $data['category'] = DB::table('job_categorys')->get();
        return view('front.add_post.add_post' , $data);

        // if (!empty($value)) {
        //     $data['data'] = DB::table('company_details')->get();

        //     return view('admin.record.company', $data);
        // }
    }

    public function approve($id)
    {
        $data['status'] = 1;
        DB::table('jobs')->where('id', $id)->update($data);

        return Redirect::back()->with('success', 'Approved Successfully');

    }

    public function upapprove($id)
    {
        $data['status'] = 0;
        DB::table('jobs')->where('id', $id)->update($data);

        return Redirect::back()->with('success', 'Sent Successfully');

    }

    public function view_company($id)
    {
       $data['data'] =  DB::table('company_details')->where('id', $id)->first();

       $data['jobs'] =  DB::table('jobs')->where('company_id', $id)->get();

       $data['post_yet'] = count($data['jobs']);

       return view('admin.company.index' , $data);

    }

    public function add_postsss($id)
    {
       $data['data'] =  DB::table('company_details')->where('id', $id)->first();

       return view('admin.company.index' , $data);

    }

    public function view_applicants($id)
    {
       $x = DB::table('upload_cvs')
            ->join('jobs', 'upload_cvs.job_id', '=', 'jobs.id')
            ->join('user_details', 'user_details.id', '=', 'upload_cvs.user_id')
            ->where('jobs.id' , $id )
            ->select('*')
            ->get();

        if (count($x) == 0 ) {
            return Redirect::back()->with('msg', 'You have No applicants Found');
        }

        $data['job_post_id'] = $id;    

       foreach ($x as $key => $value) {
              $y =  DB::table('messages')->where('jobs_post_id', $id)->where('user_id', $value->user_id)->where('company_id', $value->company_id)->first();

              if ($y) {
                  $a = 1;
              }else{
                $a = 0; 
              }

              $var[] = [

                "name" =>$value->name,
                "fathername" =>$value->fathername,
                "mothername" =>$value->mothername,
                "mobileno" =>$value->mobileno,
                "Email" =>$value->Email,
                "send_message" =>$a,
                "cv" =>$value->cv,
                "user_id" =>$value->user_id

              ];
            }  

            $data['detail'] = $var; 

        $txtCompanyid = session()->get('txtCompanyName');

        if (!empty($txtCompanyid)) {
            $data['data'] =  DB::table('company_details')->where('id', $txtCompanyid)->first();

           return view('admin.company.job_applicants' , $data);
        }

        return Redirect::back()->with('msg', 'You Should login first');
    }

    public function view_applicant_profile($id)
    {
        $data['datas'] =  DB::table('user_details')->where('id', $id)->first();
        return view('front.profile.index' , $data);
    }

    public function edit_profile($id)
    {
        $data['datas'] =  DB::table('user_details')->where('id', $id)->first();
        return view('front.profile.index' , $data);
    }

    public function send_message($user_id, $company_id,$jobs_post_id)
    {
        $data['company_id'] = $company_id;
        $data['jobs_post_id'] = $jobs_post_id;
        $data['datas'] =  DB::table('user_details')->where('id', $user_id)->first();
        return view('admin.company.send_sms' , $data);
    }

    public function store_message(Request $request)
    {
        $data['user_id'] = $request->user_id;
        $data['company_id'] = $request->company_id;
        $data['jobs_post_id'] = $request->jobs_post_id;
        $data['message'] = $request->message;

        DB::table('messages')->insert($data);

        return Redirect::back()->with('success', 'Sent Successfully');
    }

    public function all_message($id)
    {
        $data['data'] = DB::table('user_details')
            ->join('upload_cvs', 'upload_cvs.user_id', '=', 'user_details.id')
            ->join('jobs', 'upload_cvs.job_id', '=', 'jobs.id')
            ->join('messages', 'user_details.id', '=', 'messages.user_id')
            ->where('user_details.id' , $id)
            ->select('*')
            ->get();

        return view('front.profile.message' , $data);
    }

    public function self_view($id)
    {
        $data['data'] =  DB::table('company_details')->where('id', session()->get('txtCompanyName'))->first();

        return view('admin.company.profile' , $data);
    }

    
}
