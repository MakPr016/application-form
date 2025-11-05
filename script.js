$(document).ready(function () {
  $("#regForm").on("submit", function (e) {
    let valid = true;

    // Simple client-side validation
    $("#regForm input[required], #regForm select[required]").each(function () {
      if ($(this).val() === "") {
        $(this).css("border", "2px solid #ff4444");
        valid = false;
      } else {
        $(this).css("border", "2px solid #00e0ff");
      }
    });

    if (!valid) {
      e.preventDefault();
      alert("Please fill in all required fields!");
    } else {
      $("#submitBtn").text("Submitting...").css("opacity", "0.7");
    }
  });
});
