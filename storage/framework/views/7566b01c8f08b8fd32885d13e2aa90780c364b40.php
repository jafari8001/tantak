# Authenticating requests

<?php if(!$isAuthed): ?>
This API is not authenticated.
<?php else: ?>
<?php echo $authDescription; ?>


<?php echo $extraAuthInfo; ?>

<?php endif; ?>
<?php /**PATH /home/sina/workfiles/php/laravel/Test/apm-base-laravel/vendor/knuckleswtf/scribe/src/../resources/views//markdown/auth.blade.php ENDPATH**/ ?>