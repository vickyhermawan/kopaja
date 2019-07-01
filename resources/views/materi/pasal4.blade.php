@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part" style="padding-bottom:0px; z-index: 99;
  padding: 180px 0px 210px;">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>PPH Pasal 4 Ayat 2</h3>
                        <h2>Definisi</h2>
                        <p>PPh Pasal 21 adalah pajak yang dipotong dari penghasilan sehubungan dengan pekerjaan, jasa, dan kegiatan yang dilakukan oleh Wajib Pajak (WP) orang pribadi dalam negeri, yaitu penghasilan berupa gaji, upah, honorarium, tunjangan, serta pembayaran lain dengan nama dan dalam bentuk apapun.
                        </p>
                        <div class="row">
                            <div class="col-sm-4 col-md-12 col-lg-4">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4 >Download Materi</h4>
                                    <p>Download Materi Untuk belajar lebih nyaman</p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-12 col-lg-4">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <a href="{{Route('latsoalpasal4')}}"><h4>Contoh Soal Pajak</h4></a>
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
                        <h4 class="title_top">Ciri-ciri Pph Pasal 4 Ayat 2</h4>
                        <div class="content">
                        a. Dikenakan atas penghasilan bruto <br>
                        b. Tidak dapat dikreditkan terhadap pajak terutang pada akhir tahun pajak<br>
                        c. Penghasilan dikenakan PPh final tidak dapat digabungkan dengan penghasilan yang bersifat tidak final pada saat penghitungan PPh terutang pada akhir tahun pajak <br>
                        d. Tarif pajak PPh final berbeda-beda <br>
                        e. Dikenakan atas transaksi atau usaha tertentu walaupun dalam kondisi rugi tetap dikenakan pajak <br>
                        f. Setelah pembayaran PPh final maka kewajiban PPh final telah selesai dan hanya dilaporkan di SPT Masa dan SPT Tahunan PPh Orang Pribadi atau Badan <br>
                        g. Diatur dalam Peraturan Pemerintah <br>
                        </div>
                    </div>

                    <h4 class="title">Penghasilan yang dikenakan PPH bersifat final yang diatur dalam PPH Pasal 4 ayat 2 :</h4>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>1. Pengalihan Hak atas Tanah dan atau Bangunan</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>2. Persewaan Hak atas Tanah dan atau Bangunan</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>3. Bunga Simpanan Koperasi untuk Penghasilan  Bunga Simpanan s/d Rp240.000,-/bulan.</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>4. Dividen dan Bunga Simpanan Koperasi untuk Penghasilan Bunga Simpanan >Rp240.000,-/bulan.</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>5. Bunga Deposito, Tabungan, Sertifikat Bank Indonesia</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>6. Hadiah Undian</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>7. Bunga Obligasi yang diperoleh Wajib Pajak Badan</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>8. Bunga Obligasi yang diperoleh Perusahaan Reksadana</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>9. Usaha Jasa Konstruksi Untuk Kualifikasi Usaha Kecil</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>10. Usaha Jasa Konstruksi Untuk Kualifikasi Usaha Menengah dan Besar</p>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>11. Usaha Jasa Konstruksi Tidak Memiliki Kualifikasi Usaha.</p>
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