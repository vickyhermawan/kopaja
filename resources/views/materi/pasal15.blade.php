@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 210px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPH Pasal 15</h3>
                        <h2>Definisi</h2>
                        <p>Pasal 15 Undang-Undang Pajak Penghasilan menyebutkan tentang penetapan Norma Penghitungan Khusus guna menghitung penghasilan neto bagi Wajib Pajak tertentu yang tidak dapat dihitung dengan ketentuan umum sebagaimana diatur Dallam Pasal 16 UU PPh. 
                        </p>
                        <div class="row">
                            <div class="col-sm-4 col-md-12 col-lg-4">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Download Materi</h4>
                                    <p>Download Materi Untuk belajar lebih nyaman</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-12 col-lg-4">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <a href="{{Route('latsoalpasal15')}}"><h4>Contoh Soal Pajak</h4></a>
                                    <p>Belajar perhitungan terkait pajak</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-12 col-lg-4">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Latihan Soal Pajak</h4>
                                    <p>Uji Kemampuanmu sejauh mana kamu bisa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="{{url('/')}}/etrain/img/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

     <!--================ Start Course Details Area =================-->
     <section class="course_details_area section_padding" style="padding-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="content_wrapper">
                        <h4 class="title_top">Norma Perhitungan Khusus</h4>
                        <div class="content">
                        Norma penghitungan khusus untuk Wajib Pajak tertentu yang dimaksud dalam penjelasan Pasal 15 UU PPh adalah:  <br>
                        a. Perusahaan pelayaran dan penerbangan internasional <br>
                        b. Perusahaan asuransi luar negeri, perusahaan pengeboran minyak, gas, dan panas bumi, perusahaan dagang asing <br>
                        c. Perusahaan yang melakukan investasi dalam bentuk bagun-guna-serah (build, operate, and transfer).  <br>
                        </div>
                    </div>

                    <h4 class="title">Penghasilan Yang Dikenakan PPh Bersifat Final Yang Diatur Dalam PPh Pasal 15 :</h4>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>1. Pajak Penghasilan atas Imbalan yang Dibayarkan/Terutang kepada Perusahaan Pelayaran Dalam Negeri</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>2. Pajak Penghasilan atas Imbalan yang Dibayarkan/Terutang kepada Perusahaan Pelayaran dan Penerbangan Luar Negeri</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>3. Pajak Penghasilan atas Imbalan yang Dibayarkan/Terutang kepada Perusahaan Penerbangan Dalam Negeri</p>
                                </li>
                            </ul>
                        </div>
                </div>


                <div class="col-lg-4 right-contents">
                 
                        <h4 class="title">Reviews</h4>
                        <div class="content">
                            <div class="review-top row pt-40">
                                <div class="col-lg-12">
                                    <h6 class="mb-15">Provide Your Rating</h6>
                                    <div class="d-flex flex-row reviews justify-content-between">
                                        <span>Quality</span>
                                        <div class="rating">
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                        <span>Outstanding</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection