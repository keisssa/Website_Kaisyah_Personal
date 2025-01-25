document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.querySelector("form");
  const usernameInput = document.getElementById("username");
  const passwordInput = document.getElementById("password");

  loginForm.addEventListener("submit", (event) => {
    event.preventDefault(); // Mencegah reload halaman

    // Username dan password yang valid
    const validUsername = "kai";
    const validPassword = "kei";

    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();

    // Validasi username dan password
    if (username === validUsername && password === validPassword) {
      alert("Login berhasil!");
      // Simpan sesi login di localStorage
      localStorage.setItem("user", username);

      // Redirect ke halaman portfolio
      window.location.href = "portfolio.php";
    } else {
      alert("Username atau Password salah!");
    }
  });

  // Redirect jika sudah login
  if (localStorage.getItem("user")) {
    window.location.href = "portfolio.php";
  }
});
