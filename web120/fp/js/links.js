// opens external links in a new tab

const ANCHOR = document.getElementsByTagName("a");  // gets all anchor elements

function openLinks() {

    for (i=0; i<ANCHOR.length; i++) {  // runs through all anchor elements
    
        if (ANCHOR[i].hasAttribute("href")) {  // looks for href attribute in anchor element
            if(ANCHOR[i].getAttribute("href").startsWith("http")) {
                ANCHOR[i].setAttribute("target", "_blank");
            }
            // if the value of the href starts with http, adds attribute target="_blank" to make open in new tab
            // uses 'http' to account for variations of http or https
        }
    }                
}

openLinks();