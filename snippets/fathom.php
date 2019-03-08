<?php if (!option('kx550.fathom.url') || (isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] === '1')) : ?>

<?php else : ?>

  <script type="text/javascript">
    (function (f, a, t, h, o, m) {
    a[h] = a[h] || function () {
      (a[h].q = a[h].q || []).push(arguments)
    };
    o = f.createElement('script'),
    m = f.getElementsByTagName('script')[0];
    o.async = 1;
    o.src = t;
    o.id = 'fathom-script';
    m.parentNode.insertBefore(o, m)
  })(document, window, '//<?php echo rtrim(option('kx550.fathom.url'), '/') . '/' ?>tracker.js', 'fathom');
    fathom('set', 'siteId', 'JROFB');
    fathom('trackPageview');
  </script>

<?php endif; ?>
