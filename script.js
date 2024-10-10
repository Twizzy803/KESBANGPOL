function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("myMenu").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("myMenu").style.width = "0";
}

document.querySelector(".kirim").addEventListener("click", function () {
  Swal.fire(
    "Our First Alert",
    "With some body text and success icon!",
    "success"
  );
});
