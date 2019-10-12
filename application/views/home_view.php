<div id="home" class="home">
    <section class="carousel-default">
        <div id="carousel-default" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-1.jpg" alt="Banner">
                </div>
                <!-- <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-1.jpg" alt="Banner">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-1.jpg" alt="Banner">
                </div> -->
            </div>
        </div>
    </section>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <img class="img-responsive animated bounceInLeft" src="<?= base_url(); ?>assets/images/canaan-logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div id="nosso-cafe" class="nosso-cafe">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <img class="img-responsive mx-auto cafe" src="<?= base_url(); ?>assets/images/graos-de-cafe.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>NOSSO</h1>
                <h1>CAFÉ</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h3>escolha mais sabor para o seu dia.</h3>
                <p> Se você é apaixonado por café como nós, também
                    não abre mão dele no seu dia a dia. De manhã, após
                    o almoço e nas pausas no meio do expediente, um bom
                    café é sempre uma ótima pedida. Desde 1950, o <strong>Café Canaan</strong>
                    tem dado mais sabor ao dia de milhares de famílias. Gente
                    que reconheceu no <strong>Café Canaan</strong> mais que um café, mas uma companhia para seus momentos de paz, harmonia e felicidade.
                    A grande notícia é que agora o nosso café está com novo sabo
                    e nova embalagem. Afinal, tradição também se renova. E isso
                    merece uma comemoração. Vamos erguer nossas xícaras
                    e brindar a dias mais saborosos!</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 padding-off">
        <img class="img-responsive bg-cafe" src="<?= base_url(); ?>assets/images/maos-na-colheita.png" alt="">
    </div>
</div>

<div id="nossos-produtos" class="nossos-produtos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h1>NOSSOS</h1>
                    <h1>PRODUTOS</h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3>CONHEÇA TODA A FAMÍLIA CANAAN.</h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 produtos-participantes">
                    <section class="slick_produtos slider text-center">
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produtos/1.png">
                            <p>aaaaa</p>
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produtos/2.png">
                            <p>aaaaa</p>
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produtos/3.png">
                            <p>aaaaa</p>
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produtos/1.png">
                            <p>aaaaa</p>
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produtos/2.png">
                            <p>aaaaa</p>
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produtos/3.png">
                            <p>aaaaa</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contato" class="contato animated wow slideInUp">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <img class="img-responsive mx-auto cafe-contato" src="<?= base_url(); ?>assets/images/graos-po-xicara-de-cafe.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 text-center">
                <h1>Contato</h1>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 text-center">
                <h3>para pedidos, sugestões ou dúvidas,
                    esse é o seu espaço.</h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-md-6 padding-off-mobile form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="NOME*" />
                        </div>
                        <div class="col-xs-12 col-md-6 padding-off-mobile form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="EMAIL*" />
                        </div>
                        <div class="col-xs-12 col-md-7 padding-off-mobile form-group">
                            <input id="interesse" type="text" class="interesse form-control" name="interesse" placeholder="ASSUNTO" />
                        </div>
                        <div class="col-xs-12 col-md-5 padding-off-mobile form-group">
                            <input id="telefone" class="phone form-control" type="tel" name="phone" placeholder="TEL." />
                        </div>
                        <div class="col-xs-12 col-md-9 padding-off-mobile form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" placeholder="MENSAGEM"></textarea>
                        </div>
                        <div class="col-xs-12 col-md-3 padding-off-mobile form-group">
                            <button type="submit" class="btn_enviar enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <ul class="nav">
                    <li class="titulo">TORRADOS E MOÍDOS</li>
                    <li><a href="#">TRADICIONAL</a></li>
                    <li><a href="#">EXTRA FORTE</a></li>
                    <li><a href="#">PREMIUM</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <ul class="nav nav-pills nav-stacked">
                    <li class="titulo">SOLÚVEIS</li>
                    <li><a href="#">TRADICIONAL</a></li>
                    <li><a href="#">extraforte</a></li>

                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <ul class="nav nav-pills nav-stacked">
                    <li class="titulo">CáPSULAS</li>
                    <li><a href="#">levíssimo</a></li>
                    <li><a href="#">intenso</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-12 col-md-2">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/cafex.png">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 fale-conosco">
                    <h3>fale conosco</h3>
                    <p>Cafex Indústria e Comércio de Produtos Alimentícios Ltda.</p>
                    <p>CNPJ: 15.373.003/0002-29</p>
                    <p>Rua da Cevada, nº 93 – Sala 303 - Penha Circular</p>
                    <p>Rio de Janeiro/RJ – CEP 21011-080</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/SAC.png">
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>