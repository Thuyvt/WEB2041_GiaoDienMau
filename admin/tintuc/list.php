<div class="row2">
         <div class="row2 font_title">
         <h2>Danh sách tin tức</h2>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Hình ảnh</th>
                <th>Danh mục</th>
                <th>Hành động</th>
            </tr>
            <?php 
                foreach($listTinTuc as $tin) {
                    extract($tin);
                    $xoaurl = "index.php?act=xoatt&id=".$id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$tieu_de.'</td>
                            <td>'.$noi_dung.'</td>
                            <td>'.$hinh_anh.'</td>
                            <td><input type="button" value="Sửa">  
                                <a href="'.$xoaurl.'">
                                    <input type="button" value="Xóa">
                                    </a> 
                             </td>
                        </tr>';
                }
            ?>
            
           </table>
           </div>
           <div class="row mb10 ">
            <input class="mr20" type="button" value="CHỌN TẤT CẢ">
            <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            <a href="index.php?act=themtt"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>