<?php
//Template Name:Contato
?>
<?php
get_header();
?>
</div>
</section>
    <section class="contato">
        <div class="contato-empresa">
            <div class="contato-localizacao">
                <h2>A mais importante,<br>primeira conversa.</h2>
                <?php
                $pod = pods () ;
                echo $pod -> display ( 'campo_empresa' ) ;   
                ?>
                <div class="mapa-container" id="map"></div>
            </div><!--contato-localização-->

                <div class="contato-formulario">
                    <h2></h2>
                <form action="nome">
                <input type="text" id="fname" name="fname" placeholder="NOME"><br>
                <input type="text" id="fname" name="fname" placeholder="E-MAIL"><br>
                <input type="text" id="fname" name="fname" placeholder="TELEFONE"><br>
                <select name="caixaselecao">
                    <option>Geral</option>
                    <option>Geral</option>
                </select>
                <input type="text" id="fname" name="fname" placeholder="TELEFONE"><br>
                <textarea rows="10" cols="40" maxlength="500" placeholder="COMENTÁRIOS"></textarea>
                <div><input type="submit" value="Enviar!"></div>
            </form>
                
            </div><!--contato-formulario-->

        </div><!--contato-empresa-->
    </section><!--contato-->

    <?php
    get_footer();
?>