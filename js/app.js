$(function () {
  // MENU
  $(".navbar-collapse a").on("click", function () {
    $(".navbar-collapse").collapse("hide");
  });

  document
    .getElementById("profileDropdown")
    .addEventListener("click", function (event) {
      var dropdownMenu = event.target
        .closest(".nav-item")
        .querySelector(".dropdown-menu");
      dropdownMenu.classList.toggle("show"); // Toggle the display of the dropdown
    });

  // AOS ANIMATION
  AOS.init({
    disable: "mobile",
    duration: 800,
    anchorPlacement: "center-bottom",
  });

  // SMOOTHSCROLL NAVBAR
  $(function () {
    $(".navbar a, .hero-text a").on("click", function (event) {
      var $anchor = $(this);
      $("html, body")
        .stop()
        .animate(
          {
            scrollTop: $($anchor.attr("href")).offset().top - 49,
          },
          1000
        );
      event.preventDefault();
    });
  });
});

// PROFILE

document.querySelectorAll(".btn-danger").forEach((button) => {
  button.addEventListener("click", function () {
    const eventItem = button.closest("li");
    eventItem.remove();
  });
});

document
  .getElementById("event-registration-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const eventName = document.getElementById("event-name").value;
    const participantName = document.getElementById("participant-name").value;
    const participantEmail = document.getElementById("participant-email").value;

    const newRegistration = document.createElement("li");
    newRegistration.innerHTML = `${eventName} <button class="btn btn-danger btn-sm">Cancel</button>`;
    document
      .querySelector("#manage-registrations ul")
      .appendChild(newRegistration);

    // Clear the form after submission
    this.reset();
  });
