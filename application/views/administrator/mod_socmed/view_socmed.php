<div class='col-md-12'>
    <div class='box box-info'>
        <div class='box-header with-border'>
            <h3 class='box-title'>Identitas Website</h3>
        </div>
        <div class='box-body'>
            <form action="<?= base_url('albums/socmed/' . $socmed['id']); ?>" method="POST">
                <div class='col-md-12'>
                    <table class='table table-condensed table-bordered'>
                        <tbody>
                            <input type='hidden' name='id' value='<?= $heading['id']; ?>'>
                            <tr>
                                <th width='120px' scope='row'>Instagram</th>
                                <td>
                                    <input type="text" class="form-control" name="instagram" value="<?= $socmed['instagram']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>Facebook</th>
                                <td>
                                    <input type='text' class='form-control' name='facebook' value="<?= $socmed['facebook']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>Youtube</th>
                                <td><input type='text' class='form-control' name='youtube' value="<?= $socmed['youtube']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>Whatsapp</th>
                                <td><input type='text' class='form-control' name='whatsapp' value='<?= $socmed['whatsapp']; ?>'></td>
                            </tr>
                            <tr>
                                <th scope='row'>Embed Instagram</th>
                                <td><input type='text' class='form-control' name='embed_ig' value='<?= $socmed['embed_ig']; ?>'></td>
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