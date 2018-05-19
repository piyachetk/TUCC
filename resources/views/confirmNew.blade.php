@extends('layouts.master', ['title' => 'ระบบการยืนยันสิทธิ์ของนักเรียนที่ผ่านการคัดเลือก ชมรมคอมพิวเตอร์ ประจำปีการศึกษา 2561'])

@section('body-class')
    grey darken-2
@endsection

@section('main')
    <div class="z-depth-1 card-panel" style="margin-bottom:16px">
        <h4>ระบบการยืนยันสิทธิ์ของ<span class="blue-text">นักเรียนที่ผ่านการคัดเลือก</span> ชมรมคอมพิวเตอร์ ประจำปีการศึกษา 2561</h4>
        <form method="POST" action="/confirm/new">
            {{ csrf_field() }}

            <div class="row">

                <div class="input-field col s12">
                    <input name="class" id="class" type="text" class="validate" value="{{ old('class') }}" required/>
                    <label for="class">ห้องเรียน</label>

                    @if ($errors->has('class'))
                        <span class="help-block">
                            <strong>{{ $errors->first('class') }}</strong>
                            <br/>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">

                <div class="input-field col s12">
                    <input name="number" id="number" type="text" class="validate" value="{{ old('number') }}" required/>
                    <label for="number">เลขที่ในห้องเรียน</label>

                    @if ($errors->has('number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('number') }}</strong>
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