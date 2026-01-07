const API = '../mahasiswa/json.php';


function loadData() {
fetch(API)
.then(res => res.json())
.then(res => {
let html = '';
res.data.forEach((m,i) => {
html += `<tr>
<td>${i+1}</td>
<td>${m.nim}</td>
<td>${m.nama}</td>
<td>
<button onclick="hapus(${m.id})">Hapus</button>
</td>
</tr>`;
});
document.getElementById('tbody').innerHTML = html;
});
}


function tambah() {
fetch(API, {
method: 'POST',
headers: {'Content-Type':'application/json'},
body: JSON.stringify({
nim: document.getElementById('nim').value,
nama: document.getElementById('nama').value
})
}).then(()=>loadData());
}


function hapus(id) {
fetch(API, {
method: 'DELETE',
headers: {'Content-Type':'application/json'},
body: JSON.stringify({id:id})
}).then(()=>loadData());
}


loadData();