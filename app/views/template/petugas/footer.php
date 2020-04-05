<?php  ?>
<!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Perpustakaan SMKN 1 Denpasar 2020 By Kelompok 3</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= BASEURL ?>/home/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASEURL ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASEURL ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASEURL ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= BASEURL ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= BASEURL ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= BASEURL ?>/js/demo/chart-pie-demo.js"></script>
    <script src="<?= BASEURL ?>/js/sweetalert2.all.min.js"></script>
  
    <!-- plugin table -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $('.mydatatable').DataTable({
            order: [
                [0, 'asc']
            ],
            pagingType: 'full_numbers'
        });

         const  flashData = $('.flash-data').data('flashdata');
        if (flashData) {
          Swal.fire({
            title: 'Perpustakaan Skensa',
            text: flashData.pesan + flashData.aksi,
            icon: flashData.tipe,
            type: flashData.tipe
          })
        } 
        
          $('.tombol-hapus').on('click', function(e){

          e.preventDefault();
          const href = $(this).attr('href');

          const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Yakin di Hapus?',
          text: "Data Akan Hilang Permanen",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Hapus',
          cancelButtonText: 'Batal',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
              document.location.href = href;
          } else if (
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'BATAL',
              'Data Anda Aman ',
              'error'
            )
          }
        })


        });
    </script>

</body>

</html>