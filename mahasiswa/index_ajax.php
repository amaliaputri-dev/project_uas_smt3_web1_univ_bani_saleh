<?php session_start(); ?>
<h2>CRUD AJAX JSON</h2>
<input id="nim" placeholder="NIM">
<input id="nama" placeholder="Nama">
<button onclick="tambah()">Tambah</button>


<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody id="tbody"></tbody>
</table>


<script src="../assets/js/app.js"></script>