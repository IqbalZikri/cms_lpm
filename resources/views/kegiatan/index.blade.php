<x-layout.index>
<link rel="stylesheet" href="{{ asset('css/web/kegiatan/index.css') }}">

<!-- PAGE HERO -->
<div class="hero">
  <div class="hero-inner">
    <div class="breadcrumb"><a href="index.html">Beranda</a><span>/</span><span>Kegiatan</span></div>
    <h1 class="hero-h1"><em>Kegiatan</em></h1>
    <p class="hero-p">Informasi terkini seputar kegiatan, capaian, dan program Lembaga Penjaminan Mutu Universitas Cendekia Abditama.</p>
  </div>
  <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- SEARCH & FILTER BAR -->
<div class="search-bar-wrap">
  <div class="search-bar-inner">
    <div class="search-input-wrap">
      <span>🔍</span>
      <input type="text" class="search-input" placeholder="Cari Kegiatan atau artikel...">
    </div>
  </div>
</div>

<!-- KONTEN Kegiatan -->
<section style="background:var(--neutral-50);padding:48px 0;">
  <div class="container">

    <!-- Kegiatan UTAMA -->
    <div class="featured-wrap reveal">
      <div class="section-label">Kegiatan Utama</div>
      @if ($kegiatanUtama)
        <a href="{{ route('kegiatan.show', $kegiatanUtama->slug) }}" style="text-decoration:none;">
          <div class="news-featured-big">
            @if ($kegiatanUtama->gambar)
              <div class="nfb-img">
                <img src="{{ asset('storage/' . $kegiatanUtama->gambar) }}" alt="" class="nfb-img">
                <div class="nfb-category">{{ $kegiatanUtama->kategori->nm_kategori }}</div>  
              </div>
            @else
              <div class="nfb-img">
                🏛
                <div class="nfb-category">{{ $kegiatanUtama->kategori->nm_kategori }}</div>
              </div>
            @endif
            <div class="nfb-body">
              <div class="nfb-meta">
                @php
                    $wordCount = str_word_count(strip_tags($kegiatanUtama->content));
                    $readingTime = max(1, ceil($wordCount / 200));
                @endphp
                <span>📅 {{ $kegiatanUtama->published_at->format('d M Y') }}</span>
                <span>📖 {{ $readingTime }} menit baca</span>
              </div>
              <div class="nfb-title">{{ $kegiatanUtama->judul }}</div>
              <div class="nfb-excerpt">{{ $kegiatanUtama->ringkasan }}</div>
              <div class="nfb-author">
                <div class="nfb-avatar">{{ strtoupper(substr($kegiatanUtama->user->name, 0, 1))  }}</div>
                <div>
                  <div class="nfb-author-name">{{ $kegiatanUtama->user->name == 'admin' ? 'admin LPM UCA' : $kegiatan->user->name }}</div>
                  <div class="nfb-author-role">Lembaga Penjaminan Mutu</div>
                </div>
                <a href="{{ route('kegiatan.show', $kegiatanUtama->slug) }}" class="btn btn-green" style="margin-left:auto;">Baca →</a>
              </div>
            </div>
          </div>
        </a>
      @else
        <div class="empty-state">
            <div class="empty-icon">
                🗞️
            </div>

            <h3>Kegiatan Belum Tersedia</h3>

            <p>Informasi kegiatan akan segera diperbarui.</p>
        </div>
      @endif
    </div>

    <!-- LAYOUT UTAMA: KARTU + SIDEBAR -->
    <div class="news-layout">

      <!-- KARTU Kegiatan -->
      <div class="news-main-col">
        @if ($kegiatan->isNotEmpty())
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;">
          <div class="section-label" style="margin-bottom:0;">Kegiatan Terbaru</div>
          <span class="count-data" style="font-size:12.5px;color:var(--neutral-400);">Menampilkan {{ $kegiatan->perPage() }} dari {{ $totalKegiatan }} artikel</span>
        </div>
        @endif
        
        
        @if ($kegiatan->isNotEmpty())
          <div class="news-cards-grid">
              @foreach ($kegiatan as $item)
                <div class="news-card reveal">
                  @if ($item->gambar)
                    <div class="nc-img" style="background:linear-gradient(135deg,#0a2e4a,#1a5a37);"><img src="{{ asset('storage/' . $item->gambar) }}" alt="gambar kegiatan"><div class="nc-tag">{{ $item->kategori->nm_kategori }}</div></div>
                  @else
                    <div class="nc-img" style="background:linear-gradient(135deg,#0a2e4a,#1a5a37);">📋<div class="nc-tag">{{ $item->kategori->nm_kategori }}</div></div>
                  @endif
                  <div class="nc-body">
                    <div class="nc-title">{{ $item->judul }}</div>
                    <div class="nc-excerpt">{{ $item->ringkasan }}</div>
                    <div class="nc-meta">
                      <div>
                        <span>{{ $item->published_at->format('d M Y') }}</span>
                        <div class="nc-meta-dot"></div>
                        <span>
                          @php
                            $wordCount = str_word_count(strip_tags($item->count));
                            $readingTime = max(1, ceil($wordCount / 200));
                          @endphp
                          {{ $readingTime }} menit baca
                        </span>
                      </div>
                      <a href="{{ route('kegiatan.show', $item->slug) }}" class="btn btn-green">Baca →</a>
                    </div>
                  </div>
                </div>
              @endforeach
          </div>
          
          @if ($kegiatan->hasPages())
            <div class="pagination">

                {{-- Previous --}}
                @if ($kegiatan->onFirstPage())
                    <span class="page-btn wide">‹ Sebelumnya</span>
                @else
                    <a href="{{ $kegiatan->previousPageUrl() }}" class="page-btn wide">
                        ‹ Sebelumnya
                    </a>
                @endif

                {{-- Pages --}}
                @foreach ($kegiatan->linkCollection() as $link)
                    @if ($link['label'] == '&laquo; Previous' || $link['label'] == 'Next &raquo;')
                        @continue
                    @endif

                    @if ($link['active'])
                        <span class="page-btn active">
                            {{ $link['label'] }}
                        </span>
                    @elseif($link['url'])
                        <a href="{{ $link['url'] }}" class="page-btn">
                            {{ $link['label'] }}
                        </a>
                    @else
                        <span class="page-btn">...</span>
                    @endif
                @endforeach

                {{-- Next --}}
                @if ($kegiatan->hasMorePages())
                    <a href="{{ $kegiatan->nextPageUrl() }}" class="page-btn wide">
                        Berikutnya ›
                    </a>
                @else
                    <span class="page-btn wide">Berikutnya ›</span>
                @endif

            </div>
          @endif
        @endif
      </div>

      <!-- SIDEBAR -->
      <div class="news-sidebar-col">

        <!-- Kegiatan Populer -->
        @if ($kegiatanPopuler->isNotEmpty())
        <div class="sidebar-box reveal">
          <div class="sidebar-head">🔥 Kegiatan Populer</div>
          @foreach ($kegiatanPopuler as $populer)
              <div class="sidebar-body">
                <div class="pop-item">
                  <div class="pop-num">{{ $loop->iteration }}</div>
                  <a href="{{ route('kegiatan.show', $populer->slug) }}" style="text-decoration: none">
                    <div><div class="pop-title">{{ $populer->judul }}</div><div class="pop-date">{{ $populer->published_at->format('d M Y') }}· {{ \Illuminate\Support\Number::abbreviate($populer->views ?? 0) }} views</div></div>
                  </a>
                </div>
              </div>
              @endforeach
            </div>
        @endif

        @if ($totalKategori && $kegiatan->isNotEmpty())
          <div class="sidebar-box reveal">
            <div class="sidebar-head">📂 Kategori</div>
            <div class="sidebar-body">
              @foreach ($totalKategori as $item)
                <a href="#" class="cat-item">{{ $item->nm_kategori }}<span class="cat-count">{{ $item->kegiatan_count }}</span></a>
              @endforeach
            </div>
          </div>
        @endif


        <!-- Kategori -->
      </div>
    </div>
  </div>
</section>

<script>

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