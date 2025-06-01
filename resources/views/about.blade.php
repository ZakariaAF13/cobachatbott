@extends('layouts.app')

@section('content')
<main class="p-0 max-w-full mx-auto">
  <!-- Hero Section -->
  <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden mb-0" id="about">
    <img
      src="https://images.pexels.com/photos/2387873/pexels-photo-2387873.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
      alt="About CIC"
      class="absolute inset-0 w-full h-full object-cover z-0"
    />
    <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/40 to-black/80 z-10"></div>
    <div class="relative z-20 text-white text-center px-4 py-24">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg tracking-tight">Tentang Kami</h1>
      <div class="w-24 h-1 bg-green-400 mb-8 mx-auto rounded"></div>
      <p class="text-xl md:text-2xl max-w-2xl mx-auto font-light drop-shadow">
        Ciwangun Indah Camp adalah destinasi wisata alam yang menawarkan pengalaman petualangan, edukasi, dan keindahan alam pegunungan Bandung.
      </p>
    </div>
  </section>
  <!-- Values Section -->
  <section class="py-20 bg-gradient-to-b from-green-50 to-white mb-0" id="values">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-3 text-green-700">
        Nilai-Nilai Kami
      </h2>
      <p class="text-gray-600 max-w-xl mx-auto text-lg">
        Prinsip-prinsip yang menjadi landasan kami dalam memberikan
        pelayanan terbaik kepada pengunjung.
      </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
      <div
        class="bg-white p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform"
      >
        <div class="text-green-500 mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto"
            width="48"
            height="48"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M17 20h5v-2a4 4 0 0 0-3-3.87M9 20H4v-2a4 4 0 0 1 3-3.87M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0 0v4m0 0c-2.21 0-4 1.79-4 4h8c0-2.21-1.79-4-4-4z"
            />
          </svg>
        </div>
        <h3 class="font-semibold text-xl mb-2">Kolaborasi</h3>
        <p class="text-gray-600">
          Kami percaya bahwa kerjasama tim adalah kunci keberhasilan dan
          pengalaman yang berkesan.
        </p>
      </div>
      <div
        class="bg-white p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform"
      >
        <div class="text-green-500 mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto"
            width="48"
            height="48"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z"
            />
          </svg>
        </div>
        <h3 class="font-semibold text-xl mb-2">Konsistensi</h3>
        <p class="text-gray-600">
          Kami berkomitmen untuk selalu memberikan layanan terbaik dan
          pengalaman yang konsisten.
        </p>
      </div>
      <div
        class="bg-white p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform"
      >
        <div class="text-green-500 mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto"
            width="48"
            height="48"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M12 17.75L18.2 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.45 4.73L5.82 21z"
            />
          </svg>
        </div>
        <h3 class="font-semibold text-xl mb-2">Keunggulan</h3>
        <p class="text-gray-600">
          Kami selalu berusaha untuk melampaui ekspektasi dan memberikan
          pengalaman yang luar biasa.
        </p>
      </div>
      <div
        class="bg-white p-8 rounded-2xl shadow-lg text-center hover:scale-105 transition-transform"
      >
        <div class="text-green-500 mb-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="mx-auto"
            width="48"
            height="48"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z"
            />
          </svg>
        </div>
        <h3 class="font-semibold text-xl mb-2">Kepedulian</h3>
        <p class="text-gray-600">
          Kami peduli terhadap lingkungan, masyarakat, dan pengalaman setiap
          pengunjung.
        </p>
      </div>
    </div>
  </section>
  <!-- Milestones Section -->
  <section class="py-20 bg-gradient-to-b from-white to-green-50" id="milestones">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-3 text-green-700">
        Perjalanan Kami
      </h2>
      <p class="text-gray-600 max-w-xl mx-auto text-lg">
        Sejarah perkembangan Ciwangun Indah Camp dari awal hingga saat ini.
      </p>
    </div>
    <div class="relative max-w-3xl mx-auto">
      <div
        class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-green-100"
      ></div>
      <div class="space-y-12">
        <div class="relative flex items-center">
          <div class="w-1/2 text-right pr-8">
            <div class="bg-green-50 p-6 rounded-xl inline-block shadow">
              <h4 class="font-bold text-green-700 text-lg mb-1">2005</h4>
              <p class="text-gray-600">
                Pendirian CIC sebagai destinasi wisata alam di Bandung.
              </p>
            </div>
          </div>
          <div
            class="w-8 h-8 bg-green-400 rounded-full border-4 border-white mx-4 shadow"
          ></div>
          <div class="w-1/2"></div>
        </div>
        <div class="relative flex items-center">
          <div class="w-1/2"></div>
          <div
            class="w-8 h-8 bg-green-400 rounded-full border-4 border-white mx-4 shadow"
          ></div>
          <div class="w-1/2 pl-8">
            <div class="bg-green-50 p-6 rounded-xl inline-block shadow">
              <h4 class="font-bold text-green-700 text-lg mb-1">2010</h4>
              <p class="text-gray-600">
                Perluasan area camping dan penambahan fasilitas outbound.
              </p>
            </div>
          </div>
        </div>
        <div class="relative flex items-center">
          <div class="w-1/2 text-right pr-8">
            <div class="bg-green-50 p-6 rounded-xl inline-block shadow">
              <h4 class="font-bold text-green-700 text-lg mb-1">2015</h4>
              <p class="text-gray-600">
                Peluncuran program agro edukasi untuk institusi pendidikan.
              </p>
            </div>
          </div>
          <div
            class="w-8 h-8 bg-green-400 rounded-full border-4 border-white mx-4 shadow"
          ></div>
          <div class="w-1/2"></div>
        </div>
        <div class="relative flex items-center">
          <div class="w-1/2"></div>
          <div
            class="w-8 h-8 bg-green-400 rounded-full border-4 border-white mx-4 shadow"
          ></div>
          <div class="w-1/2 pl-8">
            <div class="bg-green-50 p-6 rounded-xl inline-block shadow">
              <h4 class="font-bold text-green-700 text-lg mb-1">2020</h4>
              <p class="text-gray-600">
                Pembaruan seluruh fasilitas dan penambahan aktivitas baru.
              </p>
            </div>
          </div>
        </div>
        <div class="relative flex items-center">
          <div class="w-1/2 text-right pr-8">
            <div class="bg-green-50 p-6 rounded-xl inline-block shadow">
              <h4 class="font-bold text-green-700 text-lg mb-1">2025</h4>
              <p class="text-gray-600">
                Implementasi teknologi untuk meningkatkan pengalaman
                pengunjung.
              </p>
            </div>
          </div>
          <div
            class="w-8 h-8 bg-green-400 rounded-full border-4 border-white mx-4 shadow"
          ></div>
          <div class="w-1/2"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Team Section -->
  <section class="py-20 bg-gradient-to-b from-green-50 to-white" id="team">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-3 text-green-700">
        Tim Kami
      </h2>
      <p class="text-gray-600 max-w-xl mx-auto text-lg">
        Kenali orang-orang hebat di balik kesuksesan Ciwangun Indah Camp.
      </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-4">
      <div
        class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-shadow"
      >
        <img
          src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="Ahmad Sulaiman"
          class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500"
        />
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Ahmad Sulaiman</h3>
          <p class="text-green-600 font-medium">Direktur Utama</p>
        </div>
      </div>
      <div
        class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-shadow"
      >
        <img
          src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="Dewi Anggraini"
          class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500"
        />
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Dewi Anggraini</h3>
          <p class="text-green-600 font-medium">Manajer Operasional</p>
        </div>
      </div>
      <div
        class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-shadow"
      >
        <img
          src="https://images.pexels.com/photos/2406949/pexels-photo-2406949.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="Budi Cahyono"
          class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500"
        />
        <div class="p-6 text-center">
          <h3 class="text-xl font-semibold mb-1">Budi Cahyono</h3>
          <p class="text-green-600 font-medium">Kepala Instruktur</p>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
