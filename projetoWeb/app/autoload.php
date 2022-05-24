<?php //Montar o caminho e vê se existe

    spl_autoload_register(
        function ($classe){
                $diretorios = [
                 'Libraries',
                 'Controllers'

                ];
                foreach($diretorios as $diretorio):
                    $arquivo = __DIR__.DIRECTORY_SEPARATOR. //Constatne mágica denvolve esse caminho gravadi
                    $diretorio.DIRECTORY_SEPARATOR.$classe. '.php';
                    if(file_exists($arquivo)):
                        require_once($arquivo);
                    endif;
                    

                endforeach;

        }


    );
?>