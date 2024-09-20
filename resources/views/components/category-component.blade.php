<div class="breadcumb-wrapper">
    <div class="container">
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>{{ $type }}</li>
            <li>{{ $title }}</li>
        </ul>
    </div>
</div>
<div class="loader-container-category" style="display: flex; justify-content:center; margin-bottom: 1000px;">
    <img src="{{ asset('assets/loader_white.gif') }}" alt="Loading GIF" class="class=loader-video" />
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-9">
                <div class="mb-30">
                    <div class="border-blog2">
                        <div class="blog-style4">
                            <a>
                                <div class="blog-img w-386">
                                    <div class="img-parent">
                                        <img src="" alt="" />
                                    </div>
                                </div>
                            </a>
                            <div class="blog-content">
                                <a data-theme-color="#28a745" href="" class="category"></a>
                                <div class="blog-meta">
                                    <a class="mt-2"></a>
                                    <div class="share-links-wrap">
                                        <div class="share-links">
                                            <div class="multi-social">
                                                <a href="https://facebook.com/" target="_blank">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                                <!-- <a href="https://twitter.com/" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                                <a href="https://linkedin.com/" target="_blank">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a> -->
                                                <a href="https://www.whatsapp.com/" target="_blank">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="box-title-30"><a class="hover-line" href="blog-details.html"></a>
                                </h3>
                                <p class="blog-text"></p>
                                <a href="" class="th-btn style2">மேலும் படிக்க<i class="fas fa-arrow-up-right-from-square ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="th-pagination mt-40">
                    <ul>
                        <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-3">
                <x-google-ads-component />
            </div>
        </div>
    </div>
