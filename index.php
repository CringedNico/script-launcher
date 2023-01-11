<div class="container">
            <form method="POST">
                <div class="text-center mt-5">
                    <div class="d-grid gap-2">
                        <button type="submit" name="cedolino_dl" class="btn btn-primary btn-block">Cedolino DL</a>
                            <?php
                                if (isset($_POST['cedolino_dl'])) {
                                    exec("sudo -u root /home/nico/script/cedolino_dl.sh");
                                    header("Location: http://192.168.1.2/script-launcher/index.php");
                                }
                            ?>

                        <button type="submit" name="patching" class="btn btn-primary btn-block">Patching</a>
                            <?php
                                if (isset($_POST['patching'])) {
                                    exec("sudo -u root /home/nico/script/patch.sh");
                                    header("Location: http://192.168.1.2/script-launcher/index.php");
                                }
                            ?>

                        <button type="submit" name="reboot" class="btn btn-primary btn-block">Reboot</a>
                            <?php
                                if (isset($_POST['reboot'])) {
                                    exec("sudo -u root /home/nico/script/reboot.sh");
                                    header("Location: http://192.168.1.2/script-launcher/index.php");
                                }
                            ?>
                    </div>
                </div>
            </form>
        </div>
