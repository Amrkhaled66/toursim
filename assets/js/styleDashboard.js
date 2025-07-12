// =====================
// Design System Config
// =====================
const designSystem = {
  borderRadius: {
    none: fillRadius("0px"),
    subtle: fillRadius("2px", "4px", "6px", "8px"),
    medium: fillRadius("4px", "8px", "12px", "16px"),
    large: fillRadius("8px", "16px", "24px", "32px"),
    xLarge: fillRadius("8px", "16px", "24px", "32px"),
  },
  boxShadow: {
    none: "none",
    subtle: "0 1px 3px rgba(0, 0, 0, 0.1)",
    medium: "0 4px 6px rgba(0, 0, 0, 0.1)",
    strong: "0 10px 15px rgba(0, 0, 0, 0.1)",
    dramatic: "0 20px 25px rgba(0, 0, 0, 0.15)",
  },
  spacing: {
    xs: 0.5,
    sm: 1,
    md: 1.5,
    lg: 2,
    xl: 3,
  },
};

const themes = {
  modern: { radius: "subtle", shadow: "subtle", gap: 2, grid: 3, hue: 220 },
  cozy: { radius: "large", shadow: "strong", gap: 1.5, grid: 2, hue: 25 },
  bold: { radius: "none", shadow: "dramatic", gap: 1, grid: 4, hue: 350 },
};

const styleConfig = {
  currentGrid: 2,
  currentRadius: "large",
  currentShadow: "strong",
  currentGap: 1.5,
  currentHue: 25,
};

// =====================
// Helpers
// =====================
function fillRadius(sm, md = sm, lg = sm, xl = sm) {
  return { sm, md, lg, xl };
}

function saveStyles() {
  try {
    localStorage.setItem("style-config", JSON.stringify(styleConfig));
  } catch (e) {
    console.warn("Failed to save styles:", e);
    window.styleStorage = { ...styleConfig };
  }
}

function loadStyles() {
  try {
    const stored = JSON.parse(localStorage.getItem("style-config"));
    if (stored) {
      Object.entries(stored).forEach(([k, v]) => {
        if (k in styleConfig) styleConfig[k] = v;
      });
    }
  } catch (e) {
    console.warn("Failed to load styles:", e);
  }
  applyStyles();
}

// =====================
// Style Application
// =====================
function applyStyles() {
  const root = document.documentElement;

  root.style.setProperty("--primary-hue", styleConfig.currentHue);

  const radius = designSystem.borderRadius[styleConfig.currentRadius];
  Object.entries(radius).forEach(([key, val]) => {
    root.style.setProperty(`--radius-${key}`, val);
  });

  root.style.setProperty("--card-shadow", designSystem.boxShadow[styleConfig.currentShadow]);

  updateSliderDisplays();
}

function updateSliderDisplays() {
  const gapValue = document.getElementById("gapValue");
  const gapSlider = document.getElementById("gapSlider");
  const hueValue = document.getElementById("hueValue");
  const hueSlider = document.getElementById("hueSlider");

  if (gapSlider && gapValue) {
    gapSlider.value = styleConfig.currentGap;
    gapValue.textContent = `${styleConfig.currentGap}rem`;
  }

  if (hueSlider && hueValue) {
    hueSlider.value = styleConfig.currentHue;
    hueValue.textContent = `${styleConfig.currentHue}°`;
  }
}

function updateColorPreview() {
  const preview = document.getElementById("colorPreview");
  if (preview) {
    preview.style.background = `hsl(${styleConfig.currentHue}, 51%, 47%)`;
  }
}

function raduisBG() {
  document.querySelectorAll(".raduis-section").forEach((el) => {
    const radius = parseFloat(window.getComputedStyle(el).borderRadius);
    el.classList.toggle("raduis-bg", radius >= 16);
  });
}

