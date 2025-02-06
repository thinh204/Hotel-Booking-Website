<?php

    function redirect($url) {
        if (!headers_sent()) {
            header("Location: $url");
            exit;
        } else {
            echo "<script>window.location.href='$url';</script>";
            exit;
        }
    }

    function alert($type, $msg) {
        $bs_class = match ($type) {
            "success" => "alert-success",
            "error"   => "alert-danger",
            "warning" => "alert-warning",
            default   => "alert-info"
        };
    
        echo <<<HTML
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        HTML;
    }



?>