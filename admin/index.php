<?php
    // MODEL 
    include "../model/pdo.php";
    include "../model/tintuc.php";

    include "header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            case 'listdm':
                include "danhmuc/list.php";
                break;
            case 'adddm':
                include "danhmuc/add.php";
                break;
            case 'tintuc':
                $listTinTuc = loadall_tintuc();
                include "tintuc/list.php";
                break;
            case 'xoatt':
                if(isset($_GET['id']) && isset($_GET['id']) > 0) {
                    // Thực hiện xóa tin tức
                    delete_tintuc($_GET['id']);
                }
                // hiển thị danh sách tin tức mới
                $listTinTuc = loadall_tintuc();
                include "tintuc/list.php";
                break;
            case 'themtt':
                // Nếu người dùng click vào nút thêm mới
                if (isset($_POST['themMoiTT'])) {
                    // thực hiện tạo mới
                    //Lấy thông tin từ form nhập
                    $id_danh_muc = $_POST['id_danh_muc'];
                    $tieu_de = $_POST['tieu_de'];
                    $noi_dung = $_POST['noi_dung'];
                    $hinh_anh = $_FILES['hinh_anh']['name'];
                    // Validate không được để trống
                    if ($id_danh_muc != "" && $tieu_de != "" && $noi_dung != "" && $hinh_anh != "") {
                        // Lưu ảnh vào thư mục local
                        $target_dir ="../upload/";
                        $target_file = $target_dir.basename($_FILES['hinh_anh']['name']);
                        if (move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $target_file)) {
                            echo "Lưu file ảnh thành công";
                        } else{
                            echo "có lỗi khi thực hiện lưu";
                        }

                        // lưu thông tin vào cơ sở dữ liệu
                        insert_tintuc($tieu_de, $noi_dung, $hinh_anh,$id_danh_muc);
                        $thongbao = "thêm thành công";
                    } else {
                        echo "alert('Không được để trống các trường dữ liệu')";
                    }
                }
                $listdmtt = loadall_danhmuctt();
                include "tintuc/add.php";
                break;
        }
    }
    include "footer.php";
?>