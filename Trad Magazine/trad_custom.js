// url = String(jQuery(location).attr("href").split("/")[4])
// jQuery('#top > header.x-header-landmark.x-container.max.width > h1 > span').replaceWith(url.charAt(0).toUpperCase() 
//                                                                                         + url.substr(1).toLowerCase())

//To fix Instagram errors
setTimeout(
    function() 
    {
      jQuery(".wp-block-embed-instagram > .wp-block-embed__wrapper > .x-resp-embed").removeClass("x-resp-embed")
    }, 2000);
  