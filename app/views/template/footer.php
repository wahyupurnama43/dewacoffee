</div>
<!-- Page content -->
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= BASEURL?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= BASEURL?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- datatable -->
<script src="<?= BASEURL?>/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<!-- Argon JS -->
<script src="<?= BASEURL?>/assets/js/argon.js?v=1.1.0"></script>

<!-- sweeralert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire({
        title: 'Dewa Coffee',
        text: flashData.pesan,
        icon: flashData.tipe,
        type: flashData.tipe
    })
};
</script>
<!-- <script>
    // Dropzones.init()
    Dropzone.options.frmTarget = {
        autoProcessQueue: false,
        url: 'http://localhost/dewacoffee/dashboard/product1',
        init: function () {
            var myDropzone = this;

            // Update selector to match your button
            $("#tambah").click(function (e) {
                e.preventDefault();
                myDropzone.processQueue();
            });

            this.on('sending', function(file, xhr, formData) {
                // Append all form inputs to the formData Dropzone will POST
                var data = $('#frmTarget').serializeArray();
                $.each(data, function(key, el) {
                    formData.append(el.name, el.value);
                });
            });
        }
    }
</script> -->
</body>

</html>