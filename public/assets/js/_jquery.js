const getProduct = () => {
    jQuery("#produk-styled-tab").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/products",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableProduk = jQuery("#table-produk tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' + _index + "</td>");

                    tr.append(
                        `<th scope="row" class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><img src="assets/uploaded/${item.gambar}" alt="Product Image" class="w-10">${item.name}</th>`
                    );

                    tr.append(
                        `<td class="px-6 py-4"> ${
                            item.category ? item.category.name : "-"
                        } </td>`
                    );

                    tr.append('<td class="px-6 py-4">' + item.harga + "</td>");

                    tr.append('<td class="px-6 py-4">' + item.stok + "</td>");

                    tr.append(
                        '<td class="px-6 py-4">' +
                            item.tanggal_obat_expired +
                            "</td>"
                    );

                    tr.append(
                        `<td class="px-6 py-4"><button type="button" onclick="getProductDetail(${item.id})" data-modal-target="editProduk-modal" data-modal-show="editProduk-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteProduct(${item.id})" data-modal-target="hapusProduk-modal" data-modal-show="hapusProduk-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`
                    );

                    tableProduk.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editProdukModalElement =
                        document.getElementById("editProduk-modal");
                    const hapusProdukModalElement =
                        document.getElementById("hapusProduk-modal");

                    const editProdukModal = editProdukModalElement
                        ? new Modal(editProdukModalElement)
                        : null;
                    const hapusProdukModal = hapusProdukModalElement
                        ? new Modal(hapusProdukModalElement)
                        : null;

                    // Event untuk membuka modal berdasarkan data-modal-target
                    jQuery(document).on(
                        "click",
                        "[data-modal-target]",
                        function () {
                            const modalId = jQuery(this).data("modal-target");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.show();
                            }
                        }
                    );

                    // Event untuk menutup modal berdasarkan data-modal-hide
                    jQuery(document).on(
                        "click",
                        "[data-modal-hide]",
                        function () {
                            const modalId = jQuery(this).data("modal-hide");
                            const modalElement =
                                document.getElementById(modalId);

                            if (modalElement) {
                                const modal = new Modal(modalElement); // Inisialisasi Flowbite Modal
                                modal.hide();
                            }
                        }
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("Error Fetching Produk : ", error);
            },
        });
    });
};

const getVoucher = () => {
    jQuery('#voucher-styled-tab').on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url:"/admin/vouchers",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableVoucher = jQuery("#table-voucher tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' +_index + "</td>");

                    tr.append(`<th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap"><img class="size-8 object-fill" src="assets/uploaded/${item.gambar}" alt="Voucher Image"><div class="ps-3"><div class="font-semibold">Discount ${item.jumlah}</div><div class="font-normal text-gray-500">Minimal Belanja Rp. 30K</div></div></th>`);

                    tr.append(`<td class="px-6 py-4">${item.status}</td>`);

                    tr.append(`<td class="px-6 py-4">${item.tanggal_diskon_expired}</td>`);

                    tr.append(`<td class="px-6 py-4"><button type="button" data-modal-target="editVoucher-modal" data-modal-show="editVoucher-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button></td>`);
                    
                });
            },
            error: (xhr, status, error) => {
                console.log("Error Fetching Voucher : ", error);
            },
        });
    });
};

const getProductDetail = (id) => {
    jQuery.ajax({
        url: "/admin/product/" + id,
        type: "get",
        success: (response) => {
            $("#input-id").val(response.data.id);
            $("#input-name").val(response.data.name);
            $("#input-harga").val(response.data.harga);
            $("#input-stok").val(response.data.stok);
            $("#input-category").val(response.data.category_id);
            $("#input-deskripsi").val(response.data.deskripsi);
            $("#input-tanggal-obat-dibuat").val(
                response.data.tanggal_obat_dibuat
            );
            $("#input-tanggal-obat-expired").val(
                response.data.tanggal_obat_expired
            );
            $("#input-deskripsi").val(response.data.deskripsi);
            $(".previewImage").attr(
                "src",
                "/assets/uploaded/" + response.data.gambar
            );
            $("#input-gambar").val(response.data.gambar);

            $("#input-category").empty();

            jQuery.each(response.categories, function (key, category) {
                let selected = "";
                if (category.id === response.data.category_id) {
                    selected = "selected";
                }

                // Tambahkan option ke select kategori
                $("#input-category").append(
                    '<option value="' +
                        category.id +
                        '" ' +
                        selected +
                        ">" +
                        category.name +
                        "</option>"
                );
            });
        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const createProduct = () => {
    jQuery("#form-create-produk").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        jQuery.ajax({
            url: "/admin/create-product",
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Produk baru telah disimpan!",
                    icon: "success",
                });
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
                getProduct();
            },
            error: (xhr, status, error) => {
                console.log("Error: ", error);
                alert("Terjadi kesalahan saat menambahkan produk.");
            },
        });
    });
};

const editProduct = () => {
    jQuery("#form-edit-produk").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/admin/edit-product",
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log("Produk berhasil diupdate", data);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Produk telah diupdate!",
                    icon: "success",
                });
                getProduct();
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate produk.");
            },
        });
    });
};

const deleteProduct = (id) => {
    jQuery("#deleteId").val(id);
};

const confirmDelete = () => {
    const id = jQuery("#deleteId").val();
    jQuery.ajax({
        url: `/admin/delete-product/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Produk telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus produk.");
        },
    });
};

jQuery(document).ready(() => {
    jQuery.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
    });
    getProduct();
    createProduct();
    editProduct();

    jQuery("#btn-modal-product").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/categories",
            type: "get",
            dataType: "json",
            success: (response) => {
                const selectBox = jQuery("#input-add-category");
                selectBox.empty();
                console.log(response);
                selectBox.append(
                    "<option selected disabled>Pilih kategori</option>"
                );
                response.data.forEach((item) => {
                    selectBox.append(
                        `<option value="${item.id}">${item.name}</option>`
                    );
                });
            },
            error: (xhr, status, error) => {
                console.log("gagal mendapat kategori");
            },
        });
    });
});
