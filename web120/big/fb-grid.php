<?php include "includes/header.php";?>

<main class="research">

    <h2>Flexbox & Grid</h2>

    <p>
        Although it may not appear so at first glance, everything on a web page is inside a box.
    </p>

    <!-- <img src="img/boxes.png" alt="a sample image showing various HTML elements within colored boxes" title="The box model" /> -->
    <iframe class="boxy" src="boxy.html"></iframe>

    <p>
        In the frame above, the html is bordered with green, the body with orange, the big header with red, the smaller header with purple, the paragraph with blue, the link with teal, and finally the horizontal rule with pink. This is a visual representation of the <em>box model</em>.
    </p>

    <p>
        As every element is a box, so too are pages laid out within boxes. Years ago, it was typical to use tables for this task, but that was cumbersome. Each column and row had to be precisely positioned and sized relative to other columns and rows. Endless lines of table headers, table rows, and table data cells quickly grew overwhelming. The only flexibility was the allowance of width as a percentage.
    </p>

    <p>
        Since the release of CSS2, and now with CSS3, there are two layout models that take advantage of the boxy characteristics of HTML elements: <strong>Flexbox</strong> and <strong>Grid</strong>. According to the website utility Can I Use, Flexbox has global browser support of 95.59%, while Grid is a bit lower at 92.19%; they are both supported by all of the major browsers, with each having partial support in the depreciated Internet Explorer 11 (valid as it still maintains a 1.55% browser market share) (Can I Use).
    </p>

    <p>
        These models are flexible in that they allow the developer to move items and blocks of content around a page, an ability previously impossible with the table layout model. In addition, they are valuable tools in the creation of responsive web design, an important feature in today’s <a href="res-v-mobile.php">ever-expanding mobile market</a>.
    </p>

    <p>
        CSS-Tricks states that “[t]he Flexbox Layout (Flexible Box) module… aims at providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic (thus the word ‘flex’),” with the goal “to give the container the ability to alter its items' width/height (and order) to best fill the available space. (Coyier)”
    </p>

    <p>
        About Grid, CSS-Tricks offers effusive praise, saying that it “is the most powerful layout system available in CSS,” and that it “aims to do nothing less than completely change the way we design grid-based user interfaces. (House)”
    </p>

    <h3>How are they used?</h3>

    <p>
        The role of each model can be described succinctly in saying that Flexbox is for working in one-dimension (i.e. top to bottom, or left to right), while Grid can be used for both (Borgen). This limitation of Flexbox is seen within the property syntax itself: <code>flex-direction: column</code> and <code>flex-direction: row</code> explicitly state the orientation of the items within the container. Similarly, the Grid properties <code>grid-template-columns</code>, <code>grid-template-rows</code>, <code>grid-template-areas</code> (and more) relate to the simultaneous use of columns and rows to organize positioning and orientation.
    </p>

    <p>
        If multiple orientation is desired within Flexbox, it would be necessary to designate a child element within the flex container as itself a flex container with the opposite orientation (i.e. column to row). This sort of workaround is unnecessary when working with Grid, as multiple orientation is a built-in feature.
    </p>

    <p>
        The layout of this website was made using Grid and the <code>grid-template-areas</code> property.
    </p>

    <p>
        <pre>
        .container {
        display: grid;                        
        grid-template-columns: 7fr 3fr;
        grid-template-rows: auto auto 1fr auto;
        grid-template-areas: 
        "header header"
        "nav nav"
        "main aside"
        "footer footer";
        row-gap: 10px;
        column-gap: 10px;
        }

        header {
        grid-area: header;
        }

        nav {
        grid-area: nav;
        }

        main {
        grid-area: main;
        }

        aside {
        grid-area: aside;
        }

        footer {
        grid-area: footer;
        } </pre>
    </p>

    <h3>One or the other... or both?</h3>

    <p>
        While Grid is powerful and versatile, Flexbox is still a worthy tool: it allows movement and positioning of items along one axis with a small amount of code and is easy to maintain (Borgen). It is not necessary to use the more property-heavy Grid for a single column layout when Flexbox will do the job well. On the other hand, Grid was built to handle multiple columns and rows, so should be used according to the demands of the desired layout.
    </p>

    <p>
        It is important for a developer to learn these features and be able to recognize when to use one over the other. It is also useful to know when to combine them. Grid items can themselves be turned into a flex container, allowing the use of Flexbox features within a Grid in order to position and align items.
    </p>

    <p>
        Everything on a web page is a box. Flexbox and Grid are both features to learn and use for their flexibility, dynamism, and responsiveness. 
    </p>

</main>

<aside class="reference">

    <h2>References</h2>

    <p>
        Borgen, Per Harald. <cite><a href="https://hackernoon.com/the-ultimate-css-battle-grid-vs-flexbox-d40da0449faf" target="_blank">The ultimate CSS battle: Grid vs Flexbox.</a></cite> 7 December 2017. Web Page. 16 February 2020.
    </p>

    <p>
        Can I Use. <cite><a href="https://caniuse.com/" target="_blank">Can I Use.</a></cite> n.d. Web Page. 16 February 2020.
    </p>

    <p>
        Coyier, Chris. <cite><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">A Complete Guide to Flexbox.</a></cite> 3 February 2020. Web Page. 16 February 2020.
    </p>

    <p>
        House, Chris. <cite><a href="https://css-tricks.com/snippets/css/complete-guide-grid/" target="_blank">A Complete Guide to Grid.</a></cite> 13 September 2019. Web Page. 16 February 2020.
    </p>

</aside>

<?php include "includes/footer.php";?>