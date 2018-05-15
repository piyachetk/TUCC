@extends('layouts.master', ['title' => 'หน้าแรก'])

@section('before-main')
    <div class="grey darken-3 white-text"
         style="padding-top:1rem;padding-bottom:5rem;line-height:1.5rem;min-height:50vmin;box-shadow: 0px 3px 5px 0px rgba(85,85,85,0.4);">
        <div class="container">
            <br><br>
            <h1 class="en left-align" style="font-size: 15vmin;font-weight: 600;">
                <span class="pink-text text-lighten-1" id="h-1">TRIAM UDOM</span><br>
                <span id="h-2">COMPUTER CLUB</span>
            </h1>
            <h4 class="th" style="font-weight: bold" id="h-4">ชมรมคอมพิวเตอร์ โรงเรียนเตรียมอุดมศึกษา</h4>
            <br>
        </div>
    </div>
@endsection

@section('main')
    <br>

    <div class="center-align">
        <h4>ชมรมคอมพิวเตอร์เปิดรับคัดเลือกนักเรียน ปีการศึกษา <span class="pink-text">2561</span></h4>
        <h5>16-17 พฤษภาคม 2561<br>เวลาประมาณ 16.10 - 17.00 น.</h5>
        <p style="font-size:1.4rem">ณ ห้องปฏิบัติการคอมพิวเตอร์ 1 ตึก 9 ชั้น 1</p>
        <a href="" class="waves-effect waves-light btn blue fullwidth disabled" style="display:none;">ลงทะเบียน</a>
    </div>
    <div class="divider"></div>

    <div class="section center-align" id="s-show">
        <h4 class="center" style="font-size:1.9rem">ชมรมคอมพิวเตอร์ แบ่งเป็น <span class="pink-text">2</span> ฝ่าย ได้แก่</h4>
        <div class="row">
            <div class="col s12 m6">
                <h5>คอมพิวเตอร์ทั่วไป</h5>

                <i class="material-icons" style="font-size: 96px">computer</i>

                <br/>

                สำหรับนักเรียนที่มีความสนใจในการทำงานของคอมพิวเตอร์ ระบบเครือข่าย และการเขียนโปรแกรมทั่วไป
            </div>
            <div class="col s12 m6">
                <h5>คอมพิวเตอร์โอลิมปิค</h5>

                <i class="material-icons" style="font-size: 96px">school</i>

                <br/>

                สำหรับนักเรียนที่ต้องการเรียนรู้การเขียนโปรแกรมด้วยภาษา C และการประยุกต์ใช้ในการแข่งขัน
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="section" id="s-more">
        <div class="row">
            <div class="col s12 l8 center">
                <h4>สถานที่ <i class="material-icons">map</i></h4>
                ห้องปฏิบัติการคอมพิวเตอร์ 1 ตึก 9 ชั้น 1
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.611217557155!2d100.532547!3d13.741052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ed3828ba8e5%3A0xf0db3be87e158217!2zVHJpYW0gVWRvbSBTdWtzYSBTY2hvb2wg4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4LmA4LiV4Lij4Li14Lii4Lih4Lit4Li44LiU4Lih4Lio4Li24LiB4Lip4Liy!5e0!3m2!1sth!2sth!4v1471690441533"
                        allowfullscreen="" style="border:0; height:220px; width:100%" frameborder="0"></iframe>
            </div>
            <div class="col s12 l4 center">
                <h4>ติดตาม <i class="material-icons">public</i></h4>
                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/triamudom.tucc/"
                     data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered"
                     fb-iframe-plugin-query="app_id=1202760429830785&amp;container_width=354&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftriamudom.tucc%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false">
                    <span style="vertical-align: bottom; width: 340px; height: 214px;"><iframe name="f1e665ccf9cef0c"
                                                                                               allowtransparency="true"
                                                                                               allowfullscreen="true"
                                                                                               scrolling="no"
                                                                                               allow="encrypted-media"
                                                                                               title="fb:page Facebook Social Plugin"
                                                                                               style="border: medium none; visibility: visible; width: 340px; height: 214px;"
                                                                                               src="https://www.facebook.com/v2.9/plugins/page.php?app_id=1202760429830785&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FRQ7NiRXMcYA.js%3Fversion%3D42%23cb%3Df337c531e93b60a%26domain%3Dkeendev.net%26origin%3Dhttps%253A%252F%252Fkeendev.net%252Ff20172e3f665b3%26relation%3Dparent.parent&amp;container_width=354&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftriamudom.tucc%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false"
                                                                                               class="" width="1000px"
                                                                                               height="1000px"
                                                                                               frameborder="0"></iframe></span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('end-of-body')
    <script>
        function styleScroll() {
            if ($(document).scrollTop() <= 100) {
                $('nav').css('box-shadow', 'unset');
            } else {
                $('nav').css('box-shadow', '0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)');
            }
            if ($(document).scrollTop() <= 220) {
                $('.brand-logo, .navul').slideUp();
            } else {
                $('.brand-logo, .navul').slideDown();
            }
        }
        $(function () {
            styleScroll();

            $(document).scroll(function () {
                styleScroll();
            });
        });
    </script>
@endsection