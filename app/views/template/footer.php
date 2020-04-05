


</div>
<!-- Argon Scripts -->
<script src="<?= BASEURL ?>/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= BASEURL ?>/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?= BASEURL ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL ?>/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= BASEURL ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= BASEURL ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<script src="<?= BASEURL ?>/vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?= BASEURL ?>/vendor/chart.js/dist/Chart.extension.js"></script>
<script src="<?= BASEURL ?>/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?= BASEURL ?>/js/argon.min9f1e.js?v=1.1.0"></script>

<script src="<?= BASEURL ?>/js/script.js"></script>

<script>

  $('.mydatatable').DataTable({
    order: [
    [0, 'asc']
    ],
    pagingType: 'full_numbers'
  });
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }

    
  </script>
</body>

</html>