</section>
<script>
    let categories = {};
    let homePosts = [];
    let selectCategory = [];
    let posts = {};
    let response_temp = {};
    let totalPosts = 0;
    let currentPage = 1;
    let postsPerPage = 10;
    let selectCategoryName = "{{ $title }}";
    let selectCategoryType = "{{ $type }}";
    let selectCategoryTitle = 'default_post.png';
    let isHomepage = "{{ $isHomepage }}";
    let totalPages = 0;
    // const IMAGE_BASE_URL = 'https://tnreaders.in/images/';
    // const DEFAULT_POST = 'default_post.png';
    function findPosts(selectCategoryName) {
        homePosts.forEach(post => {
            if (post.category === selectCategoryName) {
                temp_post = post;
                if (temp_post) {
                    posts = temp_post;
                }
            }
        });
    }

    function findSelectCategory(selectCategoryName, selectCategoryType) {
        for (let key in categories) {
            if (categories[key].type2 === selectCategoryType && categories[key].data_query === selectCategoryName) {
                if (categories[key].child) {
                    selectCategory = categories[key].child;
                    selectCategoryTitle = categories[key].name;

                } else {
                    selectCategory = categories[key];
                    selectCategoryTitle = categories[key].name;
                }
                break;
            } else if (categories[key].child) {
                categories[key].child.forEach(category => {
                    if (category.data_query === selectCategoryName) {
                        selectCategory = category;
                        selectCategoryTitle = category.name;
                    }
                });
            }

        }
    }

    function createCategory(category) {
        let Div = document.querySelector('.mb-30');
        // Catagory Div
        let categoryDiv = document.querySelector('.border-blog2');
        createCategoryContent(category, categoryDiv, Div);
    }

    function cloneCategory(category) {
        let Div = document.querySelector('.mb-30');
        // Catagory Div
        let originalDiv = document.querySelector('.border-blog2');
        let categoryDiv = originalDiv.cloneNode(true);
        createCategoryContent(category, categoryDiv, Div)
    }

    function createCategoryContent(category, categoryDiv, Div) {

        // Category Image Link
        let categoryImageLink = categoryDiv.querySelector('.blog-style4 > a');
        let categoryType = category.category_type === 'news' ? 'news_detail' : 'article_detail';
        categoryImageLink.href = "/" + categoryType + "/" + category.seo_slug;
        // Category Image
        let categoryImage = categoryDiv.querySelector('.blog-img .img-parent > img');
        // categoryImage.src = category.img ? IMAGE_BASE_URL + category.img : IMAGE_BASE_URL + DEFAULT_POST;
        categoryImage.src = category.FullImgPath ? category.FullImgPath : IMAGE_BASE_URL + DEFAULT_POST;
        categoryImage.alt = category.seo_slug;
        // Category Link
        let categoryLink = categoryDiv.querySelector('.category');
        categoryLink.textContent = category.category_name;
        categoryLink.href = "/" + category.category_type + "/" + category.category_data_query;
        // Category Title Link
        let categoryTitleLink = categoryDiv.querySelector('.hover-line');
        categoryTitleLink.textContent = category.title;
        categoryTitleLink.href = "/" + categoryType + "/" + category.seo_slug;
        // Category Content
        let categoryContent = categoryDiv.querySelector('.blog-text');
        categoryContent.textContent = category.sub_title;
        // Category Date
        let createdDate = new Date(category.created_at);
        let months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        let month = months[createdDate.getMonth()];
        let formattedDate = `${createdDate.getDate()} ${month}, ${createdDate.getFullYear()}`;
        let categoryDate = categoryDiv.querySelector('.blog-meta > a');
        categoryDate.textContent = formattedDate;
        // Category Date Icon
        let DateIcon = document.createElement('i');
        DateIcon.classList.add('fas', 'fa-calendar-days', 'mr-5');
        categoryDate.insertBefore(DateIcon, categoryDate.firstChild);
        // Read More
        let categoryReadMore = categoryDiv.querySelector('.th-btn.style2');
        categoryReadMore.href = "/" + categoryType + "/" + category.seo_slug;
        // Category Social Share
        let socialShareTitle = category.title;
        let socialShareImg = category.FullImgPath ? category.FullImgPath : IMAGE_BASE_URL + DEFAULT_POST;
        setFacebookShareTags(socialShareTitle, socialShareImg);
        setTwitterShareTags(socialShareTitle, socialShareImg);
        // Social Share Link
        let socialShareDiv = Div.querySelector('.multi-social');
        let socialShareLinks = socialShareDiv.querySelectorAll('a');
        socialShareLinks[0].onclick = function() {
            FB.ui({
                method: 'share',
                href: window.location.href,
                quote: socialShareTitle,
                picture: socialShareImg
            });
        };
        // socialShareLinks[1].onclick = function() {
        //     window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(socialShareTitle)}&url=&via=YOUR_TWITTER_HANDLE&media=${encodeURIComponent(socialShareImg)}`, '', 'width=600,height=300');
        // };
        // socialShareLinks[2].onclick = function() {
        //     window.open(`https://www.linkedin.com/sharing/share-offsite/?image=${encodeURIComponent(socialShareImg)}&title=${encodeURIComponent(socialShareTitle)}&summary=&source=`, '_blank');
        // };
        socialShareLinks[1].onclick = function() {
            window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(socialShareTitle)}%20${socialShareImg}`, '', 'width=600,height=300');
        };
        // Append New Category
        Div.appendChild(categoryDiv);
    }

    function setFacebookShareTags(title, imageUrl) {
        let ogTitle = document.createElement('meta');
        ogTitle.setAttribute('property', 'og:title');
        ogTitle.setAttribute('content', title);
        document.head.appendChild(ogTitle);

        let ogImage = document.createElement('meta');
        ogImage.setAttribute('property', 'og:image');
        ogImage.setAttribute('content', imageUrl);
        document.head.appendChild(ogImage);
    }

    // Set Twitter Card meta tags for Twitter
    function setTwitterShareTags(title, imageUrl) {
        let twitterTitle = document.createElement('meta');
        twitterTitle.setAttribute('property', 'twitter:title');
        twitterTitle.setAttribute('content', title);
        document.head.appendChild(twitterTitle);

        let twitterImage = document.createElement('meta');
        twitterImage.setAttribute('property', 'twitter:image');
        twitterImage.setAttribute('content', imageUrl);
        document.head.appendChild(twitterImage);
    }

    function onPageChange(pageNumber) {
        currentPage = pageNumber;
        if (currentPage < 1) {
            currentPage = 1;
        }
        if (currentPage > totalPages) {
            currentPage = totalPages;
        }
        renderPagination(currentPage)
    }

    function renderPagination(currentPage) {
        let paginationList = document.querySelector('.th-pagination > ul');
        let paginationLis = paginationList.querySelectorAll('li');
        paginationLis[totalPages + 1].className = '';
        paginationLis[0].className = '';
        if (currentPage === 1) {
            paginationLis[0].classList.add('disabled');
        }
        if (currentPage === totalPages) {
            paginationLis[totalPages + 1].classList.add('disabled');
        }
        for (let i = 1; i <= totalPages; i++) {
            let paginationLiLink = paginationLis[i].querySelector('a');
            if (currentPage === i) {
                paginationLiLink.className = 'active';
            } else {
                paginationLiLink.className = '';
            }
        }
        fetchData();
        if (isHomepage === '1') {
            findPosts(selectCategoryName);
        } else {
            if (postsPerPage === 'all') {
                posts = response_temp.data;
                totalPosts = response_temp.data.length;
            } else {
                posts = response_temp.data.data
                totalPosts = response_temp.data.total;
            }
        }

        if (posts.length) {
            totalPages = Math.ceil(totalPosts / postsPerPage);

            let Div = document.querySelector('.mb-30');
            let childrenToBeRemoved = Array.from(Div.children).slice(1);
            childrenToBeRemoved.forEach(child => {
                Div.removeChild(child);
            });
            createCategory(posts[0]);
            posts.slice(1).forEach(category => {
                cloneCategory(category);
            });
            let paginationList = document.querySelector('.th-pagination > ul');
            let paginationLis = paginationList.querySelectorAll('li');
        } else {
            let postDiv = document.querySelector('.col-xxl-9');
            let childrenToBeRemoved = Array.from(postDiv.children);
            childrenToBeRemoved.forEach(child => {
                postDiv.removeChild(child);
            });
            let noPostFound = document.createElement('h2');
            noPostFound.textContent = 'No Posts Found';
            postDiv.appendChild(noPostFound);
        }
    }

    function renderPageNumbers(paginationLi, paginationList) {
        if (totalPages < 2) {
            paginationLiLink = paginationLi.querySelector('a');
            paginationLiLink.classList.add('active');
        } else {
            if (currentPage === 1) {
                paginationLiLink = paginationLi.querySelector('a');
                paginationLiLink.classList.add('active');
                paginationLiLink.addEventListener('click', () => {
                    onPageChange(1);
                });
            } else {
                paginationLiLink = paginationLi.querySelector('a');
                paginationLiLink.addEventListener('click', () => {
                    onPageChange(1);
                });
            }
            for (let i = 2; i <= totalPages; i++) {
                let clonePaginationLi = paginationLi.cloneNode(true);
                clonePaginationLiLink = clonePaginationLi.querySelector('a');
                clonePaginationLiLink.textContent = i;
                clonePaginationLiLink.className = '';
                if (currentPage === i) {
                    clonePaginationLiLink.classList.add('active');
                } else {
                    clonePaginationLiLink.addEventListener('click', () => {
                        onPageChange(i);
                    });
                }
                let referenceElement = paginationList.children[paginationList.children.length - 1];
                paginationList.insertBefore(clonePaginationLi, referenceElement);
            }
        }

    }

    function loadGoogleAd(adSlot) {
        let Div = document.querySelector('.mb-30');
        let originalDiv = document.querySelector('.border-blog2');
        let cloneDiv = originalDiv.cloneNode(true);
        while (cloneDiv.firstChild) {
            cloneDiv.removeChild(cloneDiv.firstChild);
        }
        let scriptPage2 = document.createElement('script');
        // Set the attributes for the script element
        scriptPage2.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1915488793968759";
        scriptPage2.async = true;
        scriptPage2.crossorigin = "anonymous";
        cloneDiv.appendChild(scriptPage2);
        // Create the ad unit
        let adUnit = document.createElement('ins');
        adUnit.className = 'adsbygoogle';
        adUnit.style.display = 'block';
        adUnit.setAttribute('data-ad-client', 'ca-pub-1915488793968759');
        adUnit.setAttribute('data-ad-slot', adSlot);
        adUnit.setAttribute('data-full-width-responsive', 'true');
        // Insert the ad unit into the container
        cloneDiv.appendChild(adUnit);
        let scriptRefresh = document.createElement('script');

        // Set the text content of the script element
        scriptRefresh.textContent = "adsbygoogle = window.adsbygoogle || []; adsbygoogle.push({});";
        cloneDiv.appendChild(scriptRefresh);
        Div.appendChild(cloneDiv);
    }

    async function fetchData() {
        try {
            response_temp = await axios.get(`https://tnreaders.in/api/user/pagenationPosts`, {
                params: {
                    category: selectCategoryTitle,
                    currentPage: currentPage,
                    postsPerPage: postsPerPage,
                },
            });
        } catch (error) {
            console.error(error);
        }
    }

    document.addEventListener("DOMContentLoaded", async function() {
        document.querySelector('.container').style.display = 'none';
        document.querySelector('.footer-layout1').style.display = 'none';
        await axios.get(`https://tnreaders.in/api/user/categories`)
            .then(response => {
                categories = response.data;
            })
            .catch(error => {
                console.error(error);
            });
        await axios.get(`https://tnreaders.in/api/user/homePosts`)
            .then(response => {
                homePosts = response.data;
            })
            .catch(error => {
                console.error(error);
            });
        findSelectCategory(selectCategoryName, selectCategoryType);
        response_temp = await axios.get(`https://tnreaders.in/api/user/pagenationPosts`, {
            params: {
                category: selectCategoryTitle,
                currentPage: currentPage,
                postsPerPage: postsPerPage,
            },
        });
        if (isHomepage === '1') {
            findPosts(selectCategoryName);
        } else {
            if (postsPerPage === 'all') {
                posts = response_temp.data;
                totalPosts = response_temp.data.length;
            } else {
                posts = response_temp.data.data
                totalPosts = response_temp.data.total;
            }
        }

        if (posts.length) {
            totalPages = Math.ceil(totalPosts / postsPerPage);
            createCategory(posts[0]);
            let postCounter = 1;
            posts.slice(1).forEach(category => {
                cloneCategory(category);
                postCounter += 1;
                if (postCounter % 5 === 0) {
                    loadGoogleAd('3581145953');
                }
            });
            let paginationList = document.querySelector('.th-pagination > ul');
            let paginationLis = paginationList.querySelectorAll('li');
            if (currentPage === 1) {
                paginationLis[0].classList.add('disabled');
                let paginationLeftArrowLink = paginationLis[0].querySelector('a');
                paginationLeftArrowLink.addEventListener('click', () => {
                    onPageChange(currentPage - 1);
                });
            } else {
                let paginationLeftArrowLink = paginationLis[0].querySelector('a');
                paginationLeftArrowLink.addEventListener('click', () => {
                    onPageChange(currentPage - 1);
                });
            }
            renderPageNumbers(paginationLis[1], paginationList);
            if (currentPage === totalPages) {
                paginationLis[paginationLis.length - 1].classList.add('disabled');
                let paginationRightArrowLink = paginationLis[paginationLis.length - 1].querySelector('a');
                paginationRightArrowLink.addEventListener('click', () => {
                    onPageChange(currentPage + 1);
                });
            } else {
                let paginationLeftArrowLink = paginationLis[paginationLis.length - 1].querySelector('a');
                paginationLeftArrowLink.addEventListener('click', () => {
                    onPageChange(currentPage + 1);
                });
            }

        } else {
            let postDiv = document.querySelector('.col-xxl-9');
            let childrenToBeRemoved = Array.from(postDiv.children);
            childrenToBeRemoved.forEach(child => {
                postDiv.removeChild(child);
            });
            let noPostFound = document.createElement('h2');
            noPostFound.textContent = 'No Posts Found';
            noPostFound.style.marginBottom = '139px';
            postDiv.appendChild(noPostFound);
        }

        document.querySelector('.loader-container-category').style.display = 'none';
        document.querySelector('.container').style.display = 'block';
        document.querySelector('.footer-layout1').style.display = 'block';
    });
    (function(d, s, id) {
        var js,
            fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    })(document, "script", "facebook-jssdk");

    // Initialize the Facebook SDK with your app ID
    window.fbAsyncInit = function() {
        FB.init({
            appId: "your-app-id",
            autoLogAppEvents: true,
            xfbml: true,
            version: "v13.0",
        });
    };
</script>