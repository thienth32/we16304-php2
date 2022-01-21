<?php
// 1. tạo kết nối php => mysql
$connect = new PDO("mysql:host=127.0.0.1;dbname=we16304-php2;charset=utf8", "root", "12345678");
// 2. chuẩn bị câu sql để truy vấn dữ liệu
$sql = "select 
            p.*,
            u.name as author_name,
            (select count(*) from comments where post_id = p.id) as count_comment
        from posts p
        join users u
        on p.author_id = u.id";
// 3. thực thi câu truy vấn
$stmt = $connect->prepare($sql);
$stmt->execute();
// 4. lấy data từ kết quả trả về của câu truy vấn
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 5. hiển thị kết quả
// echo "<pre>";
// var_dump($posts);die;
?>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Author name</th>
        <th>Comment</th>
    </thead>
    <tbody>
        <?php foreach($posts as $p ):?>
            <tr>
                <td><?= $p['id']?></td>
                <td><?= $p['title']?></td>
                <td><?= $p['author_name']?></td>
                <td><?= $p['count_comment']?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>