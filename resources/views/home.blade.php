<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-head-base />
    <x-head-share-social />
    <x-head-vite />
    <meta property='og:title' content={{ json_decode($data)->seo_title ?? '' }} />
    <meta name='keywords' content={{ json_decode($data)->seo_keyword ?? '' }} />
    <meta name='description' content={{ json_decode($data)->seo_description ?? '' }} />
</head>

<body>
    <div class="" style="width:100% !important;over-flow:hidden;">
        <x-header />
        <x-menu-category />
        <x-mobile-menu-category />
          <x-slider/>
        <x-spotlight />
        <x-footer />
        <div class="scroll-top">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
            </svg>
        </div>
    </div>
</body>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JL481LNRNL"></script>


</html>