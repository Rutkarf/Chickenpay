document.addEventListener("DOMContentLoaded", function () {
  // Simulate user login
  const loginButton = document.getElementById("login-btn");
  const registerButton = document.getElementById("register-btn");
  const logoutButton = document.getElementById("logout-btn");
  const userInfo = document.getElementById("user-info");

  if (loginButton) {
    loginButton.addEventListener("click", function () {
      userInfo.classList.remove("d-none"); // Show user info
      loginButton.classList.add("d-none"); // Hide login button
      registerButton.classList.add("d-none"); // Hide register button
    });
  }

  // Simulate user logout
  if (logoutButton) {
    logoutButton.addEventListener("click", function () {
      userInfo.classList.add("d-none"); // Hide user info
      loginButton.classList.remove("d-none"); // Show login button
      registerButton.classList.remove("d-none"); // Show register button
    });
  }
});
