<x-layout.index>
  <link rel="stylesheet" href="{{ asset('css/web/beranda.css') }}">

<!-- HERO SLIDER -->
<section class="hero">
  <div class="slides" id="slides">
    <!-- Slide 1 -->
    <div class="slide">
       <img class="slide-img" src="{{  asset('LPM/2.jpeg') }}" alt="Slide 1">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <div class="slide-text">
          <div class="slide-badge">Penjaminan Mutu Pendidikan</div>
          <h1 class="slide-title">Lembaga <em>Penjaminan</em><br>Mutu Pendidikan</h1>
          <p class="slide-desc">Berkomitmen menjaga dan meningkatkan kualitas pendidikan tinggi melalui SPMI menuju standar nasional dan internasional.</p>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="slide">
      <img class="slide-img" src="{{  asset('LPM/3.jpeg') }}" alt="Slide 1">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <div class="slide-text">
          <div class="slide-badge">Audit Mutu Internal</div>
          <h1 class="slide-title">Sistem <em>Audit</em><br>Mutu Terpadu</h1>
          <p class="slide-desc">Evaluasi berkala dan perbaikan berkelanjutan dengan pendekatan berbasis risiko untuk memastikan standar mutu terpenuhi.</p>
        </div>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="slide">
      <img class="slide-img3" src="{{  asset('LPM/4.jpeg') }}" alt="Slide 1">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <div class="slide-text">
          <div class="slide-badge">Akreditasi Unggul</div>
          <h1 class="slide-title">Menuju <em>Akreditasi</em><br>Standar Internasional</h1>
          <p class="slide-desc">Pendampingan proses akreditasi program studi menuju standar unggul nasional dan pengakuan internasional.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Arrows -->
  <div class="slider-arrows">
    <button class="arrow-btn" id="prev">‹</button>
    <button class="arrow-btn" id="next">›</button>
  </div>

  <!-- Dots -->
  <div class="slider-dots">
    <button class="dot active" data-i="0"></button>
    <button class="dot" data-i="1"></button>
    <button class="dot" data-i="2"></button>
  </div>
</section>

<!-- ABOUT -->
<section class="about">
  <div class="container">
    <div class="about-grid">
      <div class="about-images reveal">
        <img src="{{ asset('gedung_uca.jpeg') }}" style="position:absolute;top:0;left:0;width:74%;height:76%;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:60px;">
        <img src="{{  asset('LPM/1.jpeg') }}" style="position:absolute;bottom:0;right:0;width:56%;height:56%;border-radius:16px;border:4px solid #fff;display:flex;align-items:center;justify-content:center;font-size:40px;box-shadow:0 12px 40px rgba(0,0,0,.15);">
      </div>
      <div class="reveal">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title">Lembaga Penjaminan Mutu <em>Universitas Cendekia Abditama</em></h2>
        <p class="section-desc">
          {{ $data['site_description'] }}
        </p>
        <div class="pillars">
          <div class="pillar">
            <div class="pillar-icon">🔗</div>
            <div>
              <div class="pillar-title">Koordinasi SPMI</div>
              <div class="pillar-desc">Mengkoordinir pelaksanaan SPMI di seluruh unit UCA untuk memastikan standar mutu terpenuhi secara konsisten.</div>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar-icon">🔍</div>
            <div>
              <div class="pillar-title">Audit Mutu Internal</div>
              <div class="pillar-desc">Melakukan AMI secara berkala untuk evaluasi dan perbaikan berkelanjutan dengan pendekatan berbasis risiko.</div>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar-icon">🏅</div>
            <div>
              <div class="pillar-title">Pendampingan Akreditasi</div>
              <div class="pillar-desc">Mendampingi proses akreditasi program studi menuju standar unggul nasional dan internasional.</div>
            </div>
          </div>
        </div>
        <div class="about-btns">
          <a href="{{ route('profil.tentang') }}" class="btn btn-green">Selengkapnya →</a>
          <a href="{{ route('profil.strukturOrganisasi') }}" class="btn btn-ghost">Struktur Organisasi</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
