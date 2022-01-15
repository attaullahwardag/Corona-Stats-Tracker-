<template>
    <div class="Blog"> 
        <div class="blog-image-box">
            <img :src="'flags/AF.png'" class="blog-image" />
        </div>
        <div class="blog-content">
            <h3 class="blog-title">All You Should Know About Coronavirus or COVID-19</h3>
            <p class="blog-content">
            In early 2020, a new virus began generating headlines all over the world because of the unprecedented speed of its transmission.
            From its origins in a food market in Wuhan, China, in December 2019, to countries as far-flung as the United States and the Philippines, the virus (officially named SARS-CoV-2) has affected hundreds of thousands, with a rising global death toll now over 182,000.
            </p>
             <a href="#" class="btn btn-success read" > Read more ....</a>
        </div>
    </div>
</template>

<script>
export default {
    name: 'NewsComponent',
    mounted() {
            console.log('Component mounted.')
    }
}
</script>

<style>

</style>