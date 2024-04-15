(function () {
    let yt_play = document.querySelector('div.yt-embed .vid-play-btn');

        if(yt_play) {
            let yt_iframe = document.querySelector('div.yt-embed iframe');
            let yt_iframe_src = yt_iframe.getAttribute('data-src');
            let yt_wrapper = document.querySelector('div.yt-embed .vid-overlay-wrapper');
            
            yt_play.addEventListener('click', function() {
                console.log('yt clicked');
                yt_wrapper.style.display = "none";
                yt_iframe.setAttribute('src', yt_iframe_src);
            });
        }
})();