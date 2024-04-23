<!DOCTYPE html>
<html dir="ltr" lang="en" class="desktop win mozilla oc30 is-guest route-product-product product-343 store-0 skin-1 desktop-header-active mobile-sticky layout-2 one-column column-right" data-jb="b1c2c768" data-jv="3.1.8" data-ov="3.0.3.7">

<!-- Mirrored from www.journal-theme.com/5/index.php?route=product/product&path=111&product_id=343&limit=100 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Aug 2021 23:21:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head typeof="og:website">
  <meta charset="UTF-8" />
      <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CTHostel</title>
  <base />
  <link rel="preload" href="catalog/view/theme/journal3/icons/fonts/icomoon6654.woff2?v1" as="font" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <meta property="fb:app_id" content="" />
  <meta property="og:type" content="product" />
  <script>
    window['Journal'] = {
      "isPopup": false,
      "isPhone": false,
      "isTablet": false,
      "isDesktop": true,
      "filterScrollTop": false,
      "filterUrlValuesSeparator": ",",
      "countdownDay": "Day",
      "countdownHour": "Hour",
      "countdownMin": "Min",
      "countdownSec": "Sec",
      "globalPageColumnLeftTabletStatus": false,
      "globalPageColumnRightTabletStatus": false,
      "scrollTop": true,
      "scrollToTop": false,
      "notificationHideAfter": "2000",
      "quickviewPageStyleCloudZoomStatus": true,
      "quickviewPageStyleAdditionalImagesCarousel": false,
      "quickviewPageStyleAdditionalImagesCarouselStyleSpeed": "500",
      "quickviewPageStyleAdditionalImagesCarouselStyleAutoPlay": false,
      "quickviewPageStyleAdditionalImagesCarouselStylePauseOnHover": true,
      "quickviewPageStyleAdditionalImagesCarouselStyleDelay": "3000",
      "quickviewPageStyleAdditionalImagesCarouselStyleLoop": false,
      "quickviewPageStyleAdditionalImagesHeightAdjustment": "5",
      "quickviewPageStyleProductStockUpdate": false,
      "quickviewPageStylePriceUpdate": false,
      "quickviewPageStyleOptionsSelect": "none",
      "quickviewText": "Quickview",
      "mobileHeaderOn": "tablet",
      "subcategoriesCarouselStyleSpeed": "500",
      "subcategoriesCarouselStyleAutoPlay": false,
      "subcategoriesCarouselStylePauseOnHover": true,
      "subcategoriesCarouselStyleDelay": "3000",
      "subcategoriesCarouselStyleLoop": false,
      "productPageStyleCloudZoomStatus": true,
      "productPageStyleCloudZoomPosition": "inner",
      "productPageStyleAdditionalImagesCarousel": false,
      "productPageStyleAdditionalImagesCarouselStyleSpeed": "500",
      "productPageStyleAdditionalImagesCarouselStyleAutoPlay": true,
      "productPageStyleAdditionalImagesCarouselStylePauseOnHover": true,
      "productPageStyleAdditionalImagesCarouselStyleDelay": "3000",
      "productPageStyleAdditionalImagesCarouselStyleLoop": false,
      "productPageStyleAdditionalImagesHeightAdjustment": "5",
      "productPageStyleProductStockUpdate": false,
      "productPageStylePriceUpdate": false,
      "productPageStyleOptionsSelect": "none",
      "infiniteScrollStatus": true,
      "infiniteScrollOffset": "2",
      "infiniteScrollLoadPrev": "Load Previous Products",
      "infiniteScrollLoadNext": "Load Next Products",
      "infiniteScrollLoading": "Loading...",
      "infiniteScrollNoneLeft": "You have reached the end of the list.",
      "checkoutUrl": "https:\/\/www.journal-theme.com\/5\/index.php?route=checkout\/checkout",
      "headerHeight": "100",
      "headerCompactHeight": "60",
      "mobileMenuOn": "",
      "searchStyleSearchAutoSuggestStatus": true,
      "searchStyleSearchAutoSuggestDescription": true,
      "searchStyleSearchAutoSuggestSubCategories": true,
      "headerMiniSearchDisplay": "default",
      "stickyStatus": true,
      "stickyFullHomePadding": false,
      "stickyFullwidth": true,
      "stickyAt": "300",
      "stickyHeight": "45",
      "headerTopBarHeight": "35",
      "topBarStatus": true,
      "headerType": "classic",
      "headerMobileHeight": "60",
      "headerMobileStickyStatus": true,
      "headerMobileTopBarVisibility": true,
      "headerMobileTopBarHeight": "45",
      "notification": [{
        "m": 137,
        "c": "1a2039cc"
      }],
      "headerNotice": [{
        "m": 56,
        "c": "bddc5671"
      }],
      "columnsCount": 1
    };
  </script>
  <script>
    if (window.NodeList && !NodeList.prototype.forEach) {
      NodeList.prototype.forEach = Array.prototype.forEach;
    }
    (function() {
      if (Journal['isPhone']) {
        return;
      }
      var wrappers = ['search', 'cart', 'cart-content', 'logo', 'language', 'currency'];
      var documentClassList = document.documentElement.classList;

      function extractClassList() {
        return ['desktop', 'tablet', 'phone', 'desktop-header-active', 'mobile-header-active', 'mobile-menu-active'].filter(function(cls) {
          return documentClassList.contains(cls);
        });
      }

      function mqr(mqls, listener) {
        Object.keys(mqls).forEach(function(k) {
          mqls[k].addListener(listener);
        });
        listener();
      }

      function mobileMenu() {
        console.warn('mobile menu!');
        var element = document.querySelector('#main-menu');
        var wrapper = document.querySelector('.mobile-main-menu-wrapper');
        if (element && wrapper) {
          wrapper.appendChild(element);
        }
        var main_menu = document.querySelector('.main-menu');
        if (main_menu) {
          main_menu.classList.add('accordion-menu');
        }
        document.querySelectorAll('.main-menu .dropdown-toggle').forEach(function(element) {
          element.classList.remove('dropdown-toggle');
          element.classList.add('collapse-toggle');
          element.removeAttribute('data-toggle');
        });
        document.querySelectorAll('.main-menu .dropdown-menu').forEach(function(element) {
          element.classList.remove('dropdown-menu');
          element.classList.remove('j-dropdown');
          element.classList.add('collapse');
        });
      }

      function desktopMenu() {
        console.warn('desktop menu!');
        var element = document.querySelector('#main-menu');
        var wrapper = document.querySelector('.desktop-main-menu-wrapper');
        if (element && wrapper) {
          wrapper.insertBefore(element, document.querySelector('#main-menu-2'));
        }
        var main_menu = document.querySelector('.main-menu');
        if (main_menu) {
          main_menu.classList.remove('accordion-menu');
        }
        document.querySelectorAll('.main-menu .collapse-toggle').forEach(function(element) {
          element.classList.add('dropdown-toggle');
          element.classList.remove('collapse-toggle');
          element.setAttribute('data-toggle', 'dropdown');
        });
        document.querySelectorAll('.main-menu .collapse').forEach(function(element) {
          element.classList.add('dropdown-menu');
          element.classList.add('j-dropdown');
          element.classList.remove('collapse');
        });
        document.body.classList.remove('mobile-wrapper-open');
      }

      function mobileHeader() {
        console.warn('mobile header!');
        Object.keys(wrappers).forEach(function(k) {
          var element = document.querySelector('#' + wrappers[k]);
          var wrapper = document.querySelector('.mobile-' + wrappers[k] + '-wrapper');
          if (element && wrapper) {
            wrapper.appendChild(element);
          }
          if (wrappers[k] === 'cart-content') {
            if (element) {
              element.classList.remove('j-dropdown');
              element.classList.remove('dropdown-menu');
            }
          }
        });
        var search = document.querySelector('#search');
        var cart = document.querySelector('#cart');
        if (search && (Journal['searchStyle'] === 'full')) {
          search.classList.remove('full-search');
          search.classList.add('mini-search');
        }
        if (cart && (Journal['cartStyle'] === 'full')) {
          cart.classList.remove('full-cart');
          cart.classList.add('mini-cart')
        }
      }

      function desktopHeader() {
        console.warn('desktop header!');
        Object.keys(wrappers).forEach(function(k) {
          var element = document.querySelector('#' + wrappers[k]);
          var wrapper = document.querySelector('.desktop-' + wrappers[k] + '-wrapper');
          if (wrappers[k] === 'cart-content') {
            if (element) {
              element.classList.add('j-dropdown');
              element.classList.add('dropdown-menu');
              document.querySelector('#cart').appendChild(element);
            }
          } else {
            if (element && wrapper) {
              wrapper.appendChild(element);
            }
          }
        });
        var search = document.querySelector('#search');
        var cart = document.querySelector('#cart');
        if (search && (Journal['searchStyle'] === 'full')) {
          search.classList.remove('mini-search');
          search.classList.add('full-search');
        }
        if (cart && (Journal['cartStyle'] === 'full')) {
          cart.classList.remove('mini-cart');
          cart.classList.add('full-cart');
        }
        documentClassList.remove('mobile-cart-content-container-open');
        documentClassList.remove('mobile-main-menu-container-open');
        documentClassList.remove('mobile-overlay');
      }

      function moveElements(classList) {
        if (classList.includes('mobile-header-active')) {
          mobileHeader();
          mobileMenu();
        } else if (classList.includes('mobile-menu-active')) {
          desktopHeader();
          mobileMenu();
        } else {
          desktopHeader();
          desktopMenu();
        }
      }
      var mqls = {
        phone: window.matchMedia('(max-width: 768px)'),
        tablet: window.matchMedia('(max-width: 1024px)'),
        menu: window.matchMedia('(max-width: ' + Journal['mobileMenuOn'] + 'px)')
      };
      mqr(mqls, function() {
        var oldClassList = extractClassList();
        if (Journal['isDesktop']) {
          if (mqls.phone.matches) {
            documentClassList.remove('desktop');
            documentClassList.remove('tablet');
            documentClassList.add('mobile');
            documentClassList.add('phone');
          } else if (mqls.tablet.matches) {
            documentClassList.remove('desktop');
            documentClassList.remove('phone');
            documentClassList.add('mobile');
            documentClassList.add('tablet');
          } else {
            documentClassList.remove('mobile');
            documentClassList.remove('phone');
            documentClassList.remove('tablet');
            documentClassList.add('desktop');
          }
          if (documentClassList.contains('phone') || (documentClassList.contains('tablet') && Journal['mobileHeaderOn'] === 'tablet')) {
            documentClassList.remove('desktop-header-active');
            documentClassList.add('mobile-header-active');
          } else {
            documentClassList.remove('mobile-header-active');
            documentClassList.add('desktop-header-active');
          }
        }
        if (documentClassList.contains('desktop-header-active') && mqls.menu.matches) {
          documentClassList.add('mobile-menu-active');
        } else {
          documentClassList.remove('mobile-menu-active');
        }
        var newClassList = extractClassList();
        if (oldClassList.join(' ') !== newClassList.join(' ')) {
          if (documentClassList.contains('safari') && !documentClassList.contains('ipad') && navigator.maxTouchPoints && navigator.maxTouchPoints > 2) {
            window.fetch('index7e38.json?route=journal3/journal3/device_detect', {
              method: 'POST',
              body: 'device=ipad',
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
              }
            }).then(function(data) {
              return data.json();
            }).then(function(data) {
              if (data.response.reload) {
                window.location.reload();
              }
            });
          }
          if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
              moveElements(newClassList);
            });
          } else {
            moveElements(newClassList);
          }
        }
      });
    })();
    (function() {
      var cookies = {};
      var style = document.createElement('style');
      var documentClassList = document.documentElement.classList;
      document.head.appendChild(style);
      document.cookie.split('; ').forEach(function(c) {
        var cc = c.split('=');
        cookies[cc[0]] = cc[1];
      });
      if (Journal['popup']) {
        for (var i in Journal['popup']) {
          if (!cookies['p-' + Journal['popup'][i]['c']]) {
            documentClassList.add('popup-open');
            documentClassList.add('popup-center');
            break;
          }
        }
      }
      if (Journal['notification']) {
        for (var i in Journal['notification']) {
          if (cookies['n-' + Journal['notification'][i]['c']]) {
            style.sheet.insertRule('.module-notification-' + Journal['notification'][i]['m'] + '{ display:none }');
          }
        }
      }
      if (Journal['headerNotice']) {
        for (var i in Journal['headerNotice']) {
          if (cookies['hn-' + Journal['headerNotice'][i]['c']]) {
            style.sheet.insertRule('.module-header_notice-' + Journal['headerNotice'][i]['m'] + '{ display:none }');
          }
        }
      }
      if (Journal['layoutNotice']) {
        for (var i in Journal['layoutNotice']) {
          if (cookies['ln-' + Journal['layoutNotice'][i]['c']]) {
            style.sheet.insertRule('.module-layout_notice-' + Journal['layoutNotice'][i]['m'] + '{ display:none }');
          }
        }
      }
    })();
  </script>
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700%7COswald:400&amp;subset=latin-ext" type="text/css" rel="stylesheet" />
  <link href="{{asset('catalog/view/theme/journal3/assets/444847637e547f9dc0f21e679eb2ab3a4b50.css?v=b1c2c768')}}" type="text/css" rel="stylesheet" media="all" />
  <link href="{{asset('index9849.html?route=product/product&amp;product_id=343')}}" rel="canonical" />
  <link href="{{asset('catalog/view/theme/journal3/assets/557d6dddb6f8478c54683a2c9063a2194b50.css?v=b1c2c768')}}" type="text/css"
  rel="stylesheet" media="all" />
  
  <link href="myimages/fav.png" src='myimages/fav.png' rel="icon" />
  <style>
    .blog-post .post-details .post-stats {
      white-space: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 8px;
      padding-right: 0px;
      padding-left: 0px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .blog-post .post-details .post-stats .p-category {
      flex-wrap: nowrap;
      display: inline-flex
    }

    .mobile .blog-post .post-details .post-stats {
      overflow-x: scroll
    }

    .blog-post .post-details .post-stats::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px;
      height: 2px;
      width: 2px
    }

    .blog-post .post-details .post-stats::-webkit-scrollbar-track {
      background-color: white;
      background-color: rgba(238, 238, 238, 1)
    }

    .blog-post .post-details .post-stats::-webkit-scrollbar-thumb {
      background-color: #999;
      background-color: #089A49
    }

    .blog-post .post-details .post-stats .p-posted {
      display: inline-flex
    }

    .blog-post .post-details .post-stats .p-author {
      display: inline-flex
    }

    .blog-post .post-details .post-stats .p-date {
      display: inline-flex
    }

    .p-date-image {
      color: rgba(255, 255, 255, 1);
      font-weight: 700;
      background: #089A49;
      margin: 5px
    }

    .p-date-image i {
      color: rgba(238, 238, 238, 1)
    }

    .blog-post .post-details .post-stats .p-comment {
      display: inline-flex
    }

    .blog-post .post-details .post-stats .p-view {
      display: inline-flex
    }

    .post-content>p {
      margin-bottom: 10px
    }

    .post-content {
      font-family: 'IBM Plex Sans';
      font-weight: 400;
      font-size: 16px;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased;
      column-count: initial;
      column-gap: 50px;
      column-rule-color: rgba(221, 221, 221, 1);
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .post-content a {
      color: rgba(39, 124, 217, 1);
      display: inline-block
    }

    .post-content a:hover {
      color: #089A49
    }

    .post-content p {
      font-size: 15px;
      margin-bottom: 15px
    }

    .post-content h1 {
      margin-bottom: 20px
    }

    .post-content h2 {
      font-size: 32px;
      margin-bottom: 15px
    }

    .post-content h3 {
      margin-bottom: 15px
    }

    .post-content h4 {
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 15px
    }

    .post-content h5 {
      font-size: 17px;
      font-weight: 400;
      margin-bottom: 15px
    }

    .post-content h6 {
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase;
      background: #089A49;
      padding: 6px;
      padding-right: 10px;
      padding-left: 10px;
      margin-bottom: 15px;
      display: inline-block
    }

    .post-content blockquote {
      font-size: 17px;
      color: rgba(109, 118, 125, 1);
      font-style: italic;
      padding: 15px;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-top: 15px;
      margin-bottom: 15px;
      border-radius: 3px;
      float: none;
      display: block
    }

    .post-content blockquote::before {
      margin-left: auto;
      margin-right: auto;
      float: left;
      content: '\e98f' !important;
      font-family: icomoon !important;
      color: #089A49;
      margin-right: 10px
    }

    .post-content hr {
      margin-top: 20px;
      margin-bottom: 20px;
      overflow: visible
    }

    .post-content hr::before {
      content: '\e993' !important;
      font-family: icomoon !important;
      font-size: 20px;
      width: 40px;
      height: 40px;
      border-radius: 50%
    }

    .post-content .drop-cap {
      font-family: Georgia, serif !important;
      font-weight: 400 !important;
      font-size: 60px !important;
      font-family: Georgia, serif;
      font-weight: 700;
      margin-right: 5px
    }

    .post-content .amp::before {
      content: '\e901' !important;
      font-family: icomoon !important;
      font-size: 25px;
      top: 5px
    }

    .post-content .video-responsive {
      margin-bottom: 15px
    }

    .post-image {
      display: block;
      text-align: left;
      float: none
    }

    .blog-post .tags {
      justify-content: center
    }

    .post-comments {
      margin-top: 20px
    }

    .post-comment {
      margin-bottom: 30px;
      padding-bottom: 15px;
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .post-reply {
      margin-top: 15px;
      margin-left: 60px;
      padding-top: 20px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .user-avatar {
      display: block;
      margin-right: 15px;
      border-radius: 50%
    }

    .module-blog_comments .side-image {
      display: block
    }

    .post-comment .user-name {
      font-size: 18px;
      font-weight: 700
    }

    .post-comment .user-data div {
      font-size: 12px
    }

    .post-comment .user-site::before {
      left: -1px
    }

    .post-comment .user-data .user-date {
      display: inline-flex
    }

    .post-comment .user-data .user-time {
      display: inline-flex
    }

    .comment-form .form-group:not(.required) {
      display: flex
    }

    .user-data .user-site {
      display: inline-flex
    }

    .main-posts.post-grid .post-layout.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .main-posts.post-grid .post-layout:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .main-posts.post-grid .post-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .one-column #content .main-posts.post-grid .post-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 3 - 0.01px)
    }

    .two-column #content .main-posts.post-grid .post-layout.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .main-posts.post-grid .post-layout:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .main-posts.post-grid .post-layout.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .main-posts.post-grid .post-layout:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .main-posts.post-grid {
      margin: -10px
    }

    .post-grid .post-thumb .image img {
      filter: grayscale(1)
    }

    .post-grid .post-thumb:hover .image img {
      filter: grayscale(0);
      transform: scale(1.15)
    }

    .post-grid .post-thumb .caption {
      position: relative;
      bottom: auto;
      width: auto
    }

    .post-grid .post-thumb .name {
      display: flex;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      justify-content: center;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
      margin-bottom: 10px
    }

    .post-grid .post-thumb .name a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      font-size: 16px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700
    }

    .desktop .post-grid .post-thumb .name a:hover {
      color: #089A49
    }

    .post-grid .post-thumb .description {
      display: block;
      text-align: center;
      margin-bottom: 10px
    }

    .post-grid .post-thumb .button-group {
      display: flex;
      justify-content: center;
      margin-bottom: 10px
    }

    .post-grid .post-thumb .btn-read-more::before {
      display: none
    }

    .post-grid .post-thumb .btn-read-more::after {
      display: none;
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .post-grid .post-thumb .btn-read-more .btn-text {
      display: inline-block;
      padding: 0
    }

    .post-grid .post-thumb .post-stats {
      display: flex;
      color: rgba(238, 238, 238, 1);
      justify-content: center;
      position: absolute;
      transform: translateY(-100%);
      width: 100%;
      background: rgba(0, 0, 0, 0.65);
      padding: 7px
    }

    .post-grid .post-thumb .post-stats .p-author {
      display: flex
    }

    .post-grid .post-thumb .p-date {
      display: flex
    }

    .post-grid .post-thumb .post-stats .p-comment {
      display: flex
    }

    .post-grid .post-thumb .post-stats .p-view {
      display: flex
    }

    .post-list .post-layout:not(.swiper-slide) {
      margin-bottom: 40px
    }

    .post-list .post-thumb .caption {
      flex-basis: 200px;
      padding: 15px
    }

    .post-list .post-thumb:hover .image img {
      transform: scale(1.15)
    }

    .post-list .post-thumb .name {
      display: flex;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      justify-content: flex-start;
      margin-left: 0;
      margin-right: auto
    }

    .post-list .post-thumb .name a {
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      font-size: 18px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700
    }

    .desktop .post-list .post-thumb .name a:hover {
      color: #089A49
    }

    .post-list .post-thumb .description {
      display: block;
      color: rgba(109, 118, 125, 1);
      padding-top: 5px;
      padding-bottom: 5px
    }

    .post-list .post-thumb .button-group {
      display: flex;
      justify-content: flex-start
    }

    .post-list .post-thumb .btn-read-more::before {
      display: inline-block
    }

    .post-list .post-thumb .btn-read-more .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .post-list .post-thumb .btn-read-more::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .post-list .post-thumb .post-stats {
      display: flex;
      justify-content: flex-start;
      padding-bottom: 5px;
      margin: -15px;
      margin-bottom: 5px;
      margin-left: 0px
    }

    .post-list .post-thumb .post-stats .p-author {
      display: block
    }

    .post-list .post-thumb .p-date {
      display: flex
    }

    .post-list .post-thumb .post-stats .p-comment {
      display: block
    }

    .post-list .post-thumb .post-stats .p-view {
      display: flex
    }

    .blog-feed span {
      display: block;
      color: rgba(235, 102, 38, 1) !important
    }

    .blog-feed {
      display: inline-flex;
      margin-right: 30px
    }

    .blog-feed::before {
      content: '\f143' !important;
      font-family: icomoon !important;
      font-size: 14px;
      color: rgba(235, 102, 38, 1)
    }

    .desktop .blog-feed:hover span {
      color: rgba(39, 124, 217, 1) !important
    }

    .countdown {
      color: rgba(48, 56, 65, 1);
      background: rgba(255, 255, 255, 1);
      border-radius: 3px;
      width: 90%
    }

    .countdown div span {
      color: rgba(109, 118, 125, 1)
    }

    .countdown>div {
      border-style: solid;
      border-color: rgba(245, 245, 245, 1)
    }

    .boxed-layout .site-wrapper {
      overflow: hidden
    }

    .boxed-layout .header {
      padding: 0 20px
    }

    .boxed-layout .breadcrumb {
      padding-left: 20px;
      padding-right: 20px
    }

    .wrapper,
    .mega-menu-content,
    .site-wrapper>.container,
    .grid-cols,
    .desktop-header-active .is-sticky .header .desktop-main-menu-wrapper,
    .desktop-header-active .is-sticky .sticky-fullwidth-bg,
    .boxed-layout .site-wrapper,
    .breadcrumb,
    .title-wrapper,
    .page-title>span,
    .desktop-header-active .header .top-bar,
    .desktop-header-active .header .mid-bar,
    .desktop-main-menu-wrapper {
      max-width: 1400px
    }

    .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before {
      transform: translateX(calc(0px - (100vw - 1400px) / 2))
    }

    html[dir='rtl'] .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before {
      transform: none;
      right: calc(0px - (100vw - 1400px) / 2)
    }

    .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown.mega-custom::before {
      transform: translateX(calc(0px - (200vw - 1400px) / 2))
    }

    html[dir='rtl'] .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown.mega-custom::before {
      transform: none;
      right: calc(0px - (200vw - 1400px) / 2)
    }

    body {
      background: rgba(245, 245, 245, 1);
      font-family: 'IBM Plex Sans';
      font-weight: 400;
      font-size: 16px;
      line-height: 1.5;
      -webkit-font-smoothing: antialiased
    }

    #content {
      padding-top: 20px;
      padding-bottom: 20px
    }

    .column-left #content {
      padding-left: 20px
    }

    .column-right #content {
      padding-right: 20px
    }

    .side-column {
      max-width: 240px;
      padding: 20px;
      padding-left: 0px
    }

    .one-column #content {
      max-width: calc(100% - 240px)
    }

    .two-column #content {
      max-width: calc(100% - 240px * 2)
    }

    #column-left {
      border-width: 0;
      border-right-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    #column-right {
      border-width: 0;
      border-left-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      padding: 20px;
      padding-right: 0px
    }

    .page-title {
      display: block
    }

    .dropdown.drop-menu>.j-dropdown {
      left: 0;
      right: auto;
      transform: translate3d(0, -10px, 0)
    }

    .dropdown.drop-menu.animating>.j-dropdown {
      left: 0;
      right: auto;
      transform: none
    }

    .dropdown.drop-menu>.j-dropdown::before {
      left: 10px;
      right: auto;
      transform: translateX(0)
    }

    .dropdown.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .dropdown.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .dropdown.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .dropdown.dropdown .j-menu>li>a {
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      background: rgba(255, 255, 255, 1);
      padding: 10px
    }

    .desktop .dropdown.dropdown .j-menu>li:hover>a,
    .dropdown.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1);
      background: rgba(245, 245, 245, 1)
    }

    .dropdown.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .dropdown.dropdown .j-menu>li>a::before {
      margin-right: 7px;
      min-width: 20px;
      font-size: 18px
    }

    .dropdown.dropdown .j-menu a .count-badge {
      display: inline-flex;
      position: relative
    }

    .dropdown.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 200px
    }

    .dropdown.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2)
    }

    .dropdown.dropdown .j-dropdown::before {
      display: block;
      border-bottom-color: rgba(255, 255, 255, 1);
      margin-top: -10px
    }

    legend {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    legend::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    legend.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    legend::after,
    legend.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .title {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    .title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .title::after,
    .title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    html:not(.popup) .page-title {
      font-family: 'Oswald';
      font-weight: 400;
      font-size: 26px;
      color: rgba(48, 56, 65, 1);
      text-align: left;
      text-transform: uppercase;
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      border-radius: 0px;
      padding: 20px;
      margin: 0px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    html:not(.popup) .page-title::after {
      display: none;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    html:not(.popup) .page-title.page-title>span::after {
      display: none;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    html:not(.popup) .page-title::after,
    html:not(.popup) .page-title.page-title>span::after {
      width: 50px;
      height: 2px;
      background: #089A49
    }

    .title.module-title {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    .title.module-title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .title.module-title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .title.module-title::after,
    .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .btn,
    .btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .btn:active,
    .btn:hover:active,
    .btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .btn.btn.disabled::after {
      font-size: 20px
    }

    .btn-secondary.btn {
      background: rgba(254, 225, 91, 1)
    }

    .btn-secondary.btn:hover {
      background: rgba(196, 202, 253, 1) !important
    }

    .btn-secondary.btn.btn.disabled::after {
      font-size: 20px
    }

    .btn-success.btn {
      background: rgba(60, 196, 114, 1)
    }

    .btn-success.btn:hover {
      background: #089A49 !important
    }

    .btn-success.btn.btn.disabled::after {
      font-size: 20px
    }

    .btn-danger.btn {
      background: #089A49
    }

    .btn-danger.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .btn-danger.btn.btn.disabled::after {
      font-size: 20px
    }

    .btn-warning.btn {
      background: rgba(254, 225, 91, 1)
    }

    .btn-warning.btn:hover {
      background: rgba(196, 202, 253, 1) !important
    }

    .btn-warning.btn.btn.disabled::after {
      font-size: 20px
    }

    .btn-info.btn {
      background: rgba(109, 118, 125, 1);
      border-width: 0px
    }

    .btn-info.btn:hover {
      background: rgba(48, 56, 65, 1) !important
    }

    .btn-info.btn.btn.disabled::after {
      font-size: 20px
    }

    .btn-light.btn,
    .btn-light.btn:visited {
      color: rgba(109, 118, 125, 1)
    }

    .btn-light.btn:hover {
      color: rgba(48, 56, 65, 1) !important;
      background: rgba(196, 202, 253, 1) !important
    }

    .btn-light.btn {
      background: rgba(238, 238, 238, 1)
    }

    .btn-light.btn.btn.disabled::after {
      font-size: 20px
    }

    .btn-dark.btn {
      background: rgba(48, 56, 65, 1)
    }

    .btn-dark.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .btn-dark.btn.btn.disabled::after {
      font-size: 20px
    }

    .buttons {
      margin-top: 20px;
      padding-top: 15px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      font-size: 12px
    }

    .buttons .pull-left .btn,
    .buttons .pull-left .btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .buttons .pull-left .btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .buttons .pull-left .btn:active,
    .buttons .pull-left .btn:hover:active,
    .buttons .pull-left .btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .buttons .pull-left .btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .buttons .pull-left .btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .buttons .pull-left .btn.btn.disabled::after {
      font-size: 20px
    }

    .buttons .pull-right .btn::after {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      margin-left: 5px
    }

    .buttons .pull-left .btn::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .buttons>div {
      flex: 0 0 auto;
      width: auto;
      flex-basis: 0
    }

    .buttons>div .btn {
      width: auto
    }

    .buttons .pull-left {
      margin-right: auto
    }

    .buttons .pull-right:only-child {
      flex: 0 0 auto;
      width: auto;
      margin: 0 0 0 auto
    }

    .buttons .pull-right:only-child .btn {
      width: auto
    }

    .buttons input+.btn {
      margin-top: 5px
    }

    .tags {
      margin-top: 15px;
      justify-content: flex-start;
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase
    }

    .tags a,
    .tags-title {
      margin-right: 8px;
      margin-bottom: 8px
    }

    .tags b {
      display: none
    }

    .tags a {
      padding-right: 8px;
      padding-left: 8px;
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(58, 71, 80, 1)
    }

    .alert.alert-success {
      color: rgba(255, 255, 255, 1);
      background: rgba(60, 196, 114, 1)
    }

    .alert.alert-info {
      color: rgba(48, 56, 65, 1)
    }

    .alert-info.alert-dismissible .close {
      color: rgba(196, 202, 253, 1)
    }

    .alert.alert-warning {
      color: rgba(48, 56, 65, 1);
      background: rgba(254, 225, 91, 1)
    }

    .alert.alert-danger {
      color: rgba(255, 255, 255, 1);
      background: #089A49
    }

    .breadcrumb {
      display: block !important;
      text-align: left;
      padding: 10px;
      padding-left: 0px;
      white-space: normal;
      -webkit-overflow-scrolling: touch
    }

    .breadcrumb::before {
      background: rgba(238, 238, 238, 1);
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .breadcrumb li:first-of-type a i::before {
      content: '\eb69' !important;
      font-family: icomoon !important
    }

    .breadcrumb a {
      color: rgba(48, 56, 65, 1);
      text-decoration: underline
    }

    .mobile .breadcrumb {
      overflow-x: visible
    }

    .breadcrumb::-webkit-scrollbar {
      -webkit-appearance: initial;
      height: 1px;
      height: 1px;
      width: 1px
    }

    .breadcrumb::-webkit-scrollbar-track {
      background-color: white
    }

    .breadcrumb::-webkit-scrollbar-thumb {
      background-color: #999
    }

    .panel-group .panel-heading a::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      order: 10
    }

    .desktop .panel-group .panel-heading:hover a::before {
      color: #089A49
    }

    .panel-group .panel-active .panel-heading a::before {
      content: '\e5db' !important;
      font-family: icomoon !important;
      color: #089A49;
      top: -1px
    }

    .panel-group .panel-heading a {
      justify-content: space-between;
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      padding: 0px;
      padding-top: 15px;
      padding-bottom: 15px
    }

    .panel-group .panel-heading {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .panel-group .panel-body {
      padding-bottom: 10px
    }

    body a {
      color: rgba(39, 124, 217, 1);
      display: inline-block
    }

    body a:hover {
      color: #089A49
    }

    body p {
      font-size: 15px;
      margin-bottom: 15px
    }

    body h1 {
      margin-bottom: 20px
    }

    body h2 {
      font-size: 32px;
      margin-bottom: 15px
    }

    body h3 {
      margin-bottom: 15px
    }

    body h4 {
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 15px
    }

    body h5 {
      font-size: 17px;
      font-weight: 400;
      margin-bottom: 15px
    }

    body h6 {
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase;
      background: #089A49;
      padding: 6px;
      padding-right: 10px;
      padding-left: 10px;
      margin-bottom: 15px;
      display: inline-block
    }

    body blockquote {
      font-size: 17px;
      color: rgba(109, 118, 125, 1);
      font-style: italic;
      padding: 15px;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-top: 15px;
      margin-bottom: 15px;
      border-radius: 3px;
      float: none;
      display: block
    }

    body blockquote::before {
      margin-left: auto;
      margin-right: auto;
      float: left;
      content: '\e98f' !important;
      font-family: icomoon !important;
      color: #089A49;
      margin-right: 10px
    }

    body hr {
      margin-top: 20px;
      margin-bottom: 20px;
      overflow: visible
    }

    body hr::before {
      content: '\e993' !important;
      font-family: icomoon !important;
      font-size: 20px;
      width: 40px;
      height: 40px;
      border-radius: 50%
    }

    body .drop-cap {
      font-family: Georgia, serif !important;
      font-weight: 400 !important;
      font-size: 60px !important;
      font-family: Georgia, serif;
      font-weight: 700;
      margin-right: 5px
    }

    body .amp::before {
      content: '\e901' !important;
      font-family: icomoon !important;
      font-size: 25px;
      top: 5px
    }

    body .video-responsive {
      margin-bottom: 15px
    }

    .count-badge {
      color: rgba(255, 255, 255, 1);
      background: #089A49;
      border-radius: 10px
    }

    .product-label b {
      color: rgba(255, 255, 255, 1);
      font-weight: 700;
      text-transform: uppercase;
      background: #089A49;
      padding: 5px
    }

    .product-label.product-label-default b {
      min-width: 60px
    }

    .tooltip-inner {
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      background: rgba(48, 56, 65, 1);
      border-radius: 2px;
      box-shadow: 0 -15px 100px -10px rgba(0, 0, 0, 0.1)
    }

    .tooltip.top .tooltip-arrow {
      border-top-color: rgba(48, 56, 65, 1)
    }

    .tooltip.right .tooltip-arrow {
      border-right-color: rgba(48, 56, 65, 1)
    }

    .tooltip.bottom .tooltip-arrow {
      border-bottom-color: rgba(48, 56, 65, 1)
    }

    .tooltip.left .tooltip-arrow {
      border-left-color: rgba(48, 56, 65, 1)
    }

    table tbody tr:hover td {
      background: rgba(255, 255, 255, 1)
    }

    table tbody td {
      border-width: 0 !important;
      border-top-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important
    }

    table {
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important
    }

    table thead td {
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      background: rgba(238, 238, 238, 1)
    }

    table tfoot td {
      background: rgba(238, 238, 238, 1)
    }

    table tfoot td,
    table tfoot th {
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important
    }

    .table-responsive {
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      -webkit-overflow-scrolling: touch
    }

    .table-responsive::-webkit-scrollbar {
      height: 5px;
      width: 5px
    }

    .form-group .control-label {
      max-width: 150px;
      padding-top: 7px;
      padding-bottom: 5px;
      justify-content: flex-start
    }

    .required .control-label::after,
    .required .control-label+div::before,
    .text-danger {
      font-size: 17px
    }

    .form-group {
      margin-bottom: 8px
    }

    .required .control-label::after,
    .required .control-label+div::before {
      margin-top: 3px
    }

    input.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important;
      max-width: 500px;
      height: 38px
    }

    input.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    input.form-control:focus,
    input.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    input.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    textarea.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important
    }

    textarea.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    textarea.form-control:focus,
    textarea.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    textarea.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    select.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important;
      max-width: 500px
    }

    select.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    select.form-control:focus,
    select.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    select.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    .radio {
      width: 100%
    }

    .checkbox {
      width: 100%
    }

    .input-group .input-group-btn .btn {
      min-width: 35px;
      min-height: 35px
    }

    .product-option-file .btn i::before {
      content: '\ebd8' !important;
      font-family: icomoon !important
    }

    .stepper input.form-control {
      border-width: 0px !important
    }

    .stepper {
      width: 50px;
      height: 35px;
      border-style: solid;
      border-color: rgba(48, 56, 65, 1)
    }

    .stepper span i {
      color: rgba(255, 255, 255, 1);
      background-color: rgba(109, 118, 125, 1)
    }

    .stepper span i:hover {
      background-color: rgba(53, 66, 174, 1)
    }

    .pagination-results {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      letter-spacing: 1px;
      margin-top: 20px;
      justify-content: flex-start
    }

    .pagination-results .text-right {
      display: block
    }

    .pagination>li>a {
      color: rgba(48, 56, 65, 1)
    }

    .pagination>li>a:hover {
      color: #089A49
    }

    .pagination>li.active>span,
    .pagination>li.active>span:hover,
    .pagination>li>a:focus {
      color: #089A49
    }

    .pagination>li>a,
    .pagination>li>span {
      padding: 5px;
      padding-right: 6px;
      padding-left: 6px
    }

    .pagination>li {
      border-radius: 2px
    }

    .pagination>li:first-child a::before,
    .pagination>li:last-child a::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .pagination>li .prev::before,
    .pagination>li .next::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .pagination>li:not(:first-of-type) {
      margin-left: 5px
    }

    .rating .fa-stack {
      font-size: 13px;
      width: 1.2em
    }

    .rating .fa-star,
    .rating .fa-star+.fa-star-o {
      color: rgba(254, 225, 91, 1)
    }

    .rating .fa-star-o:only-child {
      color: rgba(109, 118, 125, 1)
    }

    .rating-stars {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px
    }

    .popup-inner-body {
      max-height: calc(100vh - 50px * 2)
    }

    .popup-container {
      max-width: calc(100% - 20px * 2)
    }

    .popup-bg {
      background: rgba(0, 0, 0, 0.75)
    }

    .popup-body,
    .popup {
      background: rgba(255, 255, 255, 1)
    }

    .popup-content,
    .popup .site-wrapper {
      padding: 20px
    }

    .popup-body {
      border-radius: 3px;
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .popup-container .popup-close::before {
      content: '\e5cd' !important;
      font-family: icomoon !important
    }

    .popup-close {
      width: 30px;
      height: 30px;
      margin-right: 8px;
      margin-top: 40px
    }

    .popup-container .btn.popup-close {
      border-radius: 50% !important
    }

    .popup-container>.btn {
      background: rgba(39, 124, 217, 1)
    }

    .popup-container>.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .popup-container>.btn.btn.disabled::after {
      font-size: 20px
    }

    .scroll-top i::before {
      content: '\e5d8' !important;
      font-family: icomoon !important;
      font-size: 20px;
      color: rgba(255, 255, 255, 1);
      background: #089A49;
      padding: 10px
    }

    .scroll-top:hover i::before {
      background: rgba(60, 196, 114, 1)
    }

    .scroll-top {
      left: auto;
      right: 10px;
      transform: translateX(0);
      ;
      margin-left: 10px;
      margin-right: 10px;
      margin-bottom: 10px
    }

    .journal-loading>i::before,
    .ias-spinner>i::before,
    .lg-outer .lg-item::after,
    .btn.disabled::after {
      content: '\e92f' !important;
      font-family: icomoon !important;
      font-size: 30px;
      color: #089A49
    }

    .journal-loading>.fa-spin,
    .lg-outer .lg-item::after,
    .btn.disabled::after {
      animation: fa-spin infinite linear;
      ;
      animation-duration: 2000ms
    }

    .btn-cart::before,
    .fa-shopping-cart::before {
      content: '\ea9b' !important;
      font-family: icomoon !important;
      left: -1px
    }

    .btn-wishlist::before {
      content: '\f08a' !important;
      font-family: icomoon !important
    }

    .btn-compare::before,
    .compare-btn::before {
      content: '\eab6' !important;
      font-family: icomoon !important
    }

    .fa-refresh::before {
      content: '\eacd' !important;
      font-family: icomoon !important
    }

    .fa-times-circle::before,
    .fa-times::before,
    .reset-filter::before,
    .notification-close::before,
    .popup-close::before,
    .hn-close::before {
      content: '\e981' !important;
      font-family: icomoon !important
    }

    .p-author::before {
      content: '\e7fd' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .p-date::before {
      content: '\f133' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .p-time::before {
      content: '\eb29' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .p-comment::before {
      content: '\f27a' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .p-view::before {
      content: '\f06e' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .p-category::before {
      content: '\f022' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .user-site::before {
      content: '\e321' !important;
      font-family: icomoon !important;
      left: -1px;
      margin-right: 5px
    }

    .desktop ::-webkit-scrollbar {
      width: 12px
    }

    .desktop ::-webkit-scrollbar-track {
      background: rgba(238, 238, 238, 1)
    }

    .desktop ::-webkit-scrollbar-thumb {
      background: rgba(109, 118, 125, 1);
      border-width: 4px;
      border-style: solid;
      border-color: rgba(238, 238, 238, 1);
      border-radius: 10px
    }

    .expand-content {
      max-height: 70px
    }

    .block-expand.btn,
    .block-expand.btn:visited {
      text-transform: none
    }

    .block-expand.btn {
      padding: 2px;
      padding-right: 7px;
      padding-left: 7px;
      min-width: 20px;
      min-height: 20px
    }

    .desktop .block-expand.btn:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
    }

    .block-expand.btn:active,
    .block-expand.btn:hover:active,
    .block-expand.btn:focus:active {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .block-expand.btn:focus {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .block-expand.btn.btn.disabled::after {
      font-size: 20px
    }

    .block-expand::after {
      content: 'Show More'
    }

    .block-expanded .block-expand::after {
      content: 'Show Less'
    }

    .block-expand::before {
      content: '\e5db' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .block-expanded .block-expand::before {
      content: '\e5d8' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .block-expand-overlay {
      background: linear-gradient(to bottom, transparent, rgba(245, 245, 245, 1))
    }

    .safari .block-expand-overlay {
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(245, 245, 245, 1))
    }

    .iphone .block-expand-overlay {
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(245, 245, 245, 1))
    }

    .ipad .block-expand-overlay {
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(245, 245, 245, 1))
    }

    .old-browser {
      color: rgba(42, 42, 42, 1);
      background: rgba(255, 255, 255, 1)
    }

    .notification-cart.notification {
      max-width: 400px;
      margin: 20px;
      margin-bottom: 0px;
      padding: 10px;
      background: rgba(255, 255, 255, 1);
      border-radius: 5px;
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .notification-cart .notification-close {
      display: block;
      width: 25px;
      height: 25px;
      margin-right: -12px;
      margin-top: -12px
    }

    .notification-cart .notification-close::before {
      content: '\e5cd' !important;
      font-family: icomoon !important
    }

    .notification-cart .btn.notification-close {
      border-radius: 50% !important
    }

    .notification-cart .notification-close.btn {
      background: rgba(39, 124, 217, 1)
    }

    .notification-cart .notification-close.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .notification-cart .notification-close.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-cart img {
      display: block;
      margin-right: 10px;
      margin-bottom: 10px
    }

    .notification-cart .notification-buttons {
      display: flex;
      padding: 10px;
      margin: -10px;
      margin-top: 5px
    }

    .notification-cart .notification-view-cart.btn {
      background: rgba(39, 124, 217, 1)
    }

    .notification-cart .notification-view-cart.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .notification-cart .notification-view-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-cart .notification-view-cart {
      display: inline-flex;
      flex-grow: 1
    }

    .notification-cart .notification-checkout.btn {
      background: rgba(60, 196, 114, 1)
    }

    .notification-cart .notification-checkout.btn:hover {
      background: #089A49 !important
    }

    .notification-cart .notification-checkout.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-cart .notification-checkout {
      display: inline-flex;
      flex-grow: 1;
      margin-left: 10px
    }

    .notification-cart .notification-checkout::after {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      margin-left: 5px
    }

    .notification-wishlist.notification {
      max-width: 400px;
      margin: 20px;
      margin-bottom: 0px;
      padding: 10px;
      background: rgba(255, 255, 255, 1);
      border-radius: 5px;
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .notification-wishlist .notification-close {
      display: block;
      width: 25px;
      height: 25px;
      margin-right: -12px;
      margin-top: -12px
    }

    .notification-wishlist .notification-close::before {
      content: '\e5cd' !important;
      font-family: icomoon !important
    }

    .notification-wishlist .btn.notification-close {
      border-radius: 50% !important
    }

    .notification-wishlist .notification-close.btn {
      background: rgba(39, 124, 217, 1)
    }

    .notification-wishlist .notification-close.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .notification-wishlist .notification-close.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-wishlist img {
      display: block;
      margin-right: 10px;
      margin-bottom: 10px
    }

    .notification-wishlist .notification-buttons {
      display: flex;
      padding: 10px;
      margin: -10px;
      margin-top: 5px
    }

    .notification-wishlist .notification-view-cart.btn {
      background: rgba(39, 124, 217, 1)
    }

    .notification-wishlist .notification-view-cart.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .notification-wishlist .notification-view-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-wishlist .notification-view-cart {
      display: inline-flex;
      flex-grow: 1
    }

    .notification-wishlist .notification-checkout.btn {
      background: rgba(60, 196, 114, 1)
    }

    .notification-wishlist .notification-checkout.btn:hover {
      background: #089A49 !important
    }

    .notification-wishlist .notification-checkout.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-wishlist .notification-checkout {
      display: inline-flex;
      flex-grow: 1;
      margin-left: 10px
    }

    .notification-wishlist .notification-checkout::after {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      margin-left: 5px
    }

    .notification-compare.notification {
      max-width: 400px;
      margin: 20px;
      margin-bottom: 0px;
      padding: 10px;
      background: rgba(255, 255, 255, 1);
      border-radius: 5px;
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .notification-compare .notification-close {
      display: block;
      width: 25px;
      height: 25px;
      margin-right: -12px;
      margin-top: -12px
    }

    .notification-compare .notification-close::before {
      content: '\e5cd' !important;
      font-family: icomoon !important
    }

    .notification-compare .btn.notification-close {
      border-radius: 50% !important
    }

    .notification-compare .notification-close.btn {
      background: rgba(39, 124, 217, 1)
    }

    .notification-compare .notification-close.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .notification-compare .notification-close.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-compare img {
      display: block;
      margin-right: 10px;
      margin-bottom: 10px
    }

    .notification-compare .notification-buttons {
      display: flex;
      padding: 10px;
      margin: -10px;
      margin-top: 5px
    }

    .notification-compare .notification-view-cart.btn {
      background: rgba(39, 124, 217, 1)
    }

    .notification-compare .notification-view-cart.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .notification-compare .notification-view-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-compare .notification-view-cart {
      display: inline-flex;
      flex-grow: 1
    }

    .notification-compare .notification-checkout.btn {
      background: rgba(60, 196, 114, 1)
    }

    .notification-compare .notification-checkout.btn:hover {
      background: #089A49 !important
    }

    .notification-compare .notification-checkout.btn.btn.disabled::after {
      font-size: 20px
    }

    .notification-compare .notification-checkout {
      display: inline-flex;
      flex-grow: 1;
      margin-left: 10px
    }

    .notification-compare .notification-checkout::after {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      margin-left: 5px
    }

    .popup-quickview .popup-container {
      width: 760px
    }

    .popup-quickview .popup-inner-body {
      height: 600px
    }

    .route-product-product.popup-quickview .product-info .product-left {
      width: 50%
    }

    .route-product-product.popup-quickview .product-info .product-right {
      width: calc(100% - 50%);
      padding-left: 20px
    }

    .route-product-product.popup-quickview h1.page-title {
      display: none
    }

    .route-product-product.popup-quickview div.page-title {
      display: block
    }

    .route-product-product.popup-quickview .page-title {
      font-size: 18px;
      font-weight: 700;
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin-bottom: 15px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .route-product-product.popup-quickview .page-title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 7px
    }

    .route-product-product.popup-quickview .page-title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 7px
    }

    .route-product-product.popup-quickview .page-title::after,
    .route-product-product.popup-quickview .page-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .route-product-product.popup-quickview .direction-horizontal .additional-image {
      width: calc(100% / 4)
    }

    .route-product-product.popup-quickview .additional-images .swiper-container {
      overflow: hidden
    }

    .route-product-product.popup-quickview .additional-images .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .route-product-product.popup-quickview .additional-images:hover .swiper-buttons {
      display: block
    }

    .route-product-product.popup-quickview .additional-images .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .route-product-product.popup-quickview .additional-images .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .route-product-product.popup-quickview .additional-images .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .route-product-product.popup-quickview .additional-images .swiper-button-disabled {
      opacity: 0
    }

    .route-product-product.popup-quickview .additional-images .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .route-product-product.popup-quickview .additional-images .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .route-product-product.popup-quickview .additional-images .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .route-product-product.popup-quickview .additional-images .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .route-product-product.popup-quickview .additional-images .swiper {
      padding-bottom: 10px
    }

    .route-product-product.popup-quickview .additional-images .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .route-product-product.popup-quickview .additional-images .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .route-product-product.popup-quickview .additional-images .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .route-product-product.popup-quickview .additional-images .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .route-product-product.popup-quickview .additional-images .swiper-pagination>span {
      border-radius: 20px
    }

    .route-product-product.popup-quickview .additional-image {
      padding: calc(10px / 2)
    }

    .route-product-product.popup-quickview .additional-images {
      margin-top: 10px;
      margin-right: -5px;
      margin-left: -5px
    }

    .route-product-product.popup-quickview .additional-images img {
      border-width: 1px;
      border-style: solid;
      border-color: rgba(245, 245, 245, 1)
    }

    .route-product-product.popup-quickview .additional-images img:hover {
      border-color: rgba(238, 238, 238, 1)
    }

    .route-product-product.popup-quickview .product-info .product-stats li::before {
      content: '\f111' !important;
      font-family: icomoon !important
    }

    .route-product-product.popup-quickview .product-info .product-stats ul {
      width: 100%
    }

    .route-product-product.popup-quickview .product-stats .product-views::before {
      content: '\f06e' !important;
      font-family: icomoon !important
    }

    .route-product-product.popup-quickview .product-stats .product-sold::before {
      content: '\e263' !important;
      font-family: icomoon !important
    }

    .route-product-product.popup-quickview .product-info .custom-stats {
      justify-content: space-between
    }

    .route-product-product.popup-quickview .product-info .product-details .rating {
      justify-content: flex-start
    }

    .route-product-product.popup-quickview .product-info .product-details .countdown-wrapper {
      display: block
    }

    .route-product-product.popup-quickview .product-info .product-details .product-price-group {
      text-align: left
    }

    .route-product-product.popup-quickview .product-info .product-details .price-group {
      justify-content: flex-start;
      flex-direction: row;
      align-items: center
    }

    .route-product-product.popup-quickview .product-info .product-details .product-price-new {
      order: -1
    }

    .route-product-product.popup-quickview .product-info .product-details .product-points {
      display: block
    }

    .route-product-product.popup-quickview .product-info .product-details .product-tax {
      display: block
    }

    .route-product-product.popup-quickview .product-info .product-details .discounts {
      display: block
    }

    .route-product-product.popup-quickview .product-info .product-details .product-options>.options-title {
      display: none
    }

    .route-product-product.popup-quickview .product-info .product-details .product-options>h3 {
      display: block
    }

    .route-product-product.popup-quickview .product-info .product-options .push-option>div input:checked+img {
      box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.7)
    }

    .route-product-product.popup-quickview .product-info .product-details .button-group-page {
      position: fixed;
      width: 100%;
      z-index: 1000;
      ;
      background: rgba(255, 255, 255, 1);
      padding: 10px;
      margin: 0px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      box-shadow: 0 -15px 100px -10px rgba(0, 0, 0, 0.1)
    }

    .route-product-product.popup-quickview {
      padding-bottom: 60px !important
    }

    .route-product-product.popup-quickview .site-wrapper {
      padding-bottom: 0 !important
    }

    .route-product-product.popup-quickview.mobile .product-info .product-right {
      padding-bottom: 60px !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .stepper {
      display: flex;
      height: 41px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart {
      display: inline-flex;
      margin-right: 7px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart::before,
    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart .btn-text {
      display: inline-block
    }

    .route-product-product.popup-quickview .product-info .product-details .stepper-group {
      flex-grow: 1
    }

    .route-product-product.popup-quickview .product-info .product-details .stepper-group .btn-cart {
      flex-grow: 1
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart::before {
      font-size: 17px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn,
    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn:active,
    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn:hover:active,
    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-more-details {
      display: inline-flex;
      flex-grow: 0
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-more-details .btn-text {
      display: none
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-more-details::after {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      font-size: 18px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-more-details.btn {
      background: rgba(60, 196, 114, 1)
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-more-details.btn:hover {
      background: #089A49 !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-more-details.btn.btn.disabled::after {
      font-size: 20px
    }

    .route-product-product.popup-quickview .product-info .product-details .button-group-page .wishlist-compare {
      flex-grow: 0 !important;
      margin: 0px !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .wishlist-compare {
      margin-left: auto
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist {
      display: inline-flex;
      margin: 0px;
      margin-right: 7px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist .btn-text {
      display: none
    }

    .route-product-product.popup-quickview .product-info .button-group-page .wishlist-compare .btn-wishlist {
      width: auto !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist.btn {
      background: #089A49
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-compare {
      display: inline-flex;
      margin-right: 7px
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-compare .btn-text {
      display: none
    }

    .route-product-product.popup-quickview .product-info .button-group-page .wishlist-compare .btn-compare {
      width: auto !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-compare::before {
      content: '\eab6' !important;
      font-family: icomoon !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn {
      background: rgba(39, 124, 217, 1)
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-product-product.popup-quickview .product-info .button-group-page .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .popup-quickview .product-right .description {
      order: 100
    }

    .popup-quickview .description {
      padding-top: 15px;
      margin-top: 15px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .popup-quickview .expand-content {
      max-height: 100%;
      overflow: visible
    }

    .popup-quickview .block-expanded+.block-expand-overlay .block-expand::after {
      content: 'Show Less'
    }

    .popup-quickview .block-expand-overlay {
      background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 1))
    }

    .safari.popup-quickview .block-expand-overlay {
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))
    }

    .iphone.popup-quickview .block-expand-overlay {
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))
    }

    .ipad.popup-quickview .block-expand-overlay {
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))
    }

    .login-box {
      flex-direction: row
    }

    .login-box .well {
      background: rgba(255, 255, 255, 1);
      padding: 20px;
      border-radius: 3px
    }

    .popup-login .popup-container {
      width: 500px
    }

    .popup-login .popup-inner-body {
      height: 260px
    }

    .popup-register .popup-container {
      width: 500px
    }

    .popup-register .popup-inner-body {
      height: 565px
    }

    .account-list>li>a {
      color: rgba(109, 118, 125, 1);
      padding: 10px;
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      border-radius: 3px;
      flex-direction: column;
      width: 100%;
      text-align: center
    }

    .account-list>li>a::before {
      content: '\e93f' !important;
      font-family: icomoon !important;
      font-size: 45px;
      color: rgba(48, 56, 65, 1);
      margin: 0
    }

    .account-list .edit-info {
      display: flex
    }

    .route-information-sitemap .site-edit {
      display: block
    }

    .account-list .edit-pass {
      display: flex
    }

    .route-information-sitemap .site-pass {
      display: block
    }

    .account-list .edit-address {
      display: flex
    }

    .route-information-sitemap .site-address {
      display: block
    }

    .account-list .edit-wishlist {
      display: flex
    }

    .my-cards {
      display: block
    }

    .account-list .edit-order {
      display: flex
    }

    .route-information-sitemap .site-history {
      display: block
    }

    .account-list .edit-downloads {
      display: flex
    }

    .route-information-sitemap .site-download {
      display: block
    }

    .account-list .edit-rewards {
      display: flex
    }

    .account-list .edit-returns {
      display: flex
    }

    .account-list .edit-transactions {
      display: flex
    }

    .account-list .edit-recurring {
      display: flex
    }

    .my-affiliates {
      display: block
    }

    .my-newsletter .account-list {
      display: flex
    }

    .my-affiliates .title {
      display: block
    }

    .my-newsletter .title {
      display: block
    }

    .my-account .title {
      display: none
    }

    .my-orders .title {
      display: block
    }

    .my-cards .title {
      display: block
    }

    .account-page .title {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    .account-page .title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .account-page .title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .account-page .title::after,
    .account-page .title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .desktop .account-list>li>a:hover {
      background: rgba(255, 255, 255, 1)
    }

    .account-list>li>a:hover {
      border-color: rgba(255, 255, 255, 1);
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .account-list>li {
      width: calc(100% / 5);
      padding: 10px;
      margin: 0
    }

    .account-list {
      margin: 0 -10px -10px;
      flex-direction: row
    }

    .account-list>.edit-info>a::before {
      content: '\e90d' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-pass>a::before {
      content: '\eac4' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-address>a::before {
      content: '\e956' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-wishlist>a::before {
      content: '\e955' !important;
      font-family: icomoon !important
    }

    .my-cards .account-list>li>a::before {
      content: '\e950' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-order>a::before {
      content: '\ead5' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-downloads>a::before {
      content: '\eb4e' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-rewards>a::before {
      content: '\e952' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-returns>a::before {
      content: '\f112' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-transactions>a::before {
      content: '\e928' !important;
      font-family: icomoon !important
    }

    .account-list>.edit-recurring>a::before {
      content: '\e8b3' !important;
      font-family: icomoon !important
    }

    .account-list>.affiliate-add>a::before {
      content: '\e95a' !important;
      font-family: icomoon !important
    }

    .account-list>.affiliate-edit>a::before {
      content: '\e95a' !important;
      font-family: icomoon !important
    }

    .account-list>.affiliate-track>a::before {
      content: '\e93c' !important;
      font-family: icomoon !important
    }

    .my-newsletter .account-list>li>a::before {
      content: '\e94c' !important;
      font-family: icomoon !important
    }

    .route-account-register .account-customer-group label::after {
      display: none !important
    }

    #account .account-fax label::after {
      display: none !important
    }

    .route-account-register .address-company label::after {
      display: none !important
    }

    #account-address .address-company label::after {
      display: none !important
    }

    .route-account-register .address-address-2 label::after {
      display: none !important
    }

    #account-address .address-address-2 label::after {
      display: none !important
    }

    .route-checkout-cart .td-qty .btn-remove.btn {
      background: #089A49
    }

    .route-checkout-cart .td-qty .btn-remove.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-checkout-cart .td-qty .btn-remove.btn.btn.disabled::after {
      font-size: 20px
    }

    .route-checkout-cart .cart-total table tbody tr:hover td {
      background: rgba(255, 255, 255, 1)
    }

    .route-checkout-cart .cart-total table tbody td {
      border-width: 0 !important;
      border-top-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important
    }

    .route-checkout-cart .cart-total table {
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important
    }

    .route-checkout-cart .cart-total table thead td {
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      background: rgba(238, 238, 238, 1)
    }

    .route-checkout-cart .cart-total table tfoot td {
      background: rgba(238, 238, 238, 1)
    }

    .route-checkout-cart .cart-total table tfoot td,
    .route-checkout-cart .cart-total table tfoot th {
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important
    }

    .route-checkout-cart .cart-total .table-responsive {
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      -webkit-overflow-scrolling: touch
    }

    .route-checkout-cart .cart-total .table-responsive::-webkit-scrollbar {
      height: 5px;
      width: 5px
    }

    .route-checkout-cart .cart-page {
      display: flex
    }

    .route-checkout-cart .cart-bottom {
      max-width: 400px
    }

    .cart-bottom {
      background: rgba(238, 238, 238, 1);
      padding: 20px;
      margin-left: 20px;
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .panels-total {
      flex-direction: column
    }

    .panels-total .cart-total {
      background: rgba(255, 255, 255, 1);
      align-items: flex-start
    }

    .route-checkout-cart .buttons {
      margin-top: 20px;
      padding-top: 15px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .route-checkout-cart .buttons .pull-right .btn {
      background: rgba(60, 196, 114, 1)
    }

    .route-checkout-cart .buttons .pull-right .btn:hover {
      background: #089A49 !important
    }

    .route-checkout-cart .buttons .pull-right .btn.btn.disabled::after {
      font-size: 20px
    }

    .route-checkout-cart .buttons .pull-left .btn {
      background: rgba(39, 124, 217, 1)
    }

    .route-checkout-cart .buttons .pull-left .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-checkout-cart .buttons .pull-left .btn.btn.disabled::after {
      font-size: 20px
    }

    .route-checkout-cart .buttons .pull-right .btn::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .route-checkout-cart .buttons .pull-left .btn::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .route-checkout-cart .buttons>div {
      flex: 1;
      width: auto;
      flex-basis: 0
    }

    .route-checkout-cart .buttons>div .btn {
      width: 100%
    }

    .route-checkout-cart .buttons .pull-left {
      margin-right: 0
    }

    .route-checkout-cart .buttons>div+div {
      padding-left: 10px
    }

    .route-checkout-cart .buttons .pull-right:only-child {
      flex: 1;
      margin: 0 0 0 auto
    }

    .route-checkout-cart .buttons .pull-right:only-child .btn {
      width: 100%
    }

    .route-checkout-cart .buttons input+.btn {
      margin-top: 5px
    }

    .cart-table .td-image {
      display: table-cell
    }

    .cart-table .td-qty .stepper,
    .cart-section .stepper,
    .cart-table .td-qty .btn-update.btn,
    .cart-section .td-qty .btn-primary.btn {
      display: inline-flex
    }

    .cart-table .td-name {
      display: table-cell
    }

    .cart-table .td-model {
      display: table-cell
    }

    .route-account-order-info .table-responsive .table-order thead>tr>td:nth-child(2) {
      display: table-cell
    }

    .route-account-order-info .table-responsive .table-order tbody>tr>td:nth-child(2) {
      display: table-cell
    }

    .route-account-order-info .table-responsive .table-order tfoot>tr>td:last-child {
      display: table-cell
    }

    .cart-table .td-price {
      display: table-cell
    }

    .route-checkout-cart .cart-panels {
      margin-bottom: 30px
    }

    .route-checkout-cart .cart-panels .title {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left;
      display: block
    }

    .route-checkout-cart .cart-panels .title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .route-checkout-cart .cart-panels .title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .route-checkout-cart .cart-panels .title::after,
    .route-checkout-cart .cart-panels .title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .route-checkout-cart .cart-panels .form-group .control-label {
      max-width: 9999px;
      padding-top: 7px;
      padding-bottom: 5px;
      justify-content: flex-start
    }

    .route-checkout-cart .cart-panels .form-group {
      margin-bottom: 8px
    }

    .route-checkout-cart .cart-panels input.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important
    }

    .route-checkout-cart .cart-panels input.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .route-checkout-cart .cart-panels input.form-control:focus,
    .route-checkout-cart .cart-panels input.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .route-checkout-cart .cart-panels input.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    .route-checkout-cart .cart-panels textarea.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important
    }

    .route-checkout-cart .cart-panels textarea.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .route-checkout-cart .cart-panels textarea.form-control:focus,
    .route-checkout-cart .cart-panels textarea.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .route-checkout-cart .cart-panels textarea.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    .route-checkout-cart .cart-panels select.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important;
      max-width: 200px
    }

    .route-checkout-cart .cart-panels select.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .route-checkout-cart .cart-panels select.form-control:focus,
    .route-checkout-cart .cart-panels select.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .route-checkout-cart .cart-panels select.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    .route-checkout-cart .cart-panels .radio {
      width: 100%
    }

    .route-checkout-cart .cart-panels .checkbox {
      width: 100%
    }

    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn,
    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn:active,
    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn:hover:active,
    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px;
      min-width: 35px;
      min-height: 35px;
      margin-left: 5px
    }

    .route-checkout-cart .cart-panels .input-group .input-group-btn .btn.btn.disabled::after {
      font-size: 20px
    }

    .route-checkout-cart .cart-panels .product-option-file .btn i::before {
      content: '\ebd8' !important;
      font-family: icomoon !important
    }

    .route-checkout-cart .cart-panels .buttons {
      margin-top: 20px;
      padding-top: 15px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .route-checkout-cart .cart-panels .buttons .pull-right .btn {
      background: rgba(60, 196, 114, 1)
    }

    .route-checkout-cart .cart-panels .buttons .pull-right .btn:hover {
      background: #089A49 !important
    }

    .route-checkout-cart .cart-panels .buttons .pull-right .btn.btn.disabled::after {
      font-size: 20px
    }

    .route-checkout-cart .cart-panels .buttons .pull-left .btn {
      background: rgba(39, 124, 217, 1)
    }

    .route-checkout-cart .cart-panels .buttons .pull-left .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-checkout-cart .cart-panels .buttons .pull-left .btn.btn.disabled::after {
      font-size: 20px
    }

    .route-checkout-cart .cart-panels .buttons .pull-right .btn::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .route-checkout-cart .cart-panels .buttons .pull-left .btn::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .route-checkout-cart .cart-panels .buttons>div {
      flex: 1;
      width: auto;
      flex-basis: 0
    }

    .route-checkout-cart .cart-panels .buttons>div .btn {
      width: 100%
    }

    .route-checkout-cart .cart-panels .buttons .pull-left {
      margin-right: 0
    }

    .route-checkout-cart .cart-panels .buttons>div+div {
      padding-left: 10px
    }

    .route-checkout-cart .cart-panels .buttons .pull-right:only-child {
      flex: 1;
      margin: 0 0 0 auto
    }

    .route-checkout-cart .cart-panels .buttons .pull-right:only-child .btn {
      width: 100%
    }

    .route-checkout-cart .cart-panels .buttons input+.btn {
      margin-top: 5px
    }

    .route-checkout-cart .cart-panels>p {
      display: none
    }

    .route-checkout-cart .cart-panels .panel-coupon {
      display: block
    }

    .route-checkout-cart .cart-panels .panel-shipping {
      display: block
    }

    .route-checkout-cart .cart-panels .panel-voucher {
      display: block
    }

    .route-checkout-cart .cart-panels .panel-coupon .collapse {
      display: none
    }

    .route-checkout-cart .cart-panels .panel-coupon .collapse.in {
      display: block
    }

    .route-checkout-cart .cart-panels .panel-coupon .panel-heading {
      pointer-events: auto
    }

    .route-checkout-cart .cart-panels .panel-shipping .collapse {
      display: none
    }

    .route-checkout-cart .cart-panels .panel-shipping .collapse.in {
      display: block
    }

    .route-checkout-cart .cart-panels .panel-shipping .panel-heading {
      pointer-events: auto
    }

    .route-checkout-cart .cart-panels .panel-voucher .collapse {
      display: none
    }

    .route-checkout-cart .cart-panels .panel-voucher .collapse.in {
      display: block
    }

    .route-checkout-cart .cart-panels .panel-voucher .panel-heading {
      pointer-events: auto
    }

    .route-product-category .page-title {
      display: block
    }

    .route-product-category .category-description {
      order: 0
    }

    .category-image {
      float: left
    }

    .category-text {
      position: static;
      bottom: auto
    }

    .category-description {
      margin-bottom: 30px
    }

    .category-description>img {
      margin-bottom: 10px
    }

    .refine-categories .refine-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 7 * 20px) / 8 - 0.01px)
    }

    .refine-categories .refine-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 8 - 0.01px)
    }

    .one-column #content .refine-categories .refine-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 6 * 20px) / 7 - 0.01px)
    }

    .one-column #content .refine-categories .refine-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 7 - 0.01px)
    }

    .two-column #content .refine-categories .refine-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 5 * 20px) / 6 - 0.01px)
    }

    .two-column #content .refine-categories .refine-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 6 - 0.01px)
    }

    .side-column .refine-categories .refine-item.swiper-slide {
      margin-right: 15px;
      width: calc((100% - 0 * 15px) / 1 - 0.01px)
    }

    .side-column .refine-categories .refine-item:not(.swiper-slide) {
      padding: 7.5px;
      width: calc(100% / 1 - 0.01px)
    }

    .refine-items {
      margin: -5px
    }

    .refine-categories {
      margin-bottom: 20px
    }

    .refine-links .refine-item+.refine-item {
      margin-left: 10px
    }

    .refine-categories .swiper-container {
      overflow: hidden
    }

    .refine-categories .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .refine-categories:hover .swiper-buttons {
      display: block
    }

    .refine-categories .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .refine-categories .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .refine-categories .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .refine-categories .swiper-button-disabled {
      opacity: 0
    }

    .refine-categories .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .refine-categories .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .refine-categories .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .refine-categories .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .refine-categories .swiper {
      padding-bottom: 10px
    }

    .refine-categories .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .refine-categories .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .refine-categories .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .refine-categories .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .refine-categories .swiper-pagination>span {
      border-radius: 20px
    }

    .refine-item a {
      background: rgba(255, 255, 255, 1);
      padding: 7px;
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .refine-item a:hover {
      border-color: #089A49
    }

    .refine-item a img {
      display: block
    }

    .refine-name {
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      padding: 7px;
      padding-bottom: 0px
    }

    .refine-item .refine-name {
      text-align: center
    }

    .refine-name .count-badge {
      display: none
    }

    .checkout-section.section-login {
      display: block
    }

    .quick-checkout-wrapper div .title.section-title {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    .quick-checkout-wrapper div .title.section-title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .quick-checkout-wrapper div .title.section-title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .quick-checkout-wrapper div .title.section-title::after,
    .quick-checkout-wrapper div .title.section-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .checkout-section {
      background: rgba(255, 255, 255, 1);
      padding: 15px;
      border-radius: 3px;
      margin-bottom: 25px
    }

    .quick-checkout-wrapper>div .right {
      padding-left: 25px;
      width: calc(100% - 30%)
    }

    .quick-checkout-wrapper>div .left {
      width: 30%
    }

    .section-payment {
      padding-left: 20px;
      width: calc(100% - 40%)
    }

    .section-shipping {
      width: 40%
    }

    .quick-checkout-wrapper .right .section-cvr {
      display: block
    }

    .quick-checkout-wrapper .right .section-cvr .control-label {
      display: flex
    }

    .quick-checkout-wrapper .right .section-cvr .form-coupon {
      display: flex
    }

    .quick-checkout-wrapper .right .section-cvr .form-voucher {
      display: flex
    }

    .quick-checkout-wrapper .right .section-cvr .form-reward {
      display: flex
    }

    .quick-checkout-wrapper .right .checkout-payment-details legend {
      display: block
    }

    .quick-checkout-wrapper .right .confirm-section .buttons {
      margin-top: 20px;
      padding-top: 15px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn {
      background: rgba(60, 196, 114, 1)
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn:hover {
      background: #089A49 !important
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn.btn.disabled::after {
      font-size: 20px
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-left .btn {
      background: rgba(39, 124, 217, 1)
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-left .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-left .btn.btn.disabled::after {
      font-size: 20px
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-right .btn::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-left .btn::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .quick-checkout-wrapper .right .confirm-section .buttons>div {
      flex: 1;
      width: auto;
      flex-basis: 0
    }

    .quick-checkout-wrapper .right .confirm-section .buttons>div .btn {
      width: 100%
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-left {
      margin-right: 0
    }

    .quick-checkout-wrapper .right .confirm-section .buttons>div+div {
      padding-left: 10px
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-right:only-child {
      flex: 1;
      margin: 0 0 0 auto
    }

    .quick-checkout-wrapper .right .confirm-section .buttons .pull-right:only-child .btn {
      width: 100%
    }

    .quick-checkout-wrapper .right .confirm-section .buttons input+.btn {
      margin-top: 5px
    }

    .quick-checkout-wrapper .confirm-section textarea {
      display: block
    }

    .quick-checkout-wrapper .section-comments label::after {
      display: none !important
    }

    .quick-checkout-wrapper .left .section-login .title {
      display: block
    }

    .quick-checkout-wrapper .left .section-register .title {
      display: block
    }

    .quick-checkout-wrapper .left .payment-address .title {
      display: block
    }

    .quick-checkout-wrapper .left .shipping-address .title {
      display: block
    }

    .quick-checkout-wrapper .right .shipping-payment .title {
      display: block
    }

    .quick-checkout-wrapper .right .section-cvr .title {
      display: block
    }

    .quick-checkout-wrapper .right .checkout-payment-details .title {
      display: block
    }

    .quick-checkout-wrapper .right .cart-section .title {
      display: block
    }

    .quick-checkout-wrapper .right .confirm-section .title {
      display: block
    }

    .quick-checkout-wrapper .account-customer-group label::after {
      display: none !important
    }

    .quick-checkout-wrapper .account-telephone label::after {
      display: none !important
    }

    .quick-checkout-wrapper .account-fax label::after {
      display: none !important
    }

    .quick-checkout-wrapper .address-company label::after {
      display: none !important
    }

    .quick-checkout-wrapper .address-address-2 label::after {
      display: none !important
    }

    .quick-checkout-wrapper .shipping-payment .shippings p {
      display: none;
      font-weight: bold
    }

    .quick-checkout-wrapper .shipping-payment .ship-wrapper p {
      display: none
    }

    .shipping-payment .section-body .radio {
      margin-bottom: 8px
    }

    .section-shipping .section-body>div:first-child::before {
      content: '\eab8' !important;
      font-family: icomoon !important;
      margin-right: 7px
    }

    .section-shipping .section-body>div:nth-child(2)::before {
      content: '\eab9' !important;
      font-family: icomoon !important;
      color: rgba(60, 196, 114, 1);
      margin-right: 7px
    }

    .section-payment .section-body>div:first-child::before {
      content: '\e961' !important;
      font-family: icomoon !important;
      margin-right: 7px
    }

    .section-payment .section-body>div:nth-child(2)::before {
      content: '\e95d' !important;
      font-family: icomoon !important;
      margin-right: 7px
    }

    .section-payment .section-body>div:nth-child(3)::before {
      content: '\f0d6' !important;
      font-family: icomoon !important;
      margin-right: 7px
    }

    .quick-checkout-wrapper .cart-section .td-qty .btn-danger.btn {
      background: #089A49
    }

    .quick-checkout-wrapper .cart-section .td-qty .btn-danger.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .quick-checkout-wrapper .cart-section .td-qty .btn-danger.btn.btn.disabled::after {
      font-size: 20px
    }

    .route-product-compare .compare-buttons .btn-remove.btn {
      background: #089A49
    }

    .route-product-compare .compare-buttons .btn-remove.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-product-compare .compare-buttons .btn-remove.btn.btn.disabled::after {
      font-size: 20px
    }

    .route-product-compare .compare-buttons .btn-cart {
      display: flex
    }

    .route-product-compare .compare-buttons .btn-remove {
      display: flex
    }

    .compare-name {
      display: table-row
    }

    .compare-image {
      display: table-row
    }

    .compare-price {
      display: table-row
    }

    .compare-model {
      display: table-row
    }

    .compare-manufacturer {
      display: table-row
    }

    .compare-availability {
      display: table-row
    }

    .compare-rating {
      display: table-row
    }

    .compare-summary {
      display: table-row
    }

    .compare-weight {
      display: table-row
    }

    .compare-dimensions {
      display: table-row
    }

    .route-information-contact .location-title {
      display: none
    }

    .route-information-contact .store-image {
      display: block
    }

    .route-information-contact .store-address {
      display: none
    }

    .route-information-contact .store-tel {
      display: none
    }

    .route-information-contact .store-fax {
      display: none
    }

    .route-information-contact .store-info {
      display: none
    }

    .route-information-contact .store-address a {
      display: none
    }

    .route-information-information .content {
      column-gap: 30px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .maintenance-page header {
      display: none !important
    }

    .maintenance-page footer {
      display: none !important
    }

    #common-maintenance {
      padding: 40px
    }

    .route-product-manufacturer #content a img {
      display: block
    }

    .route-product-manufacturer .manufacturer a {
      background: rgba(255, 255, 255, 1);
      padding: 8px;
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      border-radius: 3px
    }

    .route-product-manufacturer h2.title {
      font-size: 12px;
      margin-bottom: 5px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      font-size: 40px;
      font-weight: 400
    }

    .route-product-manufacturer h2.title::after {
      display: none
    }

    .route-product-manufacturer h2.title.page-title>span::after {
      display: none
    }

    .route-product-search #content .search-criteria-title {
      display: block
    }

    .route-product-search #content .buttons {
      margin-top: 20px;
      padding-top: 15px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .route-product-search #content .buttons .pull-right .btn {
      background: rgba(60, 196, 114, 1)
    }

    .route-product-search #content .buttons .pull-right .btn:hover {
      background: #089A49 !important
    }

    .route-product-search #content .buttons .pull-right .btn.btn.disabled::after {
      font-size: 20px
    }

    .route-product-search #content .buttons .pull-left .btn {
      background: rgba(39, 124, 217, 1)
    }

    .route-product-search #content .buttons .pull-left .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-product-search #content .buttons .pull-left .btn.btn.disabled::after {
      font-size: 20px
    }

    .route-product-search #content .buttons .pull-right .btn::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .route-product-search #content .buttons .pull-left .btn::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .route-product-search #content .buttons>div {
      flex: 1;
      width: auto;
      flex-basis: 0
    }

    .route-product-search #content .buttons>div .btn {
      width: 100%
    }

    .route-product-search #content .buttons .pull-left {
      margin-right: 0
    }

    .route-product-search #content .buttons>div+div {
      padding-left: 10px
    }

    .route-product-search #content .buttons .pull-right:only-child {
      flex: 1;
      margin: 0 0 0 auto
    }

    .route-product-search #content .buttons .pull-right:only-child .btn {
      width: 100%
    }

    .route-product-search #content .buttons input+.btn {
      margin-top: 5px
    }

    .route-product-search #content .search-products-title {
      display: block
    }

    .route-information-sitemap #content>.row>div+div {
      padding-left: 50px;
      border-width: 0;
      border-left-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .route-information-sitemap #content>.row>div>ul>li>a::before {
      content: '\f15c' !important;
      font-family: icomoon !important
    }

    .route-information-sitemap #content>.row>div>ul li ul li a::before {
      content: '\f0f6' !important;
      font-family: icomoon !important
    }

    .route-information-sitemap #content>.row {
      flex-direction: row
    }

    .route-information-sitemap #content>.row>div {
      width: auto
    }

    .route-account-wishlist td .btn-remove.btn {
      background: #089A49
    }

    .route-account-wishlist td .btn-remove.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-account-wishlist td .btn-remove.btn.btn.disabled::after {
      font-size: 20px
    }

    .route-account-wishlist .td-image {
      display: table-cell
    }

    .route-account-wishlist .td-name {
      display: table-cell
    }

    .route-account-wishlist .td-model {
      display: table-cell
    }

    .route-account-wishlist .td-stock {
      display: table-cell
    }

    .route-account-wishlist .td-price {
      display: table-cell
    }

    .route-account-wishlist .td-stock.in-stock {
      color: rgba(60, 196, 114, 1)
    }

    .route-account-wishlist .td-stock.out-of-stock {
      color: #089A49
    }

    .route-account-wishlist .td-price b {
      color: rgba(60, 196, 114, 1)
    }

    .route-account-wishlist .td-price s {
      font-size: 13px;
      color: rgba(109, 118, 125, 1);
      text-decoration: line-through
    }

    .product-info .product-left {
      width: 55%
    }

    .product-info .product-right {
      width: calc(100% - 55%);
      padding-left: 30px
    }

    .route-product-product:not(.popup) h1.page-title {
      display: block
    }

    .route-product-product:not(.popup) .product-info div.page-title {
      display: none
    }

    .product-image .swiper .swiper-controls {
      display: none
    }

    .lg-product-images #lg-download {
      display: none
    }

    .lg-product-images .lg-image {
      max-height: calc(100% - 100px)
    }

    .lg-product-images .lg-actions .lg-prev::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .lg-product-images .lg-actions .lg-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .lg-product-images #lg-counter {
      display: inline-block
    }

    .lg-product-images #lg-zoom-in {
      display: block
    }

    .lg-product-images #lg-actual-size {
      display: block
    }

    .lg-product-images #lg-download-in::after {
      content: '\eb4d' !important;
      font-family: icomoon !important
    }

    .lg-product-images #lg-zoom-in::after {
      content: '\ebef' !important;
      font-family: icomoon !important
    }

    .lg-product-images #lg-actual-size::after {
      content: '\ebf0' !important;
      font-family: icomoon !important
    }

    .lg-product-images .lg-close::after {
      content: '\ebeb' !important;
      font-family: icomoon !important
    }

    .lg-product-images .lg-sub-html {
      background: rgba(0, 0, 0, 0.5);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      top: auto;
      display: block
    }

    .lg-product-images.lg-thumb-open .lg-sub-html {
      bottom: 90px !important
    }

    .lg-product-images .lg-thumb-item {
      margin-top: 10px;
      padding-right: 10px
    }

    .lg-product-images .lg-thumb-item img {
      margin-bottom: 10px;
      border-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0)
    }

    .lg-product-images .lg-thumb-outer {
      padding-left: 10px
    }

    .desktop .lg-product-images .lg-thumb-item img:hover,
    .lg-product-images .lg-thumb-item.active img {
      border-color: #089A49
    }

    .lg-product-images .lg-toogle-thumb {
      left: auto;
      right: 20px;
      transform: translateX(0)
    }

    .direction-horizontal .additional-image {
      width: calc(100% / 6)
    }

    .additional-images .swiper-container {
      overflow: hidden
    }

    .additional-images .swiper-buttons {
      display: block;
      top: 50%
    }

    .additional-images .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .additional-images .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .additional-images .swiper-buttons div {
      width: 70px;
      height: 20px;
      background: rgba(221, 221, 221, 1)
    }

    .additional-images .swiper-button-disabled {
      opacity: 0
    }

    .additional-images .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .desktop .additional-images .swiper-buttons div:not(.swiper-button-disabled):hover::before {
      color: rgba(255, 255, 255, 1)
    }

    .additional-images .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .desktop .additional-images .swiper-buttons .swiper-button-next:not(.swiper-button-disabled):hover::before {
      color: rgba(255, 255, 255, 1)
    }

    .additional-images .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: #089A49
    }

    .additional-images .swiper-pagination {
      display: none !important;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .additional-images .swiper {
      padding-bottom: 0;
      ;
      padding-bottom: 10px
    }

    .additional-images .swiper-pagination-bullet {
      width: 10px;
      height: 10px
    }

    .additional-images .swiper-pagination>span+span {
      margin-left: 7px
    }

    .additional-images .swiper-pagination>span {
      border-radius: 10px
    }

    .additional-image {
      padding: calc(10px / 2)
    }

    .additional-images {
      margin-top: -5px;
      margin-right: 10px
    }

    .additional-images img {
      border-width: 1px;
      border-style: solid;
      border-color: rgba(255, 255, 255, 1)
    }

    .additional-images img:hover {
      border-color: rgba(109, 118, 125, 1)
    }

    .product-info .product-details>div {
      margin-bottom: 15px
    }

    .product-info .product-stats b {
      font-size: 12px;
      color: rgba(109, 118, 125, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .product-info .product-stats span {
      color: rgba(48, 56, 65, 1)
    }

    .product-info .product-details .brand-image a span {
      display: block
    }

    .product-info .product-details .brand-image a {
      background: rgba(255, 255, 255, 1);
      padding: 5px;
      margin-top: -30px
    }

    .product-info .product-stats li::before {
      content: '\f111' !important;
      font-family: icomoon !important
    }

    .route-product-product:not(.popup) .product-info .product-price-group {
      flex-direction: row
    }

    .route-product-product:not(.popup) .product-info .product-price-group .product-stats {
      order: 2;
      margin-left: auto
    }

    .product-info .product-manufacturer a {
      font-size: 13px
    }

    .product-info .product-stats .in-stock span {
      color: rgba(60, 196, 114, 1)
    }

    .product-info .product-stats .out-of-stock span {
      color: #089A49
    }

    .product-info .product-stats .product-stock b {
      display: block
    }

    .product-stats .product-views::before {
      content: '\f06e' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .product-stats .product-sold::before {
      content: '\e99a' !important;
      font-family: icomoon !important;
      color: rgba(235, 102, 38, 1);
      margin-right: 5px
    }

    .product-info .product-details .custom-stats {
      order: -1;
      margin-bottom: 10px
    }

    .product-info .product-stats .product-sold b {
      color: rgba(48, 56, 65, 1);
      font-weight: 700
    }

    .product-info .product-stats .product-views b {
      font-weight: 700
    }

    .product-info .custom-stats {
      justify-content: space-between
    }

    .product-info .product-details .rating {
      justify-content: flex-start;
      display: flex;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-bottom: 5px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .route-product-product:not(.popup) .product-info .product-details .rating {
      order: 0
    }

    .product-info .product-details .rating .fa-stack {
      font-size: 15px;
      width: 1.2em
    }

    .product-info .product-details .countdown-wrapper {
      display: block;
      margin-top: 15px;
      order: -2
    }

    .route-product-product:not(.popup) .product-info .product-details .product-price-group {
      order: 2
    }

    .product-info .product-details .product-price-group {
      text-align: left;
      justify-content: flex-start;
      display: flex
    }

    .product-info .product-details .price-group {
      font-size: 32px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700
    }

    .product-info .product-details .price-group .product-price-new {
      color: #089A49
    }

    .route-product-product:not(.popup) .product-info .product-details .price-group {
      flex-direction: row;
      align-items: center
    }

    .route-product-product:not(.popup) .product-info .product-details .product-price-new {
      order: -1
    }

    .product-info .product-details .price-group .product-price-old {
      display: block;
      font-size: 26px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-decoration: line-through
    }

    .route-product-product:not(.popup) .product-info .product-details .product-price-old {
      margin-left: 10px
    }

    .product-info .product-details .product-points {
      font-size: 14px;
      display: block;
      margin-top: 5px;
      margin-bottom: 5px
    }

    .product-info .product-details .product-tax {
      display: block;
      font-size: 14px
    }

    .product-info .product-details .discounts {
      display: block
    }

    .route-product-product:not(.popup) .product-info .product-details .product-options {
      order: 2
    }

    .route-product-product:not(.popup) .product-info .product-details .product-options>.options-title {
      display: none
    }

    .product-info .product-details .product-options>h3 {
      display: block;
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    .product-info .product-details .product-options>h3::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .product-info .product-details .product-options>h3.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .product-info .product-details .product-options>h3::after,
    .product-info .product-details .product-options>h3.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .product-options .form-group .control-label {
      max-width: 9999px;
      padding-top: 7px;
      padding-bottom: 5px;
      justify-content: flex-start
    }

    .product-options .form-group {
      margin-bottom: 8px
    }

    .product-options input.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important
    }

    .product-options input.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .product-options input.form-control:focus,
    .product-options input.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .product-options input.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    .product-options textarea.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important
    }

    .product-options textarea.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .product-options textarea.form-control:focus,
    .product-options textarea.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .product-options textarea.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    .product-options select.form-control {
      background: rgba(255, 255, 255, 1) !important;
      border-width: 1px !important;
      border-style: solid !important;
      border-color: rgba(221, 221, 221, 1) !important;
      border-radius: 2px !important;
      max-width: 200px
    }

    .product-options select.form-control:hover {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .product-options select.form-control:focus,
    .product-options select.form-control:active {
      border-color: rgba(196, 202, 253, 1) !important
    }

    .product-options select.form-control:focus {
      box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1)
    }

    .product-options .radio {
      width: 100%
    }

    .product-options .checkbox {
      width: 100%
    }

    .product-options .input-group .input-group-btn .btn,
    .product-options .input-group .input-group-btn .btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .product-options .input-group .input-group-btn .btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .product-options .input-group .input-group-btn .btn:active,
    .product-options .input-group .input-group-btn .btn:hover:active,
    .product-options .input-group .input-group-btn .btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .product-options .input-group .input-group-btn .btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .product-options .input-group .input-group-btn .btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px;
      min-width: 35px;
      min-height: 35px;
      margin-left: 5px
    }

    .product-options .input-group .input-group-btn .btn.btn.disabled::after {
      font-size: 20px
    }

    .product-options .product-option-file .btn i::before {
      content: '\ebd8' !important;
      font-family: icomoon !important
    }

    .product-info .product-options .push-option>div .option-value {
      margin-right: 8px;
      margin-bottom: 8px;
      min-width: 30px;
      min-height: 30px;
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      border-radius: 2px
    }

    .product-info .product-options .push-option>div label {
      margin-right: 5px;
      margin-bottom: 5px
    }

    .product-info .product-options .push-option>div input:checked+.option-value {
      border-color: rgba(196, 202, 253, 1)
    }

    .product-info .product-options .push-option>div img {
      border-width: 1px;
      border-style: solid;
      border-color: rgba(109, 118, 125, 1);
      border-radius: 50%
    }

    .desktop .product-info .product-options .push-option>div img:hover,
    .product-info .product-options .push-option>div input:checked+img {
      border-color: rgba(0, 0, 0, 1)
    }

    .product-info .product-options .push-option>div input:checked+img {
      border-color: rgba(0, 0, 0, 1);
      box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.7)
    }

    .product-info .product-options .push-option>div img:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .product-info .product-options .push-option input+img+.option-value {
      display: none
    }

    .route-product-product:not(.popup) .product-info .product-details .button-group-page {
      position: static;
      width: auto;
      z-index: 1;
      ;
      order: 3
    }

    .has-bottom-menu.route-product-product .bottom-menu {
      display: block
    }

    .product-info .product-details .stepper .control-label {
      display: none
    }

    .product-info .button-group-page .stepper {
      display: flex;
      width: 50px;
      height: 35px;
      border-style: solid;
      border-color: rgba(48, 56, 65, 1)
    }

    .product-info .button-group-page .stepper input.form-control {
      border-width: 0px !important
    }

    .product-info .button-group-page .stepper span i {
      color: rgba(255, 255, 255, 1);
      background-color: rgba(109, 118, 125, 1)
    }

    .product-info .button-group-page .stepper span i:hover {
      background-color: rgba(53, 66, 174, 1)
    }

    .route-product-product:not(.popup) .product-info .button-group-page .stepper {
      height: 40px
    }

    .product-info .button-group-page .btn-cart {
      display: inline-flex;
      border-radius: 0px !important
    }

    .route-product-product .tags {
      display: flex;
      justify-content: flex-start
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart::before {
      display: inline-block
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart .btn-text {
      display: inline-block
    }

    .product-info .button-group-page .extra-group {
      width: auto;
      flex-grow: initial;
      flex-direction: row;
      display: flex
    }

    .product-info .button-group-page .btn-extra {
      flex: initial;
      width: auto
    }

    .product-info .button-group-page .btn-extra+.btn-extra {
      flex: 1;
      width: 100%
    }

    .product-info .product-details .buttons-wrapper .extra-group {
      justify-content: flex-start;
      align-items: flex-start
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-cart {
      flex-grow: initial;
      height: 40px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .stepper-group {
      flex-grow: initial;
      width: auto
    }

    .product-info .button-group-page .btn-cart::before {
      font-size: 16px;
      margin-right: 5px
    }

    .product-info .button-group-page .btn-extra.btn {
      background: rgba(60, 196, 114, 1)
    }

    .product-info .button-group-page .btn-extra.btn:hover {
      background: #089A49 !important
    }

    .product-info .button-group-page .btn-extra.btn.btn.disabled::after {
      font-size: 20px
    }

    .product-info .button-group-page .btn-extra+.btn {
      display: none
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-extra {
      height: 40px
    }

    .product-info .button-group-page .extra-group .btn-extra:first-child {
      border-radius: 0px !important
    }

    .product-info .button-group-page .extra-group .btn-extra+.btn-extra {
      border-radius: 0px !important
    }

    .product-info .button-group-page .extra-group .btn-extra:first-child::before {
      font-size: 17px;
      margin-right: 5px
    }

    .product-info .button-group-page .extra-group .btn-extra:last-child::before {
      font-size: 17px
    }

    .route-product-product:not(.popup) .product-info .product-details .button-group-page .wishlist-compare {
      width: auto
    }

    .route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare {
      margin-left: auto;
      margin-right: 0;
      justify-content: center;
      align-items: center;
      flex-direction: row
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist {
      display: inline-flex;
      border-radius: 0px !important
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist .btn-text {
      display: none
    }

    .route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare .btn-wishlist {
      flex: initial;
      width: auto
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist::before {
      font-size: 17px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn {
      background: #089A49
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .product-info .button-group-page .btn-compare {
      display: inline-flex
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare .btn-text {
      display: none
    }

    .route-product-product:not(.popup) .product-info .button-group-page .wishlist-compare .btn-compare {
      flex: initial;
      width: auto
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare {
      border-radius: 0px !important
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare::before {
      font-size: 17px
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn {
      background: rgba(39, 124, 217, 1)
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .route-product-product:not(.popup) .product-info .button-group-page .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .product_tabs .nav-tabs>li>a,
    .product_tabs .nav-tabs>li.active>a,
    .product_tabs .nav-tabs>li.active>a:hover,
    .product_tabs .nav-tabs>li.active>a:focus {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .product_tabs .nav-tabs>li:hover>a,
    .product_tabs .nav-tabs>li.active>a {
      color: #089A49
    }

    .product_tabs .nav-tabs {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      display: flex;
      justify-content: flex-start;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      ;
      min-width: 50px
    }

    .product_tabs .nav-tabs>li {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0);
      flex-grow: 0
    }

    .product_tabs .nav-tabs>li.active {
      border-color: #089A49
    }

    .product_tabs .nav-tabs>li.active::after {
      display: none;
      border-top-width: 10px
    }

    .product_tabs .nav-tabs>li>a {
      justify-content: center;
      white-space: nowrap;
      padding: 0px;
      padding-bottom: 10px
    }

    .product_tabs .nav-tabs>li>a::before {
      font-size: 18px
    }

    .product_tabs .nav-tabs>li:not(:last-child) {
      margin-right: 20px
    }

    .product_tabs .mobile .nav-tabs {
      overflow-x: scroll
    }

    .product_tabs .nav-tabs::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px;
      height: 1px;
      width: 1px
    }

    .product_tabs .nav-tabs::-webkit-scrollbar-track {
      background-color: white;
      background-color: rgba(255, 255, 255, 1)
    }

    .product_tabs .nav-tabs::-webkit-scrollbar-thumb {
      background-color: #999;
      background-color: rgba(60, 196, 114, 1)
    }

    .product_tabs .tab-container::before {
      display: none
    }

    .product_tabs .tab-content {
      padding-top: 20px
    }

    .product_tabs .tab-container {
      display: block
    }

    .product_tabs .tab-container .nav-tabs {
      flex-direction: row
    }

    .product_accordion.panel-group .panel-heading a::before {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .desktop .product_accordion.panel-group .panel-heading:hover a::before {
      color: #089A49
    }

    .product_accordion.panel-group .panel-active .panel-heading a::before {
      content: '\e5db' !important;
      font-family: icomoon !important;
      color: #089A49;
      top: -1px
    }

    .product_accordion .panel-group .panel-heading a::before {
      order: 10
    }

    .product_accordion .panel-group .panel-heading a {
      justify-content: space-between
    }

    .product_accordion.panel-group .panel-heading a {
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      padding: 0px;
      padding-top: 15px;
      padding-bottom: 15px
    }

    .product_accordion.panel-group .panel-heading {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .product_accordion.panel-group .panel-body {
      padding-bottom: 10px
    }

    .products-filter {
      background: rgba(255, 255, 255, 1);
      margin-bottom: 20px;
      padding: 12px;
      border-radius: 2px
    }

    .grid-list button {
      display: inline-block
    }

    #btn-grid-view::before {
      content: '\e97b' !important;
      font-family: icomoon !important;
      font-size: 18px
    }

    #btn-list-view::before {
      content: '\e97a' !important;
      font-family: icomoon !important;
      font-size: 18px
    }

    .grid-list .view-btn {
      width: 25px;
      height: 25px
    }

    .grid-list .compare-btn {
      display: inline-flex;
      padding-left: 15px
    }

    .grid-list .links-text {
      display: inline-flex
    }

    .grid-list .compare-btn::before {
      margin-right: 5px;
      font-size: 18px;
      color: rgba(48, 56, 65, 1)
    }

    .grid-list .count-badge {
      display: inline-flex
    }

    .products-filter .select-group .input-group.sort-by {
      display: inline-flex
    }

    .products-filter .select-group .input-group.per-page {
      display: inline-flex
    }

    .sort-by {
      margin: 0 10px
    }

    .products-filter .select-group .input-group .input-group-addon {
      border-radius: 3px
    }

    .route-product-category .pagination-results {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      letter-spacing: 1px;
      margin-top: 20px;
      justify-content: flex-start
    }

    .route-product-category .pagination-results .text-right {
      display: block
    }

    .route-product-category .pagination>li>a {
      color: rgba(48, 56, 65, 1)
    }

    .route-product-category .pagination>li>a:hover {
      color: #089A49
    }

    .route-product-category .pagination>li.active>span,
    .route-product-category .pagination>li.active>span:hover,
    .route-product-category .pagination>li>a:focus {
      color: #089A49
    }

    .route-product-category .pagination>li>a,
    .route-product-category .pagination>li>span {
      padding: 5px;
      padding-right: 6px;
      padding-left: 6px
    }

    .route-product-category .pagination>li {
      border-radius: 2px
    }

    .route-product-category .pagination>li:first-child a::before,
    .route-product-category .pagination>li:last-child a::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .route-product-category .pagination>li .prev::before,
    .route-product-category .pagination>li .next::before {
      content: '\e5c4' !important;
      font-family: icomoon !important
    }

    .route-product-category .pagination>li:not(:first-of-type) {
      margin-left: 5px
    }

    .main-products+.pagination-results {
      display: none
    }

    .ias-noneleft {
      margin: 10px;
      margin-right: 5px;
      margin-left: 5px;
      padding: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .ias-spinner {
      margin: 10px;
      padding-top: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .ias-trigger-next .btn {
      margin: 10px
    }

    .ias-trigger-prev .btn {
      margin: 10px
    }

    .ias-trigger a {
      display: flex
    }

    .product-list .ias-noneleft {
      margin: 0px;
      margin-top: 20px
    }

    .ias-trigger .btn::before {
      content: '\eacd' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .main-products.product-grid .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 4 * 20px) / 5 - 0.01px)
    }

    .main-products.product-grid .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 5 - 0.01px)
    }

    .one-column #content .main-products.product-grid .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .one-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .main-products.product-grid .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .two-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 3 - 0.01px)
    }

    .side-column .main-products.product-grid .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .side-column .main-products.product-grid .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 1 - 0.01px)
    }

    .main-products.product-grid {
      margin: -10px
    }

    .desktop .main-products.product-grid .product-layout:hover {
      background: rgba(255, 255, 255, 1);
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .main-products.product-grid .product-thumb {
      border-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .desktop .main-products.product-grid .product-layout:hover .product-thumb {
      border-color: rgba(255, 255, 255, 1)
    }

    .main-products.product-grid .product-thumb:hover .product-img>div {
      transform: scale(1.12)
    }

    .main-products.product-grid .product-thumb .product-labels {
      visibility: visible;
      opacity: 1
    }

    .main-products.product-grid .product-thumb .quickview-button {
      display: flex;
      left: 50%;
      top: 50%;
      bottom: auto;
      right: auto;
      transform: translate3d(-50%, -50%, 1px);
      margin-right: 5px;
      margin-bottom: 5px
    }

    .main-products.product-grid .product-thumb .btn-quickview {
      visibility: hidden;
      opacity: 0;
      transform: scale(.88);
      width: 32px;
      height: 32px
    }

    .main-products.product-grid .product-thumb:hover .btn-quickview {
      visibility: visible;
      opacity: 1;
      transform: scale(1)
    }

    .main-products.product-grid .product-thumb .btn-quickview .btn-text {
      display: none
    }

    .main-products.product-grid .product-thumb .btn-quickview::before {
      display: inline-block;
      content: '\eb54' !important;
      font-family: icomoon !important;
      font-size: 16px
    }

    .main-products.product-grid .product-thumb .image .btn {
      background: rgba(109, 118, 125, 1);
      border-width: 0px
    }

    .main-products.product-grid .product-thumb .image .btn:hover {
      background: rgba(48, 56, 65, 1) !important
    }

    .main-products.product-grid .product-thumb .image .btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-grid .product-thumb .countdown {
      display: flex;
      visibility: visible;
      opacity: 1;
      transform: translate3d(-50%, 0, 1px) scale(1);
      color: rgba(48, 56, 65, 1);
      background: rgba(255, 255, 255, 1);
      border-radius: 3px;
      width: 90%;
      bottom: 10px
    }

    .main-products.product-grid .product-thumb .countdown div span {
      color: rgba(109, 118, 125, 1)
    }

    .main-products.product-grid .product-thumb .countdown>div {
      border-style: solid;
      border-color: rgba(245, 245, 245, 1)
    }

    .main-products.product-grid.product-list .product-layout .image {
      float: left;
      height: 100%
    }

    .main-products.product-grid .product-thumb .stats {
      display: flex;
      justify-content: space-between;
      position: relative;
      transform: none;
      width: initial;
      padding: 5px;
      padding-right: 7px;
      padding-left: 7px;
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .main-products.product-grid .product-thumb .name {
      order: initial;
      display: flex;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      justify-content: center;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
      margin-bottom: 8px
    }

    .main-products.product-grid .stat-1 .stats-label {
      display: none
    }

    .main-products.product-grid .stat-2 .stats-label {
      display: none
    }

    .main-products.product-grid.product-grid .product-thumb .rating {
      position: absolute;
      visibility: visible;
      opacity: 1;
      top: 0
    }

    .main-products.product-grid.product-grid .product-thumb .rating-stars {
      position: absolute;
      visibility: visible;
      opacity: 1;
      transform: translateY(-50%)
    }

    .main-products.product-grid .product-thumb .rating {
      justify-content: center;
      display: flex
    }

    .main-products.product-grid .product-thumb .rating.no-rating {
      display: none
    }

    .main-products.product-grid .product-thumb .rating .fa-stack {
      font-size: 13px;
      width: 1.2em
    }

    .main-products.product-grid .product-thumb .rating .fa-star,
    .main-products.product-grid .product-thumb .rating .fa-star+.fa-star-o {
      color: rgba(254, 225, 91, 1)
    }

    .main-products.product-grid .product-thumb .rating .fa-star-o:only-child {
      color: rgba(109, 118, 125, 1)
    }

    .main-products.product-grid .product-thumb .rating-stars {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px;
      background: rgba(255, 255, 255, 1);
      padding: 5px
    }

    .main-products.product-grid .product-thumb .rating.no-rating span {
      opacity: 0.5
    }

    .main-products.product-grid:not(.product-list) .has-countdown .product-thumb .rating {
      margin-top: -47px
    }

    .main-products.product-grid .product-thumb .name a {
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-align: center;
      text-transform: uppercase;
      text-align: center
    }

    .main-products.product-grid .product-thumb .description {
      display: none;
      margin-top: 5px
    }

    .main-products.product-grid .product-thumb .price {
      display: block;
      font-family: 'IBM Plex Sans';
      font-weight: 400;
      font-size: 16px;
      color: rgba(48, 56, 65, 1);
      text-align: center;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      justify-content: center;
      align-items: center;
      padding-top: 3px;
      margin-bottom: 5px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .main-products.product-grid .product-thumb .price-tax {
      display: none;
      font-size: 12px;
      text-align: center
    }

    .main-products.product-grid .product-thumb .price-new {
      color: #089A49;
      margin: 0 7px 0 0;
      order: 1
    }

    .main-products.product-grid .product-thumb .price-old {
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-decoration: line-through;
      margin: 0;
      order: 2
    }

    .main-products.product-grid .product-thumb .price>div {
      align-items: center;
      flex-direction: row
    }

    .main-products.product-grid .product-thumb .buttons-wrapper {
      display: block
    }

    .main-products.product-grid .product-thumb .button-group {
      justify-content: center
    }

    .main-products.product-grid.product-grid .product-thumb .button-group {
      background: rgba(48, 56, 65, 1)
    }

    .main-products.product-grid .product-thumb .cart-group {
      display: inline-flex
    }

    .main-products.product-grid .product-thumb .btn-cart {
      width: 36px;
      height: 36px
    }

    .main-products.product-grid .product-thumb .btn-wishlist {
      width: 36px;
      height: 36px;
      display: inline-flex;
      margin-right: 2px;
      margin-left: 2px
    }

    .main-products.product-grid .product-thumb .btn-compare {
      width: 36px;
      height: 36px;
      display: inline-flex
    }

    .main-products.product-grid .product-thumb .btn-cart .btn-text {
      display: none
    }

    .main-products.product-grid .product-thumb .btn-cart::before {
      display: inline-block;
      font-size: 16px;
      left: 1px
    }

    .main-products.product-grid.product-grid .product-thumb .btn-cart {
      flex: initial
    }

    .main-products.product-grid.product-grid .product-thumb .cart-group {
      flex: initial
    }

    .main-products.product-grid .product-thumb .stepper {
      display: inline-flex;
      width: 50px;
      height: 35px;
      border-style: solid;
      border-color: rgba(48, 56, 65, 1);
      margin-right: 2px;
      height: 30px
    }

    .main-products.product-grid .product-thumb .stepper input.form-control {
      border-width: 0px !important
    }

    .main-products.product-grid .product-thumb .stepper span i {
      color: rgba(255, 255, 255, 1);
      background-color: rgba(109, 118, 125, 1)
    }

    .main-products.product-grid .product-thumb .stepper span i:hover {
      background-color: rgba(53, 66, 174, 1)
    }

    .main-products.product-grid .button-group-bottom .wish-group.wish-group-bottom {
      margin: -10px;
      margin-top: 10px
    }

    .main-products.product-grid .button-group-bottom .wish-group-bottom {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid
    }

    .main-products.product-grid .product-thumb .btn-wishlist::before {
      display: inline-block;
      font-size: 16px
    }

    .main-products.product-grid .product-thumb .btn-wishlist .btn-text {
      display: none
    }

    .main-products.product-grid .product-thumb .btn-compare::before {
      display: inline-block;
      font-size: 16px
    }

    .main-products.product-grid .product-thumb .btn-compare .btn-text {
      display: none
    }

    .main-products.product-grid .product-thumb .extra-group {
      display: block
    }

    .main-products.product-grid .product-thumb .extra-group .btn:first-child {
      display: inline-flex
    }

    .main-products.product-grid .product-thumb .extra-group .btn-extra+.btn {
      display: inline-flex
    }

    .main-products.product-grid .product-thumb .extra-group .btn:first-child::before {
      display: inline-block;
      color: rgba(60, 196, 114, 1)
    }

    .main-products.product-grid .product-thumb .extra-group .btn:first-child .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn::before {
      display: inline-block;
      color: #089A49
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .main-products.product-grid .product-layout .extra-group>div {
      justify-content: space-between
    }

    .main-products.product-grid .product-thumb .extra-group>div {
      padding: 5px;
      padding-right: 7px;
      padding-left: 7px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .main-products.product-grid .product-thumb .extra-group .btn.btn,
    .main-products.product-grid .product-thumb .extra-group .btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .main-products.product-grid .product-thumb .extra-group .btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .main-products.product-grid .product-thumb .extra-group .btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .main-products.product-grid .product-thumb .extra-group .btn.btn:active,
    .main-products.product-grid .product-thumb .extra-group .btn.btn:hover:active,
    .main-products.product-grid .product-thumb .extra-group .btn.btn:focus:active {
      background: none !important
    }

    .main-products.product-grid .product-thumb .extra-group .btn.btn:focus {
      background: none
    }

    .main-products.product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn,
    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:active,
    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
      background: none !important
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
      background: none
    }

    .main-products.product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-grid.product-grid .product-thumb .extra-group {
      position: static;
      margin-top: initial
    }

    .main-products.product-grid.product-grid .product-thumb .extra-group>div {
      position: static;
      transform: none;
      opacity: 1
    }

    .main-products.product-grid.product-grid .product-thumb .buttons-wrapper {
      overflow: hidden;
      width: 100%
    }

    .main-products.product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
      position: absolute;
      width: 100%;
      opacity: 0;
      visibility: hidden;
      transform: translate3d(0, -85%, 1px)
    }

    .main-products.product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
      opacity: 1;
      visibility: visible;
      transform: translate3d(0, -100%, 1px)
    }

    .main-products.product-grid.product-grid .wish-group {
      position: static;
      width: auto;
      top: auto;
      visibility: visible;
      opacity: 1;
      transform: translate3d(0, 0, 0);
      justify-content: flex-end
    }

    .main-products.product-list .product-thumb {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      padding-top: 20px
    }

    .main-products.product-list:not(.product-grid) .product-layout:not(.swiper-slide)+.product-layout:not(.swiper-slide) {
      margin-top: 24px
    }

    .main-products.product-list .product-thumb:hover .product-img>div {
      transform: scale(1.12)
    }

    .main-products.product-list .product-thumb .product-labels {
      visibility: visible;
      opacity: 1
    }

    .main-products.product-list .product-thumb .quickview-button {
      display: flex;
      left: 50%;
      top: 50%;
      bottom: auto;
      right: auto;
      transform: translate3d(-50%, -50%, 1px)
    }

    .main-products.product-list .product-thumb .btn-quickview {
      visibility: hidden;
      opacity: 0;
      transform: scale(.88)
    }

    .main-products.product-list .product-thumb:hover .btn-quickview {
      visibility: visible;
      opacity: 1;
      transform: scale(1)
    }

    .main-products.product-list .product-thumb .btn-quickview .btn-text {
      display: none
    }

    .main-products.product-list .product-thumb .btn-quickview::before {
      display: inline-block;
      content: '\eb54' !important;
      font-family: icomoon !important
    }

    .main-products.product-list .product-thumb .image .btn {
      background: rgba(109, 118, 125, 1);
      border-width: 0px
    }

    .main-products.product-list .product-thumb .image .btn:hover {
      background: rgba(48, 56, 65, 1) !important
    }

    .main-products.product-list .product-thumb .image .btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-list .product-thumb .countdown {
      display: flex;
      visibility: visible;
      opacity: 1;
      transform: translate3d(-50%, 0, 1px) scale(1)
    }

    .main-products.product-list.product-list .product-layout .image {
      float: left;
      height: 100%
    }

    .main-products.product-list .product-thumb .caption {
      padding-left: 20px
    }

    .main-products.product-list .product-thumb .stats {
      display: flex;
      justify-content: flex-start;
      margin-bottom: 5px
    }

    .main-products.product-list .stat-1 .stats-label {
      display: inline-block
    }

    .main-products.product-list .stat-2 .stats-label {
      display: inline-block
    }

    .main-products.product-list.product-grid .product-thumb .rating {
      position: static;
      visibility: visible;
      opacity: 1
    }

    .main-products.product-list .product-thumb .rating {
      justify-content: flex-end;
      margin-bottom: 5px;
      display: flex
    }

    .main-products.product-list .product-thumb .rating.no-rating {
      display: none
    }

    .main-products.product-list .product-thumb .rating .fa-stack {
      font-size: 15px;
      width: 1.2em
    }

    .main-products.product-list .product-thumb .rating-stars {
      margin-top: -18px
    }

    .main-products.product-list .product-thumb .rating.no-rating span {
      opacity: .3
    }

    .main-products.product-list .product-thumb .name {
      display: flex;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      justify-content: flex-start;
      margin-left: 0;
      margin-right: auto;
      margin-bottom: 5px
    }

    .main-products.product-list .product-thumb .name a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      font-size: 18px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-align: left
    }

    .main-products.product-list .product-thumb .description {
      display: block;
      color: rgba(109, 118, 125, 1);
      line-height: 1.5;
      margin-bottom: 5px
    }

    .main-products.product-list .product-thumb .price {
      display: block;
      font-size: 22px;
      color: rgba(48, 56, 65, 1);
      text-align: left;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      margin-left: 0;
      margin-right: auto;
      text-align: left;
      justify-content: flex-start;
      margin-bottom: 10px
    }

    .main-products.product-list .product-thumb .price-tax {
      display: block;
      font-size: 12px
    }

    .main-products.product-list .product-thumb .price-new {
      color: #089A49;
      margin: 0 7px 0 0;
      order: 1
    }

    .main-products.product-list .product-thumb .price-old {
      font-size: 18px;
      color: rgba(109, 118, 125, 1);
      text-decoration: line-through;
      margin: 0;
      order: 2
    }

    .main-products.product-list .product-thumb .price>div {
      align-items: center;
      flex-direction: row
    }

    .main-products.product-list .product-thumb .button-group {
      justify-content: space-between
    }

    .main-products.product-list .product-thumb .cart-group {
      display: inline-flex
    }

    .main-products.product-list .product-thumb .btn-cart {
      height: 35px
    }

    .main-products.product-list .product-thumb .btn-wishlist {
      width: 35px;
      height: 35px;
      display: inline-flex;
      margin-right: 5px;
      margin-left: 5px
    }

    .main-products.product-list .product-thumb .btn-compare {
      width: 35px;
      height: 35px;
      display: inline-flex
    }

    .main-products.product-list .product-thumb .btn-cart::before {
      display: inline-block;
      font-size: 16px
    }

    .main-products.product-list .product-thumb .btn-cart .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .main-products.product-list.product-grid .product-thumb .btn-cart {
      flex: initial
    }

    .main-products.product-list.product-grid .product-thumb .cart-group {
      flex: initial
    }

    .main-products.product-list .product-thumb .btn-cart.btn,
    .main-products.product-list .product-thumb .btn-cart.btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .main-products.product-list .product-thumb .btn-cart.btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .main-products.product-list .product-thumb .btn-cart.btn:active,
    .main-products.product-list .product-thumb .btn-cart.btn:hover:active,
    .main-products.product-list .product-thumb .btn-cart.btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .main-products.product-list .product-thumb .btn-cart.btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .main-products.product-list .product-thumb .btn-cart.btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .main-products.product-list .product-thumb .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-list .product-thumb .stepper {
      display: inline-flex;
      margin-right: 5px;
      height: 35px
    }

    .main-products.product-list .product-thumb .btn-wishlist::before {
      display: inline-block;
      font-size: 16px
    }

    .main-products.product-list .product-thumb .btn-wishlist .btn-text {
      display: none
    }

    .main-products.product-list .product-thumb .btn-wishlist.btn,
    .main-products.product-list .product-thumb .btn-wishlist.btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .main-products.product-list .product-thumb .btn-wishlist.btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .main-products.product-list .product-thumb .btn-wishlist.btn:active,
    .main-products.product-list .product-thumb .btn-wishlist.btn:hover:active,
    .main-products.product-list .product-thumb .btn-wishlist.btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .main-products.product-list .product-thumb .btn-wishlist.btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .main-products.product-list .product-thumb .btn-wishlist.btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .main-products.product-list .product-thumb .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-list .product-thumb .btn-compare::before {
      display: inline-block;
      font-size: 16px
    }

    .main-products.product-list .product-thumb .btn-compare .btn-text {
      display: none
    }

    .main-products.product-list .product-thumb .btn-compare.btn {
      background: rgba(39, 124, 217, 1)
    }

    .main-products.product-list .product-thumb .btn-compare.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .main-products.product-list .product-thumb .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-list .product-thumb .extra-group {
      display: block
    }

    .main-products.product-list .product-thumb .extra-group .btn:first-child {
      display: inline-flex
    }

    .main-products.product-list .product-thumb .extra-group .btn-extra+.btn {
      display: inline-flex
    }

    .main-products.product-list .product-thumb .extra-group .btn:first-child::before {
      display: inline-block;
      font-size: 16px;
      color: rgba(60, 196, 114, 1)
    }

    .main-products.product-list .product-thumb .extra-group .btn:first-child .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn::before {
      display: inline-block;
      font-size: 16px;
      color: #089A49
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn {
      margin-left: 5px;
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .main-products.product-list .product-layout .extra-group>div {
      justify-content: flex-start
    }

    .main-products.product-list .product-thumb .extra-group>div {
      margin-top: 10px
    }

    .main-products.product-list .product-thumb .extra-group .btn.btn,
    .main-products.product-list .product-thumb .extra-group .btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .main-products.product-list .product-thumb .extra-group .btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .main-products.product-list .product-thumb .extra-group .btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .main-products.product-list .product-thumb .extra-group .btn.btn:active,
    .main-products.product-list .product-thumb .extra-group .btn.btn:hover:active,
    .main-products.product-list .product-thumb .extra-group .btn.btn:focus:active {
      background: none !important
    }

    .main-products.product-list .product-thumb .extra-group .btn.btn:focus {
      background: none
    }

    .main-products.product-list .product-thumb .extra-group .btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn,
    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn:active,
    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn:hover:active,
    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn:focus:active {
      background: none !important
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn:focus {
      background: none
    }

    .main-products.product-list .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .main-products.product-list.product-grid .product-thumb .extra-group {
      position: static;
      margin-top: initial
    }

    .main-products.product-list.product-grid .product-thumb .extra-group>div {
      position: static;
      transform: none;
      opacity: 1
    }

    .main-products.product-list.product-grid .product-thumb .buttons-wrapper {
      position: static;
      width: auto;
      overflow: visible;
      order: initial;
      margin-top: auto;
      transform: none
    }

    .main-products.product-list.product-grid .product-thumb .buttons-wrapper .button-group {
      position: static;
      opacity: 1;
      visibility: visible;
      transform: none
    }

    .main-products.product-list.product-grid .product-thumb:hover .buttons-wrapper .button-group {
      transform: none
    }

    .main-products.product-list.product-grid .wish-group {
      justify-content: flex-start
    }

    .popup-options .popup-container {
      width: 400px
    }

    .popup-options .popup-inner-body {
      height: 380px
    }

    @media (max-width: 1440px) {
      .blog-feed {
        margin-right: 10px
      }

      #content {
        padding: 20px
      }

      .side-column {
        padding-left: 20px
      }

      #column-right {
        padding-right: 20px
      }

      .breadcrumb {
        padding-left: 20px
      }

      .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 3 * 20px) / 4 - 0.01px)
      }

      .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 4 - 0.01px)
      }
    }

    @media (max-width: 1024px) {
      .blog-post .post-details .post-stats .p-posted {
        display: none
      }

      .post-reply {
        margin-left: 0px
      }

      .account-list>li {
        width: calc(100% / 3)
      }

      .route-checkout-cart .cart-page {
        display: block
      }

      .route-checkout-cart .cart-bottom {
        max-width: 1024px
      }

      .cart-bottom {
        margin-top: 20px;
        margin-left: 0px
      }

      .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 5 * 20px) / 6 - 0.01px)
      }

      .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 6 - 0.01px)
      }

      .one-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 4 * 20px) / 5 - 0.01px)
      }

      .one-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 5 - 0.01px)
      }

      .two-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 3 * 20px) / 4 - 0.01px)
      }

      .two-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 4 - 0.01px)
      }

      .quick-checkout-wrapper>div .right {
        padding-left: 0px;
        width: 100%
      }

      .quick-checkout-wrapper>div .left {
        width: 100%
      }

      .route-product-product:not(.popup) .product-info .product-details .button-group-page {
        position: fixed;
        width: 100%;
        z-index: 10000;
        margin: 0;
        background: rgba(255, 255, 255, 1);
        padding: 7px;
        border-width: 0;
        border-top-width: 3px;
        border-style: solid;
        border-color: rgba(39, 124, 217, 1)
      }

      .route-product-product:not(.popup).has-bottom-menu .bottom-menu {
        display: none
      }

      .route-product-product:not(.popup).has-bottom-menu .site-wrapper {
        padding-bottom: 0
      }

      .route-product-product:not(.popup) body {
        /* padding-bottom: 55px */
      }

      .route-product-product .scroll-top {
        bottom: calc(55px + 10px)
      }

      .product-info .button-group-page .extra-group .btn:first-child .btn-text {
        display: none
      }

      .product-info .button-group-page .extra-group .btn:first-child::before {
        display: inline-block
      }

      .product-info .button-group-page .extra-group .btn-extra:first-child::before {
        margin-right: 0px
      }

      .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
      }

      .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
      }

      .one-column #content .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
      }

      .one-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
      }

      .main-products.product-grid .product-thumb {
        border-width: 0px
      }

      .main-products.product-grid .product-thumb .price {
        font-size: 14px
      }

      .main-products.product-grid .product-thumb .price-old {
        font-size: 13px
      }

      .main-products.product-grid .product-thumb .stepper {
        display: none
      }

      .main-products.product-grid.product-grid .product-thumb .extra-group {
        margin-top: initial
      }

      .main-products.product-grid.product-grid .product-thumb .buttons-wrapper {
        position: static;
        width: auto;
        overflow: visible;
        order: initial;
        margin-top: auto;
        transform: none
      }

      .main-products.product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none
      }

      .main-products.product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
        transform: none
      }
    }

    @media (max-width: 769px) {
      .main-products.product-list .product-thumb .rating {
        justify-content: flex-start
      }

      .main-products.product-list .product-thumb .rating-stars {
        margin-top: 0px
      }
    }

    @media (max-width: 760px) {
      .one-column #content .main-posts.post-grid .post-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
      }

      .one-column #content .main-posts.post-grid .post-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
      }

      .post-grid .post-thumb .description {
        display: none
      }

      .post-grid .post-thumb .button-group {
        display: none
      }

      .buttons>div {
        flex: 1
      }

      .buttons>div .btn {
        width: 100%
      }

      .buttons .pull-left {
        margin-right: 0
      }

      .buttons>div+div {
        padding-left: 10px
      }

      .buttons .pull-right:only-child {
        flex: 1
      }

      .buttons .pull-right:only-child .btn {
        width: 100%
      }

      .route-checkout-cart .buttons>div {
        width: 100%;
        flex-basis: auto
      }

      .route-checkout-cart .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
      }

      .route-checkout-cart .cart-panels .buttons>div {
        width: 100%;
        flex-basis: auto
      }

      .route-checkout-cart .cart-panels .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
      }

      .refine-categories .refine-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 3 * 10px) / 4 - 0.01px)
      }

      .refine-categories .refine-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 4 - 0.01px)
      }

      .one-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 3 * 10px) / 4 - 0.01px)
      }

      .one-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 4 - 0.01px)
      }

      .two-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 2 * 10px) / 3 - 0.01px)
      }

      .two-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 3 - 0.01px)
      }

      .section-payment {
        padding-top: 20px;
        padding-left: 0px;
        width: 100%
      }

      .section-shipping {
        width: 100%
      }

      .quick-checkout-wrapper .right .confirm-section .buttons>div {
        width: 100%;
        flex-basis: auto
      }

      .quick-checkout-wrapper .right .confirm-section .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
      }

      .route-product-search #content .buttons>div {
        width: 100%;
        flex-basis: auto
      }

      .route-product-search #content .buttons>div+div {
        padding-top: 10px;
        padding-left: 0px
      }

      .route-information-sitemap #content>.row>div+div {
        padding-left: 0px;
        border-width: 0;
        border-left-width: 0px
      }

      .route-information-sitemap #content>.row {
        flex-direction: column
      }

      .route-information-sitemap #content>.row>div {
        width: 100%
      }

      .product-info .product-left {
        width: 100%
      }

      .product-info .product-right {
        width: 100%;
        padding-left: 0px
      }

      .route-product-product:not(.popup) .product-info .product-left {
        padding-bottom: 20px
      }

      .grid-list .compare-btn {
        padding-left: 5px
      }

      .grid-list .links-text {
        display: none
      }

      .grid-list .compare-btn::before {
        margin-right: 0
      }

      .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
      }

      .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
      }

      .one-column #content .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
      }

      .one-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
      }

      .two-column #content .main-products.product-grid .product-layout.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 1 * 20px) / 2 - 0.01px)
      }

      .two-column #content .main-products.product-grid .product-layout:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 2 - 0.01px)
      }

      .main-products.product-grid .product-thumb .extra-group .btn+.btn .btn-text {
        display: none
      }

      .main-products.product-grid .product-thumb .extra-group .btn+.btn::before {
        display: inline-block
      }

      .main-products.product-grid .product-thumb .extra-group>div {
        padding: 10px
      }

      .main-products.product-list.product-list .product-layout .image {
        float: none;
        height: auto
      }

      .main-products.product-list .product-thumb .caption {
        padding-top: 20px;
        padding-left: 0px
      }
    }

    @media (max-width: 470px) {
      html:not(.popup) .page-title {
        font-size: 22px
      }

      .popup-login .popup-inner-body {
        height: 325px
      }

      .account-list>li {
        width: calc(100% / 2)
      }

      .refine-categories .refine-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 2 * 10px) / 3 - 0.01px)
      }

      .refine-categories .refine-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 3 - 0.01px)
      }

      .one-column #content .refine-categories .refine-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 2 * 10px) / 3 - 0.01px)
      }

      .one-column #content .refine-categories .refine-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 3 - 0.01px)
      }
    }

    @media (max-width: 370px) {
      .route-product-product:not(.popup) .product-info .button-group-page .btn-cart::before {
        display: inline-block
      }

      .route-product-product:not(.popup) .product-info .button-group-page .btn-cart .btn-text {
        display: none
      }

      .product-info .button-group-page .btn-cart::before {
        margin-right: 0px
      }
    }

    #cart>a>i::before {
      color: rgba(255, 255, 255, 1);
      left: -3px;
      top: -2px
    }

    #cart>a>i {
      background: rgba(60, 196, 114, 1);
      border-top-right-radius: 3px;
      width: 40px;
      height: 40px
    }

    #cart-items.count-badge {
      color: rgba(255, 255, 255, 1);
      background: #089A49;
      border-radius: 10px
    }

    #cart-items {
      transform: translateX(7px);
      margin-top: -7px;
      display: inline-flex;
      z-index: 1
    }

    #cart-total {
      display: flex;
      padding-right: 7px;
      padding-left: 40px;
      font-size: 14px;
      color: rgba(255, 255, 255, 1);
      font-weight: 700;
      order: 0
    }

    #cart {
      background: rgba(60, 196, 114, 1);
      border-top-left-radius: 3px
    }

    #cart-content {
      min-width: 400px
    }

    div.cart-content ul {
      background: rgba(255, 255, 255, 1);
      border-radius: 4px;
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    div.cart-content .cart-products tbody>tr>td {
      border-style: none !important;
      vertical-align: middle
    }

    #cart-content::before {
      margin-left: -5px;
      margin-top: -10px
    }

    div.cart-content .cart-products {
      max-height: 275px;
      overflow-y: auto
    }

    div.cart-content .cart-totals tbody td {
      background: rgba(238, 238, 238, 1);
      border-style: none !important
    }

    div.cart-content .cart-totals td {
      font-weight: 700
    }

    div.cart-content .cart-totals .td-total-text {
      font-weight: 700
    }

    div.cart-content .cart-buttons {
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      background: rgba(238, 238, 238, 1)
    }

    div.cart-content .btn-cart {
      display: inline-flex
    }

    div.cart-content .btn.btn-cart::before {
      margin-right: 5px
    }

    div.cart-content .btn-cart.btn {
      background: rgba(39, 124, 217, 1)
    }

    div.cart-content .btn-cart.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    div.cart-content .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    div.cart-content .btn-checkout {
      display: inline-flex
    }

    div.cart-content .btn.btn-checkout::after {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      margin-left: 3px
    }

    div.cart-content .btn-checkout.btn {
      background: rgba(60, 196, 114, 1)
    }

    div.cart-content .btn-checkout.btn:hover {
      background: #089A49 !important
    }

    div.cart-content .btn-checkout.btn.btn.disabled::after {
      font-size: 20px
    }

    div.cart-content .cart-buttons .btn {
      width: auto
    }

    .desktop-header-active #cart {
      margin-left: 30px
    }

    .desktop-header-active #cart>a {
      height: 45px
    }

    .desktop-header-active header {
      background: rgba(58, 71, 80, 1)
    }

    .desktop-header-active .header-lg .mid-bar {
      height: 100px
    }

    .desktop-header-active .header-default {
      height: 100px
    }

    .desktop-header-active .header-default::before {
      content: '';
      height: calc(100px / 3)
    }

    .desktop-header-active .header-sm .mid-bar {
      height: 60px
    }

    .info-blocks-wrapper {
      justify-content: flex-end
    }

    .language .dropdown-toggle .symbol {
      display: flex;
      border-radius: 0px
    }

    .language .dropdown-toggle .symbol+span {
      display: block;
      margin-left: 5px
    }

    .language .language-flag {
      display: inline-flex
    }

    .language .currency-symbol {
      display: inline-flex
    }

    .language .language-title-dropdown {
      display: inline-flex
    }

    .language .currency-title-dropdown {
      display: inline-flex
    }

    .language .currency-code-dropdown {
      display: none
    }

    .language .dropdown-toggle>span,
    .language .dropdown::after {
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .language .dropdown:hover button>span,
    .language .dropdown:hover::after {
      color: rgba(255, 255, 255, 1)
    }

    .currency .dropdown-toggle .symbol {
      display: flex;
      border-radius: 0px
    }

    .currency .dropdown-toggle .symbol+span {
      display: block;
      margin-left: 5px
    }

    .currency .language-flag {
      display: inline-flex
    }

    .currency .currency-symbol {
      display: inline-flex
    }

    .currency .language-title-dropdown {
      display: inline-flex
    }

    .currency .currency-title-dropdown {
      display: inline-flex
    }

    .currency .currency-code-dropdown {
      display: none
    }

    .currency .dropdown-toggle>span,
    .currency .dropdown::after {
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .currency .dropdown:hover button>span,
    .currency .dropdown:hover::after {
      color: rgba(255, 255, 255, 1)
    }

    .language-currency.top-menu .dropdown.drop-menu>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, -10px, 0)
    }

    .language-currency.top-menu .dropdown.drop-menu.animating>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, 0, 0)
    }

    .language-currency.top-menu .dropdown.drop-menu>.j-dropdown::before {
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu>li>a {
      flex-direction: row;
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(255, 255, 255, 1);
      padding: 6px;
      padding-right: 8px;
      padding-left: 8px
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .desktop .language-currency.top-menu .dropdown.dropdown .j-menu>li:hover>a,
    .language-currency.top-menu .dropdown.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1)
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu>li>a::before {
      color: rgba(109, 118, 125, 1);
      margin-right: 7px;
      font-size: 16px
    }

    .desktop .language-currency.top-menu .dropdown.dropdown .j-menu>li:hover>a::before,
    .language-currency.top-menu .dropdown.dropdown .j-menu>li.active>a::before {
      color: rgba(48, 56, 65, 1)
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu>li+li {
      margin-left: 0px
    }

    .language-currency.top-menu .dropdown.dropdown .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .language-currency.top-menu .dropdown.dropdown:not(.mega-menu) .j-dropdown>.j-menu {
      padding: 5px;
      background: rgba(255, 255, 255, 1)
    }

    .language-currency.top-menu .dropdown.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 100px
    }

    .language-currency.top-menu .dropdown.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2);
      border-radius: 3px
    }

    .language-currency.top-menu .dropdown.dropdown .j-dropdown::before {
      display: block;
      margin-top: -10px
    }

    .desktop-header-active .header .top-bar .language-currency {
      margin-left: auto
    }

    .desktop-header-active .header .top-bar {
      justify-content: space-between;
      height: 35px
    }

    .desktop-header-active .header .desktop-logo-wrapper {
      width: 220px
    }

    .desktop-header-active .header-classic .mid-bar .desktop-logo-wrapper {
      width: 220px;
      order: 0;
      margin: 0
    }

    .desktop-header-active .header #logo a {
      justify-content: flex-start
    }

    .desktop-header-active .header-classic .mid-bar .desktop-search-wrapper {
      order: 2;
      flex-grow: 1
    }

    .desktop-logo-wrapper {
      width: auto
    }

    .desktop-search-wrapper {
      width: auto;
      margin-right: 30px;
      margin-left: 30px
    }

    .classic-cart-wrapper {
      width: auto
    }

    .desktop-header-active header:not(.header-slim) .header-compact .mid-bar {
      justify-content: flex-start
    }

    .desktop-header-active header:not(.header-slim) .header-compact .mid-bar>div {
      max-width: none
    }

    .desktop-header-active header:not(.header-slim) .header-compact .header-cart-group {
      margin-left: auto
    }

    .desktop-header-active header:not(.header-slim) .header-compact .mid-bar .desktop-logo-wrapper {
      position: relative;
      left: 0;
      transform: translateX(0)
    }

    .desktop-main-menu-wrapper .first-dropdown::before {
      display: none !important
    }

    .main-menu>.j-menu .dropdown>a>.count-badge {
      margin-right: 5px
    }

    .main-menu>.j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 0
    }

    .main-menu>.j-menu .dropdown>a::after {
      display: none
    }

    .main-menu>.j-menu>li>a {
      font-size: 14px;
      color: rgba(255, 255, 255, 1);
      padding: 12px;
      padding-bottom: 15px
    }

    .desktop .main-menu>.j-menu>li:hover>a,
    .main-menu>.j-menu>li.active>a {
      color: rgba(60, 196, 114, 1)
    }

    .main-menu>.j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .main-menu>.j-menu>li>a::before {
      margin-right: 5px;
      font-size: 20px
    }

    .main-menu>.j-menu a .count-badge {
      display: inline-flex;
      position: relative
    }

    #main-menu-2>.j-menu>li>a {
      flex-direction: column;
      font-size: 10px;
      color: rgba(238, 238, 238, 1);
      padding: 10px
    }

    #main-menu-2>.j-menu .dropdown>a>.count-badge {
      margin-right: 5px
    }

    #main-menu-2>.j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 0
    }

    #main-menu-2>.j-menu .dropdown>a::after {
      display: none
    }

    .desktop #main-menu-2>.j-menu>li:hover>a,
    #main-menu-2>.j-menu>li.active>a {
      color: rgba(255, 255, 255, 1)
    }

    #main-menu-2>.j-menu .links-text {
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .desktop #main-menu-2>.j-menu>li:hover>a::before,
    #main-menu-2>.j-menu>li.active>a::before {
      color: rgba(60, 196, 114, 1)
    }

    #main-menu-2>.j-menu>li>a::before {
      margin: 0px;
      font-size: 24px
    }

    #main-menu-2>.j-menu a .count-badge {
      display: inline-flex;
      position: absolute;
      margin: 0;
      transform: translateX(17px);
      margin-top: -17px
    }

    .main-menu>ul>.drop-menu>.j-dropdown {
      left: 0;
      right: auto;
      transform: translate3d(0, -10px, 0)
    }

    .main-menu>ul>.drop-menu.animating>.j-dropdown {
      left: 0;
      right: auto;
      transform: none
    }

    .main-menu>ul>.drop-menu>.j-dropdown::before {
      left: 10px;
      right: auto;
      transform: translateX(0)
    }

    .main-menu>ul>.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .main-menu>ul>.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .main-menu>ul>.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .main-menu>ul>.dropdown .j-menu>li>a {
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      background: rgba(255, 255, 255, 1);
      padding: 10px
    }

    .desktop .main-menu>ul>.dropdown .j-menu>li:hover>a,
    .main-menu>ul>.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1);
      background: rgba(245, 245, 245, 1)
    }

    .main-menu>ul>.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .main-menu>ul>.dropdown .j-menu>li>a::before {
      margin-right: 7px;
      min-width: 20px;
      font-size: 18px
    }

    .main-menu>ul>.dropdown .j-menu a .count-badge {
      display: inline-flex;
      position: relative
    }

    .main-menu>ul>.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 200px
    }

    .main-menu>ul>.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2)
    }

    .main-menu>ul>.dropdown .j-dropdown::before {
      display: block;
      border-bottom-color: rgba(255, 255, 255, 1);
      margin-top: -10px
    }

    #main-menu-2>ul>.drop-menu>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, -10px, 0)
    }

    #main-menu-2>ul>.drop-menu.animating>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, 0, 0)
    }

    #main-menu-2>ul>.drop-menu>.j-dropdown::before {
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    #main-menu-2>ul>.dropdown .j-menu>li>a {
      flex-direction: row;
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(255, 255, 255, 1);
      padding: 6px;
      padding-right: 8px;
      padding-left: 8px
    }

    #main-menu-2>ul>.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    #main-menu-2>ul>.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    #main-menu-2>ul>.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .desktop #main-menu-2>ul>.dropdown .j-menu>li:hover>a,
    #main-menu-2>ul>.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1)
    }

    #main-menu-2>ul>.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    #main-menu-2>ul>.dropdown .j-menu>li>a::before {
      color: rgba(109, 118, 125, 1);
      margin-right: 7px;
      font-size: 16px
    }

    .desktop #main-menu-2>ul>.dropdown .j-menu>li:hover>a::before,
    #main-menu-2>ul>.dropdown .j-menu>li.active>a::before {
      color: rgba(48, 56, 65, 1)
    }

    #main-menu-2>ul>.dropdown .j-menu>li+li {
      margin-left: 0px
    }

    #main-menu-2>ul>.dropdown .j-menu a .count-badge {
      display: none;
      position: relative
    }

    #main-menu-2>ul>.dropdown:not(.mega-menu) .j-dropdown>.j-menu {
      padding: 5px;
      background: rgba(255, 255, 255, 1)
    }

    #main-menu-2>ul>.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 100px
    }

    #main-menu-2>ul>.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2);
      border-radius: 3px
    }

    #main-menu-2>ul>.dropdown .j-dropdown::before {
      display: block;
      margin-top: -10px
    }

    .mega-menu-content {
      background: rgba(255, 255, 255, 1)
    }

    .j-dropdown>.mega-menu-content {
      box-shadow: 30px 25px 50px -10px rgba(0, 0, 0, 0.15);
      max-height: 500px !important;
      overflow-y: auto
    }

    .desktop-header-active .header-compact .desktop-main-menu-wrapper {
      height: auto
    }

    .header-lg .desktop-main-menu-wrapper .main-menu .main-menu-item>a {
      height: auto
    }

    .desktop-header-active .header-compact .desktop-logo-wrapper {
      order: 0
    }

    .desktop-main-menu-wrapper #main-menu {
      margin-left: 0;
      margin-right: auto
    }

    .desktop-main-menu-wrapper .desktop-cart-wrapper {
      margin-left: 0
    }

    .mid-bar #main-menu-2 {
      order: 5
    }

    .desktop-header-active .header .menu-stretch .main-menu-item>a .links-text {
      text-align: center
    }

    .desktop-main-menu-wrapper {
      height: 45px;
      top: -45px
    }

    .desktop-main-menu-wrapper::before {
      height: 45px
    }

    .desktop-main-menu-wrapper .main-menu-item>a {
      padding: 0 15px
    }

    .header-compact .desktop-main-menu-wrapper #main-menu {
      margin-left: initial;
      margin-right: auto
    }

    .desktop-header-active .menu-trigger a::before {
      content: '\f0c9' !important;
      font-family: icomoon !important
    }

    .header-search {
      border-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0);
      border-radius: 3px
    }

    .desktop .header-search.focused,
    .header-search.focused:hover {
      border-color: #089A49
    }

    .header-search>.search-button::before {
      content: '\ebaf' !important;
      font-family: icomoon !important;
      font-size: 24px;
      color: rgba(245, 245, 245, 1)
    }

    .header-search .search-button {
      background: #089A49;
      min-width: 45px
    }

    .desktop .header-search .search-button:hover {
      background: rgba(60, 196, 114, 1)
    }

    .search-categories {
      background: #089A49
    }

    .desktop .search-categories:hover {
      background: rgba(60, 196, 114, 1)
    }

    .search-categories-button,
    .search-categories-button>a {
      color: rgba(238, 238, 238, 1)
    }

    .search-categories-button::after {
      content: '\e5db' !important;
      font-family: icomoon !important;
      color: rgba(238, 238, 238, 1)
    }

    .search-categories.drop-menu>.j-dropdown {
      left: 0;
      right: auto;
      transform: translate3d(0, -10px, 0)
    }

    .search-categories.drop-menu.animating>.j-dropdown {
      left: 0;
      right: auto;
      transform: none
    }

    .search-categories.drop-menu>.j-dropdown::before {
      left: 10px;
      right: auto;
      transform: translateX(0)
    }

    .search-categories.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .search-categories.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .search-categories.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .search-categories.dropdown .j-menu>li>a {
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      background: rgba(255, 255, 255, 1);
      padding: 10px
    }

    .desktop .search-categories.dropdown .j-menu>li:hover>a,
    .search-categories.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1);
      background: rgba(245, 245, 245, 1)
    }

    .search-categories.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .search-categories.dropdown .j-menu>li>a::before {
      margin-right: 7px;
      min-width: 20px;
      font-size: 18px
    }

    .search-categories.dropdown .j-menu a .count-badge {
      display: inline-flex;
      position: relative
    }

    .search-categories.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 200px
    }

    .search-categories.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2)
    }

    .search-categories.dropdown .j-dropdown::before {
      display: block;
      border-bottom-color: rgba(255, 255, 255, 1);
      margin-top: -10px
    }

    .search-categories .j-menu::before {
      margin-top: -10px
    }

    .tt-menu>div>div>a:hover,
    .tt-cursor {
      background: rgba(245, 245, 245, 1)
    }

    .tt-menu>div {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2);
      border-radius: 3px
    }

    .tt-menu:not(.tt-empty)::before {
      display: block;
      margin-left: -4px;
      margin-top: -10px;
      left: 100%;
      transform: translateX(-150%)
    }

    .search-result .product-name {
      font-weight: 700
    }

    .search-result.view-more a {
      color: rgba(255, 255, 255, 1);
      background: #089A49
    }

    .search-result>a>span {
      justify-content: flex-start
    }

    .search-result.view-more a:hover {
      background: rgba(53, 66, 174, 1)
    }

    .search-result.view-more a::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .desktop-header-active .header-default .desktop-search-wrapper {
      order: 1;
      flex-grow: 0
    }

    .desktop-header-active .header-default .top-menu-group {
      order: -1;
      flex-grow: 1
    }

    .desktop-header-active .header-search .search-button {
      order: 5;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: inherit;
      border-bottom-right-radius: inherit
    }

    .desktop-header-active .header-search>input:first-child {
      border-top-left-radius: inherit;
      border-bottom-left-radius: inherit;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .desktop-header-active .header-search>input {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .desktop-header-active .header-search>span:first-child {
      border-top-left-radius: inherit;
      border-bottom-left-radius: inherit;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .desktop-header-active .header-search>span {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .desktop-header-active .search-categories {
      border-top-left-radius: inherit;
      border-bottom-left-radius: inherit;
      border-top-right-radius: 0;
      border-bottom-right-radius: 0
    }

    .desktop-header-active .mini-search .header-search input {
      min-width: 150px
    }

    .desktop-header-active .header .full-search #search {
      height: 38px
    }

    .mini-search .search-trigger::before {
      content: '\f002' !important;
      font-family: icomoon !important
    }

    .mini-search #search>.dropdown-menu::before {
      display: block;
      margin-top: -10px
    }

    .secondary-menu .top-menu .j-menu>li>a {
      flex-direction: row;
      color: rgba(109, 118, 125, 1);
      border-radius: 3px !important;
      background: rgba(255, 255, 255, 1);
      padding: 9px
    }

    .secondary-menu .top-menu .j-menu .dropdown>a>.count-badge {
      margin-right: 5px
    }

    .secondary-menu .top-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 0
    }

    .secondary-menu .top-menu .j-menu .dropdown>a::after {
      display: none
    }

    .desktop .secondary-menu .top-menu .j-menu>li:hover>a,
    .secondary-menu .top-menu .j-menu>li.active>a {
      color: rgba(255, 255, 255, 1);
      background: rgba(60, 196, 114, 1)
    }

    .secondary-menu .top-menu .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .secondary-menu .top-menu .j-menu>li>a>span>s {
      color: rgba(221, 221, 221, 1)
    }

    .secondary-menu .top-menu .j-menu>li>a::before {
      color: #089A49;
      margin-right: 5px
    }

    .secondary-menu .top-menu .j-menu>li+li {
      margin-left: 10px
    }

    .secondary-menu .top-menu .j-menu li .count-badge {
      color: rgba(255, 255, 255, 1);
      background: #089A49;
      border-radius: 10px
    }

    .secondary-menu .top-menu .j-menu a .count-badge {
      display: inline-flex;
      position: absolute;
      margin: 0;
      transform: translateX(18px);
      margin-top: -15px
    }

    .secondary-menu .menu-item.drop-menu>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, -10px, 0)
    }

    .secondary-menu .menu-item.drop-menu.animating>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, 0, 0)
    }

    .secondary-menu .menu-item.drop-menu>.j-dropdown::before {
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .secondary-menu .menu-item.dropdown .j-menu>li>a {
      flex-direction: row;
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(255, 255, 255, 1);
      padding: 6px;
      padding-right: 8px;
      padding-left: 8px
    }

    .secondary-menu .menu-item.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .secondary-menu .menu-item.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .secondary-menu .menu-item.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .desktop .secondary-menu .menu-item.dropdown .j-menu>li:hover>a,
    .secondary-menu .menu-item.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1)
    }

    .secondary-menu .menu-item.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .secondary-menu .menu-item.dropdown .j-menu>li>a::before {
      color: rgba(109, 118, 125, 1);
      margin-right: 7px;
      font-size: 16px
    }

    .desktop .secondary-menu .menu-item.dropdown .j-menu>li:hover>a::before,
    .secondary-menu .menu-item.dropdown .j-menu>li.active>a::before {
      color: rgba(48, 56, 65, 1)
    }

    .secondary-menu .menu-item.dropdown .j-menu>li+li {
      margin-left: 0px
    }

    .secondary-menu .menu-item.dropdown .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .secondary-menu .menu-item.dropdown:not(.mega-menu) .j-dropdown>.j-menu {
      padding: 5px;
      background: rgba(255, 255, 255, 1)
    }

    .secondary-menu .menu-item.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 100px
    }

    .secondary-menu .menu-item.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2);
      border-radius: 3px
    }

    .secondary-menu .menu-item.dropdown .j-dropdown::before {
      display: block;
      margin-top: -10px
    }

    .mid-bar .secondary-menu {
      justify-content: flex-end
    }

    .desktop-header-active .is-sticky .header .desktop-main-menu-wrapper::before {
      width: 100vw;
      margin-left: -50vw;
      left: 50%;
      ;
      background: rgba(58, 71, 80, 1);
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .desktop-header-active .is-sticky .header .desktop-main-menu-wrapper {
      height: 45px
    }

    .desktop-header-active header::before {
      content: '';
      height: 35px
    }

    header::before {
      background: #089A49
    }

    .top-menu .j-menu>li>a {
      flex-direction: row;
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      font-weight: 700;
      text-transform: uppercase;
      padding: 5px
    }

    .top-menu .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .top-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .top-menu .j-menu .dropdown>a::after {
      display: block
    }

    .desktop .top-menu .j-menu>li:hover>a,
    .top-menu .j-menu>li.active>a {
      color: rgba(255, 255, 255, 1)
    }

    .top-menu .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .top-menu .j-menu>li>a::before {
      margin-right: 5px
    }

    .top-menu .j-menu>li+li {
      margin-left: 5px
    }

    .top-menu .j-menu a .count-badge {
      display: inline-flex;
      position: relative
    }

    .top-menu .dropdown.drop-menu>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, -10px, 0)
    }

    .top-menu .dropdown.drop-menu.animating>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, 0, 0)
    }

    .top-menu .dropdown.drop-menu>.j-dropdown::before {
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .top-menu .dropdown.dropdown .j-menu>li>a {
      flex-direction: row;
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(255, 255, 255, 1);
      padding: 6px;
      padding-right: 8px;
      padding-left: 8px
    }

    .top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .top-menu .dropdown.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .top-menu .dropdown.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .desktop .top-menu .dropdown.dropdown .j-menu>li:hover>a,
    .top-menu .dropdown.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1)
    }

    .top-menu .dropdown.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .top-menu .dropdown.dropdown .j-menu>li>a::before {
      color: rgba(109, 118, 125, 1);
      margin-right: 7px;
      font-size: 16px
    }

    .desktop .top-menu .dropdown.dropdown .j-menu>li:hover>a::before,
    .top-menu .dropdown.dropdown .j-menu>li.active>a::before {
      color: rgba(48, 56, 65, 1)
    }

    .top-menu .dropdown.dropdown .j-menu>li+li {
      margin-left: 0px
    }

    .top-menu .dropdown.dropdown .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .top-menu .dropdown.dropdown:not(.mega-menu) .j-dropdown>.j-menu {
      padding: 5px;
      background: rgba(255, 255, 255, 1)
    }

    .top-menu .dropdown.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 100px
    }

    .top-menu .dropdown.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2);
      border-radius: 3px
    }

    .top-menu .dropdown.dropdown .j-dropdown::before {
      display: block;
      margin-top: -10px
    }

    .top-bar>div:first-child {
      width: 50%
    }

    .top-bar>div:first-child>ul>li:last-child {
      position: absolute;
      right: 0;
      transform: translateX(50%)
    }

    @media (max-width: 1440px) {
      .desktop-header-active .header .mid-bar {
        padding-right: 20px;
        padding-left: 20px
      }

      .secondary-menu .top-menu .j-menu>li>a {
        padding-right: 10px
      }
    }

    @media (max-width: 1024px) {
      #cart-items {
        transform: translateX(-7px);
        margin-top: 9px
      }
    }

    .mobile-header-active #cart>a>i::before {
      font-size: 26px
    }

    .mobile-cart-wrapper #cart>a>i {
      background: none
    }

    .mobile-header-active #cart>a>i {
      width: 60px;
      height: 35px
    }

    .mobile-header-active .mobile-wrapper-header>span {
      color: rgba(255, 255, 255, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .mobile-header-active .mobile-wrapper-header {
      background: #033553;
      border-width: 0;
      border-bottom-width: 1px;
      border-color: rgba(221, 221, 221, 1);
      height: 45px
    }

    .mobile-header-active .mobile-wrapper-header>a::before {
      color: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .mobile-wrapper-header>a {
      width: 45px
    }

    .mobile-header-active .mobile-cart-content-wrapper {
      padding-bottom: 45px
    }

    .mobile-header-active .mobile-filter-wrapper {
      padding-bottom: 45px
    }

    .mobile-header-active .mobile-main-menu-wrapper {
      padding-bottom: 45px
    }

    .mobile-header-active .mobile-filter-container-open .journal-loading-overlay {
      top: 45px
    }

    .mobile-header-active.mobile-header-active .mobile-container {
      width: 85%
    }

    .mobile-header-active.desktop-header-active .mobile-main-menu-container {
      width: 300px
    }

    .mobile-header-active .mobile-main-menu-container {
      background: rgba(255, 255, 255, 1);
      background-image: linear-gradient(to bottom, #fff, #dee6f9);
      ;
      box-shadow: 30px 25px 50px -10px rgba(0, 0, 0, 0.15)
    }

    .mobile-header-active .mobile-main-menu-wrapper .main-menu {
      padding: 10px
    }

    .mobile-header-active .mobile-cart-content-container {
      background: rgba(245, 245, 245, 1)
    }

    .mobile-header-active.mobile-overlay .site-wrapper::before {
      background: rgba(0, 0, 0, 0.5)
    }

    .mobile-header-active #cart-items.count-badge {
      display: inline-flex
    }

    .mobile-header-active .mobile-bar {
      background: rgba(58, 71, 80, 1)
    }

    .mobile-header-active .mobile-1 .mobile-bar {
      height: 60px
    }

    .mobile-header-active .mobile-2 .mobile-bar {
      height: 60px
    }

    .mobile-header-active .mobile-3 .mobile-logo-wrapper {
      height: 60px
    }

    .mobile-header-active .mobile-bar-sticky {
      box-shadow: 0 5px 60px -10px rgba(0, 0, 0, 0.3)
    }

    .mobile-header-active .language .dropdown-toggle .symbol {
      display: flex;
      border-radius: 0px
    }

    .mobile-header-active .language .dropdown-toggle .symbol+span {
      display: block;
      margin-left: 5px
    }

    .mobile-header-active .language .language-flag {
      display: inline-flex
    }

    .mobile-header-active .language .currency-symbol {
      display: inline-flex
    }

    .mobile-header-active .language .language-title-dropdown {
      display: inline-flex
    }

    .mobile-header-active .language .currency-title-dropdown {
      display: inline-flex
    }

    .mobile-header-active .language .currency-code-dropdown {
      display: none
    }

    .mobile-header-active .language .dropdown-toggle>span,
    .mobile-header-active .language .dropdown::after {
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .mobile-header-active .language .dropdown:hover button>span,
    .mobile-header-active .language .dropdown:hover::after {
      color: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .currency .dropdown-toggle .symbol {
      display: flex;
      border-radius: 0px
    }

    .mobile-header-active .currency .dropdown-toggle .symbol+span {
      display: block;
      margin-left: 5px
    }

    .mobile-header-active .currency .language-flag {
      display: inline-flex
    }

    .mobile-header-active .currency .currency-symbol {
      display: inline-flex
    }

    .mobile-header-active .currency .language-title-dropdown {
      display: inline-flex
    }

    .mobile-header-active .currency .currency-title-dropdown {
      display: inline-flex
    }

    .mobile-header-active .currency .currency-code-dropdown {
      display: none
    }

    .mobile-header-active .currency .dropdown-toggle>span,
    .mobile-header-active .currency .dropdown::after {
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .mobile-header-active .currency .dropdown:hover button>span,
    .mobile-header-active .currency .dropdown:hover::after {
      color: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .language-currency.top-menu.drop-menu>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, -10px, 0)
    }

    .mobile-header-active .language-currency.top-menu.drop-menu.animating>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, 0, 0)
    }

    .mobile-header-active .language-currency.top-menu.drop-menu>.j-dropdown::before {
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li>a {
      flex-direction: row;
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(255, 255, 255, 1);
      padding: 6px;
      padding-right: 8px;
      padding-left: 8px
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .desktop .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li:hover>a,
    .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1)
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li>a::before {
      color: rgba(109, 118, 125, 1);
      margin-right: 7px;
      font-size: 16px
    }

    .desktop .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li:hover>a::before,
    .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li.active>a::before {
      color: rgba(48, 56, 65, 1)
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu>li+li {
      margin-left: 0px
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .mobile-header-active .language-currency.top-menu.dropdown:not(.mega-menu) .j-dropdown>.j-menu {
      padding: 5px;
      background: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .language-currency.top-menu.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 100px
    }

    .mobile-header-active .language-currency.top-menu.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2);
      border-radius: 3px
    }

    .mobile-header-active .language-currency.top-menu.dropdown .j-dropdown::before {
      display: block;
      margin-top: -10px
    }

    .mobile-header-active #logo a {
      padding: 8px
    }

    .mobile-header-active .menu-trigger::before {
      content: '\eb7e' !important;
      font-family: icomoon !important;
      font-size: 28px;
      color: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .menu-trigger {
      width: 60px;
      height: 35px
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .dropdown>a>.count-badge {
      margin-right: 5px
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 0
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .dropdown>a::after {
      display: none
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu>li>a {
      font-size: 13px;
      color: rgba(109, 118, 125, 1);
      font-weight: 700;
      text-transform: uppercase;
      background: none;
      padding: 8px
    }

    .desktop .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu>li:hover>a,
    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu>li.active>a {
      color: #089A49
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu>li.open>a {
      color: #089A49
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu>li>a::before {
      margin-right: 8px
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .mobile-main-menu-wrapper .main-menu .open-menu i::before {
      content: '\eba1' !important;
      font-family: icomoon !important;
      font-size: 22px;
      left: 5px
    }

    .mobile-main-menu-wrapper .main-menu .open-menu[aria-expanded='true'] i::before {
      content: '\eb86' !important;
      font-family: icomoon !important;
      font-size: 22px;
      left: 5px
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .dropdown>a>.count-badge {
      margin-right: 5px
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 0
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .dropdown>a::after {
      display: none
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu>li>a {
      font-size: 13px;
      color: rgba(109, 118, 125, 1);
      font-weight: 700;
      text-transform: uppercase;
      background: none;
      padding: 8px
    }

    .desktop .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu>li:hover>a,
    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu>li.active>a {
      color: #089A49
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu>li.open>a {
      color: #089A49
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu>li>a::before {
      margin-right: 8px
    }

    .mobile-main-menu-wrapper .main-menu.accordion-menu .j-menu .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>a {
      padding-left: 5px !important
    }

    .mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>a {
      padding-left: 12px !important
    }

    .mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>div>.j-menu>li>a {
      padding-left: 20px !important
    }

    .mobile-main-menu-wrapper .main-menu .j-menu>li>div .j-menu>li>div>.j-menu>li>div>.j-menu>li>div>.j-menu>li>a {
      padding-left: 28px !important
    }

    .mobile-custom-menu-1::before {
      content: '\eaa7' !important;
      font-family: icomoon !important;
      font-size: 22px;
      color: rgba(255, 255, 255, 1)
    }

    .mobile-custom-menu {
      width: 25px
    }

    .mobile-custom-menu-2::before {
      content: '\eab6' !important;
      font-family: icomoon !important;
      font-size: 22px;
      color: rgba(255, 255, 255, 1)
    }

    .mobile-custom-menu-1 .count-badge {
      display: inline-flex
    }

    .mobile-custom-menu-2 .count-badge {
      display: inline-flex
    }

    .mobile-header-active .mini-search #search .search-trigger {
      width: 50px
    }

    .mobile-header-active .mobile-1 #search .header-search {
      padding: 5px
    }

    .mobile-header-active .mobile-search-group {
      padding: 5px
    }

    .mobile-header-active .mobile-3 .mobile-search-wrapper {
      padding: 0 5px
    }

    .mobile-header-active #search .header-search {
      height: 35px
    }

    .mobile-header-active .mobile-search-group,
    .mobile-header-active .mobile-1 .header-search {
      background: rgba(58, 71, 80, 1)
    }

    .mobile-header-active .mobile-1 #search>.dropdown-menu::before {
      display: block;
      margin-top: -10px
    }

    .mobile-header-active .mobile-header .mobile-top-bar {
      display: flex;
      height: 45px;
      padding-right: 5px;
      padding-left: 5px;
      background: #089A49;
      justify-content: space-between
    }

    .mobile-header-active .top-menu .j-menu>li>a {
      flex-direction: row;
      font-size: 12px;
      color: rgba(238, 238, 238, 1);
      font-weight: 700;
      text-transform: uppercase;
      padding: 5px
    }

    .mobile-header-active .top-menu .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .mobile-header-active .top-menu .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .mobile-header-active .top-menu .j-menu .dropdown>a::after {
      display: block
    }

    .desktop .mobile-header-active .top-menu .j-menu>li:hover>a,
    .mobile-header-active .top-menu .j-menu>li.active>a {
      color: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .top-menu .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .mobile-header-active .top-menu .j-menu>li>a::before {
      margin-right: 5px
    }

    .mobile-header-active .top-menu .j-menu>li+li {
      margin-left: 5px
    }

    .mobile-header-active .top-menu .j-menu a .count-badge {
      display: inline-flex;
      position: relative
    }

    .mobile-header-active .top-menu.drop-menu>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, -10px, 0)
    }

    .mobile-header-active .top-menu.drop-menu.animating>.j-dropdown {
      left: 50%;
      right: auto;
      transform: translate3d(-50%, 0, 0)
    }

    .mobile-header-active .top-menu.drop-menu>.j-dropdown::before {
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .mobile-header-active .top-menu.dropdown .j-menu>li>a {
      flex-direction: row;
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(255, 255, 255, 1);
      padding: 6px;
      padding-right: 8px;
      padding-left: 8px
    }

    .mobile-header-active .top-menu.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .mobile-header-active .top-menu.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .mobile-header-active .top-menu.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .desktop .mobile-header-active .top-menu.dropdown .j-menu>li:hover>a,
    .mobile-header-active .top-menu.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1)
    }

    .mobile-header-active .top-menu.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .mobile-header-active .top-menu.dropdown .j-menu>li>a::before {
      color: rgba(109, 118, 125, 1);
      margin-right: 7px;
      font-size: 16px
    }

    .desktop .mobile-header-active .top-menu.dropdown .j-menu>li:hover>a::before,
    .mobile-header-active .top-menu.dropdown .j-menu>li.active>a::before {
      color: rgba(48, 56, 65, 1)
    }

    .mobile-header-active .top-menu.dropdown .j-menu>li+li {
      margin-left: 0px
    }

    .mobile-header-active .top-menu.dropdown .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .mobile-header-active .top-menu.dropdown:not(.mega-menu) .j-dropdown>.j-menu {
      padding: 5px;
      background: rgba(255, 255, 255, 1)
    }

    .mobile-header-active .top-menu.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 100px
    }

    .mobile-header-active .top-menu.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2);
      border-radius: 3px
    }

    .mobile-header-active .top-menu.dropdown .j-dropdown::before {
      display: block;
      margin-top: -10px
    }

    /*No top bar not over*/

    /*No top bar over*/


    /*Top bar not over*/

    /*Top bar over*/

    /*Title before breadcrumbs*/



    /*Shipping payment visibility*/

    /*Site overlay offset*/
    @media only screen and (max-width: 1400px) {
      .desktop-main-menu-wrapper .main-menu>.j-menu>.first-dropdown::before {
        transform: none !important;
      }
    }


    .product-label-default.product-label-233 {
      display: flex;
      margin-top: 5px;
      margin-right: 5px;
      position: relative;
      top: 0;
      right: 0;
      bottom: initial;
      left: initial;
      justify-content: flex-end
    }

    .product-label-diagonal.product-label-233 {
      display: block
    }

    .product-label-diagonal.product-label-233>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-233 b::before {
      content: '\e932' !important;
      font-family: icomoon !important;
      font-size: 14px;
      margin-right: 3px
    }

    .product-info .product-label-diagonal.product-label-233>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-default.product-label-29 {
      display: flex;
      margin-top: 5px;
      margin-right: 5px;
      position: relative;
      top: 0;
      right: 0;
      bottom: initial;
      left: initial;
      justify-content: flex-end
    }

    .product-label-diagonal.product-label-29 {
      display: block
    }

    .product-label-diagonal.product-label-29>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-29 b::before {
      content: '\e031' !important;
      font-family: icomoon !important;
      font-size: 15px;
      margin-right: 4px
    }

    .product-label-29 b {
      background: rgba(39, 124, 217, 1)
    }

    .product-info .product-label-diagonal.product-label-29>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-default.product-label-30 {
      display: flex;
      position: relative;
      top: 0;
      right: 0;
      bottom: initial;
      left: initial;
      justify-content: flex-end
    }

    .product-label-diagonal.product-label-30 {
      display: block;
      margin: 15px
    }

    .product-label-diagonal.product-label-30>b {
      transform: scale(calc(10 / 10))
    }

    .product-info .product-label-diagonal.product-label-30>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-default.product-label-31 {
      display: flex;
      margin-top: 5px;
      margin-right: 5px;
      position: relative;
      top: 0;
      right: 0;
      bottom: initial;
      left: initial;
      justify-content: flex-end
    }

    .product-label-diagonal.product-label-31 {
      display: block
    }

    .product-label-diagonal.product-label-31>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-31 b::before {
      content: '\e99a' !important;
      font-family: icomoon !important;
      font-size: 16px;
      color: rgba(235, 102, 38, 1);
      margin-right: 4px
    }

    .product-label-31 b {
      color: rgba(48, 56, 65, 1);
      background: rgba(254, 225, 91, 1)
    }

    .product-info .product-label-diagonal.product-label-31>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-default.product-label-133 {
      display: flex;
      position: relative;
      top: 0;
      right: 0;
      bottom: initial;
      left: initial;
      justify-content: flex-end
    }

    .product-label-diagonal.product-label-133 {
      display: block
    }

    .product-label-diagonal.product-label-133>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-133 b {
      background: rgba(60, 196, 114, 1)
    }

    .product-info .product-label-diagonal.product-label-133>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-default.product-label-146 {
      display: flex;
      position: relative;
      top: 0;
      right: 0;
      bottom: initial;
      left: initial;
      justify-content: flex-end
    }

    .product-label-diagonal.product-label-146 {
      display: block;
      margin: 18px
    }

    .product-label-diagonal.product-label-146>b {
      transform: scale(calc(10 / 10))
    }

    .product-label-146 b {
      background: rgba(53, 66, 174, 1)
    }

    .product-info .product-label-diagonal.product-label-146>b {
      transform: scale(calc(10 / 10))
    }

    .btn-extra-46::before {
      content: '\eaaf' !important;
      font-family: icomoon !important
    }

    .btn-extra-93::before {
      content: '\eb79' !important;
      font-family: icomoon !important
    }

    .product-blocks-251 {
      order: 3
    }

    #content .product-blocks-251 {
      padding-top: 10px;
      padding-bottom: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    #content .product-blocks-58 {
      margin-bottom: 30px
    }

    #content .product-blocks-247 {
      background: rgba(218, 240, 216, 1);
      padding: 15px;
      margin-bottom: 20px
    }

    #content .product-blocks-248 {
      background: rgba(255, 251, 235, 1);
      padding: 15px;
      margin-bottom: 20px
    }

    .product-blocks-267 {
      order: 100
    }

    .product-blocks-251 {
      order: 3
    }

    #content .product-blocks-251 {
      padding-top: 10px;
      padding-bottom: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .grid-row-251-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .grid-col-251-1-1 {
      width: 50%;
      padding-right: 5px
    }

    .grid-col-251-1-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 470px) {
      .grid-col-251-1-1 {
        width: 100%;
        padding-right: 0px;
        padding-bottom: 10px
      }
    }

    .grid-col-251-1-2 {
      width: 50%;
      padding-left: 5px
    }

    .grid-col-251-1-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 470px) {
      .grid-col-251-1-2 {
        width: 100%;
        padding-left: 0px
      }
    }

    .module-button-252 .btn {
      transform: scale(calc(100 / 100));
      transform-origin: center;
      width: 100%;
      background: rgba(109, 118, 125, 1);
      border-width: 0px
    }

    .module-button-252 {
      display: flex;
      justify-content: flex-start
    }

    .module-button-252 .btn:hover {
      background: rgba(48, 56, 65, 1) !important
    }

    .module-button-252 .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-button-252 .btn::before {
      content: '\eb79' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .module-button-253 .btn {
      transform: scale(calc(100 / 100));
      transform-origin: center;
      width: 100%;
      background: rgba(109, 118, 125, 1);
      border-width: 0px
    }

    .module-button-253 {
      display: flex;
      justify-content: flex-start
    }

    .module-button-253 .btn:hover {
      background: rgba(48, 56, 65, 1) !important
    }

    .module-button-253 .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-button-253 .btn::before {
      content: '\e3e2' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    #content .product-blocks-58 {
      margin-bottom: 30px
    }

    .grid-row-58-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .grid-col-58-1-1 {
      width: 100%
    }

    .grid-col-58-1-1 .grid-items {
      justify-content: center
    }

    .module-blocks-57.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .module-blocks-57.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-blocks-57.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .one-column #content .module-blocks-57.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-blocks-57.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .module-blocks-57.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-blocks-57.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .module-blocks-57.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-blocks-57 .block-title {
      order: -2
    }

    .module-blocks-57 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: flex-start;
      align-items: flex-start
    }

    .module-blocks-57 .block-header img {
      display: flex
    }

    .module-blocks-57 .block-wrapper {
      display: flex
    }

    .module-blocks-57 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-57 .block-body {
      display: flex;
      flex-direction: column
    }

    .module-blocks-57 .module-item-1 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: flex-start;
      align-items: flex-start
    }

    .module-blocks-57 .module-item-1 .block-header img {
      display: flex
    }

    .module-blocks-57 .module-item-1 .block-wrapper {
      display: flex
    }

    .module-blocks-57 .module-item-1 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-57 .module-item-1 .block-body {
      display: flex;
      flex-direction: column
    }

    .module-blocks-57 .module-item-1 .block-content {
      text-align: center;
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .module-blocks-57 .module-item-1 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 75px
    }

    .module-blocks-57 .module-item-1 .block-expand::after {
      content: 'Show More'
    }

    .module-blocks-57 .module-item-1 .block-expanded .block-expand::after {
      content: 'Show Less'
    }

    .module-blocks-57 .module-item-1 .block-expand::before {
      content: '\f078' !important;
      font-family: icomoon !important
    }

    .module-blocks-57 .module-item-1 .block-expanded .block-expand::before {
      content: '\f077' !important;
      font-family: icomoon !important
    }

    .module-blocks-57 .module-item-1 .block-footer .btn {
      width: auto;
      transform: scale(calc(100 / 100));
      transform-origin: center
    }

    .module-blocks-57 .module-item-1 .block-footer {
      text-align: center
    }

    .product-blocks-267 {
      order: 100
    }

    .grid-row-267-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .grid-col-267-1-1 {
      width: 100%
    }

    .grid-col-267-1-1 .grid-items {
      justify-content: flex-start
    }

    .module-blocks-266.blocks-grid .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 3 * 10px) / 4 - 0.01px)
    }

    .module-blocks-266.blocks-grid .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 4 - 0.01px)
    }

    .one-column #content .module-blocks-266.blocks-grid .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 3 * 10px) / 4 - 0.01px)
    }

    .one-column #content .module-blocks-266.blocks-grid .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .module-blocks-266.blocks-grid .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 3 * 10px) / 4 - 0.01px)
    }

    .two-column #content .module-blocks-266.blocks-grid .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 4 - 0.01px)
    }

    .side-column .module-blocks-266.blocks-grid .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 1 * 10px) / 2 - 0.01px)
    }

    .side-column .module-blocks-266.blocks-grid .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 2 - 0.01px)
    }

    .module-blocks-266 .block-title {
      order: -2
    }

    .module-blocks-266 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: flex-start;
      align-items: flex-start
    }

    .module-blocks-266 .block-header img {
      display: flex
    }

    .module-blocks-266 .block-wrapper {
      display: flex
    }

    .module-blocks-266 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-266 .block-body {
      display: flex;
      flex-direction: column
    }

    .module-blocks-266 .module-item-1 .block-body {
      padding-bottom: 20px;
      display: flex;
      flex-direction: column
    }

    .module-blocks-266 .module-item-1 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: center;
      align-items: center
    }

    .module-blocks-266 .module-item-1 .block-header img {
      display: flex
    }

    .module-blocks-266 .module-item-1 .block-wrapper {
      display: flex
    }

    .module-blocks-266 .module-item-1 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-266 .module-item-1 .block-content {
      text-align: left;
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .module-blocks-266 .module-item-1 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 75px
    }

    .module-blocks-266 .module-item-1 .block-expand::after {
      content: 'Show More'
    }

    .module-blocks-266 .module-item-1 .block-expanded .block-expand::after {
      content: 'Show Less'
    }

    .module-blocks-266 .module-item-1 .block-expand::before {
      content: '\f078' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-1 .block-expanded .block-expand::before {
      content: '\f077' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-1 .block-footer .btn {
      width: auto;
      transform: scale(calc(100 / 100));
      transform-origin: center
    }

    .module-blocks-266 .module-item-1 .block-footer {
      text-align: center
    }

    .module-blocks-266 .module-item-2 .block-body {
      padding-bottom: 20px;
      display: flex;
      flex-direction: column
    }

    .module-blocks-266 .module-item-2 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: center;
      align-items: center
    }

    .module-blocks-266 .module-item-2 .block-header img {
      display: flex
    }

    .module-blocks-266 .module-item-2 .block-wrapper {
      display: flex
    }

    .module-blocks-266 .module-item-2 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-266 .module-item-2 .block-content {
      text-align: left;
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .module-blocks-266 .module-item-2 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 75px
    }

    .module-blocks-266 .module-item-2 .block-expand::after {
      content: 'Show More'
    }

    .module-blocks-266 .module-item-2 .block-expanded .block-expand::after {
      content: 'Show Less'
    }

    .module-blocks-266 .module-item-2 .block-expand::before {
      content: '\f078' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-2 .block-expanded .block-expand::before {
      content: '\f077' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-2 .block-footer .btn {
      width: auto;
      transform: scale(calc(100 / 100));
      transform-origin: center
    }

    .module-blocks-266 .module-item-2 .block-footer {
      text-align: center
    }

    .module-blocks-266 .module-item-3 .block-body {
      padding-bottom: 20px;
      display: flex;
      flex-direction: column
    }

    .module-blocks-266 .module-item-3 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: center;
      align-items: center
    }

    .module-blocks-266 .module-item-3 .block-header img {
      display: flex
    }

    .module-blocks-266 .module-item-3 .block-wrapper {
      display: flex
    }

    .module-blocks-266 .module-item-3 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-266 .module-item-3 .block-content {
      text-align: left;
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .module-blocks-266 .module-item-3 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 75px
    }

    .module-blocks-266 .module-item-3 .block-expand::after {
      content: 'Show More'
    }

    .module-blocks-266 .module-item-3 .block-expanded .block-expand::after {
      content: 'Show Less'
    }

    .module-blocks-266 .module-item-3 .block-expand::before {
      content: '\f078' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-3 .block-expanded .block-expand::before {
      content: '\f077' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-3 .block-footer .btn {
      width: auto;
      transform: scale(calc(100 / 100));
      transform-origin: center
    }

    .module-blocks-266 .module-item-3 .block-footer {
      text-align: center
    }

    .module-blocks-266 .module-item-4 .block-body {
      padding-bottom: 20px;
      display: flex;
      flex-direction: column
    }

    .module-blocks-266 .module-item-4 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: center;
      align-items: center
    }

    .module-blocks-266 .module-item-4 .block-header img {
      display: flex
    }

    .module-blocks-266 .module-item-4 .block-wrapper {
      display: flex
    }

    .module-blocks-266 .module-item-4 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-266 .module-item-4 .block-content {
      text-align: left;
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .module-blocks-266 .module-item-4 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 75px
    }

    .module-blocks-266 .module-item-4 .block-expand::after {
      content: 'Show More'
    }

    .module-blocks-266 .module-item-4 .block-expanded .block-expand::after {
      content: 'Show Less'
    }

    .module-blocks-266 .module-item-4 .block-expand::before {
      content: '\f078' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-4 .block-expanded .block-expand::before {
      content: '\f077' !important;
      font-family: icomoon !important
    }

    .module-blocks-266 .module-item-4 .block-footer .btn {
      width: auto;
      transform: scale(calc(100 / 100));
      transform-origin: center
    }

    .module-blocks-266 .module-item-4 .block-footer {
      text-align: center
    }

    #content .product-blocks-247 {
      background: rgba(218, 240, 216, 1);
      padding: 15px;
      margin-bottom: 20px
    }

    .grid-row-247-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .grid-col-247-1-1 {
      width: 100%
    }

    .grid-col-247-1-1 .grid-items {
      justify-content: flex-start
    }

    .module-info_blocks-250 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .module-info_blocks-250 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-info_blocks-250 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .one-column #content .module-info_blocks-250 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-info_blocks-250 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .module-info_blocks-250 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-info_blocks-250 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .module-info_blocks-250 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-info_blocks-250 .info-block .info-block-title {
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase;
      display: block
    }

    .module-info_blocks-250 .info-block .info-block-text {
      font-size: 13px;
      color: rgba(109, 118, 125, 1);
      display: block
    }

    .module-info_blocks-250 .info-block {
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      text-align: left
    }

    .module-info_blocks-250 .info-block-content {
      display: flex;
      justify-content: flex-start
    }

    .module-info_blocks-250 .info-block::before {
      align-self: flex-start;
      font-size: 22px
    }

    .module-info_blocks-250 .info-block-img {
      align-self: flex-start
    }

    .module-info_blocks-250 .info-block::before,
    .module-info_blocks-250 .info-block-img {
      margin-right: 10px
    }

    .module-info_blocks-250 .info-block .count-badge {
      display: none
    }

    .module-info_blocks-250 .module-item-1 .info-block::before {
      content: '\eab9' !important;
      font-family: icomoon !important;
      font-size: 40px;
      color: rgba(60, 196, 114, 1)
    }

    .product_extra-277 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 70px
    }

    .product_extra-277 .block-content {
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .product_extra-278 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 70px
    }

    .product_extra-278 .block-content {
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .product_extra-273 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 70px
    }

    .product_extra-273 .block-content {
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .product_extra-274 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 70px
    }

    .product_extra-274 .block-content {
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .product_extra-275 .expand-content {
      overflow: hidden
    }

    .product_extra-275 .block-content {
      column-count: initial;
      column-rule-style: none
    }

    .product_extra-276 .expand-content {
      max-height: 100%;
      overflow: visible;
      max-height: 70px
    }

    .product_extra-276 .block-content {
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .grid-row-column-right-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .grid-col-column-right-1-1 {
      width: 100%;
      margin-bottom: 30px
    }

    .grid-col-column-right-1-1 .grid-items {
      justify-content: flex-start
    }

    .grid-item-column-right-1-1-1 {
      width: 100%
    }

    .grid-col-column-right-1-2 {
      width: 100%;
      margin-bottom: 10px
    }

    .grid-col-column-right-1-2 .grid-items {
      justify-content: flex-start
    }

    .grid-item-column-right-1-2-1 {
      width: 100%
    }

    .grid-col-column-right-1-3 {
      width: 100%;
      margin-bottom: 20px
    }

    .grid-col-column-right-1-3 .grid-items {
      justify-content: flex-start
    }

    .grid-item-column-right-1-3-1 {
      width: 100%
    }

    .grid-row-content-bottom-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .grid-row-content-bottom-1 {
      padding-top: 20px
    }

    .grid-row-bottom-1 {
      background: rgba(238, 238, 238, 1);
      padding: 20px;
      padding-top: 40px;
      padding-bottom: 40px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .grid-row-bottom-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    @media (max-width: 760px) {
      .grid-row-bottom-1 {
        padding: 20px
      }
    }

    .grid-col-bottom-1-1 {
      width: 50%;
      padding-right: 15px
    }

    .grid-col-bottom-1-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .grid-col-bottom-1-1 {
        width: 100%;
        padding-right: 0px;
        margin-bottom: 20px
      }
    }

    .grid-item-bottom-1-1-1 {
      width: 100%
    }

    .grid-col-bottom-1-2 {
      width: 50%;
      padding-left: 15px
    }

    .grid-col-bottom-1-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .grid-col-bottom-1-2 {
        width: 100%;
        padding-left: 0px
      }
    }

    .grid-item-bottom-1-2-1 {
      width: 100%
    }

    .module-info_blocks-244 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .module-info_blocks-244 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-info_blocks-244 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .one-column #content .module-info_blocks-244 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-info_blocks-244 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .two-column #content .module-info_blocks-244 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-info_blocks-244 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .side-column .module-info_blocks-244 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-info_blocks-244 .info-block .info-block-title {
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase;
      display: block
    }

    .module-info_blocks-244 .info-block .info-block-text {
      font-size: 13px;
      color: rgba(109, 118, 125, 1);
      display: block
    }

    .module-info_blocks-244 .info-block {
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      text-align: left
    }

    .module-info_blocks-244 .info-block-content {
      display: flex;
      justify-content: flex-start
    }

    .module-info_blocks-244 .info-block::before {
      align-self: flex-start;
      width: 45px;
      height: 45px;
      font-size: 24px;
      background: #089A49;
      color: rgba(255, 255, 255, 1)
    }

    .module-info_blocks-244 .info-block-img {
      align-self: flex-start
    }

    .module-info_blocks-244 .info-block::before,
    .module-info_blocks-244 .info-block-img {
      margin-right: 10px
    }

    .module-info_blocks-244 .info-block .count-badge {
      display: none
    }

    .module-info_blocks-244 .module-body {
      margin: -5px
    }

    .module-info_blocks-244 .module-item-1 .info-block::before {
      content: '\eab9' !important;
      font-family: icomoon !important
    }

    .module-info_blocks-244 .module-item-2 .info-block::before {
      content: '\f122' !important;
      font-family: icomoon !important
    }

    .module-info_blocks-244 .module-item-3 .info-block::before {
      content: '\e980' !important;
      font-family: icomoon !important
    }

    .module-info_blocks-244 .module-item-4 .info-block::before {
      content: '\eb15' !important;
      font-family: icomoon !important
    }

    .module-products-82 .swiper-container {
      overflow: hidden
    }

    .module-products-82 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-products-82:hover .swiper-buttons {
      display: block
    }

    .module-products-82 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-products-82 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-products-82 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-products-82 .swiper-button-disabled {
      opacity: 0
    }

    .module-products-82 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-82 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-82 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-products-82 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-products-82 .swiper {
      padding-bottom: 10px
    }

    .module-products-82 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-products-82 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-products-82 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-products-82 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-products-82 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-products-82 .nav-tabs>li>a,
    .module-products-82 .nav-tabs>li.active>a,
    .module-products-82 .nav-tabs>li.active>a:hover,
    .module-products-82 .nav-tabs>li.active>a:focus {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .module-products-82 .nav-tabs>li:hover>a,
    .module-products-82 .nav-tabs>li.active>a {
      color: #089A49
    }

    .module-products-82 .nav-tabs {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      display: flex;
      justify-content: flex-start;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      ;
      min-width: 50px
    }

    .module-products-82 .nav-tabs>li {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0);
      flex-grow: 0
    }

    .module-products-82 .nav-tabs>li.active {
      border-color: #089A49
    }

    .module-products-82 .nav-tabs>li.active::after {
      display: none;
      border-top-width: 10px
    }

    .module-products-82 .nav-tabs>li>a {
      justify-content: center;
      white-space: nowrap;
      padding: 0px;
      padding-bottom: 10px
    }

    .module-products-82 .nav-tabs>li>a::before {
      font-size: 18px
    }

    .module-products-82 .nav-tabs>li:not(:last-child) {
      margin-right: 20px
    }

    .module-products-82 .mobile .nav-tabs {
      overflow-x: scroll
    }

    .module-products-82 .nav-tabs::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px;
      height: 1px;
      width: 1px
    }

    .module-products-82 .nav-tabs::-webkit-scrollbar-track {
      background-color: white;
      background-color: rgba(255, 255, 255, 1)
    }

    .module-products-82 .nav-tabs::-webkit-scrollbar-thumb {
      background-color: #999;
      background-color: rgba(60, 196, 114, 1)
    }

    .module-products-82 .tab-container::before {
      display: none
    }

    .module-products-82 .tab-content {
      padding-top: 20px
    }

    .module-products-82 .tab-container {
      display: block
    }

    .module-products-82 .tab-container .nav-tabs {
      flex-direction: row
    }

    .module-products-82 .product-layout.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 1 * 0px) / 2 - 0.01px)
    }

    .module-products-82 .product-layout:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 2 - 0.01px)
    }

    .one-column #content .module-products-82 .product-layout.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 1 * 0px) / 2 - 0.01px)
    }

    .one-column #content .module-products-82 .product-layout:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 2 - 0.01px)
    }

    .two-column #content .module-products-82 .product-layout.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .module-products-82 .product-layout:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-products-82 .product-layout.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .module-products-82 .product-layout:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-products-82 .module-body>.module-item {
      margin-bottom: 20px
    }

    .module-products-82 .product-grid .product-thumb .product-img {
      border-width: 5px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .desktop .module-products-82 .product-grid .product-thumb:hover .product-img {
      border-color: #089A49
    }

    .module-products-82 .product-grid .product-thumb .product-labels {
      display: none;
      visibility: visible;
      opacity: 1
    }

    .module-products-82 .product-grid .product-thumb .quickview-button {
      display: flex;
      left: 50%;
      top: 0;
      bottom: auto;
      right: auto;
      transform: translate3d(-50%, 0, 1px)
    }

    .module-products-82 .product-grid .product-thumb .btn-quickview {
      visibility: hidden;
      opacity: 0;
      transform: scale(.88);
      width: 30px;
      height: 30px
    }

    .module-products-82 .product-grid .product-thumb:hover .btn-quickview {
      visibility: visible;
      opacity: 1;
      transform: scale(1)
    }

    .module-products-82 .product-grid .product-thumb .btn-quickview .btn-text {
      display: none
    }

    .module-products-82 .product-grid .product-thumb .btn-quickview::before {
      display: inline-block;
      content: '\eb54' !important;
      font-family: icomoon !important;
      font-size: 14px
    }

    .module-products-82 .product-grid .product-thumb .image .btn {
      background: #089A49
    }

    .module-products-82 .product-grid .product-thumb .image .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-82 .product-grid .product-thumb .image .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-82 .product-grid .product-thumb .countdown {
      display: none;
      visibility: visible;
      opacity: 1;
      transform: translate3d(-50%, 0, 1px) scale(1)
    }

    .module-products-82 .product-grid.product-list .product-layout .image {
      float: left;
      height: 100%
    }

    .module-products-82 .product-grid .product-thumb .stats {
      display: flex;
      justify-content: space-between;
      padding-top: 2px;
      padding-bottom: 3px;
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-82 .product-grid .stat-1 .stats-label {
      display: none
    }

    .module-products-82 .product-grid .stat-2 .stats-label {
      display: none
    }

    .module-products-82 .product-grid.product-grid .product-thumb .rating {
      position: absolute;
      visibility: visible;
      opacity: 1;
      top: 0
    }

    .module-products-82 .product-grid.product-grid .product-thumb .rating-stars {
      position: absolute;
      visibility: visible;
      opacity: 1;
      transform: translateY(-50%)
    }

    .module-products-82 .product-grid .product-thumb .rating {
      justify-content: center;
      display: flex
    }

    .module-products-82 .product-grid .product-thumb .rating.no-rating {
      display: none
    }

    .module-products-82 .product-grid .product-thumb .rating-stars {
      padding-bottom: 10px;
      margin-top: -5px
    }

    .module-products-82 .product-grid .product-thumb .rating.no-rating span {
      opacity: 0.5
    }

    .module-products-82 .product-grid .product-thumb .name {
      display: flex;
      width: 100%;
      margin-left: 0;
      margin-right: 0;
      justify-content: flex-start;
      margin-left: 0;
      margin-right: auto;
      margin-top: 5px
    }

    .module-products-82 .product-grid .product-thumb .name a {
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      font-size: 14px;
      color: rgba(58, 71, 80, 1);
      font-weight: 700;
      text-align: left;
      text-align: left
    }

    .module-products-82 .product-grid .product-thumb .name a:hover {
      color: rgba(53, 66, 174, 1)
    }

    .module-products-82 .product-grid .product-thumb .description {
      display: none;
      padding: 12px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid
    }

    .module-products-82 .product-grid .product-thumb .price {
      display: block;
      font-size: 14px;
      color: rgba(58, 71, 80, 1);
      text-align: left;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      margin-left: 0;
      margin-right: auto;
      text-align: left;
      justify-content: flex-start;
      margin-top: 3px
    }

    .module-products-82 .product-grid .product-thumb .price-tax {
      display: none;
      font-size: 12px;
      text-align: left
    }

    .module-products-82 .product-grid .product-thumb .price-new {
      color: #089A49;
      margin: 0 7px 0 0;
      order: 1
    }

    .module-products-82 .product-grid .product-thumb .price-old {
      font-size: 12px;
      color: rgba(109, 118, 125, 1);
      text-decoration: line-through;
      margin: 0;
      order: 2
    }

    .module-products-82 .product-grid .product-thumb .price>div {
      align-items: center;
      flex-direction: row
    }

    .module-products-82 .product-grid .product-thumb .button-group {
      justify-content: center
    }

    .module-products-82 .product-grid.product-grid .product-thumb .button-group {
      background: #089A49
    }

    .module-products-82 .product-grid .product-thumb .cart-group {
      display: inline-flex
    }

    .module-products-82 .product-grid .product-thumb .btn-cart {
      width: 30px;
      height: 30px
    }

    .module-products-82 .product-grid .product-thumb .btn-wishlist {
      width: 30px;
      height: 30px;
      display: inline-flex
    }

    .module-products-82 .product-grid .product-thumb .btn-compare {
      width: 30px;
      height: 30px;
      display: inline-flex
    }

    .module-products-82 .product-grid .product-thumb .btn-cart .btn-text {
      display: none
    }

    .module-products-82 .product-grid .product-thumb .btn-cart::before {
      display: inline-block;
      font-size: 13px;
      left: 2px;
      margin-right: 2px
    }

    .module-products-82 .product-grid.product-grid .product-thumb .btn-cart {
      flex: initial
    }

    .module-products-82 .product-grid.product-grid .product-thumb .cart-group {
      flex: initial
    }

    .module-products-82 .product-grid .product-thumb .btn-cart.btn {
      background: #089A49;
      border-radius: 0px !important
    }

    .module-products-82 .product-grid .product-thumb .btn-cart.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-82 .product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-82 .product-grid .product-thumb .stepper {
      display: none;
      margin-right: 5px;
      height: 30px
    }

    .module-products-82 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
      margin: -10px;
      margin-top: 10px
    }

    .module-products-82 .product-grid .button-group-bottom .wish-group-bottom {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid
    }

    .module-products-82 .product-grid .product-thumb .btn-wishlist::before {
      display: inline-block;
      font-size: 13px
    }

    .module-products-82 .product-grid .product-thumb .btn-wishlist .btn-text {
      display: none
    }

    .module-products-82 .product-grid .product-thumb .btn-wishlist.btn {
      background: #089A49;
      border-radius: 0px !important
    }

    .module-products-82 .product-grid .product-thumb .btn-wishlist.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-82 .product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-82 .product-grid .product-thumb .btn-compare::before {
      display: inline-block;
      font-size: 13px
    }

    .module-products-82 .product-grid .product-thumb .btn-compare .btn-text {
      display: none
    }

    .module-products-82 .product-grid .product-thumb .btn-compare.btn {
      background: #089A49;
      border-radius: 0px !important
    }

    .module-products-82 .product-grid .product-thumb .btn-compare.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-82 .product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-82 .product-grid .product-thumb .extra-group {
      display: none
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn:first-child {
      display: inline-flex
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn-extra+.btn {
      display: inline-flex
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn:first-child::before {
      display: inline-block;
      color: rgba(60, 196, 114, 1)
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn::before {
      display: inline-block;
      color: #089A49
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-82 .product-grid .product-layout .extra-group>div {
      justify-content: flex-start
    }

    .module-products-82 .product-grid .product-thumb .extra-group>div {
      padding-top: 4px;
      margin-top: 5px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn,
    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn:active,
    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
      background: none !important
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn:focus {
      background: none
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn,
    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
      background: none !important
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
      background: none
    }

    .module-products-82 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-82 .product-grid.product-grid .product-thumb .extra-group {
      position: static;
      margin-top: auto
    }

    .module-products-82 .product-grid.product-grid .product-thumb .extra-group>div {
      position: static;
      transform: none;
      opacity: 1
    }

    .module-products-82 .product-grid.product-grid .product-thumb .buttons-wrapper {
      position: absolute;
      overflow: hidden;
      width: 100%;
      left: 50%;
      transform: translate3d(-50%, -100%, 1px)
    }

    .module-products-82 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
      position: relative;
      opacity: 0;
      visibility: hidden;
      transform: translate3d(0, 15px, 1px)
    }

    .module-products-82 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
      opacity: 1;
      visibility: visible;
      transform: translate3d(0, 0, 1px)
    }

    .module-products-82 .product-grid.product-grid .wish-group {
      position: static;
      width: auto;
      top: auto;
      visibility: visible;
      opacity: 1;
      transform: translate3d(0, 0, 0);
      justify-content: flex-start
    }

    .module-products-82 .product-grid .product-thumb .btn-quickview.btn {
      border-radius: 0px !important
    }

    @media (max-width: 1024px) {
      .module-products-82 .product-grid.product-grid .product-thumb .button-group {
        background: #089A49
      }

      .module-products-82 .product-grid.product-grid .product-thumb .extra-group {
        margin-top: auto
      }

      .module-products-82 .product-grid.product-grid .product-thumb .buttons-wrapper {
        position: static;
        width: auto;
        overflow: visible;
        order: -5;
        margin-top: 0;
        transform: none
      }

      .module-products-82 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none
      }
    }

    .module-products-271 .swiper-container {
      overflow: hidden
    }

    .module-products-271 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-products-271:hover .swiper-buttons {
      display: block
    }

    .module-products-271 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-products-271 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-products-271 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-products-271 .swiper-button-disabled {
      opacity: 0
    }

    .module-products-271 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-271 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-271 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-products-271 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-products-271 .swiper {
      padding-bottom: 10px
    }

    .module-products-271 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-products-271 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-products-271 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-products-271 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-products-271 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-products-271 .nav-tabs>li>a,
    .module-products-271 .nav-tabs>li.active>a,
    .module-products-271 .nav-tabs>li.active>a:hover,
    .module-products-271 .nav-tabs>li.active>a:focus {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .module-products-271 .nav-tabs>li:hover>a,
    .module-products-271 .nav-tabs>li.active>a {
      color: #089A49
    }

    .module-products-271 .nav-tabs {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      display: flex;
      justify-content: flex-start;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      ;
      min-width: 50px
    }

    .module-products-271 .nav-tabs>li {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0);
      flex-grow: 0
    }

    .module-products-271 .nav-tabs>li.active {
      border-color: #089A49
    }

    .module-products-271 .nav-tabs>li.active::after {
      display: none;
      border-top-width: 10px
    }

    .module-products-271 .nav-tabs>li>a {
      justify-content: center;
      white-space: nowrap;
      padding: 0px;
      padding-bottom: 10px
    }

    .module-products-271 .nav-tabs>li>a::before {
      font-size: 18px
    }

    .module-products-271 .nav-tabs>li:not(:last-child) {
      margin-right: 20px
    }

    .module-products-271 .mobile .nav-tabs {
      overflow-x: scroll
    }

    .module-products-271 .nav-tabs::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px;
      height: 1px;
      width: 1px
    }

    .module-products-271 .nav-tabs::-webkit-scrollbar-track {
      background-color: white;
      background-color: rgba(255, 255, 255, 1)
    }

    .module-products-271 .nav-tabs::-webkit-scrollbar-thumb {
      background-color: #999;
      background-color: rgba(60, 196, 114, 1)
    }

    .module-products-271 .tab-container::before {
      display: none
    }

    .module-products-271 .tab-content {
      padding-top: 20px
    }

    .module-products-271 .tab-container {
      display: block
    }

    .module-products-271 .tab-container .nav-tabs {
      flex-direction: row
    }

    .module-products-271 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-products-271 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-products-271 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .one-column #content .module-products-271 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .module-products-271 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .two-column #content .module-products-271 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 3 - 0.01px)
    }

    .side-column .module-products-271 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .side-column .module-products-271 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-products-271 .module-body>.module-item {
      margin-bottom: 20px
    }

    .module-products-271 .product-grid .product-thumb {
      background: rgba(255, 255, 255, 1);
      border-width: 1px;
      border-style: solid;
      border-color: rgba(238, 238, 238, 1);
      padding: 5px
    }

    .desktop .module-products-271 .product-grid .product-layout:hover .product-thumb {
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-271 .product-grid .product-thumb:hover .product-img>div {
      transform: scale(1.12)
    }

    .module-products-271 .product-grid .product-thumb .product-labels {
      visibility: visible;
      opacity: 1
    }

    .module-products-271 .product-grid .product-thumb .quickview-button {
      display: flex;
      left: 50%;
      top: 50%;
      bottom: auto;
      right: auto;
      transform: translate3d(-50%, -50%, 1px)
    }

    .module-products-271 .product-grid .product-thumb .btn-quickview {
      visibility: hidden;
      opacity: 0;
      transform: scale(.88);
      width: 30px;
      height: 30px
    }

    .module-products-271 .product-grid .product-thumb:hover .btn-quickview {
      visibility: visible;
      opacity: 1;
      transform: scale(1)
    }

    .module-products-271 .product-grid .product-thumb .btn-quickview .btn-text {
      display: none
    }

    .module-products-271 .product-grid .product-thumb .btn-quickview::before {
      display: inline-block;
      content: '\eb54' !important;
      font-family: icomoon !important;
      font-size: 16px
    }

    .module-products-271 .product-grid .product-thumb .image .btn,
    .module-products-271 .product-grid .product-thumb .image .btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .module-products-271 .product-grid .product-thumb .image .btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .module-products-271 .product-grid .product-thumb .image .btn:active,
    .module-products-271 .product-grid .product-thumb .image .btn:hover:active,
    .module-products-271 .product-grid .product-thumb .image .btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .module-products-271 .product-grid .product-thumb .image .btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .image .btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .module-products-271 .product-grid .product-thumb .image .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-271 .product-grid .product-thumb .countdown {
      display: none;
      visibility: visible;
      opacity: 1;
      transform: translate3d(-50%, 0, 1px) scale(1)
    }

    .module-products-271 .product-grid.product-list .product-layout .image {
      float: left;
      height: 100%
    }

    .module-products-271 .product-grid .product-thumb .stats {
      display: none;
      justify-content: space-between;
      padding: 5px;
      padding-right: 8px;
      padding-bottom: 4px;
      padding-left: 8px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid
    }

    .module-products-271 .product-grid .stat-1 .stats-label {
      display: none
    }

    .module-products-271 .product-grid .stat-2 .stats-label {
      display: none
    }

    .module-products-271 .product-grid.product-grid .product-thumb .rating {
      position: absolute;
      visibility: hidden;
      opacity: 0;
      top: 0
    }

    .module-products-271 .product-grid.product-grid .product-thumb:hover .rating {
      visibility: visible;
      opacity: 1
    }

    .module-products-271 .product-grid.product-grid .product-thumb .rating-stars {
      position: absolute;
      visibility: visible;
      opacity: 1;
      transform: translateY(-50%)
    }

    .module-products-271 .product-grid .product-thumb .rating {
      justify-content: center;
      display: flex
    }

    .module-products-271 .product-grid .product-thumb .rating.no-rating {
      display: none
    }

    .module-products-271 .product-grid .product-thumb .rating-stars {
      padding-bottom: 10px
    }

    .module-products-271 .product-grid .product-thumb .rating.no-rating span {
      opacity: 0.5
    }

    .module-products-271 .product-grid .product-thumb .name {
      display: flex;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      justify-content: flex-start;
      margin-left: 0;
      margin-right: auto;
      padding-top: 8px;
      padding-bottom: 5px;
      padding-left: 8px
    }

    .module-products-271 .product-grid .product-thumb .name a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-align: left;
      text-align: left
    }

    .module-products-271 .product-grid .product-thumb .name a:hover {
      color: #089A49
    }

    .module-products-271 .product-grid .product-thumb .description {
      display: none;
      padding: 12px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid
    }

    .module-products-271 .product-grid .product-thumb .price {
      display: block;
      font-size: 15px;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      margin-left: 0;
      margin-right: auto;
      text-align: left;
      justify-content: flex-start;
      padding: 8px;
      padding-top: 0px
    }

    .module-products-271 .product-grid .product-thumb .price-tax {
      display: none;
      font-size: 12px;
      text-align: left
    }

    .module-products-271 .product-grid .product-thumb .price-new {
      color: #089A49;
      margin: 0 7px 0 0;
      order: 1
    }

    .module-products-271 .product-grid .product-thumb .price-old {
      font-size: 13px;
      color: rgba(109, 118, 125, 1);
      text-decoration: line-through;
      margin: 0;
      order: 2
    }

    .module-products-271 .product-grid .product-thumb .price>div {
      align-items: center;
      flex-direction: row
    }

    .module-products-271 .product-grid .product-thumb .button-group {
      justify-content: space-between
    }

    .module-products-271 .product-grid.product-grid .product-thumb .button-group {
      padding: 8px;
      padding-bottom: 5px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-271 .product-grid .product-thumb .cart-group {
      display: inline-flex
    }

    .module-products-271 .product-grid .product-thumb .btn-cart::before {
      display: none;
      font-size: 16px;
      left: 2px;
      margin-right: 2px
    }

    .module-products-271 .product-grid .product-thumb .btn-cart .btn-text {
      display: inline-block;
      padding: 0
    }

    .module-products-271 .product-grid.product-grid .product-thumb .btn-cart {
      flex: initial
    }

    .module-products-271 .product-grid.product-grid .product-thumb .cart-group {
      flex: initial
    }

    .module-products-271 .product-grid .product-thumb .btn-cart.btn,
    .module-products-271 .product-grid .product-thumb .btn-cart.btn:visited {
      text-transform: none
    }

    .module-products-271 .product-grid .product-thumb .btn-cart.btn {
      padding: 2px;
      padding-right: 7px;
      padding-left: 7px;
      min-width: 20px;
      min-height: 20px
    }

    .desktop .module-products-271 .product-grid .product-thumb .btn-cart.btn:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .btn-cart.btn:active,
    .module-products-271 .product-grid .product-thumb .btn-cart.btn:hover:active,
    .module-products-271 .product-grid .product-thumb .btn-cart.btn:focus:active {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .btn-cart.btn:focus {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-271 .product-grid .product-thumb .stepper {
      display: none;
      margin-right: 5px;
      height: 36px
    }

    .module-products-271 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
      margin: -10px;
      margin-top: 10px
    }

    .module-products-271 .product-grid .button-group-bottom .wish-group-bottom {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist {
      display: inline-flex;
      margin-right: 5px;
      margin-left: 5px
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist::before {
      display: inline-block;
      font-size: 15px
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist .btn-text {
      display: none
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn,
    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn:active,
    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn:hover:active,
    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn:focus:active {
      background: none !important
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn:focus {
      background: none
    }

    .module-products-271 .product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-271 .product-grid .product-thumb .btn-compare {
      display: inline-flex
    }

    .module-products-271 .product-grid .product-thumb .btn-compare::before {
      display: inline-block;
      font-size: 14px
    }

    .module-products-271 .product-grid .product-thumb .btn-compare .btn-text {
      display: none
    }

    .module-products-271 .product-grid .product-thumb .btn-compare.btn,
    .module-products-271 .product-grid .product-thumb .btn-compare.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-271 .product-grid .product-thumb .btn-compare.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-271 .product-grid .product-thumb .btn-compare.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-271 .product-grid .product-thumb .btn-compare.btn:active,
    .module-products-271 .product-grid .product-thumb .btn-compare.btn:hover:active,
    .module-products-271 .product-grid .product-thumb .btn-compare.btn:focus:active {
      background: none !important
    }

    .module-products-271 .product-grid .product-thumb .btn-compare.btn:focus {
      background: none
    }

    .module-products-271 .product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-271 .product-grid .product-thumb .extra-group {
      display: none
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn:first-child {
      display: inline-flex
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn-extra+.btn {
      display: inline-flex
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn:first-child::before {
      display: inline-block
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn::before {
      display: inline-block
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-271 .product-grid .product-layout .extra-group>div {
      justify-content: space-between
    }

    .module-products-271 .product-grid .product-thumb .extra-group>div {
      padding: 4px
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn,
    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn:visited {
      text-transform: none
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn {
      padding: 2px;
      padding-right: 7px;
      padding-left: 7px;
      min-width: 20px;
      min-height: 20px
    }

    .desktop .module-products-271 .product-grid .product-thumb .extra-group .btn.btn:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn:active,
    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn:focus {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn,
    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
      text-transform: none
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn {
      padding: 2px;
      padding-right: 7px;
      padding-left: 7px;
      min-width: 20px;
      min-height: 20px
    }

    .desktop .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-271 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-271 .product-grid.product-grid .product-thumb .extra-group {
      position: static;
      margin-top: initial
    }

    .module-products-271 .product-grid.product-grid .product-thumb .extra-group>div {
      position: static;
      transform: none;
      opacity: 1
    }

    .module-products-271 .product-grid.product-grid .product-thumb .buttons-wrapper {
      position: static;
      width: auto;
      overflow: visible;
      order: initial;
      margin-top: auto;
      transform: none
    }

    .module-products-271 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
      position: static;
      opacity: 1;
      visibility: visible;
      transform: none
    }

    .module-products-271 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
      transform: none
    }

    .module-products-271 .product-grid.product-grid .wish-group {
      position: static;
      width: auto;
      top: auto;
      visibility: visible;
      opacity: 1;
      transform: translate3d(0, 0, 0);
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .module-products-271 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .module-products-271 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }

      .one-column #content .module-products-271 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .one-column #content .module-products-271 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }
    }

    .module-products-272 .swiper-container {
      overflow: hidden
    }

    .module-products-272 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-products-272:hover .swiper-buttons {
      display: block
    }

    .module-products-272 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-products-272 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-products-272 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-products-272 .swiper-button-disabled {
      opacity: 0
    }

    .module-products-272 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-272 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-272 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-products-272 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-products-272 .swiper {
      padding-bottom: 10px
    }

    .module-products-272 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-products-272 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-products-272 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-products-272 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-products-272 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-products-272 .nav-tabs>li>a,
    .module-products-272 .nav-tabs>li.active>a,
    .module-products-272 .nav-tabs>li.active>a:hover,
    .module-products-272 .nav-tabs>li.active>a:focus {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .module-products-272 .nav-tabs>li:hover>a,
    .module-products-272 .nav-tabs>li.active>a {
      color: #089A49
    }

    .module-products-272 .nav-tabs {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      display: flex;
      justify-content: flex-start;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      ;
      min-width: 50px
    }

    .module-products-272 .nav-tabs>li {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0);
      flex-grow: 0
    }

    .module-products-272 .nav-tabs>li.active {
      border-color: #089A49
    }

    .module-products-272 .nav-tabs>li.active::after {
      display: none;
      border-top-width: 10px
    }

    .module-products-272 .nav-tabs>li>a {
      justify-content: center;
      white-space: nowrap;
      padding: 0px;
      padding-bottom: 10px
    }

    .module-products-272 .nav-tabs>li>a::before {
      font-size: 18px
    }

    .module-products-272 .nav-tabs>li:not(:last-child) {
      margin-right: 20px
    }

    .module-products-272 .mobile .nav-tabs {
      overflow-x: scroll
    }

    .module-products-272 .nav-tabs::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px;
      height: 1px;
      width: 1px
    }

    .module-products-272 .nav-tabs::-webkit-scrollbar-track {
      background-color: white;
      background-color: rgba(255, 255, 255, 1)
    }

    .module-products-272 .nav-tabs::-webkit-scrollbar-thumb {
      background-color: #999;
      background-color: rgba(60, 196, 114, 1)
    }

    .module-products-272 .tab-container::before {
      display: none
    }

    .module-products-272 .tab-content {
      padding-top: 20px
    }

    .module-products-272 .tab-container {
      display: block
    }

    .module-products-272 .tab-container .nav-tabs {
      flex-direction: row
    }

    .module-products-272 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .module-products-272 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-products-272 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .one-column #content .module-products-272 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .module-products-272 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .two-column #content .module-products-272 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 3 - 0.01px)
    }

    .side-column .module-products-272 .product-layout.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .side-column .module-products-272 .product-layout:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-products-272 .module-body>.module-item {
      margin-bottom: 20px
    }

    .module-products-272 .product-grid .product-thumb {
      background: rgba(255, 255, 255, 1);
      border-width: 1px;
      border-style: solid;
      border-color: rgba(238, 238, 238, 1);
      padding: 5px
    }

    .desktop .module-products-272 .product-grid .product-layout:hover .product-thumb {
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-272 .product-grid .product-thumb:hover .product-img>div {
      transform: scale(1.12)
    }

    .module-products-272 .product-grid .product-thumb .product-labels {
      visibility: visible;
      opacity: 1
    }

    .module-products-272 .product-grid .product-thumb .quickview-button {
      display: flex;
      left: 50%;
      top: 50%;
      bottom: auto;
      right: auto;
      transform: translate3d(-50%, -50%, 1px)
    }

    .module-products-272 .product-grid .product-thumb .btn-quickview {
      visibility: hidden;
      opacity: 0;
      transform: scale(.88);
      width: 30px;
      height: 30px
    }

    .module-products-272 .product-grid .product-thumb:hover .btn-quickview {
      visibility: visible;
      opacity: 1;
      transform: scale(1)
    }

    .module-products-272 .product-grid .product-thumb .btn-quickview .btn-text {
      display: none
    }

    .module-products-272 .product-grid .product-thumb .btn-quickview::before {
      display: inline-block;
      content: '\eb54' !important;
      font-family: icomoon !important;
      font-size: 16px
    }

    .module-products-272 .product-grid .product-thumb .image .btn,
    .module-products-272 .product-grid .product-thumb .image .btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .module-products-272 .product-grid .product-thumb .image .btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .module-products-272 .product-grid .product-thumb .image .btn:active,
    .module-products-272 .product-grid .product-thumb .image .btn:hover:active,
    .module-products-272 .product-grid .product-thumb .image .btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .module-products-272 .product-grid .product-thumb .image .btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .image .btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .module-products-272 .product-grid .product-thumb .image .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-272 .product-grid .product-thumb .countdown {
      display: none;
      visibility: visible;
      opacity: 1;
      transform: translate3d(-50%, 0, 1px) scale(1)
    }

    .module-products-272 .product-grid.product-list .product-layout .image {
      float: left;
      height: 100%
    }

    .module-products-272 .product-grid .product-thumb .stats {
      display: none;
      justify-content: space-between;
      padding: 5px;
      padding-right: 8px;
      padding-bottom: 4px;
      padding-left: 8px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid
    }

    .module-products-272 .product-grid .stat-1 .stats-label {
      display: none
    }

    .module-products-272 .product-grid .stat-2 .stats-label {
      display: none
    }

    .module-products-272 .product-grid.product-grid .product-thumb .rating {
      position: absolute;
      visibility: hidden;
      opacity: 0;
      top: 0
    }

    .module-products-272 .product-grid.product-grid .product-thumb:hover .rating {
      visibility: visible;
      opacity: 1
    }

    .module-products-272 .product-grid.product-grid .product-thumb .rating-stars {
      position: absolute;
      visibility: visible;
      opacity: 1;
      transform: translateY(-50%)
    }

    .module-products-272 .product-grid .product-thumb .rating {
      justify-content: center;
      display: flex
    }

    .module-products-272 .product-grid .product-thumb .rating.no-rating {
      display: none
    }

    .module-products-272 .product-grid .product-thumb .rating-stars {
      padding-bottom: 10px
    }

    .module-products-272 .product-grid .product-thumb .rating.no-rating span {
      opacity: 0.5
    }

    .module-products-272 .product-grid .product-thumb .name {
      display: flex;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      justify-content: flex-start;
      margin-left: 0;
      margin-right: auto;
      padding-top: 8px;
      padding-bottom: 5px;
      padding-left: 8px
    }

    .module-products-272 .product-grid .product-thumb .name a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-align: left;
      text-align: left
    }

    .module-products-272 .product-grid .product-thumb .name a:hover {
      color: #089A49
    }

    .module-products-272 .product-grid .product-thumb .description {
      display: none;
      padding: 12px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid
    }

    .module-products-272 .product-grid .product-thumb .price {
      display: block;
      font-size: 15px;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      margin-left: 0;
      margin-right: auto;
      text-align: left;
      justify-content: flex-start;
      padding: 8px;
      padding-top: 0px
    }

    .module-products-272 .product-grid .product-thumb .price-tax {
      display: none;
      font-size: 12px;
      text-align: left
    }

    .module-products-272 .product-grid .product-thumb .price-new {
      color: #089A49;
      margin: 0 7px 0 0;
      order: 1
    }

    .module-products-272 .product-grid .product-thumb .price-old {
      font-size: 13px;
      color: rgba(109, 118, 125, 1);
      text-decoration: line-through;
      margin: 0;
      order: 2
    }

    .module-products-272 .product-grid .product-thumb .price>div {
      align-items: center;
      flex-direction: row
    }

    .module-products-272 .product-grid .product-thumb .button-group {
      justify-content: space-between
    }

    .module-products-272 .product-grid.product-grid .product-thumb .button-group {
      padding: 8px;
      padding-bottom: 5px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-272 .product-grid .product-thumb .cart-group {
      display: inline-flex
    }

    .module-products-272 .product-grid .product-thumb .btn-cart::before {
      display: none;
      font-size: 16px;
      left: 2px;
      margin-right: 2px
    }

    .module-products-272 .product-grid .product-thumb .btn-cart .btn-text {
      display: inline-block;
      padding: 0
    }

    .module-products-272 .product-grid.product-grid .product-thumb .btn-cart {
      flex: initial
    }

    .module-products-272 .product-grid.product-grid .product-thumb .cart-group {
      flex: initial
    }

    .module-products-272 .product-grid .product-thumb .btn-cart.btn,
    .module-products-272 .product-grid .product-thumb .btn-cart.btn:visited {
      text-transform: none
    }

    .module-products-272 .product-grid .product-thumb .btn-cart.btn {
      padding: 2px;
      padding-right: 7px;
      padding-left: 7px;
      min-width: 20px;
      min-height: 20px
    }

    .desktop .module-products-272 .product-grid .product-thumb .btn-cart.btn:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .btn-cart.btn:active,
    .module-products-272 .product-grid .product-thumb .btn-cart.btn:hover:active,
    .module-products-272 .product-grid .product-thumb .btn-cart.btn:focus:active {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .btn-cart.btn:focus {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-272 .product-grid .product-thumb .stepper {
      display: none;
      margin-right: 5px;
      height: 36px
    }

    .module-products-272 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
      margin: -10px;
      margin-top: 10px
    }

    .module-products-272 .product-grid .button-group-bottom .wish-group-bottom {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist {
      display: inline-flex;
      margin-right: 5px;
      margin-left: 5px
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist::before {
      display: inline-block;
      font-size: 15px
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist .btn-text {
      display: none
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn,
    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn:active,
    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn:hover:active,
    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn:focus:active {
      background: none !important
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn:focus {
      background: none
    }

    .module-products-272 .product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-272 .product-grid .product-thumb .btn-compare {
      display: inline-flex
    }

    .module-products-272 .product-grid .product-thumb .btn-compare::before {
      display: inline-block;
      font-size: 14px
    }

    .module-products-272 .product-grid .product-thumb .btn-compare .btn-text {
      display: none
    }

    .module-products-272 .product-grid .product-thumb .btn-compare.btn,
    .module-products-272 .product-grid .product-thumb .btn-compare.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-272 .product-grid .product-thumb .btn-compare.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-272 .product-grid .product-thumb .btn-compare.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-272 .product-grid .product-thumb .btn-compare.btn:active,
    .module-products-272 .product-grid .product-thumb .btn-compare.btn:hover:active,
    .module-products-272 .product-grid .product-thumb .btn-compare.btn:focus:active {
      background: none !important
    }

    .module-products-272 .product-grid .product-thumb .btn-compare.btn:focus {
      background: none
    }

    .module-products-272 .product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-272 .product-grid .product-thumb .extra-group {
      display: none
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn:first-child {
      display: inline-flex
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn-extra+.btn {
      display: inline-flex
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn:first-child::before {
      display: inline-block
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn::before {
      display: inline-block
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-272 .product-grid .product-layout .extra-group>div {
      justify-content: space-between
    }

    .module-products-272 .product-grid .product-thumb .extra-group>div {
      padding: 4px
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn,
    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn:visited {
      text-transform: none
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn {
      padding: 2px;
      padding-right: 7px;
      padding-left: 7px;
      min-width: 20px;
      min-height: 20px
    }

    .desktop .module-products-272 .product-grid .product-thumb .extra-group .btn.btn:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn:active,
    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn:focus {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn,
    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
      text-transform: none
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn {
      padding: 2px;
      padding-right: 7px;
      padding-left: 7px;
      min-width: 20px;
      min-height: 20px
    }

    .desktop .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-272 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-272 .product-grid.product-grid .product-thumb .extra-group {
      position: static;
      margin-top: initial
    }

    .module-products-272 .product-grid.product-grid .product-thumb .extra-group>div {
      position: static;
      transform: none;
      opacity: 1
    }

    .module-products-272 .product-grid.product-grid .product-thumb .buttons-wrapper {
      position: static;
      width: auto;
      overflow: visible;
      order: initial;
      margin-top: auto;
      transform: none
    }

    .module-products-272 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
      position: static;
      opacity: 1;
      visibility: visible;
      transform: none
    }

    .module-products-272 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
      transform: none
    }

    .module-products-272 .product-grid.product-grid .wish-group {
      position: static;
      width: auto;
      top: auto;
      visibility: visible;
      opacity: 1;
      transform: translate3d(0, 0, 0);
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .module-products-272 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .module-products-272 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }

      .one-column #content .module-products-272 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .one-column #content .module-products-272 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }
    }

    .module-popup-195 .popup-container {
      width: 800px
    }

    .module-popup-195 .popup-content,
    .popup.module-popup-195 .site-wrapper {
      padding: 0px !important
    }

    .module-popup-195 .title.popup-header {
      padding: 20px;
      padding-bottom: 0px
    }

    .module-popup-195 .popup-footer {
      background: rgba(238, 238, 238, 1);
      padding: 15px
    }

    .module-popup-195 .popup-dont-show {
      padding: 3px;
      padding-right: 5px;
      padding-left: 5px;
      position: absolute;
      left: 5px;
      right: auto;
      top: 50%;
      transform: translateY(-50%)
    }

    .module-popup-195 .grid-row-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .module-popup-195 .grid-row-1 .grid-col-1 {
      width: 40%;
      background-image: url('image/cache/catalog/journal3/people/rawpixel-798167-unsplash-1500x1000.jpg');
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover
    }

    .module-popup-195 .grid-row-1 .grid-col-1 .grid-item {
      height: auto
    }

    .module-popup-195 .grid-row-1 .grid-col-1 .grid-items {
      justify-content: center
    }

    .module-popup-195 .grid-row-1 .grid-col-2 {
      width: 60%;
      background: rgba(255, 255, 255, 1);
      padding: 30px
    }

    .module-popup-195 .grid-row-1 .grid-col-2 .grid-item {
      height: auto
    }

    .module-popup-195 .grid-row-1 .grid-col-2 .grid-items {
      justify-content: center
    }

    @media (max-width: 760px) {
      .module-popup-195 .grid-row-1 .grid-col-2 {
        width: 100%;
        padding: 10px
      }
    }

    .module-newsletter-113 {
      padding: 10px;
      text-align: left;
      justify-content: flex-start
    }

    .module-newsletter-113 .title.module-title {
      font-size: 18px;
      font-weight: 700;
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin-bottom: 15px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .module-newsletter-113 .title.module-title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 7px
    }

    .module-newsletter-113 .title.module-title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 7px
    }

    .module-newsletter-113 .title.module-title::after,
    .module-newsletter-113 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .module-newsletter-113 .module-body>div {
      align-self: flex-start
    }

    .module-newsletter-113 .title::after {
      left: 0;
      right: auto;
      transform: none
    }

    .module-newsletter-113 .module-body {
      flex-direction: column
    }

    .module-newsletter-113 .newsletter-text {
      font-size: 15px;
      color: rgba(109, 118, 125, 1);
      padding-bottom: 10px
    }

    .module-newsletter-113 .module-body .input-group {
      height: 50px
    }

    .module-newsletter-113 .module-body .newsletter-form .input-group input {
      width: 500px;
      max-width: 100%
    }

    .module-newsletter-113 .btn::before {
      content: '\eb79' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .module-newsletter-113 .input-group .input-group-btn .btn,
    .module-newsletter-113 .input-group .input-group-btn .btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .module-newsletter-113 .input-group .input-group-btn .btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .module-newsletter-113 .input-group .input-group-btn .btn:active,
    .module-newsletter-113 .input-group .input-group-btn .btn:hover:active,
    .module-newsletter-113 .input-group .input-group-btn .btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .module-newsletter-113 .input-group .input-group-btn .btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-newsletter-113 .input-group .input-group-btn .btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px;
      min-height: 40px;
      height: 40px
    }

    .module-newsletter-113 .input-group .input-group-btn .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-newsletter-113 .input-group-btn .btn {
      transform: translateX(-5px);
      margin-top: 5px
    }

    @media (max-width: 760px) {
      .module-newsletter-113 .module-body .newsletter-form .checkbox {
        padding-top: 12px
      }
    }

    .icons-menu-269 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .icons-menu-269 .title.module-title::after,
    .icons-menu-269 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .icons-menu-269 .title.module-title::after {
      margin-top: 7px
    }

    .icons-menu-269 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    .icons-menu-269 a {
      background: rgba(39, 124, 217, 1);
      width: 40px;
      height: 40px
    }

    .desktop .icons-menu-269 a:hover {
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .icons-menu-269 a::before {
      color: rgba(255, 255, 255, 1)
    }

    .icons-menu-269 .menu-item a {
      border-radius: 50%
    }

    .icons-menu-269>ul {
      margin: 5px
    }

    .icons-menu-269 .links-text {
      white-space: normal;
      overflow: visible;
      text-overflow: ellipsis;
      display: none
    }

    .icons-menu-269>ul>.icons-menu-item {
      padding: calc(10px / 2)
    }

    .icons-menu-269 ul {
      justify-content: flex-start
    }

    .icons-menu-269 .module-title {
      text-align: left
    }

    .icons-menu-269 .module-title::after {
      left: 0;
      right: auto;
      transform: none
    }

    .icons-menu-269 .icons-menu-item-1.icon-menu-icon>a::before {
      content: '\f09a' !important;
      font-family: icomoon !important
    }

    .icons-menu-269 .icons-menu-item-2.icon-menu-icon>a::before {
      content: '\f099' !important;
      font-family: icomoon !important
    }

    .icons-menu-269 .icons-menu-item-3.icon-menu-icon>a::before {
      content: '\e90e' !important;
      font-family: icomoon !important;
      font-size: 18px
    }

    .icons-menu-269 .icons-menu-item-4.icon-menu-icon>a::before {
      content: '\f0e1' !important;
      font-family: icomoon !important
    }

    .icons-menu-269 .icons-menu-item-5.icon-menu-icon>a::before {
      content: '\f167' !important;
      font-family: icomoon !important
    }

    .icons-menu-269 .icons-menu-item-6.icon-menu-icon>a::before {
      content: '\f17e' !important;
      font-family: icomoon !important
    }

    .icons-menu-269 .icons-menu-item-7.icon-menu-icon>a::before {
      content: '\f0d3' !important;
      font-family: icomoon !important
    }

    .icons-menu-269 .icons-menu-item-8.icon-menu-icon>a::before {
      content: '\f232' !important;
      font-family: icomoon !important
    }

    .module-notification-137 {
      color: rgba(238, 238, 238, 1);
      padding: 20px;
      padding-top: 15px;
      padding-bottom: 15px;
      background: rgba(0, 0, 0, 0.8)
    }

    .module-notification-137 a {
      text-decoration: underline
    }

    .module-notification-137 .notification-close {
      display: flex;
      margin-left: 10px;
      margin-right: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
      top: 0;
      bottom: initial;
      left: initial;
      right: 0;
      transform: none
    }

    .module-notification-137 .notification-close.btn {
      background: #089A49
    }

    .module-notification-137 .notification-close.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-notification-137 .notification-close.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-header_notice-56 .hn-close::before {
      content: '\ebeb' !important;
      font-family: icomoon !important;
      font-size: 22px;
      color: #089A49
    }

    .module-header_notice-56 .hn-close:hover::before {
      color: rgba(60, 196, 114, 1)
    }

    .module-header_notice-56 .hn-close.btn,
    .module-header_notice-56 .hn-close.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-header_notice-56 .hn-close.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-header_notice-56 .hn-close.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-header_notice-56 .hn-close.btn:active,
    .module-header_notice-56 .hn-close.btn:hover:active,
    .module-header_notice-56 .hn-close.btn:focus:active {
      background: none !important
    }

    .module-header_notice-56 .hn-close.btn:focus {
      background: none
    }

    .module-header_notice-56 .hn-close.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-header_notice-56 .hn-close {
      margin-left: 8px
    }

    .module-header_notice-56 .module-body p {
      margin-bottom: 7px
    }

    .module-header_notice-56 .module-body {
      height: auto;
      flex-direction: row;
      background: rgba(196, 202, 253, 1);
      padding: 7px
    }

    .module-header_notice-56 .header-notice-close-button {
      position: relative;
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      transform: none
    }

    .module-header_notice-56 .hn-content a {
      text-decoration: underline
    }

    .module-header_notice-56 .hn-body::before {
      float: none
    }

    .module-header_notice-56 .hn-body {
      display: flex
    }

    div.links-menu-120 .module-body {
      display: block;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-120 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0;
      justify-content: flex-start;
      background: rgba(245, 245, 245, 1)
    }

    div.links-menu-120 .menu-item a .links-text {
      white-space: normal;
      color: rgba(109, 118, 125, 1)
    }

    div.links-menu-120 .menu-item a {
      justify-content: flex-start;
      padding: 7px;
      padding-left: 10px
    }

    div.links-menu-120 .menu-item:hover {
      background: #089A49
    }

    div.links-menu-120 .menu-item a:hover .links-text {
      color: rgba(255, 255, 255, 1)
    }

    .phone footer div.links-menu-120 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-120 .module-title+.module-body>li {
      display: flex
    }

    .module-catalog-119 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 2 * 10px) / 3 - 0.01px)
    }

    .module-catalog-119 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-catalog-119 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 3 * 10px) / 4 - 0.01px)
    }

    .one-column #content .module-catalog-119 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 4 - 0.01px)
    }

    .two-column #content .module-catalog-119 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 2 * 10px) / 3 - 0.01px)
    }

    .two-column #content .module-catalog-119 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 3 - 0.01px)
    }

    .side-column .module-catalog-119 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .side-column .module-catalog-119 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-catalog-119 .catalog-title {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: #089A49
    }

    .module-catalog-119 .catalog-title {
      margin-bottom: 8px;
      display: flex;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      width: auto;
      margin-left: 0;
      margin-right: auto;
      justify-content: flex-start;
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .module-catalog-119 .subitems {
      align-items: flex-start
    }

    .module-catalog-119 .subitem>a span {
      font-size: 13px;
      color: rgba(109, 118, 125, 1)
    }

    .module-catalog-119 .subitem>a:hover span {
      color: #089A49
    }

    .module-catalog-119 .subitem.view-more a span {
      font-size: 13px;
      color: rgba(39, 124, 217, 1)
    }

    .module-catalog-119 .subitem.view-more a:hover span {
      color: #089A49
    }

    .module-catalog-119 .subitem>a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      padding-bottom: 5px
    }

    .module-catalog-119 .subitem>a::before {
      content: '\e409' !important;
      font-family: icomoon !important;
      font-size: 10px
    }

    .module-catalog-119 .catalog-image {
      margin-right: 8px
    }

    .module-catalog-119 .item-assets {
      flex-direction: row
    }

    .module-catalog-119 .item-assets>a {
      max-width: 40%;
      order: 0
    }

    .module-catalog-119 .item-assets .subitems {
      width: 60%
    }

    .module-catalog-119 .item-assets .catalog-image {
      display: block
    }

    @media (max-width: 760px) {
      .module-catalog-119 .module-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .module-catalog-119 .module-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }

      .module-catalog-119 .subitem>a span {
        font-size: 15px
      }

      .module-catalog-119 .subitem.view-more a span {
        font-size: 15px
      }

      .module-catalog-119 .subitem>a {
        padding-bottom: 12px
      }
    }

    div.links-menu-199 .title.module-title {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    div.links-menu-199 .title.module-title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    div.links-menu-199 .title.module-title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    div.links-menu-199 .title.module-title::after,
    div.links-menu-199 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    div.links-menu-199 .module-body {
      display: block;
      justify-content: flex-start;
      ;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-199 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0;
      justify-content: flex-start;
      background: rgba(245, 245, 245, 1);
      white-space: nowrap
    }

    div.links-menu-199 .menu-item a .links-text {
      white-space: normal;
      color: rgba(109, 118, 125, 1)
    }

    div.links-menu-199 .menu-item a {
      justify-content: flex-start;
      padding: 7px;
      padding-left: 12px
    }

    div.links-menu-199 .menu-item:hover {
      background: rgba(60, 196, 114, 1)
    }

    div.links-menu-199 .menu-item a:hover .links-text {
      color: rgba(255, 255, 255, 1)
    }

    .mobile.touchevents div.links-menu-199 .module-body {
      overflow-x: scroll
    }

    div.links-menu-199 .module-body::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px
    }

    div.links-menu-199 .module-body::-webkit-scrollbar-track {
      background-color: white
    }

    div.links-menu-199 .module-body::-webkit-scrollbar-thumb {
      background-color: #999
    }

    .phone footer div.links-menu-199 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-199 .module-title+.module-body>li {
      display: flex
    }

    .module-catalog-161 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 2 * 10px) / 3 - 0.01px)
    }

    .module-catalog-161 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-catalog-161 .module-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 2 * 20px) / 3 - 0.01px)
    }

    .one-column #content .module-catalog-161 .module-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 3 - 0.01px)
    }

    .two-column #content .module-catalog-161 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 1 * 10px) / 2 - 0.01px)
    }

    .two-column #content .module-catalog-161 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 2 - 0.01px)
    }

    .side-column .module-catalog-161 .module-item.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .side-column .module-catalog-161 .module-item:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-catalog-161 .swiper-container {
      overflow: hidden
    }

    .module-catalog-161 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-catalog-161:hover .swiper-buttons {
      display: block
    }

    .module-catalog-161 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-catalog-161 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-catalog-161 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-catalog-161 .swiper-button-disabled {
      opacity: 0
    }

    .module-catalog-161 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-catalog-161 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-catalog-161 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-catalog-161 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-catalog-161 .swiper {
      padding-bottom: 10px
    }

    .module-catalog-161 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-catalog-161 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-catalog-161 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-catalog-161 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-catalog-161 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-catalog-161 .catalog-title {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: #089A49
    }

    .module-catalog-161 .catalog-title {
      margin-bottom: 8px;
      display: flex;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      width: auto;
      margin-left: 0;
      margin-right: auto;
      justify-content: flex-start;
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .module-catalog-161 .subitems {
      align-items: flex-start
    }

    .module-catalog-161 .subitem>a span {
      font-size: 13px;
      color: rgba(109, 118, 125, 1)
    }

    .module-catalog-161 .subitem>a:hover span {
      color: #089A49
    }

    .module-catalog-161 .subitem.view-more a span {
      font-size: 13px;
      color: rgba(39, 124, 217, 1)
    }

    .module-catalog-161 .subitem.view-more a:hover span {
      color: #089A49
    }

    .module-catalog-161 .subitem>a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      padding-bottom: 5px
    }

    .module-catalog-161 .subitem>a::before {
      content: '\e409' !important;
      font-family: icomoon !important;
      font-size: 10px
    }

    .module-catalog-161 .catalog-image {
      margin-right: 8px
    }

    .module-catalog-161 .item-assets {
      flex-direction: row
    }

    .module-catalog-161 .item-assets>a {
      max-width: 40%;
      order: 0
    }

    .module-catalog-161 .item-assets .subitems {
      width: 60%
    }

    .module-catalog-161 .item-assets .catalog-image {
      display: block
    }

    @media (max-width: 760px) {
      .module-catalog-161 .module-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .module-catalog-161 .module-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }

      .module-catalog-161 .subitem>a span {
        font-size: 15px
      }

      .module-catalog-161 .subitem.view-more a span {
        font-size: 15px
      }

      .module-catalog-161 .subitem>a {
        padding-bottom: 12px
      }
    }

    div.links-menu-206 .module-body {
      display: block;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-206 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0;
      justify-content: flex-start
    }

    div.links-menu-206 .menu-item a .links-text {
      white-space: normal
    }

    div.links-menu-206 .menu-item a {
      justify-content: flex-start;
      padding-bottom: 3px;
      padding-left: 7px
    }

    div.links-menu-206 .menu-item a:hover .links-text {
      text-decoration: underline
    }

    .phone footer div.links-menu-206 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-206 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-208 .module-body {
      display: block;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-208 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0;
      justify-content: flex-start
    }

    div.links-menu-208 .menu-item a .links-text {
      white-space: normal
    }

    div.links-menu-208 .menu-item a {
      justify-content: flex-start;
      padding-bottom: 3px;
      padding-left: 7px
    }

    div.links-menu-208 .menu-item a:hover .links-text {
      text-decoration: underline
    }

    .phone footer div.links-menu-208 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-208 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-210 .module-body {
      padding-bottom: 10px;
      display: block;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-210 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0;
      justify-content: flex-start
    }

    div.links-menu-210 .menu-item a .links-text {
      white-space: normal
    }

    div.links-menu-210 .menu-item a {
      justify-content: flex-start;
      padding-bottom: 3px;
      padding-left: 7px
    }

    div.links-menu-210 .menu-item a:hover .links-text {
      text-decoration: underline
    }

    .phone footer div.links-menu-210 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-210 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-211 .module-body {
      display: block;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-211 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0;
      justify-content: flex-start
    }

    div.links-menu-211 .menu-item a .links-text {
      white-space: normal
    }

    div.links-menu-211 .menu-item a {
      justify-content: flex-start;
      padding-bottom: 3px;
      padding-left: 7px
    }

    div.links-menu-211 .menu-item a:hover .links-text {
      text-decoration: underline
    }

    .phone footer div.links-menu-211 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-211 .module-title+.module-body>li {
      display: flex
    }

    .module-banners-270 .swiper-container {
      overflow: hidden
    }

    .module-banners-270 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-banners-270:hover .swiper-buttons {
      display: block
    }

    .module-banners-270 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-banners-270 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-banners-270 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-banners-270 .swiper-button-disabled {
      opacity: 0
    }

    .module-banners-270 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-banners-270 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-banners-270 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-banners-270 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-banners-270 .swiper {
      padding-bottom: 10px
    }

    .module-banners-270 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-banners-270 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-banners-270 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-banners-270 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-banners-270 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-banners-270 .module-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .module-banners-270 .module-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-banners-270 .module-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .one-column #content .module-banners-270 .module-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-banners-270 .module-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .two-column #content .module-banners-270 .module-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-banners-270 .module-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 0 * 20px) / 1 - 0.01px)
    }

    .side-column .module-banners-270 .module-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-banners-270:not(.carousel-mode) .module-body {
      margin: -10px
    }

    .module-banners-270 a img {
      transform: scale(1)
    }

    .desktop .module-banners-270 a:hover img {
      transform: scale(1.15)
    }

    .module-banners-270 .module-item>a::before {
      background: rgba(52, 59, 151, 0.2)
    }

    .module-banners-270 a::before {
      opacity: 0
    }

    .desktop .module-banners-270 a:hover::before {
      opacity: 1
    }

    .module-banners-270 .banner-caption {
      visibility: hidden;
      opacity: 0;
      display: block;
      top: auto;
      left: 50%;
      right: auto;
      bottom: 0;
      transform: translate3d(-50%, 0, 0)
    }

    .desktop .module-banners-270 a:hover .banner-caption {
      visibility: visible;
      opacity: 1
    }

    .module-banners-270 a .banner-caption {
      width: 100%
    }

    .module-banners-270 .banner-caption span {
      color: rgba(255, 255, 255, 1);
      text-align: center;
      background: rgba(60, 196, 114, 1);
      padding: 10px
    }

    div.links-menu-205 .module-body {
      background: rgba(238, 238, 238, 1);
      padding: 7px;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      ;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-205 .menu-item {
      border-width: 0 0 0 1px;
      flex-grow: 0;
      justify-content: flex-start;
      white-space: nowrap
    }

    div.links-menu-205 .menu-item a .links-text {
      white-space: nowrap;
      font-size: 13px;
      color: rgba(48, 56, 65, 1)
    }

    div.links-menu-205 .menu-item a {
      justify-content: flex-start;
      padding-left: 7px
    }

    div.links-menu-205 .menu-item a:hover .links-text {
      color: #089A49
    }

    div.links-menu-205 .menu-item a::before {
      content: '\f111' !important;
      font-family: icomoon !important;
      font-size: 3px;
      color: rgba(109, 118, 125, 1);
      margin-right: 7px
    }

    div.links-menu-205 .menu-item a:hover::before {
      color: rgba(109, 118, 125, 1)
    }

    .mobile.touchevents div.links-menu-205 .module-body {
      overflow-x: scroll
    }

    div.links-menu-205 .module-body::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px
    }

    div.links-menu-205 .module-body::-webkit-scrollbar-track {
      background-color: white
    }

    div.links-menu-205 .module-body::-webkit-scrollbar-thumb {
      background-color: #999
    }

    .phone footer div.links-menu-205 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-205 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-205 .links-menu-item-1>a::before {
      content: none !important
    }

    div.links-menu-205 .links-menu-item-1 a .links-text {
      font-weight: 700
    }

    .module-banners-201 .swiper-container {
      overflow: hidden
    }

    .module-banners-201 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-banners-201:hover .swiper-buttons {
      display: block
    }

    .module-banners-201 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-banners-201 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-banners-201 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-banners-201 .swiper-button-disabled {
      opacity: 0
    }

    .module-banners-201 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-banners-201 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-banners-201 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-banners-201 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-banners-201 .swiper {
      padding-bottom: 10px
    }

    .module-banners-201 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-banners-201 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-banners-201 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-banners-201 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-banners-201 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-banners-201 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .module-banners-201 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-banners-201 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .one-column #content .module-banners-201 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-banners-201 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .module-banners-201 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-banners-201 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .module-banners-201 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-banners-201 a img {
      transform: scale(1)
    }

    .module-banners-201 .module-item>a::before {
      background: rgba(52, 59, 151, 0.2)
    }

    .module-banners-201 a::before {
      opacity: 0
    }

    .desktop .module-banners-201 a:hover::before {
      opacity: 1
    }

    .module-banners-201 .banner-caption {
      visibility: hidden;
      opacity: 0;
      display: block;
      top: auto;
      left: 50%;
      right: auto;
      bottom: 0;
      transform: translate3d(-50%, 0, 0)
    }

    .desktop .module-banners-201 a:hover .banner-caption {
      visibility: visible;
      opacity: 1
    }

    .module-banners-201 a .banner-caption {
      width: 100%
    }

    .module-banners-201 .banner-caption span::after {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      margin-left: 5px
    }

    .module-banners-201 .banner-caption span {
      color: rgba(255, 255, 255, 1);
      text-align: center;
      background: #089A49;
      padding: 10px
    }

    .module-products-213 .title.module-title {
      font-family: 'IBM Plex Sans';
      font-weight: 700;
      font-size: 14px;
      color: rgba(48, 56, 65, 1);
      text-transform: uppercase;
      border-width: 0px;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      text-align: left
    }

    .module-products-213 .title.module-title::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .module-products-213 .title.module-title.page-title>span::after {
      content: '';
      display: block;
      position: relative;
      margin-top: 8px;
      left: initial;
      right: initial;
      margin-left: 0;
      margin-right: auto;
      transform: none
    }

    .module-products-213 .title.module-title::after,
    .module-products-213 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .module-products-213 .swiper-container {
      overflow: hidden
    }

    .module-products-213 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-products-213:hover .swiper-buttons {
      display: block
    }

    .module-products-213 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-products-213 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-products-213 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-products-213 .swiper-button-disabled {
      opacity: 0
    }

    .module-products-213 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-213 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-products-213 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-products-213 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-products-213 .swiper {
      padding-bottom: 10px
    }

    .module-products-213 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-products-213 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-products-213 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-products-213 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-products-213 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-products-213 .nav-tabs>li>a,
    .module-products-213 .nav-tabs>li.active>a,
    .module-products-213 .nav-tabs>li.active>a:hover,
    .module-products-213 .nav-tabs>li.active>a:focus {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .module-products-213 .nav-tabs>li:hover>a,
    .module-products-213 .nav-tabs>li.active>a {
      color: #089A49
    }

    .module-products-213 .nav-tabs {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      display: flex;
      justify-content: flex-start;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      ;
      min-width: 50px
    }

    .module-products-213 .nav-tabs>li {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0);
      flex-grow: 0
    }

    .module-products-213 .nav-tabs>li.active {
      border-color: #089A49
    }

    .module-products-213 .nav-tabs>li.active::after {
      display: none;
      border-top-width: 10px
    }

    .module-products-213 .nav-tabs>li>a {
      justify-content: center;
      white-space: nowrap;
      padding: 0px;
      padding-bottom: 10px
    }

    .module-products-213 .nav-tabs>li>a::before {
      font-size: 18px
    }

    .module-products-213 .nav-tabs>li:not(:last-child) {
      margin-right: 20px
    }

    .module-products-213 .mobile .nav-tabs {
      overflow-x: scroll
    }

    .module-products-213 .nav-tabs::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px;
      height: 1px;
      width: 1px
    }

    .module-products-213 .nav-tabs::-webkit-scrollbar-track {
      background-color: white;
      background-color: rgba(255, 255, 255, 1)
    }

    .module-products-213 .nav-tabs::-webkit-scrollbar-thumb {
      background-color: #999;
      background-color: rgba(60, 196, 114, 1)
    }

    .module-products-213 .tab-container::before {
      display: none
    }

    .module-products-213 .tab-content {
      padding-top: 20px
    }

    .module-products-213 .tab-container {
      display: block
    }

    .module-products-213 .tab-container .nav-tabs {
      flex-direction: row
    }

    .module-products-213 .product-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 2 * 10px) / 3 - 0.01px)
    }

    .module-products-213 .product-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 3 - 0.01px)
    }

    .one-column #content .module-products-213 .product-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 2 * 10px) / 3 - 0.01px)
    }

    .one-column #content .module-products-213 .product-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 3 - 0.01px)
    }

    .two-column #content .module-products-213 .product-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 2 * 10px) / 3 - 0.01px)
    }

    .two-column #content .module-products-213 .product-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 3 - 0.01px)
    }

    .side-column .module-products-213 .product-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .side-column .module-products-213 .product-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-products-213 .product-grid .product-thumb .product-img {
      border-width: 5px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .desktop .module-products-213 .product-grid .product-thumb:hover .product-img {
      border-color: #089A49
    }

    .module-products-213 .product-grid .product-thumb .product-labels {
      display: none;
      visibility: visible;
      opacity: 1
    }

    .module-products-213 .product-grid .product-thumb .quickview-button {
      display: flex;
      left: 50%;
      top: 0;
      bottom: auto;
      right: auto;
      transform: translate3d(-50%, 0, 1px)
    }

    .module-products-213 .product-grid .product-thumb .btn-quickview {
      visibility: hidden;
      opacity: 0;
      transform: scale(.88);
      width: 30px;
      height: 30px
    }

    .module-products-213 .product-grid .product-thumb:hover .btn-quickview {
      visibility: visible;
      opacity: 1;
      transform: scale(1)
    }

    .module-products-213 .product-grid .product-thumb .btn-quickview .btn-text {
      display: none
    }

    .module-products-213 .product-grid .product-thumb .btn-quickview::before {
      display: inline-block;
      content: '\eb54' !important;
      font-family: icomoon !important;
      font-size: 14px
    }

    .module-products-213 .product-grid .product-thumb .image .btn {
      background: #089A49
    }

    .module-products-213 .product-grid .product-thumb .image .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-213 .product-grid .product-thumb .image .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-grid .product-thumb .countdown {
      display: none;
      visibility: visible;
      opacity: 1;
      transform: translate3d(-50%, 0, 1px) scale(1)
    }

    .module-products-213 .product-grid.product-list .product-layout .image {
      float: left;
      height: 100%
    }

    .module-products-213 .product-grid .product-thumb .stats {
      display: flex;
      justify-content: space-between;
      padding-top: 2px;
      padding-bottom: 3px;
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-213 .product-grid .stat-1 .stats-label {
      display: none
    }

    .module-products-213 .product-grid .stat-2 .stats-label {
      display: none
    }

    .module-products-213 .product-grid.product-grid .product-thumb .rating {
      position: absolute;
      visibility: visible;
      opacity: 1;
      top: 0
    }

    .module-products-213 .product-grid.product-grid .product-thumb .rating-stars {
      position: absolute;
      visibility: visible;
      opacity: 1;
      transform: translateY(-50%)
    }

    .module-products-213 .product-grid .product-thumb .rating {
      justify-content: center;
      display: flex
    }

    .module-products-213 .product-grid .product-thumb .rating.no-rating {
      display: none
    }

    .module-products-213 .product-grid .product-thumb .rating-stars {
      padding-bottom: 10px;
      margin-top: -5px
    }

    .module-products-213 .product-grid .product-thumb .rating.no-rating span {
      opacity: 0.5
    }

    .module-products-213 .product-grid .product-thumb .name {
      display: flex;
      width: 100%;
      margin-left: 0;
      margin-right: 0;
      justify-content: flex-start;
      margin-left: 0;
      margin-right: auto;
      margin-top: 5px
    }

    .module-products-213 .product-grid .product-thumb .name a {
      white-space: normal;
      overflow: visible;
      text-overflow: initial;
      font-size: 14px;
      color: rgba(58, 71, 80, 1);
      font-weight: 700;
      text-align: left;
      text-align: left
    }

    .module-products-213 .product-grid .product-thumb .name a:hover {
      color: rgba(53, 66, 174, 1)
    }

    .module-products-213 .product-grid .product-thumb .description {
      display: none;
      padding: 12px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-bottom-width: 1px;
      border-style: solid
    }

    .module-products-213 .product-grid .product-thumb .price {
      display: block;
      font-size: 14px;
      color: rgba(58, 71, 80, 1);
      text-align: left;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      margin-left: 0;
      margin-right: auto;
      text-align: left;
      justify-content: flex-start;
      margin-top: 3px
    }

    .module-products-213 .product-grid .product-thumb .price-tax {
      display: none;
      font-size: 12px;
      text-align: left
    }

    .module-products-213 .product-grid .product-thumb .price-new {
      color: #089A49;
      margin: 0 7px 0 0;
      order: 1
    }

    .module-products-213 .product-grid .product-thumb .price-old {
      font-size: 12px;
      color: rgba(109, 118, 125, 1);
      text-decoration: line-through;
      margin: 0;
      order: 2
    }

    .module-products-213 .product-grid .product-thumb .price>div {
      align-items: center;
      flex-direction: row
    }

    .module-products-213 .product-grid .product-thumb .button-group {
      justify-content: center
    }

    .module-products-213 .product-grid.product-grid .product-thumb .button-group {
      background: #089A49
    }

    .module-products-213 .product-grid .product-thumb .cart-group {
      display: inline-flex
    }

    .module-products-213 .product-grid .product-thumb .btn-cart {
      width: 30px;
      height: 30px
    }

    .module-products-213 .product-grid .product-thumb .btn-wishlist {
      width: 30px;
      height: 30px;
      display: inline-flex
    }

    .module-products-213 .product-grid .product-thumb .btn-compare {
      width: 30px;
      height: 30px;
      display: inline-flex
    }

    .module-products-213 .product-grid .product-thumb .btn-cart .btn-text {
      display: none
    }

    .module-products-213 .product-grid .product-thumb .btn-cart::before {
      display: inline-block;
      font-size: 13px;
      left: 2px;
      margin-right: 2px
    }

    .module-products-213 .product-grid.product-grid .product-thumb .btn-cart {
      flex: initial
    }

    .module-products-213 .product-grid.product-grid .product-thumb .cart-group {
      flex: initial
    }

    .module-products-213 .product-grid .product-thumb .btn-cart.btn {
      background: #089A49;
      border-radius: 0px !important
    }

    .module-products-213 .product-grid .product-thumb .btn-cart.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-213 .product-grid .product-thumb .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-grid .product-thumb .stepper {
      display: none;
      margin-right: 5px;
      height: 30px
    }

    .module-products-213 .product-grid .button-group-bottom .wish-group.wish-group-bottom {
      margin: -10px;
      margin-top: 10px
    }

    .module-products-213 .product-grid .button-group-bottom .wish-group-bottom {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid
    }

    .module-products-213 .product-grid .product-thumb .btn-wishlist::before {
      display: inline-block;
      font-size: 13px
    }

    .module-products-213 .product-grid .product-thumb .btn-wishlist .btn-text {
      display: none
    }

    .module-products-213 .product-grid .product-thumb .btn-wishlist.btn {
      background: #089A49;
      border-radius: 0px !important
    }

    .module-products-213 .product-grid .product-thumb .btn-wishlist.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-213 .product-grid .product-thumb .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-grid .product-thumb .btn-compare::before {
      display: inline-block;
      font-size: 13px
    }

    .module-products-213 .product-grid .product-thumb .btn-compare .btn-text {
      display: none
    }

    .module-products-213 .product-grid .product-thumb .btn-compare.btn {
      background: #089A49;
      border-radius: 0px !important
    }

    .module-products-213 .product-grid .product-thumb .btn-compare.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-213 .product-grid .product-thumb .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-grid .product-thumb .extra-group {
      display: none
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn:first-child {
      display: inline-flex
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn-extra+.btn {
      display: inline-flex
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn:first-child::before {
      display: inline-block;
      color: rgba(60, 196, 114, 1)
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn:first-child .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn::before {
      display: inline-block;
      color: #089A49
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-213 .product-grid .product-layout .extra-group>div {
      justify-content: flex-start
    }

    .module-products-213 .product-grid .product-thumb .extra-group>div {
      padding-top: 4px;
      margin-top: 5px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1)
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn,
    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn:active,
    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn:hover:active,
    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn:focus:active {
      background: none !important
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn:focus {
      background: none
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn,
    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:active,
    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:hover:active,
    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus:active {
      background: none !important
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn:focus {
      background: none
    }

    .module-products-213 .product-grid .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-grid.product-grid .product-thumb .extra-group {
      position: static;
      margin-top: auto
    }

    .module-products-213 .product-grid.product-grid .product-thumb .extra-group>div {
      position: static;
      transform: none;
      opacity: 1
    }

    .module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper {
      position: absolute;
      overflow: hidden;
      width: 100%;
      left: 50%;
      transform: translate3d(-50%, -100%, 1px)
    }

    .module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
      position: relative;
      opacity: 0;
      visibility: hidden;
      transform: translate3d(0, 15px, 1px)
    }

    .module-products-213 .product-grid.product-grid .product-thumb:hover .buttons-wrapper .button-group {
      opacity: 1;
      visibility: visible;
      transform: translate3d(0, 0, 1px)
    }

    .module-products-213 .product-grid.product-grid .wish-group {
      position: static;
      width: auto;
      top: auto;
      visibility: visible;
      opacity: 1;
      transform: translate3d(0, 0, 0);
      justify-content: flex-start
    }

    .module-products-213 .product-grid .product-thumb .btn-quickview.btn {
      border-radius: 0px !important
    }

    .module-products-213 .product-list .product-thumb {
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      padding-top: 20px
    }

    .module-products-213 .product-list:not(.product-grid) .product-layout:not(.swiper-slide)+.product-layout:not(.swiper-slide) {
      margin-top: 24px
    }

    .module-products-213 .product-list .product-thumb:hover .product-img>div {
      transform: scale(1.12)
    }

    .module-products-213 .product-list .product-thumb .product-labels {
      visibility: visible;
      opacity: 1
    }

    .module-products-213 .product-list .product-thumb .quickview-button {
      display: flex;
      left: 50%;
      top: 50%;
      bottom: auto;
      right: auto;
      transform: translate3d(-50%, -50%, 1px)
    }

    .module-products-213 .product-list .product-thumb .btn-quickview {
      visibility: hidden;
      opacity: 0;
      transform: scale(.88)
    }

    .module-products-213 .product-list .product-thumb:hover .btn-quickview {
      visibility: visible;
      opacity: 1;
      transform: scale(1)
    }

    .module-products-213 .product-list .product-thumb .btn-quickview .btn-text {
      display: none
    }

    .module-products-213 .product-list .product-thumb .btn-quickview::before {
      display: inline-block;
      content: '\eb54' !important;
      font-family: icomoon !important
    }

    .module-products-213 .product-list .product-thumb .image .btn {
      background: rgba(109, 118, 125, 1);
      border-width: 0px
    }

    .module-products-213 .product-list .product-thumb .image .btn:hover {
      background: rgba(48, 56, 65, 1) !important
    }

    .module-products-213 .product-list .product-thumb .image .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-list .product-thumb .countdown {
      display: flex;
      visibility: visible;
      opacity: 1;
      transform: translate3d(-50%, 0, 1px) scale(1)
    }

    .module-products-213 .product-list.product-list .product-layout .image {
      float: left;
      height: 100%
    }

    .module-products-213 .product-list .product-thumb .caption {
      padding-left: 20px
    }

    .module-products-213 .product-list .product-thumb .stats {
      display: flex;
      justify-content: flex-start;
      margin-bottom: 5px
    }

    .module-products-213 .product-list .stat-1 .stats-label {
      display: inline-block
    }

    .module-products-213 .product-list .stat-2 .stats-label {
      display: inline-block
    }

    .module-products-213 .product-list.product-grid .product-thumb .rating {
      position: static;
      visibility: visible;
      opacity: 1
    }

    .module-products-213 .product-list .product-thumb .rating {
      justify-content: flex-end;
      margin-bottom: 5px;
      display: flex
    }

    .module-products-213 .product-list .product-thumb .rating.no-rating {
      display: none
    }

    .module-products-213 .product-list .product-thumb .rating .fa-stack {
      font-size: 15px;
      width: 1.2em
    }

    .module-products-213 .product-list .product-thumb .rating-stars {
      margin-top: -18px
    }

    .module-products-213 .product-list .product-thumb .rating.no-rating span {
      opacity: .3
    }

    .module-products-213 .product-list .product-thumb .name {
      display: flex;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      justify-content: flex-start;
      margin-left: 0;
      margin-right: auto;
      margin-bottom: 5px
    }

    .module-products-213 .product-list .product-thumb .name a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      font-size: 18px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-align: left
    }

    .module-products-213 .product-list .product-thumb .description {
      display: block;
      color: rgba(109, 118, 125, 1);
      line-height: 1.5;
      margin-bottom: 5px
    }

    .module-products-213 .product-list .product-thumb .price {
      display: block;
      font-size: 22px;
      color: rgba(48, 56, 65, 1);
      text-align: left;
      width: auto;
      margin-left: auto;
      margin-right: auto;
      margin-left: 0;
      margin-right: auto;
      text-align: left;
      justify-content: flex-start;
      margin-bottom: 10px
    }

    .module-products-213 .product-list .product-thumb .price-tax {
      display: block;
      font-size: 12px
    }

    .module-products-213 .product-list .product-thumb .price-new {
      color: #089A49;
      margin: 0 7px 0 0;
      order: 1
    }

    .module-products-213 .product-list .product-thumb .price-old {
      font-size: 18px;
      color: rgba(109, 118, 125, 1);
      text-decoration: line-through;
      margin: 0;
      order: 2
    }

    .module-products-213 .product-list .product-thumb .price>div {
      align-items: center;
      flex-direction: row
    }

    .module-products-213 .product-list .product-thumb .button-group {
      justify-content: space-between
    }

    .module-products-213 .product-list .product-thumb .cart-group {
      display: inline-flex
    }

    .module-products-213 .product-list .product-thumb .btn-cart {
      height: 35px
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist {
      width: 35px;
      height: 35px;
      display: inline-flex;
      margin-right: 5px;
      margin-left: 5px
    }

    .module-products-213 .product-list .product-thumb .btn-compare {
      width: 35px;
      height: 35px;
      display: inline-flex
    }

    .module-products-213 .product-list .product-thumb .btn-cart::before {
      display: inline-block;
      font-size: 16px
    }

    .module-products-213 .product-list .product-thumb .btn-cart .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-213 .product-list.product-grid .product-thumb .btn-cart {
      flex: initial
    }

    .module-products-213 .product-list.product-grid .product-thumb .cart-group {
      flex: initial
    }

    .module-products-213 .product-list .product-thumb .btn-cart.btn,
    .module-products-213 .product-list .product-thumb .btn-cart.btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .module-products-213 .product-list .product-thumb .btn-cart.btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .module-products-213 .product-list .product-thumb .btn-cart.btn:active,
    .module-products-213 .product-list .product-thumb .btn-cart.btn:hover:active,
    .module-products-213 .product-list .product-thumb .btn-cart.btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .module-products-213 .product-list .product-thumb .btn-cart.btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-213 .product-list .product-thumb .btn-cart.btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .module-products-213 .product-list .product-thumb .btn-cart.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-list .product-thumb .stepper {
      display: inline-flex;
      margin-right: 5px;
      height: 35px
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist::before {
      display: inline-block;
      font-size: 16px
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist .btn-text {
      display: none
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist.btn,
    .module-products-213 .product-list .product-thumb .btn-wishlist.btn:visited {
      font-size: 12px;
      color: rgba(255, 255, 255, 1);
      text-transform: uppercase
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist.btn:hover {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(39, 124, 217, 1) !important
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist.btn:active,
    .module-products-213 .product-list .product-thumb .btn-wishlist.btn:hover:active,
    .module-products-213 .product-list .product-thumb .btn-wishlist.btn:focus:active {
      color: rgba(255, 255, 255, 1) !important;
      background: rgba(34, 184, 155, 1) !important
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist.btn:focus {
      color: rgba(255, 255, 255, 1) !important;
      box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.25)
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist.btn {
      background: rgba(48, 56, 65, 1);
      padding: 12px
    }

    .module-products-213 .product-list .product-thumb .btn-wishlist.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-list .product-thumb .btn-compare::before {
      display: inline-block;
      font-size: 16px
    }

    .module-products-213 .product-list .product-thumb .btn-compare .btn-text {
      display: none
    }

    .module-products-213 .product-list .product-thumb .btn-compare.btn {
      background: rgba(39, 124, 217, 1)
    }

    .module-products-213 .product-list .product-thumb .btn-compare.btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-products-213 .product-list .product-thumb .btn-compare.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-list .product-thumb .extra-group {
      display: block
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn:first-child {
      display: inline-flex
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn-extra+.btn {
      display: inline-flex
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn:first-child::before {
      display: inline-block;
      font-size: 16px;
      color: rgba(60, 196, 114, 1)
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn:first-child .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn::before {
      display: inline-block;
      font-size: 16px;
      color: #089A49
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn .btn-text {
      display: inline-block;
      padding: 0 .4em
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn {
      margin-left: 5px;
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-213 .product-list .product-layout .extra-group>div {
      justify-content: flex-start
    }

    .module-products-213 .product-list .product-thumb .extra-group>div {
      margin-top: 10px
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn.btn,
    .module-products-213 .product-list .product-thumb .extra-group .btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn.btn {
      background: none;
      border-style: none;
      padding: 3px;
      box-shadow: none
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn.btn:active,
    .module-products-213 .product-list .product-thumb .extra-group .btn.btn:hover:active,
    .module-products-213 .product-list .product-thumb .extra-group .btn.btn:focus:active {
      background: none !important
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn.btn:focus {
      background: none
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn,
    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:visited {
      color: rgba(48, 56, 65, 1);
      text-transform: none
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:hover {
      color: #089A49 !important;
      background: none !important
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:active,
    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:hover:active,
    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:focus:active {
      background: none !important
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn:focus {
      background: none
    }

    .module-products-213 .product-list .product-thumb .extra-group .btn+.btn.btn.btn.disabled::after {
      font-size: 20px
    }

    .module-products-213 .product-list.product-grid .product-thumb .extra-group {
      position: static;
      margin-top: initial
    }

    .module-products-213 .product-list.product-grid .product-thumb .extra-group>div {
      position: static;
      transform: none;
      opacity: 1
    }

    .module-products-213 .product-list.product-grid .product-thumb .buttons-wrapper {
      position: static;
      width: auto;
      overflow: visible;
      order: initial;
      margin-top: auto;
      transform: none
    }

    .module-products-213 .product-list.product-grid .product-thumb .buttons-wrapper .button-group {
      position: static;
      opacity: 1;
      visibility: visible;
      transform: none
    }

    .module-products-213 .product-list.product-grid .product-thumb:hover .buttons-wrapper .button-group {
      transform: none
    }

    .module-products-213 .product-list.product-grid .wish-group {
      justify-content: flex-start
    }

    @media (max-width: 1024px) {
      .module-products-213 .product-grid.product-grid .product-thumb .button-group {
        background: #089A49
      }

      .module-products-213 .product-grid.product-grid .product-thumb .extra-group {
        margin-top: auto
      }

      .module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper {
        position: static;
        width: auto;
        overflow: visible;
        order: -5;
        margin-top: 0;
        transform: none
      }

      .module-products-213 .product-grid.product-grid .product-thumb .buttons-wrapper .button-group {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none
      }
    }

    @media (max-width: 769px) {
      .module-products-213 .product-list .product-thumb .rating {
        justify-content: flex-start
      }

      .module-products-213 .product-list .product-thumb .rating-stars {
        margin-top: 0px
      }
    }

    @media (max-width: 760px) {
      .module-products-213 .product-list.product-list .product-layout .image {
        float: none;
        height: auto
      }

      .module-products-213 .product-list .product-thumb .caption {
        padding-top: 20px;
        padding-left: 0px
      }
    }

    @media (max-width: 470px) {
      .module-products-213 .product-layout.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .module-products-213 .product-layout:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }
    }

    div.flyout-menu.flyout-menu-7 .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    div.flyout-menu.flyout-menu-7 .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    div.flyout-menu.flyout-menu-7 .j-menu .dropdown>a::after {
      display: block
    }

    div.flyout-menu.flyout-menu-7 .j-menu>li>a {
      color: rgba(48, 56, 65, 1);
      background: rgba(255, 255, 255, 1);
      padding: 10px
    }

    div.flyout-menu.flyout-menu-7 .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    div.flyout-menu.flyout-menu-7 .j-menu>li>a::before {
      margin-right: 7px;
      min-width: 18px;
      font-size: 16px
    }

    .desktop div.flyout-menu.flyout-menu-7 .j-menu>li:hover>a,
    div.flyout-menu.flyout-menu-7 .j-menu>li.active>a {
      background: rgba(245, 245, 245, 1)
    }

    div.flyout-menu.flyout-menu-7 .j-menu a .count-badge {
      display: none;
      position: relative
    }

    .flyout-menu-7 .flyout-menu-item.drop-menu>.j-dropdown {
      left: 0;
      right: auto;
      transform: translate3d(0, -10px, 0)
    }

    .flyout-menu-7 .flyout-menu-item.drop-menu.animating>.j-dropdown {
      left: 0;
      right: auto;
      transform: none
    }

    .flyout-menu-7 .flyout-menu-item.drop-menu>.j-dropdown::before {
      left: 10px;
      right: auto;
      transform: translateX(0)
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu .dropdown>a>.count-badge {
      margin-right: 0
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu .dropdown>a>.count-badge+.open-menu+.menu-label {
      margin-left: 7px
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu .dropdown>a::after {
      display: block
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li>a {
      font-size: 14px;
      color: rgba(109, 118, 125, 1);
      font-weight: 400;
      background: rgba(255, 255, 255, 1);
      padding: 10px
    }

    .desktop .flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li:hover>a,
    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li.active>a {
      color: rgba(48, 56, 65, 1);
      background: rgba(245, 245, 245, 1)
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu .links-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu>li>a::before {
      margin-right: 7px;
      min-width: 20px;
      font-size: 18px
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-menu a .count-badge {
      display: inline-flex;
      position: relative
    }

    .flyout-menu-7 .flyout-menu-item.dropdown:not(.mega-menu) .j-dropdown {
      min-width: 200px
    }

    .flyout-menu-7 .flyout-menu-item.dropdown:not(.mega-menu) .j-menu {
      box-shadow: 0 0 85px -10px rgba(0, 0, 0, 0.2)
    }

    .flyout-menu-7 .flyout-menu-item.dropdown .j-dropdown::before {
      display: block;
      border-bottom-color: rgba(255, 255, 255, 1);
      margin-top: -10px
    }

    .flyout-menu-7 .mega-menu-content {
      background: rgba(255, 255, 255, 1)
    }

    .flyout-menu-7 .j-dropdown>.mega-menu-content {
      box-shadow: 30px 25px 50px -10px rgba(0, 0, 0, 0.15);
      max-height: 500px !important;
      overflow-y: auto
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-1>a::before {
      content: '\e909' !important;
      font-family: icomoon !important
    }

    .flyout-menu-7 .mega-menu.flyout-menu-item-1 .dropdown-menu {
      width: 900px
    }

    .desktop-header-active .flyout-menu-7 .flyout-menu-item-1.multi-level .dropdown-menu {
      left: 100%
    }

    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 {
      background-image: url('image/cache/catalog/journal3/misc/menu2-252x312.png');
      background-position: right bottom;
      background-repeat: no-repeat
    }

    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 {
        background: none
      }
    }

    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-1 {
      width: 20%;
      padding: 15px;
      padding-right: 0px
    }

    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%
      }
    }

    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-2 {
      width: 60%;
      padding: 10px
    }

    .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-1.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%
      }
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-2>a::before {
      content: '\f179' !important;
      font-family: icomoon !important
    }

    .flyout-menu-7 .mega-menu.flyout-menu-item-2 .dropdown-menu {
      width: 900px
    }

    .desktop-header-active .flyout-menu-7 .flyout-menu-item-2.multi-level .dropdown-menu {
      left: 100%
    }

    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 {
      background-image: url('image/cache/catalog/journal3/misc/menubg3-344x351.jpg');
      background-position: right bottom;
      background-repeat: no-repeat
    }

    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1::before {
      left: 0;
      width: 100vw
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 {
        background: none
      }
    }

    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-1 {
      width: 20%;
      padding: 15px;
      padding-right: 0px
    }

    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%
      }
    }

    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-2 {
      width: 60%;
      padding: 10px
    }

    .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-2.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%
      }
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-3>a::before {
      content: '\e994' !important;
      font-family: icomoon !important
    }

    .flyout-menu-7 .mega-menu.flyout-menu-item-3 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-7 .flyout-menu-item-3.multi-level .dropdown-menu {
      left: 100%
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 {
      padding: 20px
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-1 {
      width: 20%
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-1 {
        width: 33.33333333333333%
      }
    }

    @media (max-width: 470px) {
      .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-1 {
        width: 50%
      }
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-2 {
      width: 20%
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-2 {
        width: 33.33333333333333%
      }
    }

    @media (max-width: 470px) {
      .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-2 {
        width: 50%
      }
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-3 {
      width: 20%
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-3 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-3 {
        width: 33.33333333333333%
      }
    }

    @media (max-width: 470px) {
      .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-3 {
        width: 100%
      }
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-4 {
      width: 40%
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-4 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-1 .grid-col-4 {
        width: 100%
      }
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-2::before {
      left: 0;
      width: 100vw
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-2 .grid-col-1 {
      width: 100%
    }

    .flyout-menu-7 .flyout-menu-item-3.mega-menu .grid-row-2 .grid-col-1 .grid-items {
      justify-content: flex-start
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-4>a::before {
      content: '\e90a' !important;
      font-family: icomoon !important
    }

    .desktop-header-active .flyout-menu-7 .flyout-menu-item-4.multi-level .dropdown-menu {
      left: 100%
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-5>a .menu-label {
      color: rgba(255, 255, 255, 1);
      font-weight: 400;
      text-transform: none;
      background: #089A49;
      border-radius: 3px;
      padding: 1px;
      padding-right: 4px;
      padding-left: 4px;
      margin-top: -7px
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-5>a::before {
      content: '\e91f' !important;
      font-family: icomoon !important
    }

    .flyout-menu-7 .mega-menu.flyout-menu-item-5 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-7 .flyout-menu-item-5.multi-level .dropdown-menu {
      left: 100%
    }

    .flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1::before {
      left: 0;
      width: 100vw
    }

    .flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-1 {
      width: 40%;
      padding: 15px;
      padding-right: 0px
    }

    .flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 470px) {
      .flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%
      }
    }

    .flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-2 {
      width: 60%;
      padding: 10px
    }

    .flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 470px) {
      .flyout-menu-7 .flyout-menu-item-5.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%
      }
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-6>a .menu-label {
      color: rgba(48, 56, 65, 1);
      font-weight: 400;
      text-transform: none;
      background: rgba(254, 225, 91, 1);
      border-radius: 3px;
      padding: 1px;
      padding-right: 4px;
      padding-left: 4px;
      margin-top: -7px
    }

    .flyout-menu-7>ul.j-menu>li.flyout-menu-item-6>a::before {
      content: '\e998' !important;
      font-family: icomoon !important
    }

    .flyout-menu-7 .mega-menu.flyout-menu-item-6 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-7 .flyout-menu-item-6.multi-level .dropdown-menu {
      left: 100%
    }

    .module-blocks-241.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .module-blocks-241.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-blocks-241.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .one-column #content .module-blocks-241.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-blocks-241.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .module-blocks-241.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-blocks-241.blocks-grid .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .module-blocks-241.blocks-grid .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-blocks-241 .block-body {
      padding: 10px;
      padding-right: 15px;
      padding-left: 15px;
      display: flex;
      flex-direction: column
    }

    .module-blocks-241 .block-title {
      order: -2
    }

    .module-blocks-241 .block-header {
      display: flex;
      float: none;
      order: -1;
      justify-content: flex-start;
      align-items: flex-start
    }

    .module-blocks-241 .block-header img {
      display: flex
    }

    .module-blocks-241 .block-wrapper {
      display: flex
    }

    .module-blocks-241 .block-header i {
      float: none;
      display: flex
    }

    .module-blocks-241 .module-item-1 .block-body {
      line-height: 1.3;
      display: block
    }

    .module-blocks-241 .module-item-1 .block-body .block-content {
      color: rgba(255, 255, 255, 1)
    }

    .module-blocks-241 .module-item-1 .block-header {
      display: block;
      float: left;
      ;
      justify-content: flex-start;
      align-items: flex-start
    }

    .module-blocks-241 .module-item-1 .block-header img {
      display: flex
    }

    .module-blocks-241 .module-item-1 .block-wrapper {
      display: block
    }

    .module-blocks-241 .module-item-1 .block-header i {
      float: left;
      display: flex
    }

    .module-blocks-241 .module-item-1 .block-content {
      text-align: center;
      column-count: initial;
      column-gap: 20px;
      column-rule-width: 1px;
      column-rule-style: solid
    }

    .module-blocks-241 .module-item-1 .expand-content {
      max-height: 100%;
      overflow: visible
    }

    .module-blocks-241 .module-item-1 .block-footer {
      margin-top: auto;
      margin-top: 20px;
      text-align: center
    }

    .module-blocks-241 .module-item-1 .block-footer .btn {
      width: auto;
      background: #089A49;
      transform: scale(calc(100 / 100));
      transform-origin: center
    }

    .module-blocks-241 .module-item-1 .block-footer .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-blocks-241 .module-item-1 .block-footer .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-blocks-241 .module-item-1 .block-footer .btn::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .module-catalog-164 .module-item.swiper-slide {
      margin-right: 20px;
      width: calc((100% - 3 * 20px) / 4 - 0.01px)
    }

    .module-catalog-164 .module-item:not(.swiper-slide) {
      padding: 10px;
      width: calc(100% / 4 - 0.01px)
    }

    .one-column #content .module-catalog-164 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .one-column #content .module-catalog-164 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-catalog-164 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .module-catalog-164 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-catalog-164 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .module-catalog-164 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-catalog-164 .catalog-title {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: #089A49
    }

    .module-catalog-164 .catalog-title {
      margin-bottom: 8px;
      display: flex;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      width: auto;
      margin-left: 0;
      margin-right: auto;
      justify-content: flex-start;
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .module-catalog-164 .subitems {
      align-items: flex-start
    }

    .module-catalog-164 .subitem>a span {
      font-size: 13px;
      color: rgba(109, 118, 125, 1)
    }

    .module-catalog-164 .subitem>a:hover span {
      color: #089A49
    }

    .module-catalog-164 .subitem.view-more a span {
      font-size: 13px;
      color: rgba(39, 124, 217, 1)
    }

    .module-catalog-164 .subitem.view-more a:hover span {
      color: #089A49
    }

    .module-catalog-164 .subitem>a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      padding-bottom: 5px
    }

    .module-catalog-164 .subitem>a::before {
      content: '\e409' !important;
      font-family: icomoon !important;
      font-size: 10px
    }

    .module-catalog-164 .catalog-image {
      margin-right: 8px
    }

    .module-catalog-164 .item-assets {
      flex-direction: row
    }

    .module-catalog-164 .item-assets>a {
      max-width: 40%;
      order: 0
    }

    .module-catalog-164 .item-assets .subitems {
      width: 60%
    }

    .module-catalog-164 .item-assets .catalog-image {
      display: block
    }

    .module-catalog-164 .module-body {
      margin: -10px
    }

    @media (max-width: 760px) {
      .module-catalog-164 .module-item.swiper-slide {
        margin-right: 20px;
        width: calc((100% - 2 * 20px) / 3 - 0.01px)
      }

      .module-catalog-164 .module-item:not(.swiper-slide) {
        padding: 10px;
        width: calc(100% / 3 - 0.01px)
      }

      .module-catalog-164 .subitem>a span {
        font-size: 15px
      }

      .module-catalog-164 .subitem.view-more a span {
        font-size: 15px
      }

      .module-catalog-164 .subitem>a {
        padding-bottom: 12px
      }
    }

    @media (max-width: 470px) {
      .module-catalog-164 .module-item.swiper-slide {
        margin-right: 10px;
        width: calc((100% - 1 * 10px) / 2 - 0.01px)
      }

      .module-catalog-164 .module-item:not(.swiper-slide) {
        padding: 5px;
        width: calc(100% / 2 - 0.01px)
      }
    }

    .module-banners-177 .swiper-container {
      overflow: hidden
    }

    .module-banners-177 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-banners-177:hover .swiper-buttons {
      display: block
    }

    .module-banners-177 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-banners-177 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-banners-177 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-banners-177 .swiper-button-disabled {
      opacity: 0
    }

    .module-banners-177 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-banners-177 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-banners-177 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-banners-177 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-banners-177 .swiper {
      padding-bottom: 10px
    }

    .module-banners-177 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-banners-177 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-banners-177 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-banners-177 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-banners-177 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-banners-177 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .module-banners-177 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-banners-177 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .one-column #content .module-banners-177 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-banners-177 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .two-column #content .module-banners-177 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-banners-177 .module-item.swiper-slide {
      margin-right: 0px;
      width: calc((100% - 0 * 0px) / 1 - 0.01px)
    }

    .side-column .module-banners-177 .module-item:not(.swiper-slide) {
      padding: 0px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-banners-177 a img {
      transform: scale(1)
    }

    .desktop .module-banners-177 a:hover img {
      transform: scale(1.15)
    }

    .module-banners-177 .module-item>a::before {
      background: rgba(231, 61, 80, 0.2)
    }

    .module-banners-177 a::before {
      opacity: 0
    }

    .desktop .module-banners-177 a:hover::before {
      opacity: 1
    }

    .module-banners-177 .module-item>a::after {
      content: '\e5c8' !important;
      font-family: icomoon !important
    }

    .module-banners-177 .banner-caption {
      visibility: hidden;
      opacity: 0;
      display: block;
      top: auto;
      left: 50%;
      right: auto;
      bottom: 0;
      transform: translate3d(-50%, 0, 0)
    }

    .desktop .module-banners-177 a:hover .banner-caption {
      visibility: visible;
      opacity: 1
    }

    .module-banners-177 a .banner-caption {
      width: 100%
    }

    .module-banners-177 .banner-caption span {
      padding: 12px
    }

    div.main-menu.main-menu-3>.j-menu .menu-item.main-menu-item-1>a::before {
      content: '\ead4' !important;
      font-family: icomoon !important;
      margin-right: 10px
    }

    div.main-menu.main-menu-3>.j-menu li.main-menu-item-1>a {
      color: rgba(255, 255, 255, 1) !important;
      font-weight: 700 !important;
      background: rgba(60, 196, 114, 1)
    }

    div.main-menu.main-menu-3>.j-menu>.main-menu-item-1>a {
      border-top-left-radius: 3px;
      border-top-right-radius: 3px;
      padding-bottom: 12px !important;
      min-width: 220px
    }

    .route-common-home body:not(.is-sticky) .main-menu-3 .main-menu-item-1.flyout>.j-dropdown {
      display: block !important;
      transform: none;
      opacity: 1
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-1 .mega-menu-content {
      width: 500px;
      position: relative;
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-1>.dropdown-menu::before {
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-1.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    .main-menu-3>.j-menu li.main-menu-item-1>a>.menu-label {
      color: rgba(255, 255, 255, 1);
      font-weight: 400;
      text-transform: none;
      background: #089A49;
      border-radius: 3px;
      padding: 1px;
      padding-right: 4px;
      padding-left: 4px;
      margin-top: -7px
    }

    @media (max-width: 1024px) {
      div.main-menu.main-menu-3>.j-menu li.main-menu-item-1>a {
        color: rgba(109, 118, 125, 1) !important;
        background: none
      }

      div.main-menu.main-menu-3>.j-menu>.main-menu-item-1>a {
        padding-bottom: 6px !important
      }
    }

    div.main-menu.main-menu-3>.j-menu .menu-item.main-menu-item-2>a::before {
      content: '\e91f' !important;
      font-family: icomoon !important;
      color: rgba(254, 225, 91, 1)
    }

    div.main-menu.main-menu-3>.j-menu>.main-menu-item-2>a {
      padding-left: 30px !important
    }

    .route-common-home body:not(.is-sticky) .main-menu-3 .main-menu-item-2.flyout>.j-dropdown {
      display: block !important;
      transform: none;
      opacity: 1
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-2 .mega-menu-content {
      width: 500px;
      position: relative;
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-2>.dropdown-menu::before {
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-2.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    @media (max-width: 1100px) {
      div.main-menu.main-menu-3>.j-menu>.main-menu-item-2>a {
        padding-left: 0px !important
      }
    }

    .main-menu-3 .mega-menu.main-menu-item-3 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-3 .main-menu-item-3.multi-level .dropdown-menu {
      left: 100%
    }

    .route-common-home body:not(.is-sticky) .main-menu-3 .main-menu-item-4.flyout>.j-dropdown {
      display: block !important;
      transform: none;
      opacity: 1
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-4 .mega-menu-content {
      width: 500px;
      position: relative;
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-4>.dropdown-menu::before {
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-4.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    .route-common-home body:not(.is-sticky) .main-menu-3 .main-menu-item-5.flyout>.j-dropdown {
      display: block !important;
      transform: none;
      opacity: 1
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-5 .mega-menu-content {
      width: 700px;
      position: absolute;
      left: 50%;
      transform: translate3d(-50%, 0, 0)
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-5>.dropdown-menu::before {
      left: 50%;
      transform: translate3d(-50%, 0, 0)
    }

    .desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-5.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    .main-menu-3 .main-menu-item-5.mega-menu .grid-row-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    .main-menu-3 .main-menu-item-5.mega-menu .grid-row-1 .grid-col-1 {
      width: 40%;
      background-image: url('image/cache/catalog/journal3/banners/grid-1d-520x430.jpg');
      background-size: cover
    }

    .main-menu-3 .main-menu-item-5.mega-menu .grid-row-1 .grid-col-1 .grid-items {
      justify-content: center
    }

    @media (max-width: 760px) {
      .main-menu-3 .main-menu-item-5.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%
      }
    }

    .main-menu-3 .main-menu-item-5.mega-menu .grid-row-1 .grid-col-2 {
      width: 60%;
      padding: 10px
    }

    .main-menu-3 .main-menu-item-5.mega-menu .grid-row-1 .grid-col-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .main-menu-3 .main-menu-item-5.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%
      }
    }

    .route-common-home body:not(.is-sticky) .main-menu-3 .main-menu-item-6.flyout>.j-dropdown {
      display: block !important;
      transform: none;
      opacity: 1
    }

    .desktop-main-menu-wrapper .menu-fullwidth>.j-dropdown {
      width: 100vw;
      left: 50%;
      margin-left: -50vw
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-6 .mega-menu-content {
      width: 500px;
      position: relative;
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3 .mega-custom.main-menu-item-6>.dropdown-menu::before {
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-3>.j-menu li.main-menu-item-6.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1::before {
      display: block;
      left: 0;
      width: 100vw
    }

    @media (max-width: 1440px) {
      .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1 {
        padding: 20px
      }
    }

    .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1 .grid-col-1 {
      width: 80%;
      padding: 20px;
      padding-left: 0px
    }

    .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1 .grid-col-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1 .grid-col-1 {
        width: 100%
      }
    }

    .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1 .grid-col-2 {
      width: 20%;
      border-width: 0;
      border-left-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      padding: 20px;
      padding-right: 0px
    }

    .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1 .grid-col-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      .main-menu-3 .main-menu-item-6.mega-menu .grid-row-1 .grid-col-2 {
        width: 100%;
        border-width: 0px;
        padding-right: 20px
      }
    }

    div.main-menu.main-menu-64>.j-menu .menu-item.main-menu-item-1>a::before {
      content: '\ead9' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-1 .mega-menu-content {
      width: 500px;
      position: relative;
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-1>.dropdown-menu::before {
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-1:not(.mega-fullwidth)>.dropdown-menu::before {
      display: block;
      margin-top: -10px
    }

    .desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-1.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .main-menu-item-2>a::before {
      content: '\e990' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .main-menu-64 .mega-menu.main-menu-item-2 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-2.multi-level .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .main-menu-item-3>a::before {
      content: '\e90d' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .main-menu-64 .mega-menu.main-menu-item-3 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-3.multi-level .dropdown-menu {
      left: 100%
    }

    div.main-menu.main-menu-64>.j-menu .menu-item.main-menu-item-5>a::before {
      content: '\eaa7' !important;
      font-family: icomoon !important;
      margin-right: 7px
    }

    .desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-5 .mega-menu-content {
      width: 500px;
      position: relative;
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-5>.dropdown-menu::before {
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-5:not(.mega-fullwidth)>.dropdown-menu::before {
      display: block;
      margin-top: -10px
    }

    .desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-5.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .mega-menu.main-menu-item-6 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-6.multi-level .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .mega-menu.main-menu-item-7 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-7.multi-level .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .mega-menu.main-menu-item-8 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-8.multi-level .dropdown-menu {
      left: 100%
    }

    div.main-menu.main-menu-64>.j-menu .menu-item.main-menu-item-9>a::before {
      content: '\eab6' !important;
      font-family: icomoon !important;
      margin-right: 7px
    }

    .desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-9 .mega-menu-content {
      width: 500px;
      position: relative;
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-64 .mega-custom.main-menu-item-9>.dropdown-menu::before {
      left: 0;
      transform: none
    }

    .desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-9:not(.mega-fullwidth)>.dropdown-menu::before {
      display: block;
      margin-top: -10px
    }

    .desktop-main-menu-wrapper .main-menu-64>.j-menu li.main-menu-item-9.multi-level .dropdown-menu ul li .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .mega-menu.main-menu-item-10 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-10.multi-level .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .mega-menu.main-menu-item-11 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-11.multi-level .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .mega-menu.main-menu-item-12 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-12.multi-level .dropdown-menu {
      left: 100%
    }

    .main-menu-64 .mega-menu.main-menu-item-13 .dropdown-menu {
      width: 800px
    }

    .desktop-header-active .flyout-menu-64 .main-menu-item-13.multi-level .dropdown-menu {
      left: 100%
    }

    .top-menu-2 .j-menu li.top-menu-item-1>a::before {
      content: '\f230' !important;
      font-family: icomoon !important
    }

    .top-menu-2>ul>.top-menu-item-1>a {
      text-align: center
    }

    .top-menu-2>ul>.top-menu-item-1>a>.links-text {
      display: none
    }

    .top-menu-2>ul>.top-menu-item-1>a .count-badge {
      position: absolute;
      top: auto;
      right: auto
    }

    .top-menu-2 .j-menu li.top-menu-item-2>a::before {
      content: '\f099' !important;
      font-family: icomoon !important
    }

    .top-menu-2>ul>.top-menu-item-2>a {
      text-align: center
    }

    .top-menu-2>ul>.top-menu-item-2>a>.links-text {
      display: none
    }

    .top-menu-2>ul>.top-menu-item-2>a .count-badge {
      position: absolute;
      top: auto;
      right: auto
    }

    .top-menu-2 .j-menu li.top-menu-item-3>a::before {
      content: '\e90e' !important;
      font-family: icomoon !important
    }

    .top-menu-2>ul>.top-menu-item-3>a {
      text-align: center
    }

    .top-menu-2>ul>.top-menu-item-3>a>.links-text {
      display: none
    }

    .top-menu-2>ul>.top-menu-item-3>a .count-badge {
      position: absolute;
      top: auto;
      right: auto
    }

    .top-menu-2 .j-menu li.top-menu-item-4>a::before {
      content: '\f232' !important;
      font-family: icomoon !important
    }

    .top-menu-2>ul>.top-menu-item-4>a {
      text-align: center
    }

    .top-menu-2>ul>.top-menu-item-4>a>.links-text {
      display: none
    }

    .top-menu-2>ul>.top-menu-item-4>a .count-badge {
      position: absolute;
      top: auto;
      right: auto
    }

    .top-menu-2 .j-menu li.top-menu-item-5>a::before {
      content: '\f0d3' !important;
      font-family: icomoon !important
    }

    .top-menu-2>ul>.top-menu-item-5>a {
      text-align: center
    }

    .top-menu-2>ul>.top-menu-item-5>a>.links-text {
      display: none
    }

    .top-menu-2>ul>.top-menu-item-5>a .count-badge {
      position: absolute;
      top: auto;
      right: auto
    }

    .top-menu-2 .j-menu li.top-menu-item-7>a::before {
      content: '\eaaf' !important;
      font-family: icomoon !important
    }

    .top-menu-2>ul>.top-menu-item-7>a {
      text-align: left
    }

    .top-menu-2>ul>.top-menu-item-7>a>.links-text {
      display: block
    }

    .top-menu-2>ul>.top-menu-item-7>a .count-badge {
      position: relative
    }

    .top-menu-2 .j-menu .j-menu li.top-menu-item-8>a::before {
      content: '\ead9' !important;
      font-family: icomoon !important
    }

    .top-menu-2 .j-menu .j-menu li.top-menu-item-9>a::before {
      content: '\e90d' !important;
      font-family: icomoon !important
    }

    .top-menu-2 .j-menu .j-menu li.top-menu-item-10>a::before {
      content: '\e905' !important;
      font-family: icomoon !important
    }

    .top-menu-2 .j-menu li.top-menu-item-11>a::before {
      content: '\eab9' !important;
      font-family: icomoon !important
    }

    .top-menu-2>ul>.top-menu-item-11>a {
      text-align: left
    }

    .top-menu-2>ul>.top-menu-item-11>a>.links-text {
      display: block
    }

    .top-menu-2>ul>.top-menu-item-11>a .count-badge {
      position: relative
    }

    .top-menu-14 .j-menu li.top-menu-item-1>a::before {
      content: '\f29c' !important;
      font-family: icomoon !important
    }

    .top-menu-14>ul>.top-menu-item-1>a {
      text-align: left
    }

    .top-menu-14>ul>.top-menu-item-1>a>.links-text {
      display: block
    }

    .top-menu-14>ul>.top-menu-item-1>a .count-badge {
      position: relative
    }

    .top-menu-14 .j-menu li.top-menu-item-2>a::before {
      content: '\f27b' !important;
      font-family: icomoon !important
    }

    .top-menu-14>ul>.top-menu-item-2>a {
      text-align: left
    }

    .top-menu-14>ul>.top-menu-item-2>a>.links-text {
      display: block
    }

    .top-menu-14>ul>.top-menu-item-2>a .count-badge {
      position: relative
    }

    .top-menu-14 .j-menu li.top-menu-item-3>a::before {
      content: '\e0e1' !important;
      font-family: icomoon !important
    }

    .top-menu-14>ul>.top-menu-item-3>a {
      text-align: left
    }

    .top-menu-14>ul>.top-menu-item-3>a>.links-text {
      display: block
    }

    .top-menu-14>ul>.top-menu-item-3>a .count-badge {
      position: relative
    }

    .top-menu-13>ul>.top-menu-item-1>a {
      text-align: left
    }

    .top-menu-13>ul>.top-menu-item-1>a>.links-text {
      display: block
    }

    .top-menu-13>ul>.top-menu-item-1>a .count-badge {
      position: relative
    }

    .top-menu-13>ul>.top-menu-item-2>a {
      text-align: left
    }

    .top-menu-13>ul>.top-menu-item-2>a>.links-text {
      display: block
    }

    .top-menu-13>ul>.top-menu-item-2>a .count-badge {
      position: relative
    }

    footer>div {
      background: rgba(58, 71, 80, 1)
    }

    footer .grid-row-1 {
      padding: 20px;
      padding-top: 30px;
      padding-bottom: 10px;
      border-width: 0;
      border-top-width: 1px;
      border-style: solid;
      border-color: rgba(48, 56, 65, 1)
    }

    footer .grid-row-1::before {
      display: block;
      left: 50%;
      width: 100vw
    }

    footer .grid-row-1 .grid-col-1 {
      width: 25%;
      margin-bottom: 20px
    }

    footer .grid-row-1 .grid-col-1 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      footer .grid-row-1 .grid-col-1 {
        width: 50%
      }
    }

    @media (max-width: 470px) {
      footer .grid-row-1 .grid-col-1 {
        width: 100%
      }
    }

    footer .grid-row-1 .grid-col-2 {
      width: 25%;
      margin-bottom: 20px
    }

    footer .grid-row-1 .grid-col-2 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      footer .grid-row-1 .grid-col-2 {
        width: 50%
      }
    }

    @media (max-width: 470px) {
      footer .grid-row-1 .grid-col-2 {
        width: 100%
      }
    }

    footer .grid-row-1 .grid-col-3 {
      width: 25%;
      margin-bottom: 20px
    }

    footer .grid-row-1 .grid-col-3 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      footer .grid-row-1 .grid-col-3 {
        width: 50%
      }
    }

    @media (max-width: 470px) {
      footer .grid-row-1 .grid-col-3 {
        width: 100%
      }
    }

    footer .grid-row-1 .grid-col-4 {
      width: 25%;
      margin-bottom: 20px
    }

    footer .grid-row-1 .grid-col-4 .grid-items {
      justify-content: flex-start
    }

    @media (max-width: 760px) {
      footer .grid-row-1 .grid-col-4 {
        width: 50%
      }
    }

    @media (max-width: 470px) {
      footer .grid-row-1 .grid-col-4 {
        width: 100%
      }
    }

    footer .grid-row-2 {
      background: rgba(48, 56, 65, 1);
      padding: 20px
    }

    footer .grid-row-2::before {
      display: block;
      left: 0;
      width: 100vw
    }

    footer .grid-row-2 .grid-col-1 {
      width: 60%;
      margin-bottom: 20px
    }

    @media (max-width: 1024px) {
      footer .grid-row-2 .grid-col-1 {
        width: 100%
      }
    }

    footer .grid-row-2 .grid-col-2 {
      width: 40%
    }

    @media (max-width: 1024px) {
      footer .grid-row-2 .grid-col-2 {
        width: 100%
      }
    }

    .links-menu-72 .module-body {
      display: block;
      justify-content: flex-start;
      align-items: flex-start;
      ;
      -webkit-overflow-scrolling: touch;
      ;
      column-count: initial;
      column-rule-style: solid
    }

    .links-menu-72 .menu-item {
      border-width: 1px 0 0 0;
      justify-content: flex-start;
      ;
      flex-grow: 0;
      width: auto
    }

    .links-menu-72 .menu-item a .links-text {
      white-space: normal;
      color: rgba(238, 238, 238, 1)
    }

    .links-menu-72 .menu-item a {
      justify-content: flex-start
    }

    .links-menu-72 .count-badge {
      display: none
    }

    .phone footer .links-menu-72 .module-title::before {
      display: none
    }

    .phone footer .links-menu-72 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-72 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    div.links-menu-72 .title.module-title::after,
    div.links-menu-72 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    div.links-menu-72 .title.module-title::after {
      margin-top: 7px
    }

    div.links-menu-72 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    div.links-menu-72 .module-body {
      display: block;
      justify-content: center;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-72 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0
    }

    div.links-menu-72 .menu-item a .links-text {
      white-space: normal;
      color: rgba(221, 221, 221, 1)
    }

    div.links-menu-72 .menu-item a:hover .links-text {
      color: #089A49
    }

    .phone footer div.links-menu-72 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-72 .module-title+.module-body>li {
      display: flex
    }

    @media (max-width: 760px) {
      .links-menu-72 .menu-item a {
        padding-bottom: 10px
      }
    }

    .links-menu-76 .module-body {
      display: block;
      justify-content: flex-start;
      align-items: flex-start;
      ;
      -webkit-overflow-scrolling: touch;
      ;
      column-count: initial;
      column-rule-style: solid
    }

    .links-menu-76 .menu-item {
      border-width: 1px 0 0 0;
      justify-content: flex-start;
      ;
      flex-grow: 0;
      width: auto
    }

    .links-menu-76 .menu-item a .links-text {
      white-space: normal;
      color: rgba(238, 238, 238, 1)
    }

    .links-menu-76 .menu-item a {
      justify-content: flex-start
    }

    .links-menu-76 .count-badge {
      display: none
    }

    .phone footer .links-menu-76 .module-title::before {
      display: none
    }

    .phone footer .links-menu-76 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-76 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    div.links-menu-76 .title.module-title::after,
    div.links-menu-76 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    div.links-menu-76 .title.module-title::after {
      margin-top: 7px
    }

    div.links-menu-76 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    div.links-menu-76 .module-body {
      display: block;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-76 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0
    }

    div.links-menu-76 .menu-item a .links-text {
      white-space: normal
    }

    .phone footer div.links-menu-76 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-76 .module-title+.module-body>li {
      display: flex
    }

    @media (max-width: 760px) {
      .links-menu-76 .menu-item a {
        padding-bottom: 10px
      }
    }

    .links-menu-75 .module-body {
      display: block;
      justify-content: flex-start;
      align-items: flex-start;
      ;
      -webkit-overflow-scrolling: touch;
      ;
      column-count: initial;
      column-rule-style: solid
    }

    .links-menu-75 .menu-item {
      border-width: 1px 0 0 0;
      justify-content: flex-start;
      ;
      flex-grow: 0;
      width: auto
    }

    .links-menu-75 .menu-item a .links-text {
      white-space: normal;
      color: rgba(238, 238, 238, 1)
    }

    .links-menu-75 .menu-item a {
      justify-content: flex-start
    }

    .links-menu-75 .count-badge {
      display: none
    }

    .phone footer .links-menu-75 .module-title::before {
      display: none
    }

    .phone footer .links-menu-75 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-75 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    div.links-menu-75 .title.module-title::after,
    div.links-menu-75 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    div.links-menu-75 .title.module-title::after {
      margin-top: 7px
    }

    div.links-menu-75 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    div.links-menu-75 .module-body {
      display: block;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-75 .menu-item {
      border-width: 1px 0 0 0;
      flex-grow: 0;
      justify-content: flex-start
    }

    div.links-menu-75 .menu-item a .links-text {
      white-space: normal
    }

    div.links-menu-75 .menu-item a {
      justify-content: flex-start
    }

    .phone footer div.links-menu-75 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-75 .module-title+.module-body>li {
      display: flex
    }

    @media (max-width: 760px) {
      .links-menu-75 .menu-item a {
        padding-bottom: 10px
      }
    }

    .module-blog_side_posts-192 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .module-blog_side_posts-192 .title.module-title::after,
    .module-blog_side_posts-192 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .module-blog_side_posts-192 .title.module-title::after {
      margin-top: 7px
    }

    .module-blog_side_posts-192 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    .module-blog_side_posts-192 .swiper-container {
      overflow: hidden;
      padding: -5px
    }

    .module-blog_side_posts-192 .swiper-buttons {
      display: none;
      top: 50%;
      width: calc(100% - (5px * 2));
      margin-top: -10px
    }

    .module-blog_side_posts-192:hover .swiper-buttons {
      display: block
    }

    .module-blog_side_posts-192 .swiper-button-prev {
      left: 0;
      right: auto;
      transform: translate(0, -50%)
    }

    .module-blog_side_posts-192 .swiper-button-next {
      left: auto;
      right: 0;
      transform: translate(0, -50%)
    }

    .module-blog_side_posts-192 .swiper-buttons div {
      width: 25px;
      height: 25px;
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .module-blog_side_posts-192 .swiper-button-disabled {
      opacity: 0
    }

    .module-blog_side_posts-192 .swiper-buttons div::before {
      content: '\e5c4' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-blog_side_posts-192 .swiper-buttons .swiper-button-next::before {
      content: '\e5c8' !important;
      font-family: icomoon !important;
      color: rgba(255, 255, 255, 1)
    }

    .module-blog_side_posts-192 .swiper-buttons div:not(.swiper-button-disabled):hover {
      background: rgba(53, 66, 174, 1)
    }

    .module-blog_side_posts-192 .swiper-pagination {
      display: block;
      margin-bottom: -10px;
      left: 50%;
      right: auto;
      transform: translateX(-50%)
    }

    .module-blog_side_posts-192 .swiper {
      padding-bottom: 10px
    }

    .module-blog_side_posts-192 .swiper-pagination-bullet {
      width: 7px;
      height: 7px;
      background-color: rgba(48, 56, 65, 1)
    }

    .module-blog_side_posts-192 .swiper-pagination>span+span {
      margin-left: 8px
    }

    .desktop .module-blog_side_posts-192 .swiper-pagination-bullet:hover {
      background-color: #089A49
    }

    .module-blog_side_posts-192 .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #089A49
    }

    .module-blog_side_posts-192 .swiper-pagination>span {
      border-radius: 20px
    }

    .module-blog_side_posts-192 .nav-tabs>li>a,
    .module-blog_side_posts-192 .nav-tabs>li.active>a,
    .module-blog_side_posts-192 .nav-tabs>li.active>a:hover,
    .module-blog_side_posts-192 .nav-tabs>li.active>a:focus {
      font-size: 13px;
      color: rgba(48, 56, 65, 1);
      font-weight: 700;
      text-transform: uppercase
    }

    .desktop .module-blog_side_posts-192 .nav-tabs>li:hover>a,
    .module-blog_side_posts-192 .nav-tabs>li.active>a {
      color: #089A49
    }

    .module-blog_side_posts-192 .nav-tabs {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(221, 221, 221, 1);
      display: flex;
      justify-content: flex-start;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      ;
      min-width: 50px
    }

    .module-blog_side_posts-192 .nav-tabs>li {
      border-width: 0;
      border-bottom-width: 1px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0);
      flex-grow: 0
    }

    .module-blog_side_posts-192 .nav-tabs>li.active {
      border-color: #089A49
    }

    .module-blog_side_posts-192 .nav-tabs>li.active::after {
      display: none;
      border-top-width: 10px
    }

    .module-blog_side_posts-192 .nav-tabs>li>a {
      justify-content: center;
      white-space: nowrap;
      padding: 0px;
      padding-bottom: 10px
    }

    .module-blog_side_posts-192 .nav-tabs>li>a::before {
      font-size: 18px
    }

    .module-blog_side_posts-192 .nav-tabs>li:not(:last-child) {
      margin-right: 20px
    }

    .module-blog_side_posts-192 .mobile .nav-tabs {
      overflow-x: scroll
    }

    .module-blog_side_posts-192 .nav-tabs::-webkit-scrollbar {
      -webkit-appearance: none;
      height: 1px;
      height: 1px;
      width: 1px
    }

    .module-blog_side_posts-192 .nav-tabs::-webkit-scrollbar-track {
      background-color: white;
      background-color: rgba(255, 255, 255, 1)
    }

    .module-blog_side_posts-192 .nav-tabs::-webkit-scrollbar-thumb {
      background-color: #999;
      background-color: rgba(60, 196, 114, 1)
    }

    .module-blog_side_posts-192 .tab-container::before {
      display: none
    }

    .module-blog_side_posts-192 .tab-content {
      padding-top: 20px
    }

    .module-blog_side_posts-192 .tab-container {
      display: block
    }

    .module-blog_side_posts-192 .tab-container .nav-tabs {
      flex-direction: row
    }

    .module-blog_side_posts-192 .post-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .module-blog_side_posts-192 .post-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .one-column #content .module-blog_side_posts-192 .post-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .one-column #content .module-blog_side_posts-192 .post-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .two-column #content .module-blog_side_posts-192 .post-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .two-column #content .module-blog_side_posts-192 .post-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .side-column .module-blog_side_posts-192 .post-layout.swiper-slide {
      margin-right: 10px;
      width: calc((100% - 0 * 10px) / 1 - 0.01px)
    }

    .side-column .module-blog_side_posts-192 .post-layout:not(.swiper-slide) {
      padding: 5px;
      width: calc(100% / 1 - 0.01px)
    }

    .module-blog_side_posts-192 .side-posts .post-thumb img {
      border-radius: 50%;
      filter: grayscale(1)
    }

    .module-blog_side_posts-192 .side-posts .post-thumb:hover img {
      filter: grayscale(0)
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .name {
      display: block
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .name a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      color: rgba(238, 238, 238, 1)
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .name a:hover {
      color: #089A49
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .post-stats {
      display: flex;
      color: rgba(204, 204, 204, 1)
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .post-stats .p-date::before {
      color: #089A49
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .post-stats .p-comment::before {
      color: #089A49
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .post-stats .p-date {
      display: inline-flex
    }

    .module-blog_side_posts-192 .side-posts .post-thumb .post-stats .p-comment {
      display: inline-flex
    }

    .icons-menu-61 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .icons-menu-61 .title.module-title::after,
    .icons-menu-61 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .icons-menu-61 .title.module-title::after {
      margin-top: 7px
    }

    .icons-menu-61 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    .icons-menu-61 a {
      background: rgba(39, 124, 217, 1);
      width: 40px;
      height: 40px
    }

    .desktop .icons-menu-61 a:hover {
      background: #089A49;
      box-shadow: 0 5px 30px -5px rgba(0, 0, 0, 0.15)
    }

    .icons-menu-61 a::before {
      color: rgba(255, 255, 255, 1)
    }

    .icons-menu-61 .menu-item a {
      border-radius: 50%
    }

    .icons-menu-61 .links-text {
      white-space: normal;
      overflow: visible;
      text-overflow: ellipsis;
      display: none
    }

    .icons-menu-61>ul>.icons-menu-item {
      padding: calc(10px / 2)
    }

    .icons-menu-tooltip-61 .tooltip-inner {
      background: #089A49
    }

    .icons-menu-tooltip-61.tooltip.top .tooltip-arrow {
      border-top-color: #089A49
    }

    .icons-menu-tooltip-61.tooltip.right .tooltip-arrow {
      border-right-color: #089A49
    }

    .icons-menu-tooltip-61.tooltip.bottom .tooltip-arrow {
      border-bottom-color: #089A49
    }

    .icons-menu-tooltip-61.tooltip.left .tooltip-arrow {
      border-left-color: #089A49
    }

    .icons-menu-61 ul {
      justify-content: flex-start
    }

    .icons-menu-61 .module-title {
      text-align: left
    }

    .icons-menu-61 .module-title::after {
      left: 0;
      right: auto;
      transform: none
    }

    .icons-menu-61 .icons-menu-item-1.icon-menu-icon>a::before {
      content: '\f09a' !important;
      font-family: icomoon !important
    }

    .icons-menu-61 .icons-menu-item-2.icon-menu-icon>a::before {
      content: '\f099' !important;
      font-family: icomoon !important
    }

    .icons-menu-61 .icons-menu-item-3.icon-menu-icon>a::before {
      content: '\e90e' !important;
      font-family: icomoon !important;
      font-size: 18px
    }

    .icons-menu-61 .icons-menu-item-4.icon-menu-icon>a::before {
      content: '\f0e1' !important;
      font-family: icomoon !important
    }

    .icons-menu-61 .icons-menu-item-5.icon-menu-icon>a::before {
      content: '\f167' !important;
      font-family: icomoon !important
    }

    .icons-menu-61 .icons-menu-item-6.icon-menu-icon>a::before {
      content: '\f17e' !important;
      font-family: icomoon !important
    }

    .icons-menu-61 .icons-menu-item-7.icon-menu-icon>a::before {
      content: '\f0d3' !important;
      font-family: icomoon !important
    }

    .icons-menu-61 .icons-menu-item-8.icon-menu-icon>a::before {
      content: '\f232' !important;
      font-family: icomoon !important
    }

    div.links-menu-77 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    div.links-menu-77 .title.module-title::after,
    div.links-menu-77 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    div.links-menu-77 .title.module-title::after {
      margin-top: 7px
    }

    div.links-menu-77 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    div.links-menu-77 .module-body {
      padding-top: 7px;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-77 .menu-item {
      border-width: 0 0 0 1px;
      flex-grow: 0
    }

    div.links-menu-77 .menu-item a .links-text {
      white-space: nowrap;
      font-size: 13px;
      color: rgba(204, 204, 204, 1)
    }

    .phone footer div.links-menu-77 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-77 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-78 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    div.links-menu-78 .title.module-title::after,
    div.links-menu-78 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    div.links-menu-78 .title.module-title::after {
      margin-top: 7px
    }

    div.links-menu-78 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    div.links-menu-78 .module-body {
      padding-top: 10px;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      ;
      -webkit-overflow-scrolling: touch
    }

    div.links-menu-78 .menu-item {
      border-width: 0 0 0 1px;
      flex-grow: 0
    }

    div.links-menu-78 .menu-item a .links-text {
      white-space: nowrap
    }

    div.links-menu-78 .menu-item a {
      padding-right: 10px
    }

    div.links-menu-78 .menu-item a::before {
      font-size: 24px;
      color: rgba(204, 204, 204, 1)
    }

    div.links-menu-78 .menu-item a:hover::before {
      color: rgba(255, 255, 255, 1)
    }

    .phone footer div.links-menu-78 .module-title::before {
      display: none
    }

    .phone footer div.links-menu-78 .module-title+.module-body>li {
      display: flex
    }

    div.links-menu-78 .links-menu-item-1>a::before {
      content: '\f1f0' !important;
      font-family: icomoon !important
    }

    div.links-menu-78 .links-menu-item-2>a::before {
      content: '\f1f1' !important;
      font-family: icomoon !important
    }

    div.links-menu-78 .links-menu-item-3>a::before {
      content: '\f1f4' !important;
      font-family: icomoon !important
    }

    div.links-menu-78 .links-menu-item-4>a::before {
      content: '\f1f3' !important;
      font-family: icomoon !important
    }

    div.links-menu-78 .links-menu-item-5>a::before {
      content: '\f1f2' !important;
      font-family: icomoon !important
    }

    .module-newsletter-67 .title.module-title {
      color: rgba(238, 238, 238, 1);
      white-space: normal;
      overflow: visible;
      text-overflow: initial
    }

    .module-newsletter-67 .title.module-title::after,
    .module-newsletter-67 .title.module-title.page-title>span::after {
      width: 50px;
      height: 1px;
      background: #089A49
    }

    .module-newsletter-67 .title.module-title::after {
      margin-top: 7px
    }

    .module-newsletter-67 .title.module-title.page-title>span::after {
      margin-top: 7px
    }

    .module-newsletter-67 {
      text-align: left;
      justify-content: flex-start
    }

    .module-newsletter-67 .module-body>div {
      align-self: flex-start
    }

    .module-newsletter-67 .title::after {
      left: 0;
      right: auto;
      transform: none
    }

    .module-newsletter-67 .module-body {
      flex-direction: column
    }

    .module-newsletter-67 .newsletter-text {
      color: rgba(204, 204, 204, 1);
      margin-bottom: 10px
    }

    .module-newsletter-67 .module-body .input-group {
      height: 40px
    }

    .module-newsletter-67 .module-body .newsletter-form .input-group input {
      width: 500px;
      max-width: 100%
    }

    .module-newsletter-67 .btn::before {
      content: '\eb79' !important;
      font-family: icomoon !important;
      margin-right: 5px
    }

    .module-newsletter-67 .input-group .input-group-btn .btn {
      background: rgba(39, 124, 217, 1)
    }

    .module-newsletter-67 .input-group .input-group-btn .btn:hover {
      background: rgba(53, 66, 174, 1) !important
    }

    .module-newsletter-67 .input-group .input-group-btn .btn.btn.disabled::after {
      font-size: 20px
    }

    .module-newsletter-67 .checkbox label {
      color: rgba(204, 204, 204, 1)
    }

    @media (max-width: 760px) {
      .module-newsletter-67 .module-body .newsletter-form .checkbox {
        padding-top: 15px
      }
    }
  </style>
  <script src="{{asset('catalog/view/theme/journal3/assets/eb759fce398e36f75bf3b9b06dbd99744b50.js?v=b1c2c768')}}" defer></script>
</head>

<body class="">


  <div class="mobile-container mobile-main-menu-container">
    <div class="mobile-wrapper-header">
      <span>Menu</span>
      <a class="x"></a>
    </div>
    <div class="mobile-main-menu-wrapper">

    </div>
  </div>

  <div class="mobile-container mobile-filter-container">
    <div class="mobile-wrapper-header"></div>
    <div class="mobile-filter-wrapper"></div>
  </div>

  <div class="mobile-container mobile-cart-content-container">
    <div class="mobile-wrapper-header">
      <span></span>
      <a class="x"></a>
    </div>
    <div class="mobile-cart-content-wrapper cart-content"></div>
  </div>



  <div class="site-wrapper">

  


    <header class="header-classic">
      <div class="header header-classic header-lg">
        <div class="top-bar navbar-nav" style='background:#033553;border-bottom:2px solid #089A49' >
          <div class="top-menu top-menu-2" >
          
          </div>

          <div class="language-currency top-menu">
            <div class="desktop-language-wrapper">

            </div>
            <div class="desktop-currency-wrapper">
              <div id="currency" class="currency">
                <form method="post" enctype="multipart/form-data" id="form-currency">
                  <div class="dropdown drop-menu">
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="currency-symbol-title">
                        
                        <span class="currency-title">Available Locations</span>
                       
                      </span>
                    </button>
                    <div class="dropdown-menu j-dropdown">
                      <ul class="j-menu">
                        @foreach($category as $category)
                        <li>
                          <a class="currency-select" href="{{route('locationdisplay',[$category->id])}}">
                          
                            <span class="currency-title-dropdown">{{$category->name}}</span>
                            
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
          <div class="third-menu"></div>
        </div>
        <div class="mid-bar navbar-nav" style='background:#033553'>
          <div class="desktop-logo-wrapper">
            <div id="logo">
              <a href='/'>
                <img src="{{asset('myimages/logo_header.png')}}" style='background:#fff;padding:3px;border-radius:4px' srcset="{{asset('myimages/logo_header.png')}}" width="220" height="63" alt="CTHostel" title="CTHostel" />
              </a>
            </div>
          </div>
          <div class="desktop-search-wrapper full-search default-search-wrapper">
            <div id="search" class="dropdown">
              <button class="dropdown-toggle search-trigger" data-toggle="dropdown"></button>
              <div class="dropdown-menu j-dropdown">
                <div class="header-search">
                   <div style='background:red;animation:1s infinite example;animation-duration: 1s infinite;' class="search-categories dropdown drop-menu">
                    <div class="search-categories-button dropdown-toggle" data-toggle="dropdown">Emergency!</div>
                    <style>
                    @keyframes example {
  from {background-color: red;}
  to {background-color: yellow;color:black}
}
                    </style>
                    <div class="dropdown-menu j-dropdown">
                       <ul class="j-menu">
                  <li class="menu-item top-menu-item top-menu-item-1">
                    <a href="tel:08032979644"><span
                        class="links-text">Ambulance</span></a>
                  </li>
                  <li class="menu-item top-menu-item top-menu-item-1">
                    <a href="tel:0803 569 2904"><span
                        class="links-text">Fire Service</span></a>
                  </li>
                  <li class="menu-item top-menu-item top-menu-item-1">
                    <a href="/faq"><span
                        class="links-text">FAQ</span></a>
                  </li>

                  <li class="menu-item top-menu-item top-menu-item-2">
                    <a href="/welcomepage"><span class="links-text">About Us</span></a>
                  </li>

                  <li class="menu-item top-menu-item top-menu-item-3">
                    <a href="https://wa.me/2349058744473?text=Hi%20,%20my%20name%20is%20(%20Input%20%20your%20name%20)%20,%20from%20CTHostel%20.%20(%20Type%20your%20message%20here%20)%20."><span class="links-text">Contact Us</span></a>
                  </li>

                </ul>
                 <form method='post' action='{{route("search")}}'>@csrf
                  <input name='school_id' type='hidden' value='{{$school_id}}'>
                    </div>
                  </div>
                  
                  <input type="text" disabled name="searchinput" value="" placeholder="Search here..." class="search-input"
                    data-category_id="0" />
                  <button type="submit" class="search-button">
                   
                    </button>
                    </form>
                     </div>
              </div>
            </div>

          </div>
          <div class="classic-cart-wrapper">
            <div class="top-menu secondary-menu">
              <div class="top-menu top-menu-14">
                <ul class="j-menu">
                  <li class="menu-item top-menu-item top-menu-item-1">
                    <a href="index11cd.html?route=information/information&amp;information_id=7"><span class="links-text">FAQ</span></a>
                  </li>

                  <li class="menu-item top-menu-item top-menu-item-2">
                    <a href="blog.html"><span class="links-text">Blog</span></a>
                  </li>

                  <li class="menu-item top-menu-item top-menu-item-3">
                    <a href="index2724.html?route=information/contact"><span class="links-text">Contact</span></a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      <div class="mobile-header mobile-default mobile-2">
        <div class="mobile-top-bar" style='background:#033553'>
          <div class="mobile-top-menu-wrapper">
            <div class="top-menu top-menu-13">
              <ul class="j-menu">
                <li class="menu-item top-menu-item top-menu-item-1">
                  <a href="/login"><span class="links-text">Login</span></a>
                </li>

                <li class="menu-item top-menu-item top-menu-item-2">
                  <a href="/register"><span class="links-text">Register</span></a>
                </li>

              </ul>
            </div>

          </div>
          <div class="language-currency top-menu">
            <div class="mobile-currency-wrapper">

            </div>
            <div class="mobile-language-wrapper">

            </div>
          </div>
        </div>
        <div class="mobile-bar sticky-bar">
          <div class="menu-trigger">
            <button><span>Menu</span></button>
          </div>
          <div class="mobile-logo-wrapper">
          </div>
          <div class="mobile-cart-wrapper mini-cart">

          </div>
        </div>
        <div class="mobile-bar-group mobile-search-group">
          <div class="mobile-search-wrapper full-search">

          </div>
        </div>
      </div>
    </header>



    <ul class="breadcrumb">
      <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
      <li><a href="index7c5b.html?route=product/category&amp;path=111&amp;limit=100">{{$album->category->name}}</a>
      @if(Session::has('success'))
      <span style='background:#fff8dd;border-radius:.475rem!important;border-color:#ffc700!important;border-style: dashed!important;border:1px solid #fff'>
      {{Session::get('message')}}
      </span>
      @endif
      </li>
      <!-- <li><a href="index00a2.html?route=product/product&amp;path=111&amp;limit=100&amp;product_id=343">CTHostel</a></li> -->
    </ul>
    <h1 class="title page-title"><span>{{$album->name}}</span></h1>
    <div style='background:#fff8dd;margin:20px;padding:10px;border-radius:.475rem!important;border-color:#ffc700!important;border-style: dashed!important;border:1px solid #fff'  class="product-blocks-top product-blocks-247 grid-rows">

    <h6 class="title page-title">INSTRUCTION</h6>
    <ul>
    <li>Type the name of your hostel or the name of a popular hostel, restaurant, church, hall, e.t.c that is closer to your hostel.<br>
    </li>
    <li>Click on check button to confirm if the place is recognise in google map</li>
    <li>Once you can confirm that the place is recognised in google map, you can then click on submit to add the location to your hostel</li>
    </ul>
    </div>




    <div id="product-product" class="container">
      <div class="row">
        <div id="content" class="">

          <div class="product-info has-extra-button ">
            <div class="product-left">
             <form action='{{route("save_address",$album->id)}}' method='post'>@csrf
                            <!--        <input type='text' name='latitude' id='latitude'>
                                    <input type='text' name='longitude' id='longitude'>-->
                                   <textarea class='form-control' style='margin:0px' placeholder='Type here...' name='address' type='text' required id='location'></textarea>
                                  <button class='btn btn-info' type='button' id='location_submit' name='submit'>Check</button>
                                    <button class='btn btn-success' type='submit' href='#submitlocation' name='submit'>Submit</button>

                                </form>
                            <!--    <p id'location_error' style='display:none;color: #842029;background-color: #f8d7da;border-color: #f5c2c7;'class='alert alert-danger'>Location not found</p>
                                <p id='location_found' style='display:none;color: #0f5132;background-color: #d1e7dd;border-color: #badbcc;' class='alert alert-success'>Location found</p>
-->
                    
            </div>
            <div class="product-right">
              <div id="product" class="product-details">
                <div class="title page-title">CTHostel</div>
                <div class="product-blocks blocks-top">
<div style='background:#fff8dd;border-radius:.475rem!important;border-color:#ffc700!important;border-style: dashed!important;border:1px solid #fff'  class="product-blocks-top product-blocks-247 grid-rows">
<div class="grid-row grid-row-247-1">
                      <div class="grid-cols">
                        <div class="grid-col grid-col-247-1-1">
                          <div class="grid-items">
                            <div class="grid-item grid-item-247-1-1-1">
                           
                              <div class="module module-info_blocks module-info_blocks-250">
                                <div class="module-body">
                                  <div class="module-item module-item-8 info-blocks info-blocks-icon">
                               <!--   <div class="module-item module-item-1 info-blocks info-blocks-icon">-->
                                    <div class="info-block">
                                    <!--  <div class="info-block-content">
                                        <div class="info-block-title">DISCLAIMER</div>
                                        <div class="info-block-text">Please note that payment should be made after the confirmation of the availability and assessment of the hostel. CTHostel will not be responsible for any form of misunderstanding.</div>
                                      </div>-->
                                 <div class="info-block-content" id='location_populate'>
                                    </div>
                                      <a href='https://add-map.com/'></a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=e52b8b26442916146d5a1fce9ed1bdc930ae61ee'></script>
                               
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Roommate request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id='roommate_request' method='post' enctype="multipart/form-data" >
       @csrf
			<div class="form-group">
			    <label>Name:</label>
                <input type='hidden' value='{{$album->id}}' id='album_id'>
                <input type="text" id='name' name="name" class="form-control" required="">
			</div>
			<div class="form-group">
			    <label>Gender</label>
                <select id='gender' class="form-control" name="gender" required>
                <option value=''>Select Gender</option>
                <option value='Male'>Male</option>
                <option value='Female'>Female</option>
              		</select>
            </div>
			<div class="form-group">
			    <label>Religion</label>
                <select id='religion' class="form-control" name="religion" required>
                <option value=''>Select Religion</option>
                <option value='Christainity'>Christainity</option>
                <option value='Islamic'>Islamic</option>
                <option value='Traditional'>Traditional</option>
                <option value='Others'>Others</option>
              		</select>
            </div>
			<div class="form-group">
			    <label>Department:</label>
                <input type="text" id='department' name="department" class="form-control" required="" >
			</div>
			<div class="form-group">
			    <label>Level</label>
                <select class="form-control" id='level' name="level" required>
                <option value=''>Select Level</option>
                <option value='100 Level'>100 Level</option>
                <option value='200 Level'>200 Level</option>
                <option value='300 Level'>300 Level</option>
                <option value='400 Level'>400 Level</option>
                <option value='500 Level'>500 Level</option>
                <option value='600 Level'>600 Level</option>
                      </select>
                </div>
			<div class="form-group">
			    <label>Phone Number</label>
                <input type="number" min='11' id='phone' name="phone" class="form-control" maxlength="15" required="" >
			</div>
			<div class="form-group">
				
			</div>
			
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id='request' class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>







                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
                  </div>

                </div>
            

              </div>
             
            </div>
          </div>
        </div>
        <aside id="column-right" class="side-column">
          <div class="grid-rows">
            <div class="grid-row grid-row-column-right-1">
              <div class="grid-cols">
                <div class="grid-col grid-col-column-right-1-1">
                  <div class="grid-items">
                    <div class="grid-item grid-item-column-right-1-1-1">
                      <div class="module module-info_blocks module-info_blocks-244">
                        
                      </div>

                    </div>
                  </div>
                </div>
            
            
               
              </div>
            </div>
          </div>

        </aside>
      </div>
    </div>
    <script type="text/javascript/defer">
      <!--
      $('select[name=\'recurring_id\'], input[name="quantity"]').change(function() {
        $.ajax({
          url: 'index.php?route=product/product/getRecurringDescription',
          type: 'post',
          data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
          dataType: 'json',
          beforeSend: function() {
            $('#recurring-description').html('');
          },
          success: function(json) {
            $('.alert-dismissible, .text-danger').remove();

            if (json['success']) {
              $('#recurring-description').html(json['success']);
            }
          }
        });
      });
      //
      -->
    </script>
    <script type="text/javascript/defer">
      <!--
      $('#button-cart, [data-quick-buy]').on('click', function() {
        var $btn = $(this);
        $.ajax({
          url: 'index.php?route=checkout/cart/add',
          type: 'post',
          data: $(
            '#product .button-group-page input[type=\'text\'], #product .button-group-page input[type=\'hidden\'], #product .button-group-page input[type=\'radio\']:checked, #product .button-group-page input[type=\'checkbox\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
            '#product .product-options input[type=\'text\'], #product .product-options input[type=\'hidden\'], #product .product-options input[type=\'radio\']:checked, #product .product-options input[type=\'checkbox\']:checked, #product .product-options select, #product .product-options textarea, ' +
            '#product select[name="recurring_id"]'
          ),
          dataType: 'json',
          beforeSend: function() {
            $('#button-cart').button('loading');
          },
          complete: function() {
            $('#button-cart').button('reset');
          },
          success: function(json) {
            $('.alert-dismissible, .text-danger').remove();
            $('.form-group').removeClass('has-error');

            if (json['error']) {
              if (json['error']['option']) {
                for (i in json['error']['option']) {
                  var element = $('#input-option' + i.replace('_', '-'));

                  if (element.parent().hasClass('input-group')) {
                    element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                  } else {
                    element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                  }
                }
              }

              if (json['error']['recurring']) {
                $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
              }

              // Highlight any found errors
              $('.text-danger').parent().addClass('has-error');

              try {
                $('html, body').animate({
                  scrollTop: $('.form-group.has-error').offset().top - 50
                }, 'slow');
              } catch (e) {}
            }

            if (json['success']) {
              if ($('html').hasClass('popup-options')) {
                parent.$(".popup-options .popup-close").trigger('click');
              }

              if (json['notification']) {
                parent.show_notification(json['notification']);
              } else {
                parent.$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
              }

              parent.$('#cart-total').html(json['total']);
              parent.$('#cart-items,.cart-badge').html(json['items_count']);

              if (json['items_count']) {
                parent.$('#cart-items,.cart-badge').removeClass('count-zero');
              } else {
                parent.$('#cart-items,.cart-badge').addClass('count-zero');
              }

              if (Journal['scrollToTop']) {
                parent.$('html, body').animate({
                  scrollTop: 0
                }, 'slow');
              }

              parent.$('.cart-content ul').load('index1e1c.html?route=common/cart/info%20ul%20li');

              if (window.location.href.indexOf('quick_buy=true') !== -1) {
                parent.location.href = Journal['checkoutUrl'];
              }

              if ($btn.data('quick-buy') !== undefined) {
                location = Journal['checkoutUrl'];
              }

              if (parent.window['_QuickCheckout']) {
                parent.window['_QuickCheckout'].save();
              }

              if (json['redirect']) {
                parent.location.href = json['redirect'];
              }
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);
          }
        });
      });
      //
      -->
    </script>
    <script type="text/javascript/defer">
      <!--
      $('.date').datetimepicker({
        language: 'en-gb',
        pickTime: false
      });

      $('.datetime').datetimepicker({
        language: 'en-gb',
        pickDate: true,
        pickTime: true
      });

      $('.time').datetimepicker({
        language: 'en-gb',
        pickDate: false
      });

      $('button[id^=\'button-upload\']').on('click', function() {
        var node = this;

        $('#form-upload').remove();

        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

        $('#form-upload input[name=\'file\']').trigger('click');

        if (typeof timer != 'undefined') {
          clearInterval(timer);
        }

        timer = setInterval(function() {
          if ($('#form-upload input[name=\'file\']').val() != '') {
            clearInterval(timer);

            $.ajax({
              url: 'index.php?route=tool/upload',
              type: 'post',
              dataType: 'json',
              data: new FormData($('#form-upload')[0]),
              cache: false,
              contentType: false,
              processData: false,
              beforeSend: function() {
                $(node).button('loading');
              },
              complete: function() {
                $(node).button('reset');
              },
              success: function(json) {
                $('.text-danger').remove();

                if (json['error']) {
                  $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                }

                if (json['success']) {
                  alert(json['success']);

                  $(node).parent().find('input').val(json['code']);
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
          }
        }, 500);
      });
      //
      -->
    </script>
    <script type="text/javascript/defer">
      <!--
      $(function() {
        $('#review').delegate('.pagination a', 'click', function(e) {
          e.preventDefault();

          $('#review').fadeOut('slow');

          $('#review').load(this.href);

          $('#review').fadeIn('slow');
        });

        $('#review').load('index8658-2.html?route=product/product/review&amp;product_id=343');

        $('#button-review').on('click', function() {
          $.ajax({
            url: 'index.php?route=product/product/write&product_id=343',
            type: 'post',
            dataType: 'json',
            data: $("#form-review").serialize(),
            beforeSend: function() {
              $('#button-review').button('loading');
            },
            complete: function() {
              $('#button-review').button('reset');
            },
            success: function(json) {
              $('.alert-dismissible').remove();

              if (json['error']) {
                $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
              }

              if (json['success']) {
                $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                $('input[name=\'name\']').val('');
                $('textarea[name=\'text\']').val('');
                $('input[name=\'rating\']:checked').prop('checked', false);
              }
            }
          });
        });
      });

      $(document).ready(function() {
        $('.thumbnails').magnificPopup({
          type: 'image',
          delegate: 'a',
          gallery: {
            enabled: true
          }
        });
      });

      $(document).ready(function() {
        $('.review-links a').on('click', function() {
          var $review = $('#review');
          if ($review.length) {
            $('a[href="#' + $review.closest('.module-item').attr('id') + '"]').trigger('click');
            $('a[href="#' + $review.closest('.tab-pane').attr('id') + '"]').trigger('click');
            $('a[href="#' + $review.closest('.panel-collapse').attr('id') + '"]').trigger('click');
            $review.closest('.expand-block').find('.block-expand.btn').trigger('click');

            $([document.documentElement, document.body]).animate({
              scrollTop: $review.offset().top - 100
            }, 200);
          }
        });
      });
      //
      -->
    </script>
    <script type="application/ld+json">
      {
        "@context": "http:\/\/schema.org",
        "@type": "WebSite",
        "url": "https:\/\/www.journal-theme.com\/5\/",
        "name": "Journal 3 Demo 5",
        "description": "Journal 3 - Most Advanced Opencart Framework",
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https:\/\/www.journal-theme.com\/5\/index.php?route=product\/search&amp;search={search}",
          "query-input": "required name=search"
        }
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "http:\/\/schema.org",
        "@type": "Organization",
        "url": "https:\/\/www.journal-theme.com\/5\/",
        "logo": "https:\/\/www.journal-theme.com\/5\/image\/cache\/catalog\/journal3\/logo\/logo6-white-2x-405x116.png"
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "http:\/\/schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "item": {
            "@id": "https:\/\/www.journal-theme.com\/5\/index.php?route=common\/home",
            "name": "Home"
          }
        }, {
          "@type": "ListItem",
          "position": 2,
          "item": {
            "@id": "https:\/\/www.journal-theme.com\/5\/index.php?route=product\/category&amp;path=111&amp;limit=100",
            "name": "Footwear"
          }
        }, {
          "@type": "ListItem",
          "position": 3,
          "item": {
            "@id": "https:\/\/www.journal-theme.com\/5\/index.php?route=product\/product&amp;path=111&amp;limit=100&amp;product_id=343",
            "name": "CTHostel"
          }
        }]
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "http:\/\/schema.org\/",
        "@type": "Product",
        "name": "CTHostel",
        "image": "https:\/\/www.journal-theme.com\/5\/image\/cache\/catalog\/journal3\/products\/footwear\/shoes-2000x2000.jpg",
        "description": "Product description, along with any other tab can be displayed as tabs, accordion or all-visible blocks in grid format or one under the other.&nbsp; You can mix and match tabs and blocks in any order and any position. Each tab can also be set up as a link and point to other pages or open popup modul",
        "sku": "",
        "mpn": "",
        "model": "Model 208",
        "offers": {
          "@type": "Offer",
          "priceCurrency": "USD",
          "price": "540.00",
          "itemCondition": "http:\/\/schema.org\/NewCondition",
          "availability": "http:\/\/schema.org\/InStock",
          "seller": {
            "@type": "Organization",
            "name": "Journal 3 Demo 5"
          },
          "priceValidUntil": "2022-08-19",
          "url": "https:\/\/www.journal-theme.com\/5\/index.php?route=product\/product&product_id=343"
        },
        "brand": {
          "@type": "Thing",
          "name": "Fort Cane"
        }
      }
    </script>


  


    <footer>
      <div class="grid-rows">
        
        <div class="grid-row grid-row-2" style='background:#033553'>
          <div class="grid-cols">
            <div class="grid-col grid-col-1">
              <div class="grid-items">
                <div class="grid-item grid-item-1">
                  <div class="icons-menu icons-menu-61">
                    <h3 class="title module-title">Follow Us</h3>
                    <ul>
                      <li class="menu-item icons-menu-item icons-menu-item-1 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Facebook" href="">
                          <span class="links-text">Facebook</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-2 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Twitter" href="index.html">
                          <span class="links-text">Twitter</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-3 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Instagram" href="https://instagram.com/the_caretech?utm_medium=copy_link">
                          <span class="links-text">Instagram</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-4 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="LinkedIn" href="https://linkedin.com/in/fasanya-oluwapelumi-1b7343157">
                          <span class="links-text">LinkedIn</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-8 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Whatsapp" href="https://wa.me/2349058744473?text=Type%2C%20your%20message%20here">
                          <span class="links-text">Whatsapp</span>
                        </a>
                      </li>
                    </ul>
                  </div>

                </div>
                <div class="grid-item grid-item-2">
                  <div class="links-menu links-menu-77">
                    <ul class="module-body">
                      <li class="menu-item links-menu-item links-menu-item-1">
                        <a>
                          <span class="links-text">Copyright © 2021, CTHostel, All Rights Reserved</span>
                        </a>
                      </li>

                    </ul>
                  </div>

                </div>
              
              </div>
            </div>
         <!--   <div class="grid-col grid-col-2">
              <div class="grid-items">
                <div class="grid-item grid-item-1">
                  <div class="module module-newsletter module-newsletter-67">
                    <h3 class="title module-title">Newsletter</h3>
                    <div class="module-body">
                      <div class="newsletter-text">Don't miss any updates or promotions by signing up to our newsletter.</div>
                      <div class="newsletter-form">
                        <form id="subscription_form" action='' method='post' class="form-horizontal">@csrf
                         <div class="input-group">
                            <input type="text" name="email" placeholder="Your email" class="form-control newsletter-email" />
                            <span class="input-group-btn">
                          <button type='submit' disabled='disabled' class='btn btn-primary'>Submit</button>

                            </span>
                          </div>
                          <div class="checkbox">
                            
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>

    </footer>

  </div><!-- .site-wrapper -->





  <script src="{{asset('catalog/view/theme/journal3/assets/af3683e08b84fa8fa09eeabbb9f73f504b50.js?v=b1c2c768')}}" defer></script>
 <script src="{{ asset('assets2/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets2/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>

    <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js\requestController.js') }}"></script>
    <script src="{{ asset('js\formController.js') }}"></script>



  <div class="scroll-top">
    <i class="fa fa-angle-up"></i>
  </div>
  <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js\requestController.js') }}"></script>
    <script src="{{ asset('js\formController.js') }}"></script>

<script>
        $(document).ready(function() {
             
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $("#location_submit").click( function() {
                      if(1 == 1) {
                          $("#location_found").show()
                      }else {
                          $("#location_error").show()
}
                       $("#location_populate").empty()
                       var ibadan = $("#location").val();
                       $("#location_populate").append("<iframe width='520' height='400' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' id='gmap_canvas' src='https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=alabata%20"+ibadan+"+()&amp;t=h&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed'></iframe><a target='_blank' jstcache='52' href='https://maps.google.com/maps/dir//"+ibadan+"Alabata+Street+111101+Abeokuta/@7.2436991,3.3433048,12z/data=!4m5!4m4!1m0!1m2!1m1!1s0x103a49f2073bd6ab:0x8ed091919b8b5bb6' class='navigate-link'> <div class='icon navigate-icon'></div> <div jstcache='53' class='navigate-text'>Check Distance From Main Gate</div> </a> ");
                   })
                       
				   $("#roommate_request").submit(async function(e) {
                       e.preventDefault()
                             $("#request").attr('disabled',true);
                            var fd = new FormData();

                            // Append data 
                            fd.append('name', $("#name").val());
                            fd.append('album_id', $("#album_id").val());
                            fd.append('gender', $("#gender").val());
                            fd.append('religion', $("#religion").val());
                            fd.append('department', $("#department").val());
                            fd.append('level', $("#level").val());
                            fd.append('phone', $("#phone").val());
                           

                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "{{route('storeroommate')}}",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    $("#exampleModalCenter").hide()
                                    swal("Success", 'Request submitted successfully', 'success');
                                    console.log(data)
									window.location.reload();

                                },
                                error: function(data) {
                                    console.log(data);
                                    $("#exampleModalCenter").hide()
                                    swal('Oops', 'request not submitted','error')
                                }
                            });
						});
						});

             
	</script>
 <!--<script src="{{asset('assets/professionallocker.js')}}"></script>-->
  <script defer src="../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6815e5258cf30762","version":"2021.8.1","r":1,"token":"08f347fa5c4f4ca684e763b9ca7b9d68","si":10}'></script>
</body>

</html>