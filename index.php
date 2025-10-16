<?php include 'includes/header.php'; ?>
<?php include 'includes/counter.php'; ?>

<section class="hero">
    <div class="hero-content">
        <h1>PT CIO Architecture</h1>
        <p>Menciptakan Ruang yang Menginspirasi dan Berkelanjutan</p>
        <a href="about.php" class="cta-button">Discover Our Story</a>
    </div>
</section>

<section id="projects" style="padding: 100px 2rem; background: #f8f9fa;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem;">Our Projects</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <!-- Project items akan ditambahkan di sini -->
        </div>
    </div>
</section>

<div class="visitor-counter">
    Total Visitors: <?php echo $totalVisitors; ?>
</div>

<script src="js/script.js"></script>
</body>
</html>