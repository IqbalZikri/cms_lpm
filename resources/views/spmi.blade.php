<x-layout.index>
<link rel="stylesheet" href="{{ asset('css/web/spmi.css') }}">

<!-- ══════════════════════
     HERO
══════════════════════ -->
<div class="hero">
  <div class="hero-inner">
    <div class="breadcrumb"><a href="{{ route('beranda.index') }}">Beranda</a><span>/</span><span>SPMI</span></div>
    <div class="hero-tag">Sistem Penjaminan Mutu Internal</div>
    <h1 class="hero-h1">Sistem Penjaminan Mutu <em>Internal</em></h1>
    <p class="hero-p">SPMI adalah kegiatan sistemik penjaminan mutu pendidikan tinggi yang diselenggarakan secara otonom oleh UCA, mencakup penetapan, pelaksanaan, evaluasi, pengendalian, dan peningkatan standar mutu secara berkelanjutan.</p>
    <div class="hero-actions">
      <a href="#tentang-spmi" class="btn btn-primary">📋 Tentang SPMI</a>
      <a href="#monev" class="btn-outline-white">📊 Monev</a>
      <a href="#ami" class="btn-outline-white">🔍 AMI</a>
      <a href="#dokumen" class="btn-outline-white">📁 Dokumen</a>
    </div>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ══════════════════════
     MAIN LAYOUT
