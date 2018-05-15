@extends('layouts.master', ['title' => 'รายชื่อนักเรียนที่ผ่านการคัดเลือกและนักเรียนที่ได้ใช้สิทธิ์ลงทะเบียนชมรมเดิม ชมรมคอมพิวเตอร์ ประจำปีการศึกษา 2561'])

@section('body-class')
    grey darken-2
@endsection

@section('main')
    <div class="z-depth-1 card-panel" style="margin-bottom:16px">
        <h4>รายชื่อ<span class="blue-text">นักเรียนที่ผ่านการคัดเลือกและนักเรียนที่ได้ใช้สิทธิ์ลงทะเบียนชมรมเดิม</span> ชมรมคอมพิวเตอร์ ประจำปีการศึกษา 2561</h4>
        <p>ผู้ที่ผ่านการออดิชั่นจะต้องยืนยันตัวตนเพื่อเข้าเป็นสมาชิกชมรมของปีการศึกษา 2561<br/>
            หากผู้ใดมีปัญหาเกี่ยวกับการยืนยันสิทธิ์หรือเหตุขัดข้องเกี่ยวกับการรับสมัครสมาชิกชมรมในปีการศึกษานี้ใดๆ กรุณาติดต่อประธานชมรมโดยด่วน</p>
        <a href="/confirm/new" class="waves-effect waves-light btn green fullwidth">ยืนยัน</a>

        <table style="margin-top: 16px;">
            <thead>
            <tr>
                <th>ระดับชั้น</th>
                <th>คำนำหน้าชื่อ</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ห้อง</th>
                <th>เลขที่</th>
            </tr>
            </thead>

            <tbody>
                @php
                    $list = \App\Member::where('status', 'CONFIRMED')->orWhere('status', 'PASSED')->orderBy('id', 'DESC')->get();

                    //CONFIRMED => Confirmed Old students + Confirmed auditioned students
                    //PASSED => Unconfirmed auditioned students
                @endphp
                @foreach($list as $member)
                    <tr>
                        <td>{{ $member->level }}</td>
                        <td>{{ $member->prefix }}</td>
                        <td>{{ $member->firstName }}</td>
                        <td>{{ $member->lastName }}</td>
                        <td>{{ $member->class }}</td>
                        <td>{{ $member->number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection