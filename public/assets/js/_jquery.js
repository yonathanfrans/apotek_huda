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

                    tr.append(`<th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap"><img class="size-8 object-fill" src="assets/uploaded/${item.gambar}" alt="Voucher Image"><div class="ps-3"><div class="font-semibold">${item.name}</div><div class="font-normal text-gray-500">Discount ${item.jumlah}</div></div></th>`);

                    tr.append(`<td class="px-6 py-4">${item.status}</td>`);

                    tr.append(`<td class="px-6 py-4">${item.tanggal_diskon_expired}</td>`);

                    tr.append(`<td class="px-6 py-4"><button type="button" onclick="getVoucherDetail(${item.id})" data-modal-target="editVoucher-modal" data-modal-show="editVoucher-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteVoucher(${item.id})" data-modal-target="hapusVoucher-modal" data-modal-show="hapusVoucher-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`);

                    tableVoucher.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editVoucherModalElement =
                        document.getElementById("editVoucher-modal");
                    const hapusVoucherModalElement =
                        document.getElementById("hapusVoucher-modal");

                    const editVoucherModal = editVoucherModalElement
                        ? new Modal(editVoucherModalElement)
                        : null;
                    const hapusVoucherModal = hapusVoucherModalElement
                        ? new Modal(hapusVoucherModalElement)
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
                console.log("Error Fetching Voucher : ", error);
            },
        });
    });
};

const getResep = () => {
    jQuery('#resep-styled-tab').on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url:"/admin/recipes",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableResep = jQuery("#table-resep tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' +_index + "</td>");

                    tr.append(`<th scope="row" class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><img src="assets/img/profile.jpg" alt="Profile Image" class="size-8 rounded-full">${
                        item.user ? item.user.name : "-"
                    }</th>`);

                    tr.append(`<td class="px-6 py-4">${item.tanggal}</td>`);

                    tr.append(`<td class="px-6 py-4 truncate">${item.keterangan}</td>`);

                    tr.append(`<td class="px-6 py-4"><button type="button" onclick="getResepDetail(${item.id})" data-modal-target="editResep-modal" data-modal-show="editResep-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteRecipe(${item.id})" data-modal-target="hapusResep-modal" data-modal-show="hapusResep-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`);

                    tableResep.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editResepModalElement =
                        document.getElementById("editResep-modal");
                    const hapusResepModalElement =
                        document.getElementById("hapusResep-modal");

                    const editResepModal = editResepModalElement
                        ? new Modal(editResepModalElement)
                        : null;
                    const hapusResepModal = hapusResepModalElement
                        ? new Modal(hapusResepModalElement)
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
                console.log("Error Fetching Voucher : ", error);
            },
        });
    });
};

