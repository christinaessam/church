<?php

namespace App\Http\Controllers;

use App\Address;
use App\MembersPhoneNums;
use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests;

class MemberController extends Controller
{
    //
    public function index()
    {

        if (Session::has('user_id'))
        {

            /*** tags ***/
            $members=DB::table('members')->get();

            return view('members/index',compact('members'));
        }
        else{
            return redirect('/');
        }
    }
    public function create()
    {
        if (Session::has('admin_id')) {

            $title='Create New Tag ';
//        var_dump($instructors);
            return view('tags.create',compact('title'));
        }
        else{
            return redirect('/admin');
        }
    }

    public function show($id)
    {
        if (Session::has('admin_id')) {

            $title='Tag information';
            $tag=Tag::findOrFail($id);
//        var_dump($instructors);
            return view('tags.show',compact('tag','title'));
        }
        else{
            return redirect('/admin');
        }
    }

    public function edit($id)
    {
        if (Session::has('admin_id')) {

            $title=" Edit Tag data ";
            $tag=Tag::find($id);
//        $intakes = Intake::lists('intake_number', 'id');
//        $tracks = Track::lists('track_name', 'id');

//        var_dump($instructors);
            return view('tags.edit',compact('tag','title'));
        }
        else{
            return redirect('/admin');
        }
    }

    public function store(Request $request)
    {

        if (session('user_id')) {

            $address= new Address();
            $address->quarter=$request->input('quarter');
            $address->street=$request->input('street');
            $address->zone_location=$request->input('zone_location');
            $address->floor_num=$request->input('floor_number');
            $address->appartment_num=$request->input('appartment_number');
            $address->home_num=$request->input('home_number');
            $address->details=$request->input('details');
            $address->save();

            $address_id=$address->id;

            $member=new Member();
            $member->name=$request->input('name');
            $member->email=$request->input('email');
            $member->confession_father=$request->input('confession_father');
            $member->gender=$request->input('gender');
            $member->birthdate=$request->input('birthdate');
            $member->marital_status=$request->input('marital_status');
            $member->facebook_link=$request->input('facebook_link');
            $member->batch=$request->input('batch');
            $member->photo=$request->input('photo');
            $member->address_id=$address_id;
            $member->save();

            $member_id=$member->id;

            if ($request->input('phone_num')) {
                $phone_number = new MembersPhoneNums();
                $phone_number->type = 'phone';
                $phone_number->number = $request->input('phone_num');
                $phone_number->member_id = $member_id;
                $phone_number->save();
            }
            if($request->input('mobile_number')) {
                $mobile_number = new MembersPhoneNums();
                $mobile_number->type = 'mobile';
                $mobile_number->number = $request->input('mobile_number');
                $mobile_number->member_id = $member_id;
                $mobile_number->save();
            }
            return redirect('/');
        }
        else{
            return redirect('/');
        }
        //

    }

    public function update($id,Request $request)
    {
        if (Session::has('admin_id')) {

            $tag=Tag::find($id);
            $tag->tag_name=$request->input('name');
            $tag->save();
            return redirect('/admin/tag');
        }
        else{
            return redirect('/admin');
        }
    }

    public function destroy($id)
    {
        if (Session::has('admin_id')) {

            $tag=Tag::find($id);
            $tag->delete();
            return redirect('/admin/tag');
        }
        else{
            return redirect('/admin');
        }
    }
}
