    // ini untuk modal add data
    document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("addDataModal");
    const btn = document.getElementById("add-data-btn");
    const span = document.getElementById("close");

    btn.onclick = function () {
        modal.style.display = "block";
    };

    span.onclick = function () {
        modal.style.display = "none";
    };

    window.onclick = function (event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    };
    });
    // akhir modal add data

    // ini untuk modal edit data
    $(document).ready(function () {
    $(".edit-data-btn").click(function (e) {
        e.preventDefault(); // Mencegah aksi default link

        const idMain = $(this).data("id");
        const nama_barang = $(this).data("nama-barang");
        const merek = $(this).data("merek");
        const lokasi = $(this).data("lokasi");
        const tgl_perolehan = $(this).data("tgl-perolehan");
        const kode_barang = $(this).data("kode-barang");
        const kondisi = $(this).data("kondisi");

        // Fungsi untuk membuat opsi merek
        function createMerekOptions(selectedMerek) {
        let options =
            '<option value="" disabled selected style="color: #A9A9A9;">Select Brand</option>';
        merekData.forEach((merek) => {
            //ada di header view
            const isSelectedBrand =
            String(merek.id_merek) === String(selectedMerek) ? "selected" : "";
            options += `<option value="${merek.id_merek}" ${isSelectedBrand}>${merek.merek}</option>`;
        });
        return options;
        }

        // Fungsi untuk membuat opsi lokasi
        function createLocateOptions(selectedLocate) {
        let options =
            '<option value="" disabled selected style="color: #A9A9A9;">Select Location</option>';
        locateData.forEach((lokasi) => {
            //ada di header view
            const isSelectedLocate =
            String(lokasi.id_location) === String(selectedLocate)
                ? "selected"
                : "";
            options += `<option value="${lokasi.id_location}" ${isSelectedLocate}>${lokasi.location}</option>`;
        });
        return options;
        }

        // Tampilkan form pop-up dengan data yang diambil
        const popupForm = `
                                                                    <div class="modal" id="editDataModal" style="display: block;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Edit Data</h5>
                                                                                <button type="button" class="close" id="closee" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form id="editDataForm" method="post" action="${baseUrlEditList}${idMain}">
                                                                                    <input type="hidden" name="id" value="${idMain}">
                                                                                    <div class="form-group">
                                                                                        <label class="form-control-label" for="nama_barang">Nama Barang</label>
                                                                                        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Enter Item Name" value="${nama_barang}" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-control-label" for="merek">Merek</label>
                                                                                        <select id="merek" name="merek" class="form-control" required>
                                                                                            ${createMerekOptions(
                                                                                            merek
                                                                                            )}
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-control-label" for="lokasi">Lokasi</label>
                                                                                        <select id="lokasi" name="lokasi" class="form-control" required>
                                                                                            ${createLocateOptions(
                                                                                            lokasi
                                                                                            )}
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-control-label" for="tahun">Tahun</label>
                                                                                        <input type="date" id="tahun" name="tahun" class="form-control" placeholder="Enter Year" value="${tgl_perolehan}" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-control-label" for="kode_barang">Kode Barang</label>
                                                                                        <input type="number" id="kode_barang" name="kode_barang" class="form-control" placeholder="Enter Value" value="${kode_barang}" required>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="form-control-label" for="kondisi">Kondisi</label>
                                                                                        <input type="text" id="kondisi" name="kondisi" class="form-control" placeholder="Enter Condition" value="${kondisi}" required>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-8 offset-sm-4 text-right">
                                                                                            <button type="submit" class="btn btn-primary pull-right">Save</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                `;

        // Sisipkan modal ke dalam body dan tampilkan
        $("body").append(popupForm);

        // Menangani penutupan modal ketika tombol close diklik
        $("#closee").click(function () {
        $("#editDataModal").css("display", "none");
        $("#editDataModal").remove();
        });

        // Menangani penutupan modal ketika area di luar modal diklik
        $(window).click(function (event) {
        if ($(event.target).is("#editDataModal")) {
            $("#editDataModal").css("display", "none");
            $("#editDataModal").remove();
        }
        });
    });
    });
    // akhir modal edit data

    // ini untuk modal detail data
    document.addEventListener("DOMContentLoaded", function () {
    const detailModal = document.getElementById("detailModal");
    const detailList = document.getElementById("detail-list");
    const moreDetailBtn = document.getElementById("more-detail");
    const additionalDetails = document.getElementById("additional-details");
    const additionalDetailList = document.getElementById(
        "additional-detail-list"
    );
    const closeDetail = document.getElementById("closeDetail");
    let isDetailOpened = false;

    // Function to format date
    function formatDate(dateStr) {
        const months = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
        ];
        const date = new Date(dateStr);
        const day = date.getDate();
        const month = months[date.getMonth()];
        const year = date.getFullYear();
        return `${day} ${month} ${year}`;
    }

    // Function to populate additional details
    function populateAdditionalDetails(additionalDetailsData) {
        additionalDetailList.innerHTML = "";
        additionalDetailsData.forEach((detail) => {
        const listItem = document.createElement("li");
        listItem.className = "list-group-item";

        // Check if the detail is a date and format it
        let value = detail.value;
        if (detail.isDate) {
            value = formatDate(value);
        }

        listItem.innerHTML = `<strong>${detail.label}:</strong> <span>${value}</span>`;
        additionalDetailList.appendChild(listItem);
        });
    }

    // Event listener for "more detail" button
    moreDetailBtn.addEventListener("click", function () {
        if (
        additionalDetails.style.display === "none" ||
        !additionalDetails.style.display
        ) {
        additionalDetails.style.display = "block";
        additionalDetails.classList.add("slide-down");
        moreDetailBtn.textContent = "less detail <<";
        isDetailOpened = true;
        } else {
        additionalDetails.style.display = "none";
        additionalDetails.classList.remove("slide-down");
        moreDetailBtn.textContent = "more detail >>";
        isDetailOpened = false;
        }
    });

    // Event listener for closing modal
    closeDetail.addEventListener("click", function () {
        detailModal.style.display = "none";
        isDetailOpened = false;
        additionalDetails.style.display = "none";
        moreDetailBtn.textContent = "more detail >>";
    });

    // Event listener for clicking outside the modal
    window.addEventListener("click", function (event) {
        if (event.target === detailModal) {
        detailModal.style.display = "none";
        isDetailOpened = false;
        additionalDetails.style.display = "none";
        moreDetailBtn.textContent = "more detail >>";
        }
    });

    // Event listener for detail buttons
    document.querySelectorAll(".detail-btn").forEach((button) => {
        button.addEventListener("click", function () {
        const namaBarang = this.getAttribute("data-nama-barang");
        const merek = this.getAttribute("data-merek");
        const lokasi = this.getAttribute("data-lokasi");
        const tanggalPerolehan = this.getAttribute("data-tgl-perolehan");
        const kodeBarang = this.getAttribute("data-kode-barang");
        const kondisi = this.getAttribute("data-kondisi");
        const no = this.getAttribute("data-no");
        const kodeSatker = this.getAttribute("data-kode-satker");
        const namaSatker = this.getAttribute("data-nama-satker");
        const nup = this.getAttribute("data-nup");
        const tanggalAwalPakai = this.getAttribute("data-tgl-awal-pakai");
        const nilaiPerolehanPertama = this.getAttribute(
            "data-nilai-perolehan-pertama"
        );
        const nilaiMutasi = this.getAttribute("data-nilai-mutasi");
        const nilaiPerolehan = this.getAttribute("data-nilai-perolehan");
        const nilaiPenyusutan = this.getAttribute("data-nilai-penyusutan");
        const nilaiBuku = this.getAttribute("data-nilai-buku");
        const kuantitas = this.getAttribute("data-kuantitas");
        const jumlahFoto = this.getAttribute("data-jumlah-foto");
        const statusPenggunaan = this.getAttribute("data-status-penggunaan");
        const noPsp = this.getAttribute("data-no-psp");
        const tanggalPsp = this.getAttribute("data-tgl-psp");
        const noTiketUsulPsp = this.getAttribute("data-no-tiket-usul-psp");
        const intraEkstra = this.getAttribute("data-intra-ekstra");
        const statusBpybds = this.getAttribute("data-status-bpybds");
        const statusHentiGuna = this.getAttribute("data-status-henti-guna");
        const statusKemitraan = this.getAttribute("data-status-kemitraan");
        const statusBarangHilang = this.getAttribute("data-status-barang-hilang");
        const statusBarangDktp = this.getAttribute("data-status-barang-dktp");
        const statusUsulRusakBerat = this.getAttribute(
            "data-status-usul-rusak-berat"
        );
        const statusUsulHapus = this.getAttribute("data-status-usul-hapus");
        const sisaUmurSemester = this.getAttribute("data-sisa-umur-semester");
        const statusSakti = this.getAttribute("data-status-sakti");
        const kodeRegisterSakti = this.getAttribute("data-kode-register-sakti");
        const keterangan = this.getAttribute("data-keterangan");

        detailModal.style.display = "block";

        // Populate main details
        detailList.innerHTML = `
                    <li class="list-group-item"><strong>Nama Barang:</strong> ${namaBarang}</li>
                    <li class="list-group-item"><strong>Merek:</strong> ${merek}</li>
                    <li class="list-group-item"><strong>Lokasi:</strong> ${lokasi}</li>
                    <li class="list-group-item"><strong>Tanggal Perolehan:</strong> ${tanggalPerolehan}</li>
                    <li class="list-group-item"><strong>Kode Barang:</strong> ${kodeBarang}</li>
                    <li class="list-group-item"><strong>Kondisi:</strong> ${kondisi}</li>
                `;

        // Additional details
        const additionalDetailsData = [
            { label: "No", value: no },
            { label: "Kode Satker", value: kodeSatker },
            { label: "Nama Satker", value: namaSatker },
            { label: "NUP", value: nup },
            {
            label: "Tanggal Awal Pakai",
            value: tanggalAwalPakai,
            isDate: true,
            },
            { label: "Nilai Perolehan Pertama", value: nilaiPerolehanPertama },
            { label: "Nilai Mutasi", value: nilaiMutasi },
            { label: "Nilai Perolehan", value: nilaiPerolehan },
            { label: "Nilai Penyusutan", value: nilaiPenyusutan },
            { label: "Nilai Buku", value: nilaiBuku },
            { label: "Kuantitas", value: kuantitas },
            { label: "Jumlah Foto", value: jumlahFoto },
            { label: "Status Penggunaan", value: statusPenggunaan },
            { label: "No PSP", value: noPsp },
            { label: "Tanggal PSP", value: tanggalPsp, isDate: true },
            { label: "No Tiket Usul PSP", value: noTiketUsulPsp },
            { label: "Intra Ekstra", value: intraEkstra },
            { label: "Status BPYBDS", value: statusBpybds },
            { label: "Status Henti Guna", value: statusHentiGuna },
            { label: "Status Kemitraan", value: statusKemitraan },
            { label: "Status Barang Hilang", value: statusBarangHilang },
            { label: "Status Barang DKTP", value: statusBarangDktp },
            { label: "Status Usul Rusak Berat", value: statusUsulRusakBerat },
            { label: "Status Usul Hapus", value: statusUsulHapus },
            { label: "Sisa Umur Semester", value: sisaUmurSemester },
            { label: "Status Sakti", value: statusSakti },
            { label: "Kode Register Sakti", value: kodeRegisterSakti },
            { label: "Keterangan", value: keterangan },
        ];
        populateAdditionalDetails(additionalDetailsData);

        // Reset "more detail" section if not previously opened
        if (!isDetailOpened) {
            additionalDetails.style.display = "none";
            moreDetailBtn.textContent = "more detail >>";
        }
        });
    });
    });
    // akhir modal detail data
