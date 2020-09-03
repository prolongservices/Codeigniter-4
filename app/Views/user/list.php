<a class="btn btn-secondary mt-4" href="<?= base_url('user/add') ?>" role="button">Add user</a>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user): ?>
    <tr>
      <th scope="row"><?= $user['id'] ?></th>
      <td><?= $user['fname'] ?></td>
      <td><?= $user['lname'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['address'] ?></td>
      <td>
      <a class="btn btn-primary btn-sm" href="<?= base_url('user/update/' . $user['id']) ?>" role="button">Edit</a>
      <a class="btn btn-danger btn-sm" href="<?= base_url('user/delete/' . $user['id']) ?>" role="button">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>