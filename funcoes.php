<?php
    function mensagemErro($msg) {
        ?>
        <script>
            Swal.fire({
            title: 'Oops...',
            text: '<?=$msg?>',
            }).then((result) => {
                history.back(); 
            })
        </script>
        <?php
        exit;
    }