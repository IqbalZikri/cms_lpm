<x-layout.index>
<!-- ══════════════════════════════════
     HERO
══════════════════════════════════ -->
<section class="hero">
  <div class="hero-inner">
    <div class="breadcrumb">
      <a href="index.html">Beranda</a><span>/</span>
      <a href="tentang.html">Profil</a><span>/</span>
      <span>Visi & Misi</span>
    </div>
    <div class="hero-tag">
      Landasan Strategis LPM
    </div>
    <h1 class="hero-h1">Visi & <em>Misi</em> LPM <br>Universitas Cendekia Abditama</h1>
    <p class="hero-p">Arah, tujuan, dan komitmen Lembaga Penjaminan Mutu Universitas Cendekia Abditama dalam mewujudkan pendidikan tinggi bermutu, berdaya saing, dan berkarakter islami.</p>
    <div class="hero-actions">
      <a href="#visi" class="btn btn-primary">🌟 Lihat Visi</a>
      <a href="#misi" class="btn-outline-white">🎯 Lihat Misi</a>
    </div>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</section>

<!-- ══════════════════════════════════
     VISI
══════════════════════════════════ -->
<section id="visi" class="visi-section">
  <div class="container">
    <div class="visi-layout">

      <!-- Teks Visi -->
      <div class="visi-text">
        <div class="section-label">Visi Kami</div>
        <h2 class="section-title">Visi <em>LPM Universitas Cendekia Abditama</em></h2>
        <p class="section-text">
          Visi LPM Universitas Cendekia Abditama mencerminkan cita-cita besar yang ingin diwujudkan dalam bidang penjaminan mutu pendidikan tinggi, berlandaskan nilai-nilai keislaman dan orientasi global.
        </p>

        <div class="visi-quote-wrap">
          <div class="visi-quote-text">
            {!! $data->visi ?? '<p style="text-align: center;"> Visi belum diisi </p>' !!}
          </div>
          <div class="visi-quote-divider"></div>
        </div>

        <p style="font-size:14px;color:var(--neutral-500);line-height:1.75;margin-bottom:24px;">
          Visi ini menegaskan komitmen LPM untuk tidak hanya memenuhi standar mutu minimal, tetapi mendorong Universitas Cendekia Abditama menuju pengakuan nasional dan internasional dengan tetap menjunjung nilai-nilai Islam sebagai landasan utama.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════
     MISI
══════════════════════════════════ -->
<section id="misi" class="misi-section">
  <div class="container">
    <div style="text-align:center;margin-bottom:48px;">
      <div class="section-label">Misi Kami</div>
      <h2 class="section-title">Misi <em>LPM Universitas Cendekia Abditama</em></h2>
      <p style="font-size:15px;color:var(--neutral-500);max-width:560px;margin:0 auto;line-height:1.7;">Lima misi strategis yang menjadi peta jalan Lembaga Penjaminan Mutu Universitas Cendekia Abditama dalam mewujudkan visinya.</p>
    </div>

    <!-- 5 Kartu Misi -->
    <div class="misi-content">
      {!! $data->misi ?? '<p style="text-align: center;">Misi Belum Diisi</p>' !!}
    </div>
    {{-- <div class="misi-cards">
      <div class="misi-card mc-1 reveal">
        <div class="misi-num">1</div>
        <div class="misi-icon">📐</div>
        <div class="misi-card-title">Pengembangan SPMI Komprehensif</div>
        <div class="misi-card-desc">Mengembangkan dan mengimplementasikan Sistem Penjaminan Mutu Internal yang komprehensif dan berkelanjutan di seluruh unit Universitas Cendekia Abditama melalui siklus PPEPP.</div>
      </div>
      <div class="misi-card mc-2 reveal">
        <div class="misi-num">2</div>
        <div class="misi-icon">🕌</div>
        <div class="misi-card-title">Budaya Mutu Islami</div>
        <div class="misi-card-desc">Mendorong terwujudnya budaya mutu yang berakar pada nilai-nilai keislaman dan keindonesiaan di seluruh lingkungan sivitas akademika Universitas Cendekia Abditama.</div>
      </div>
      <div class="misi-card mc-3 reveal">
        <div class="misi-num">3</div>
        <div class="misi-icon">🏅</div>
        <div class="misi-card-title">Fasilitasi Akreditasi</div>
        <div class="misi-card-desc">Memfasilitasi proses akreditasi program studi dan institusi menuju standar nasional dan internasional yang diakui oleh BAN-PT, LAM, maupun lembaga internasional.</div>
      </div>
      <div class="misi-card mc-4 reveal">
        <div class="misi-num">4</div>
        <div class="misi-icon">🎓</div>
        <div class="misi-card-title">Peningkatan Kompetensi SDM</div>
        <div class="misi-card-desc">Meningkatkan kompetensi sumber daya manusia dalam bidang penjaminan mutu melalui pelatihan auditor, workshop, dan sertifikasi berkelanjutan.</div>
      </div>
      <div class="misi-card mc-5 reveal">
        <div class="misi-num">5</div>
        <div class="misi-icon">🖥</div>
        <div class="misi-card-title">Sistem Informasi Mutu</div>
        <div class="misi-card-desc">Membangun dan mengembangkan sistem informasi mutu yang terintegrasi untuk mendukung pengambilan keputusan berbasis data secara real-time.</div>
      </div>
    </div> --}}
  </div>
