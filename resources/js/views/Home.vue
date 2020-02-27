<template>
    <div id="slider">
        <div v-for="slider in sliders" class="mySlides w3-display-container w3-center">
            <img v-bind:src="slider.image" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3>{{ slider.title }}</h3>
                <p><b>{{ slider.description }}</b></p>
                <!--<p v-text="slider.description"><b>{{ slider.description }}</b></p>-->
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
    import Slider from '../models/Slider';

    export default {
        data() {
            return {
                sliders: []
            }
        },
        created() {
            Slider.all(sliders => this.sliders = sliders);
        },
        mounted() {
            carousel();

        }
    }

    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;

    function carousel() {
        let i, x = document.getElementsByClassName("mySlides");
        if (!x.length) {
            setTimeout(carousel, 8000);
            return false;
        }

        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;

        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 8000);
    }

</script>

<style scoped>

</style>
