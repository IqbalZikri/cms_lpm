<x-layout.index>
<!-- ══════════════════════════════════
     PAGE HERO
══════════════════════════════════ -->
<div class="hero">
  <div class="hero-inner">
    <div class="breadcrumb">
      <a href="{{ route('beranda.index') }}">Beranda</a>
      <span>/</span>
      <a href="#">Profil</a>
      <span>/</span>
      <span>Struktur Organisasi</span></div>
    <div class="hero-tag">Kepengurusan LPM UMI</div>
    <h1 class="hero-h1">Struktur <em>Organisasi</em></h1>
    <p class="hero-p">Susunan kepengurusan Lembaga Penjaminan Mutu Universitas Cendekia Abditama beserta tugas, fungsi, dan personil setiap unit kerja periode {{ $periode ?? '( Periode Belum Ditetapkan )' }}.</p>
    <div class="hero-actions">
      <div class="ph-meta-item">📅 Periode <strong>{{ $periode ?? '(Periode Belum Ditentukan)' }}</strong></div>
      <div class="ph-meta-item">👥 Total <strong>{{ $personil ?? 0 }} Personil</strong></div>
    </div>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 52" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,52 C480,0 960,52 1440,22 L1440,52 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ══════════════════════════════════
     BAGAN ORG CHART
══════════════════════════════════ -->
<section class="org-section">
  <div class="container">
    <div style="text-align:center;margin-bottom:52px;">
      <div class="section-label" style="display:inline-flex;">Bagan Organisasi</div>
      <h2 class="section-title">Struktur <em>Kepengurusan</em></h2>
    </div>
    
    @if ($data)
    <img src="{{ asset('storage/' . $data->gambar) }}" alt="struktur organisasi" class="img-stuktur-organisasi">
    @else
    <div class="empty-state">
        <div class="empty-icon">
            <svg width="42" height="42" fill="none" viewBox="0 0 24 24">
                <path d="M4 21V7l8-4 8 4v14" 
                      stroke="currentColor"
                      stroke-width="1.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M9 21v-4h6v4" 
                      stroke="currentColor"
                      stroke-width="1.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </div>
        
        <h3>Struktur Organisasi Belum Tersedia</h3>

        <p>
            Informasi struktur organisasi fakultas sedang diperbarui.
            Silakan kunjungi halaman ini kembali dalam beberapa waktu.
        </p>
    </div>
    @endif

  </div>
</section>

<button class="back-top" id="backTop">↑</button>

<script>
/* ── BACK TO TOP ── */
const bt = document.getElementById('backTop');
if(bt){ window.addEventListener('scroll', function(){ bt.classList.toggle('show', scrollY > 400); }); bt.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); }); }

/* ── REVEAL ON SCROLL ── */
const ro = new IntersectionObserver(function(entries){ entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('visible'); }); }, { threshold: 0.08 });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function(el){ ro.observe(el); });
</script>
</x-layout.index>