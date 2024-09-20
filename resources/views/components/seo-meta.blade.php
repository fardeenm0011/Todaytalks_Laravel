<meta property='og:title' content='' />
<meta name=' keywords' content='' />
<meta name='description' content='' />

<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<!-- <script>
    document.addEventListener("DOMContentLoaded", async function() {
        let currentRoute = window.location.href;
        let pathSegments = currentRoute.split('/');
        let page_type = '';
        let page_title = '';
        let fetch_url = '';
        let seo_title = '';
        let seo_keyword = '';
        let seo_description = '';
        const BASE_URL = 'https://tnreaders.in/api/user/';
        const fetch = async (url) => {
            await axios.get(url)
                .then(response => {
                    let post = response.data;
                    console.log(post);

                    seo_title = post.seo_title;
                    seo_description = post.seo_description;
                    seo_keyword = post.seo_keyword;
                    setSeoMetaTag(seo_title, seo_keyword, seo_description);
                })
                .catch(error => {
                    console.error(error);
                });
        };

        function setSeoMetaTag(seo_title, seo_keyword, seo_description) {
            let ogTitleMetaTag = document.querySelector('meta[property="og:title"]');
            ogTitleMetaTag.setAttribute('content', seo_title);
            let keywordMetaTag = document.querySelector('meta[name="keywords"]');
            keywordMetaTag.setAttribute('content', seo_keyword);
            let descriptionMetaTag = document.querySelector('meta[name="description"]');
            descriptionMetaTag.setAttribute('content', seo_description);

            // console.log('seo_desc',seo_keyword);
            // console.log('seo_title',seo_title);
            // console.log('page_title',seo_description);

        }
        if (pathSegments.length > 4) {
            page_type = pathSegments[3];
            page_title = pathSegments[4];
            if (page_type.includes("_detail")) {
                fetch_url = BASE_URL + 'seoPost?id=' + page_title;
                fetch(fetch_url);
            } else {
                fetch_url = BASE_URL + 'seoCategory?id=' + page_title;
                fetch(fetch_url);
            }
        } else {
            fetch_url = BASE_URL + 'setting';
            await axios.get(fetch_url)
                .then(response => {
                    let post = response.data;
                    seo_title = post.title;
                    seo_keyword = post.keywords;
                    seo_description = post.description;
                    setSeoMetaTag(seo_title, seo_keyword, seo_description);
                })
                .catch(error => {
                    console.error(error);
                });
        }
    });
</script> -->