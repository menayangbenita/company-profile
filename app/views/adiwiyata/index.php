<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('<?= BASEURL; ?>img/SMKN8_2.JPG');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2>Berita</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="berita.html">BERITA</a></li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-8 content mb-5">
                    <div id="berita" class="row">
                        <p id="tidak-ada-berita" style="display:none;">Tidak ada berita</p>
                        <!-- News articles will be injected here -->
                    </div>
                    <div class="row">
                        <!-- Pagination controls -->
                        <nav aria-label="Page navigation example mt-0">
                            <ul class="pagination pagination justify-content-end" id="pagination">
                                <!-- Pagination buttons will be injected here by JavaScript -->
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 position-relative align-self-start">

                    <h5 class="text-lg-end mb-4"><span
                            class="mb-3 fw-bolder border-bottom border-secondary">Terbaru</span></h5>
                    <ul class="news list-unstyled">
                        <?php foreach ($data['baru'] as $baru): ?>
                            <li>
                                <a href="<?= BASEURL; ?>BeritaAdiwiyata/Berita/<?= $baru['id'] ?>" class="d-flex">
                                    <img src="<?= BASEURL; ?>img/datafoto/<?= $baru['foto'] ?>" alt=""
                                        class="img-fluid me-3">
                                    <div>
                                        <div class="news-info d-block text-secondary">
                                            <span class="date">Berita SMKN 8</span>
                                            <span class="mx-1">&bullet;</span>
                                            <span><?= $baru['tanggal_publikasi'] ?></span>
                                        </div>
                                        <span class="news-title fw-medium hover-effect"><?= $baru['judul'] ?></span>
                                        <p class="news-link fw-bold mt-1">
                                            <span class="border-bottom border-secondary me-1">READ MORE</span><i
                                                class="bi bi-arrow-right"></i>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

</main><!-- End #main -->

<!-- Add the JavaScript code for pagination -->
<script>
    // Example data from backend (replace this with your PHP output)
    let allNews = <?= json_encode($data['berita']); ?>;

    // Configuration
    const articlesPerPage = 5; // Number of articles per page
    let currentPage = 1; // Start on the first page

    // Function to render news articles
    function renderNews(page = 1) {
        const newsContainer = document.getElementById('berita');
        newsContainer.innerHTML = ''; // Clear previous content

        // Calculate the start and end index of the articles to display on this page
        const start = (page - 1) * articlesPerPage;
        const end = start + articlesPerPage;

        const paginatedNews = allNews.slice(start, end);

        // Inject news into the container
        paginatedNews.forEach(news => {
            const newsCard = `
            <div class="card border-0 shadow-none mb-5">
                <div class="card-body p-0 pe-lg-5">
                    <img class="object-fit-cover w-100 rounded-4 mb-3" height="280" style="object-fit: cover;"
                        src="<?= BASEURL; ?>img/datafoto/${news.foto}" alt="">
                    <a class="text-dark" href="<?= BASEURL; ?>BeritaAdiwiyata/Berita/${news.id}">
                        <h3 class="mb-3">${news.judul}</h3>
                    </a>
                    <h6 class="fw-bold mb-3">
                        <span class="me-4">${news.tanggal_publikasi}</span> | 
                        <span class="ms-4">SMKN 8 MALANG</span>
                    </h6>
                    <a href="<?= BASEURL; ?>BeritaAdiwiyata/Berita/${news.id}" class="fw-bold">
                        READ MORE <i class="bi bi-arrow-up-right-circle"></i>
                    </a>
                </div>
            </div>`;
            newsContainer.innerHTML += newsCard;
        });
    }

    // Function to render pagination controls
    function renderPagination() {
        const paginationContainer = document.getElementById('pagination');
        paginationContainer.innerHTML = ''; // Clear previous pagination

        const totalPages = Math.ceil(allNews.length / articlesPerPage);

        // Previous button
        const prevClass = (currentPage === 1) ? 'disabled' : '';
        paginationContainer.innerHTML += `
        <li class="page-item ${prevClass}">
            <a class="page-link" href="#" aria-label="Previous" onclick="goToPage(${currentPage - 1})">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>`;

        // Page buttons
        for (let i = 1; i <= totalPages; i++) {
            const activeClass = (i === currentPage) ? 'active' : '';
            paginationContainer.innerHTML += `
            <li class="page-item ${activeClass}">
                <a class="page-link" href="#" onclick="goToPage(${i})">${i}</a>
            </li>`;
        }

        // Next button
        const nextClass = (currentPage === totalPages) ? 'disabled' : '';
        paginationContainer.innerHTML += `
        <li class="page-item ${nextClass}">
            <a class="page-link" href="#" aria-label="Next" onclick="goToPage(${currentPage + 1})">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>`;
    }

    // Function to change the current page and re-render content
    function goToPage(page) {
        const totalPages = Math.ceil(allNews.length / articlesPerPage);
        if (page >= 1 && page <= totalPages) {
            currentPage = page;
            renderNews(page);
            renderPagination();
        }
    }

    // Initial render
    renderNews();
    renderPagination();

</script>