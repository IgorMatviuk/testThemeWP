<footer></footer>
  </body>
  <!--
  <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"
  ></script>
  <script src="plugins/fm.revealator.jquery.min.js"></script>
  <script src="index.js"></script>
-->
<script>
    const sliderEl = document.querySelector("#range")
const sliderValue = document.querySelector(".value")

sliderEl.addEventListener("input", (event) => {
  const tempSliderValue = event.target.value; 
  
  sliderValue.textContent = tempSliderValue;
  
  const progress = (tempSliderValue / sliderEl.max) * 100;
 
  sliderEl.style.background = `linear-gradient(to right, #BE69D5 ${progress}%, #BAF1FF ${progress}%)`;
})

// menu



$(document).ready(function() {
  $('.menu').click(function() {
      $('.menu-list').toggle();
      $('.menu-list-close').toggle();
  });
});




$(document).ready(function() {
  $('.header-menu-mob__btn-menu').click(function() {
    $('.menu-burger').toggle();
    $(".header-menu-mob__btn-menu").toggleClass('menu-burger-close');
  });
});

</script>
</html>
