<?php include "includes/header.php";?>

<h1>The Shapes Between Shadows</h1>

<div class="desktop">

    <div class="books-d">
        <input type="image" class="books-d-img" onClick="call('departures')" src="https://via.placeholder.com/530x800.png?text=book+cover+departures" alt="cover for Departures" title="Departures" />
        <input type="image" class="books-d-img" onClick="call('rebel')" src="https://via.placeholder.com/530x800.png?text=book+cover+rebel" alt="cover for Rebel" title="Rebel" />
        <input type="image" class="books-d-img" onClick="call('commander')" src="https://via.placeholder.com/530x800.png?text=book+cover+commander" alt="cover for Commander" title="Commander" />
        <input type="image" class="books-d-img" onClick="call('traitor')" src="https://via.placeholder.com/530x800.png?text=book+cover+traitor" alt="cover for Traitor" title="TRAITOR" />
    </div>

    <div class="books-d-blurb">
        <div class="desc-d departures" id="departures">
            <h2>Departures</h2>
            <p>
                I'd like to think that I haven't changed those things, sir. and attack the Romulans. You did exactly what you had to do. You considered all your options, you tried every alternative and then you made the hard choice. I think you've let your personal feelings cloud your judgement. Our neural pathways have become accustomed to your sensory input patterns. Shields up! Rrrrred alert!
            </p>
        </div>

        <div class="desc-d" id="rebel">
            <h2>Rebel</h2>
            <p>
                I guess it's better to be lucky than good. Then maybe you should consider this: if anything happens to them, Starfleet is going to want a full investigation. Yes, absolutely, I do indeed concur, wholeheartedly! The unexpected is our normal routine. Damage report! Well, I'll say this for him - he's sure of himself. I can't. As much as I care about you, my first duty is to the ship. Congratulations - you just destroyed the Enterprise.
            </p>
        </div>

        <div class="desc-d" id="commander">
            <h2>Commander</h2>
            <p>
                I'm afraid I still don't understand, sir. Computer, lights up! Yesterday I did not know how to eat gagh. Mr. Worf, you sound like a man who's asking his friend if he can start dating his sister. We finished our first sensor sweep of the neutral zone. And blowing into maximum warp speed, you appeared for an instant to be in two places at once. Flair is what marks the difference between artistry and mere competence.
            </p>
        </div>

        <div class="desc-d" id="traitor">
            <h2>TRAITOR</h2>
            <p>
                Mr. Worf, you do remember how to fire phasers? When has justice ever been as simple as a rule book? The game's not big enough unless it scares you a little. Maybe we better talk out here; the observation lounge has turned into a swamp. But the probability of making a six is no greater than that of rolling a seven. Well, that's certainly good to know.
            </p>
        </div>
    </div> <!-- end books-d-blurb -->

</div> <!-- end books desktop -->


<div class="mobile">
<!-- https://www.w3schools.com/w3css/w3css_slideshow.asp -->

    <div class="books-m">
        <img class="mySlides" src="https://via.placeholder.com/530x800.png?text=book+cover+departures" alt="cover for Departures" title="Departures" />                        
        <img class="mySlides" src="https://via.placeholder.com/530x800.png?text=book+cover+rebel" alt="cover for Rebel" title="Rebel" />
        <img class="mySlides" src="https://via.placeholder.com/530x800.png?text=book+cover+commander" alt="cover for Commander" title="Commander" />
        <img class="mySlides" src="https://via.placeholder.com/530x800.png?text=book+cover+traitor" alt="cover for Traitor" title="TRAITOR" />
    </div>

    <div class="books-m-buttons">
        <button onclick="plusDivs(-1)">&#10094; Prev</button>
        <button onclick="plusDivs(1)">Next &#10095;</button>
    </div>
    
    <div class="books-m-blurb">

        <div class="desc-m">
            <h2>Departures</h2>
            <p>
                I'd like to think that I haven't changed those things, sir. and attack the Romulans. You did exactly what you had to do. You considered all your options, you tried every alternative and then you made the hard choice. I think you've let your personal feelings cloud your judgement. Our neural pathways have become accustomed to your sensory input patterns. Shields up! Rrrrred alert!
            </p>
        </div>

        <div class="desc-m">
            <h2>Rebel</h2>
            <p>
                I guess it's better to be lucky than good. Then maybe you should consider this: if anything happens to them, Starfleet is going to want a full investigation. Yes, absolutely, I do indeed concur, wholeheartedly! The unexpected is our normal routine. Damage report! Well, I'll say this for him - he's sure of himself. I can't. As much as I care about you, my first duty is to the ship. Congratulations - you just destroyed the Enterprise.
            </p>
        </div>

        <div class="desc-m">
            <h2>Commander</h2>
            <p>
                I'm afraid I still don't understand, sir. Computer, lights up! Yesterday I did not know how to eat gagh. Mr. Worf, you sound like a man who's asking his friend if he can start dating his sister. We finished our first sensor sweep of the neutral zone. And blowing into maximum warp speed, you appeared for an instant to be in two places at once. Flair is what marks the difference between artistry and mere competence.
            </p>
        </div>

        <div class="desc-m">
            <h2>TRAITOR</h2>
            <p>
                Mr. Worf, you do remember how to fire phasers? When has justice ever been as simple as a rule book? The game's not big enough unless it scares you a little. Maybe we better talk out here; the observation lounge has turned into a swamp. But the probability of making a six is no greater than that of rolling a seven. Well, that's certainly good to know.
            </p>
        </div>

    </div> <!-- end books-m-blurb -->

</div> <!-- end books mobile carousel -->


<script src="js/books-desktop.js"></script>
<script src="js/books.mobile.js"></script>

<?php include "includes/footer.php";?>