// Smooth scrolling untuk navigasi
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
        navbar.style.padding = '0.5rem 0';
    } else {
        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        navbar.style.padding = '1rem 0';
    }
});

// Image click animation
document.querySelectorAll('.about-image').forEach(image => {
    image.addEventListener('click', function() {
        // Animasi saat gambar diklik
        this.style.transform = 'scale(1.1) rotate(5deg)';
        this.style.transition = 'all 0.5s ease';
        
        setTimeout(() => {
            this.style.transform = 'scale(1.05)';
        }, 500);
        
        // Bisa ditambahkan modal atau lightbox di sini
        alert('Gambar diklik! Bisa dikembangkan untuk membuka lightbox atau halaman detail.');
    });
});

// Typing effect untuk hero text (opsional)
function typeWriter(element, text, speed = 100) {
    let i = 0;
    element.innerHTML = '';
    
    function typing() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, speed);
        }
    }
    typing();
}

// Jalankan typing effect saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    const heroTitle = document.querySelector('.hero h1');
    if (heroTitle) {
        const text = heroTitle.textContent;
        typeWriter(heroTitle, text, 150);
    }
    
    // Visitor counter animation
    const counter = document.querySelector('.visitor-counter');
    if (counter) {
        setInterval(() => {
            counter.style.transform = 'scale(1.1)';
            setTimeout(() => {
                counter.style.transform = 'scale(1)';
            }, 300);
        }, 5000);
    }
});

// Parallax effect untuk hero section
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero');
    if (hero) {
        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
    }
});