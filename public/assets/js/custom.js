// Function to refresh page
function refreshPage() {
    location.reload();
}

// Inisialisasi variabel untuk pencarian, pagination, dan checkbox
let currentPage = 1;
let rowsPerPage = 10;
let rowCheckboxes = document.querySelectorAll('.rowCheckbox');
let selectAllCheckbox = document.getElementById('selectAllCheckbox');

// Fungsi untuk memperbarui baris tabel berdasarkan pencarian dan pagination
function updateTableRows() {
    const searchInput = document.getElementById('searchInput'); // Input pencarian
    const courseTableRows = document.querySelectorAll('#sourceTable tbody tr'); // Baris tabel untuk course

    const filteredRows = Array.from(courseTableRows).filter(row => {
        const nameColumn = row.querySelector('td:nth-child(4)');
        const nameText = nameColumn.textContent || nameColumn.innerText;
        return nameText.toLowerCase().includes(searchInput.value.toLowerCase());
    });

    const totalRows = filteredRows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);

    // Menyembunyikan semua baris
    courseTableRows.forEach(row => row.style.display = 'none');

    // Menampilkan baris yang sesuai dengan halaman dan pencarian
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = Math.min(startIndex + rowsPerPage, totalRows);

    for (let i = startIndex; i < endIndex; i++) {
        filteredRows[i].style.display = ''; // Tampilkan baris yang sesuai
    }

    updatePagination(totalPages);
    updateCheckboxes(); // Update checkbox setelah memperbarui tabel
}

// Fungsi untuk memperbarui pagination
function updatePagination(totalPages) {
    const pagination = document.getElementById('pagination');
    const maxVisiblePages = 5; // Jumlah halaman yang ingin ditampilkan
    let paginationHTML = '';

    // Tombol Previous
    paginationHTML += `
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(1)">First</a>
        </li>
        <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Previous</a>
        </li>
    `;

    // Menentukan halaman yang akan ditampilkan
    const startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
    const endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

    // Membuat link untuk halaman-halaman yang ada
    for (let i = startPage; i <= endPage; i++) {
        paginationHTML += `
            <li class="page-item ${currentPage === i ? 'active' : ''}">
                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
            </li>
        `;
    }

    // Tombol Next
    paginationHTML += `
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Next</a>
        </li>
        <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
            <a class="page-link" href="#" onclick="changePage(${totalPages})">Last</a>
        </li>
    `;

    // Update konten pagination
    pagination.innerHTML = paginationHTML;
}


// Fungsi untuk mengubah halaman
function changePage(pageNumber) {
    currentPage = pageNumber;
    updateTableRows();
}

// Event listener untuk pencarian
document.getElementById('searchInput').addEventListener('input', function() {
    currentPage = 1; // Reset ke halaman pertama saat mencari
    updateTableRows();
});

// Event listener untuk perubahan jumlah baris per halaman
document.getElementById('rowCount').addEventListener('change', function() {
    rowsPerPage = parseInt(this.value);
    currentPage = 1; // Reset ke halaman pertama saat mengubah jumlah baris per halaman
    updateTableRows();
});

// Fungsi untuk mengupdate checkbox "select all" dan row checkbox
function updateCheckboxes() {
    rowCheckboxes = document.querySelectorAll('.rowCheckbox'); // Mengambil ulang checkbox row setelah pemfilteran

    // Menangani checkbox "Select All"
    selectAllCheckbox.addEventListener('change', function() {
        rowCheckboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
        });
        toggleActionButtons(); // Menampilkan atau menyembunyikan tombol aksi
    });

    // Menangani checkbox di setiap baris
    rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const allChecked = Array.from(rowCheckboxes).every(checkbox => checkbox.checked);
            selectAllCheckbox.checked = allChecked;
            selectAllCheckbox.indeterminate = !allChecked && Array.from(rowCheckboxes).some(checkbox => checkbox.checked);

            toggleActionButtons(); // Menampilkan atau menyembunyikan tombol aksi
        });
    });
}

// Fungsi untuk menampilkan atau menyembunyikan tombol aksi (delete dan cancel)
function toggleActionButtons() {
    const cancelBtn = document.getElementById('cancelBtn');
    const deleteBtn = document.getElementById('deleteBtn');
    const anyChecked = Array.from(rowCheckboxes).some(checkbox => checkbox.checked); // Cek jika ada checkbox yang dicentang

    if (anyChecked) {
        cancelBtn.style.display = 'inline-block'; // Menampilkan tombol cancel
        deleteBtn.style.display = 'inline-block'; // Menampilkan tombol delete
    } else {
        cancelBtn.style.display = 'none'; // Menyembunyikan tombol cancel
        deleteBtn.style.display = 'none'; // Menyembunyikan tombol delete
    }
}

