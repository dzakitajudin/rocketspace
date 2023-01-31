// First Load browser
$(document).ready(function(){
  $('html').animate({scrollTop:0}, 1);
  $('body').animate({scrollTop:0}, 1);
  // $("#home").addClass("active");
});

// Navbar
// $('.menu').click(function() {
// if (this.id === 'home') {
//   $(".menu:not(#home)").removeClass("active");
//   $("#home").addClass("active");
// }
// else if (this.id === 'menu') {
//   $(".menu:not(#menu)").removeClass("active");
//   $("#menu").addClass("active");
// }
// else if (this.id === 'about') {
//   $(".menu:not(#about)").removeClass("active");
//   $("#about").addClass("active");
// }
// else if (this.id === 'contact') {
//   $(".menu:not(#contact)").removeClass("active");
//   $("#contact").addClass("active");
// }
// });

// Food Animation
$(window).scroll(function() {
  $('#hr').each(function(){
  var imagePos = $(this).offset().top;
  
  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("expandUp");
    }
  });

  $('#finance').each(function(){
  var imagePos = $(this).offset().top;
  
  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("expandUp");
    }
  });

  $('#it').each(function(){
  var imagePos = $(this).offset().top;
  
  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("expandUp");
    }
  });

  $('#mb').each(function(){
  var imagePos = $(this).offset().top;
  
  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("expandUp");
    }
  });

  $('#legal').each(function(){
    var imagePos = $(this).offset().top;
    
    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        $(this).addClass("expandUp");
      }
  });

  $('#qa').each(function(){
    var imagePos = $(this).offset().top;
    
    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        $(this).addClass("expandUp");
      }
  });

  $('#marketing').each(function(){
    var imagePos = $(this).offset().top;
    
    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        $(this).addClass("expandUp");
      }
  });

  $('#creative').each(function(){
    var imagePos = $(this).offset().top;
    
    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        $(this).addClass("expandUp");
      }
  });

  $('#bd').each(function(){
    var imagePos = $(this).offset().top;
    
    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        $(this).addClass("expandUp");
      }
  });

  $('#audit').each(function(){
    var imagePos = $(this).offset().top;
    
    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        $(this).addClass("expandUp");
      }
  });

  // about page
  $('#vision').each(function(){
  var imagePos = $(this).offset().top;
  
  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("slideLeft");
    }
  });

  $('#mission').each(function(){
  var imagePos = $(this).offset().top;
  
  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("slideRight");
    }
  });

  $('.author').each(function(){
  var imagePos = $(this).offset().top;
  
  var topOfWindow = $(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      $(this).addClass("slideExpandUp");
    }
  });

  $('.card-structure').each(function(){
    var imagePos = $(this).offset().top;
    
    var topOfWindow = $(window).scrollTop();
      if (imagePos < topOfWindow+400) {
        $(this).addClass("expandUp");
      }
  });
});

// navigation smooth
$('a').click(function(){
  $('html, body').animate({
      scrollTop: $( $(this).attr('href') ).offset().top
  }, 500);  
  return false;
});

// scroll page with changes active navbar
$(document).ready(function () {
$(document).on("scroll", onScroll);

//smoothscroll
$('a[href^="#"]').on('click', function (e) {
  e.preventDefault();
  $(document).off("scroll");

  $('a').each(function () {
    $(this).removeClass('active');
  })
    $(this).addClass('active');

  var target = this.hash,
  menu = target;
  $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top+2
  }, 500, 'swing', function () {
    window.location.hash = target;
    $(document).on("scroll", onScroll);
  });
});
});

function onScroll(event){
var scrollPos = $(document).scrollTop();
$('.topnav a').each(function () {
  var currLink = $(this);
  var refElement = $(currLink.attr("href"));
  if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
    $('#topnav a').removeClass("active");
    currLink.addClass("active");
  }
  else{
    currLink.removeClass("active");
  }
});
}


// ============================ MODAL ==================================================== //
var modalhr = document.getElementById("modalHr");
var btnHr = document.getElementById("btnHr");
var spanHr = document.getElementsByClassName("closeHr")[0];

