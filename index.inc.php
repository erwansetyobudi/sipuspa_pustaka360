<?php
/** SIPUSPA : PUSTAKA360 - Landing Page */
defined('INDEX_AUTH') OR die('Direct access is not allowed!');
$baseUrl = SWB;
?>
<link rel="stylesheet" href="
	<?= $baseUrl ?>plugins/sipuspa_pustaka360/assets/css/pustaka360.css">
<div class="p360-page">
  <section class="p360-hero">
    <div class="p360-container">
      <div class="p360-badge">INOVASI PERPUSTAKAAN</div>
      <h1>SIPUSPA : <span>PUSTAKA <sup>360</sup>
        </span>
      </h1>
      <h2>Ekosistem Knowledge Hub Perpustakaan</h2>
      <p class="p360-lead">Integrasi tata kelola, penemuan informasi, literasi riset, analitik, dan pembelajaran mandiri dalam satu ekosistem layanan Perpustakaan Poltekkes Kemenkes Semarang.</p>
      <div class="p360-actions">
        <a href="#ekosistem" class="p360-btn primary">Jelajahi PUSTAKA360</a>
        <a href="#tentang" class="p360-btn secondary">Tentang Inovasi</a>
      </div>
    </div>
  </section>
  <section id="tentang" class="p360-section">
    <div class="p360-container">
      <div class="p360-section-title">
        <span>TENTANG INOVASI</span>
        <h2>Satu Ekosistem untuk Pengetahuan</h2>
        <p>PUSTAKA360 merupakan inovasi pengembangan layanan perpustakaan berbasis ekosistem yang mengintegrasikan pengelolaan pengetahuan, pembelajaran, literasi riset, analitik, dan tata kelola perpustakaan.</p>
      </div>
      <div class="p360-intro-grid">
        <div class="p360-intro-card">
          <div class="p360-number">360°</div>
          <h3>Pendekatan Menyeluruh</h3>
          <p>Mendukung perjalanan pengetahuan mulai dari menemukan informasi, mempelajari, mengelola referensi, menganalisis penelitian hingga mendukung tata kelola perpustakaan.</p>
        </div>
        <div class="p360-intro-card">
          <div class="p360-number">1</div>
          <h3>Learning Gateway</h3>
          <p>OPAC tidak lagi hanya menjadi katalog koleksi, tetapi berkembang menjadi pintu masuk menuju pembelajaran, penelitian, literasi informasi, dan pengelolaan pengetahuan.</p>
        </div>
        <div class="p360-intro-card">
          <div class="p360-number">∞</div>
          <h3>Terus Berkembang</h3>
          <p>Dikembangkan menggunakan pendekatan modular sehingga setiap layanan dapat dikembangkan, diperbarui, dan ditambahkan secara bertahap.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="ekosistem" class="p360-section p360-soft">
    <div class="p360-container">
      <div class="p360-section-title">
        <span>EKOSISTEM PUSTAKA360</span>
        <h2>Temukan Layanan yang Anda Butuhkan</h2>
        <p>Jelajahi layanan pembelajaran, penelitian, tata kelola, dan analitik Perpustakaan Poltekkes Kemenkes Semarang.</p>
      </div>
      <div class="p360-grid"> <?php
$services = [
 ['sop','✓','GOVERNANCE','Prosedur Layanan','Informasi dan standar prosedur layanan Perpustakaan Poltekkes Kemenkes Semarang.','Pelajari →'],
 ['learn_slims','S','LIBRARY TECHNOLOGY','Learn SLiMS','Pelajari SLiMS melalui User Guide, Developer Guide, dan API Reference.','Mulai belajar →'],
 ['learn_mendeley','M','REFERENCE MANAGEMENT','Learn Mendeley','Panduan penggunaan Mendeley Reference Manager untuk mengelola referensi ilmiah.','Mulai belajar →'],
 ['learn_nlm','N','HEALTH CLASSIFICATION','Learn NLM','Belajar struktur dan penggunaan National Library of Medicine Classification.','Mulai belajar →'],
 ['learn_zotero','Z','REFERENCE MANAGEMENT','Learn Zotero','Dokumentasi dan panduan penggunaan Zotero untuk pengelolaan referensi penelitian.','Mulai belajar →'],
 ['learn_vosviewer','V','RESEARCH ANALYSIS','Learn VOSviewer','Pelajari pembuatan dan interpretasi visualisasi jaringan bibliometrik.','Mulai belajar →'],
 ['learn_bibliometric','B','RESEARCH LITERACY','Learn Bibliometric','Pembelajaran bibliometrik, performance analysis, science mapping, visualisasi, dan interpretasi hasil.','Mulai belajar →'],
 ['mou','↔','COLLABORATION','Jejaring Kerja Sama','Informasi MoU, MoA, PKS, mitra, bidang kerja sama, dan jejaring Perpustakaan.','Lihat kerja sama →']
];
foreach ($services as $s): ?> <a class="p360-card" href="
						<?= $baseUrl ?>index.php?p=
						<?= htmlspecialchars($s[0]) ?>">
          <div class="p360-icon"> <?= $s[1] ?> </div>
          <div class="p360-card-content">
            <small> <?= $s[2] ?> </small>
            <h3> <?= $s[3] ?> </h3>
            <p> <?= $s[4] ?> </p>
            <span> <?= $s[5] ?> </span>
          </div>
        </a> <?php endforeach; ?> <a class="p360-card p360-featured" href="https://library.poltekkes-smg.ac.id/opac/inovasi/analitika/" target="_blank" rel="noopener noreferrer">
          <div class="p360-icon">◉</div>
          <div class="p360-card-content">
            <small>KNOWLEDGE DISCOVERY</small>
            <h3>KINK Library Intelligence</h3>
            <p>Eksplorasi metrik koleksi, analitik, visualisasi jaringan dan peta pengetahuan Katalog Induk Nasional Kesehatan.</p>
            <span>Buka Intelligence →</span>
          </div>
        </a>
      </div>
    </div>
  </section>
  <section class="p360-knowledge">
    <div class="p360-container">
      <div class="p360-knowledge-content">
        <span>KNOWLEDGE HUB</span>
        <h2>Dari Mencari Informasi <br>Menjadi Membangun Pengetahuan </h2>
        <p>PUSTAKA360 membawa perpustakaan dari paradigma tempat mencari informasi menuju lingkungan untuk menemukan, mempelajari, menghasilkan, mengelola, dan membagikan pengetahuan.</p>
        <a href="#ekosistem" class="p360-btn white">Jelajahi Ekosistem</a>
      </div>
    </div>
  </section>
  <section class="p360-footer">
    <div class="p360-container">
      <strong>SIPUSPA : PUSTAKA360</strong>
      <p>Inovasi ini merupkan hasil replikasi dari inovasi Ekosistem Knowledge Hub Perpustakaan Poltekkes Kemenkes Semarang</p>
    </div>
  </section>
</div>