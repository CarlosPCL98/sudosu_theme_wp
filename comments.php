<h5>Comentarios ... <?php comments_number('deja el primer comentario!','Hay un comentario ','% comentarios') ?></h5>
<hr>

<!--Formulario de comentarios -->
<?php
    comment_form();
?>
<!--Fin formulario de comentarios -->


<!--Comentarios -->
<?php 
    wp_list_comments(array(
        'callback'=> function($comment, $args, $depth){
            ?> 
                <div class="media">
                
                <div class="mr-3">
                    <?php
                        //Ver imagen de quien publico el comentario
                        if ( $args['avatar_size'] != 0 ) {
                            echo get_avatar( $comment, $args['avatar_size'] ); 
                        } 
                    ?>
                </div>
                <div class="media-body mb-2">

                    <h5 class="mt-0">
                        <?php //Nombre del autor + dice
                            printf( __( '<cite class="fn">%s</cite> <span class="says">dice:</span>' ), get_comment_author_link() );
                         ?>
                    </h5>

                    <?php //Validacion de comentarios
                        if ( $comment->comment_approved == '0' ) { ?>
                            <em class=""><?php _e( 'Tu comentario esta a la espera de ser aprobado' ); ?></em><br/><?php 
                        } ?>

                    <?php //Muestra comentario 
                        comment_text() 
                    ?>

                    <span>
                        <?php //Responder comentario
                            comment_reply_link( 
                                array_merge( 
                                    $args, 
                                    array( 
                                        'reply_text' => 'Responder', 
                                        'depth'     => $depth, 
                                        'max_depth' => $args['max_depth'] 
                                    ) 
                                ) 
                            ); 
                        ?>
                    </span>

                    <span>
                        <?php //Editar comentario
                            edit_comment_link( __( 'Editar' ), '  ', '' ); 
                        ?>
                    </span>

                </div>
                </div>           
            <?php
        }
    )); 
?>

<!-- Fin de comentarios -->
