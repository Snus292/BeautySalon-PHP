<?php ob_start(); ?>

<div class="container" style="min-height:400px;">
    <div class="col-md-11">

        <h2>Services Edit</h2>
        <?php
        if (isset($test)) {
            if ($test == true) {
        ?>
                <div class="alert alert-info">
                    <strong>Entry changed. </strong>
                    <a href="newsAdmin"> Services list</a>
                </div>
            <?php
            } else if ($test == false) {
            ?>
                <div class="alert alert-warning">
                    <strong>Error!</strong>
                    <a href="newsAdmin"> Services list</a>
                </div>
            <?php
            }
        } else {
            ?>
            <form method="POST" action="newsEditResult?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>News title</td>
                        <td>
                            <input type="text" name="title" class="form-control" required value="<?php echo $detail['title']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>News chtitle</td>
                        <td>
                            <input type="text" name="chtitle" class="form-control" required value="<?php echo $detail['title']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>News text</td>
                        <td>
                            <textarea rows="5" name="text" class="form-control" required><?php echo $detail['text']; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Category</td>
                        <td>
                            <select name="idCategory" class="form-control">
                                <?php
                                foreach ($arr as $row) {
                                    echo '<option value="' . $row['id'] . '"';
                                    if ($row['id'] == $detail['category_id']) echo 'selected';
                                    echo '>' . $row['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <!-- Image -->
                    <tr>
                        <td>Old Picture</td>
                        <td>
                            <div>
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($detail['picture']) . '" />'; ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>New Picture</td>
                        <td>
                            <div>
                                <input type="file" name="picture" id="pictureInput" style="color:black;">
                                <p id="fileHint" style="color:red; display:none;">Please select a file.</p>
                            </div>
                        </td>
                    </tr>
                    <!-- End image -->

                    <tr>
                        <td colspan="2">
                            <button type="submit" id="submitButton" class="btn btn-primary" name="save" disabled>
                                <span class="glyphicon glyphicon-edit"></span> Change
                            </button>

                            <a href="newsAdmin" class="btn btn-large btn-success">
                                <i class="glyphicon glyphicon-backward"></i> &nbsp;Back to list
                            </a>
                        </td>
                    </tr>

                </table>
            </form>
        <?php
        }
        ?>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var fileInput = document.getElementById('pictureInput');
        var submitButton = document.getElementById('submitButton');
        var fileHint = document.getElementById('fileHint');


        fileInput.addEventListener('change', function () {
            
            if (fileInput.files.length > 0) {
                submitButton.disabled = false;
                fileHint.style.display = 'none';
            } else {
                
                submitButton.disabled = true;
                fileHint.style.display = 'block';
            }
        });
    });
</script>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>
