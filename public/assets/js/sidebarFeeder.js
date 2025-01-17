
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById('sidebar');

    // Menambahkan class hover-scroll saat hover dan menghapusnya saat mouse keluar
    sidebar.addEventListener('mouseenter', function () {
        sidebar.classList.add('hover-scroll');
    });

    sidebar.addEventListener('mouseleave', function () {
        sidebar.classList.remove('hover-scroll');
    });
});
