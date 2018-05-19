@extends('layouts.master', ['title' => 'รายชื่อนักเรียนที่มีสิทธิ์ลงทะเบียนชมรมเดิม ชมรมคอมพิวเตอร์ ประจำปีการศึกษา 2561'])

@section('body-class')
    grey darken-2
@endsection

@section('main')
    <div class="z-depth-1 card-panel" style="margin-bottom:16px">
        <h4>รายชื่อ<span class="blue-text">นักเรียนที่มีสิทธิ์ลงทะเบียนชมรมเดิม</span> ประจำปีการศึกษา 2561</h4>
        <p>ผู้ที่มีสิทธิ์ลงทะเบียนชมรมเดิมสามารถยืนยันตัวตนเพื่อเข้าเป็นสมาชิกชมรมของปีการศึกษา 2561<br/>
            หากสมาชิกเก่าคนใดมีปัญหาขัดข้องใดๆเกี่ยวกับการยืนยันสิทธิ์กรุณาติดต่อประธานชมรมโดยด่วนภายในวันที่ 17 พฤษภาคม 2561 เวลา 17.00 น.</p>
        <a href="/confirm/old" class="waves-effect waves-light btn green fullwidth">ยืนยัน</a>

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
                    $list = \App\Member::where('status', 'OLD')->orWhere('status', 'CONFIRMED')->orderBy('id', 'DESC')->get();

                    //OLD => Unconfirmed old students
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