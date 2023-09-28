// init aos
AOS.init({ once : true });

// scrolling header
$(window).scroll(function(){
    if( $(window).scrollTop() > 0 ){
        $('header').addClass('fixed');
    } else {
        $('header').removeClass('fixed');
    }
});

$('header .dropdown-toggle').on('click', function(){
    $('header .dropdown-menu').toggle();
});

// Register Popup Terms & conditions
$('.btn-popup-term-and-condition').on('click', function(){
    $('.popup-term-and-condition').toggleClass('action');
});

$('.btn-x-popup-term-and-condition, .abs-popup-term-and-condition').on('click', function(){
    $('.popup-term-and-condition').removeClass('action');
});

// click button mobile
$('header .navbar-toggler').on('click', function(){
    $('header .navbar-swipe').toggleClass('action');
    $('header .navbar-swipe').css("transition", ".5s")
    $('header .mobi-1').toggleClass('action');
    $('header .mobi-2').toggleClass('action');
    $('header .mobi-3').toggleClass('action');
});

// remove class
window.addEventListener("resize", function(){
    if (window.innerWidth < 992){
        $('header .navbar-swipe').css("transition", "0s")
    }
});

// click button book-now
$('.btn-book-now').on('click', function(){
    $('.book-now').addClass('action');
    $('.in-book-now').addClass('action');
});

// click button closing book-now
$('.btn-closing').on('click', function(){
    $('.book-now').removeClass('action');
    $('.in-book-now').removeClass('action');
});

// progress & form step
const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
        updateProgressbar();
        console.log(1)
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
        console.log(1)
    });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

$('.btn-next, .btn-prev').on('click', function(){
    $(window).scrollTop(0);
    console.log("HALO")
})

// preview image upload
imgKTP.onchange = evt => {
    const [file] = imgKTP.files
    if (file) {
        fileKTP.src = URL.createObjectURL(file)
    }
}

imgPhoto.onchange = evt => {
    const [file] = imgPhoto.files
    if (file) {
        filePhoto.src = URL.createObjectURL(file)
    }
}

$(document).ready(function() {
    // Fungsi untuk mengganti spasi dengan tanda minus secara otomatis
    function replaceSpacesWithDash() {
      var username = $("#username").val();
      var usernameWithDash = username.replace(/\s+/g, "-");
      $("#username").val(usernameWithDash);
    }

    // Memanggil fungsi replaceSpacesWithDash saat ada perubahan pada input
    $("#username").on("input", function() {
      replaceSpacesWithDash(); // Panggil ini saat input berubah
    });
  });
