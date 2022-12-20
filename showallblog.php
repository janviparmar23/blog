<?php
include_once('includes/blog.php');
$user = new blog();
$blogs = $user->allBlog();
?>
<?php foreach ($blogs as $blog) : ?>
    <div>
        <table class="blogitem-blog">
            <tr>
                <td>
                    <h3><?php echo $blog['title']; ?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <img src='/Blog/images/<?php echo $blog['image']; ?>' class="myimg" />
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $a = strlen($blog['content']);
                    if ($a > 50) {
                        echo substr($blog['content'], 0, 25) . " .. "; ?>
                    <?php
                    } else {
                        echo $blog['content'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <div class="text-center">
                <td><div class="text-center"><a class="btn btn-edit" href="/Blog/detail.php?action=detail&id=<?php echo $blog['id']; ?>">Detail</a></div></td></div>
            </tr>

        </table>
    </div>
<?php endforeach; ?>