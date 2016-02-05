<?php
/*
 Template Name: Home page
*/
?>

<?php get_header(); ?>

<!-- introduction -->
<section class="l-dark l-pad-11">
    <div class="l-container">
        <div class="l-col-12">
            <div class="intro-text">
                <h1>Hello, I'm MonsieurPress, a super cool, lightweight & simple WordPress starter theme for developpers</h1>
            </div>
            <div class="text-center">
                <a href="https://github.com/dadipaq/monsieurpress/archive/master.zip" class="btn contact-btn-home">Download</a>
                <a href="https://github.com/dadipaq/monsieurpress" class="btn contact-btn-home">Github</a> 
           </div>
        </div>
    </div>
</section>


<!-- Description --> 
<section class="l-light-gray l-pad-3">
    <div class="l-container">
        <div class="l-col-12">
            <p class="text-large text-center">
                I've been made by a developper not 100% satisfied with existing starter theme, I'm a little less barebones and I have a minimal design, like them, I'm not meant for being used as a parent theme, just adopt me and hack me !
                I'm very minimal & easy to understand, I use modern workflow like gulp, sass, and love.
                The website you are in is actualy me, so if you feel good here, I think you should give me a try !
            </p>
        </div>
    </div>
</section>


<!-- Regional scope -->
<section class="l-white l-pad-3 marketing-theme">
    <div class="l-container">
        <div class="l-col-12">
            <h2 class="section-title">What makes me different ?</h2>
        </div>
    </div>
    
    <div class="l-container text-center">
        <div class="l-row">
            <div class="l-col-4">
                <h3>Made for developer</h3>
                <p>
                    I've been made by a developer who love organisation, simplicity and speed , If you are like him, you might love me. 
                </p>
            </div>
            <div class="l-col-4">
                <h3>Not totally barebone</h3>
                <p>
                    Barebone themes are great, but starting with a minimal, responsive & classical design can make things easier sometimes.
                </p>
            </div>
            <div class="l-col-4">
                <h3>Super fast</h3>
                <p>
                    Yeah I'm fast ! Open your developer tools and check my weight, under 30kb for this page, yes it's WordPress ! I love diet.
                </p>
            </div>
        </div>
        
        <div class="l-row">
            <div class="l-col-4">
                <h3>Easy to understand</h3>
                <p>
                    You are developer and you didn't check my github yet ? Please go there ! just the right amount of comments to makes you feel good.
                </p>
            </div>
            <div class="l-col-4">
                <h3>No bullshit</h3>
                <p>
                    If you check my inc/helpers.php file, you'll see how much I love removing what I don't need. You need it back ? just remove the removed things !
                </p>
            </div>
            <div class="l-col-4 l-col-last">
                <h3>Gulp ready</h3>
                <p>
                    I have some cool function to makes your workflow super nice & fast. Sass compiling, autoreload and minification for css & js .
                </p>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