// =====================
// UI Updates
// =====================
function updateActiveStates() {
  updateActiveState("radiusOptions", styleConfig.currentRadius);
  const shadowValue = designSystem.boxShadow[styleConfig.currentShadow] || styleConfig.currentShadow;
  updateActiveState("shadowOptions", shadowValue);
}

function updateActiveState(id, activeValue) {
  const group = document.getElementById(id);
  if (!group) return;
  group.querySelectorAll(".style-option").forEach((option) => {
    option.classList.toggle("active", option.dataset.value === activeValue);
  });
}

// =====================
// Listeners
// =====================
function setupEventListeners() {
  // Toggle dashboard
  document.querySelectorAll("[data-action='toggle-dashboard']").forEach((el) => {
    el.addEventListener("click", toggleDashboard);
  });

  // Theme presets
  document.querySelectorAll(".theme-preset").forEach((preset) => {
    preset.addEventListener("click", (e) => {
      const theme = preset.dataset.theme;
      applyTheme(theme);
      animatePresetClick(preset);
    });
  });

  // Radius options
  const radiusOptions = document.getElementById("radiusOptions");
  if (radiusOptions) {
    radiusOptions.addEventListener("click", (e) => {
      const option = e.target.closest(".style-option");
      if (option) {
        styleConfig.currentRadius = option.dataset.value;
        updateActiveStates();
        applyStyles();
        saveStyles();
        raduisBG();
      }
    });
  }

  // Shadow options
  const shadowOptions = document.getElementById("shadowOptions");
  if (shadowOptions) {
    shadowOptions.addEventListener("click", (e) => {
      const option = e.target.closest(".style-option");
      if (option) {
        const val = option.dataset.value;
        const shadowKey = Object.keys(designSystem.boxShadow).find((key) => designSystem.boxShadow[key] === val);
        styleConfig.currentShadow = shadowKey || val;
        updateActiveStates();
        applyStyles();
        saveStyles();
      }
    });
  }

  // Gap slider
  const gapSlider = document.getElementById("gapSlider");
  if (gapSlider) {
    gapSlider.addEventListener("input", (e) => {
      styleConfig.currentGap = parseFloat(e.target.value);
      document.getElementById("gapValue").textContent = `${styleConfig.currentGap}rem`;
      applyStyles();
      saveStyles();
    });
  }

  // Hue slider
  const hueSlider = document.getElementById("hueSlider");
  if (hueSlider) {
    hueSlider.addEventListener("input", (e) => {
      styleConfig.currentHue = parseInt(e.target.value);
      document.getElementById("hueValue").textContent = `${styleConfig.currentHue}°`;
      updateColorPreview();
      applyStyles();
      saveStyles();
    });
  }
}

// =====================
// Other Functions
// =====================
function applyTheme(name) {
  const theme = themes[name];
  if (!theme) return;

  styleConfig.currentRadius = theme.radius;
  styleConfig.currentShadow = theme.shadow;
  styleConfig.currentGap = theme.gap;
  styleConfig.currentGrid = theme.grid;
  styleConfig.currentHue = theme.hue;

  updateActiveStates();
  updateColorPreview();
  applyStyles();
  saveStyles();
  raduisBG();
}

function animatePresetClick(btn) {
  btn.style.transform = "scale(0.95)";
  setTimeout(() => {
    btn.style.transform = "";
  }, 150);
}

function toggleDashboard() {
  const dashboard = document.getElementById("dashboard");
  const overlay = document.getElementById("overlay");
  if (!dashboard || !overlay) return;

  const isOpen = dashboard.classList.contains("open");
  dashboard.classList.toggle("open", !isOpen);
  overlay.classList.toggle("active", !isOpen);
}

// ESC key closes dashboard
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    const dashboard = document.getElementById("dashboard");
    if (dashboard?.classList.contains("open")) toggleDashboard();
  }
});

// Init App
document.addEventListener("DOMContentLoaded", () => {
  loadStyles();
  setupEventListeners();
  updateColorPreview();
  updateActiveStates();
});
