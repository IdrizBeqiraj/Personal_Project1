<?php get_header(); ?>

<div class="search-results">
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>
    
    <?php if (have_posts()) : ?>
        <div class="search-results-list">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="search-pagination">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p>No results found for your search.</p>
        <?php get_search_form(); ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>