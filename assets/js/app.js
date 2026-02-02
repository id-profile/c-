const themeKey = 'pulse-theme';
const themeToggles = document.querySelectorAll('[data-theme-option]');
const prefersDark = window.matchMedia('(prefers-color-scheme: dark)');
const eventBus = window.mitt ? window.mitt() : null;

const applyTheme = (theme) => {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem(themeKey, theme);
    if (eventBus) {
        eventBus.emit('theme:changed', theme);
    }
};

const syncThemeUI = (theme) => {
    themeToggles.forEach((toggle) => {
        toggle.checked = toggle.value === theme;
    });
};

const initTheme = () => {
    const stored = localStorage.getItem(themeKey);
    const fallback = stored || 'system';
    applyTheme(fallback);
    syncThemeUI(fallback);
};

if (prefersDark.addEventListener) {
    prefersDark.addEventListener('change', () => {
        const current = localStorage.getItem(themeKey) || 'system';
        if (current === 'system') {
            applyTheme('system');
        }
    });
}

themeToggles.forEach((toggle) => {
    toggle.addEventListener('change', (event) => {
        applyTheme(event.target.value);
        const notyf = window.Notyf ? new window.Notyf() : null;
        if (notyf) {
            notyf.success(`Theme set to ${event.target.value}.`);
        }
    });
});

const initUtilityScripts = () => {
    if (window.autosize) {
        window.autosize(document.querySelectorAll('textarea'));
    }

    const timestampNodes = document.querySelectorAll('[data-time]');
    timestampNodes.forEach((node) => {
        if (window.dayjs) {
            node.textContent = window.dayjs(node.dataset.time).format('MMM D, YYYY h:mm A');
        }
    });

    if (window.gsap) {
        window.gsap.from('.animate-in', { opacity: 0, y: 18, duration: 0.6, stagger: 0.08 });
    }
};

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initUtilityScripts();
});
