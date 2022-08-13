$(document).ready(function () {
  $("#close-menu-button").on("click", () => {
    $(".menu-window").css({ display: "none" });
    $("#open-menu-button").css({ display: "block" });
  });

  $("#open-menu-button").on("click", () => {
    $(".menu-window").css({ display: "flex" });
    $("#open-menu-button").css({ display: "none" });
  });
});
