
<?php get_header(); ?>

<main role="main">
    <div class="container">
        <div class="container--wrap">

            <h1 class="text-3xl font-bold underline">{{title}}</h1>
            
            <test></test>

            <!-- <counter></counter> -->

            <load-posts></load-posts>



            <?php echo site_url(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>