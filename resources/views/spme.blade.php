<x-layout.index>
  <link rel="stylesheet" href="{{ asset('css/web/spme.css') }}">
<!-- ════════════════════════════
     HERO
════════════════════════════ -->
<div class="hero">
  <div class="hero-inner">
    <div class="reveal-left">
      <div class="breadcrumb"><a href="{{ route('beranda.index') }}">Beranda</a><span>/</span><span>SPME</span></div>
      <div class="hero-tag">Sistem Penjaminan Mutu Eksternal</div>
      <h1 class="hero-h1">Sistem Penjaminan Mutu <em>Eksternal</em></h1>
      <p class="hero-p">SPME adalah penjaminan mutu pendidikan tinggi yang dilakukan oleh lembaga akreditasi nasional secara independen. Halaman ini menyediakan akses langsung ke seluruh portal lembaga akreditasi yang relevan bagi Universitas Cendekia Abditama.</p>
      <div class="ph-stat-row">
        <div class="ph-stat-pill">
          <div><div class="ph-stat-num">66</div><div class="ph-stat-lbl">Program Studi</div></div>
        </div>
        <div class="ph-stat-pill">
          <div><div class="ph-stat-num">100%</div><div class="ph-stat-lbl">Terakreditasi</div></div>
        </div>
      </div>
    </div>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ════════════════════════════
     TENTANG SPME
════════════════════════════ -->
<section class="tentang-section">
  <div class="container">
    <div class="reveal-left">
      <div class="section-label">Penjaminan Mutu Eksternal</div>
      <h2 class="section-title">Tentang <em>SPME</em></h2>
      <p style="font-size:15px;color:var(--neutral-600);line-height:1.8;max-width:720px;">
        Sistem Penjaminan Mutu Eksternal (SPME) adalah penjaminan mutu yang dilakukan oleh lembaga akreditasi independen di luar perguruan tinggi. Melalui SPME, program studi dan institusi memperoleh pengakuan mutu dari lembaga akreditasi nasional yang berwenang.
      </p>
    </div>

    <div class="tentang-grid">
      <div class="tg-card reveal">
        <div class="tg-icon">🏛</div>
        <div class="tg-title">Akreditasi Institusi</div>
        <div class="tg-desc">Penilaian kelayakan institusi perguruan tinggi secara keseluruhan oleh BAN-PT berdasarkan standar nasional pendidikan tinggi. Universitas Cendekia Abditama saat ini berperingkat <strong>Unggul</strong>.</div>
      </div>
      <div class="tg-card reveal">
        <div class="tg-icon">📚</div>
        <div class="tg-title">Akreditasi Program Studi</div>
        <div class="tg-desc">Penilaian mutu dan kelayakan program studi oleh BAN-PT atau Lembaga Akreditasi Mandiri (LAM) sesuai bidang keilmuan masing-masing program studi.</div>
      </div>
      <div class="tg-card reveal">
        <div class="tg-icon">🔄</div>
        <div class="tg-title">Siklus Akreditasi</div>
        <div class="tg-desc">Proses akreditasi dilaksanakan secara berkala setiap 5 tahun. LPM mendampingi seluruh proses mulai dari penyusunan dokumen hingga asesmen lapangan.</div>
      </div>
      <div class="tg-card reveal">
        <div class="tg-icon">📊</div>
        <div class="tg-title">Monitoring LLDIKTI</div>
        <div class="tg-desc">Monitoring dan evaluasi perguruan tinggi secara berkala oleh LLDIKTI Wilayah IV sebagai perpanjangan tangan Kemdikbudristek di tingkat regional.</div>
      </div>
    </div>

    <!-- Alur Akreditasi -->
    <div class="alur-wrap reveal">
      <div class="alur-title">Alur Proses Akreditasi Program Studi</div>
      <div class="alur-steps">
        <div class="alur-step">
          <div class="as-circle" style="background:linear-gradient(135deg,var(--secondary),var(--secondary-light));">📋</div>
          <div class="as-label">Persiapan Dokumen</div>
          <div class="as-desc">Penyusunan Laporan Evaluasi Diri & Laporan Kinerja PS</div>
        </div>
        <div class="alur-step">
          <div class="as-circle" style="background:linear-gradient(135deg,var(--primary),var(--primary-light));">📤</div>
          <div class="as-label">Pengajuan ke LAM</div>
          <div class="as-desc">Submit dokumen melalui portal akreditasi lembaga terkait</div>
        </div>
        <div class="alur-step">
          <div class="as-circle" style="background:linear-gradient(135deg,#0a2e4a,#1a4a6a);">🔍</div>
          <div class="as-label">Asesmen Kecukupan</div>
          <div class="as-desc">Telaah dokumen oleh asesor yang ditugaskan lembaga akreditasi</div>
        </div>
        <div class="alur-step">
          <div class="as-circle" style="background:linear-gradient(135deg,#6b21a8,#9333ea);">🏫</div>
          <div class="as-label">Asesmen Lapangan</div>
          <div class="as-desc">Kunjungan asesor ke kampus untuk verifikasi dan wawancara</div>
        </div>
        <div class="alur-step">
          <div class="as-circle" style="background:linear-gradient(135deg,#065f46,#059669);">🏅</div>
          <div class="as-label">Penetapan Peringkat</div>
          <div class="as-desc">Keputusan resmi peringkat akreditasi diterbitkan lembaga akreditasi</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════
     PORTAL CARDS UTAMA
