<div class="content">
    <!-- <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <div class="imgs"
                style="background-image:url('https://rahman115.github.io/sman1kulbar.github.io/img/slide/9.jpg');">
            </div>
            <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <div class="imgs"
                style="background-image:url('https://rahman115.github.io/sman1kulbar.github.io/img/slide/11.jpg');">
            </div>
            <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <div class="imgs"
                style="background-image:url('https://rahman115.github.io/sman1kulbar.github.io/img/slide/15.jpg');">
            </div>

            <div class="text">Caption Three</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <div style="text-align:center" class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> -->

    <div id="slider"></div>
    <div class="pages">
        <div class="col-8">
            <div class="cards">
                <h3>im update Sticky Navigation Example</h3>
                <div class="desk">
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset
                        concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis
                        evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no
                        molestiae voluptatibus.</p>
                </div>
                <div class="dates">05/06/2023 10:35 - Oleh Administrator - Dilihat 5135 kali</div>
            </div>
            <div class="cards">
                <h3>im update Sticky Navigation Example</h3>
                <div class="desk">
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset
                        concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis
                        evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no
                        molestiae voluptatibus.</p>
                </div>
                <div class="dates">05/06/2023 10:35 - Oleh Administrator - Dilihat 5135 kali</div>
            </div>
        </div>
        <div class="col-4">
            <h3>im update Sticky Navigation Example</h3>
            <p>The navbar will stick to the top when you reach its scroll position.</p>
            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset
                concludaturque
                et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert
                laboramus
                repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>



        </div>

    </div>
</div>
<div class="content" style="background-color:#000; color: #fff;">
    <h3>SMA NEGERI 1 KULISUSU BARAT</h3>
    <p>Untuk meraih sukses di masa depan dan tepat untuk berkompetisi untuk mendapatkan juara di berbagai ajang
        perlombaan nasional maupun internasional.</p>
</div>


<script>
    // var count = 1;
    // let slideIndex = 1;
    // showSlides(slideIndex);
    // window.onload = function () {
    //     setInterval(function () {

    //         currentSlide(count);

    //         if (count > 3) {
    //             count = 1;
    //         }
    //         count++;
    //     }, 6000);
    // }


    // function plusSlides(n) {
    //     showSlides(slideIndex += n);

    // }

    // function currentSlide(n) {
    //     showSlides(slideIndex = n);
    //     count = n;

    // }

    // function showSlides(n) {

    //     let i;
    //     let slides = document.getElementsByClassName("mySlides");
    //     let dots = document.getElementsByClassName("dot");


    //     if (n > slides.length) {
    //         slideIndex = 1
    //     }
    //     if (n < 1) {
    //         slideIndex = slides.length
    //     }
    //     for (i = 0; i < slides.length; i++) {
    //         slides[i].style.display = "none";
    //         // console.log(slide[i].style.display);
    //     }
    //     for (i = 0; i < dots.length; i++) {
    //         dots[i].className = dots[i].className.replace(" active", "");

    //     }
    //     slides[slideIndex - 1].style.display = "block";
    //     dots[slideIndex - 1].className += " active";


    // }

    const slider = document.querySelector('#slider');
    const images = ["https://rahman115.github.io/sman1kulbar.github.io/img/slide/9.jpg", "https://rahman115.github.io/sman1kulbar.github.io/img/slide/11.jpg", "https://rahman115.github.io/sman1kulbar.github.io/img/slide/15.jpg", "https://picsum.photos/id/1015/300/300"];
    let div;
    let count = 0;
    images.forEach(image => {
        div = document.createElement('div');
        div.style.animationDelay = (count * 2.5) + 's';
        count++;
        div.style.setProperty('--img', 'url(' + image + ')');
        slider.appendChild(div);
        // console.log(count);
    });
    slider.style.setProperty('--n', count);
</script>