<?php
/*
Template Name: Usuarios
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>



<div id="principal">
  <h1>Usuários Cadastrados</h1>

  <div class="container">

    <div class="conteudo">
        <table id="usuarios-cadastrados">
            <thead>
                <tr>            
                    <th>Cadastro</th>       
                    <th>Nome / Razão Social</th>
                    <th>CPF / CNPJ</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                    <th>Ramo de Atividade</th>
                    <th>UF</th>
                    <th>Aceite</th>
                </tr>
            </thead>
            <tbody>        
                <?php
                    $blogusers = get_users( array( 'role__in' => array( 'subscriber' ) ) );                       

                    foreach ( $blogusers as $user ) {                     
                    $user_id = $user->ID;
                    $user_email = $user->user_email;

                    //$udata = get_userdata( $user->ID );
                    $registered = $user->user_registered;
                    $date = date( "j\/m\/Y", strtotime( $registered ) )
                ?>
                    <tr>      
                        <td><?php echo $date; ?></td>                  
                        <td><?php echo the_field('nome_completo', 'user_'.$user_id); ?> <?php echo the_field('razao_social', 'user_'.$user_id); ?></td>
                        <td><?php echo the_field('cpf', 'user_'.$user_id); ?> <?php echo the_field('cnpj', 'user_'.$user_id); ?></td>
                        <td><?php echo  esc_html( $user_email ); ?> </td>
                        <td><?php echo the_field('celular', 'user_'.$user_id); ?></td>
                        <td><?php echo the_field('ramo_de_atividade', 'user_'.$user_id); ?></td>
                        <td><?php echo the_field('estado', 'user_'.$user_id); ?></td>
                        <td><?php echo the_field('aceite', 'user_'.$user_id); ?></td>
                    </tr>                        
                <?php } ?>                
            </tbody>
        </table>

        <p><a href="#" id="download">Faça o Download <i class="fa-solid fa-download"></i></a></p>

    </div>
    
  </div>
</div><!-- principal -->



<?php get_footer(); ?>