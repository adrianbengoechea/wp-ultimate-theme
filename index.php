
<?php get_header(); ?>

<main role="main">
    <div class="container">
        <div class="container--wrap">
            <h1>{{title}}</h1>


                    <div class="py-4">
                        <button class="js--show-posts btn btn-primary me-2" @click="loadPosts()">Show Posts</button>
                        <button class="btn btn-primary" @click="count++">Count ({{count}})</button>
                    </div>
                    <div class="py-4 js--show-posts-response">
                        <ul>
                            <li v-for="post in trackedPosts">
                                <a :href="post.link" target="_blank"><strong>{{ post.title.rendered }}</strong></a>    
                            </li>
                        </ul>
                    <div>
                

            <?php echo site_url(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>