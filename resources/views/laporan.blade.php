<x-layout.index>
<link rel="stylesheet" href="{{ asset('css/web/laporan.css') }}">

<!-- ════════════════════════
     HERO
════════════════════════ -->
<div class="hero">
  <div class="hero-inner">
    <div class="breadcrumb"><a href="{{ route('beranda.index') }}">Beranda</a><span>/</span><span>Laporan</span></div>
    <div class="hero-tag">Dokumentasi Mutu</div>
    <h1 class="hero-h1">Laporan <em>Kegiatan</em> Penjaminan Mutu</h1>
    <p class="hero-p">Kumpulan dokumen laporan resmi kegiatan penjaminan mutu LPM UMI, mencakup Monitoring & Evaluasi (Monev), Audit Mutu Internal (AMI), Rapat Tinjauan Manajemen (RTM), dan Rencana Tindak Lanjut (RTL).</p>
    <div class="hero-actions">
      <a href="#monev" class="btn btn-primary">📊 Monev</a>
      <a href="#ami" class="btn-outline-white">🔍 AMI</a>
      <a href="#rtm" class="btn-outline-white">🏛 RTM</a>
      <a href="#rtl" class="btn-outline-white">✅ RTL</a>
    </div>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ════════════════════════
     MAIN LAYOUT
