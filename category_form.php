<?php include_once __DIR__ . '/header.php'<?php include_once __DIR__ . '/header.php'?>
<div class='container'></div>
    <form action='category_create.php' method='POST'>
        <aside>
            <div class='mb-3'>
            <label class='form-label'>Name</label>
            <input name='name'  type='text' class='form-control'><?=old['name'] ?? null?></input>
            </div>
            <div class='mb-3'>
            <label class='form-label'>Id</label>
            <input name='Id'  type='text' class='form-control'><?=old['Id'] ?? null?></input>
            </div>
            <div class='mb-3'>
            <label class='form-label'>ParentId</label>
            <input name='Parent_Id' type='text' class='form-control'><?=old['Parent_Id'] ?? null?></input>
            </div>
            <button type='submit' class='btn btn-primary'>Submit</button>
        </aside>
    </form>
<?php include_once __DIR__ . '/footer.php'?>
