<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.png">
    <div class="copyright-wrap">
        <div class="container">
            <div class="row jusity-content-between align-items-center">
                <div class="col-lg-5">
                    <p class="copyright-text">Copyright <i class="fas fa-copyright"></i> <span></span> <a href="/">Tnews</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-auto ms-auto d-none d-lg-block">
                    <div class="footer-links mr-50">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/about">Faq</a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    document.addEventListener("DOMContentLoaded", async function() {
        let now = new Date();
        let year = now.getFullYear();
        let currentDateElement = document.querySelector('.copyright-text');
        let currentDateElementLink = currentDateElement.querySelector('span');
        currentDateElementLink.textContent = year;
    });
</script>