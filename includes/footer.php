<!-- Dynamic Year Functionality -->
<script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentYear = new Date().getFullYear();
            document.getElementById('copyright').innerHTML = `&copy; ${currentYear} Amy Miles`;
        });
</script>

<footer class="footer bg-dark text-white">
    <div class="container d-flex align-items-center justify-content-start position-relative">
        <!-- Dropdown -->
        <div class="me-auto">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Link</a></li>
                <li><a class="dropdown-item" href="#">Link</a></li>
            </ul>
        </div>

        <!-- Copyright -->
        <p id="copyright" class="position-absolute start-50 translate-middle-x m-0"></p>
    </div>
</footer>