document.addEventListener('DOMContentLoaded', function () {
    // Script pour le chargement de la page
    window.onload = function () {
        let percentage = 0;
        const progressBar = document.querySelector('#preloader .progress-bar div');
        const loadingText = document.querySelector('#preloader .loading-percentage');

        if (!progressBar || !loadingText) {
            console.error('Progress bar or loading text element not found.');
            return;
        }

        const simulateLoading = () => {
            const increment = Math.random() * 10; // Random increment to simulate real loading
            if (percentage < 100) {
                percentage = Math.min(100, percentage + increment); // Ensure percentage does not exceed 100
                progressBar.style.width = percentage + '%';
                loadingText.innerText = Math.floor(percentage) + '%';
                setTimeout(simulateLoading, 90); // Call the function recursively with a faster delay
            } else {
                const preloader = document.getElementById('preloader');
                if (preloader) {
                    preloader.style.transition = 'opacity 0.5s ease, visibility 0.5s';
                    preloader.style.opacity = '0';
                    preloader.style.visibility = 'hidden';
                    setTimeout(() => {
                        preloader.remove();
                        startFadeInAnimation();
                    }, 500); // Wait for the fade-out transition to finish
                } else {
                    console.error('Preloader element not found.');
                }
            }
        };

        simulateLoading();
    };

    // Function to start the fade-in animation of sections
    function startFadeInAnimation() {
        const sections = document.querySelectorAll('.fade-in');
        const observerOptions = {
            root: null,
            threshold: 0.15 // 20% de la section doit être visible
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
    }
});

// Fonction pour le bouton Darkmode/Lightmode

function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    updateDarkModeButton();
}

function updateDarkModeButton() {
    const darkModeButton = document.getElementById('dark-mode-toggle');
    if (document.body.classList.contains('dark-mode')) {
        darkModeButton.innerHTML = '☀️';
        darkModeButton.style.backgroundColor = '#fff';
        darkModeButton.style.color = '#000';
    } else {
        darkModeButton.innerHTML = '🌙';
        darkModeButton.style.backgroundColor = '#000';
        darkModeButton.style.color = '#fff';
    }
}

document.addEventListener('DOMContentLoaded', () => {
    updateDarkModeButton();
});

document.addEventListener("DOMContentLoaded", function () {
    // Récupérer les éléments
    var modal = document.getElementById("contact-modal");
    var btn = document.getElementById("contact-cta");
    var span = document.getElementsByClassName("close")[0];

    // Ouvrir la modale lorsque le bouton est cliqué
    btn.onclick = function () {
        modal.style.display = "flex";
        document.body.style.overflow = "hidden"; // Désactiver le scroll
    }

    // Fermer la modale lorsque l'utilisateur clique sur <span> (x)
    span.onclick = function () {
        modal.style.display = "none";
        document.body.style.overflow = "auto"; // Réactiver le scroll
    }

    // Fermer la modale lorsque l'utilisateur clique en dehors de la modale
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            document.body.style.overflow = "auto"; // Réactiver le scroll
        }
    }
});

