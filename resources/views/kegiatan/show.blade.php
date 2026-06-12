<x-layout.index>
<link rel="stylesheet" href="{{ asset('css/web/kegiatan/show.css') }}">

{{-- ═══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ --}}
<div class="hero-detail">
    <div class="hero-detail-inner">

        {{-- Breadcrumb --}}
        <div class="breadcrumb">
            <a href="{{ route('beranda.index') }}">Beranda</a>
            <span>/</span>
            <a href="{{ route('kegiatan.index') }}">Kegiatan</a>
            <span>/</span>
            <span>{{ Str::limit($kegiatan->judul, 50) }}</span>
        </div>

        {{-- Kategori badge --}}
        <div class="hero-category">
            {{ $kegiatan->kategori->nm_kategori }}
        </div>

        {{-- Judul --}}
        <h1 class="hero-detail-title">{{ $kegiatan->judul }}</h1>

        {{-- Meta --}}
        @php
            $wordCount   = str_word_count(strip_tags($kegiatan->content));
            $readingTime = max(1, ceil($wordCount / 200));
        @endphp
        <div class="hero-detail-meta">
            <span>📅 {{ $kegiatan->published_at->translatedFormat('d F Y') }}</span>
            <span>📖 {{ $readingTime }} menit baca</span>
            @if ($kegiatan->views)
                <span>👁 {{ number_format($kegiatan->views) }} tayangan</span>
            @endif
        </div>

        {{-- Author --}}
        <div class="hero-author">
            <div class="author-avatar">
                {{ strtoupper(substr($kegiatan->user->name, 0, 1)) }}
            </div>
            <div>
                <div class="author-name">
                    {{ $kegiatan->user->name === 'admin' ? 'Admin LPM UCA' : $kegiatan->user->name }}
                </div>
                <div class="author-role">Lembaga Penjaminan Mutu</div>
            </div>
        </div>

    </div>

    {{-- Wave --}}
    <svg class="hero-wave" viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0,60 C360,0 1080,60 1440,20 L1440,60 Z" fill="#ffffff"/>
    </svg>
</div>


