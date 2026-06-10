<x-layout.index>
  {{-- <link rel="stylesheet" href="{{ asset('css/web/tentang.css') }}"> --}}
<!-- ═══════════════════════════════════════ -->
<!-- HERO                                   -->
<!-- ═══════════════════════════════════════ -->
<div class="hero">
  <div class="hero-inner reveal">
      <div class="breadcrumb">
        <a href="{{ route('beranda.index') }}">Beranda</a><span>/</span>
        <a href="#">Profil</a><span>/</span>
        <span>Tentang Kami</span>
      </div>
      <div class="hero-tag">Lembaga Penjaminan Mutu</div>
      <h1 class="hero-h1">Tentang <em>LPM</em> <br> Universitas Cendekia Abditama</h1>
      <p class="hero-p">Lembaga Penjaminan Mutu UCA hadir untuk memastikan kualitas pendidikan tinggi yang berkelanjutan, berstandar nasional dan internasional, berlandaskan nilai-nilai keislaman.</p>
      <div class="hero-actions">
        <a href="#tentang" class="btn btn-primary">Pelajari Lebih →</a>
      </div>
  </div>
  <!-- Wave pemisah -->
  <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ═══════════════════════════════════════ -->
<!-- STAT STRIP                             -->
<!-- ═══════════════════════════════════════ -->
<div class="stat-strip">
  <div class="stat-strip-inner">
    <div class="ss-item reveal">
      <div class="ss-num"><span class="count" data-target="{{ $totalProgramStudi ?? 0 }}">0</span></div>
      <div class="ss-lbl">Program Studi</div>
      <div class="ss-sub">Aktif di UCA</div>
    </div>
    @if (optional($data)->akreditasi_unggul)
    <div class="ss-item reveal">
      <div class="ss-num"><span class="count" data-target="{{ $data->akreditasi_unggul ?? 0}}">0</span></div>
      <div class="ss-lbl">Akreditasi Unggul</div>
      <div class="ss-sub">Peringkat tertinggi</div>
    </div>
    @endif
    <div class="ss-item reveal">
      <div class="ss-num"><span class="count" data-target="{{ $data->auditor_internal ?? 0}}">0</span></div>
      <div class="ss-lbl">Auditor Internal</div>
      <div class="ss-sub">Bersertifikat BNSP</div>
    </div>
    <div class="ss-item reveal">
      <div class="ss-num"><span class="count" data-target="100">0</span><span style="color:var(--primary);font-size:28px;">%</span></div>
      <div class="ss-lbl">Terakreditasi</div>
      <div class="ss-sub">Semua program studi</div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════════════ -->
<!-- TENTANG LPM                            -->
<!-- ═══════════════════════════════════════ -->
<section id="tentang" style="background:#fff;">
  <div class="container">
    <div class="about-grid">
        <div class="about-images reveal">
            @if ($data?->gambar_1)
                <img src="{{ asset('storage/' . $data->gambar_1) }}" class="img-main">
            @else
                <div class="img-main">
                    🏛
                </div>
            @endif
            @if ($data?->gambar_2)
                <img src="{{ asset('storage/' . $data->gambar_2) }}" class="img-accent">
            @else
                <div class="img-accent">
                    🎓
                </div>
            @endif
        </div>
      <div class="reveal">
        <div class="section-label">Tentang Kami</div>
        <h2 class="section-title">Lembaga Penjaminan <em>Mutu Universitas Cendekia Abditama</em></h2>
        <div class="page-explanation">
          {!! optional($data)->page_explanation !!}
        </div>
        <div style="display:flex;gap:12px;margin-top:28px;">
          <a href="{{ route('profil.strukturOrganisasi') }}" class="btn btn-green">Struktur Organisasi</a>
        </div>
      </div>
    </div>
  </div>
</section>
<button class="back-top" id="backTop">↑</button>

<script>
// ── BACK TO TOP ──
const bt = document.getElementById('backTop');
if(bt){
  window.addEventListener('scroll', function(){ bt.classList.toggle('show', scrollY > 400); });
  bt.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); });
}

// ── REVEAL ON SCROLL ──
document.querySelectorAll('.reveal').forEach(function(el){
  new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.1 }).observe(el);
});

// ── COUNT UP ──
const countObs = new IntersectionObserver(function(entries){
  entries.forEach(function(entry){
    if(!entry.isIntersecting) return;
    const el = entry.target;
    const target = +el.dataset.target;
    let current = 0;
    const step = target / 60;
    const timer = setInterval(function(){
      current = Math.min(current + step, target);
      el.textContent = Math.floor(current);
      if(current >= target) clearInterval(timer);
    }, 16);
    countObs.unobserve(el);
  });
}, { threshold: 0.5 });
document.querySelectorAll('.count').forEach(function(el){ countObs.observe(el); });
</script>
</x-layout.index>