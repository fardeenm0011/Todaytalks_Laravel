<header class="th-header header-layout1">
    <div class="sticky-wrapper">
        <div class="menu-area ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-11 ">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="menu-item-has-children"><a href="/news/news-headlines">செய்திகள்</a>
                                    <ul class="sub-menu">
                                        <li><a href="/news/Headlines">தலைப்புச்செய்திகள்</a>
                                        </li>
                                        <li><a href="/news/cinema-news">சினிமா</a>
                                        </li>
                                        <li><a href="/news/sports-news">விளையாட்டு</a>
                                        </li>
                                        <li><a href="/news/business">வணிகம்</a>
                                        </li>
                                        <li><a href="/news/Politics">அரசியல்</a>
                                        </li>
                                        <li><a href="/news/crime">குற்றம்</a>
                                        </li>
                                        <li><a href="/news/Tamilnadu">தமிழகம்</a>
                                        </li>
                                        <li><a href="/news/World">உலகம்</a>
                                        </li>
                                        <li><a href="/news/india">இந்தியா</a>
                                        </li>
                                        <li><a href="/news/தொழில்-நுட்பம்">தொழில் நுட்பம்</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a></a>
                                    <ul class="sub-menu">
                                        <li><a></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children view-more"><a href="#">View More</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#"></a>
                                            <ul class="sub-menu">
                                                <li><a></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 " style="display:flex; justify-content:end">
                        <div class="header-button">
                            <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block" style="margin-left: 0;">
                                <i class="fa-solid fa-bars"></i>
                            </a>
                            <button type="button" class="th-menu-toggle d-block d-lg-none">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    document.addEventListener("DOMContentLoaded", async function() {
        let categories = [];
        let mainCategories = [];
        let moreCategories = [];
        let sub_categories = [];
        // await axios.get('https://tnreaders.in/api/user/categories')
        //     .then(response => {
        //         categories = response.data;
        //         console.log(categories);
        //     })
        //     .catch(error => {
        //         console.error(error);
        //     });
        categories = [{
                "id": 2,
                "parent_id": null,
                "name": "செய்திகள்",
                "status": "allow",
                "type": "default",
                "type2": "news",
                "position": "main",
                "isHomepage": "yes",
                "sortorder": "1",
                "image": "Rectangle 2179.png",
                "data_query": "news-headlines",
                "seo_title": "Demo title",
                "seo_keyword": "Demo keyword",
                "seo_description": "Demo keyword",
                "FullImgPath": "https://tnreaders.in/images/category/news/Rectangle 2179.png",
                "created_at": "2024-06-26T10:15:40.000000Z",
                "updated_at": "2024-07-29T08:58:23.000000Z",
                "child": [{
                        "id": 9,
                        "parent_id": 2,
                        "name": "தலைப்புச்செய்திகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "1",
                        "image": "Headlines.png",
                        "data_query": "Headlines",
                        "seo_title": "Breaking News: [Headline]",
                        "seo_keyword": "breaking news today , latest headlines , news updates, current events ,Trending news",
                        "seo_description": "Stay informed with the latest breaking news headlines and updates.",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Headlines.png",
                        "created_at": "2024-06-26T10:33:04.000000Z",
                        "updated_at": "2024-06-27T05:43:15.000000Z"
                    },
                    {
                        "id": 84,
                        "parent_id": 2,
                        "name": "சினிமா",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Cinema.png",
                        "data_query": "cinema-news",
                        "seo_title": "cinema-news",
                        "seo_keyword": "cinema-news",
                        "seo_description": "cinema-news",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Cinema.png",
                        "created_at": "2024-07-06T04:05:24.000000Z",
                        "updated_at": "2024-07-09T09:43:16.000000Z"
                    },
                    {
                        "id": 85,
                        "parent_id": 2,
                        "name": "விளையாட்டு",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Game.png",
                        "data_query": "sports-news",
                        "seo_title": "sports-news",
                        "seo_keyword": "sports-news",
                        "seo_description": "sports-news",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Game.png",
                        "created_at": "2024-07-06T04:06:24.000000Z",
                        "updated_at": "2024-07-09T09:45:47.000000Z"
                    },
                    {
                        "id": 86,
                        "parent_id": 2,
                        "name": "வணிகம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Business.png",
                        "data_query": "business",
                        "seo_title": "business",
                        "seo_keyword": "business",
                        "seo_description": "business",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Business.png",
                        "created_at": "2024-07-06T04:07:18.000000Z",
                        "updated_at": "2024-07-08T11:53:13.000000Z"
                    },
                    {
                        "id": 87,
                        "parent_id": 2,
                        "name": "அரசியல்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Politics.png",
                        "data_query": "Politics",
                        "seo_title": "Politics",
                        "seo_keyword": "Politics",
                        "seo_description": "Politics",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Politics.png",
                        "created_at": "2024-07-06T04:07:59.000000Z",
                        "updated_at": "2024-07-09T09:49:21.000000Z"
                    },
                    {
                        "id": 88,
                        "parent_id": 2,
                        "name": "குற்றம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Crime.png",
                        "data_query": "crime",
                        "seo_title": "crime",
                        "seo_keyword": "crime",
                        "seo_description": "crime",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Crime.png",
                        "created_at": "2024-07-06T04:08:47.000000Z",
                        "updated_at": "2024-07-09T09:50:39.000000Z"
                    },
                    {
                        "id": 11,
                        "parent_id": 2,
                        "name": "தமிழகம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "2",
                        "image": "Rectangle 34.png",
                        "data_query": "Tamilnadu",
                        "seo_title": "TAMILNADU News: Updates, Events, and Developments.",
                        "seo_keyword": "TAMILNADU news , latest updates TAMILNADU , TAMILNADU government news , TAMILNADU politics , TAMIL NADU current affairs",
                        "seo_description": "Explore timely TAMILNADU news on politics, events, and government developments.",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Rectangle 34.png",
                        "created_at": "2024-06-26T10:49:37.000000Z",
                        "updated_at": "2024-07-27T05:54:53.000000Z"
                    },
                    {
                        "id": 12,
                        "parent_id": 2,
                        "name": "உலகம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "3",
                        "image": "World.png",
                        "data_query": "World",
                        "seo_title": "Latest World News Updates: Breaking Headlines Today",
                        "seo_keyword": "world news updates, breaking news, global headlines, current affairs, international news",
                        "seo_description": "Stay informed with the latest global headlines and breaking news updates.",
                        "FullImgPath": "https://tnreaders.in/images/category/news/World.png",
                        "created_at": "2024-06-26T10:52:51.000000Z",
                        "updated_at": "2024-07-09T11:06:07.000000Z"
                    },
                    {
                        "id": 113,
                        "parent_id": 2,
                        "name": "இந்தியா",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "3",
                        "image": "india.jpg",
                        "data_query": "india",
                        "seo_title": "india",
                        "seo_keyword": "india",
                        "seo_description": "india",
                        "FullImgPath": "https://tnreaders.in/images/category/news/india.jpg",
                        "created_at": "2024-07-09T02:20:28.000000Z",
                        "updated_at": "2024-07-09T04:32:36.000000Z"
                    },
                    {
                        "id": 119,
                        "parent_id": 2,
                        "name": "தொழில் நுட்பம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "5",
                        "image": null,
                        "data_query": "தொழில்-நுட்பம்",
                        "seo_title": "தொழில் நுட்பம்",
                        "seo_keyword": "தொழில் நுட்பம்",
                        "seo_description": "தொழில் நுட்பம்",
                        "FullImgPath": "https://tnreaders.in/images/category/news",
                        "created_at": "2024-07-27T08:35:44.000000Z",
                        "updated_at": "2024-07-27T08:35:44.000000Z"
                    }
                ]
            },
            {
                "id": 65,
                "parent_id": null,
                "name": "ஒரு நிமிடம்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "more",
                "isHomepage": "no",
                "sortorder": "1",
                "image": "Rectangle 2181.png",
                "data_query": "one-minute",
                "seo_title": "one-minute",
                "seo_keyword": "one-minute",
                "seo_description": "one-minute",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2181.png",
                "created_at": "2024-07-05T10:11:30.000000Z",
                "updated_at": "2024-07-29T08:58:51.000000Z",
                "child": [{
                        "id": 95,
                        "parent_id": 65,
                        "name": "கதைகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Stories.png",
                        "data_query": "Stories",
                        "seo_title": "Stories",
                        "seo_keyword": "Stories",
                        "seo_description": "Stories",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Stories.png",
                        "created_at": "2024-07-06T04:24:51.000000Z",
                        "updated_at": "2024-07-09T10:12:39.000000Z"
                    },
                    {
                        "id": 96,
                        "parent_id": 65,
                        "name": "கவிதைகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Poems.png",
                        "data_query": "poems",
                        "seo_title": "poems",
                        "seo_keyword": "poems",
                        "seo_description": "poems",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Poems.png",
                        "created_at": "2024-07-06T04:31:30.000000Z",
                        "updated_at": "2024-07-09T10:16:19.000000Z"
                    },
                    {
                        "id": 97,
                        "parent_id": 65,
                        "name": "நகைச்சுவை",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Comedy.png",
                        "data_query": "Comedy",
                        "seo_title": "Comedy",
                        "seo_keyword": "Comedy",
                        "seo_description": "Comedy",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Comedy.png",
                        "created_at": "2024-07-06T04:32:15.000000Z",
                        "updated_at": "2024-07-09T10:21:46.000000Z"
                    },
                    {
                        "id": 98,
                        "parent_id": 65,
                        "name": "சிந்தனை துளிகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Thinking.png",
                        "data_query": "thinking",
                        "seo_title": "thinking",
                        "seo_keyword": "thinking",
                        "seo_description": "thinking",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Thinking.png",
                        "created_at": "2024-07-06T04:33:02.000000Z",
                        "updated_at": "2024-07-24T10:09:20.000000Z"
                    }
                ]
            },
            {
                "id": 114,
                "parent_id": null,
                "name": "கிரிப்டோ கரன்சி",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "more",
                "isHomepage": "no",
                "sortorder": "1",
                "image": "Rectangle 2182.png",
                "data_query": "Crypto-Currency",
                "seo_title": "Crypto-Currency",
                "seo_keyword": "Crypto-Currency",
                "seo_description": "Crypto-Currency",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2182.png",
                "created_at": "2024-07-09T02:22:27.000000Z",
                "updated_at": "2024-07-29T08:59:12.000000Z"
            },
            {
                "id": 3,
                "parent_id": null,
                "name": "ஆன்மீகம்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "main",
                "isHomepage": "yes",
                "sortorder": "2",
                "image": "Rectangle 2183.png",
                "data_query": "spiritual-info",
                "seo_title": "Demo title",
                "seo_keyword": "Demo keyword",
                "seo_description": "Demo keyword",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2183.png",
                "created_at": "2024-06-26T10:20:27.000000Z",
                "updated_at": "2024-07-29T08:59:41.000000Z",
                "child": [{
                        "id": 13,
                        "parent_id": 3,
                        "name": "ஆன்மீகச் செய்திகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "1",
                        "image": "Spiritual_Messages.png",
                        "data_query": "Spiritual-News",
                        "seo_title": "Transform Your Life with Daily Spiritual Messages",
                        "seo_keyword": "Spiritual messages ,  Daily spiritual quotes , Inspirational spiritual messages,  Uplifting spiritual quotes ,  Motivational spiritual messages",
                        "seo_description": "Discover daily spiritual messages for inspiration and inner peace",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Spiritual_Messages.png",
                        "created_at": "2024-06-26T11:20:12.000000Z",
                        "updated_at": "2024-06-28T15:01:46.000000Z"
                    },
                    {
                        "id": 14,
                        "parent_id": 3,
                        "name": "ஆன்மீகக் குறிப்புகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "2",
                        "image": "Spiritual_Tips.png",
                        "data_query": "Spiritual-Guidelines",
                        "seo_title": "Explore Spiritual Wisdom with Daily Notes",
                        "seo_keyword": "Spiritual notes,  Daily spiritual insights , Spiritual journaling,  Inner peace tips , Spiritual growth ideas",
                        "seo_description": "Discover inner peace with daily spiritual notes.",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Spiritual_Tips.png",
                        "created_at": "2024-06-26T11:49:57.000000Z",
                        "updated_at": "2024-07-09T10:50:17.000000Z"
                    },
                    {
                        "id": 15,
                        "parent_id": 3,
                        "name": "ஆன்மீகத் தளங்கள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "2",
                        "image": "Spiritual_Sites.png",
                        "data_query": "Spiritual-Locations",
                        "seo_title": "Journey to Enlightenment",
                        "seo_keyword": "Spiritual growth, Inner peace, Enlightenment journey ,Spiritual awakening, Holistic wellness",
                        "seo_description": "Find peace and enlightenment with our spiritual guides today",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Spiritual_Sites.png",
                        "created_at": "2024-06-26T11:52:38.000000Z",
                        "updated_at": "2024-07-09T10:51:34.000000Z"
                    }
                ]
            },
            {
                "id": 115,
                "parent_id": null,
                "name": "உடலும் உணவும்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "more",
                "isHomepage": "no",
                "sortorder": "2",
                "image": "images/1000137215.jpg",
                "data_query": "Food-And-Body",
                "seo_title": "Food-And-Body",
                "seo_keyword": "Food-And-Body",
                "seo_description": "Food-And-Body",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/images/1000137215.jpg",
                "created_at": "2024-07-18T09:50:01.000000Z",
                "updated_at": "2024-07-18T09:50:01.000000Z",
                "child": [{
                        "id": 116,
                        "parent_id": 115,
                        "name": "உணவுமுறை",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": null,
                        "data_query": "Food-Habits",
                        "seo_title": "Food-Habits",
                        "seo_keyword": "Food-Habits",
                        "seo_description": "Food-Habits",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce",
                        "created_at": "2024-07-22T16:14:36.000000Z",
                        "updated_at": "2024-07-22T16:14:36.000000Z"
                    },
                    {
                        "id": 117,
                        "parent_id": 115,
                        "name": "ஆரோக்கிய உணவு",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "2",
                        "image": null,
                        "data_query": "Food-Nutrients",
                        "seo_title": "Food-Nutrients",
                        "seo_keyword": "Food-Nutrients",
                        "seo_description": "Food-Nutrients",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce",
                        "created_at": "2024-07-22T16:15:50.000000Z",
                        "updated_at": "2024-07-22T16:15:50.000000Z"
                    },
                    {
                        "id": 118,
                        "parent_id": 115,
                        "name": "பாட்டி வைத்தியம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "3",
                        "image": null,
                        "data_query": "Grandma-Medicine",
                        "seo_title": "Grandma-Medicine",
                        "seo_keyword": "Grandma-Medicine",
                        "seo_description": "Grandma-Medicine",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce",
                        "created_at": "2024-07-23T08:08:13.000000Z",
                        "updated_at": "2024-07-23T08:08:13.000000Z"
                    }
                ]
            },
            {
                "id": 6,
                "parent_id": null,
                "name": "மகளிர் உலகம்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "main",
                "isHomepage": "yes",
                "sortorder": "3",
                "image": "Rectangle 2184.png",
                "data_query": "Womens-World",
                "seo_title": "Empower Women: Insights & Inspiration",
                "seo_keyword": "Women empowerment , Inspirational stories , Global women's issues , Female leadership , Gender equality",
                "seo_description": "Explore global women's issues and stories of empowerment worldwide.",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2184.png",
                "created_at": "2024-06-26T10:25:39.000000Z",
                "updated_at": "2024-07-29T09:00:12.000000Z",
                "child": [{
                        "id": 24,
                        "parent_id": 6,
                        "name": "பெண்கள் முன்னேற்றம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "1",
                        "image": "Women_Progress.png",
                        "data_query": "Women-Development",
                        "seo_title": "Empowering Women: Milestones in Progress",
                        "seo_keyword": "women's progress , gender equality achievements ,  women's empowerment milestones , women's rights advancements ,female leadership growth",
                        "seo_description": "Explore women's progress through history and achievements in gender equality globally.",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Women_Progress.png",
                        "created_at": "2024-06-26T12:23:37.000000Z",
                        "updated_at": "2024-07-09T09:22:22.000000Z"
                    },
                    {
                        "id": 27,
                        "parent_id": 6,
                        "name": "தாய்மை,குழந்தை நலன்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "2",
                        "image": "ChildWelfare.png",
                        "data_query": "Women-Motherhood-And-Child-Welfare",
                        "seo_title": "\"Essential Guide to Motherhood: Ensuring Child Welfare\"",
                        "seo_keyword": "Motherhood tips ,  Child welfare support , Parenting advice , Mother's role in child development , Childcare essentials",
                        "seo_description": "Discover essential tips for motherhood and ensuring child welfare today",
                        "FullImgPath": "https://tnreaders.in/images/category/news/ChildWelfare.png",
                        "created_at": "2024-06-26T12:26:08.000000Z",
                        "updated_at": "2024-07-09T10:53:40.000000Z"
                    },
                    {
                        "id": 29,
                        "parent_id": 6,
                        "name": "அழகுக் குறிப்புகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "3",
                        "image": "BeautyTips.png",
                        "data_query": "Beauty-info",
                        "seo_title": "Expert Beauty Tips: Enhance Your Natural Glow",
                        "seo_keyword": "Beauty tips ,Skincare tips ,Hair care advice ,Natural beauty tips, Beauty secrets",
                        "seo_description": "Discover expert beauty tips for radiant skin and healthy hair.",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/BeautyTips.png",
                        "created_at": "2024-06-27T04:14:37.000000Z",
                        "updated_at": "2024-07-10T01:49:18.000000Z"
                    },
                    {
                        "id": 108,
                        "parent_id": 6,
                        "name": "ஃபேஷன் உலகம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "yes",
                        "sortorder": "3",
                        "image": "FashionWorld.png",
                        "data_query": "women-fashion-world",
                        "seo_title": "women-fashion-world",
                        "seo_keyword": "women-fashion-world",
                        "seo_description": "women-fashion-world",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/FashionWorld.png",
                        "created_at": "2024-07-06T15:58:34.000000Z",
                        "updated_at": "2024-07-09T11:13:38.000000Z"
                    },
                    {
                        "id": 30,
                        "parent_id": 6,
                        "name": "சமையல் குறிப்புகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "main",
                        "isHomepage": "yes",
                        "sortorder": "4",
                        "image": "Recipes.png",
                        "data_query": "Food-Preparation-guidelines",
                        "seo_title": "Pro Cooking Tips You Need to Know",
                        "seo_keyword": "cooking tips ,beginner cooking ,advice cooking techniques,kitchen hacks ,easy recipes for beginners",
                        "seo_description": "Discover essential cooking tips and techniques for beginners and experienced chefs",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Recipes.png",
                        "created_at": "2024-06-27T04:34:02.000000Z",
                        "updated_at": "2024-07-09T11:16:29.000000Z"
                    }
                ]
            },
            {
                "id": 62,
                "parent_id": null,
                "name": "மருத்துவம்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "main",
                "isHomepage": "yes",
                "sortorder": "4",
                "image": "Rectangle 2185.png",
                "data_query": "Medicine",
                "seo_title": "Medicine",
                "seo_keyword": "Medicine",
                "seo_description": "seodesc",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2185.png",
                "created_at": "2024-07-05T05:50:39.000000Z",
                "updated_at": "2024-07-29T09:00:37.000000Z",
                "child": [{
                        "id": 89,
                        "parent_id": 62,
                        "name": "இயற்கை மருத்துவம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "NaturalMedicine.png",
                        "data_query": "Natural-Medicine",
                        "seo_title": "Natural-Medicine",
                        "seo_keyword": "Natural-Medicine",
                        "seo_description": "Natural-Medicine",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/NaturalMedicine.png",
                        "created_at": "2024-07-06T04:10:16.000000Z",
                        "updated_at": "2024-07-09T09:52:29.000000Z"
                    },
                    {
                        "id": 90,
                        "parent_id": 62,
                        "name": "நாட்டு மருத்துவம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "CountryMedicine.png",
                        "data_query": "Country-medicine",
                        "seo_title": "Country-medicine",
                        "seo_keyword": "Country-medicine",
                        "seo_description": "Country-medicine",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/CountryMedicine.png",
                        "created_at": "2024-07-06T04:11:21.000000Z",
                        "updated_at": "2024-07-08T11:56:06.000000Z"
                    },
                    {
                        "id": 91,
                        "parent_id": 62,
                        "name": "சித்தமருத்துவம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "SiddhaMedicine.png",
                        "data_query": "Siddha-medicine",
                        "seo_title": "Siddha-medicine",
                        "seo_keyword": "Siddha-medicine",
                        "seo_description": "Siddha-medicine",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/SiddhaMedicine.png",
                        "created_at": "2024-07-06T04:13:35.000000Z",
                        "updated_at": "2024-07-09T10:02:47.000000Z"
                    },
                    {
                        "id": 92,
                        "parent_id": 62,
                        "name": "யோகா& முத்திரை",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Yoga_Mudra.png",
                        "data_query": "Yoga-Mudra",
                        "seo_title": "Yoga-&-Mudra",
                        "seo_keyword": "Yoga-&-Mudra",
                        "seo_description": "Yoga-&-Mudra",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Yoga_Mudra.png",
                        "created_at": "2024-07-06T04:22:16.000000Z",
                        "updated_at": "2024-07-09T10:10:55.000000Z"
                    },
                    {
                        "id": 107,
                        "parent_id": 62,
                        "name": "உணவுமுறைகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "3",
                        "image": "Diets.png",
                        "data_query": "food-habits",
                        "seo_title": "food-habits",
                        "seo_keyword": "food-habits",
                        "seo_description": "food-habits",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Diets.png",
                        "created_at": "2024-07-06T09:32:39.000000Z",
                        "updated_at": "2024-07-09T04:27:39.000000Z"
                    },
                    {
                        "id": 109,
                        "parent_id": 62,
                        "name": "குழந்தை பராமரிப்பு",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "5",
                        "image": "Child_Care.png",
                        "data_query": "child-care",
                        "seo_title": "child-care",
                        "seo_keyword": "child-care",
                        "seo_description": "child-care",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Child_Care.png",
                        "created_at": "2024-07-08T06:47:40.000000Z",
                        "updated_at": "2024-07-09T04:34:17.000000Z"
                    },
                    {
                        "id": 110,
                        "parent_id": 62,
                        "name": "விழிப்புணர்வு செய்திகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "6",
                        "image": "Awareness_Messages.png",
                        "data_query": "Awareness",
                        "seo_title": "Awareness",
                        "seo_keyword": "Awareness",
                        "seo_description": "Awareness",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Awareness_Messages.png",
                        "created_at": "2024-07-08T06:49:19.000000Z",
                        "updated_at": "2024-07-11T02:19:34.000000Z"
                    }
                ]
            },
            {
                "id": 112,
                "parent_id": null,
                "name": "தொழில்நுட்பம்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "main",
                "isHomepage": "yes",
                "sortorder": "5",
                "image": "Rectangle 2186.png",
                "data_query": "Technology",
                "seo_title": "Technology",
                "seo_keyword": "Technology",
                "seo_description": "Technology",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2186.png",
                "created_at": "2024-07-09T02:18:07.000000Z",
                "updated_at": "2024-07-29T09:01:09.000000Z"
            },
            {
                "id": 10,
                "parent_id": null,
                "name": "வேலைவாய்ப்புகள்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "main",
                "isHomepage": "no",
                "sortorder": "8",
                "image": "Rectangle 2187.png",
                "data_query": "Employments-Informaions",
                "seo_title": "Top Employment Opportunities : Secure Your Dream Job",
                "seo_keyword": "Employment opportunities,  Job listings , Career tips , High-paying jobs,  Job seekers",
                "seo_description": "Discover top jobs and career tips for employment success.",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2187.png",
                "created_at": "2024-06-26T10:42:39.000000Z",
                "updated_at": "2024-07-29T09:01:33.000000Z",
                "child": [{
                        "id": 39,
                        "parent_id": 10,
                        "name": "அரசு விண்ணப்பப் படிவங்கள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "main",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Govt_Application_Forms.png",
                        "data_query": "Government-Application-Forms",
                        "seo_title": "\"Complete Your Government Application Forms Quickly & Easily\"",
                        "seo_keyword": "Government application forms,  Online application forms, Easy form submission ,Government paperwork ,Application form guide",
                        "seo_description": "\"Submit government forms effortlessly with our easy-to-use online tools.\"",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Govt_Application_Forms.png",
                        "created_at": "2024-06-27T04:54:40.000000Z",
                        "updated_at": "2024-07-09T09:37:21.000000Z"
                    },
                    {
                        "id": 100,
                        "parent_id": 10,
                        "name": "தமிழக அரசு பணிகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "TamilNadu_Govt_Jobs.png",
                        "data_query": "Tamil-Nadu-Govt-Jobs",
                        "seo_title": "Tamil-Nadu-Govt-Jobs",
                        "seo_keyword": "Tamil-Nadu-Govt-Jobs",
                        "seo_description": "Tamil-Nadu-Govt-Jobs",
                        "FullImgPath": "https://tnreaders.in/images/category/news/TamilNadu_Govt_Jobs.png",
                        "created_at": "2024-07-06T04:47:05.000000Z",
                        "updated_at": "2024-07-09T10:27:37.000000Z"
                    },
                    {
                        "id": 101,
                        "parent_id": 10,
                        "name": "மத்திய அரசு பணிகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "CentralGovernmentWorks.png",
                        "data_query": "Central-Government-Works",
                        "seo_title": "Central-Government-Works",
                        "seo_keyword": "Central-Government-Works",
                        "seo_description": "Central-Government-Works",
                        "FullImgPath": "https://tnreaders.in/images/category/news/CentralGovernmentWorks.png",
                        "created_at": "2024-07-06T04:47:46.000000Z",
                        "updated_at": "2024-07-09T10:38:42.000000Z"
                    },
                    {
                        "id": 102,
                        "parent_id": 10,
                        "name": "வங்கி",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Bank.png",
                        "data_query": "Bank",
                        "seo_title": "Bank",
                        "seo_keyword": "Bank",
                        "seo_description": "Bank",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Bank.png",
                        "created_at": "2024-07-06T04:48:39.000000Z",
                        "updated_at": "2024-07-09T10:40:04.000000Z"
                    },
                    {
                        "id": 103,
                        "parent_id": 10,
                        "name": "ராணுவம்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Army.png",
                        "data_query": "Army",
                        "seo_title": "Army",
                        "seo_keyword": "Army",
                        "seo_description": "Army",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Army.png",
                        "created_at": "2024-07-06T04:52:12.000000Z",
                        "updated_at": "2024-07-09T10:42:00.000000Z"
                    },
                    {
                        "id": 104,
                        "parent_id": 10,
                        "name": "ரயில்வே",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Railway.png",
                        "data_query": "Railway",
                        "seo_title": "Railway",
                        "seo_keyword": "Railway",
                        "seo_description": "Railway",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Railway.png",
                        "created_at": "2024-07-06T04:52:51.000000Z",
                        "updated_at": "2024-07-09T10:43:32.000000Z"
                    },
                    {
                        "id": 105,
                        "parent_id": 10,
                        "name": "UPSC நோட்டிபிகேஷன்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "UPSC_Notification.png",
                        "data_query": "UPSC-Notification",
                        "seo_title": "UPSC-Notification",
                        "seo_keyword": "UPSC-Notification",
                        "seo_description": "UPSC-Notification",
                        "FullImgPath": "https://tnreaders.in/images/category/news/UPSC_Notification.png",
                        "created_at": "2024-07-06T04:53:30.000000Z",
                        "updated_at": "2024-07-09T10:45:48.000000Z"
                    },
                    {
                        "id": 106,
                        "parent_id": 10,
                        "name": "மற்றவை",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "Others.png",
                        "data_query": "Others-categories",
                        "seo_title": "Others-categories",
                        "seo_keyword": "Others-categories",
                        "seo_description": "Others-categories",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Others.png",
                        "created_at": "2024-07-06T04:54:04.000000Z",
                        "updated_at": "2024-07-09T10:47:23.000000Z"
                    },
                    {
                        "id": 40,
                        "parent_id": 10,
                        "name": "செய்திகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "news",
                        "position": "main",
                        "isHomepage": "no",
                        "sortorder": "2",
                        "image": "Employments-news.jpg",
                        "data_query": "Employments-news",
                        "seo_title": "Latest Updates in Employment News",
                        "seo_keyword": "employment news updates , job market trends , career opportunities ,  latest job openings ,  professional development news",
                        "seo_description": "Explore current job openings and career trends",
                        "FullImgPath": "https://tnreaders.in/images/category/news/Employments-news.jpg",
                        "created_at": "2024-06-27T05:34:14.000000Z",
                        "updated_at": "2024-07-09T10:58:43.000000Z"
                    }
                ]
            },
            {
                "id": 41,
                "parent_id": null,
                "name": "ஆட்டோமொபைல்ஸ்",
                "status": "allow",
                "type": "default",
                "type2": "article",
                "position": "more",
                "isHomepage": "no",
                "sortorder": "9",
                "image": "Rectangle 2188.png",
                "data_query": "Automobiles-news",
                "seo_title": "Latest Innovations in Automobiles: A Look into Future Trends",
                "seo_keyword": "automobiles trends 2024 , future of car technology , electric vehicles news , autonomous driving updates , hybrid cars advancements",
                "seo_description": "\"Explore cutting-edge automotive innovations shaping the future of transportation.\"",
                "FullImgPath": "https://tnreaders.in/images/category/artilce/Rectangle 2188.png",
                "created_at": "2024-06-29T04:54:08.000000Z",
                "updated_at": "2024-07-29T09:01:57.000000Z",
                "child": [{
                        "id": 50,
                        "parent_id": 41,
                        "name": "கார்கள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "1",
                        "image": "car.png",
                        "data_query": "cars-informations",
                        "seo_title": "Top Cars : Reviews and Buying Guide",
                        "seo_keyword": "cars , best cars reviews, car buying guide, top vehicles, automotive trends",
                        "seo_description": "Discover the top cars with our comprehensive reviews and buying advice.",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/car.png",
                        "created_at": "2024-06-29T07:12:52.000000Z",
                        "updated_at": "2024-07-09T09:40:39.000000Z"
                    },
                    {
                        "id": 51,
                        "parent_id": 41,
                        "name": "பைக்குகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "2",
                        "image": "Bike.png",
                        "data_query": "Bikes-informations",
                        "seo_title": "Top  Bikes for Thrilling Adventures",
                        "seo_keyword": "adventure bikes, best bikes for adventure, top adventure motorcycles, adventure touring motorcycles, dual sport bikes",
                        "seo_description": "Discover the best adventure bikes for your next thrilling journey.",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Bike.png",
                        "created_at": "2024-06-29T07:13:36.000000Z",
                        "updated_at": "2024-07-09T11:02:44.000000Z"
                    },
                    {
                        "id": 52,
                        "parent_id": 41,
                        "name": "பிற வாகனங்கள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "3",
                        "image": "Other_Vehicles.png",
                        "data_query": "automobiles-other-vehicles",
                        "seo_title": "Explore Other Vehicles: Guide and Reviews",
                        "seo_keyword": "alternative transportation, unconventional vehicles, unique rides, latest vehicle trends, specialty vehicles",
                        "seo_description": "Discover the latest trends and reviews on unique and unconventional vehicles.",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/Other_Vehicles.png",
                        "created_at": "2024-06-29T07:14:24.000000Z",
                        "updated_at": "2024-07-09T04:26:38.000000Z"
                    },
                    {
                        "id": 53,
                        "parent_id": 41,
                        "name": "செய்திகள்",
                        "status": "allow",
                        "type": "default",
                        "type2": "article",
                        "position": "more",
                        "isHomepage": "no",
                        "sortorder": "4",
                        "image": "News.png",
                        "data_query": "all-automobiles-news",
                        "seo_title": "Latest Automobile News: Updates and Insights",
                        "seo_keyword": "automobile news, car industry updates, vehicle innovations, automotive trends, new car releases",
                        "seo_description": "Stay informed with the latest updates and trends in the automobile industry.",
                        "FullImgPath": "https://tnreaders.in/images/category/artilce/News.png",
                        "created_at": "2024-06-29T07:15:13.000000Z",
                        "updated_at": "2024-07-09T11:17:32.000000Z"
                    }
                ]
            }
        ]
        mainCategories = categories.filter((category) => category.position === 'main');
        moreCategories = categories.filter((category) => category.position === 'more');
        if (mainCategories.length > 7) {
            moreCategories = [...more, ...main.slice(7)];
            mainCategories = mainCategories.slice(0, 7);
        }

        function createCategory(category, mainMenu) {
            let categoryElement = mainMenu.querySelector('.menu-item-has-children');
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.textContent = category.name;
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
            if (category.hasOwnProperty('child') && Array.isArray(category.child) && category.child.length > 0) {
                let sub_categories = category.child;
                let subCategory = categoryElement.querySelector('.sub-menu');
                createSubCategory(sub_categories[0], subCategory);
                sub_categories.slice(1).forEach(sub_category => {
                    cloneSubCategory(sub_category, subCategory);
                });
                categoryElement.className = 'menu-item-has-children';
            } else {
                categoryElement.className = '';
                categoryElement.removeChild('ul');
            }
        }

        function cloneCategory(category, mainMenu) {
            let originalCategory = mainMenu.querySelector('.menu-item-has-children');
            let categoryElement = originalCategory.cloneNode(true);
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.textContent = category.name;
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
            if (category.hasOwnProperty('child') && Array.isArray(category.child) && category.child.length > 0) {
                sub_categories = category.child;
                let subCategory = categoryElement.querySelector('.sub-menu');
                createSubCategory(sub_categories[0], subCategory);
                let childrenToBeRemoved = Array.from(subCategory.children).slice(1);
                childrenToBeRemoved.forEach(child => {
                    subCategory.removeChild(child);
                });
                sub_categories.slice(1).forEach(sub_category => {
                    cloneSubCategory(sub_category, subCategory);
                });
                categoryElement.className = 'menu-item-has-children';
            } else {
                categoryElement.className = '';
                let ul = categoryElement.querySelector('ul');
                categoryElement.removeChild(ul);
            }
            let referenceElement = mainMenu.children[mainMenu.children.length - 1];
            mainMenu.insertBefore(categoryElement, referenceElement);
        }

        function createSubCategory(sub_category, subCategory) {
            let sub_li = subCategory.querySelector('li');
            let sub_a = sub_li.querySelector('a');
            sub_a.textContent = sub_category.name;
            sub_a.href = "/" + sub_category.type2 + "/" + sub_category.data_query;
        }

        function cloneSubCategory(sub_category, subCategory) {
            let original_sub_li = subCategory.querySelector('li');
            let clone_sub_li = original_sub_li.cloneNode(true);
            let sub_a = clone_sub_li.querySelector('a');
            sub_a.textContent = sub_category.name;
            sub_a.href = "/" + sub_category.type2 + "/" + sub_category.data_query;
            subCategory.appendChild(clone_sub_li);
        }
        let mainMenu = document.querySelector('.main-menu > ul');
        createCategory(mainCategories[0], mainMenu);
        mainCategories.slice(1).forEach(category => {
            cloneCategory(category, mainMenu);
        });
        let viewMore = mainMenu.querySelector('.menu-item-has-children.view-more > .sub-menu');
        createCategory(moreCategories[0], viewMore);
        moreCategories.slice(1).forEach(category => {
            cloneCategory(category, viewMore);
        });
        // document.querySelector('.loader-container').style.display = 'none';
    });
</script>