{{-- ═══════════════════════════════════════════
     MAIN LAYOUT  (artikel + sidebar)
═══════════════════════════════════════════ --}}
<div class="detail-layout">

    {{-- ── ARTIKEL ── --}}
    <div class="detail-main-col">

        {{-- Tombol kembali --}}
        <a href="{{ route('kegiatan.index') }}" class="back-btn">
            ← Kembali ke Kegiatan
        </a>

        {{-- Gambar utama --}}
        @if ($kegiatan->gambar)
            <div class="article-image">
                <img src="{{ asset('storage/' . $kegiatan->gambar) }}"
                     alt="{{ $kegiatan->judul }}">
            </div>
            <p class="article-image-caption">{{ $kegiatan->judul }}</p>
        @else
            <div class="article-image">🏛</div>
        @endif

        {{-- Konten artikel --}}
        <div class="article-content">
            <div class="article-body">
                {!! $kegiatan->content !!}
            </div>
        </div>

        {{-- Tags --}}
        @if ($kegiatan->tags && $kegiatan->tags->isNotEmpty())
            <div class="article-tags">
                <span class="tags-label">🏷 Tag:</span>
                @foreach ($kegiatan->tags as $tag)
                    <a href="{{ route('kegiatan.index', ['tag' => $tag->slug]) }}"
                       class="tag-pill">
                        {{ $tag->name }}
                    </a>
                @endforeach
            </div>
        @endif

        {{-- Share --}}
        <div class="article-share">
            <span class="share-label">🔗 Bagikan:</span>

            {{-- WhatsApp --}}
            <a href="https://wa.me/?text={{ urlencode($kegiatan->judul . ' ' . url()->current()) }}"
               target="_blank" rel="noopener" class="share-btn share-wa">
                📲 WhatsApp
            </a>

            {{-- Facebook --}}
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
               target="_blank" rel="noopener" class="share-btn share-fb">
                📘 Facebook
            </a>

            {{-- Salin tautan --}}
            <button type="button" class="share-btn share-copy" onclick="copyLink()">
                📋 Salin Tautan
            </button>
        </div>

        {{-- Navigasi artikel (prev / next) --}}
        <div class="article-nav">
            @if ($prev)
                <a href="{{ route('kegiatan.show', $prev->slug) }}" class="nav-article-btn">
                    <div class="nav-article-label">← Sebelumnya</div>
                    <div class="nav-article-title">{{ Str::limit($prev->judul, 70) }}</div>
                </a>
            @else
                <div></div>
            @endif

            @if ($next)
                <a href="{{ route('kegiatan.show', $next->slug) }}" class="nav-article-btn next">
                    <div class="nav-article-label">Berikutnya →</div>
                    <div class="nav-article-title">{{ Str::limit($next->judul, 70) }}</div>
                </a>
            @endif
        </div>

    </div>{{-- /detail-main-col --}}


    {{-- ── SIDEBAR ── --}}
    <aside class="detail-sidebar">

        {{-- Informasi Kegiatan --}}
        <div class="sidebar-box reveal">
            <div class="sidebar-head">📋 Informasi Kegiatan</div>
            <div class="sidebar-body">

                <div class="info-item">
                    <span class="info-item-icon">📅</span>
                    <div>
                        <div class="info-key">Tanggal Publikasi</div>
                        <div class="info-val">
                            {{ $kegiatan->published_at->translatedFormat('d F Y') }}
                        </div>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-item-icon">📂</span>
                    <div>
                        <div class="info-key">Kategori</div>
                        <div class="info-val">{{ $kegiatan->kategori->nm_kategori }}</div>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-item-icon">⏱</span>
                    <div>
                        <div class="info-key">Estimasi Baca</div>
                        <div class="info-val">{{ $readingTime }} menit</div>
                    </div>
                </div>

                @if ($kegiatan->views)
                    <div class="info-item">
                        <span class="info-item-icon">👁</span>
                        <div>
                            <div class="info-key">Jumlah Tayangan</div>
                            <div class="info-val">{{ number_format($kegiatan->views) }} kali</div>
                        </div>
                    </div>
                @endif

                <div class="info-item">
                    <span class="info-item-icon">✍️</span>
                    <div>
                        <div class="info-key">Penulis</div>
                        <div class="info-val">
                            {{ $kegiatan->user->name === 'admin' ? 'Admin LPM UCA' : $kegiatan->user->name }}
                        </div>
                    </div>
                </div>

            </div>
        </div>{{-- /Informasi --}}

        {{-- Kegiatan Terkait --}}
        @if ($related->isNotEmpty())
            <div class="sidebar-box reveal">
                <div class="sidebar-head">🔗 Kegiatan Terkait</div>
                <div class="sidebar-body">
                    @foreach ($related as $item)
                        <a href="{{ route('kegiatan.show', $item->slug) }}"
                           class="related-side-item">
                            <div class="related-side-thumb">
                                @if ($item->gambar)
                                    <img src="{{ asset('storage/' . $item->gambar) }}"
                                         alt="{{ $item->judul }}">
                                @else
                                    📄
                                @endif
                            </div>
                            <div>
                                <div class="related-side-title">
                                    {{ Str::limit($item->judul, 60) }}
                                </div>
                                <div class="related-side-date">
                                    {{ $item->published_at->translatedFormat('d M Y') }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Kategori --}}
        @if ($kategoriList->isNotEmpty())
            <div class="sidebar-box reveal">
                <div class="sidebar-head">📂 Kategori</div>
                <div class="sidebar-body">
                    @foreach ($kategoriList as $kat)
                        <a href="{{ route('kegiatan.index', ['kategori' => $kat->slug]) }}"
                           class="cat-item">
                            {{ $kat->nm_kategori }}
                            <span class="cat-count">{{ $kat->kegiatan_count }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

    </aside>

</div>{{-- /detail-layout --}}


{{-- ═══════════════════════════════════════════
     KEGIATAN LAINNYA (bottom grid)
═══════════════════════════════════════════ --}}
@if ($lainnya->isNotEmpty())
<section class="related-section">
    <div class="container">
        <div class="section-label">Kegiatan Lainnya</div>

        <div class="related-grid">
            @foreach ($lainnya as $item)
                <a href="{{ route('kegiatan.show', $item->slug) }}" class="related-card">
                    <div class="rc-img">
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                 alt="{{ $item->judul }}">
                        @else
                            📋
                        @endif
                        <div class="rc-tag">{{ $item->kategori->nm_kategori }}</div>
                    </div>
                    <div class="rc-body">
                        <div class="rc-title">{{ Str::limit($item->judul, 72) }}</div>
                        @if ($item->ringkasan)
                            <div class="rc-excerpt">{{ Str::limit($item->ringkasan, 90) }}</div>
                        @endif
                        <div class="rc-meta">
                            📅 {{ $item->published_at->translatedFormat('d M Y') }}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif


{{-- ═══════════════════════════════════════════
     SCRIPTS
═══════════════════════════════════════════ --}}
<script>
    // ── Reveal on scroll ──
    document.querySelectorAll('.reveal').forEach(function (el) {
        new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) e.target.classList.add('visible');
            });
        }, { threshold: 0.1 }).observe(el);
    });

    // ── Salin tautan ──
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(function () {
            var btn = document.querySelector('.share-copy');
            var original = btn.innerHTML;
            btn.innerHTML = '✅ Tersalin!';
            btn.style.background = '#e8f7ef';
            btn.style.color = '#1a7a4a';
            setTimeout(function () {
                btn.innerHTML = original;
                btn.style.background = '';
                btn.style.color = '';
            }, 2000);
        });
    }

    // ── Back to top ──
    var bt = document.getElementById('backTop');
    if (bt) {
        window.addEventListener('scroll', function () {
            bt.classList.toggle('show', window.scrollY > 400);
        });
        bt.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
</script>

</x-layout.index>