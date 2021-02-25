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
            // selects all elements with the listing-gallery-img class
            const images = document.querySelectorAll(".listing-gallery-img");
            // the active (main) image container
            const activeImage = document.getElementById("active-img");
            // selects the first image inside the images array (the collection of elements with the .listing-gallery-img class)
            const firstImage = images[0];
            // adds the 'selected' class to the first image of the array so it's not faded (see CSS)
            firstImage.classList.add("selected");

            // We use a JavaScript 'forloop' to iterate over the 'images' array
            images.forEach((image) => {
                // for each image, listen for a 'click' on it:
                image.addEventListener("click", function () {
                    // remove the 'selected' class from each image in the 'images' array
                    images.forEach((image) => image.classList.remove("selected"));
                    // add the 'selected' class to the image which was clicked
                    image.classList.add("selected");
                    // check the source attribute value for the image which was clicked
                    const thumbSrc = this.src;
                    // change the value of the active image 'src' attribute to match that of the image clicked
                    activeImage.src = thumbSrc;
                });
            });
        </script>
    </body>
</html>
