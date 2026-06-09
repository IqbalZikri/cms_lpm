<x-layout.index>
<style>
/* PAGE HERO */
.page-hero{background:linear-gradient(135deg,var(--secondary) 0%,var(--secondary-light) 100%);padding:60px 0;position:relative;overflow:hidden}
.page-hero::before{content:'';position:absolute;top:-60px;right:-60px;width:300px;height:300px;border-radius:50%;background:rgba(235,118,19,.08)}
.page-hero::after{content:'';position:absolute;bottom:-80px;left:10%;width:200px;height:200px;border-radius:50%;background:rgba(255,255,255,.04)}
.page-hero-inner{max-width:1200px;margin:0 auto;padding:0 24px;position:relative;z-index:1}
.breadcrumb{display:flex;align-items:center;gap:8px;font-size:12.5px;color:rgba(255,255,255,.6);margin-bottom:16px}
.breadcrumb a{color:rgba(255,255,255,.6);text-decoration:none}
.breadcrumb a:hover{color:var(--primary-light)}
.breadcrumb span{color:rgba(255,255,255,.3)}
.page-title{font-family:'Playfair Display',serif;font-size:clamp(28px,4vw,46px);font-weight:800;color:#fff;line-height:1.15;margin-bottom:12px}
.page-title em{color:var(--primary-light);font-style:normal}
.page-subtitle{font-size:15px;color:rgba(255,255,255,.75);max-width:560px;line-height:1.7}

/* COMMON */
.container{max-width:1200px;margin:0 auto;padding:0 24px}
section{padding:72px 0}
.section-label{display:inline-flex;align-items:center;gap:8px;background:rgba(235,118,19,.1);color:var(--primary);font-size:11.5px;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:5px 14px;border-radius:999px;margin-bottom:16px}
.section-label::before{content:'';width:5px;height:5px;border-radius:50%;background:var(--primary)}
.section-title{font-family:'Playfair Display',serif;font-size:clamp(24px,3vw,36px);font-weight:700;line-height:1.2;color:var(--neutral-900);margin-bottom:14px}
.section-title em{color:var(--primary);font-style:normal}
.btn{display:inline-flex;align-items:center;gap:8px;padding:12px 24px;border-radius:var(--radius);font-size:13.5px;font-weight:700;text-decoration:none;cursor:pointer;transition:all .2s;border:none;font-family:'Plus Jakarta Sans',sans-serif}
.btn-primary{background:var(--primary);color:#fff}
.btn-primary:hover{background:var(--primary-dark);transform:translateY(-1px);box-shadow:0 4px 16px rgba(235,118,19,.4)}
.btn-green{background:var(--secondary);color:#fff}
.btn-green:hover{background:var(--secondary-light);transform:translateY(-1px)}
.btn-ghost{background:transparent;color:var(--secondary);border:2px solid var(--secondary)}
.btn-ghost:hover{background:var(--secondary);color:#fff}

/* REVEAL */
.reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease,transform .6s ease}
.reveal.visible{opacity:1;transform:none}

/* ── BERITA SPECIFIC ── */
.search-bar-wrap {
  background: #fff;
  padding: 28px 0;
  border-bottom: 1px solid var(--neutral-200);
  position: sticky;
  top: 70px;
  z-index: 50;
}
.search-bar-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  display: flex;
  gap: 12px;
  align-items: center;
  flex-wrap: wrap;
}
.search-input-wrap {
  position: relative;
  flex: 1;
  min-width: 220px;
}
.search-input-wrap span {
  position: absolute;
  left: 14px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 15px;
  color: var(--neutral-400);
  pointer-events: none;
}
.search-input {
  width: 100%;
  padding: 10px 14px 10px 40px;
  border: 1.5px solid var(--neutral-200);
  border-radius: var(--radius);
  font-size: 13.5px;
  font-family: 'Plus Jakarta Sans', sans-serif;
  color: var(--neutral-800);
  background: var(--neutral-50);
  outline: none;
  transition: border .2s;
}
.search-input:focus { border-color: var(--primary); background: #fff; }
.cat-filters { display: flex; gap: 8px; flex-wrap: wrap; }
.cat-btn {
  padding: 8px 16px;
  border-radius: 999px;
  font-size: 12.5px;
  font-weight: 600;
  cursor: pointer;
  border: 1.5px solid var(--neutral-200);
  background: #fff;
  color: var(--neutral-600);
  transition: all .2s;
  font-family: 'Plus Jakarta Sans', sans-serif;
}
.cat-btn.active, .cat-btn:hover { background: var(--secondary); color: #fff; border-color: var(--secondary); }

/* BERITA UTAMA (featured) */
.featured-wrap { margin-bottom: 48px; }
.news-featured-big {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  border: 1.5px solid var(--neutral-200);
  transition: all .3s;
}
.news-featured-big:hover { box-shadow: 0 16px 48px rgba(0,0,0,.1); transform: translateY(-3px); }
.nfb-img {
  height: 360px;
  background: linear-gradient(135deg, var(--secondary), var(--secondary-light));
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 80px;
  color: rgba(255,255,255,.15);
  position: relative;
  overflow: hidden;
}
.nfb-img img { width:100%; height:100%; object-fit:cover; }
.nfb-category {
  position: absolute;
  top: 20px; left: 20px;
  background: var(--primary);
  color: #fff;
  font-size: 11px;
  font-weight: 700;
  padding: 5px 12px;
  border-radius: 999px;
  letter-spacing: .5px;
  text-transform: uppercase;
}
.nfb-body {
  padding: 40px 36px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.nfb-meta { font-size: 12px; color: var(--neutral-400); margin-bottom: 16px; display: flex; gap: 12px; }
.nfb-title {
  font-family: 'Playfair Display', serif;
  font-size: 24px;
  font-weight: 700;
  color: var(--neutral-900);
  line-height: 1.35;
  margin-bottom: 16px;
}
.nfb-excerpt { font-size: 14px; color: var(--neutral-500); line-height: 1.75; margin-bottom: 28px; }
.nfb-author { display: flex; align-items: center; gap: 10px; margin-top: auto; }
.nfb-avatar { width: 36px; height: 36px; border-radius: 50%; background: linear-gradient(135deg, var(--secondary), var(--secondary-light)); display: grid; place-items: center; font-weight: 800; color: #fff; font-size: 13px; flex-shrink: 0; }
.nfb-author-name { font-size: 13px; font-weight: 700; color: var(--neutral-700); }
.nfb-author-role { font-size: 11.5px; color: var(--neutral-400); }

/* BERITA GRID */
.news-layout { display: grid; grid-template-columns: 1fr 320px; gap: 32px; align-items: start; }
.news-main-col {}
.news-cards-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; }
.news-card {
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  border: 1.5px solid var(--neutral-200);
  transition: all .3s;
  display: flex;
  flex-direction: column;
}
.news-card:hover { border-color: var(--primary); box-shadow: 0 10px 32px rgba(235,118,19,.1); transform: translateY(-3px); }
.nc-img {
  height: 180px;
  background: linear-gradient(135deg, var(--secondary), var(--secondary-light));
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 40px;
  color: rgba(255,255,255,.2);
  position: relative;
  overflow: hidden;
}
.nc-img img { width:100%; height:100%; object-fit:cover; }
.nc-tag {
  position: absolute;
  bottom: 12px; left: 12px;
  background: rgba(0,0,0,.5);
  backdrop-filter: blur(4px);
  color: #fff;
  font-size: 10.5px;
  font-weight: 700;
  padding: 3px 10px;
  border-radius: 999px;
  letter-spacing: .3px;
  text-transform: uppercase;
}
.nc-body { padding: 20px; flex: 1; display: flex; flex-direction: column; }
.nc-title { font-size: 15px; font-weight: 700; color: var(--neutral-800); line-height: 1.4; margin-bottom: 8px; }
.nc-excerpt { font-size: 13px; color: var(--neutral-500); line-height: 1.65; flex: 1; }
.nc-meta { display: flex; gap: 10px; align-items: center; margin-top: 14px; padding-top: 14px; border-top: 1px solid var(--neutral-100); font-size: 11.5px; color: var(--neutral-400); }
.nc-meta-dot { width: 3px; height: 3px; border-radius: 50%; background: var(--neutral-300); }

/* PAGINATION */
.pagination { display: flex; gap: 8px; align-items: center; justify-content: center; margin-top: 40px; }
.page-btn {
  width: 40px; height: 40px;
  border-radius: 10px;
  border: 1.5px solid var(--neutral-200);
  background: #fff;
  font-size: 13.5px;
  font-weight: 600;
  color: var(--neutral-600);
  cursor: pointer;
  display: grid;
  place-items: center;
  transition: all .2s;
  font-family: 'Plus Jakarta Sans', sans-serif;
}
.page-btn:hover { border-color: var(--secondary); color: var(--secondary); }
.page-btn.active { background: var(--secondary); border-color: var(--secondary); color: #fff; }
.page-btn.wide { width: auto; padding: 0 16px; }

/* SIDEBAR */
.news-sidebar-col { display: flex; flex-direction: column; gap: 24px; }
.sidebar-box {
  background: #fff;
  border-radius: 16px;
  border: 1.5px solid var(--neutral-200);
  overflow: hidden;
}
.sidebar-head {
  padding: 16px 20px;
  background: linear-gradient(135deg, var(--secondary), var(--secondary-light));
  color: #fff;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: .3px;
}
.sidebar-body { padding: 16px 20px; }

/* Berita Populer */
.pop-item {
  display: flex;
  gap: 12px;
  padding: 12px 0;
  border-bottom: 1px solid var(--neutral-100);
  cursor: pointer;
  transition: all .2s;
}
.pop-item:last-child { border-bottom: none; }
.pop-item:hover .pop-title { color: var(--primary); }
.pop-num { width: 28px; height: 28px; border-radius: 8px; background: rgba(235,118,19,.1); color: var(--primary); font-size: 12px; font-weight: 800; display: grid; place-items: center; flex-shrink: 0; }
.pop-title { font-size: 12.5px; font-weight: 600; color: var(--neutral-700); line-height: 1.4; margin-bottom: 3px; transition: color .2s; }
.pop-date { font-size: 11px; color: var(--neutral-400); }

/* Kategori */
.cat-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
  border-bottom: 1px solid var(--neutral-100);
  cursor: pointer;
  font-size: 13px;
  font-weight: 600;
  color: var(--neutral-700);
  transition: color .2s;
  text-decoration: none;
}
.cat-item:last-child { border-bottom: none; }
.cat-item:hover { color: var(--primary); }
.cat-count { background: var(--neutral-100); color: var(--neutral-500); font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 999px; }

/* Tag Cloud */
.tag-cloud { display: flex; gap: 8px; flex-wrap: wrap; }
.tag { display: inline-block; padding: 5px 12px; background: var(--neutral-100); border-radius: 999px; font-size: 11.5px; font-weight: 600; color: var(--neutral-600); cursor: pointer; transition: all .2s; text-decoration: none; border: 1px solid transparent; }
.tag:hover { background: rgba(1,61,33,.08); color: var(--secondary); border-color: var(--secondary); }

/* EMPTY STATE */
.empty-state{margin-top:10px;background:white;border:1px solid var(--neutral-200);border-radius:var(--radius);padding:48px 24px;text-align:center;box-shadow:0 4px 20px rgba(0,0,0,.05)}
.empty-icon{width:80px;height:80px;margin:0 auto 20px;border-radius:50%;background:rgba(235,118,19,.1);display:flex;align-items:center;justify-content:center;font-size:36px}
.empty-state h3{margin:0 0 10px;color:var(--secondary);font-size:24px;font-weight:700}
.empty-state p{margin:0;color:var(--neutral-500);font-size:15px;line-height:1.6;max-width:500px;margin-inline:auto}

/* FOOTER */
footer{background:var(--secondary);color:rgba(255,255,255,.8)}
.footer-main{max-width:1200px;margin:0 auto;padding:60px 24px 40px;display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:48px}
.footer-brand-icon{width:52px;height:52px;background:rgba(255,255,255,.1);border-radius:12px;display:grid;place-items:center;font-family:'Playfair Display',serif;font-size:22px;font-weight:800;color:var(--primary-light);margin-bottom:16px}
.footer-brand-name{font-size:16px;font-weight:700;color:#fff}
.footer-brand-sub{font-size:12px;color:rgba(255,255,255,.5);margin-top:2px}
.footer-about{font-size:13px;line-height:1.75;margin-top:16px;color:rgba(255,255,255,.6)}
.footer-social{display:flex;gap:10px;margin-top:20px}
.footer-social a{width:36px;height:36px;background:rgba(255,255,255,.1);border-radius:8px;display:grid;place-items:center;color:rgba(255,255,255,.7);text-decoration:none;font-size:14px;transition:all .2s}
.footer-social a:hover{background:var(--primary);color:#fff}
.footer-col-title{font-size:13px;font-weight:700;color:#fff;margin-bottom:16px;letter-spacing:.3px}
.footer-links{display:flex;flex-direction:column;gap:10px}
.footer-links a{font-size:12.5px;color:rgba(255,255,255,.6);text-decoration:none;transition:color .2s;display:flex;align-items:center;gap:6px}
.footer-links a::before{content:'›';color:var(--primary);font-size:14px}
.footer-links a:hover{color:var(--primary-light)}
.footer-bottom{border-top:1px solid rgba(255,255,255,.1);max-width:1200px;margin:0 auto;padding:20px 24px;display:flex;justify-content:space-between;align-items:center;font-size:12px;color:rgba(255,255,255,.4);flex-wrap:wrap;gap:12px}
.footer-bottom a{color:var(--primary-light);text-decoration:none}
.back-top{position:fixed;bottom:28px;right:28px;width:44px;height:44px;background:var(--primary);color:#fff;border-radius:12px;display:grid;place-items:center;cursor:pointer;box-shadow:0 4px 16px rgba(235,118,19,.4);transition:all .2s;font-size:16px;border:none;opacity:0;pointer-events:none;z-index:999}
.back-top.show{opacity:1;pointer-events:all}
.back-top:hover{transform:translateY(-3px);background:var(--secondary)}

/* RESPONSIVE */
@media(max-width:1024px){.news-layout{grid-template-columns:1fr}.news-sidebar-col{display:grid;grid-template-columns:1fr 1fr;gap:24px}.footer-main{grid-template-columns:1fr 1fr}}
@media(max-width:768px){nav{display:none}.hamburger{display:flex}.news-featured-big{grid-template-columns:1fr}.nfb-img{height:220px}.news-cards-grid{grid-template-columns:1fr}.footer-main{grid-template-columns:1fr;gap:32px}.news-sidebar-col{grid-template-columns:1fr}}
</style>

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="page-hero-inner">
    <div class="breadcrumb"><a href="index.html">Beranda</a><span>/</span><span>Berita</span></div>
    <h1 class="page-title"><em>Kegiatan</em></h1>
    <p class="page-subtitle">Informasi terkini seputar kegiatan, capaian, dan program Lembaga Penjaminan Mutu Universitas Muslim Indonesia.</p>
  </div>
</div>

<!-- SEARCH & FILTER BAR -->
<div class="search-bar-wrap">
  <div class="search-bar-inner">
    <div class="search-input-wrap">
      <span>🔍</span>
      <input type="text" class="search-input" placeholder="Cari berita atau artikel...">
    </div>
    <div class="cat-filters">
      <button class="cat-btn active">Semua</button>
      <button class="cat-btn">SPMI</button>
      <button class="cat-btn">Akreditasi</button>
      <button class="cat-btn">Workshop</button>
      <button class="cat-btn">Prestasi</button>
      <button class="cat-btn">Pengumuman</button>
    </div>
  </div>
</div>

<!-- KONTEN BERITA -->
<section style="background:var(--neutral-50);padding:48px 0;">
  <div class="container">

    <!-- BERITA UTAMA -->
    <div class="featured-wrap reveal">
      <div class="section-label">Berita Utama</div>
      <a href="#" style="text-decoration:none;">
        <div class="news-featured-big">
          <div class="nfb-img">
            🏛
            <div class="nfb-category">SPMI</div>
          </div>
          <div class="nfb-body">
            <div class="nfb-meta">
              <span>📅 15 Januari 2025</span>
              <span>📖 5 menit baca</span>
            </div>
            <div class="nfb-title">Pelaksanaan Audit Mutu Internal Semester Ganjil 2024/2025 Resmi Dimulai di Seluruh Program Studi UMI</div>
            <div class="nfb-excerpt">Lembaga Penjaminan Mutu UMI kembali melaksanakan Audit Mutu Internal (AMI) untuk semester ganjil tahun akademik 2024/2025. Kegiatan ini melibatkan 32 auditor internal bersertifikat BNSP yang akan memeriksa ketercapaian standar mutu di 66 program studi dan seluruh unit kerja di lingkungan Universitas Muslim Indonesia.</div>
            <div class="nfb-author">
              <div class="nfb-avatar">A</div>
              <div>
                <div class="nfb-author-name">Admin LPM UMI</div>
                <div class="nfb-author-role">Lembaga Penjaminan Mutu</div>
              </div>
              <a href="#" class="btn btn-green" style="margin-left:auto;padding:9px 18px;font-size:12.5px;">Baca →</a>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- LAYOUT UTAMA: KARTU + SIDEBAR -->
    <div class="news-layout">

      <!-- KARTU BERITA -->
      <div class="news-main-col">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;">
          <div class="section-label" style="margin-bottom:0;">Berita Terbaru</div>
          <span style="font-size:12.5px;color:var(--neutral-400);">Menampilkan 8 dari 42 artikel</span>
        </div>

        <div class="news-cards-grid">

          <div class="news-card reveal">
            <div class="nc-img">🎓<div class="nc-tag">Akreditasi</div></div>
            <div class="nc-body">
              <div class="nc-title">5 Program Studi UMI Raih Status Akreditasi Unggul dari BAN-PT Periode 2025</div>
              <div class="nc-excerpt">Lima program studi berhasil meningkatkan status akreditasinya menjadi Unggul, peringkat tertinggi dalam sistem akreditasi nasional.</div>
              <div class="nc-meta"><span>10 Jan 2025</span><div class="nc-meta-dot"></div><span>3 menit baca</span></div>
            </div>
          </div>

          <div class="news-card reveal">
            <div class="nc-img" style="background:linear-gradient(135deg,#0a2e4a,#1a5a37);">📋<div class="nc-tag">Workshop</div></div>
            <div class="nc-body">
              <div class="nc-title">Workshop Peningkatan Kompetensi Auditor Internal Angkatan IV Tahun 2025</div>
              <div class="nc-excerpt">LPM-UMI menyelenggarakan workshop intensif selama dua hari untuk meningkatkan kompetensi 40 auditor internal baru.</div>
              <div class="nc-meta"><span>5 Jan 2025</span><div class="nc-meta-dot"></div><span>4 menit baca</span></div>
            </div>
          </div>

          <div class="news-card reveal">
            <div class="nc-img" style="background:linear-gradient(135deg,#2d1a00,#013d21);">📊<div class="nc-tag">Monev</div></div>
            <div class="nc-body">
              <div class="nc-title">Rapat Evaluasi Capaian Indikator Kinerja Utama Semester II 2024</div>
              <div class="nc-excerpt">Pimpinan UMI beserta seluruh dekan mengikuti rapat evaluasi IKU yang dipimpin langsung oleh Rektor UMI.</div>
              <div class="nc-meta"><span>28 Des 2024</span><div class="nc-meta-dot"></div><span>3 menit baca</span></div>
            </div>
          </div>

          <div class="news-card reveal">
            <div class="nc-img" style="background:linear-gradient(135deg,#013d21,#2d6a4f);">🏆<div class="nc-tag">Prestasi</div></div>
            <div class="nc-body">
              <div class="nc-title">UMI Pertahankan Status Akreditasi Institusi Unggul untuk Periode 2023–2028</div>
              <div class="nc-excerpt">BAN-PT resmi menetapkan kembali status Akreditasi Unggul bagi UMI, memperkuat posisinya sebagai PTM terkemuka di Indonesia Timur.</div>
              <div class="nc-meta"><span>20 Des 2024</span><div class="nc-meta-dot"></div><span>5 menit baca</span></div>
            </div>
          </div>

          <div class="news-card reveal">
            <div class="nc-img" style="background:linear-gradient(135deg,#1a3a5c,#013d21);">🤝<div class="nc-tag">Kerjasama</div></div>
            <div class="nc-body">
              <div class="nc-title">LPM UMI Teken MoU dengan Lembaga Akreditasi Internasional FIBAA</div>
              <div class="nc-excerpt">Perjanjian kerjasama ini membuka peluang program studi UMI untuk mendapatkan pengakuan akreditasi bertaraf internasional.</div>
              <div class="nc-meta"><span>12 Des 2024</span><div class="nc-meta-dot"></div><span>4 menit baca</span></div>
            </div>
          </div>

          <div class="news-card reveal">
            <div class="nc-img" style="background:linear-gradient(135deg,#4a1942,#013d21);">📢<div class="nc-tag">Pengumuman</div></div>
            <div class="nc-body">
              <div class="nc-title">Pengumuman Jadwal AMI Semester Genap Tahun Akademik 2024/2025</div>
              <div class="nc-excerpt">LPM UMI mengumumkan jadwal lengkap pelaksanaan Audit Mutu Internal semester genap yang akan berlangsung April–Mei 2025.</div>
              <div class="nc-meta"><span>8 Des 2024</span><div class="nc-meta-dot"></div><span>2 menit baca</span></div>
            </div>
          </div>

          <div class="news-card reveal">
            <div class="nc-img" style="background:linear-gradient(135deg,#013d21,#0a5c3a);">📚<div class="nc-tag">SPMI</div></div>
            <div class="nc-body">
              <div class="nc-title">Pembaruan Dokumen Standar SPMI UMI Sesuai Permendikbud Ristek Terbaru</div>
              <div class="nc-excerpt">LPM UMI telah memperbarui seluruh dokumen standar SPMI agar selaras dengan regulasi terkini dari Kemdikbud Ristek.</div>
              <div class="nc-meta"><span>1 Des 2024</span><div class="nc-meta-dot"></div><span>6 menit baca</span></div>
            </div>
          </div>

          <div class="news-card reveal">
            <div class="nc-img" style="background:linear-gradient(135deg,#1a2a00,#013d21);">🌐<div class="nc-tag">Internasional</div></div>
            <div class="nc-body">
              <div class="nc-title">Delegasi LPM UMI Hadiri Konferensi Internasional Penjaminan Mutu Perguruan Tinggi di Kuala Lumpur</div>
              <div class="nc-excerpt">Tim LPM UMI berbagi praktik terbaik penjaminan mutu dan menjalin jaringan dengan lembaga mutu dari 18 negara.</div>
              <div class="nc-meta"><span>25 Nov 2024</span><div class="nc-meta-dot"></div><span>4 menit baca</span></div>
            </div>
          </div>

        </div>

        <!-- PAGINATION -->
        <div class="pagination">
          <button class="page-btn wide">‹ Sebelumnya</button>
          <button class="page-btn active">1</button>
          <button class="page-btn">2</button>
          <button class="page-btn">3</button>
          <button class="page-btn">...</button>
          <button class="page-btn">6</button>
          <button class="page-btn wide">Berikutnya ›</button>
        </div>
      </div>

      <!-- SIDEBAR -->
      <div class="news-sidebar-col">

        <!-- Berita Populer -->
        <div class="sidebar-box reveal">
          <div class="sidebar-head">🔥 Berita Populer</div>
          <div class="sidebar-body">
            <div class="pop-item">
              <div class="pop-num">1</div>
              <div><div class="pop-title">UMI Raih Akreditasi Unggul dari BAN-PT untuk Periode 2023–2028</div><div class="pop-date">20 Des 2024 · 8.2k views</div></div>
            </div>
            <div class="pop-item">
              <div class="pop-num">2</div>
              <div><div class="pop-title">Pelaksanaan AMI Semester Ganjil Melibatkan 66 Program Studi</div><div class="pop-date">15 Jan 2025 · 5.4k views</div></div>
            </div>
            <div class="pop-item">
              <div class="pop-num">3</div>
              <div><div class="pop-title">5 Prodi UMI Raih Akreditasi Unggul Serentak</div><div class="pop-date">10 Jan 2025 · 4.1k views</div></div>
            </div>
            <div class="pop-item">
              <div class="pop-num">4</div>
              <div><div class="pop-title">Workshop Auditor Internal Angkatan IV Resmi Dimulai</div><div class="pop-date">5 Jan 2025 · 2.9k views</div></div>
            </div>
            <div class="pop-item">
              <div class="pop-num">5</div>
              <div><div class="pop-title">MoU LPM UMI dengan Lembaga Akreditasi Internasional FIBAA</div><div class="pop-date">12 Des 2024 · 2.3k views</div></div>
            </div>
          </div>
        </div>

        <!-- Kategori -->
        <div class="sidebar-box reveal">
          <div class="sidebar-head">📂 Kategori</div>
          <div class="sidebar-body">
            <a href="#" class="cat-item">SPMI<span class="cat-count">14</span></a>
            <a href="#" class="cat-item">Akreditasi<span class="cat-count">11</span></a>
            <a href="#" class="cat-item">Workshop<span class="cat-count">8</span></a>
            <a href="#" class="cat-item">Prestasi<span class="cat-count">6</span></a>
            <a href="#" class="cat-item">Pengumuman<span class="cat-count">5</span></a>
            <a href="#" class="cat-item">Kerjasama<span class="cat-count">4</span></a>
            <a href="#" class="cat-item">Internasional<span class="cat-count">3</span></a>
          </div>
        </div>

        <!-- Tag Cloud -->
        <div class="sidebar-box reveal">
          <div class="sidebar-head">🏷 Tag</div>
          <div class="sidebar-body">
            <div class="tag-cloud">
              <a href="#" class="tag">BAN-PT</a>
              <a href="#" class="tag">SPMI</a>
              <a href="#" class="tag">Akreditasi Unggul</a>
              <a href="#" class="tag">AMI</a>
              <a href="#" class="tag">Auditor</a>
              <a href="#" class="tag">LAMEMBA</a>
              <a href="#" class="tag">LAM-PTKes</a>
              <a href="#" class="tag">PPEPP</a>
              <a href="#" class="tag">IKU</a>
              <a href="#" class="tag">Workshop</a>
              <a href="#" class="tag">Internasional</a>
              <a href="#" class="tag">Mutu</a>
            </div>
          </div>
        </div>

        <!-- Berlangganan -->
        <div class="sidebar-box reveal" style="background:linear-gradient(135deg,var(--secondary),var(--secondary-light));border-color:var(--secondary);">
          <div style="padding:24px;">
            <div style="font-size:20px;margin-bottom:12px;">📬</div>
            <div style="font-size:15px;font-weight:700;color:#fff;margin-bottom:8px;">Berlangganan Berita</div>
            <div style="font-size:12.5px;color:rgba(255,255,255,.7);margin-bottom:16px;line-height:1.6;">Dapatkan notifikasi berita terbaru LPM UMI langsung ke email Anda.</div>
            <input type="email" placeholder="Masukkan email Anda" style="width:100%;padding:10px 12px;border-radius:8px;border:none;font-size:13px;margin-bottom:10px;font-family:'Plus Jakarta Sans',sans-serif;outline:none;">
            <button class="btn btn-primary" style="width:100%;justify-content:center;padding:10px;">Berlangganan</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
// DROPDOWN
(function(){
  const dds=document.querySelectorAll('.nav-dropdown');
  dds.forEach(function(dd){
    let t=null;
    function open(){clearTimeout(t);dds.forEach(function(d){if(d!==dd)d.classList.remove('open')});dd.classList.add('open')}
    function close(){t=setTimeout(function(){dd.classList.remove('open')},150)}
    function cancel(){clearTimeout(t)}
    dd.addEventListener('mouseenter',open);
    dd.addEventListener('mouseleave',close);
    const m=dd.querySelector('.dropdown-menu');
    if(m){m.addEventListener('mouseenter',cancel);m.addEventListener('mouseleave',close)}
  });
  document.addEventListener('click',function(e){if(!e.target.closest('.nav-dropdown'))dds.forEach(function(d){d.classList.remove('open')})});
})();

// HAMBURGER
const hb=document.getElementById('hamburger'),mn=document.getElementById('mobileNav');
if(hb&&mn){
  hb.addEventListener('click',function(){const o=mn.classList.toggle('open');hb.classList.toggle('active',o)});
  mn.querySelectorAll('a').forEach(function(l){l.addEventListener('click',function(){mn.classList.remove('open');hb.classList.remove('active')})});
  document.addEventListener('click',function(e){if(!e.target.closest('.navbar-inner')&&!e.target.closest('.mobile-nav')){mn.classList.remove('open');hb.classList.remove('active')}});
}

// BACK TO TOP
const bt=document.getElementById('backTop');
if(bt){window.addEventListener('scroll',function(){bt.classList.toggle('show',scrollY>400)});bt.addEventListener('click',function(){window.scrollTo({top:0,behavior:'smooth'})})}

// REVEAL
document.querySelectorAll('.reveal').forEach(function(el){
  new IntersectionObserver(function(en){en.forEach(function(e){if(e.isIntersecting)e.target.classList.add('visible')})},{threshold:0.1}).observe(el)
});

// FILTER KATEGORI
document.querySelectorAll('.cat-btn').forEach(function(btn){
  btn.addEventListener('click',function(){
    document.querySelectorAll('.cat-btn').forEach(function(b){b.classList.remove('active')});
    btn.classList.add('active');
  });
});

// PAGINATION
document.querySelectorAll('.page-btn').forEach(function(btn){
  btn.addEventListener('click',function(){
    if(btn.classList.contains('wide'))return;
    document.querySelectorAll('.page-btn:not(.wide)').forEach(function(b){b.classList.remove('active')});
    btn.classList.add('active');
  });
});
</script>
</x-layout.index>