<template>

    <!--<div id="mySlides" class="mySlides w3-display-container w3-center">-->
    <!--<div v-for="(image,title, description) in slider">-->
    <!--<img src="{{ image }}" style="width:100%">-->
    <!--<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">-->
    <!--<h3>{{ title }}</h3>-->
    <!--<p><b>{{ description }}</b></p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-display-container w3-center">
        <img src="/images/la.jpg" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            <h3>Los Angeles</h3>
            <p><b>We had the best time playing at Venice Beach!</b></p>
        </div>
    </div>

    <!--<div class="mySlides w3-display-container w3-center">-->
    <!--<img src="/images/ny.jpg" style="width:100%">-->
    <!--<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">-->
    <!--<h3>New York</h3>-->
    <!--<p><b>The atmosphere in New York is lorem ipsum.</b></p>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="mySlides w3-display-container w3-center">-->
    <!--<img src="/images/chicago.jpg" style="width:100%">-->
    <!--<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">-->
    <!--<h3>Chicago</h3>-->
    <!--<p><b>Thank you, Chicago - A night we won't forget.</b></p>-->
    <!--</div>-->
    <!--</div>-->
</template>

<script type="text/javascript">
    export default {
        name: "Home"
    }

    //TODO::Make Slider Loop
    // new Vue({
    //     el: '#mySlides',
    //     data: {
    //         slider: {
    //             title: ['Los Angeles', 'New York', 'Chicago'],
    //             description: ['We had the best time playing at Venice Beach!', 'The atmosphere in New York is lorem ipsum.', 'Thank you, Chicago - A night we won\'t forget.'],
    //             image: ['/images/la.jpg', '/images/ny.jpg', '/images/chicago.jpg']
    //         }
    //     }
    // });
</script>

<style scoped>

</style>
