<aside class="sidebar-area" style="margin-top : 30px">
    <div class="widget">
        <div class="recent-post-wrap">
            <div class="recent-post">
            </div>
        </div>
    </div>
</aside>
<script>
    function loadGoogleAd(adSlot) {
        let Div = document.querySelector('.recent-post');
        // Create padead2 unit
        let scriptPage2 = document.createElement('script');
        // Set the attributes for the script element
        scriptPage2.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1915488793968759";
        scriptPage2.async = true;
        scriptPage2.crossorigin = "anonymous";
        Div.appendChild(scriptPage2);
        // Create the ad unit
        let adUnit = document.createElement('ins');
        adUnit.className = 'adsbygoogle';
        adUnit.style.display = 'block';
        adUnit.setAttribute('data-ad-client', 'ca-pub-1915488793968759');
        adUnit.setAttribute('data-ad-slot', adSlot);
        adUnit.setAttribute('data-full-width-responsive', 'true');
        // Insert the ad unit into the container
        Div.appendChild(adUnit);
        // Insert Refresh Script
        let scriptRefresh = document.createElement('script');

        // Set the text content of the script element
        scriptRefresh.textContent = "adsbygoogle = window.adsbygoogle || []; adsbygoogle.push({});";
        Div.appendChild(scriptRefresh);
    }
    loadGoogleAd('6100865066');
</script>