const getOrder = () => {
    jQuery('#pesanan-styled-tab').on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url:"/admin/orders",
            type: "get",
            dataType: "json",
            success: (data) => {
                const tableOrder = jQuery("#table-order tbody").empty();
                data.forEach((item, index) => {
                    const tr = jQuery(
                        '<tr class="bg-white border-b hover:bg-gray-100"></tr>'
                    );
                    const _index = index + 1;

                    tr.append('<td class="p-4 w-4">' +_index + "</td>");
                    
                    tr.append(`<td class="p-4 w-4">${item.tag}</td>`);

                    tr.append(`<td class="p-4 w-4">${item.jumlah}</td>`);
                    
                    tr.append(`<td class="px-6 py-4">${item.tanggal}</td>`);

                    tr.append(`<th scope="row" class="flex items-center gap-x-2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap"><img src="assets/img/profile.jpg" alt="Profile Image" class="size-8 rounded-full">${
                        item.user ? item.user.name : "-"
                    }</th>`);

                    tr.append(`<td class="px-6 py-4">${item.total}</td>`);

                    tr.append(`<td class="px-6 py-4">${item.status}</td>`);

                    tr.append(`<td class="px-6 py-4"><button type="button" onclick="getOrderDetail(${item.id})" data-modal-target="editPesanan-modal" data-modal-show="editPesanan-modal" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></button><button type="button" onclick="deleteOrder(${item.id})" data-modal-target="hapusPesanan-modal" data-modal-show="hapusPesanan-modal" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg p-2 inline-flex items-center me-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" aria-hidden="true" fill="currentcolor" viewBox="0 0 24 24"><path d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z"></path></svg></button></td>`);

                    tableOrder.append(tr);

                    // Inisialisasi modal untuk editProduk-modal dan hapusProduk-modal
                    const editPesananModalElement =
                        document.getElementById("editPesanan-modal");
                    const hapusPesananModalElement =
                        document.getElementById("hapusPesanan-modal");

                    const editPesananModal = editPesananModalElement
                        ? new Modal(editPesananModalElement)
                        : null;
                    const hapusPesananModal = hapusPesananModalElement
                        ? new Modal(hapusPesananModalElement)
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
            $("#previewProductImage").attr(
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

const getVoucherDetail = (id) => {
    jQuery.ajax({
        url: "/admin/voucher/" + id,
        type: "get",
        success: (response) => {
            $("#edit-voucher-id").val(response.data.id);
            $("#edit-name-voucher").val(response.data.name);
            $("#edit-jumlah-voucher").val(response.data.jumlah);
            $("#edit-status-voucher").val(response.data.status);
            $("#edit-detail-voucher").val(response.data.detail);
            $("#edit-tanggal-diskon-dibuat").val(
                response.data.tanggal_diskon_dibuat
            );
            $("#edit-tanggal-diskon-expired").val(
                response.data.tanggal_diskon_expired
            );
            $("#previewVoucherImage").attr(
                "src",
                "/assets/uploaded/" + response.data.gambar
            );
            $("#edit-gambar-voucher").val(response.data.gambar);

        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const getResepDetail = (id) => {
    jQuery.ajax({
        url: "/admin/recipe/" + id,
        type: "get",
        success: (response) => {
            $("#lihat-recipe-id").val(response.data.id);
            $("#previewRecipeImage").attr(
                "src",
                "/assets/uploaded/" + response.data.gambar
            );
            $("#lihat-tanggal-resep").val(response.data.tanggal);
            $("#lihat-keterangan-resep").val(response.data.keterangan);
            $("#user-recipe span").text(response.data.user.name);
            $("#Tampil-recipe-gambar").attr(
                "href",
                "/assets/uploaded/" + response.data.gambar
            );

        },
        error: (xhr, status, error) => {
            console.log("Error dapat data");
        },
    });
};

const getOrderDetail = (id) => {
    jQuery.ajax({
        url: "/admin/order/" + id,
        type: "get",
        success: (response) => {
            console.log(response.data);
            $("#edit-order-id").val(response.data.id);
            $("#edit-tag-order").val(response.data.tag);
            $("#edit-tanggal-order").val(response.data.tanggal);
            $("#edit-jumlah-order").val(response.data.jumlah);
            $("#edit-alamat-order").val(response.data.alamat);
            $("#edit-status-order").val(response.data.status);
            $("#user-order span").text(response.data.user.name);
            $("#total-order span").text("Rp. " + response.data.total);
            $("#diskon-order span").text(response.data.discount ? response.data.discount.jumlah : "No Discount");

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

const createVoucher = () => {
    jQuery("#form-create-voucher").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        jQuery.ajax({
            url: "/admin/create-voucher",
            type: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Voucher baru telah disimpan!",
                    icon: "success",
                });
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
                getVoucher();
            },
            error: (xhr, status, error) => {
                console.log("Error: ", error);
                alert("Terjadi kesalahan saat menambahkan voucher.");
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

const editVoucher = () => {
    jQuery("#form-edit-voucher").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/admin/edit-voucher",
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log("Voucher berhasil diupdate", data);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Voucher telah diupdate!",
                    icon: "success",
                });
                getVoucher();
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate voucher.");
            },
        });
    });
};

const editOrder = () => {
    jQuery("#form-edit-order").on("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(this);
        formData.append("_token", jQuery('input[name="_token"]').val());

        jQuery.ajax({
            url: "/admin/edit-order",
            method: "post",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                console.log("Pesanan berhasil diupdate", data);
                // Menampilkan pesan sukses atau arahkan ke halaman lain
                Swal.fire({
                    title: "Berhasil!",
                    text: "Pesanan telah diupdate!",
                    icon: "success",
                });
                getOrder();
                // Anda bisa menambahkan logika di sini, misalnya redirect atau reset form
            },
            error: (xhr, status, error) => {
                console.log("Error: ", xhr.responseText);
                alert("Terjadi kesalahan saat mengupdate pesanan.");
            },
        });
    });
};

const deleteProduct = (id) => {
    jQuery("#deleteProductId").val(id);
};

const deleteVoucher = (id) => {
    jQuery("#deleteVoucherId").val(id);
}

const deleteRecipe = (id) => {
    jQuery("#deleteRecipeId").val(id);
}

const deleteOrder = (id) => {
    jQuery("#deleteOrderId").val(id);
}

const confirmDeleteProduct = () => {
    const id = jQuery("#deleteProductId").val();
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

const confirmDeleteVoucher = () => {
    const id = jQuery("#deleteVoucherId").val();
    jQuery.ajax({
        url: `/admin/delete-voucher/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Voucher telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus voucher.");
        },
    });
};

const confirmDeleteRecipe = () => {
    const id = jQuery("#deleteRecipeId").val();
    jQuery.ajax({
        url: `/admin/delete-recipe/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Resep telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus resep.");
        },
    });
};

const confirmDeleteOrder = () => {
    const id = jQuery("#deleteOrderId").val();
    jQuery.ajax({
        url: `/admin/delete-order/${id}`,
        method: "delete",
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
        success: (data) => {
            Swal.fire({
                title: "Berhasil!",
                text: "Pesanan telah dihapus!",
                icon: "success",
            });
        },
        error: (xhr, status, error) => {
            console.log("Error: ", xhr.responseText);
            alert("Terjadi kesalahan saat menghapus Pesanan.");
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
    getVoucher();
    getResep();
    getOrder();
    createProduct();
    createVoucher();
    editProduct();
    editVoucher();
    editOrder();

    jQuery("#btn-modal-product").on("click", (e) => {
        e.preventDefault();

        jQuery.ajax({
            url: "/admin/categories",
            type: "get",
            dataType: "json",
            success: (response) => {
                const selectBox = jQuery("#input-add-category");
                selectBox.empty();
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
