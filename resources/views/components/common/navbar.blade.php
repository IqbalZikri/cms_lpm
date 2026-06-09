<!-- NAVBAR -->
<header class="navbar">
  <div class="navbar-inner">
    <a href="{{ route('beranda.index') }}" class="brand">
      <img src="{{ App\Models\SiteSettings::where('setting_key', 'logo_url')->value('setting_value') ? asset('storage/' . App\Models\SiteSettings::where('setting_key', 'logo_url')->value('setting_value')) : asset('logo_uca.png') }}" class="brand-icon">
      <div class="brand-text">
        <div class="brand-name">LPM — UCA</div>
        <div class="brand-sub">Lembaga Penjaminan Mutu</div>
      </div>
    </a>
    <nav>
      <a href="{{ route('beranda.index') }}" class="{{ request()->routeIs('beranda.index') ? 'active' : '' }}">Beranda</a>
      <div class="nav-dropdown {{ request()->routeIs('profil.*') ? 'active' : '' }}">
        <span>Profil</span>
        <div class="dropdown-menu">
          <a href="{{ route('profil.tentang') }}">Tentang LPM</a>
          <a href="{{ route('profil.visiMisi') }}">Visi Misi</a>
          <a href="{{ route('profil.strukturOrganisasi') }}">Struktur Organisasi</a>
        </div>
      </div>
      <a href="{{ route('spmi.index') }}" class="{{ request()->routeIs('spmi.index') ? 'active' : '' }}">SPMI</a>
      <a href="{{ route('spme.index') }}" class="{{ request()->routeIs('spme.index') ? 'active' : '' }}">SPME</a>
      <a href="{{ route('laporan.index') }}" class="{{ request()->routeIs('laporan.index') ? 'active' : '' }}">Laporan</a>
      <a href="{{ route('sop.index') }}" class="{{ request()->routeIs('sop.index') ? 'active' : '' }}">SOP</a>
      <a href="{{ route('kegiatan.index') }}" class="{{ request()->routeIs('kegiatan.index') ? 'active' : '' }}">Kegiatan</a>
    </nav>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<div id="mobileNav" class="mobile-nav">
  <a href="{{ route('beranda.index') }}">Beranda</a>
  <div class="mobile-group">
    <div class="mobile-group-title">Profil</div>
    <a href="{{ route('profil.tentang') }}">Tentang LPM</a>
    <a href="{{ route('profil.visiMisi') }}">Visi Misi</a>
    <a href="{{ route('profil.strukturOrganisasi') }}">Struktur Organisasi</a>
  </div>
  <div class="mobile-group">
    <div class="mobile-group-title" >Sistem Penjaminan Mutu Internal</div>
    <a href="{{ route('spmi.index') }}">Sistem Penjaminan Mutu Internal</a>
  </div>
  <div class="mobile-group">
    <div class="mobile-group-title" >Sistem Penjaminan Mutu Eksternal</div>
    <a href="{{ route('spme.index') }}">Sistem Penjaminan Mutu Eksternal</a>
  </div>
  <div class="mobile-group">
    <div class="mobile-group-title" >Laporan</div>
    <a href="{{ route('laporan.index') }}">Laporan</a>
  </div>
  <div class="mobile-group">
    <div class="mobile-group-title" >SOP</div>
    <a href="{{ route('sop.index') }}">SOP</a>
  </div>
  <div class="mobile-group">
    <div class="mobile-group-title" >Kegiatan</div>
    <a href="{{ route('kegiatan.index') }}">Kegiatan</a>
  </div>
</div>

<script>
  (function(){
  const dds = document.querySelectorAll('.nav-dropdown');
  dds.forEach(function(dd){
    let t = null;
    function open(){ clearTimeout(t); dds.forEach(function(d){ if(d!==dd) d.classList.remove('open') }); dd.classList.add('open'); }
    function close(){ t = setTimeout(function(){ dd.classList.remove('open'); }, 150); }
    function cancel(){ clearTimeout(t); }
    dd.addEventListener('mouseenter', open);
    dd.addEventListener('mouseleave', close);
    const m = dd.querySelector('.dropdown-menu');
    if(m){ m.addEventListener('mouseenter', cancel); m.addEventListener('mouseleave', close); }
  });
  document.addEventListener('click', function(e){
    if(!e.target.closest('.nav-dropdown')) dds.forEach(function(d){ d.classList.remove('open'); });
  });
})();

// ── HAMBURGER ──
const hb = document.getElementById('hamburger');
const mn = document.getElementById('mobileNav');
if(hb && mn){
  hb.addEventListener('click', function(){ const o = mn.classList.toggle('open'); hb.classList.toggle('active', o); });
  mn.querySelectorAll('a').forEach(function(l){ l.addEventListener('click', function(){ mn.classList.remove('open'); hb.classList.remove('active'); }); });
  document.addEventListener('click', function(e){
    if(!e.target.closest('.navbar-inner') && !e.target.closest('.mobile-nav')){ mn.classList.remove('open'); hb.classList.remove('active'); }
  });
}
</script>