<?php
    // Lấy danh sách tin tức
    function loadall_tintuc() {
        $sql = "SELECT * FROM TINTUC ORDER BY ID DESC";
        $listTinTuc = pdo_query($sql);
        return $listTinTuc;
    }

    // Xóa tin tức
    function delete_tintuc($id) {
        $sql = "DELETE FROM TINTUC WHERE ID = " .$id;
        pdo_execute($sql);
    }
    
    // Lấy danh sách danh mục tin tức
    function loadall_danhmuctt() {
        $sql = "SELECT * FROM DANHMUCTINTUC ORDER BY ID_DANHMUC DESC";
        $listdm = pdo_query($sql);
        return $listdm;
    }

    // thêm danh sách tin tức
    function insert_tintuc($tieu_de, $noi_dung, $hinh_anh,$id_danh_muc) {
        $sql = "INSERT INTO `tintuc` (`id`, `tieu_de`, `noi_dung`, `hinh_anh`, `id_danh_muc`)
         VALUES (NULL, '$tieu_de', '$noi_dung', '$hinh_anh', '$id_danh_muc')";
        pdo_execute($sql);
    }
?>