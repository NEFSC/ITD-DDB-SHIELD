
<?= $this->include('Layouts/header') ?>
<?= $this->include('Layouts/navbar') ?>

    <h1><?= $title ?></h1>

<?php if (isset($users)): ?>
    <div class="card" style="inline-size: 18rem;">


        <?php foreach ($users as $user): ?>
            <div class="card-header">
                <?= $user->email ?>
            </div>
            <div class="card-body">
                <?php foreach ($user->getGroups() as $group): ?>
                    <span class="badge badge-primary text-bg-primary"><?= $group ?></span>
                <?php endforeach ?>
                <span class="badge badge-secondary text-bg-secondary">Edit</span>
            </div>
        <?php endforeach ?>
        <div class="card-footer">
            <a href="#" class="btn btn-primary">Groups & Permissions</a>
        </div>
    </div>

    <?php endif ?>

    <?= $this->include('Layouts/footer') ?>

