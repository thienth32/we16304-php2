<p><?php global $router; echo $router->route('subject.index')?></p>
<form action="" method="post">
    <div>
        <label for="">Tên danh mục</label>
        <input type="text" name="name">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>