══════════════════════ -->
<div style="background:var(--neutral-50);">
  <div class="container">
    <div class="spmi-layout">

      <!-- SIDE NAV -->
      <aside class="side-nav">
        <div class="side-nav-title">Navigasi Halaman</div>
        <div class="side-nav-list">
          <a class="snav-item active" href="#tentang-spmi" onclick="setActive(this)">
            <div class="snav-dot"></div>Tentang SPMI
          </a>
          <div class="snav-divider"></div>
          <a class="snav-item" href="#monev" onclick="setActive(this)">
            <div class="snav-dot"></div>Monitoring & Evaluasi
          </a>
          <a class="snav-item" style="padding-left:28px;font-size:13px;" href="#ruang-lingkup" onclick="setActive(this)">
            <div class="snav-dot" style="width:5px;height:5px;"></div>Ruang Lingkup
          </a>
          <a class="snav-item" style="padding-left:28px;font-size:13px;" href="#output-monev" onclick="setActive(this)">
            <div class="snav-dot" style="width:5px;height:5px;"></div>Output Monev
          </a>
          <div class="snav-divider"></div>
          <a class="snav-item" href="#ami" onclick="setActive(this)">
            <div class="snav-dot"></div>Audit Mutu Internal
          </a>
          <a class="snav-item" style="padding-left:28px;font-size:13px;" href="#tujuan-ami" onclick="setActive(this)">
            <div class="snav-dot" style="width:5px;height:5px;"></div>Tujuan AMI
          </a>
          <a class="snav-item" style="padding-left:28px;font-size:13px;" href="#pelaksanaan-ami" onclick="setActive(this)">
            <div class="snav-dot" style="width:5px;height:5px;"></div>Pelaksanaan AMI
          </a>
          <div class="snav-divider"></div>
          <a class="snav-item" href="#dokumen" onclick="setActive(this)">
            <div class="snav-dot"></div>Dokumen SPMI
          </a>
        </div>
      </aside>

      <!-- KONTEN UTAMA -->
      <div class="content-area">

        <!-- ════════════════════
             1. TENTANG SPMI
        ════════════════════ -->
        <div id="tentang-spmi" class="spmi-section">
          <div class="section-label">Sistem Penjaminan Mutu Internal</div>
          <h2 class="section-title">Tentang <em>SPMI</em></h2>
          {!! $data->tentang_spmi ?? 'Belum Diisi' !!}
          
          <!-- Siklus PPEPP -->
          <div class="ppepp-wrap reveal">
              <div class="title-siklus">Siklus Penjaminan Mutu</div>
              <h3>Siklus <em style="color:var(--primary);font-style:normal;">PPEPP</em></h3>
              <p>Lima tahapan yang dilaksanakan secara berkesinambungan oleh seluruh unit di Universitas Cendekia Abditama.</p>
              <div class="ppepp-row">
                <div class="ppepp-item">
                  <div class="ppepp-circle" style="background:linear-gradient(135deg,var(--secondary),var(--secondary-light));">
                    <div class="ppepp-letter">P</div><div class="ppepp-sub">PENETAPAN</div>
                  </div>
                  <div class="ppepp-title">Penetapan</div>
                  <div class="ppepp-desc">Menetapkan standar mutu sebagai acuan seluruh kegiatan akademik dan non-akademik.</div>
                </div>
                <div class="ppepp-item">
                  <div class="ppepp-circle" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));">
                    <div class="ppepp-letter">P</div><div class="ppepp-sub">PELAKSANAAN</div>
                  </div>
                  <div class="ppepp-title">Pelaksanaan</div>
                  <div class="ppepp-desc">Melaksanakan seluruh kegiatan sesuai standar yang telah ditetapkan.</div>
                </div>
                <div class="ppepp-item">
                  <div class="ppepp-circle" style="background:linear-gradient(135deg,#0a2e4a,#1a4a6a);">
                    <div class="ppepp-letter">E</div><div class="ppepp-sub">EVALUASI</div>
                  </div>
                  <div class="ppepp-title">Evaluasi</div>
                  <div class="ppepp-desc">Mengevaluasi ketercapaian standar melalui Monev dan AMI secara berkala.</div>
                </div>
                <div class="ppepp-item">
                  <div class="ppepp-circle" style="background:linear-gradient(135deg,#6b21a8,#9333ea);">
                    <div class="ppepp-letter">P</div><div class="ppepp-sub">PENGENDALIAN</div>
                  </div>
                  <div class="ppepp-title">Pengendalian</div>
                  <div class="ppepp-desc">Mengendalikan pelaksanaan dan menindaklanjuti hasil evaluasi secara tepat.</div>
                </div>
                <div class="ppepp-item">
                  <div class="ppepp-circle" style="background:linear-gradient(135deg,#b45309,#d97706);">
                    <div class="ppepp-letter">P</div><div class="ppepp-sub">PENINGKATAN</div>
                  </div>
                  <div class="ppepp-title">Peningkatan</div>
                  <div class="ppepp-desc">Meningkatkan standar mutu secara berkelanjutan menuju kualitas lebih tinggi.</div>
                </div>
              </div>
            </div>
        </div>

        <!-- ════════════════════
             2. MONEV
        ════════════════════ -->
        <div id="monev" class="spmi-section">
          <!-- Header Monev -->
          <div class="monev-header reveal">
            <div class="mh-inner">
              <div class="mh-label">Komponen SPMI</div>
              <h2 class="mh-title">Monitoring & <em>Evaluasi</em> (Monev)</h2>
              {!! $data->deskripsi_monev ?? 'Belum Diisi' !!}
            </div>
          </div>

          <!-- Ruang Lingkup -->
          <div id="ruang-lingkup" style="scroll-margin-top:90px;">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:16px;">
              <div style="width:4px;height:24px;background:var(--primary);border-radius:2px;flex-shrink:0;"></div>
              <h3 style="font-size:18px;font-weight:800;color:var(--neutral-800);">Ruang Lingkup Monev</h3>
            </div>
          @if ($data->ruang_lingkup_monev)
              <div class="ruang-lingkup-grid">
                  @foreach ($data->ruang_lingkup_monev as $ruang_lingkup)
                    <div class="rl-card reveal">
                      <div class="rl-title">{{ $ruang_lingkup['nama_ruang_lingkup'] }}</div>
                      <div class="rl-desc">{!! $ruang_lingkup['deskripsi_ruang_lingkup'] !!}</div>
                    </div>  
                  @endforeach
              </div>
              @else
              <div class="empty-state" style="margin-bottom: 30px;">
                <div class="empty-icon">
                  🌐
                </div>
                
                <h3>Ruang lingkup Monev Belum Tersedia</h3>
                
                <p>Informasi Ruang lingkup Monev akan segera diperbarui.</p>
              </div>
              @endif
          </div>
              
          <!-- Output Monev -->
          <div id="output-monev" style="scroll-margin-top:90px;">
            <div class="output-box reveal">
              <div class="ob-title">Output Monev</div>
                @if ($data->output_monev)
                  <div class="rich-content">
                      {!! $data->output_monev !!}
                  </div>
                @else
                  <div class="empty-state" style="margin-bottom: 30px;">
                    <div class="empty-icon">
                      📤
                    </div>
                    
                    <h3>Output Monev Belum Tersedia</h3>
                    
                    <p>Informasi Output Monev akan segera diperbarui.</p>
                  </div>
                @endif
              </div>
          </div>
        </div>

        <!-- ════════════════════
             3. AMI
        ════════════════════ -->
        <div id="ami" class="spmi-section">
          <!-- Header AMI -->
          <div class="ami-header reveal">
            <div class="mh-inner">
              <div class="mh-label">Komponen SPMI</div>
              <h2 class="mh-title" style="color:#fff;">Audit Mutu <em>Internal</em> (AMI)</h2>
              {!! $data->deskripsi_ami ?? 'Belum Diisi' !!}
            </div>
          </div>

          <!-- Tujuan AMI -->
          <div id="tujuan-ami" style="scroll-margin-top:90px;">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:16px;">
              <div style="width:4px;height:24px;background:var(--primary);border-radius:2px;flex-shrink:0;"></div>
              <h3 style="font-size:18px;font-weight:800;color:var(--neutral-800);">Tujuan AMI</h3>
            </div>
            @if (!$data->tujuan_ami)
                <div class="empty-state" style="margin-bottom: 30px;">
                  <div class="empty-icon">
                      🎯
                  </div>

                  <h3>Tujuan AMI Belum Tersedia</h3>

                  <p>Informasi tujuan AMI akan segera diperbarui.</p>
                </div>
            @else
              <div class="ami-tujuan-grid">
                  @foreach ($data->tujuan_ami as $tujuan_ami)
                      <div class="at-card reveal">
                          <div class="at-number">
                              {{ $tujuan_ami['nomor'] }}
                          </div>

                          <div class="at-content">
                              {!! $tujuan_ami['deskripsi'] !!}
                          </div>
                      </div>
                  @endforeach
              </div>
            @endif
          </div>

          <!-- Pelaksanaan AMI -->
          <div id="pelaksanaan-ami" style="scroll-margin-top:90px;">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:16px;">
              <div style="width:4px;height:24px;background:var(--primary);border-radius:2px;flex-shrink:0;"></div>
              <h3 style="font-size:18px;font-weight:800;color:var(--neutral-800);">Pelaksanaan AMI</h3>
            </div>
            @if (!$data->pelaksanaan_ami)
              <div class="empty-state" style="margin-bottom: 30px;">
                <div class="empty-icon">
                    🚀
                </div>

                <h3>Pelaksanaan AMI Belum Tersedia</h3>

                <p>Informasi pelaksanaan AMI akan segera diperbarui.</p>
              </div>
            @else
              <div class="mekanism-wrap reveal">
                <div class="mekanism-title">Tahapan Pelaksanaan AMI</div>
                <div class="mekanism-steps">
                  @foreach ($data->pelaksanaan_ami as $pelaksanaan_ami)
                    <div class="ms-step step-{{ ((int) $pelaksanaan_ami['tahap'] % 4) + 1 }}">
                      <div class="ms-num">{{ $pelaksanaan_ami['tahap'] }}</div>
                      <div class="ms-title">{{{ $pelaksanaan_ami['aktifitas'] }}}</div>
                      <div class="ms-tag step-{{ ((int) $pelaksanaan_ami['tahap'] % 4) + 1 }}">{{ $pelaksanaan_ami['keterangan'] }}</div>
                    </div>    
                  @endforeach
                </div>
              </div>
            @endif
        </div>

        <!-- ════════════════════
             4. DOKUMEN SPMI
        ════════════════════ -->
        <div id="dokumen" class="spmi-section">
          <!-- Header Dokumen -->
          <div class="dok-section-intro reveal">
            <div style="position:relative;z-index:1;">
              <div style="font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.6);margin-bottom:10px;">Repositori Mutu</div>
              <h2 style="font-family:'Playfair Display',serif;font-size:28px;font-weight:800;color:#fff;margin-bottom:12px;line-height:1.2;">Dokumen <em style="color:var(--primary-light);font-style:normal;">SPMI</em></h2>
              <p style="font-size:14px;color:rgba(255,255,255,.78);max-width:600px;line-height:1.75;">Seluruh dokumen resmi SPMI UCA tersedia untuk diunduh.</p>
            </div>
          </div>

          @php
            $no = 1
          @endphp

          <!-- ─── Kebijakan Mutu ─── -->
          <div class="dok-group reveal">
            @if ($data->dokumen_spmi)
              @foreach ($data->dokumen_spmi as $dokumen_spmi)
                <div class="dok-list">
                  <a class="dok-item" href="{{ asset('storage/' . $dokumen_spmi['file']) }}" download="{{ $dokumen_spmi['nama_dokumen'] }}">
                    <div class="dok-item-icon">{{ $no++ }}</div>
                    <div class="dok-item-info">
                      <div class="dok-item-name">{{ $dokumen_spmi['nama_dokumen'] }}</div>
                      {{-- <div class="dok-item-meta">Dokumen kebijakan sistem penjaminan mutu internal UCA secara menyeluruh</div> --}}
                    </div>
                    <div class="dok-item-badge">Unduh</div>
                  </a>
                </div>
              @endforeach
            @else
              <div class="empty-state" style="margin-bottom: 30px;">
                <div class="empty-icon">
                    📄
                </div>

                <h3>Dokumen AMI Belum Tersedia</h3>

                <p>Informasi dokumen AMI akan segera diperbarui.</p>
              </div>
            @endif
          </div>

          <!-- Info note -->
        </div>

      </div><!-- /content-area -->
    </div><!-- /spmi-layout -->
  </div><!-- /container -->
