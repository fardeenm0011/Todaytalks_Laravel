<div class="th-menu-wrapper" style="border:2px solid green">
    <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fas fa-times"></i></button>
        <div class="mobile-logo"><a href="/"><img src="{{ config('images.logo') }}" alt="MenuReaders"></a></div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="th-item-has-children view-more"><a href="#">View More</a>
                    <ul class="sub-menu">
                        <li><a href="#"></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", async function() {
        let categories = [];
        let posts = [];
        let mainCategories = [];
        let moreCategories = [];
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

        function createCategory(category, mainMenu) {
            let categoryElement = mainMenu.querySelector('li');
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.textContent = category.name;
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
            if (category.hasOwnProperty('child') && Array.isArray(category.child) && category.child.length > 0 && category.type2 === "news") {
                let sub_categories = category.child;
                moreCategories.push(...sub_categories);
            }
        }

        function cloneCategory(category, mainMenu) {
            let originalCategory = mainMenu.querySelector('li');
            let categoryElement = originalCategory.cloneNode(true);
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.textContent = category.name;
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
            if (category.hasOwnProperty('child') && Array.isArray(category.child) && category.child.length > 0 && category.type2 === "news") {
                sub_categories = category.child;
                moreCategories.push(...sub_categories);
            }
            let referenceElement = mainMenu.children[mainMenu.children.length - 1];
            mainMenu.insertBefore(categoryElement, referenceElement);
        }

        function addExpandableFunctionality(mainMenu) {
            mainMenu.querySelectorAll('.th-mean-expand').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();
                    var parentElement = element.closest('.th-item-has-children');
                    var submenu = parentElement.querySelector('ul, .mega-menu');
                    if (submenu) {
                        parentElement.classList.toggle('th-active');
                        submenu.style.display = submenu.style.display === 'none' ? '' : 'none';
                    }
                });
            });
        }

        let mainMenu = document.querySelector('.th-mobile-menu > ul');
        mainCategories.forEach(category => {
            cloneCategory(category, mainMenu);
        });
        let viewMore = mainMenu.querySelector('.th-item-has-children.view-more > .sub-menu');
        createCategory(moreCategories[0], viewMore);
        moreCategories.slice(1).forEach(category => {
            cloneCategory(category, viewMore);
        });
        // addExpandableFunctionality(mainMenu);
    });
</script>