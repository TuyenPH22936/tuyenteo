<div class="row">
            <div class="row frmtitle">
                <h1>Danh sách loai hàng</h1>
            </div>
            <div class="row frmcontent dsach">
                <div class="row mb10">
                   
                </div>
                <div class="row mb10">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Gía </th>
                            <th>Lượt xem</th>

                            <th></th>
                        </tr>
                        <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suadm= "index.php?act=suasp&id=" .$id;
                                $xoadm= "index.php?act=xoasp&id=" .$id; 
                               echo '<tr>
                                     <td><input type="checkbox" name="" id=""></td>
                                     <td>'.$id.'</td>
                                     <td>'.$ten.'</td>
                                     <td>'.$img.'</td>
                                     <td>'.$gia.'</td>
                                     <td>'.$luotxem.'</td>
                               <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                           </tr>';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chon">
                   <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>