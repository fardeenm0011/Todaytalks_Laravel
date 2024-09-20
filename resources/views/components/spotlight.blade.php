<section class="space-extra-bottom"> <!-- space-top -->
    <div class="loader-container-home" style="display: flex; justify-content:center; margin-bottom: 1000px;">
        <img src="{{ asset('assets/loader_white.gif') }}" alt="Loading GIF" class="class=loader-video" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-9">
                <div class="mb-30">
                    <div class="row align-items-center" style="margin-bottom:15px;">
                        <div class="col">
                            <h2 class="sec-title has-line" style="margin-bottom : 0; margin-top : 0; color: var(--theme-color);"></h2>
                        </div>
                        <div class="col-auto">
                            <div class="sec-btn" style="margin-top: var(--section-title-space);">
                                <a href="" class="category-title-link">View All<i class="fas fa-arrow-up-right-from-square ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="border-blog2">
                        <div class="blog-style4">
                            <a>
                                <div class="blog-img w-386">
                                    <div class="img-parent">
                                        <img src="" alt="" />
                                    </div>
                            </a>
                        </div>
                        <div class="blog-content">
                            <a data-theme-color="#28a745" href="" class="category"></a>
                            <div class="blog-meta mb-2 mb-md-auto ">
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
                            <h3 class="box-title-30"><a class="hover-line" href="/"></a>
                            </h3>
                            <p class="blog-text"></p>
                            <a href="" class="th-btn style2">மேலும் படிக்க<i class="fas fa-arrow-up-right-from-square ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-lg-3">
            <x-google-ads-component />
        </div>
    </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", async function() {
        document.querySelector('.container').style.display = 'none';
        document.querySelector('.footer-layout1').style.display = 'none';
        let spotlight = [];
        let homePageCategories = [];
        const IMAGE_BASE_URL = 'https://tnreaders.in/images/';
        const DEFAULT_POST = 'default_post.png';
        await axios.get('https://tnreaders.in/api/user/spotlight')
            .then(response => {
                spotlight = response.data;
            })
            .catch(error => {
                console.error(error);
            });

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
            // Category Image
            let categoryImageLink = categoryDiv.querySelector('.blog-img a');
            let categoryType = category.category_type === 'news' ? 'news-detail' : 'article-detail';
            categoryImageLink.href = `/${categoryType}/${category.seo_slug}`;
            let categoryImage = categoryDiv.querySelector('.blog-img img');
            categoryImage.src = category.FullImgPath ? category.FullImgPath : IMAGE_BASE_URL + DEFAULT_POST;
            categoryImage.alt = category.seo_slug;

            // Category Link
            let categoryLink = categoryDiv.querySelector('.category');
            categoryLink.textContent = category.category_name;
            categoryLink.href = `/${category.category_type}/${category.category_data_query}`;

            // Category Title Link
            let categoryTitleLink = categoryDiv.querySelector('.hover-line');
            categoryTitleLink.textContent = category.title;
            categoryTitleLink.href = `/${categoryType}/${category.seo_slug}`;

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

            // Read More
            let categoryReadMore = categoryDiv.querySelector('.th-btn.style2');
            categoryReadMore.href = `/${categoryType}/${category.seo_slug}`;

            // Category Date Icon
            let DateIcon = document.createElement('i');
            DateIcon.classList.add('fas', 'fa-calendar-days', 'mr-5');
            categoryDate.insertBefore(DateIcon, categoryDate.firstChild);

            // Social Share
            let socialShareTitle = category.title;
            let socialShareImg = category.FullImgPath ? category.FullImgPath : IMAGE_BASE_URL + DEFAULT_POST;
            console.log('url', socialShareImg);


            let socialShareDiv = categoryDiv.querySelector('.multi-social');
            let socialShareLinks = socialShareDiv.querySelectorAll('a');
            let dynamicUrl = `${window.location.href}${categoryType}/${category.seo_slug}`;

            console.log(socialShareLinks[0]);
            console.log(socialShareLinks[1]);
            
            socialShareLinks[0].onclick = function() {
                setTwitterShareTags(socialShareTitle, socialShareImg);
                setFacebookShareTags(socialShareTitle, socialShareImg);
                let shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(dynamicUrl)}&quote=${encodeURIComponent(socialShareTitle)}`;
                window.open(shareUrl, 'facebook-share-dialog', 'width=800,height=600');
            };

            // socialShareLinks[1].onclick = function() {
            //     setTwitterShareTags(socialShareTitle, socialShareImg);
            //     setFacebookShareTags(socialShareTitle, socialShareImg);
            //     window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(socialShareTitle)}&url=${encodeURIComponent(dynamicUrl)}&via=YOUR_TWITTER_HANDLE`, '', 'width=600,height=300');
            // };

            // socialShareLinks[2].onclick = function() {
            //     setTwitterShareTags(socialShareTitle, socialShareImg);
            //     setFacebookShareTags(socialShareTitle, socialShareImg);
            //     window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(dynamicUrl)}&title=${encodeURIComponent(socialShareTitle)}&summary=&source=`, '_blank', 'width=600,height=400');
            // };

            // socialShareLinks[2].onclick = function() {
            //     let dynamicUrl = 'https://example.com/my-article';
            //     let socialShareTitle = 'Interesting Article';
            //     let socialShareSummary = 'This article provides insights into various topics.';
            //     let socialShareSource = 'Example.com';

            //     let shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(dynamicUrl)}&title=${encodeURIComponent(socialShareTitle)}&summary=${encodeURIComponent(socialShareSummary)}&source=${encodeURIComponent(socialShareSource)}`;

            //     window.open(shareUrl, '_blank', 'width=600,height=400');
            // };

            socialShareLinks[1].onclick = function() {
                setTwitterShareTags(socialShareTitle, socialShareImg);
                setFacebookShareTags(socialShareTitle, socialShareImg);
                window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(socialShareTitle)}%20${encodeURIComponent(dynamicUrl)}`, '', 'width=600,height=300');
            };


            // Append New Category
            Div.appendChild(categoryDiv);
        }


        function createCategoryTitle(category) {
            let Div = document.querySelector('.mb-30');
            let categoryDiv = Div.querySelector('.align-items-center');
            let categoryTitle = categoryDiv.querySelector('.sec-title');
            categoryTitle.textContent = "தலைப்புச் செய்திகள்";
            // Category Link
            let categoryType = category.category.type2 === 'news' ? 'news' : 'article'
            let categoryLink = categoryDiv.querySelector('.category-title-link');
            categoryLink.href = '/' + categoryType + '/' + category.category.data_query;
            Div.appendChild(categoryDiv);
        }

        function cloneCategoryTitle(category) {
            let Div = document.querySelector('.mb-30');
            let originalDiv = Div.querySelector('.align-items-center');
            let categoryDiv = originalDiv.cloneNode(true);
            createCategoryTitleContent(category, categoryDiv, Div);
        }

        function createCategoryTitleContent(post, categoryDiv, Div) {
            // Category Title
            let categoryTitle = categoryDiv.querySelector('.sec-title');
            categoryTitle.textContent = post.category.name;
            // Category Link
            let categoryType = post.category.type2 === 'news' ? 'news' : 'article'
            let categoryLink = categoryDiv.querySelector('.category-title-link');
            categoryLink.href = '/' + categoryType + '/' + post.category.data_query;
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
            Div.appendChild(cloneDiv)
        }
        createCategoryTitle(spotlight[0]);

        // function called!
        createCategory(spotlight[0]);


        let spotlightCounter = 1;
        spotlight.slice(1).forEach(category => {
            cloneCategory(category);
            spotlightCounter += 1;
            if (spotlightCounter % 5 === 0) {
                loadGoogleAd('3826676004');
            }
        });
        loadGoogleAd('5256986449');
        // homePageCategories.forEach(homeposts => {
        //     cloneCategoryTitle(homeposts.posts[0]);
        //     homeposts.posts.forEach(category => {
        //         cloneCategory(category);
        //     });
        // });

        document.querySelector('.loader-container-home').style.display = 'none';
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