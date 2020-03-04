<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
           href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                class="fa fa-bars"></i></a>
        {{--Declare Links and Name Of Route--}}
        {{--exact is for pass active link by vue--}}
        <router-link :to="{ name: 'home'}" exact>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">
                Home
            </a>
        </router-link>

        <router-link :to="{name: 'about'}">
            <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">
                About
            </a>
        </router-link>

        <router-link :to="{name: 'tour'}">
            <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">
                Tour
            </a>
        </router-link>

        <router-link :to="{name: 'contact'}">
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">
                Contact
            </a>
        </router-link>

        <router-link :to="{name: 'question'}">
            <a href="#question" class="w3-bar-item w3-button w3-padding-large w3-hide-small">
                Ask Question
            </a>
        </router-link>

        <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i
                class="fa fa-search"></i></a>
    </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>


