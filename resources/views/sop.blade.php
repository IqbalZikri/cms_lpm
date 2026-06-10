<x-layout.index>
  <link rel="stylesheet" href="{{ asset('css/web/sop.css') }}">
  <link rel="stylesheet" href="{{ asset('css/web/pengembangan.css') }}">
<!-- ════════════════════════
     HERO
════════════════════════ -->
<div class="hero">
  <div class="hero-inner">
    <div class="breadcrumb"><a href="{{ route('beranda.index') }}">Beranda</a><span>/</span><span>SOP</span></div>
    <div class="hero-tag">Standar Operasional Prosedur</div>
    <h1 class="hero-h1">Dokumen <em>SOP</em> LPM Universitas Cendekia Abditama</h1>
    <p class="hero-p">Kumpulan Standar Operasional Prosedur (SOP) resmi Universitas Cendekia Abditama yang mengatur tata cara pelaksanaan kegiatan akademik dan non-akademik secara sistematis dan terstandar.</p>
    <div class="hero-actions">
      <a href="#sop-akademik" class="btn btn-primary">📚 SOP Akademik</a>
      <a href="#sop-nonakademik" class="btn-outline-white">🏢 SOP Non-Akademik</a>
    </div>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<div class="coming-soon">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor"
                stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v6l4 2m5-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>

        <div class="badge">
            Dalam Pengembangan
        </div>

        <h1>Halaman Segera Hadir</h1>

        <p>
            Mohon maaf, halaman yang Anda tuju saat ini masih dalam proses
            pengembangan. Tim kami sedang mempersiapkan konten dan fitur terbaik
            agar dapat segera digunakan.
        </p>

        <a href="/" class="btn-home">
            Kembali ke Beranda
        </a>

        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
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
window.addEventListener('scroll', function(){
  const y = window.scrollY + 150;
  ['sop-akademik','sop-nonakademik'].forEach(function(id){
    const el = document.getElementById(id);
    if(!el) return;
    if(el.offsetTop <= y && el.offsetTop + el.offsetHeight > y){
      document.querySelectorAll('.snav-item').forEach(function(i){ i.classList.remove('active'); });
      const t = document.querySelector('.snav-item[href="#' + id + '"]');
      if(t) t.classList.add('active');
    }
  });
});

/* HITUNG JUMLAH SOP */
function countSOPs(){
  const akademik = document.querySelectorAll('.sop-card.cat-akademik').length;
  const nonakademik = document.querySelectorAll('.sop-card.cat-nonakademik').length;
  const total = akademik + nonakademik;
  document.getElementById('countAkademik').textContent = akademik;
  document.getElementById('countNonAkademik').textContent = nonakademik;
  document.getElementById('countTotal').textContent = total;
  document.getElementById('count-akademik-display').textContent = '📄 ' + akademik + ' dokumen tersedia';
  document.getElementById('count-nonakademik-display').textContent = '📄 ' + nonakademik + ' dokumen tersedia';
}
countSOPs();

/* FILTER KATEGORI */
function filterSOP(cat, btn){
  document.querySelectorAll('.ftab').forEach(function(b){ b.classList.remove('active'); });
  btn.classList.add('active');

  const sections = document.querySelectorAll('.sop-section');
  const cards    = document.querySelectorAll('.sop-card');
  const empties  = document.querySelectorAll('.empty-slot');
  const subCats  = document.querySelectorAll('.sub-cat');

  if(cat === 'semua'){
    sections.forEach(function(s){ s.classList.remove('hidden'); });
    cards.forEach(function(c){ c.classList.remove('hidden'); });
    empties.forEach(function(e){ e.classList.remove('hidden'); });
    subCats.forEach(function(sc){ sc.classList.remove('hidden'); });
  } else {
    sections.forEach(function(s){
      s.classList.toggle('hidden', s.dataset.cat !== cat);
    });
  }
  // Reset search
  document.getElementById('searchSOP').value = '';
  document.getElementById('noResult').classList.remove('show');
}

/* SEARCH */
document.getElementById('searchSOP').addEventListener('input', function(){
  const q = this.value.toLowerCase().trim();
  const cards = document.querySelectorAll('.sop-card');
  let found = 0;

  if(!q){
    // Reset semua
    cards.forEach(function(c){ c.classList.remove('hidden'); });
    document.querySelectorAll('.empty-slot').forEach(function(e){ e.classList.remove('hidden'); });
    document.querySelectorAll('.sop-section').forEach(function(s){ s.classList.remove('hidden'); });
    document.getElementById('noResult').classList.remove('show');
    return;
  }

  // Sembunyikan semua empty slot saat searching
  document.querySelectorAll('.empty-slot').forEach(function(e){ e.classList.add('hidden'); });
  // Tampilkan semua seksi
  document.querySelectorAll('.sop-section').forEach(function(s){ s.classList.remove('hidden'); });
  // Reset tab ke semua
  document.querySelectorAll('.ftab').forEach(function(b){ b.classList.remove('active'); });
  document.getElementById('tab-semua').classList.add('active');

  cards.forEach(function(c){
    const name = (c.dataset.name || c.querySelector('.sop-name')?.textContent || '').toLowerCase();
    const show = name.includes(q);
    c.classList.toggle('hidden', !show);
    if(show) found++;
  });

  document.getElementById('noResult').classList.toggle('show', found === 0);
});
</script>
</x-layout.index>