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
<!-- tags -->
<script src="<?= BASEURL ?>/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<!-- Argon JS -->
<script src="<?= BASEURL?>/assets/js/argon.js?v=1.1.0"></script>

<!-- sweeralert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.tiny.cloud/1/5kcl3iu5k6wdcylov090mv7tajkluyz153f8wg5497p1zz4y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
tinymce.init({
    selector:'textarea#des',
});
</script>

<!-- script ajax -->
<script>
$(document).on('click', '.hps-btn', function() {
    var id = $(this).attr('id');
    let ID = $(this).attr('data-id-product');
    $.ajax({
        type: 'POST',
        url: "http://localhost/dewacoffee/dashboard/delete_img",
        data: {
            id: id,
            ID: ID,
        },
        success: function() {
            window.window.location.href = 'http://localhost/dewacoffee/dashboard/edit_product/' +
                ID;
        },
        error: function(response) {
            console.log(response.responseText);
        }
    });
});
$(document).on('click', '.active-btn', function() {
    var id = $(this).attr('id');
    let ID = $(this).attr('data-id-product');
    $.ajax({
        type: 'POST',
        url: "http://localhost/dewacoffee/dashboard/active_img",
        data: {
            id: id,
            ID: ID,
        },
        success: function() {
            window.window.location.href = 'http://localhost/dewacoffee/dashboard/edit_product/' +
                ID;
        },
        error: function(response) {
            console.log(response.responseText);
        }
    });
});
$(document).on('click', '.hps-data', function() {
    let id = $(this).attr('id');
    let url = $(this).attr('data-url-page');
    let urlReturn = $(this).attr('data-page-return');
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            id: id,
        },
        success: function() {
            Swal.fire({
                title: 'Dewa Coffee',
                text: "Data Berhasil Di Hapus",
                icon: 'success',
                type: 'success',
                showConfirmButton: false,
            })
            setInterval(function(){
                window.location.href = urlReturn;
            },500);
        },
        error: function(response) {
            console.log(response.responseText);
        }
    });
});

</script>
</body>

</html>