</div>
<button class="back-top" id="backTop">↑</button>

<script>
/* ── DROPDOWN ── */
(function(){
  const dds = document.querySelectorAll('.nav-dropdown');
  dds.forEach(function(dd){
    let t = null;
    function open(){ clearTimeout(t); dds.forEach(function(d){ if(d!==dd) d.classList.remove('open'); }); dd.classList.add('open'); }
    function close(){ t = setTimeout(function(){ dd.classList.remove('open'); }, 150); }
    function cancel(){ clearTimeout(t); }
    dd.addEventListener('mouseenter', open); dd.addEventListener('mouseleave', close);
    const m = dd.querySelector('.dropdown-menu');
    if(m){ m.addEventListener('mouseenter', cancel); m.addEventListener('mouseleave', close); }
  });
  document.addEventListener('click', function(e){ if(!e.target.closest('.nav-dropdown')) dds.forEach(function(d){ d.classList.remove('open'); }); });
})();

/* ── HAMBURGER ── */
const hb = document.getElementById('hamburger'), mn = document.getElementById('mobileNav');
if(hb && mn){
  hb.addEventListener('click', function(){ const o = mn.classList.toggle('open'); hb.classList.toggle('active', o); });
  mn.querySelectorAll('a').forEach(function(l){ l.addEventListener('click', function(){ mn.classList.remove('open'); hb.classList.remove('active'); }); });
  document.addEventListener('click', function(e){ if(!e.target.closest('.navbar-inner') && !e.target.closest('.mobile-nav')){ mn.classList.remove('open'); hb.classList.remove('active'); } });
}

/* ── BACK TO TOP ── */
const bt = document.getElementById('backTop');
if(bt){ window.addEventListener('scroll', function(){ bt.classList.toggle('show', scrollY > 400); }); bt.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); }); }

/* ── REVEAL ── */
const ro = new IntersectionObserver(function(entries){ entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('visible'); }); }, { threshold: 0.08 });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function(el){ ro.observe(el); });

/* ── SIDE NAV ACTIVE ON SCROLL ── */
function setActive(el){
  document.querySelectorAll('.snav-item').forEach(function(i){ i.classList.remove('active'); });
  el.classList.add('active');
}

const sections = ['tentang-spmi','monev','ami','dokumen'];
window.addEventListener('scroll', function(){
  const scrollY = window.scrollY + 120;
  sections.forEach(function(id){
    const el = document.getElementById(id);
    if(!el) return;
    if(el.offsetTop <= scrollY && el.offsetTop + el.offsetHeight > scrollY){
      document.querySelectorAll('.snav-item').forEach(function(i){ i.classList.remove('active'); });
      const target = document.querySelector('.snav-item[href="#' + id + '"]');
      if(target) target.classList.add('active');
    }
  });
});
</script>
</x-layout.index>