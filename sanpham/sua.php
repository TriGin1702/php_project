<?php
    $id = $_GET['id'];
    $sql_brand = "SELECT * FROM brands";
    $query_brand = mysqli_query($connect, $sql_brand);
    $sql_up = "SELECT * FROM products where prd_id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    if($row_up){

        if(isset($_POST['sbm'])){
            $prd_name = $_POST['prd_name'];
            if($_FILES['image']['name']==''){
                $image = $row_up['image'];
            }else{
                // $image = $row_up['image'];
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($image_tmp, 'image'.$image);
            }
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            $brand_id = $_POST['brand_id'];
            $sql = "UPDATE products SET prd_name = '$prd_name', image = '$image', price = $price, 
            quantity = $quantity, description = '$description', brand_id = $brand_id where prd_id = $id ";
            $query = mysqli_query($connect, $sql);
            header('location: index.php?page_layout=danhsach');
    
        }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm </h2>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="prd_name" class="form-control" required value="<?php echo $row_up['prd_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control"required value='' >
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" required value="<?php echo $row_up['price']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="quantity" class="form-control" required value="<?php echo $row_up['quantity']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="description" class="form-control" required value="<?php echo $row_up['description']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Thương hiệu</label>
                    <select class="form-control" name="brand_id" >
                        <?php
                            while ($row_brand = mysqli_fetch_assoc($query_brand)){?>
                                <option value="<?php echo $row_brand['brand_id']; ?>"><?php echo $row_brand['brand_name']; ?></option>
                            <?php } ?>
                    </select>   
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>