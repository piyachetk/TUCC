@extends('layouts.master', ['title' => 'ระบบการยืนยันสิทธิ์ของนักเรียนที่ผ่านการคัดเลือก ชมรมคอมพิวเตอร์ ประจำปีการศึกษา 2561'])

@section('main')
    <div class="z-depth-1 card-panel" style="margin:auto">
        <h4>ระบบการยืนยันสิทธิ์ของ<span class="blue-text">นักเรียนที่ผ่านการคัดเลือก</span> ชมรมคอมพิวเตอร์ ประจำปีการศึกษา 2561</h4>
        <form method="POST" action="/confirm/new">
            {{ csrf_field() }}

            <div class="row">

                <div class="input-field col s12">
                    <input name="id" id="id" type="text" class="validate" value="{{ old('id') }}" required/>
                    <label for="id">รหัสประจำตัวนักเรียน</label>

                    @if ($errors->has('id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id') }}</strong>
                            <br/>
                        </span>
                    @endif
                </div>
            </div>

            <button class="btn waves-effect green waves-light fullwidth" type="submit">
                ยืนยัน
            </button>
        </form>
    </div>
@endsection