// resize reCAPTCHA image popup box:
// https://geekgoddess.com/how-to-resize-the-google-nocaptcha-recaptcha/
// see: comment by user Nitrox

// create an observer instance
var observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        for (var i = 0; i < mutation.addedNodes.length; i++) {
            if (mutation.addedNodes[i].tagName == 'DIV') {
                var thediv = mutation.addedNodes[i];
                var sw = window.screen.width;
                                        
                if(sw < 667) {
                    $(thediv).css({"transform" : "scale(0.9)", "transform-origin" : "0 0", "-webkit-transform" : "scale(0.9)", "-webkit-transform-origin" : "0 0"});
                }
            }
        }
    });
});

// pass in the target node, as well as the observer options
observer.observe(document.body, {
    attributes: false,
    childList: true,
    characterData: false
});