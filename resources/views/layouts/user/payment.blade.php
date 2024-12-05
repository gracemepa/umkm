@extends('layouts.user.appcopy')

@section('title', 'Konfirmasi Pembelian')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-4">
                <h3 class="content-header-title text-success font-weight-bold">Metode Pembayaran</h3>
                <p class="lead text-muted" style="font-size: 1.1rem;">Silakan lakukan pembayaran ke nomor rekening di bawah ini dan unggah bukti pembayaran Anda.</p>
            </div>
        </div>

        <!-- Formulir Metode Pembayaran -->
        <div class="row">
            <div class="col-md-6">
                <p>Transfer ke nomor rekening berikut an. Syailendra |Bank BCA|</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="1234567890" id="rekening" readonly>
                    <div class="input-group-append">
                        <button class="btn btn-primary" onclick="copyToClipboard()">Salin</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="proof">Unggah Bukti Pembayaran:</label>
                        <input type="file" name="proof" class="form-control" required>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Kirim Bukti Pembayaran</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function copyToClipboard() {
        var copyText = document.getElementById("rekening");
        copyText.select();
        document.execCommand("copy");
        alert("Nomor rekening telah disalin!");
    }
</script>
@endsection
