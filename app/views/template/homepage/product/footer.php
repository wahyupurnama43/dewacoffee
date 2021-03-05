<footer>
    <div class="about">
        <div class="logo" data-aos="fade-up" data-aos-delay="300">
            <img src="<?= BASEURL?>/assets/img/logo.png" alt="" />
            <h1>Dewa Coffee</h1>
        </div>
        <div class="company" data-aos="fade-up" data-aos-delay="400">
            <h1 class="j-footer">Home</h1>
            <ul>
                <li><a href="">Product</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Review</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Blog</a></li>
            </ul>
        </div>
        <div class="company" data-aos="fade-up" data-aos-delay="500">
            <h1 class="j-footer">Company</h1>
            <ul>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="company" data-aos="fade-up" data-aos-delay="600">
            <h1 class="j-footer">Be Our Friend</h1>
            <ul>
                <li><a href="">Denpasar, Bali</a></li>
                <li><a href="">support@dewacoffee,co,id</a></li>
                <li><a href="">021 - 1111 - 2222</a></li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyright">
    <p>All Rights Reserved Dewa coffee by wahyu purnama 2021</p>
</div>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- boostraps -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- aos js -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- js  -->
<script src="<?= BASEURL?>/homepage/js/script.js"></script>
<script>
// memilih semua elemen dengan kelas listing-gallery-img
const images = document.querySelectorAll(".listing-gallery-img");
// untuk wadah gambar aktif (utama)
const activeImage = document.getElementById("active-img");
// memilih gambar pertama di dalam gambar (kumpulan elemen dengan kelas .listing-gallery-img)
const firstImage = images[0];
// menambahkan kelas 'terpilih' ke gambar pertama dari gambar sehingga pudar (lihat CSS)
// firstImage.classList.add("selected");

// Kami menggunakan 'for loop' JavaScript untuk mengulangi array 'gambar'
images.forEach((image) => {
    // untuk setiap gambar, dengarkan 'klik' di atasnya:
    image.addEventListener("click", function() {
        // hapus kelas 'terpilih' dari setiap gambar dalam array 'gambar'
        images.forEach((image) => image.classList.remove("selected"));
        // tambahkan kelas 'dipilih' ke gambar yang diklik
        image.classList.add("selected");
        // periksa nilai atribut sumber untuk gambar yang diklik
        const thumbSrc = this.src;
        // ubah nilai atribut 'src' gambar aktif agar sesuai dengan gambar yang diklik
        activeImage.src = thumbSrc;
    });
});
</script>
</body>

</html>