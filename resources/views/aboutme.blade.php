<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erik Wahyu Saputra</title>  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

    <div class="profile-card">
        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="profile-image">

        <h1>Tentang Saya</h1>

        <p class="bio">
            "Selalu penasaran tentang dunia di sekitar saya. Suka mengulik hal-hal teknis, tapi juga menikmati hal-hal sederhana dalam hidup. Mencari jawaban untuk setiap pertanyaan, besar atau kecil."
        </p>
        <div class="social-links">
            <a href="https://wa.me/6285739188906" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.facebook.com/erikwahyu.saputra.547" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/erikwahyusaputraa/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/XxMeguminxX" target="_blank"><i class="fab fa-github"></i></a>
        </div>

        <div class="action-buttons">
            <a href="mailto:saputraerik042@gmail.com" class="btn btn-primary">saputraerik042@gmail.com</a>
        </div>

        <!-- Toggle Projects Button -->
        <div class="toggle-projects-container">
            <button id="toggle-projects" class="toggle-projects-btn">
                <i class="fas fa-code"></i>
                <span id="toggle-text">Tampilkan Proyek</span>
            </button>
        </div>
    </div>

    <!-- Projects Modal -->
    <div id="projects-modal" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Proyek Saya</h2>
                <button id="close-modal" class="close-modal-btn">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="modal-body">
                <div class="projects-grid">
                    <!-- Project 1: About Me Card -->
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-user-circle project-icon"></i>
                        </div>
                        <h3>Kartu Profil Personal</h3>
                        <p>Website kartu profil modern dengan desain yang elegan dan responsive. Menggunakan gradasi warna yang halus dan animasi smooth.</p>
                        <div class="project-tech">
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">CSS</span>
                            <span class="tech-tag">Laravel</span>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com/XxMeguminxX/aboutme" class="project-link" target="_blank">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="#" class="project-link live-link" target="_blank">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                        </div>
                    </div>

                    <!-- Project 2: Sample Project -->
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-code project-icon"></i>
                        </div>
                        <h3>Simple Calculator</h3>
                        <p>Kode kalukulator simpel yang dibuat dengan JavaScript</p>
                        <div class="project-tech">
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">CSS</span>
                            <span class="tech-tag">JavaScript</span>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com/XxMeguminxX/simple_calculator" class="project-link" target="_blank">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="" class="project-link live-link" target="_blank">
                                <i class="fas fa-external-link-alt"></i> Soon
                            </a>
                        </div>
                    </div>

                    <!-- Project 3: Sample Project -->
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-mobile-alt project-icon"></i>
                        </div>
                        <h3>MyStore - Online Marketplace</h3>
                        <p>MyStore adalah platform web e-commerce modern yang dibangun dengan Laravel Framework: </br>
                            🛒 Toko Online: Penjualan produk dengan sistem keranjang belanja
                            Website ini terintegrasi dengan sistem pembayaran Tripay untuk memproses transaksi yang aman dan terpercaya.</p>
                        <div class="project-tech">
                            <span class="tech-tag">HTML</span>
                            <span class="tech-tag">CSS</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Laravel</span>
                        </div>
                        <div class="project-links">
                            <a href="https://github.com/XxMeguminxX/MyStore" class="project-link" target="_blank">
                                <i class="fab fa-github"></i> Code
                            </a>
                            <a href="#" class="project-link live-link" target="_blank">
                                <i class="fas fa-external-link-alt"></i> Soon
                            </a>
                        </div>
                    </div>
                </div>
    </div>

    <!-- JavaScript untuk Modal Projects -->
    <script>
        console.log('JavaScript loaded!');

        // Function to initialize modal
        function initModal() {
            console.log('Initializing modal...');

            const toggleBtn = document.getElementById('toggle-projects');
            const toggleText = document.getElementById('toggle-text');
            const modal = document.getElementById('projects-modal');
            const closeBtn = document.getElementById('close-modal');
            const toggleIcon = toggleBtn ? toggleBtn.querySelector('i') : null;

            console.log('Elements found:', {
                toggleBtn: toggleBtn,
                toggleText: toggleText,
                modal: modal,
                closeBtn: closeBtn,
                toggleIcon: toggleIcon
            });

            if (!toggleBtn) {
                console.error('Toggle button not found!');
                return;
            }

            if (!modal) {
                console.error('Modal not found!');
                return;
            }

            // Remove any existing event listeners
            toggleBtn.onclick = null;
            toggleBtn.removeEventListener('click', toggleBtn._modalHandler);

            // Create new click handler
            function handleClick(event) {
                console.log('Modal button clicked!');
                event.preventDefault();
                event.stopPropagation();

                // Show modal with animation
                modal.style.display = 'flex';
                modal.classList.add('show');
                document.body.style.overflow = 'hidden';

                // Update button state
                if (toggleText) toggleText.textContent = 'Tutup Modal';
                if (toggleIcon) toggleIcon.className = 'fas fa-times';
                if (toggleBtn) toggleBtn.classList.add('active');

                console.log('Modal opened successfully!');
            }

            // Add event listener
            toggleBtn._modalHandler = handleClick;
            toggleBtn.addEventListener('click', handleClick);

            // Close button handler
            if (closeBtn) {
                closeBtn.onclick = function(event) {
                    event.preventDefault();
                    console.log('Close button clicked!');
                    closeModal();
                };
            }

            // Close modal function
            function closeModal() {
                modal.classList.remove('show');
                // Delay hiding to allow animation to complete
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 300);
                document.body.style.overflow = 'auto';

                if (toggleText) toggleText.textContent = 'Tampilkan Proyek';
                if (toggleIcon) toggleIcon.className = 'fas fa-code';
                if (toggleBtn) toggleBtn.classList.remove('active');
            }

            // Close on outside click
            modal.onclick = function(event) {
                if (event.target === modal) {
                    console.log('Clicked outside modal');
                    closeModal();
                }
            };

            // Close on ESC key
            document.onkeydown = function(event) {
                if (event.key === 'Escape' && modal.style.display === 'flex') {
                    console.log('ESC pressed');
                    closeModal();
                }
            };

            console.log('Modal initialized successfully!');
        }

        // Initialize when DOM is fully loaded
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initModal);
        } else {
            // DOM already loaded
            initModal();
        }

        // Backup initialization after a short delay
        setTimeout(initModal, 500);

    </script>

</body>
</html>
