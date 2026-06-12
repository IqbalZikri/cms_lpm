@php
    $data = App\Models\SiteSettings::pluck('setting_value', 'setting_key')->toArray();
@endphp

<!-- FOOTER -->
<footer>
  <div class="footer-main">
    <div>
      <img src="{{ $data['logo_url'] ? asset('storage/' . $data['logo_url']) : asset('logo_uca.png') }}" class="footer-brand-icon">
      <div class="footer-brand-name">LPM — Universitas Cendekia Abditama</div>
      <div class="footer-brand-sub">Lembaga Penjaminan Mutu</div>
      <p class="footer-about">Berkomitmen untuk terus meningkatkan kualitas pendidikan tinggi di UCA melalui sistem penjaminan mutu yang terstandar dan berkelanjutan.</p>
      <div class="footer-social">
        <a href="{{ $data['youtube_url'] }}" title="YouTube">▶</a>
        <a href="{{ $data['facebook_url'] }}" title="Facebook">f</a>
        <a href="{{ $data['instagram_url'] }}" title="Instagram">◉</a>
        <a href="{{ $data['tiktok_url'] }}" title="Tiktok">✆</a>
      </div>
    </div>
    <div>
      <div class="footer-col-title">Profil</div>
      <div class="footer-links">
        <a href="{{ route('profil.tentang') }}">Tentang LPM</a>
        <a href="{{ route('profil.visiMisi') }}">Visi & Misi</a>
        <a href="{{ route('profil.strukturOrganisasi') }}">Struktur Organisasi</a>
      </div>
    </div>
    <div>
      <div class="footer-col-title">SPMI & SPME</div>
      <div class="footer-links">
        <a href="{{ route('spmi.index') }}#tentang-spmi">Tentang SPMI</a>
        <a href="{{ route('spmi.index') }}#monev">Monitoring & Evaluasi</a>
        <a href="{{ route('spme.index') }}#ami">Audit Mutu Internal</a>
        <a href="{{ route('spmi.index') }}#dokumen">Dokumen SPMI</a>
        <a href="{{ route('spme.index') }}">SPME</a>
      </div>
    </div>
    <div>
      <div class="footer-col-title">Dokumen & Publikasi</div>
      <div class="footer-links">
        <a href="{{ route('laporan.index') }}">Laporan</a>
        <a href="{{ route('sop.index') }}">SOP</a>
        <a href="{{ route('kegiatan.index') }}">Kegiatan</a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 LPM Universitas Cendekia Abditama. Hak cipta dilindungi.</span>
    <span>Dibuat dengan ❤ oleh <a href="#">Tim LPM-UCA</a></span>
  </div>
</footer>