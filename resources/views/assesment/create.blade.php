@extends('layouts.welcome')

@section('content')
    <div class="position-relative bg-white d-flex p-0" style="height: 100vh;">
        {{-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Content Start -->
        <div class="container-fluid pt-4 px-4" style="height: 100%; width: 100%">
            <div class="swiper mySwiper" style="position: relative; overflow-y: scroll; height: 100%; width: 100%">
                <div class="swiper-wrapper">
                    {{-- {!! Form::open([
                        'route' => 'asesmen.store',
                        'method' => 'POST',
                        'enctype' => 'multipart/form-data',
                    ]) !!} --}}
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('asesmen.store') }}">
                        @csrf
                        <input type="text" name="test">
                        <button type="submit">Submit</button>
                    </form>
                    

                    @include('components.form-asesmen-ppks')
                    @include('components.form-asesmen-biodata-ppks-page-1')
                    @include('components.form-asesmen-biodata-ppks-page-2')
                    @include('components.form-asesmen-kepemilikan-adminduk')
                    @include('components.form-asesmen-riwayat-bantuan')
                    @include('components.form-asesmen-kondisi-biologis')
                    @include('components.form-asesmen-kondisi-sosial')
                    @include('components.form-asesmen-aspek-akademis')
                    @include('components.form-asesmen-kondisi-ekonomi-page-1')
                    @include('components.form-asesmen-kondisi-ekonomi-page-2')
                    @include('components.form-asesmen-kondisi-ekonomi-page-3')
                    @include('components.form-asesmen-data-keluarga-page-1')
                    @include('components.form-asesmen-data-keluarga-page-2')
                    @include('components.form-asesmen-diagnosa-layanan-intervensi')
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Content End -->
        <!-- EXTERNAL LIBRARY -->
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

        <script src="{{ asset('js/form-temp-database.js') }}"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    type: "progressbar",
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>

        <script>
            const tempDatabase = new FormTempDatabase;

            let anakKe = 1

            function handleTambahAnak() {
                const tempData = tempDatabase.getTempData;
                if (anakKe >= tempData.asesmen_biodata_ppks.jumlah_anak) {
                    window.alert(`Jumlah anak hanya ${tempData.asesmen_biodata_ppks.jumlah_anak}`)
                } else {
                    anakKe++;


                    const node = document.createElement("div");

                    node.innerHTML = `
               <div>
                       <p style="font-weight: bold">Identitas Anak Ke ${anakKe}</p>
                       <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                           <label class="form-label" for="anak_ke_${anakKe}">Nama</label>
                           <input type="text" id="anak_ke_${anakKe}" name="anak_ke_${anakKe}" class="form-control" />
                       </div>
                       <button type="button"
                           onclick="tempDatabase.handleAsesmenDetailDataKeluargaAnakN('anak_ke_n', getValueByName('anak_ke_${anakKe}'))">Simpan
                           Data Anak ke-${anakKe}</button>
                   </div>
               `;

                    document.getElementById("form-anak").appendChild(node);
                }
            }

            function getValueByName(name) {
                const value = document.getElementsByName(name)[0].value;
                //  console.info(value);
                return value;
            }


            // document.getElementById("submit-btn").addEventListener("click", function(event) {
            //     //  console.info("CLICKED")
            //     event.preventDefault()

            //     const fotoPPKS = $('#foto_ppks')[0].files
            //     const fotoKTP = $('#foto_ktp_ppks')[0].files
            //     const fotoRumahTampakDepan = $('#foto_rumah_tampak_depan')[0].files
            //     const fotoRumahTampakDalam = $('#foto_rumah_tampak_dalam')[0].files
            //     const fotoHomeVisit = $('#foto_home_visit')[0].files

            //     tempDatabase.handleAsesmenDiagnosaLayananIntervensi('foto_ppks', fotoPPKS);

            //     const tempData = tempDatabase.getTempData;
            //     var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            //     console.info(CSRF_TOKEN)
            //     console.info(tempData)

            //     $.ajax({
            //         type: 'POST',
            //         url: "/api/form",
            //         data: JSON.stringify(tempData),
            //         dataType: 'JSON',
            //         contentType: false,
            //         processData: false,
            //         success: function(data) {
            //             console.info(data)
            //             window.alert('Data berhasil disimpan!');
            //         },
            //         error: function(error) {
            //             console.info(error)
            //             window.alert(error.toString());
            //         }
            //     });
            // });
        </script>
    @endsection
