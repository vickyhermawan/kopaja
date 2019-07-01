@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPN</h3>
                        <h2>Definisi</h2>
                        <p>Berdasarkan Undang-Undang RI No. 42 Tahun 2009 tentang Perubahan Ketiga atas Undang-Undang No. 8 Tahun 1983 tentang Pajak Pertambahan Nilai Barang dan Jasa dan Pajak Penjualan atas Barang Mewah, bahwa Pajak Pertambahan Nilai (PPN) adalah pajak atas konsumsi barang dan jasa di daerah pabean yang dikenakan secara bertingkat di setiap jalur produksi dan distribusi.
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
                                    <a href="{{Route('latsoalppn')}}"><h4>Contoh Soal Pajak</h4></a>
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
                        <h4 class="title_top">Tarif PBB  </h4>
                        <div class="content">
                        Tarif pajak yang dikenakan atas objek pajak adalah sebesar 0,5%.  <br>
                        Dasar pengenaan pajak adalah Nilai Jual Objek Pajak (NJOP). Besarnya NJOP ditetapkan setiap tiga tahun oleh Kepala Kantor Wilayah Dirjen Pajak atas nama Menteri Keuangan dengan mempertimbangkan pendapat Pemerintah setempat. Dasar penghitungan pajak adalah yang ditetapkan serendah-rendahnya 20% dan setinggi-tingginya 100% dari NJOP.
                        Besarnya persentase ditetapkan dengan Peraturan Pemerintah dengan memperhatikan kondisi ekonomi nasional.  <br>
                        Agar tidak membebani Wajib Pajak di daerah Pedesaan, maka Pemerintah Daerah telah menetapkan besarnya persentase untuk menentukan besarnya NJKP, yaitu:   <br>
                        a. Sebesar 40% untuk: <br>
                            (1) Objek Pajak perkebunan;  <br>
                            (2) Objek Pajak Kehutanan;   <br>
                            (3) Objek Pajak lainnya, yang Wajib Pajaknya perorangan NJOP atas bumi dan bangunan sama atau lebih dari Rp 1.000.000.000,00 (satu miliar rupiah).  <br>        
                            b. Sebesar 20% untuk: <br>
                            (1) Objek Pajak Pertambangan; <br>
                            (2) Objek Pajak lainnya yang NJOP-nya kurang dari Rp 1.000.000.000,00 (satu miliar rupiah). <br>
                        </div>
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Cara Menghitung Pajak  </h4>
                        <div class="content">
                        
                        </div>
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