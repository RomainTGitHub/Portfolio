//Script pour l'apparition en fondu des sections//
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.fade-in');
    const observerOptions = {
        root: null,
        threshold: 0.5 // 40% de la section doit être visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Arrêter d'observer après l'effet de fondu
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });
});

//Script pour le chargement de la page//
document.addEventListener('DOMContentLoaded', function () {
    window.onload = function () {
        let percentage = 0;
        const progressBar = document.querySelector('#preloader .progress-bar div');
        const loadingText = document.querySelector('#preloader .loading-percentage');

        const simulateLoading = () => {
            const increment = Math.random() * 10; // Random increment to simulate real loading
            if (percentage < 100) {
                percentage = Math.min(100, percentage + increment); // Ensure percentage does not exceed 100
                progressBar.style.width = percentage + '%';
                loadingText.innerText = Math.floor(percentage) + '%';
                setTimeout(simulateLoading, 90); // Call the function recursively with a faster delay
            } else {
                const preloader = document.getElementById('preloader');
                preloader.style.opacity = '0';
                preloader.style.visibility = 'hidden';
                preloader.style.transition = 'opacity 0.5s ease, visibility 0.5s';
            }
        };

        simulateLoading();
    };
});