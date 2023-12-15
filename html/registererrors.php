
<?php if (count($registererrors) > 0) : ?>
    <div class="error">
        <?php foreach ($registererrors as $error) : ?>
            <p><?php echo  $error; ?></p>
            
        <?php endforeach ?>
    </div>

<?php endif ?>