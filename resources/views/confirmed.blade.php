@extends('layouts.master', ['title' => 'ยืนยันสำเร็จ!'])

@section('end-of-head')
    <style>
        h4 {
            text-align: center
        }

        .teal {
            box-shadow: none;
            background-color: transparent !important;
        }

        #thebox {
            background: rgba(250,250,250,0.95);
        }
    </style>
@endsection

@section('body-class')
grey darken-2
@endsection

@section('before-main')
    <div style="height:15px"></div>
@endsection

@section('main')
    <div class="z-depth-1 card-panel" style="max-width:900px;margin:auto" id="thebox">
        <p class="center-align"><i class="material-icons large green-text">check_circle</i></p>
        <p class="center-align">{{ $member['prefix'] . $member['firstName'] . ' ' . $member['lastName'] }} ห้อง {{ $member['class'] }} เลขที่ {{ $member['number'] }}<br />ได้ลงทะเบียนเรียนกิจกรรมชมรมในปีการศึกษา 2561 แล้ว คือ</p>
        <h4>ชมรมคอมพิวเตอร์</h4>
        <p class="center-align">ขอให้นักเรียนมีความสุขในการเข้าร่วมกิจกรรมชมรม</p>
    </div>

    <br/>
    <div class="center-align grey-text text-lighten-3" style="font-size: 0.9rem">
        หากนักเรียนประสบปัญหาหรือมีข้อสงสัย โปรดติดต่องานกิจกรรมพัฒนาผู้เรียน ตึก 50 ปี<br />
    </div>
    <br/>
@endsection