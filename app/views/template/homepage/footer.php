<footer>
    <div class="about">
        <div class="logo" data-aos="fade-up" data-aos-delay="500">
            <img src="<?= BASEURL ?>/assets/img/logo.png" alt="">
            <h1>Dewa Coffee</h1>
        </div>
        <div class="company" data-aos="fade-up" data-aos-delay="600">
            <a href="<?= BASE_URL ?>" class="text-decoration-none">
                <h1 class="j-footer">Home</h1>
            </a>
            <ul>
                <li><a href="<?= BASE_URL ?>/products">Product</a></li>
                <li><a href="<?= BASE_URL ?>/contact">Contact Us</a></li>
                <li><a href="<?= BASE_URL ?>#testim">Review</a></li>
                <li><a href="<?= BASE_URL ?>/about">About Us</a></li>
                <li><a href="<?= BASE_URL ?>/blog">Blog</a></li>
            </ul>
        </div>
        <div class="company" data-aos="fade-up" data-aos-delay="700">
            <h1 class="j-footer">Company</h1>
            <ul>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="company" data-aos="fade-up" data-aos-delay="800">
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
<!-- sweeralert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
'use strict'
var testim = document.getElementById("testim"),
    testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
    testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
    testimLeftArrow = document.getElementById("left-arrow"),
    testimRightArrow = document.getElementById("right-arrow"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
    touchStartPos,
    touchEndPos,
    touchPosDiff,
    ignoreTouch = 30;


window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove("active");
            testimContent[k].classList.remove("inactive");
            testimDots[k].classList.remove("active");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length - 1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add("inactive");
        }
        testimContent[slide].classList.add("active");
        testimDots[slide].classList.add("active");

        currentActive = currentSlide;

        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener("click", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener("click", function() {
        playSlide(currentSlide += 1);
    })

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener("click", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener("keyup", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })

    testim.addEventListener("touchstart", function(e) {
        touchStartPos = e.changedTouches[0].clientX;
    })

    testim.addEventListener("touchend", function(e) {
        touchEndPos = e.changedTouches[0].clientX;

        touchPosDiff = touchStartPos - touchEndPos;

        console.log(touchPosDiff);
        console.log(touchStartPos);
        console.log(touchEndPos);


        if (touchPosDiff > 0 + ignoreTouch) {
            testimLeftArrow.click();
        } else if (touchPosDiff < 0 - ignoreTouch) {
            testimRightArrow.click();
        } else {
            return;
        }

    })
}
</script>
<script>
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
<!-- js  -->
<script src="<?= BASEURL ?>/homepage/js/script.js"></script>

</body>

</html>