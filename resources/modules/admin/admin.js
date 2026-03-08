import '../../js/bootstrap';

const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('sidebar-toggle');
const overlay = document.getElementById('sidebar-overlay');
const notifToggle = document.getElementById('notification-toggle');
const notifDropdown = document.getElementById('notification-dropdown');

function toggleSidebar() {
    if (!sidebar) {
        return;
    }

    if (window.innerWidth >= 1024) {
        sidebar.classList.toggle('collapsed');
        return;
    }

    sidebar.classList.toggle('mobile-hidden');
    overlay?.classList.toggle('hidden');
    overlay?.classList.toggle('active');
}

toggleBtn?.addEventListener('click', toggleSidebar);
overlay?.addEventListener('click', toggleSidebar);

notifToggle?.addEventListener('click', (event) => {
    event.stopPropagation();
    notifDropdown?.classList.toggle('hidden');
});

document.addEventListener('click', (event) => {
    if (!notifDropdown || !notifToggle) {
        return;
    }

    if (!notifDropdown.contains(event.target) && !notifToggle.contains(event.target)) {
        notifDropdown.classList.add('hidden');
    }
});