@if ($data['total_program_studi'])
<section class="stats">
  <div class="container">
    <div class="stats-grid">        
      <div class="stat-item reveal">
        <div class="stat-num"><span class="count" data-target="{{ $data['total_program_studi'] }}">0</span></div>
        <div class="stat-label">Total Program Studi</div>
        <div class="stat-sub">Terdaftar di UCA</div>
      </div>
      @if ($data['akreditasi_unggul'])
      <div class="stat-item reveal">
        <div class="stat-num"><span class="count" data-target="{{ $data['akreditasi_unggul'] }}">0</span></div>
        <div class="stat-label">Akreditasi Unggul</div>
        <div class="stat-sub">Standar Tertinggi</div>
      </div>
      @endif
      @if ($data['akreditasi_baik_sekali'])
      <div class="stat-item reveal">
        <div class="stat-num"><span class="count" data-target="{{ $data['akreditasi_baik_sekali'] }}">0</span></div>
        <div class="stat-label">Akreditasi Baik Sekali</div>
        <div class="stat-sub">Baik Sekali</div>
      </div>
      @endif
      @if ($data['akreditasi_baik'])
      <div class="stat-item reveal">
        <div class="stat-num"><span class="count" data-target="{{ $data['akreditasi_baik'] }}">0</span></div>
        <div class="stat-label">Akreditasi Baik</div>
        <div class="stat-sub">Baik</div>
      </div>
      @endif
      <div class="stat-item reveal">
        <div class="stat-num"><span class="count" data-target="100">0</span><span class="stat-suffix">%</span></div>
        <div class="stat-label">Terakreditasi</div>
        <div class="stat-sub">Seluruh Program Studi</div>
      </div>
    </div>
  </div>
</section>
@endif

<!-- SPMI PROGRAMS -->
<section class="spmi">
  <div class="container">
    <div style="text-align:center">
      <div class="section-label" style="display:inline-flex">Program Unggulan</div>
      <h2 class="section-title" style="text-align:center">Layanan <em>SPMI</em> Kami</h2>
      <p class="section-desc" style="margin:0 auto;text-align:center">Sistem penjaminan mutu yang terintegrasi untuk mendorong kualitas akademik dan kelembagaan secara berkelanjutan.</p>
    </div>
    @if ($data['layanan_spmi'])
    <div class="{{ count($data['layanan_spmi']) >= 3 ? 'spmi-grid' : 'spmi-flex' }}">
      @foreach ($data['layanan_spmi'] as $layanan)
      <div class="spmi-card reveal">
        <div class="spmi-card-title">{{ $layanan['nama_layanan'] }}</div>
        <div class="spmi-card-desc">{{ $layanan['deskripsi_layanan'] }}</div>
      </div>
      @endforeach
    </div>
    @else
    <div class="empty-state">
        <div class="empty-icon">
            📋
        </div>

        <h3>Layanan SPMI Belum Tersedia</h3>

        <p>Informasi layanan SPMI akan segera diperbarui.</p>
    </div>
    @endif
  </div>
</section>

<!-- ACCREDITATION STATS -->
<section class="accreditation">
  <div class="container">
    <div class="section-label">Capaian Akreditasi</div>
    <h2 class="section-title">Status Akreditasi <em>Program Studi</em></h2>
    <p class="section-desc">Rekap status akreditasi seluruh program studi di Universitas Cendekia Abditama berdasarkan lembaga akreditasi nasional.</p>
    @if ($data['status_akreditasi_program_studi'])
    <div class="acc-cards">
      @foreach ($data['status_akreditasi_program_studi'] as $status_akreditasi)
        <div class="acc-card reveal">
            <div class="acc-card-header">
                <img
                    src="{{ Storage::url($status_akreditasi['logo_akreditasi']) }}"
                    class="acc-icon"
                    alt="{{ $status_akreditasi['singkatan_akreditasi'] }}"
                >

                <div>
                    <div class="acc-title">
                        {{ $status_akreditasi['singkatan_akreditasi'] }}
                    </div>

                    <div class="acc-subtitle">
                        {{ $status_akreditasi['nama_akreditasi'] }}
                    </div>
                </div>
            </div>

            <div class="acc-body">
              <div class="acc-stats">
                  @if ($status_akreditasi['akreditasi_unggul'])
                    <div class="acc-stat">
                        <div class="acc-num">
                            {{ $status_akreditasi['akreditasi_unggul'] }}
                        </div>
                        <div class="acc-lbl">Unggul</div>
                    </div>
                  @endif

                  @if ($status_akreditasi['akreditasi_baik_sekali'])
                    <div class="acc-stat">
                        <div class="acc-num">
                            {{ $status_akreditasi['akreditasi_baik_sekali'] }}
                        </div>
                        <div class="acc-lbl">Baik Sekali</div>
                    </div>
                  @endif

                  @if ($status_akreditasi['akreditasi_baik'])
                  <div class="acc-stat">
                      <div class="acc-num">
                        {{ $status_akreditasi['akreditasi_baik'] }}
                      </div>
                    <div class="acc-lbl">Baik</div>
                  </div>
                  @endif
                </div>
            </div>
        </div>
      @endforeach
    </div>
    @else
    <div class="empty-state">
        <div class="empty-icon">🏆</div>

        <h3>Belum Ada Capaian Akreditasi</h3>

        <p>
            Data capaian akreditasi belum tersedia saat ini.
            Informasi akan ditampilkan setelah proses pembaruan data dilakukan.
        </p>
    </div>
    @endif
  </div>
