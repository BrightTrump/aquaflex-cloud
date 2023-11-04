/*---------- Counter-Up ----------*/
$(document).ready(function () {
  $(".count").each(function () {
    var $this = $(this),
      countTo = $this.attr("data-count");
    $({ countNum: $this.text() }).animate(
      {
        countNum: countTo,
      },
      {
        duration: 5000,
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum + "+");
        },
      }
    );
  });
});

// function animateCounters() {
//   const counters = document.querySelectorAll(".count");
//   counters.forEach((counter) => {
//     const finalCount = parseInt(counter.getAttribute("data-count"));
//     let count = 0;
//     const speed = 1000; //Increase this value to make counting faster

//     const updateCount = () => {
//       if (count < finalCount) {
//         count += Math.ceil(finalCount / speed);
//         counter.textContent = count;
//         setTimeout(updateCount, 10); //You can adjust the interval here
//       } else {
//         counter.textContent = finalCount;
//       }
//     };
//     updateCount();
//   });
// }
// //Call the function when the page is loaded or refreshed
// window.addEventListener("load", animateCounters);