// Fungsi untuk membatalkan pilihan checkbox
function cancelSelection() {
    rowCheckboxes.forEach(checkbox => {
        checkbox.checked = false; // Membatalkan pilihan pada setiap checkbox
    });
    toggleActionButtons(); // Update tombol aksi
}

// Inisialisasi halaman saat pertama kali dimuat
document.addEventListener('DOMContentLoaded', function() {
    updateTableRows();
});

document.addEventListener('DOMContentLoaded', function () {
    // Cek jika ada pesan sukses dari session Laravel
    if (window.sessionSuccessMessage) {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: window.sessionSuccessMessage,  // Menampilkan pesan dari session
            confirmButtonText: 'OK'
        });
    }

    if (window.sessionErrorMessage) {
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: window.sessionErrorMessage,  // Menampilkan pesan dari session
            confirmButtonText: 'Tutup'
        });
    }

    // Fungsi konfirmasi hapus
    window.confirmDelete = function(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika tombol konfirmasi ditekan, kirimkan form penghapusan
                document.getElementById('deleteForm-' + id).submit();
            }
        });
    };

    // Menambahkan fungsi untuk menutup tombol "Batal" ketika diklik
    const cancelBtn = document.getElementById('cancelBtn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', function() {
            this.style.display = 'none'; // Menyembunyikan tombol Batal setelah klik
            cancelSelection(); // Membatalkan pilihan checkbox
        });
    }
});



//filter content hide
function toggleFilter() {
    const filterSection = document.getElementById('filterSection');

    // Cek apakah elemen filterSection sedang tersembunyi
    if (filterSection.style.display === "none" || filterSection.style.display === "") {
        filterSection.style.display = "block"; // Menampilkan filter

        // Reset tinggi elemen ke 0 untuk memulai animasi slide
        filterSection.style.height = "0px";
        const scrollHeight = filterSection.scrollHeight; // Ambil tinggi konten

        // Tunggu sebentar dan kemudian atur tinggi untuk animasi slide
        setTimeout(() => {
            filterSection.style.transition = "height 0.5s ease-in-out"; // Tambahkan transisi
            filterSection.style.height = scrollHeight + "px"; // Atur tinggi elemen sesuai konten
        }, 10);

    } else {
        // Menyembunyikan elemen dengan animasi slide
        filterSection.style.height = filterSection.scrollHeight + "px"; // Set tinggi maksimal terlebih dahulu

        // Lalu turunkan tinggi elemen ke 0
        setTimeout(() => {
            filterSection.style.transition = "height 0.5s ease-in-out"; // Tambahkan transisi
            filterSection.style.height = "0px"; // Menurunkan tinggi ke 0
        }, 10);

        // Setelah animasi selesai, sembunyikan elemen
        setTimeout(() => {
            filterSection.style.display = "none"; // Menyembunyikan elemen
        }, 500); // Durasi animasi yang sama dengan transisi
    }
}


// Fungsi untuk memfilter tabel berdasarkan Tahun Ajaran dan Program Studi
function filterTable() {
    const tahunAjaran = document.getElementById('tahunAjaran').value;
    const programStudi = document.getElementById('programStudi').value;

    // Ambil semua baris dalam tabel
    const rows = document.querySelectorAll('#sourceTable tbody tr');

    // Iterasi setiap baris untuk mengecek kecocokan filter
    rows.forEach(function(row) {
        const rowTahunAjaran = row.getAttribute('data-tahun');
        const rowProgramStudi = row.getAttribute('data-prodi');

        // Cek apakah baris sesuai dengan filter
        const isTahunAjaranMatch = tahunAjaran === '' || rowTahunAjaran === tahunAjaran;
        const isProgramStudiMatch = programStudi === '' || rowProgramStudi === programStudi;

        // Menampilkan atau menyembunyikan baris berdasarkan filter
        if (isTahunAjaranMatch && isProgramStudiMatch) {
            row.style.display = ''; // Tampilkan baris jika cocok
        } else {
            row.style.display = 'none'; // Sembunyikan baris jika tidak cocok
        }
    });
}

// Menambahkan event listener untuk filter ketika memilih nilai
document.getElementById('tahunAjaran').addEventListener('change', filterTable);
document.getElementById('programStudi').addEventListener('change', filterTable);
