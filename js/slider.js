$(document).ready(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 528,
        play: {
		      active: true,
		      effect: "slide",
		      interval: 5000,
		      auto: true,
		      swap: true,
		      pauseOnHover: false
		    }
      });
});