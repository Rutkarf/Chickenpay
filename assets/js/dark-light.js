document.addEventListener("DOMContentLoaded", function () {
  const lightModeToggle = document.querySelector("#light-mode-toggle");
  const darkModeToggle = document.querySelector("#dark-mode-toggle");
  const body = document.body;

  // Fonction pour activer le mode clair
  function activateLightMode() {
    body.classList.remove("dark-mode");
    body.classList.add("light-mode");
    localStorage.setItem("theme", "light");
    updateButtonStyles();
  }

  // Fonction pour activer le mode sombre
  function activateDarkMode() {
    body.classList.remove("light-mode");
    body.classList.add("dark-mode");
    localStorage.setItem("theme", "dark");
    updateButtonStyles();
  }

  // Fonction pour mettre à jour les styles des boutons
  function updateButtonStyles() {
    if (body.classList.contains("dark-mode")) {
      darkModeToggle.classList.add("active");
      lightModeToggle.classList.remove("active");
    } else {
      lightModeToggle.classList.add("active");
      darkModeToggle.classList.remove("active");
    }
  }

  // Vérifier le mode actuel au chargement de la page
  function checkTheme() {
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
      activateDarkMode();
    } else {
      activateLightMode();
    }
  }

  // Lier les événements de clic sur les boutons
  if (lightModeToggle && darkModeToggle) {
    lightModeToggle.addEventListener("click", activateLightMode);
    darkModeToggle.addEventListener("click", activateDarkMode);
  }

  // Appliquer le thème en fonction de la sauvegarde
  checkTheme();
});
