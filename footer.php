<footer class="footer-wrapper">
    <?php if(is_active_sidebar('footer-sidebar') ): ?>

		<?php dynamic_sidebar('footer-sidebar'); ?>

	<?php endif; ?>

</footer>
<?php
    $disclaimer_enabled = get_theme_mod( 'truelove_custom_options');
    if(isset($disclaimer_enabled["disclaimer_enabled"])): ?>
    <?php if($disclaimer_enabled["disclaimer_enabled"] == 1): ?>
            <div class="footer-disclaimer-wrapper">
                <p>Truelove Theme developed by <a href="https://wolkemann.net" target="_blank">Federico Sardo</a></p>
            </div>
        <?php endif; ?>
    <?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>