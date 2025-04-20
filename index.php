<?php
if (!function_exists('get_header')) {
  die('WordPress functions are not available. Make sure this file is loaded as part of a WordPress theme.');
}

get_header();
?>

<main class="main-content">
  <div class="container">
    <h1>Main Content</h1>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
```
And here's an updated version of the `header.php` file that includes the `<!DOCTYPE html>` declaration and the `<head>` section:
```php
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Test Page</title>
  <style>
    /* Your styles here */
  </style>
</head>
<body>
  <!-- Your header content here -->
</body>
</html>