(function ($) {
  $.fn.countTo = function (options) {
    options = options || {};

    return $(this).each(function () {
      // set options for current element
      var settings = $.extend(
        {},
        $.fn.countTo.defaults,
        {
          from: $(this).data("from"),
          to: $(this).data("to"),
          speed: $(this).data("speed"),
          refreshInterval: $(this).data("refresh-interval"),
          decimals: $(this).data("decimals"),
        },
        options
      );

      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;

      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data("countTo") || {};

      $self.data("countTo", data);

      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);

      // initialize the element with the starting value
      render(value);

      function updateTimer() {
        value += increment;
        loopCount++;

        render(value);

        if (typeof settings.onUpdate == "function") {
          settings.onUpdate.call(self, value);
        }

        if (loopCount >= loops) {
          // remove the interval
          $self.removeData("countTo");
          clearInterval(data.interval);
          value = settings.to;

          if (typeof settings.onComplete == "function") {
            settings.onComplete.call(self, value);
          }
        }
      }

      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0, // the number the element should start at
    to: 0, // the number the element should end at
    speed: 1000, // how long it should take to count between the target numbers
    refreshInterval: 1, // how often the element should be updated
    decimals: 0, // the number of decimal places to show
    formatter: formatter, // handler for formatting the value before rendering
    onUpdate: null, // callback method for every time the element is updated
    onComplete: null, // callback method for when the element finishes updating
  };

  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
})(jQuery);

jQuery(function ($) {
  // custom formatting example
  $(".count-number").data("countToOptions", {
    formatter: function (value, options) {
      return value
        .toFixed(options.decimals)
        .replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
    },
  });

  // start all the timers
  $(".timer").each(count);

  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data("countToOptions") || {});
    $this.countTo(options);
  }
});


//whenever we load the page, always display the first slide
var currentSlide = 0

//here we set how many slides we have using the .length property
//this is useful because we can use it as our max slide value
var totalSlides = $('.holder div').length


// 1. a function that deals with taking us to the next slide
var nextSlide = function(){
// increment our currentSlide value by reassigning it and increlenting 	   it by 1
  currentSlide = currentSlide + 1

  //a continuacion ponemos este codigo para que nuestras slides y numeros no sigan avanzando cuando lleguen a la 4ta
  //
  if(currentSlide >= totalSlides){
    currentSlide = 0
  }
// we are going to turn our currentSlide value into a negative vw unit
  var leftPosition = (-currentSlide * 100)  + 'vw'
// here we add the 'vw' unit into the end

// pass the vw unit into our css method below
//here we grab the holder and change it to the second slide
  $('.holder').css('left', leftPosition)

var slideNumber = currentSlide + 1
// here we set the text for the steps using currentSlide and total nubmer
$('.steps').text(slideNumber + ' / ' + totalSlides)
}

//2. a function that deals with taking us to the previous slide

var previousSlide = function(){
 //this is identical to our nextSlide function, apart from that we are decrementing the currentSlide value (taking us back rather than fowards)
  currentSlide = currentSlide - 1

 //a continuacion ponemos este codigo para que nuestras slides y numeros no sigan retrocediendo cuando lleguen al 0
 //
 if(currentSlide < 0){
    currentSlide = totalSlides - 1
 }

  var leftPosition = (-currentSlide * 100)  + 'vw'
  $('.holder').css('left', leftPosition)

var slideNumber = currentSlide + 1
// here we set the text for the steps using currentSlide and total nubmer
$('.steps').text(slideNumber + ' / ' + totalSlides)
}

//setInterval allows us to run a function every x amount of time
var autoSlide = setInterval(function(){
// here our nextSlide function will be run
nextSlide()
// runs every 3seconds (3000ms)
}, 3000)

//we also have setTimeout, wich is the same, but runs only once

$('.next').on('click', function(){
  //this is going to cancel our autoSlide interval function
  //as the user has taken over control of the slideshow
  clearInterval(autoSlide)
  // here we call the nextSlide function and fo to the next slide
  nextSlide()
})


$('.prev').on('click', function(){
  clearInterval(autoSlide)
  previousSlide()
})

$('body').on('keydown', function(event){
  var keyCode = event.keyCode
  if(keyCode ==37){
    clearInterval(autoSlide)
    previousSlide()
  }
   if(keyCode ==39){
    clearInterval(autoSlide)
    nextSlide()
   }
})



const toggleSwitch = document.querySelector(
  '.theme-switch input[type="checkbox"]'
);
const currentTheme = localStorage.getItem("theme");

if (currentTheme) {
  document.documentElement.setAttribute("data-theme", currentTheme);

  if (currentTheme === "dark") {
    toggleSwitch.checked = true;
  }
}

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    localStorage.setItem("theme", "light");
  }
}

toggleSwitch.addEventListener("change", switchTheme, false);
