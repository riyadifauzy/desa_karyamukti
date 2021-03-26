<div class='col-md-12'>
    <div class='box box-info'>
        <div class='box-header with-border'>
            <h3 class='box-title'>Heading Website</h3>
        </div>
        <div class='box-body'>
            <form action="<?= base_url('main/heading/' . $heading['id']); ?>" method="POST">
                <div class='col-md-12'>
                    <table class='table table-condensed table-bordered'>
                        <tbody>
                            <input type='hidden' name='id' value='<?= $heading['id']; ?>'>
                            <tr>
                                <th width='120px' scope='row'>Desa / Kelurahan</th>
                                <td>
                                    <select name="desa_kelurahan" id="">
                                        <?php if ($heading['desa_kelurahan'] == 'Desa') : ?>
                                            <option value="Desa" selected>Desa</option>
                                            <option value="Kelurahan">Kelurahan</option>
                                        <?php elseif ($heading['desa_kelurahan'] == 'Kelurahan') : ?>
                                            <option value="Desa">Desa</option>
                                            <option value="Kelurahan" selected>Kelurahan</option>
                                        <?php endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>Nama Desa / Kelurahan</th>
                                <td>
                                    <input type='text' class='form-control' name='nama_desa_kelurahan' value="<?= $heading['nama_desa_kelurahan']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>Kecamatan</th>
                                <td><input type='text' class='form-control' name='kecamatan' value="<?= $heading['kecamatan']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>Kabupaten / Kota</th>
                                <td>
                                    <select name=" kab_kota" id="" value="<?= $heading['kabupaten_kota']; ?>">
                                        <?php if ($heading['kabupaten_kota'] == 'Kabupaten') : ?>
                                            <option value="Kabupaten" selected>Kabupaten</option>
                                            <option value="Kota">Kota</option>
                                        <?php elseif ($heading['kabupaten_kota'] == 'Kota') : ?>
                                            <option value="Kabupaten">Kabupaten</option>
                                            <option value="Kota" selected>Kota</option>
                                        <?php endif; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>Nama Kabupaten / Kota</th>
                                <td><input type='text' class='form-control' name='nama_kabupaten_kota' value='<?= $heading['nama_kabupaten_kota']; ?>'></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href="<?= base_url(' administrator/home'); ?>"><button type='button' class='btn btn-default pull-right'>Cancel</button></a>

                </div>
            </form>
        </div>
    </div>
</div> ;