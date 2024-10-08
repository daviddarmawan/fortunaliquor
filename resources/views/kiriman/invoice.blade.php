
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice {{ str_replace('_', ' ', $order->langganan_id) }}</title>
    <link rel="stylesheet" href="{{ URL ('invoice/style.css') }}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
      <img
										src="{{ URL ('images/fortuna.jpg') }}" alt=""
										style="width: 100%; max-width: 150px"
									/>
      </div>
      <h1>INVOICE F2909{{ $order->id }}</h1>
      <div id="company" class="clearfix">
        <div>FANIAGA</div>
        <div>Jakarta, Indonesia</div>
        <div>+62 856-5933-0416</div>
        <div><a href="mailto:daviddarmwan15@gmail.com">daviddarmwan15@gmail.com</a></div>
      </div>
      <div id="project">
        <div><span>CLIENT</span> {{ str_replace('_', ' ', $order->langganan_id) }}</div>
        <div><span>ADDRESS</span> {{ $order->langganan->alamat }}</div>
        <div><span>DATE</span> {{ $order->tanggal_pengiriman }}</div>
        <div><span>DUE DATE</span> {{ $order->tanggal_jatuh_tempo }}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        @foreach($order_details as $key => $order_details)
          <tr>
            <td class="desc">{{ str_replace('_', ' ', $order_details->keranjang->nama_produk) }}</td>
            <td class="unit">Rp. {{ number_format($order_details->keranjang->harga_produk)}}</td>
            <td class="qty">{{$order_details->jumlah}}btl</td>
            <td class="total">Rp. {{ number_format($order_details->jumlah_harga)}}</td>
          </tr>
          @endforeach
          <tr>
            <td colspan="3" class="grand total">GRAND TOTAL</td>
            <td class="grand total">Total : Rp. {{ number_format($order->jumlah_harga)}}</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div><b>NOTICE:</b></div>
        <div class="notice"> <br>
        <b>DETAIL PEMBAYARAN</b> <br>
        <b>NAMA BANK : DAVID SETIA DARMAWAN (BCA)</b> <br>
        <b>CABANG BANK : SALATIGA</b> <br>
        <b>NOMOR AKUN BANK 013-107-6206</b> <br>
      </div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>