// When the user clicks on the button, open the modal
btnHr.onclick = function() {
modalhr.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanHr.onclick = function() {
modalhr.style.display = "none";
}


var modalfinance = document.getElementById("modalFinance");
var btnFinance = document.getElementById("btnFinance");
var spanFinance = document.getElementsByClassName("closeFinance")[0];

// When the user clicks on the button, open the modal
btnFinance.onclick = function() {
modalfinance.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanFinance.onclick = function() {
modalfinance.style.display = "none";
}

var modalit = document.getElementById("modalIt");
var btnIt = document.getElementById("btnIt");
var spanIt = document.getElementsByClassName("closeIt")[0];

// When the user clicks on the button, open the modal
btnIt.onclick = function() {
modalit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanIt.onclick = function() {
modalit.style.display = "none";
}

var modalmb = document.getElementById("modalMb");
var btnMb = document.getElementById("btnMb");
var spanMb = document.getElementsByClassName("closeMb")[0];

// When the user clicks on the button, open the modal
btnMb.onclick = function() {
modalmb.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanMb.onclick = function() {
modalmb.style.display = "none";
}

var modallegal = document.getElementById("modalLegal");
var btnLegal = document.getElementById("btnLegal");
var spanLegal = document.getElementsByClassName("closeLegal")[0];

// When the user clicks on the button, open the modal
btnLegal.onclick = function() {
modallegal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanLegal.onclick = function() {
modallegal.style.display = "none";
}

var modalqa = document.getElementById("modalQa");
var btnQa = document.getElementById("btnQa");
var spanQa = document.getElementsByClassName("closeQa")[0];

// When the user clicks on the button, open the modal
btnQa.onclick = function() {
modalqa.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanQa.onclick = function() {
modalqa.style.display = "none";
}

var modalmarketing = document.getElementById("modalMarketing");
var btnMarketing = document.getElementById("btnMarketing");
var spanMarketing = document.getElementsByClassName("closeMarketing")[0];

// When the user clicks on the button, open the modal
btnMarketing.onclick = function() {
modalmarketing.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanMarketing.onclick = function() {
modalmarketing.style.display = "none";
}

var modalcreative = document.getElementById("modalCreative");
var btnCreative = document.getElementById("btnCreative");
var spanCreative = document.getElementsByClassName("closeCreative")[0];

// When the user clicks on the button, open the modal
btnCreative.onclick = function() {
modalcreative.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanCreative.onclick = function() {
modalcreative.style.display = "none";
}

var modalbd = document.getElementById("modalBd");
var btnBd = document.getElementById("btnBd");
var spanBd = document.getElementsByClassName("closeBd")[0];

// When the user clicks on the button, open the modal
btnBd.onclick = function() {
modalbd.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanBd.onclick = function() {
modalbd.style.display = "none";
}

var modalaudit = document.getElementById("modalAudit");
var btnAudit = document.getElementById("btnAudit");
var spanAudit = document.getElementsByClassName("closeAudit")[0];

// When the user clicks on the button, open the modal
btnAudit.onclick = function() {
modalaudit.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanAudit.onclick = function() {
modalaudit.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modalhr) {
  modalhr.style.display = "none";
}
else if (event.target == modalfinance) {
  modalfinance.style.display = "none";
}
else if (event.target == modalit) {
  modalit.style.display = "none";
}
else if (event.target == modalmb) {
  modalmb.style.display = "none";
}
else if (event.target == modallegal) {
  modallegal.style.display = "none";
}
else if (event.target == modalqa) {
  modalqa.style.display = "none";
}
else if (event.target == modalmarketing) {
  modalmarketing.style.display = "none";
}
else if (event.target == modalcreative) {
  modalcreative.style.display = "none";
}
else if (event.target == modalbd) {
  modalbd.style.display = "none";
}
else if (event.target == modalaudit) {
  modalaudit.style.display = "none";
}
}

// Button Go to top

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      document.getElementById("gototop").style.display = "block";
  } else {
      document.getElementById("gototop").style.display = "none";
  }

}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {

  $('html, body').animate({scrollTop:0}, 'slow');
}

// // process logout
function logout() {
  $(function() {
    // remove token
    // $.cookie('Token', null);
    // $.cookie('FirstName', null);
    // $.cookie('LastName', null);
    // redirect to login page with animation
    $(function(){
      $('body').fadeOut(1000, function() {
          window.location.href = "../index.php";
      })
    });
  });
}

// redirect to index page
function redirect_index() {
	$(function(){
		$('body').fadeOut(1000, function() {
		    window.location.href = "../index.php";
		})
	});
}

// refresh page and token expired
if ($.cookie('Token') == null || $.cookie('Token') == '') {
	$('#modal-login-token-expired').modal('show');
}

// call dropdown menu
$('.dropdown').hover(function() {
	$(this).find('.dropdown-menu').stop(true, true).delay(150).fadeIn(150);
  }, function() {
	$(this).find('.dropdown-menu').stop(true, true).delay(150).fadeOut(150);
  });  