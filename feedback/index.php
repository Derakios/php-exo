<?php include 'inc/header.php'; ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name" class="form-label">Nom</label>
    <input type="text" name="name" id="name" class="form-control">

    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control">

    <label for="body" class="form-label">Commentaire</label>
    <textarea name="body" id="body" class="form-control"></textarea>

    <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
</form>
<?php include 'inc/footer.php'; ?>