</section>
<button class="back-top" id="backTop">↑</button>

<script>
// ── DROPDOWN ──
(function(){
  const dds = document.querySelectorAll('.nav-dropdown');
  dds.forEach(function(dd){
    let t = null;
    function open(){ clearTimeout(t); dds.forEach(function(d){ if(d!==dd) d.classList.remove('open'); }); dd.classList.add('open'); }
    function close(){ t = setTimeout(function(){ dd.classList.remove('open'); }, 150); }
    function cancel(){ clearTimeout(t); }
    dd.addEventListener('mouseenter', open);
    dd.addEventListener('mouseleave', close);
    const m = dd.querySelector('.dropdown-menu');
    if(m){ m.addEventListener('mouseenter', cancel); m.addEventListener('mouseleave', close); }
  });
  document.addEventListener('click', function(e){
    if(!e.target.closest('.nav-dropdown')) dds.forEach(function(d){ d.classList.remove('open'); });
  });
})();

// ── HAMBURGER ──
const hb = document.getElementById('hamburger');
const mn = document.getElementById('mobileNav');
if(hb && mn){
  hb.addEventListener('click', function(){ const o = mn.classList.toggle('open'); hb.classList.toggle('active', o); });
  mn.querySelectorAll('a').forEach(function(l){ l.addEventListener('click', function(){ mn.classList.remove('open'); hb.classList.remove('active'); }); });
  document.addEventListener('click', function(e){
    if(!e.target.closest('.navbar-inner') && !e.target.closest('.mobile-nav')){ mn.classList.remove('open'); hb.classList.remove('active'); }
  });
}

// ── BACK TO TOP ──
const bt = document.getElementById('backTop');
if(bt){
  window.addEventListener('scroll', function(){ bt.classList.toggle('show', scrollY > 400); });
  bt.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); });
}

// ── REVEAL ON SCROLL ──
const revealObs = new IntersectionObserver(function(entries){
  entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function(el){ revealObs.observe(el); });

// ── PROGRESS BARS (animasi saat masuk viewport) ──
const progObs = new IntersectionObserver(function(entries){
  entries.forEach(function(entry){
    if(!entry.isIntersecting) return;
    const bar = entry.target;
    const targetW = bar.dataset.width;
    bar.style.width = targetW + '%';
    progObs.unobserve(bar);
  });
}, { threshold: 0.4 });
document.querySelectorAll('.prog-bar').forEach(function(bar){ progObs.observe(bar); });

// ── SMOOTH SCROLL untuk anchor ──
document.querySelectorAll('a[href^="#"]').forEach(function(a){
  a.addEventListener('click', function(e){
    const target = document.querySelector(a.getAttribute('href'));
    if(target){ e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
  });
});
</script>
</x-layout.index>