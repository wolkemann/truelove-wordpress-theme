<footer class="footer-wrapper">
    <?php if(is_active_sidebar('footer-widgets') ): ?>

		<?php dynamic_sidebar('footer-widgets'); ?>

	<?php endif; ?>

</footer>
<?php truelove_get_disclaimer() ?>

<?php wp_footer(); ?>
</body>
</html>