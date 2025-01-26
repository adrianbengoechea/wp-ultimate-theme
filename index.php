
<?php get_header(); ?>

<main role="main">
    <div class="container">
        <div class="container--wrap">

            <h1>{{title}}</h1>

            <button class="btn btn-primary" @click="count++">Count ({{count}})</button>
            
            <test></test>

            <counter></counter>

            <load-posts></load-posts>



            <?php echo site_url(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>