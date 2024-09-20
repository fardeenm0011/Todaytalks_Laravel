<header class="th-header d-lg-block d-none header-layout1" >
    <div class="header-top " >
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fa-regular fa-calendar-days header-links-icon"></i><a></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.youtube.com/" target="_blank">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <!-- <a href="/login">
                                       <span class="fw-bold" style="color:#0071c5;">Login</span>
                                    </a> -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto d-none d-lg-block">
                    <div class="col-auto">
                        <div class="header-logo"><a href="/"><img class="light-img logo" src="{{ config('images.logo') }}" alt="Tnews"></a><a href="home-newspaper.html"><img class="dark-img" src="assets/img/logo-white.svg" alt="Tnews"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    document.addEventListener("DOMContentLoaded", async function() {
        let months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        let now = new Date();
        let day = now.getDate();
        let month = months[now.getMonth()];
        let year = now.getFullYear();
        let currentTime = `${day} ${month}, ${year}`;
        let currentDateElement = document.querySelector('.header-links');
        let currentDateElementLink = currentDateElement.querySelector('a');
        currentDateElementLink.textContent = currentTime;
    });
    // Check screen width on page load
    if (window.innerWidth < 992) {
        changeSocialLinksContent();
    }

    // Listen for window resize event to update content dynamically
    window.addEventListener('resize', function() {
        if (window.innerWidth < 992) {
            changeSocialLinksContent();
        } else {
            // Reset to original content if screen width is 992px or more
            resetSocialLinksContent();
        }
    });

    function changeSocialLinksContent() {
        // Change content of social-links for smaller screens
        document.querySelector('.social-links').innerHTML = `
        <div class="header-logo"><a href="/"><img class="light-img logo" src="https://tnreaders.in/images/logo.jpg" alt="Tnews"/></a><a href="home-newspaper.html"><img class="dark-img" src="assets/img/logo-white.svg" alt="Tnews"></a></div>
        `
    }

    function resetSocialLinksContent() {
        // Reset content of social-links to original for larger screens
        document.querySelector('.social-links').innerHTML = '<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>';
    }
</script>