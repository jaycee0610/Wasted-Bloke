<?php get_header(); ?>
<div class="row" style="">
    <div class="col-8 p-2">
        <p class="headline2 float-start">THE NEGLECTED NEWS EDITION 2024</p>
    </div>
    <div class="col-4 ">
        <div class="float-end p-2">
            <span class="fa-brands fa-telegram"></span>
            <span class="fa-brands fa-facebook"></span>
            <span class="fa-brands fa-x-twitter"></span>
        </div>
    </div>
</div>
<div class="mt-3 text-center">
    <div class="h13"
        style="font-family: 'Playfair Display', serif; font-weight: 800; font-size: 60px; text-align: center; text-transform: uppercase; display: inline-block; line-height: 72px; margin-bottom: 20px;">
        THE NEGLECTED NEWS
    </div>


    <p class="border-3 border-dark p-2 border-top border-bottom mx-2">PRESENTED BY WASTED BLOKE</p>
</div>


<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        the_content();
    endwhile;
endif;
?>
<!-- Add the rest of your content here -->
<?php get_footer(); ?>