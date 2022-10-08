<h5 class="text-dark title-post text-break || mt-md-3 mb-md-2 mt-lg-2 || mb-sm-2 mt-2 "><?php $lang = get_bloginfo("language"); //Tranlate comments 10/01/22 :) updating website
                            if($lang == 'es') {
                                $x1 = 'Deja el primer comentario!';
                                $x2 = 'Hay un comentario ';
                                $x3 = '% comentarios';
                                $x4 = 'Comentarios ...';
                            }else {
                                $x1 = 'Leave the first comment!-';
                                $x2 = 'There is a comment ';
                                $x3 = '% comments';
                            };
                            
echo $x4; comments_number($x1,$x2,$x3);

?></h5>

<hr class="my-2">

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
                            $lang = get_bloginfo("language"); //Tranlate comments 10/01/22 :) updating website
                            if($lang == 'es') {
                                printf( __( '<cite class="fn">%s</cite> <span class="says">dice:</span>' ), get_comment_author_link() );
                            }else {
                                printf( __( '<cite class="fn">%s</cite> <span class="says">say:</span>' ), get_comment_author_link() );
                            };
                         ?>
                    </h5>

                    <?php //Validacion de comentarios
                        if ( $comment->comment_approved == '0' ) { ?>
                            <em class=""><?php
                            
                            $lang = get_bloginfo("language"); //Tranlate comments 10/01/22 :) updating website
                            if($lang == 'es') {
                                _e( 'Tu comentario esta a la espera de ser aprobado' ); 
                            }else {
                                _e( 'Your comment is waiting for approval' );
                            };
                    ?>        
                            
                            
                            
                            </em><br/><?php 
                        } ?>

                    <?php //Muestra comentario 
                        comment_text() 
                    ?>

                    <span>
                        <?php //Responder comentario
                        
                          $lang = get_bloginfo("language"); //Tranlate comments 10/01/22 :) updating website
                            if($lang == 'es') {
                                $reply = 'Responder'; 
                            }else {
                                $reply = 'Reply'; 
                            };
                        
                            comment_reply_link( 
                                array_merge( 
                                    $args, 
                                    array( 
                                        'reply_text' => $reply, 
                                        'depth'     => $depth, 
                                        'max_depth' => $args['max_depth'] 
                                    ) 
                                ) 
                            ); 
                        ?>
                    </span>

                    <span>
                        <?php //Editar comentario
                            $lang = get_bloginfo("language"); //Tranlate comments 10/01/22 :) updating website
                            if($lang == 'es') {
                                $edit = 'Editar'; 
                            }else {
                                $edit = 'Edit'; 
                            };
                            edit_comment_link( __( $edit ), '  ', '' ); 
                        ?>
                    </span>

                </div>
                </div>           
            <?php
        }
    )); 
?>

<!-- Fin de comentarios -->
