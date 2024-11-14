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
                        <th>Userame</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Gender</th>
                        <th>Date of birth</th>
                        <th>Created at</th>
                        <th>Modified at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($allUsers as $key => $user) :?>
                        <tr>
                            <th scope="row"><?= $key + 1?></th>
                            <td><?= $user['username']?></td>
                            <td><?= $user['firstname']?></td>
                            <td><?= $user['lastname']?></td>
                            <td><?= $user['gender']?></td>
                            <td><?= $user['date_of_birth']?></td>
                            <td><?= $user['created_at']?></td>
                            <td><?= $user['modified_at']?></td>
                            <td>
                                <a href="<?= "/" . ADMIN_URL . "/users/delete?account_id=" . $user['id'] ?>"><button class="mb-2 mr-2 btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
