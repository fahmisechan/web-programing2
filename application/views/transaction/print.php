<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelian</title>
    <style>
        /* CSS untuk mengatur tampilan struk */
        body {
            font-family: Arial, sans-serif;
        }
        .struk {
            border: 1px solid #000;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            font-size: 20px;
        }
        .info-toko {
            font-size: 14px;
            text-align: center;
        }
        .baris-barang {
            display: flex;
            justify-content: space-between;
        }
        .total {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="struk">
        <div class="header">
            <h2>Toko Buku</h2>
            <p>Struk Pembelian</p>
        </div>
		<table class="table" style="width: 100%;">
			<tr>
				<td style="width: 25%;">Alamat :</td>
				<td colspan="3">Jalan Kamal Raya, RT.6/RW.3, Cengkareng Timur, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</td>
			</tr>
			<tr>
				<td>Telp :</td>
				<td colspan="3">(123) 456-7890</td>
			</tr>
			<tr >
				<td style="padding-bottom: 20px;" colspan="4">------------------------------------------------------</td>
			</tr>
			<?php foreach ($trxbook as $key => $value) { ?>
				<tr>
					<td><?php echo $key + 1; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['quantity']; ?></td>
					<td><?php echo $value['sub_total']; ?></td>
				</tr>
			<?php } ?>
			<tr>
				<td style="padding-bottom: 20px;" colspan="4">------------------------------------------------------</td>
			</tr>
		</table>
			
        <div class="baris-barang">
            <span>Total Harga:</span>
            <span>Rp <?php echo $trx->total ?></span>
        </div>
        <div class="baris-barang">
            <span>Voucher :</span>
            <span><?php echo $trx->voucher ?></span>
        </div>
        <p>-------------------------------</p>
        <div class="baris-barang total">
            <span>Total Bayar:</span>
            <span>Rp 90.000</span>
        </div>
        <p>-------------------------------</p>
        <p>Terima kasih atas kunjungan Anda!</p>
    </div>
</body>
</html>
