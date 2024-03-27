<div class="row2">
    <div class="row2 font_title">
        <h1>THÊM MỚI TIN TỨC</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=themtt" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label> Tiêu đề </label> <br>
                <input type="text" name="tieu_de" placeholder="nhập vào tiêu đề" require>
            </div>
            <div class="row2 mb10 form_content_container">
                <label> Nội dung </label> <br>
                <input type="text" name="noi_dung" placeholder="nhập vào nội dung" require>
            </div>
            <div class="row2 mb10">
                <label>Hình ảnh </label> <br>
                <input type="file" name="hinh_anh" require>
            </div>
            <div class="row2 mb10">
                <label>Danh mục</label> <br>
                <select name="id_danh_muc">
                    <?php 
                        foreach ($listdmtt as $dm) {
                            extract($dm);
                            echo '<option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="submit" value="THÊM MỚI" name="themMoiTT">
                <input class="mr20" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=tintuc"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao) && ($thongbao != "")) 
                echo $thongbao;
            ?>
        </form>
    </div>
</div>