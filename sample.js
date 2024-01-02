$(document).ready(function(){
    $('#exampleModal').modal('show');

    // After modal is closed, show the button set at the lower left side
    $('#exampleModal').on('hidden.bs.modal', function () {
        $('.lower-left-buttons').fadeIn(); // Show the button set
    });
});





function updateTimeAndDate() {
    const now = new Date();
    
    // Get Philippines Time
    const philTime = now.toLocaleTimeString("en-US", {timeZone: "Asia/Manila"});
    document.getElementById('clock').textContent = philTime;

    // Get Philippines Date
    const options = { 
      year: 'numeric', 
      month: 'long', 
      day: 'numeric',
      timeZone: "Asia/Manila"
    };
    const philDate = now.toLocaleDateString("en-US", options);
    document.getElementById('calendar').textContent = philDate;
  }

  // Update time and date every second
  setInterval(updateTimeAndDate, 1000);

  // Initial call to display time and date immediately
  updateTimeAndDate();

