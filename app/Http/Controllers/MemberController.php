<?php

namespace App\Http\Controllers;

use App\Member;
use \Illuminate\Http\Request;

class MemberController extends Controller
{
    public function confirmOld(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric'
        ]);

        $id = $request->get('id');

        if ($member = Member::where('id', $id)->first())
        {
            if ($member->status == "CONFIRMED"){
                return response()->view('errors.custom', ['title' => 'Already is a Member', 'subtitle' => 'Already is a Member', 'description' => 'ได้รับการยืนยันแล้ว']);
            }
            else if ($member->status == "PASSED" || $member->status == "FAILED"){
                return response()->view('errors.custom', ['title' => 'Unprivileged', 'subtitle' => 'Unprivileged', 'description' => 'ไม่มีสิทธิ์ลงทะเบียนชมรมเดิม']);
            }

            $member->status = "CONFIRMED";
            $member->save();

            return view('confirmed', ['member' => $member->toArray()]);
        }

        return response()->view('errors.custom', ['title' => 'Invalid Student ID', 'subtitle' => 'Invalid Student ID', 'description' => 'รหัสนักเรียนไม่ถูกต้อง']);
    }

    public function confirmNew(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric'
        ]);

        $id = $request->get('id');

        if ($member = Member::where('id', $id)->first())
        {
            if ($member->status == "CONFIRMED"){
                return response()->view('errors.custom', ['title' => 'Already is a Member', 'subtitle' => 'Already is a Member', 'description' => 'ได้รับการยืนยันแล้ว']);
            }
            else if ($member->status == "OLD" || $member->status == "FAILED"){
                return response()->view('errors.custom', ['title' => 'Unprivileged', 'subtitle' => 'Unprivileged', 'description' => 'ไม่มีสิทธิ์ยืนยันการคัดเลือก']);
            }

            $member->status = "CONFIRMED";
            $member->save();

            return view('confirmed', ['member' => $member->toArray()]);
        }

        return response()->view('errors.custom', ['title' => 'Invalid Student ID', 'subtitle' => 'Invalid Student ID', 'description' => 'รหัสนักเรียนไม่ถูกต้อง']);
    }
}