
<?php
    get_header();
?>

    <?php
 $title= get_the_title();
 ?>
 <footer <?php if($title =='Contato') {echo 'style="padding:20px 0;"';}?>>
 <?php
 if($title != 'Contato'){
?>
    <section class="metodologia">
        <div class="center">
            <div class="chamada-titulo"><h2>Conheça nossa metodologia</h2></div><!--chamada-titulo-->
            <div class="chamada-texto"><p>O que acha de fazermos o que mais gostamos de fazer? Coversar!<br>
        Entre em contato por e-mail ou telefone</p></div><!--chamada texto-->
            <div class=" chamada-botao"><a target="blank" href="https://dankicode.com">Ver demonstração</a></div><!--chamada-botao-->
            
        </div><!--center-->
    </section><!--metodologia-->
    <?php
 }
 ?>
<section class="footer">
    <div class="rodape">
            <div class="footer-suporte"><h3>Suporte</h3>
            <a target="blank" href="https://dankicode.com">Blog <br></a>
            <a target="blank" href="https://dankicode.com">FAQ's</a>
        </div><!--footer-suporte-->
        <div class="footer-consultoria"><h3>Consultoria</h3>
            <a target="blank" href="https://dankicode.com">metodologia<br></a>
            <a target="blank" href="https://dankicode.com">Cases</a>
        </div><!--footer-suporte-->
        <div class="footer-empresa"><h3>Empresa</h3>
            <a target="blank" href="https://dankicode.com">Sobre<br></a>
            <a target="blank" href="https://dankicode.com">Politica de Privacidade</a>
        </div><!--footer-suporte-->
        <div class="footer-imagem"><img src="<?php echo get_theme_root_uri();?>/danki/image/home/pngs/logo-dummy.png" alt=""></div>
           
            
        </div><!--rodapé-->
    </section><!--footer-->
</footer>
    <?php
    wp_footer();
    ?>
    <script  src ="<?php echo get_theme_root_uri();?>/danki/js/node_modules/jquery/dist/jquery.js"> </script>
    <script  src ="<?php echo get_theme_root_uri();?>/danki/js/node_modules/jquery/dist/jquery.min.js"> </script>
    <script src=" https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAXRuiJ1zjPWCnn-hJLNCe_K1kf0v46eDY"></script>
    <script src="<?php echo get_theme_root_uri();?>/danki/js/map.js"></script>
    <script src="<?php echo get_theme_root_uri();?>/danki/js/function.js"></script>
    <script src="<?php echo get_theme_root_uri();?>/danki/slick/slick/slick.min.js"></script>

</body>
</html>