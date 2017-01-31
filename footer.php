<footer>
    <div class="container">
        <?php $top_bar = get_option('top_bar_option'); ?>
        <?php echo (isset($top_bar['footer'])) ? $top_bar['footer'] : ''; ?>
    </div>
</footer>
