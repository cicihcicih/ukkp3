const { constant, values } = require('lodash')

const form = document.querySelector('.form')
let ErrorMessage = []



function subTotal(harga, paket_id) {
    const total = harga * paket_id
    return total
}

function cekDiskon(subTotal) {
    let diskon 

    if (subTotal >= 50000){
        diskon = 25;
    } else if (subTotal >= 45000) {
        diskon = 20;
    } else if (subTotal >= 40000){
        diskon = 15;
    } else if (subTotal >= 35000){
        diskon = 10;
    } else if (subTotal >= 30000){
        diskon = 5;
    } else {
        diskon = 0;
    }
    return diskon

    function nilaiDiskon(harga, diskon){
        return harga * (diskon/100)
    }
    function jumlah(total, nilaiDis) {
        return total - nilaiDis
    }
    function validation(kodeinvoice, harga, qty, nama) {
        if (kodeinvoice == '') {
            ErrorMessage.push('Kode Barang Harus Diisi !!')
        }
        if (harga == '') {
            ErrorMessage.push('Harga Harus Tidak boleh nol !!')
        }
        if (qty == '') {
            ErrorMessage.push('Jumlah Tidak Boleh Nol !!')
        }
        if (nama) {
            ErrorMessage.push('Nama Paket Harus Diisi !!')
        }
    }
 }

    form.addEventListener('submit',('event') => {
        let kodeinvoice = document.getElementById('code').value;
        let harga = document.getElementById('price').value;
        let jumlahJual = document.getElementById('total').value;
        let namaPaket = document.getElementById('name').value;

        validation(kodeinvoice, harga, jumlahJual, namaPaket)

        if (ErrorMessage.length < 1) {
            const total = subTotal(harga, jumlahJual)
            const diskon = cekDiskon(total)
            const nilaiDis = nilaiDiskon(total, diskon)
            const totalBayar = jumlahPembayaran(total, nilaiDis)

            document.getElementById('subtotal').value = `Rp ${total},-`;
            document.getElementById('discount').value = `${diskon}%`;
            document.getElementById('total_discount').value = `Rp ${nilaiDis},-`;
            document.getElementById('total').value = `Rp ${totalBayar},-`;
            } else {
                alert(ErrorMessage.join('\n'))
                ErrorMessage = []
            }
})