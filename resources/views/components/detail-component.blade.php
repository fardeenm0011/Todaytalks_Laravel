<div class="breadcumb-wrapper">
    <div class="container">
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>{{ $detailType }}</li>
            <li>{{ $title }}</li>
        </ul>
    </div>
</div>
<div class="loader-container-detail" style="display: flex; justify-content:center; margin-bottom: 1000px;">
    <img src="{{ asset('assets/loader_white.gif') }}" alt="Loading GIF" class="class=loader-video" />
</div>
<section class="th-blog-wrapper blog-details space-top">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-lg-9">
                <div class="th-blog blog-single">
                    <a data-theme-color="#28a745" class="category"></a>
                    <a>
                        <h2 class="blog-title"></h2>
                    </a>
                    <div class="blog-img" style=" display:flex; justify-content: start;">
                        <img alt="Blog Image" style="width: 600px; height: 400px;" />
                    </div>
                    <div class="blog-content-wrap">
                        <div class="share-links-wrap">
                            <div class="share-links">
                                <!-- <span class="share-links-title">Share Post:</span> -->
                                <div class="multi-social multi-social-detail">
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
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a></a>
                            </div>
                            <div class="content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="google-ads"></div>
                <div class="related-post-wrapper pt-30 mb-30">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="sec-title has-line">Related Post</h2>
                        </div>
                    </div>
                    <div class="row slider-shadow th-carousel" id="related-post-slide" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="2">
                        <div class="related-post">
                            <div class="blog-style4 detail-img">
                                <a>
                                    <div class="blog-img w-386">
                                        <div class="img-parent">
                                            <img src="" alt="" />
                                        </div>
                                    </div>
                                </a>
                                <div class="blog-content" style="margin-bottom : 30px;">
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
        let selectCategoryName = "{{ $title }}";
        let selectCategoryType = "{{ $detailType }}";
        let type = selectCategoryType === 'news_detail' ? 'news' : 'article';
        let selectBlogDetail = {};
        let selectPost = {};
        let response_temp = {};
        let relatedPosts_temp = {};
        let relatedPosts = {};
        const IMAGE_BASE_URL = 'https://tnreaders.in/images/';
        const DEFAULT_POST = 'default_post.png';
        await axios.get(`https://tnreaders.in/api/user/homePosts`)
            .then(response => {
                homePosts = response.data;
            })
            .catch(error => {
                console.error(error);
            });

        response_temp = await axios.get(`https://tnreaders.in/api/user/findPost?id=${selectCategoryName}`);
        selectPost = response_temp.data;

        console.log(IMAGE_BASE_URL);

        relatedPosts_temp = await axios.get(`https://tnreaders.in/api/user/relatedPost?id=${selectCategoryName}`);
        relatedPosts = relatedPosts_temp.data;

        function createRelatedPost(post) {
            let Div = document.querySelector('.slider-shadow');
            // Catagory Div
            let categoryDiv = document.querySelector('.related-post');
            createCategoryContent(post, categoryDiv, Div);
        }

        function cloneRelatedPost(post) {
            let Div = document.querySelector('.slider-shadow');
            // Catagory Div
            let originalDiv = document.querySelector('.related-post');
            let categoryDiv = originalDiv.cloneNode(true);
            createCategoryContent(post, categoryDiv, Div)
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

        function loadGoogleAd(Div, adSlot) {
            // Create the ad unit
            let scriptPage2 = document.createElement('script');
            // Set the attributes for the script element
            scriptPage2.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1915488793968759";
            scriptPage2.async = true;
            scriptPage2.crossorigin = "anonymous";
            Div.appendChild(scriptPage2);
            let adUnit = document.createElement('ins');
            adUnit.className = 'adsbygoogle';
            adUnit.style.display = 'block';
            adUnit.setAttribute('data-ad-client', 'ca-pub-1915488793968759');
            adUnit.setAttribute('data-ad-slot', adSlot);
            adUnit.setAttribute('data-full-width-responsive', 'true');
            // Insert the ad unit into the container
            Div.appendChild(adUnit);
            let scriptRefresh = document.createElement('script');

            // Set the text content of the script element
            scriptRefresh.textContent = "adsbygoogle = window.adsbygoogle || []; adsbygoogle.push({});";
            Div.appendChild(scriptRefresh);
        }


        let blogDetailContent = document.querySelector('.content');

        // Below function for remove the unwanted tag from description:
        function RemoveUnwatedTags(str, tags) {
            // Split the input string based on the <br> tag
            let segments = str.split('<br>');

            // Initialize an array to hold the cleaned values
            let cleanedArray = [];

            // Process each segment
            segments.forEach(segment => {
                // Remove each unwanted tag
                tags.forEach(tag => {
                    let openTag = `<${tag}>`;
                    let closeTag = `</${tag}>`;
                    segment = segment.replace(new RegExp(openTag, 'g'), ''); // Remove <tag>
                    segment = segment.replace(new RegExp(closeTag, 'g'), ''); // Remove </tag>
                });

                // Trim any leading/trailing whitespace
                segment = segment.trim();

                // Add to the cleaned array if it's not an empty string
                if (segment !== '') {
                    cleanedArray.push(segment);
                }
            });
            cleanedArray.map((ele) => {
                if (ele !== "") {
                    let p = document.createElement('p');
                    p.innerText = ele;
                    blogDetailContent.appendChild(p);
                }
            })
        }

        const cleanedString = RemoveUnwatedTags(selectPost.description, ['p', 'br'])

        // Category Link
        let blogDetailCategory = document.querySelector('.category');
        blogDetailCategory.textContent = selectPost.category_name;
        // Blog Detail Title
        let blogDetailTitle = document.querySelector('.blog-title');
        blogDetailTitle.textContent = selectPost.title;
        // Blog Detail Image
        let blogDetailImg = document.querySelector('.blog-img > img');
        // blogDetailImg.src = IMAGE_BASE_URL + selectPost.img;
        blogDetailImg.src = selectPost.FullImgPath ? selectPost.FullImgPath : IMAGE_BASE_URL + DEFAULT_POST;
        // Blog Detail Date
        let createdDate = new Date(selectPost.created_at);
        let months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        let month = months[createdDate.getMonth()];
        let formattedDate = `${createdDate.getDate()} ${month}, ${createdDate.getFullYear()}`;
        let blogDetailDate = document.querySelector('.blog-meta > a');
        blogDetailDate.textContent = formattedDate;
        // Blog Detail Date Icon
        let blogMetaDateIcon = document.createElement('i');
        blogMetaDateIcon.classList.add('fas', 'fa-calendar-days', 'mr-5');
        blogDetailDate.insertBefore(blogMetaDateIcon, blogDetailDate.firstChild);
        // Blog Detail Content
        // let blogDetailContent = document.querySelector('.content > p');
        // blogDetailContent.textContent = cleanedString;
        // console.log('select',selectPost);
        // console.log('clean',cleanedString);

        // Blog Detail Social Share
        let socialShareTitle = selectPost.title;
        let socialShareImg = selectPost.FullImgPath ? selectPost.FullImgPath : IMAGE_BASE_URL + DEFAULT_POST;
        setFacebookShareTags(socialShareTitle, socialShareImg);
        setTwitterShareTags(socialShareTitle, socialShareImg);
        // Social Share Link

        let socialShareDiv = document.querySelector('.multi-social');
        let socialShareLinks = socialShareDiv.querySelectorAll('a');
        // let dynamicUrl = `${window.location.href}${categoryType}/${category.seo_slug}`;
        // console.log(dynamicUrl);

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

        //Google Ads add
        let googleAdsDiv = document.querySelector('.google-ads');
        loadGoogleAd(googleAdsDiv, '4556667344');
        // Related Posts
        if (relatedPosts.length > 1) {
            if (relatedPosts.length > 2) {
                createRelatedPost(relatedPosts[0]);
                relatedPosts.slice(1).forEach(post => {
                    cloneRelatedPost(post);
                });
            } else {
                createRelatedPost(relatedPosts);
            }
        } else {
            let relatedPostDiv = document.querySelector('.slider-shadow .blog-style1');
            let childrenToBeRemoved = Array.from(relatedPostDiv.children);
            childrenToBeRemoved.forEach(child => {
                relatedPostDiv.removeChild(child);
            });
            let noPostFound = document.createElement('h2');
            noPostFound.textContent = 'No Related Posts Found';
            relatedPostDiv.appendChild(noPostFound);
        }
        document.querySelector('.loader-container-detail').style.display = 'none';
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