════════════════════════ -->
<div style="background:var(--neutral-50);">
  <div class="container">
    <div class="laporan-layout">

      <!-- SIDE NAV -->
      <aside class="side-nav">
        <div class="snav-title">Isi Halaman</div>
        <div class="snav-list">
          <a class="snav-item active" href="#monev"><div class="snav-dot"></div>Monev</a>
          <div class="snav-divider"></div>
          <a class="snav-item" href="#ami"><div class="snav-dot"></div>AMI</a>
          <div class="snav-divider"></div>
          <a class="snav-item" href="#rtm"><div class="snav-dot"></div>RTM</a>
          <div class="snav-divider"></div>
          <a class="snav-item" href="#rtl"><div class="snav-dot"></div>RTL</a>
        </div>
      </aside>

      <!-- KONTEN -->
      <div class="content-area">

        <!-- ═══════════════════
             MONEV
        ═══════════════════ -->
        <div id="monev" class="laporan-section">
          <div class="sec-header sh-monev reveal">
            <div class="sh-icon">📊</div>
            <div class="sh-content">
              <div class="sh-label">Monitoring & Evaluasi</div>
              <div class="sh-title">Monev</div>
              <div class="sh-desc">{{ $data->deskripsi_monev }}</div>
            </div>
          </div>

          @if ($data->dokumen_monev)
            <div class="dok-group-title reveal">
              <div class="dgt-dot" style="background:var(--secondary);"></div>
              Laporan Monev Pembelajaran
            </div>
            @foreach ($data->dokumen_monev as $dokumen_monev)
            <div class="dok-list">
              <a class="dok-card c-monev reveal"
                href="{{ asset('storage/' . $dokumen_monev['file']) }}"
                target="_blank" rel="noopener">
                <div class="dok-icon-wrap">📁</div>
                <div class="dok-info">
                  <div class="dok-name">{{ $dokumen_monev['nama_dokumen'] }}</div>
                </div>
                <div class="dok-actions">
                  <div class="dok-btn dok-btn-folder">Buka Folder ↗</div>
                </div>
              </a>
            </div>
            @endforeach
          @else
          <div class="empty-state">
              <div class="empty-icon">
                  📄
              </div>

              <h3>Dokumen Belum Tersedia</h3>

               <p>
                  Dokumen yang Anda cari saat ini belum diunggah ke sistem.
                  Silakan kembali beberapa saat lagi atau hubungi administrator
                  untuk memperoleh informasi lebih lanjut.
              </p>
          </div>
          @endif

          @if ($data->informasi_tambahan_monev)
            <div class="info-note reveal">
              <div class="info-note-icon">ℹ️</div>
              <div class="info-note-text">
                {{ $data->informasi_tambahan_monev }}.
              </div>
            </div>
          @endif
        </div>

        <!-- ═══════════════════
             AMI
        ═══════════════════ -->
        <div id="ami" class="laporan-section">
          <div class="sec-header sh-ami reveal">
            <div class="sh-icon">🔍</div>
            <div class="sh-content">
              <div class="sh-label">Audit Mutu Internal</div>
              <div class="sh-title">AMI</div>
              <div class="sh-desc">{{ $data->deskripsi_ami }}</div>
            </div>
          </div>

          @if ($data->dokumen_ami)
            <div class="dok-group-title reveal">
              <div class="dgt-dot" style="background:#0a2e4a;"></div>
              Laporan AMI
            </div>
            @foreach ($data->dokumen_ami as $dokumen_ami)
              <div class="dok-list">
                <a class="dok-card c-ami reveal"
                  href="{{ asset('storage/' . $dokumen_ami['file']) }}"
                  target="_blank" rel="noopener">
                  <div class="dok-icon-wrap">📋</div>
                  <div class="dok-info">
                    <div class="dok-name">{{ $dokumen_ami['nama_dokumen'] }}</div>
                  </div>
                  <div class="dok-actions">
                    <div class="dok-btn dok-btn-blue">Buka Dokumen ↗</div>
                  </div>
                </a>
              </div>
            @endforeach
          @else
            <div class="empty-state">
              <div class="empty-icon">
                  📄
              </div>

              <h3>Dokumen Belum Tersedia</h3>

               <p>
                  Dokumen yang Anda cari saat ini belum diunggah ke sistem.
                  Silakan kembali beberapa saat lagi atau hubungi administrator
                  untuk memperoleh informasi lebih lanjut.
              </p>
          </div>
          @endif

          @if ($data->informasi_tambahan_ami)
            <div class="info-note reveal" style="background:rgba(10,46,74,.05);border-color:rgba(10,46,74,.2);">
              <div class="info-note-icon">🔍</div>
              <div class="info-note-text" style="color:var(--neutral-600);">
                {{ $data->informasi_tambahan_ami }}
              </div>
            </div>
          @endif
        </div>

        <!-- ═══════════════════
             RTM
        ═══════════════════ -->
        <div id="rtm" class="laporan-section">
          <div class="sec-header sh-rtm reveal">
            <div class="sh-icon">🏛</div>
            <div class="sh-content">
              <div class="sh-label">Rapat Tinjauan Manajemen</div>
              <div class="sh-title">RTM</div>
              <div class="sh-desc">{{ $data->deskripsi_rtm }}</div>
            </div>
          </div>

          @if ($data->dokumen_rtm)
            <div class="dok-group-title reveal">
              <div class="dgt-dot" style="background:var(--primary);"></div>
              Dokumen RTM
            </div>
            @foreach ($data->dokumen_rtm as $dokumen_rtm)
              <div class="dok-list">
                <a class="dok-card c-rtm reveal"
                  href="{{ asset('storage/' . $dokumen_rtm['file']) }}"
                  target="_blank" rel="noopener">
                  <div class="dok-icon-wrap">📁</div>
                  <div class="dok-info">
                    <div class="dok-name">{{ $dokumen_rtm['nama_dokumen'] }}</div>
                  </div>
                  <div class="dok-actions">
                    <div class="dok-btn dok-btn-folder">Buka Folder ↗</div>
                  </div>
                </a>
              </div>  
            @endforeach
          @else
            <div class="empty-state">
              <div class="empty-icon">
                  📄
              </div>

              <h3>Dokumen Belum Tersedia</h3>

               <p>
                  Dokumen yang Anda cari saat ini belum diunggah ke sistem.
                  Silakan kembali beberapa saat lagi atau hubungi administrator
                  untuk memperoleh informasi lebih lanjut.
              </p>
          </div>
          @endif

          @if ($data->informasi_tambahan_rtm)
            <div class="info-note reveal">
              <div class="info-note-icon">🏛</div>
              <div class="info-note-text">
                {{ $data->informasi_tambahan_rtm }}
              </div>
            </div>
          @endif
        </div>

        <!-- ═══════════════════
             RTL
        ═══════════════════ -->
        <div id="rtl" class="laporan-section">
          <div class="sec-header sh-rtl reveal">
            <div class="sh-icon">✅</div>
            <div class="sh-content">
              <div class="sh-label">Rencana Tindak Lanjut</div>
              <div class="sh-title">RTL</div>
              <div class="sh-desc">{{ $data->deskripsi_rtl }}</div>
            </div>
          </div>

          @if ($data->dokumen_rtl)
            <div class="dok-group-title reveal">
              <div class="dgt-dot" style="background:#6b21a8;"></div>
              Dokumen RTL
            </div>
            @foreach ($data->dokumen_rtl as $dokumen_rtl)
              <div class="dok-list">
                <a class="dok-card c-rtl reveal"
                  href="{{ asset('storage/' . $dokumen_rtl['file']) }}"
                  target="_blank" rel="noopener">
                  <div class="dok-icon-wrap">📁</div>
                  <div class="dok-info">
                    <div class="dok-name">{{ $dokumen_rtl['nama_dokumen'] }}</div>
                  </div>
                  <div class="dok-actions">
                    <div class="dok-btn dok-btn-purple">Buka Folder ↗</div>
                  </div>
                </a>
              </div>
            @endforeach
          @else
            <div class="empty-state">
              <div class="empty-icon">
                  📄
              </div>

              <h3>Dokumen Belum Tersedia</h3>

               <p>
                  Dokumen yang Anda cari saat ini belum diunggah ke sistem.
                  Silakan kembali beberapa saat lagi atau hubungi administrator
                  untuk memperoleh informasi lebih lanjut.
              </p>
          </div>
          @endif

          @if ($data->informasi_tambahan_rtl)
            <div class="info-note reveal" style="background:rgba(107,33,168,.05);border-color:rgba(107,33,168,.2);">
              <div class="info-note-icon">✅</div>
              <div class="info-note-text" style="color:var(--neutral-600);">
                {{ $data->informasi_tambahan_rtl }}
              </div>
            </div>
          @endif
        </div>
      </div><!-- /content-area -->
    </div><!-- /laporan-layout -->
  </div><!-- /container -->
</div>
<button class="back-top" id="backTop">↑</button>

<script>

/* BACK TO TOP */
const bt = document.getElementById('backTop');
if(bt){ window.addEventListener('scroll', function(){ bt.classList.toggle('show', scrollY > 400); }); bt.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); }); }

/* REVEAL */
const ro = new IntersectionObserver(function(entries){ entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('visible'); }); }, { threshold: 0.08 });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function(el){ ro.observe(el); });

/* SIDE NAV ACTIVE ON SCROLL */
const sections = ['monev','ami','rtm','rtl'];
window.addEventListener('scroll', function(){
  const y = window.scrollY + 120;
  sections.forEach(function(id){
    const el = document.getElementById(id);
    if(!el) return;
    if(el.offsetTop <= y && el.offsetTop + el.offsetHeight > y){
      document.querySelectorAll('.snav-item').forEach(function(i){ i.classList.remove('active'); });
      const t = document.querySelector('.snav-item[href="#' + id + '"]');
      if(t) t.classList.add('active');
    }
  });
});
</script>
</x-layout.index>