<?php
/*
 Template Name: Home page
*/
?>

<?php get_header(); ?>

<!-- introduction -->
<section class="l-main-bg-color l-pad-11">
    <div class="container">
        <div class="col-12">
            <div class="intro-text">
                <h1>Hello, I'm MonsieurPress, a super cool, lightweight & simple WordPress starter theme for developpers</h1>
            </div>
            <div class="text-center">
                <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>" class="btn contact-btn-home">Download</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>" class="btn contact-btn-home">Github</a> 
           </div>
        </div>
    </div>
</section>


<!-- Description --> 
<section class="l-light-gray l-pad-3">
    <div class="container">
        <p class="text-large text-center">
            I've been made by a developper not 100% satisfied with underscore & bones starter theme, like them, I'm not meant for being used as a parent theme, just adopt me and hack me !
            I'm very minimal & easy to understand, I use modern workflow like gulp, compass, susy and love.
            The website you are in is actualy me, so if you feel good here, I think you should give me a try !
        </p>
    </div>
</section>


<!-- Regional scope -->
<section class="l-white l-pad-3">
    <div class="container">
        <div class="col-12">
            <h2 class="section-title"><span>1</span>What makes me different ?</h2>
        </div>
    </div>
    
    <div class="container">
        TODO
    </div>
</section>


<?php get_footer(); ?>
