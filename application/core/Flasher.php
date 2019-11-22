<?php

class Flasher
{

    public static function setFlash($message, $action, $message_type)
    {
        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'message_type' => $message_type,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['message_type'] . ' alert-dismissible fade show" role="alert">
            <strong>Data Mahasiswa</strong> ' . $_SESSION['flash']['message'] . ' ' . $_SESSION['flash']['action'] . '.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span>
            </button></div>';
            unset($_SESSION['flash']);
        }
    }
}
