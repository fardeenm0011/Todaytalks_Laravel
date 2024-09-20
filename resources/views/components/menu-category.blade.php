
<header class="th-header header-layout1" >
    <div class="sticky-wrapper">
        <div class="menu-area ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class=" col-lg-11">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="menu-item-has-children view-more"><a href="#">View More</a>
                                    <ul class="sub-menu">
                                        <li><a href="#"></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 navber-parent" >
                        <div class="header-button " style="display:flex;justify-content:space-between;">
                            <div class="col" >
                                <div class="header-logo"><a href="/"><img class="light-img logo" src="{{ config('images.logo') }}" alt="Tnews"></a><a href="home-newspaper.html"><img class="dark-img" src="assets/img/logo-white.svg" alt="Tnews"></a></div>
                            </div>
                            <a href="#"  class="icon-btn sideMenuToggler d-none d-lg-block" style="margin-left: 0;">
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
        let posts = [];
        let mainCategories = [];
        let moreCategories = [];
        let sub_categories = [];
        await axios.get('https://tnreaders.in/api/user/categories')
            .then(response => {
                posts = response.data;
            })
            .catch(error => {
                console.error(error);
            });
        posts.forEach(post => {
            if (post.type2 === "news") {
                categories.push(...post.child);
            }
        })
        if (categories.length > 7) {
            mainCategories = categories.slice(0, 7);
            moreCategories = categories.slice(7);
        }
        // mainCategories = categories.filter((category) => category.position === 'main');
        // moreCategories = categories.filter((category) => category.position === 'more');
        // console.log(categories, mainCategories, moreCategories);
        // if (mainCategories.length > 7) {
        //     moreCategories = [...more, ...main.slice(7)];
        //     mainCategories = mainCategories.slice(0, 7);
        // }

        function createCategory(category, mainMenu) {
            let categoryElement = mainMenu.querySelector('li');
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.textContent = category.name;
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
        }

        function cloneCategory(category, mainMenu) {
            let originalCategory = mainMenu.querySelector('li');
            let categoryElement = originalCategory.cloneNode(true);
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.textContent = category.name;
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
            let referenceElement = mainMenu.children[mainMenu.children.length - 1];
            mainMenu.insertBefore(categoryElement, referenceElement);
        }

        let mainMenu = document.querySelector('.main-menu > ul');
        mainCategories.forEach(category => {
            cloneCategory(category, mainMenu);
        });
        let viewMore = mainMenu.querySelector('.menu-item-has-children.view-more > .sub-menu');
        createCategory(moreCategories[0], viewMore);
        moreCategories.slice(1).forEach(category => {
            cloneCategory(category, viewMore);
        });
    });
</script>