<?php include_once __DIR__ . '/header.php' ?>
<div class='container'>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Parent_Id</th>
      <th scope="col">Id</th>
    </tr>
  </thead>
  <?php if($categories=getCategory()){?>
    <tbody>
                <?php foreach ($categories as $category) { ?>
                <tr><select>
                <option><td><?= $category['name'] ?></td></option>
                <option><td><?= $category['Parent_Id'] ?></td></option>
                <option><td><?= mb_substr($category['Id'], 0, 10) . '...' ?></td></option>
                </tr></select>
                <?php } ?>
            </tbody>
        <?php } else { ?>
            <tr>
                <td colspan="3">Empty Table</td>
            </tr> 
        <?php } ?>
    </table>
</div>
<?php include_once __DIR__ . '/footer.php' ?>