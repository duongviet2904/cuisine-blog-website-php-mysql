<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div>
                <?php if($post){
                    echo "Edit post";
                }else{
                    echo "New post";
                } ?>

                <div class="page-title-subheading">
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">Action</button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Save
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= "/" . ADMIN_URL . "/posts/list" ?>" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Back
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Delete
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form class="" action="/adminbo/posts/create" method="POST" enctype="multipart/form-data">
                    <?php if($post) : ?>
                        <input type="hidden" value="<?= $post['id'] ?? ''?>" name="id">
                    <?php endif;?>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="title" class="">Title</label>
                                <input name="title" value="<?= $post['title'] ?? '' ?>" id="exampleEmail11" placeholder="Title" type="text" class="form-control"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="thumbnail" class="">Thumbnail</label>
                                <input name="thumbnail" id="thumbnail" type="file" class="form-control-file">
                                <?php if($post) : ?>
                                <img src="/<?php echo htmlspecialchars($post['thumbnail']); ?>" class="img-fluid rounded-start" alt="Thumbnail" style="width: 300px;">
                                <p><?php echo htmlspecialchars($post['thumbnail']); ?></p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative form-group">
                        <label for="content" class="">Content</label>
                        <textarea name="content" id="summernote" class="form-control"><?= $post['content'] ?? '' ?></textarea>
                    </div>
                    <div class="position-relative form-group">
                        <label for="description" class="">Description</label>
                        <input name="description" id="description" type="text" class="form-control-file">
                    </div>
                    <div class="position-relative form-group">
                        <label for="slug" class="">Slug</label>
                        <input name="slug" disabled  placeholder="If this field is empty, it will be generated automatically" type="text" class="form-control">
                    </div>
                    <button class="mt-2 btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
