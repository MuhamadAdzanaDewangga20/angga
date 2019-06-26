 <!-- modal -->
  <div class="modal" tabindex="-1" role="dialog" id="ModalTransaksi">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data</h5>
        </div>
        <div class="modal-body">
          <form id="TambahTran">
            <div class="form-group">
              <label for="NoTransaksi">No Transaksi</label>
              <input type="text" class="form-control" id="NoTransaksi" name="NoTransaksi">
            </div>
            <div class="form-group">
              <label for="JudulBuku">Judul Buku</label>
              <div class="row">
                <select class="form-control col-md-10 ml-3" id="JudulBuku" name="JudulBuku" onchange="tampil($('#JudulBuku').val())"></select>
              </div>
            </div>
            <div class="form-group">
              <label for="NamaPengarang">Nama Pengarang</label>
              <input type="text" class="form-control" id="NamaPengarang" name="NamaPengarang" disabled>
            </div>
            <div class="form-group">
                <label for="LamaPinjam">Lama Pinjam</label>
                <input type="email" class="form-control" id="LamaPinjam" name="LamaPinjam" placeholder="Berapa Hari Anda Pinjam......">
            </div>
            <div class="form-check">
              <label for="exampleRadios1" style="margin-left: -18px;">Status</label>
              <div>
                <input class="form-check-input" type="radio" name="Status" id="Pinjam" value="Pinjam" checked>
                <label class="form-check-label mr-4" for="Pinjam">
                  Pinjam
                </label>
                <input class="form-check-input" type="radio" name="Status" id="Kembali" value="Kembali">
                <label class="form-check-label" for="Kembali">
                  Kembali
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="TambahData()">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

   <!--Ubah modal -->
  <div class="modal" tabindex="-1" role="dialog" id="UbahModalTransaksi">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data</h5>
        </div>
        <div class="modal-body">
          <form id="UbahTran">
            <div class="form-group">
              <label for="NoTransaksiUbah">No Transaksi</label>
              <input type="text" class="form-control" id="NoTransaksiUbah" name="NoTransaksiUba">
            </div>
            <div class="form-group">
              <label for="JudulBukuUbah">Judul Buku</label>
              <select class="form-control" id="JudulBukuUbah" name="JudulBukuUbah" onchange="tampil($('#JudulBukuUbah').val())"></select>
            </div>
            <div class="form-group">
              <label for="TanggalPinjam">Tanggal Pinjam</label>
              <input type="date" class="form-control" id="TanggalPinjam" name="TanggalPinjam">
            </div>
            <div class="form-group">
                <label for="LamaPinjamUbah">Lama Pinjam</label>
                <input type="email" class="form-control" id="LamaPinjamUbah" name="LamaPinjamUbah" placeholder="Berapa Hari Anda Pinjam......">
            </div>
            <div class="form-check">
              <label style="margin-left: -18px;">Status</label>
              <div>
                <input class="form-check-input" type="radio" name="StatusUbah" id="PinjamUbah" value="Pinjam">
                <label class="form-check-label mr-4" for="Pinjam">
                  Pinjam
                </label>
                <input class="form-check-input" type="radio" name="StatusUbah" id="KembaliUbah" value="Kembali">
                <label class="form-check-label" for="Kembali">
                  Kembali
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="Edit()">Ubah</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal buku -->
  <div class="modal" tabindex="-1" role="dialog" id="TambahBuku">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Data Buku</h5>
        </div>
        <div class="modal-body">
          <form id="UbahTran">
            <div class="form-group">
              <label for="NoTransaksiUbah">No Transaksi</label>
              <input type="text" class="form-control" id="NoTransaksiUbah" name="NoTransaksiUba">
            </div>
            <div class="form-group">
              <label for="JudulBukuUbah">Judul Buku</label>
              <select class="form-control" id="JudulBukuUbah" name="JudulBukuUbah" onchange="tampil($('#JudulBukuUbah').val())"></select>
            </div>
            <div class="form-group">
              <label for="TanggalPinjam">Tanggal Pinjam</label>
              <input type="date" class="form-control" id="TanggalPinjam" name="TanggalPinjam">
            </div>
            <div class="form-group">
                <label for="LamaPinjamUbah">Lama Pinjam</label>
                <input type="email" class="form-control" id="LamaPinjamUbah" name="LamaPinjamUbah" placeholder="Berapa Hari Anda Pinjam......">
            </div>
            <div class="form-check">
              <label style="margin-left: -18px;">Status</label>
              <div>
                <input class="form-check-input" type="radio" name="StatusUbah" id="PinjamUbah" value="Pinjam">
                <label class="form-check-label mr-4" for="Pinjam">
                  Pinjam
                </label>
                <input class="form-check-input" type="radio" name="StatusUbah" id="KembaliUbah" value="Kembali">
                <label class="form-check-label" for="Kembali">
                  Kembali
                </label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="Edit()">Ubah</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>