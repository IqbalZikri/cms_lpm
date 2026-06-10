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
          <div><div class="ph-stat-num">{{ $prodi ?? 0 }}</div><div class="ph-stat-lbl">Program Studi</div></div>
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

    @if ($datas->isNotEmpty())
      @foreach ($datas as $data)
      <div class="portal-grid">

        <div class="portal-card card-banpt reveal">
          <div class="pc-body">
            <div class="pc-name">{{ $data->singkatan_lembaga }}</div>
            <div class="pc-full">{{ $data->nama_lembaga }}</div>
            <div class="pc-desc">{{ $data->deskripsi }}</div>
            @foreach ($data['kategori'] as $kategori)
            <div class="pc-tags">
              <span class="pc-tag">{{ $kategori['nm_kategori'] }}</span>
            </div>
            @endforeach
          </div>
          <div class="pc-footer">
            <span class="pc-url">{{ $data->link }}</span>
            <a class="pc-btn" href="{{ 'https://' . $data->link }}" target="_blank" rel="noopener">Buka Portal ↗</a>
          </div>
        </div>
      </div>
      @endforeach
    @else
    <div class="empty-state" style="margin-bottom: 30px;">
      <div class="empty-icon">
        🌐
      </div>
      
      <h3>Portal Akreditasi Belum Tersedia</h3>
      
      <p>Informasi Portal Akreditasi akan segera diperbarui.</p>
    </div>
    @endif

    

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
          @forelse ($datas as $data)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                <div class="lembaga-chip">
                  <div class="lc-dot" style="background:#2d5fa8;"></div>
                  <div><div class="lc-name">{{ $data->singkatan_lembaga }}</div><div style="font-size:11px;color:var(--neutral-400);">{{ $data->nama_lembaga }}</div></div>
                </div>
              </td>
              @foreach ($data->cakupan_bidang as $cakupan_bidang)
                <td>{{ $cakupan_bidang['nama_bidang'] }}</td>
              @endforeach
              <td><span class="cat-badge" style="background:rgba(26,58,106,.09);color:#1a3a6a;">{{ $data->jenis }}</span></td>
              <td><span class="status-up">{{ $data->status }}</span></td>
              <td><a class="qt-link" href="https://sapto2.banpt.or.id/auth/login" target="_blank" rel="noopener" style="background:#1a3a6a;color:#fff;">Buka ↗</a></td>
            </tr>
          @empty
          <tr>
            <td colspan="6" style="text-align: center;">Belum ada data.</td>
          </tr>
            {{-- <tr>
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
            </tr> --}}
          @endforelse  
        </tbody>
      </table>
    </div>
  </div>
</section>
<button class="back-top" id="backTop">↑</button>

<script>
/* BACK TO TOP */
const bt = document.getElementById('backTop');
if(bt){ window.addEventListener('scroll', function(){ bt.classList.toggle('show', scrollY > 400); }); bt.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); }); }

/* REVEAL */
const ro = new IntersectionObserver(function(entries){ entries.forEach(function(e){ if(e.isIntersecting) e.target.classList.add('visible'); }); }, { threshold: 0.08 });
document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(function(el){ ro.observe(el); });
</script>
</x-layout.index>