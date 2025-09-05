<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-50">
    <x-navbar></x-navbar>
    <div class="container mx-auto px-4">
      <!-- Sejarah -->
        <h1 class="card-title font-bold text-3xl justify-center my-7">Sejarah SMK Negeri 4 Tasikmalaya</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 justify-center items-center">
            <div>
                <img class="mx-auto my-5" width="150" src="https://smkn4-web.netlify.app/_nuxt/Logo-SMK.Ba-Cc_BE.png" alt="">
            </div>
            <div class="col-span-2">
                <div class="card card-border w-full bg-white shadow">
                    <div class="card-body">
                        <h1>Sejalan dengan Program Pemerintah di bidang pendidikan Menengah Kejuruan pada saat itu yakni
                            pemerataan akses ditambah pula dengan banyaknya keinginan masyarakat yang mengharapkan
                            adanya SMK Negeri di daerah Kecamatan Purbaratu Kota Tasikmalaya, terutama untuk menampung
                            tamatan dari SLTP yang ingin melanjutkan ke SMK maka beberapa tokoh masyarakat, unsur
                            pejabat pemerintah di Kecamatan Purbaratu Kota Tasikmalaya mengusulkan kepada pemerintah
                            Kota Tasikmalaya dan Pemerintah Provinsi Jawa Barat, agar berdirinya SMK Negeri di Kecamatan
                            Purbaratu Kota Tasikmalaya.

                            Setelah melalui perjuangan yang sangat panjang dari berbagai pihak khususnya Disdik Kota
                            Tasikmalaya dan pihak-pihak terkait lainnya sesuai prosedur dan ketentuan yang berlaku pada
                            waktu itu dengan mengucapkan syukur Alhamdulillah akhirnya pada tahun pelajaran 2010/2011
                            SMK Negeri 4 Tasikmalaya mulai berdiri, pada awalnya membuka Kompetensi Keahlian Teknik
                            Komputer dan Jaringan dengan pendaftar peserta Didik Baru pada waktu itu berjumlah 44 orang.
                            Pada awalnya tempat belajar menumpang di SMP Negeri 17 Kota Tasikmalaya, dan sekolah
                            induknya adalah SMK Negeri 2 Kota Tasikmalaya.

                            Pada tahun 2012 keluarah surat izin Pendirian berdasarkan keputusan kepala Badan Pelayanan
                            Perizinan Terpadu Kota Tasikmalaya No. 420/9/SK-BPPT/2012 Tanggal 08 Februari 2012.</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sejarah -->

        <h1 class="card-title font-bold text-3xl justify-center my-7">VISI dan MISI</h1>
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-7 justify-center">
          <div class="card card-border w-full shadow bg-white mx-auto">
            <div class="card-body">
              <h1 class="card-title font-semibold justify-center mb-auto">Visi</h1>
              <p class="text-center my-8">"Mencetak generasi unggul yang berkarakter, kompeten, dan berdaya saing di era globalisasi melalui pendidikan berkualitas."</p>
            </div>
          </div>
          <div class="card card-border w-full shadow bg-white mx-auto">
            <div class="card-body">
              <h1 class="card-title font-semibold justify-center mb-auto">Misi</h1>
              <span class="text-center">Menyelenggarakan pendidikan yang berbasis teknologi dan inovasi.
Memupuk karakter positif melalui kegiatan keagamaan dan sosial.
Mengembangkan kemampuan akademik dan non-akademik secara seimbang.
Meningkatkan kompetensi lulusan agar siap bersaing di dunia kerja.
Menjalin kemitraan dengan industri untuk meningkatkan pengalaman praktis.</span>
            </div>
          </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
