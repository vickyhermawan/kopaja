@extends('layouts.land')

@section('content')
<!-- learning part start-->
<section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h3>Bea Materai</h3>
                        <h2>Definisi</h2>
                        <p>Bea meterai adalah pajak yang dikenakan atas dokumen yang menurut UndangUndang Bea Meterai menjadi objek Bea Meterai. Dokumen yang dikenai bea meterai antara lain adalah dokumen yang berbentuk surat yang memuat jumlah uang, dokumen yang bersifat perdata, dan dokumen yang dapat digunakan di muka pengadilan misalnya dokumen kontrak pengadaan meja kursi kantor, dokumen perjanjian pembangunan gedung kantor dengan pengusaha jasa konstruksi, dan dokumen kontrak pengadaan jasa tenaga kebersihan.
                        <br>                        
                         Nilai bea meterai yang berlaku saat ini Rp. 3.000,00 dan Rp. 6.000,00 yang disesuaikan dengan nilai dokumen dan penggunaan dokumen. Bea meterai tidak diperlukan nomor identitas baik untuk wajib pajak maupun objek pajak. Pembayaran bea meterai terjadi terlebih dahulu daripada saat terutang. Waktu pembayaran dapat dilakukan secara isidentil dan tidak terikat waktu.
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
                                    <a href="{{Route('latsoalbeamaterai')}}"><h4>Contoh Soal Pajak</h4></a>
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
                        <h4 class="title_top">Jenis Bea Materai  </h4>
                        <div class="content">
                        1. Benda meterai adalah meterai tempel dan kertas meterai yang dikeluarkan oleh Pemerintah Republik Indonesia.  <br>
                        2. Pemeteraian kemudian adalah pelunasan bea meterai yang dilakukan pejabat pos atas dokumen yang bea meterai belum dilunasi.   <br>
                        </div>
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Tarif Bea Materai   </h4>
                        <div class="content">
                        Menurut Pasal 8 Undang-Undang No. 42 Tahun 2009, tarif pajak penjualan atas barang mewah ditetapkan paling rendah 10% (sepuluh persen) dan paling tinggi sebesar 200% (dua ratus persen). Jika pengusaha melakukan ekspor Barang Kena Pajak yang tergolong mewah maka akan dikenai pajak dengan tarif sebesar 0% (nol persen). 
                        <br>
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