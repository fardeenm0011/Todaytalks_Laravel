<div class="th-menu-wrapper">
    <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fas fa-times"></i></button>
        <div class="mobile-logo"><a href="/"><img src="{{ config('images.logo') }}" alt="MenuReaders"></a></div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="/">Home</a>
                </li>
                <li class="th-item-has-children"><a href=""></a>
                    <ul class="sub-menu">
                        <li><a></a>
                        </li>
                    </ul>
                </li>
                <li class="th-item-has-children view-more "><a href="">View More</a>
                    <ul class="sub-menu">
                        <li class="th-item-has-children"><a href=""></a>
                            <ul class="sub-menu">
                                <li><a></a></li>
                            </ul>
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
        let mainCategories = [];
        let moreCategories = [];
        await axios.get('https://tnreaders.in/api/user/categories')
            .then(response => {
                categories = response.data;
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
            let categoryElement = mainMenu.querySelector('.th-item-has-children');
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
            let textNode = document.createTextNode(category.name);
            categoryLink.prepend(textNode);
            if (category.hasOwnProperty('child') && Array.isArray(category.child) && category.child.length > 0) {
                let sub_categories = category.child;
                let subCategory = categoryElement.querySelector('.sub-menu');
                createSubCategory(sub_categories[0], subCategory);
                sub_categories.slice(1).forEach(sub_category => {
                    cloneSubCategory(sub_category, subCategory);
                });
                categoryElement.className = 'th-item-has-children';
            } else {
                categoryElement.className = '';
                let ul = categoryElement.querySelector('ul');
                categoryElement.removeChild(ul);
            }
            addExpandableFunctionality(mainMenu);
        }

        function cloneCategory(category, mainMenu) {
            let originalCategory = mainMenu.querySelector('.th-item-has-children');
            let categoryElement = originalCategory.cloneNode(true);
            let categoryLink = categoryElement.querySelector('a');
            categoryLink.href = "/" + category.type2 + "/" + category.data_query;
            let textNode = document.createTextNode(category.name);
            categoryLink.prepend(textNode);
            if (categoryLink.childNodes.length > 1) {
                categoryLink.removeChild(categoryLink.childNodes[1]);
            }
            if (category.hasOwnProperty('child') && Array.isArray(category.child) && category.child.length > 0) {
                let sub_categories = category.child;
                let subCategory = categoryElement.querySelector('.sub-menu');
                createSubCategory(sub_categories[0], subCategory);
                let childrenToBeRemoved = Array.from(subCategory.children).slice(1);
                childrenToBeRemoved.forEach(child => {
                    subCategory.removeChild(child);
                });
                sub_categories.slice(1).forEach(sub_category => {
                    cloneSubCategory(sub_category, subCategory);
                });
                categoryElement.className = 'th-item-has-children';
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
        createCategory(mainCategories[0], mainMenu);
        mainCategories.slice(1).forEach(category => {
            cloneCategory(category, mainMenu);
        });
        let viewMore = mainMenu.querySelector('.th-item-has-children.view-more > .sub-menu');
        createCategory(moreCategories[0], viewMore);
        moreCategories.slice(1).forEach(category => {
            cloneCategory(category, viewMore);
        });
        addExpandableFunctionality(mainMenu);
    });
</script>