</section>

<!-- NEWS -->
<section class="news">
  <div class="container">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:48px;">
      <div>
        <div class="section-label">Artikel & Kegiatan</div>
        <h2 class="section-title" style="margin-bottom:0">Kegiatan <em>Terkini</em></h2>
      </div>
      <a href="{{ route('kegiatan.index') }}" class="btn btn-ghost" style="font-size:13px;padding:10px 20px;">Semua Kegiatan →</a>
    </div>
    @if ($kegiatanTerbaru || $kegiatanLama->isNotEmpty())
    <div class="news-grid">
      <div class="news-featured reveal">
        <img src="{{ asset('LPM/4.jpeg') }}" class="news-img tall" style="font-size:64px;color:rgba(255,255,255,.15);">
        <div class="news-body">
          <span class="news-tag">SPMI</span>
          <div class="news-title">Pelaksanaan Audit Mutu Internal Fakultas Tarbiyah dan Ilmu Keguruan Semester Ganjil 2025/2026</div>
          <div class="news-excerpt">Lembaga Penjaminan Mutu UCA kembali melaksanakan kegiatan Audit Mutu Internal (AMI) untuk semester ganjil tahun akademik 2025/2026. Kegiatan ini melibatkan fakultas tarbiyah dan ilmu keguruan di lingkungan Universitas Cendekia Abditama.</div>
          <div class="news-meta">
            <span>📅 15 Januari 2025</span>
            <span>👤 Admin LPM</span>
            <span>📖 5 min baca</span>
          </div>
        </div>
      </div>
      <div class="news-sidebar">
          <div class="news-small reveal">
            {{-- <img src="{{ asset('LPM/3.jpeg') }}" class="news-thumb"> --}}
            <div class="news-small-body">
              {{-- <span class="news-tag" style="font-size:10px;padding:2px 8px;">Akreditasi</span> --}}
              <span class="news-tag" style="font-size:10px;padding:2px 8px;">AMI</span>
              <div class="news-small-title">Pelaksanaan Audit Mutu Internal Fakultas Teknik Semester Ganjil 2025/2026</div>
              <div class="news-small-date">📅 10 Januari 2025</div>
            </div>
          </div>
          <div class="news-small reveal">
            {{-- <div class="news-thumb">🎓</div> --}}
            {{-- <img src="{{ asset('LPM/4.jpeg') }}" class="news-thumb"> --}}
            <div class="news-small-body">
              <span class="news-tag" style="font-size:10px;padding:2px 8px;">AMI</span>
              <div class="news-small-title">Pelaksanaan Audit Mutu Internal Fakultas Ilmu Keperawatan Semester Ganjil 2025/2026</div>
              <div class="news-small-date">📅 10 Januari 2025</div>
            </div>
          </div>
          <div class="news-small reveal">
            {{-- <div class="news-thumb">📊</div> --}}
            <div class="news-small-body">
              <span class="news-tag" style="font-size:10px;padding:2px 8px;">AMI</span>
              <div class="news-small-title">Pelaksanaan Audit Mutu Internal Fakultas Ekonomi dan Bisnis Islam Semester Ganjil 2025/2026</div>
              <div class="news-small-date">📅 10 Januari 2025</div>
            </div>
          </div>
          <div class="news-small reveal">
            <div class="news-small-body">
              <span class="news-tag" style="font-size:10px;padding:2px 8px;">AMI</span>
              <div class="news-small-title">Pelaksanaan Audit Mutu Internal Fakultas Teknik Semester Ganjil 2025/2026</div>
              <div class="news-small-date">📅 10 Januari 2025</div>
            </div>
          </div>
        </div>
      </div>
      @else
        <div class="empty-state">
            <div class="empty-icon">
                📰
            </div>

            <h3>Belum Ada Kegiatan</h3>

            <p>
                Saat ini belum terdapat data kegiatan yang dapat ditampilkan.
                Silakan kembali lagi nanti.
            </p>
        </div>
      @endif

  </div>
</section>

