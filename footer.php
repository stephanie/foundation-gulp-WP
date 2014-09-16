
    </div> <? // page-container close ?>

    <script type="text/javascript">
      var IS_MOBILE = "<?= is_mobile(); ?>";
      var IS_TABLET = "<?= is_tablet(); ?>";
      var SITE_URL = ('https:' == document.location.protocol ? 'https://' : 'http://') + document.location.host;
    </script>

    <?php wp_footer(); ?>
    <? include( THEMEPATH.'includes/partials/_tracking.php'); ?>
  </body>
</html>