════════════════════════════ -->
<section class="portal-section">
  <div class="container">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:16px;margin-bottom:0;">
      <div class="reveal-left">
        <div class="section-label">Portal Akreditasi</div>
        <h2 class="section-title">Lembaga Akreditasi <em>Terkait Universitas Cendekia Abditama</em></h2>
        <p style="font-size:15px;color:var(--neutral-600);max-width:580px;line-height:1.7;">Akses langsung ke portal resmi seluruh lembaga akreditasi nasional yang mengelola akreditasi program studi di Universitas Muslim Indonesia.</p>
      </div>
      <div class="reveal-right" style="flex-shrink:0;">
        <div style="background:rgba(1,61,33,.06);border:1.5px solid rgba(1,61,33,.15);border-radius:12px;padding:14px 18px;font-size:13px;color:var(--secondary);font-weight:600;display:flex;align-items:center;gap:8px;">
          <span>🔗</span> Semua link akan membuka tab baru
        </div>
      </div>
    </div>

    <div class="portal-grid">

      <!-- BAN-PT -->
      <div class="portal-card card-banpt reveal">
        <div class="pc-body">
          <div class="pc-logo-wrap" style="font-size:28px;">🏛</div>
          <div class="pc-name">BAN-PT</div>
          <div class="pc-full">Badan Akreditasi Nasional Perguruan Tinggi</div>
          <div class="pc-desc">Lembaga akreditasi nasional yang bertugas melakukan penilaian kelayakan program dan/atau satuan pendidikan tinggi. Portal SAPTO digunakan untuk pengajuan, pemantauan, dan pengelolaan akreditasi institusi dan program studi yang belum memiliki LAM bidang.</div>
          <div class="pc-tags">
            <span class="pc-tag">Akreditasi Institusi</span>
            <span class="pc-tag">Akreditasi Prodi</span>
            <span class="pc-tag">Nasional</span>
          </div>
        </div>
        <div class="pc-footer">
          <span class="pc-url">sapto2.banpt.or.id</span>
          <a class="pc-btn" href="https://sapto2.banpt.or.id/auth/login" target="_blank" rel="noopener">Buka Portal ↗</a>
        </div>
      </div>

      <!-- LAM-PTKes -->
      <div class="portal-card card-lamptkes reveal">
        <div class="pc-body">
          <div class="pc-logo-wrap" style="font-size:28px;">⚕</div>
          <div class="pc-name">LAM-PTKes</div>
          <div class="pc-full">Lembaga Akreditasi Mandiri Perguruan Tinggi Kesehatan</div>
          <div class="pc-desc">Lembaga akreditasi mandiri untuk program studi di bidang kesehatan, meliputi kedokteran, keperawatan, farmasi, kesehatan masyarakat, dan program studi kesehatan lainnya di lingkungan Universitas Cendekia Abditama.</div>
          <div class="pc-tags">
            <span class="pc-tag">Kedokteran</span>
            <span class="pc-tag">Farmasi</span>
            <span class="pc-tag">Kesehatan</span>
          </div>
        </div>
        <div class="pc-footer">
          <span class="pc-url">akreditasi.lamptkes.org</span>
          <a class="pc-btn" href="https://akreditasi.lamptkes.org/" target="_blank" rel="noopener">Buka Portal ↗</a>
        </div>
      </div>

      <!-- LAMEMBA -->
      <div class="portal-card card-lamemba reveal">
        <div class="pc-body">
          <div class="pc-logo-wrap" style="font-size:28px;">💼</div>
          <div class="pc-name">LAMEMBA</div>
          <div class="pc-full">Lembaga Akreditasi Mandiri Ekonomi, Manajemen, Bisnis & Akuntansi</div>
          <div class="pc-desc">Lembaga akreditasi mandiri untuk program studi di bidang ekonomi, manajemen, bisnis, dan akuntansi. Mengelola akreditasi Prodi Manajemen, Akuntansi, Ekonomi Pembangunan, dan program terkait di Universitas Cendekia Abditama.</div>
          <div class="pc-tags">
            <span class="pc-tag">Manajemen</span>
            <span class="pc-tag">Akuntansi</span>
            <span class="pc-tag">Ekonomi</span>
          </div>
        </div>
        <div class="pc-footer">
          <span class="pc-url">akreditasi.lamemba.or.id</span>
          <a class="pc-btn" href="https://akreditasi.lamemba.or.id/login" target="_blank" rel="noopener">Buka Portal ↗</a>
        </div>
      </div>

      <!-- LAMInfokom -->
      <div class="portal-card card-laminfokom reveal">
        <div class="pc-body">
          <div class="pc-logo-wrap" style="font-size:28px;">💻</div>
          <div class="pc-name">LAMInfokom</div>
          <div class="pc-full">Lembaga Akreditasi Mandiri Informatika & Komputer</div>
          <div class="pc-desc">Lembaga akreditasi mandiri untuk program studi di bidang informatika, ilmu komputer, sistem informasi, dan teknik komputer. Mengelola akreditasi program studi teknologi informasi di Universitas Cendekia Abditama.</div>
          <div class="pc-tags">
            <span class="pc-tag">Informatika</span>
            <span class="pc-tag">Sistem Informasi</span>
            <span class="pc-tag">Teknik Komputer</span>
          </div>
        </div>
        <div class="pc-footer">
          <span class="pc-url">laminfokom.or.id</span>
          <a class="pc-btn" href="https://laminfokom.or.id/salam2/login.html" target="_blank" rel="noopener">Buka Portal ↗</a>
        </div>
      </div>

      <!-- LAMDIK -->
      <div class="portal-card card-lamdik reveal">
        <div class="pc-body">
          <div class="pc-logo-wrap" style="font-size:28px;">🎓</div>
          <div class="pc-name">LAMDIK</div>
          <div class="pc-full">Lembaga Akreditasi Mandiri Kependidikan</div>
          <div class="pc-desc">Lembaga akreditasi mandiri untuk program studi di bidang kependidikan dan ilmu pendidikan. Mengelola akreditasi program studi pendidikan di Fakultas Keguruan dan Ilmu Pendidikan Universitas Cendekia Abditama.</div>
          <div class="pc-tags">
            <span class="pc-tag">FKIP</span>
            <span class="pc-tag">Ilmu Pendidikan</span>
            <span class="pc-tag">Kependidikan</span>
          </div>
        </div>
        <div class="pc-footer">
          <span class="pc-url">sima.lamdik.or.id</span>
          <a class="pc-btn" href="https://sima.lamdik.or.id/login" target="_blank" rel="noopener">Buka Portal ↗</a>
        </div>
      </div>

      <!-- SPMI Kemdikbud -->
      <div class="portal-card card-spmikemdikbud reveal">
        <div class="pc-body">
          <div class="pc-logo-wrap" style="font-size:28px;">🇮🇩</div>
          <div class="pc-name">SPMI Kemdikbud</div>
          <div class="pc-full">Portal SPMI Kemdiktisaintek — Sistem Informasi Nasional</div>
          <div class="pc-desc">Portal nasional Sistem Penjaminan Mutu Internal yang dikelola oleh Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi. Digunakan untuk pelaporan dan pemantauan SPMI secara nasional.</div>
          <div class="pc-tags">
            <span class="pc-tag">SPMI Nasional</span>
            <span class="pc-tag">Kemdikbud</span>
            <span class="pc-tag">Pelaporan</span>
          </div>
        </div>
        <div class="pc-footer">
          <span class="pc-url">spmi.kemdiktisaintek.go.id</span>
          <a class="pc-btn" href="https://spmi.kemdiktisaintek.go.id/auth/login" target="_blank" rel="noopener">Buka Portal ↗</a>
        </div>
      </div>

    </div>

    <!-- SIMONEV — Full Width Card -->
    <div class="portal-card card-simonev reveal" style="margin-top:24px;flex-direction:row;overflow:hidden;">
      <div class="pc-body" style="flex-direction:row;align-items:center;gap:28px;flex-wrap:wrap;">
        <div class="pc-logo-wrap" style="font-size:32px;flex-shrink:0;margin-bottom:0;">📡</div>
        <div style="flex:1;min-width:260px;">
          <div class="pc-name">SIMONEV LLDIKTI 4 Jabar & Banten</div>
          <div class="pc-full">Sistem Monitoring dan Evaluasi — LLDIKTI Wilayah IV Jawa Barat & Banten</div>
          <div class="pc-desc" style="margin-bottom:10px;">Portal monitoring dan evaluasi perguruan tinggi swasta di wilayah Jawa Barat dan Banten yang dikelola oleh LLDIKTI Wilayah IV. Digunakan untuk pelaporan kinerja, pemantauan kegiatan akademik, dan evaluasi program perguruan tinggi secara berkala.</div>
          <div class="pc-tags" style="flex-wrap:wrap;">
            <span class="pc-tag">Monitoring PTS</span>
            <span class="pc-tag">LLDIKTI Wilayah IV</span>
            <span class="pc-tag">Jawa Barat & Banten</span>
            <span class="pc-tag">Evaluasi Berkala</span>
          </div>
        </div>
      </div>
      <div class="pc-footer" style="flex-direction:column;align-items:flex-end;justify-content:center;gap:8px;border-top:none;border-left:1px solid var(--neutral-100);flex-shrink:0;min-width:180px;">
        <span class="pc-url" style="max-width:none;text-align:right;">simonev.lldikti4.id</span>
        <a class="pc-btn" href="https://simonev.lldikti4.id/" target="_blank" rel="noopener" style="width:100%;justify-content:center;">Buka Portal ↗</a>
      </div>
    </div>

  </div>
