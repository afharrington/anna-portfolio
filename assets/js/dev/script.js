// var waypoint = new Waypoint({
//   element: document.getElementById('stuff'),
//   handler: function() {
//     jQuery('.animated').addClass('pulse');
//     console.log("hi");
//   }
// })

jQuery(".animated").waypoint(function() {
  jQuery(this.element).addClass("pulse");
}, {offset: '50%'});
