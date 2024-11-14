<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>List posts</div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a href="<?= "/" . ADMIN_URL . "/posts/form" ?>"><button class="mb-2 mr-2 btn btn-success">Create</button></a>
            </div>
        </div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Table bordered</h5>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>Slug</th>
                        <th>User ID</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Modified at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($allPosts as $key => $post) :?>
                        <tr>
                            <th scope="row"><?= $key + 1?></th>
                            <td><?= $post['title']?></td>
                            <td>
                                <img src="/<?php echo ($post['thumbnail']); ?>" class="img-fluid rounded-start" alt="Thumbnail" style="width: 100px">
                            </td>
                            <td><?= $post['slug']?></td>
                            <td><?= $post['users_id']?></td>
                            <td><?= $post['status']?></td>
                            <td><?= $post['created_at']?></td>
                            <td><?= $post['modified_at']?></td>
                            <td>
                                <a href="<?= "/" . ADMIN_URL . "/posts/form?post_id=" . $post['id'] ?>"><button class="mb-2 mr-2 btn btn-info">Edit</button></a>
                                <a href="<?= "/" . ADMIN_URL . "/posts/delete?post_id=" . $post['id'] ?>"><button class="mb-2 mr-2 btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>