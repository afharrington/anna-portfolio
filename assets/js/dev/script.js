// var waypoint = new Waypoint({
//   element: document.getElementById('stuff'),
//   handler: function() {
//     jQuery('.animated').addClass('pulse');
//     console.log("hi");
//   }
// })

jQuery(".element").waypoint(function() {
  jQuery(this.element).addClass("zoom-animation");
}, {offset: '0%'});
