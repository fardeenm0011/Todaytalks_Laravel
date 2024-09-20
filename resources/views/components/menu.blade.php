<header class="th-header header-layout1">
    <div class="sticky-wrapper">
        <div class="menu-area ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-11 ">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="/">Home</a></li>
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
        await axios.get('https://tnreaders.in/api/user/categories')
            .then(response => {
                categories = response.data;
                console.log(categories);
            })
            .catch(error => {
                console.error(error);
            });
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
    });
</script>