<!-- PARTNERS -->
<section class="partners">
  <div class="container">
    <div class="partners-title">Mitra Akreditasi</div>
    @if ($data['mitra_akreditasi'])  
      <div class="partners-logos">
        <div class="partner-badge">
          <img src="{{ asset('lam/logo-ban-pt.png') }}" alt="logo BAN-PT">
        </div>
        <div class="partner-badge">
          <img src="{{ asset('lam/logo-lamemba-300x160.png') }}" alt="logo LAMEMBA">
        </div>
        <div class="partner-badge">
          <img src="{{  asset('lam/logo-png-kotak.-png.png') }}" alt="logo LAMTeknik">
          {{-- LAMTeknik --}}
        </div>
        <div class="partner-badge">
          <img src="{{ asset('lam/Lama-infokom-300x169.jpg') }}" alt="logo LAMInfokom">
        </div>
        <div class="partner-badge">
          <img src="{{ asset('lam/logo-lamdik-300x160.png') }}" alt="logo LAMDIK">
        </div>
        <div class="partner-badge">
          <img src="{{ asset('lam/Logo-LAMKes-Q-ok3-300x286.png') }}" alt="logo LAMKES">
        </div>
      </div>
    @else
    <div class="empty-state">
        <div class="empty-icon">🤝</div>

        <h3>Belum Ada Mitra Akreditasi</h3>

        <p>
            Belum terdapat data mitra akreditasi yang dapat ditampilkan.
            Silakan cek kembali pada waktu berikutnya.
        </p>
    </div>
    @endif
  </div>
</section>

<!-- CONTACT -->
<section class="contact">
  <div class="container">
    <div>
      <div class="section-label">Hubungi Kami</div>
      <h2 class="section-title">Ada Pertanyaan? <em>Kami Siap</em> Membantu</h2>
      <p class="section-desc" style="margin-bottom:36px">Tim kami siap memberikan informasi dan bantuan terkait penjaminan mutu dan akreditasi.</p>
      <div class="contact-info">
        <div class="contact-item reveal">
          <div class="c-icon">📍</div>
          <div>
            <div class="c-title">Alamat</div>
            <div class="c-val">{{ $data['alamat'] ?? 'Jl. Islamic Raya, Klp. Dua, Kecamatan Kelapa Dua, Kabupaten Tangerang, Banten 15811' }}</div>
          </div>
        </div>
        <div class="contact-item reveal">
          <div class="c-icon">📞</div>
          <div>
            <div class="c-title">Telepon</div>
            <div class="c-val">{{ $data['telepon'] ?? '(021) 5462852' }}</div>
          </div>
        </div>
        <div class="contact-item reveal">
          <div class="c-icon">📧</div>
          <div>
            <div class="c-title">Email</div>
            <div class="c-val">{{ $data['email'] ?? 'info@uca.ac.id' }}</div>
          </div>
        </div>
        <div class="contact-item reveal">
          <div class="c-icon">🕐</div>
          <div>
            <div class="c-title">Jam Operasional</div>
            <div class="c-val">{{ $data['jam_operasional'] ?? 'Senin – Jumat: 08.00 – 16.00 WIB'}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Back to Top -->
<button class="back-top" id="backTop">↑</button>

<script>
// ─── SLIDER ───
let current = 0;
const slides = document.getElementById('slides');
const dots = document.querySelectorAll('.dot');
const total = 3;

function goTo(i) {
  current = (i + total) % total;
  slides.style.transform = `translateX(-${current * (100/3)}%)`;
  dots.forEach((d,idx) => d.classList.toggle('active', idx === current));
}

document.getElementById('next').addEventListener('click', () => goTo(current + 1));
document.getElementById('prev').addEventListener('click', () => goTo(current - 1));
dots.forEach(d => d.addEventListener('click', () => goTo(+d.dataset.i)));

setInterval(() => goTo(current + 1), 5000);

// ─── REVEAL ON SCROLL ───
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// ─── COUNT UP ───
const countObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    const el = entry.target;
    const target = +el.dataset.target;
    let start = 0;
    const step = target / 60;
    const timer = setInterval(() => {
      start = Math.min(start + step, target);
      el.textContent = Math.floor(start);
      if (start >= target) clearInterval(timer);
    }, 16);
    countObserver.unobserve(el);
  });
}, { threshold: 0.5 });
document.querySelectorAll('.count').forEach(el => countObserver.observe(el));

// ─── BACK TO TOP ───
const backTop = document.getElementById('backTop');
window.addEventListener('scroll', () => backTop.classList.toggle('show', scrollY > 400));
backTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

const hamburger = document.getElementById('hamburger');
const mobileNav = document.getElementById('mobileNav');

hamburger.addEventListener('click', () => {
  const isOpen = mobileNav.classList.toggle('open');
  hamburger.classList.toggle('active', isOpen);
});

// Tutup saat klik link di mobile nav
mobileNav.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    mobileNav.classList.remove('open');
    hamburger.classList.remove('active');
  });
});

// Tutup saat klik di luar
document.addEventListener('click', (e) => {
  if (!e.target.closest('.navbar-inner')) {
    mobileNav.classList.remove('open');
    hamburger.classList.remove('active');
  }
});
</script>

</x-layout.index>