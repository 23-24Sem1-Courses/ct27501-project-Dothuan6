<h3 class="text-dark mb-4 mt-5">Xóa tài khoản</h3>
<form action="" method="post" class="mt-5">
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" class="form-control btn btn-outline-dark" name="delete" value="Xóa tài khoản">
    </div>
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" class="form-control btn btn-outline-dark" name="dont_delete" value="Không xóa tài khoản">
    </div>
</form>
<?php
deleteAccount();
?>