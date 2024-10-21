// script.js
document.addEventListener("DOMContentLoaded", function () {
  // Dapatkan elemen-elemen dari DOM
  const modal = document.getElementById("jsModal");
  const openModalBtn = document.getElementById("jsKirim");
  const closeModalBtn = document.getElementById("closeModal");

  if (localStorage.getItem("showModal") === "true") {
    // Menampilkan modal
    modal.style.display = "block";

    // Menghapus status 'showModal' di localStorage setelah modal ditampilkan
    localStorage.removeItem("showModal");
  }

  // Ketika tombol "Open Modal" ditekan, tampilkan modal
  // openModalBtn.onclick = function () {
  //   modal.style.display = "block";
  // };

  // Ketika tombol "X" (close) ditekan, sembunyikan modal
  closeModalBtn.onclick = function () {
    modal.style.display = "none";
  };

  // Jika pengguna mengklik di luar modal, tutup modal
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
});

document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("uploadButton")
    .addEventListener("click", function () {
      document.getElementById("jsFoto").click();
    });

  document
    .getElementById("jsFoto")
    .addEventListener("change", function (event) {
      if (event.target.files.length > 0) {
        document.getElementById("submitButton").click();
      }
    });
});

const togglePassword = document.getElementById("jsTogglepassword");
const passwordInput = document.getElementById("password");

togglePassword.addEventListener("click", function () {
  // Toggle the type attribute
  const type =
    passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
  // Toggle the eye icon
  this.textContent = type === "password" ? "🙈" : "👁️";
});