</section>

<!-- ════════════════════════════
     TABEL QUICK ACCESS
════════════════════════════ -->
<section class="quick-section">
  <div class="container">
    <div class="section-label">Akses Cepat</div>
    <h2 class="section-title">Direktori <em>Portal Akreditasi</em></h2>
    <p style="font-size:15px;color:var(--neutral-600);max-width:600px;line-height:1.7;">Ringkasan seluruh portal akreditasi dalam satu tabel untuk kemudahan akses.</p>
    <div class="quick-table-wrap reveal">
      <table class="quick-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Lembaga</th>
            <th>Cakupan Bidang</th>
            <th>Jenis</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>
              <div class="lembaga-chip">
                <div class="lc-dot" style="background:#2d5fa8;"></div>
                <div><div class="lc-name">BAN-PT</div><div style="font-size:11px;color:var(--neutral-400);">Badan Akreditasi Nasional PT</div></div>
              </div>
            </td>
            <td>Semua bidang (tanpa LAM)</td>
            <td><span class="cat-badge" style="background:rgba(26,58,106,.09);color:#1a3a6a;">Nasional</span></td>
            <td><span class="status-up">Aktif</span></td>
            <td><a class="qt-link" href="https://sapto2.banpt.or.id/auth/login" target="_blank" rel="noopener" style="background:#1a3a6a;color:#fff;">Buka ↗</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>
              <div class="lembaga-chip">
                <div class="lc-dot" style="background:#00a661;"></div>
                <div><div class="lc-name">LAM-PTKes</div><div style="font-size:11px;color:var(--neutral-400);">LAM Perguruan Tinggi Kesehatan</div></div>
              </div>
            </td>
            <td>Kedokteran, Farmasi, Keperawatan, Kesehatan</td>
            <td><span class="cat-badge" style="background:rgba(0,107,63,.09);color:#006b3f;">LAM</span></td>
            <td><span class="status-up">Aktif</span></td>
            <td><a class="qt-link" href="https://akreditasi.lamptkes.org/" target="_blank" rel="noopener" style="background:#006b3f;color:#fff;">Buka ↗</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <div class="lembaga-chip">
                <div class="lc-dot" style="background:#d97706;"></div>
                <div><div class="lc-name">LAMEMBA</div><div style="font-size:11px;color:var(--neutral-400);">LAM Ekonomi, Manajemen, Bisnis & Akuntansi</div></div>
              </div>
            </td>
            <td>Manajemen, Akuntansi, Ekonomi, Bisnis</td>
            <td><span class="cat-badge" style="background:rgba(180,83,9,.1);color:#b45309;">LAM</span></td>
            <td><span class="status-up">Aktif</span></td>
            <td><a class="qt-link" href="https://akreditasi.lamemba.or.id/login" target="_blank" rel="noopener" style="background:#b45309;color:#fff;">Buka ↗</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td>
              <div class="lembaga-chip">
                <div class="lc-dot" style="background:#1a7abf;"></div>
                <div><div class="lc-name">LAMInfokom</div><div style="font-size:11px;color:var(--neutral-400);">LAM Informatika & Komputer</div></div>
              </div>
            </td>
            <td>Informatika, Sistem Informasi, Teknik Komputer</td>
            <td><span class="cat-badge" style="background:rgba(10,74,138,.1);color:#0a4a8a;">LAM</span></td>
            <td><span class="status-up">Aktif</span></td>
            <td><a class="qt-link" href="https://laminfokom.or.id/salam2/login.html" target="_blank" rel="noopener" style="background:#0a4a8a;color:#fff;">Buka ↗</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td>
              <div class="lembaga-chip">
                <div class="lc-dot" style="background:#9333ea;"></div>
                <div><div class="lc-name">LAMDIK</div><div style="font-size:11px;color:var(--neutral-400);">LAM Kependidikan</div></div>
              </div>
            </td>
            <td>Pendidikan, FKIP, Ilmu Kependidikan</td>
            <td><span class="cat-badge" style="background:rgba(107,33,168,.1);color:#6b21a8;">LAM</span></td>
            <td><span class="status-up">Aktif</span></td>
            <td><a class="qt-link" href="https://sima.lamdik.or.id/login" target="_blank" rel="noopener" style="background:#6b21a8;color:#fff;">Buka ↗</a></td>
          </tr>
          <tr>
            <td>6</td>
            <td>
              <div class="lembaga-chip">
                <div class="lc-dot" style="background:#1a5a37;"></div>
                <div><div class="lc-name">SPMI Kemdikbud</div><div style="font-size:11px;color:var(--neutral-400);">Portal Nasional SPMI Kemdiktisaintek</div></div>
              </div>
            </td>
            <td>Semua Perguruan Tinggi Indonesia</td>
            <td><span class="cat-badge" style="background:rgba(1,61,33,.08);color:var(--secondary);">Pemerintah</span></td>
            <td><span class="status-up">Aktif</span></td>
            <td><a class="qt-link" href="https://spmi.kemdiktisaintek.go.id/auth/login" target="_blank" rel="noopener" style="background:var(--secondary);color:#fff;">Buka ↗</a></td>
          </tr>
          <tr>
            <td>7</td>
            <td>
              <div class="lembaga-chip">
                <div class="lc-dot" style="background:#ef4444;"></div>
                <div><div class="lc-name">SIMONEV LLDIKTI 4</div><div style="font-size:11px;color:var(--neutral-400);">Monitoring & Evaluasi Jabar & Banten</div></div>
              </div>
            </td>
            <td>PTS Wilayah Jawa Barat & Banten</td>
            <td><span class="cat-badge" style="background:rgba(185,28,28,.08);color:#b91c1c;">LLDIKTI IV</span></td>
            <td><span class="status-up">Aktif</span></td>
            <td><a class="qt-link" href="https://simonev.lldikti4.id/" target="_blank" rel="noopener" style="background:#b91c1c;color:#fff;">Buka ↗</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<button class="back-top" id="backTop">↑</button>

<script>
/* DROPDOWN */
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

/* HAMBURGER */
const hb = document.getElementById('hamburger'), mn = document.getElementById('mobileNav');
if(hb && mn){
  hb.addEventListener('click', function(){ const o = mn.classList.toggle('open'); hb.classList.toggle('active', o); });
  mn.querySelectorAll('a').forEach(function(l){ l.addEventListener('click', function(){ mn.classList.remove('open'); hb.classList.remove('active'); }); });
  document.addEventListener('click', function(e){ if(!e.target.closest('.navbar-inner') && !e.target.closest('.mobile-nav')){ mn.classList.remove('open'); hb.classList.remove('active'); } });
}

/* BACK TO TOP */
const bt = document.getElementById('backTop');
if(bt){ window.addEventListener('scroll', function(){ bt.classList.toggle('show', scrollY > 400); }); bt.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); }); }

/* REVEAL */
const ro = new IntersectionObserver(function(entries){ entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('visible'); }); }, { threshold: 0.08 });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function(el){ ro.observe(el); });
</script>
</x-layout.index>