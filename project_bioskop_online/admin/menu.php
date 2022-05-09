<?php
if (isset($_SESSION['level']) == "") {
    $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
    header("Location: ../login.php");
}

if (isset($_GET['page'])) {

    include '../lib/koneksi.php';

    $page = $_GET['page'];

    switch ($page) {
        case 'dashboard':
            include 'dashboard.php';
            break;

        case 'film':
            include 'film/index.php';
            break;

        case 'film_create':
            include 'film/create.php';
            break;

        case 'film_store':
            include 'film/store.php';
            break;

        case 'film_edit':
            include 'film/edit.php';
            break;

        case 'film_update':
            include 'film/update.php';
            break;
        case 'film_delete':
            include 'film/delete.php';
            break;
        case 'user':
            include 'user/index.php';
            break;
        case 'user_create':
            include 'user/create.php';
            break;
        case 'user_store':
            include 'user/store.php';
            break;
        case 'user_edit':
            include 'user/edit.php';
            break;
        case 'user_update':
            include 'user/update.php';
            break;
        case 'user_delete':
            include 'user/delete.php';
            break;
        case 'studio':
            include 'studio/index.php';
            break;
        case 'studio_create':
            include 'studio/create.php';
            break;
        case 'studio_store':
            include 'studio/store.php';
            break;
        case 'studio_edit':
            include 'studio/edit.php';
            break;
        case 'studio_update':
            include 'studio/update.php';
            break;
        case 'studio_delete':
            include 'studio/delete.php';
            break;
        case 'tiket':
            include 'tiket/index.php';
            break;
        case 'tiket_create':
            include 'tiket/create.php';
            break;
        case 'tiket_store':
            include 'tiket/store.php';
            break;
        case 'tiket_edit':
            include 'tiket/edit.php';
            break;
        case 'tiket_update':
            include 'tiket/update.php';
            break;
        case 'tiket_delete':
            include 'tiket/delete.php';
            break;
        case 'jadwal':
            include 'jadwal/index.php';
            break;
        case 'jadwal_create':
            include 'jadwal/create.php';
            break;
        case 'jadwal_store':
            include 'jadwal/store.php';
            break;
        case 'jadwal_edit':
            include 'jadwal/edit.php';
            break;
        case 'jadwal_update':
            include 'jadwal/update.php';
            break;
        case 'jadwal_delete':
            include 'jadwal/delete.php';
            break;
        case 'transaksi':
            include 'transaksi/index.php';
            break;
        case 'transaksi_create':
            include 'transaksi/create.php';
            break;
        case 'transaksi_store':
            include 'transaksi/store.php';
            break;
        case 'transaksi_edit':
            include 'transaksi/edit.php';
            break;
        case 'transaksi_update':
            include 'transaksi/update.php';
            break;
        case 'transaksi_delete':
            include 'transaksi/delete.php';
            break;
        default:
            echo "404 Not Found";
            break;
    }
} else {
    include 'dashboard.php';
}