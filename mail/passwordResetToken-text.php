<?php
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>

    Hello <?= $user->email ?>,
    Follow the link below to reset your password:

<?= $resetLink ?>