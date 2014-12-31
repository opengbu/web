/*
 * blueimp Gallery Demo JS 2.12.1
 * https://github.com/blueimp/Gallery
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/* global blueimp, $ */

$(function () {
    'use strict';

    // Load demo images from flickr:
    $.ajax({
        // Flickr API is SSL only:
        // https://code.flickr.net/2014/04/30/flickr-api-going-ssl-only-on-june-27th-2014/
        url: 'https://api.flickr.com/services/rest/',
        data: {
            format: 'json',
            //method: 'flickr.interestingness.getList',
            method: 'flickr.photosets.getPhotos',
            //api_key: '7617adae70159d09ba78cfec73c13be3', 
            api_key: '035aa4b9e23de4f3f416ef395981c99b'
        },
        dataType: 'jsonp',
        jsonp: 'jsoncallback'
    }).done(function (result) {
        var carouselLinks = [],
            linksContainer = $('#links'),
            baseUrl;
        // Add the demo images as links with thumbnails to the page:
        //https://api.flickr.com/services/rest/?
        //&api_key=&photoset_id=72157650008332291+-+abhi2011&
        //format=json&nojsoncallback=1&
        //auth_token=72157649952355806-e4b952915b971661&api_sig=4f2d37a412f6696ec83993950e1433c6
        //RETURN

      //  { "photoset": { "id": "72157650008332291", "primary": "15527026773", "owner": "129559340@N05", "ownername": "gautambudhuniversity", 
    //"photo": [
     // { "id": "15527026773", "secret": "8e2defa96e", "server": "7503", "farm": 8, "title": "images", "isprimary": 1, "ispublic": 1, "isfriend": 0, "isfamily": 0 },
     // { "id": "15959314258", "secret": "88b8111f62", "server": "8574", "farm": 9, "title": "camplife", "isprimary": 0, "ispublic": 1, "isfriend": 0, "isfamily": 0 },
     // { "id": "15960677839", "secret": "65d4f963f7", "server": "8579", "farm": 9, "title": "15951280937_34ffdcb05d_b", "isprimary": 0, "ispublic": 1, "isfriend": 0, "isfamily": 0 },
    //  { "id": "16146761445", "secret": "fcbe70dea6", "server": "7507", "farm": 8, "title": "15515632314_5e1ffa1b74_b", "isprimary": 0, "ispublic": 1, "isfriend": 0, "isfamily": 0 }
    //], "page": 1, "per_page": "500", "perpage": "500", "pages": 1, "total": 4, "title": "abhi2011" }, "stat": "ok" }
    
         $.each(result.photoset.photo, function (index, photo) {
            baseUrl = 'https://farm' + photo.farm + '.static.flickr.com/' +
                photo.server + '/' + photo.id + '_' + photo.secret;
            $('<a/>')
                .append($('<img>').prop('src', baseUrl + '_s.jpg'))
                .prop('href', baseUrl + '_b.jpg')
                .prop('title', photo.title)
                .attr('data-gallery', '')
                .appendTo(linksContainer);
            carouselLinks.push({
                href: baseUrl + '_c.jpg',
                title: photo.title
            });
        });
        // Initialize the Gallery as image carousel:
        blueimp.Gallery(carouselLinks, {
            container: '#blueimp-image-carousel',
            carousel: true
        });
    });

    // Initialize the Gallery as video carousel:
    blueimp.Gallery([
        {
            title: 'Sintel',
            href: 'https://archive.org/download/Sintel/sintel-2048-surround_512kb.mp4',
            type: 'video/mp4',
            poster: 'https://i.imgur.com/MUSw4Zu.jpg'
        },
        {
            title: 'Big Buck Bunny',
            href: 'https://upload.wikimedia.org/wikipedia/commons/7/75/' +
                'Big_Buck_Bunny_Trailer_400p.ogg',
            type: 'video/ogg',
            poster: 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/' +
                'Big.Buck.Bunny.-.Opening.Screen.png/' +
                '800px-Big.Buck.Bunny.-.Opening.Screen.png'
        },
        {
            title: 'Elephants Dream',
            href: 'https://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/' +
                'Elephants_Dream_%28high_quality%29.ogv/' +
                'Elephants_Dream_%28high_quality%29.ogv.360p.webm',
            type: 'video/webm',
            poster: 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/' +
                'Elephants_Dream_s1_proog.jpg/800px-Elephants_Dream_s1_proog.jpg'
        },
        {
            title: 'LES TWINS - An Industry Ahead',
            type: 'text/html',
            youtube: 'zi4CIXpx7Bg'
        },
        {
            title: 'KN1GHT - Last Moon',
            type: 'text/html',
            vimeo: '73686146',
            poster: 'https://secure-a.vimeocdn.com/ts/448/835/448835699_960.jpg'
        }
    ], {
        container: '#blueimp-video-carousel',
        carousel: true
    });

});
