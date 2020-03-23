<header>
    <nav class="navbar  navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCanaan">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="img-responsive visible-xs logo-mobile" src="<?= base_url(); ?>assets/images/logo.png" alt="Canaan">
        </div>
        <div class="collapse navbar-collapse" id="navbarCanaan">
            <ul class="nav navbar-nav">
                <li><a class="dt" href="http://canaan.com.br/#nossa-historia">Nossa História</a></li>
                <li><a href="http://canaan.com.br/#nossos-produtos">Nossos Produtos</a></li>
                <li>
                    <a class="logo" href="http://canaan.com.br/">
                        <img class="img-responsive" src="<?= base_url(); ?>assets/images/logo.png" alt="Canaan">
                    </a>
                </li>
                <li><a href="http://canaan.com.br/#contato">Fale Conosco</a></li>
                <li><a href="http://canaan.com.br/#pedidos">Pedidos</a></li>
            </ul>
        </div>
    </nav>
</header>

<div id="home" class="home">
    <section class="carousel-default">
        <div id="carousel-default" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-zeca-1.jpg" alt="Zeca">
                </div>
                <div class="item">
                    <img class="img-responsive" src="<?= base_url(); ?>assets/images/banner-zeca-2.jpg" alt="Zeca">
                </div>
            </div>
        </div>
    </section>
    <div class="text-center avisos">
        <div>
            <p>Obrigado pelas informações.<br />
                Já entraremos em contato para um <strong>atendimento exclusivo!</strong></p>
        </div>
    </div>
</div>

<div class="video">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p>
                    Confira o filme e entre No ritmo do café canaan.
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <video width="100%" height="auto" controls>
                    <source src="<?= base_url(); ?>assets/video/video.mp4" type="video/mp4">
                    <source src="<?= base_url(); ?>assets/video/video.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <span id="nossa-historia"></span>
</div>

<div class="nossa-historia">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-5 hidden-xs hidden-sm">
                <img class="img-responsive zeca" src="<?= base_url(); ?>assets/images/zeca-nossa-historia.png" alt="Zeca">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 padding-off dt">
                <img class="img-responsive tt" src="<?= base_url(); ?>assets/images/tt-nossa-historia.png" alt="Zeca">
                <p>Se você é apaixonado por café como nós, também não abre mão dele no seu dia a dia.
                    De manhã, após o almoço e nas pausas no meio do expediente, um bom café é sempre
                    uma ótima pedida. Desde 1950, o Café Canaan tem dado mais sabor ao dia de milhares
                    de famílias. Gente que reconheceu no Café Canaan mais que um café, mas uma companhia
                    para seus momentos de paz, harmonia e felicidade. A grande notícia é que agora o nosso
                    Canaan está com novo sabor, nova embalagem e novos formatos. Afinal, tradição também se renova.
                    E isso merece uma comemoração. <span id="nossos-produtos"></span> Vamos erguer nossas xícaras e brindar a dias mais saborosos!</p>
                <p class="margin-top-5">Café Canaan. O sabor do nosso dia.</p>
            </div>
        </div>
    </div>
</div>

<div class="nossos-produtos container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="col-xs-12 col-sm-12 col-md-12 padding-off text-center">
                <img class="img-responsive center-block tt" src="<?= base_url(); ?>assets/images/tt-nossos-produtos.png" alt="Nossos Produtos">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 padding-off text-center">
                <div class="col-xs-6 col-sm-6 col-md-6 padding-off" data-toggle="modal" data-target="#linhaClassica" style="cursor: pointer">
                    <img class="img-responsive produto-1" src="<?= base_url(); ?>assets/images/produtos/produto-1.png">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 padding-off" data-toggle="modal" data-target="#linhaClassica" style="cursor: pointer">
                    <img class="img-responsive produto-2" src="<?= base_url(); ?>assets/images/produtos/produto-2.png">
                </div>
                <p class="lg-1">Embalagens - 250g e 500g</p>
            </div>
            <div class="col-xs-12 margin-top-30 visible-xs"></div>
            <div class="col-xs-5 col-sm-3 col-md-3 padding-off text-center">
                <div class="col-xs-12 col-md-12 padding-off" data-toggle="modal" data-target="#linhaPremium" style="cursor: pointer">
                    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/produtos/produto-3.png">
                </div>
                <p class="lg-2">Embalagens pouch - 250g e 500g</p>
            </div>
            <div class="col-xs-7 col-sm-3 col-md-3 padding-off text-center">
                <div class="col-xs-6 col-sm-6 col-md-6 padding-off for" data-toggle="modal" data-target="#linhaEspresso" style="cursor: pointer">
                    <img class="img-responsive produto-4" src="<?= base_url(); ?>assets/images/produtos/produto-4.png">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 padding-off for" data-toggle="modal" data-target="#linhaEspresso" style="cursor: pointer">
                    <img class="img-responsive produto-5" src="<?= base_url(); ?>assets/images/produtos/produto-5.png">
                </div>
                <p class="lg-3">Embalagens com 10 cápsulas<br>
                    compatíveis com sistema nespresso</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-3">
            <img class="img-responsive zeca hidden-xs hidden-sm" src="<?= base_url(); ?>assets/images/zeca-nossos-produtos.png" alt="Zeca">
            <img class="img-responsive zeca-mobile center-block visible-xs" src="<?= base_url(); ?>assets/images/zeca-nossos-produtos-mobile.png" alt="Zeca">
        </div>
    </div>
</div>

<div id="contato" class="contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 padding-off">
                <img class="img-responsive tt" src="<?= base_url(); ?>assets/images/tt-nossos-contato.png" alt="Contato">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Nome*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="Email*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 form-group">
                            <input id="ass" type="text" class="ass form-control" name="ass" required="required" placeholder="Assunto*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-5 form-group">
                            <input id="telefone" class="phone form-control" type="tel" name="phone" placeholder="Telefone" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 form-group">
                            <textarea id="form-mensagem" class="msg form-control" name="mss" placeholder="Mensagem"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 form-group">
                            <button type="submit" class="btn_enviar btn center-block" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="pedidos" class="pedidos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 padding-off">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <img class="img-responsive tt" src="<?= base_url(); ?>assets/images/tt-pedidos.png" alt="Pedidos">
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 text-center">
                    <p class="texto se">FAÇA SEU PEDIDO: <a href="https://api.whatsapp.com/send?1=pt_BR&amp;phone=552125840204" target="_black"><img src="<?= base_url(); ?>assets/images/whatsapp.png"> (21) 2584-0204</a></p>
                    <p class="texto margin-top-5">VENDAS@CANAAN.COM.BR</p>
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <p class="endereco">AV. JOÃO CABRAL DE MELLO NETO, NÚMERO 850, BLOCO 3, SALA 1705, BARRA DA TIJUCA, RIO DE JANEIRO - RJ</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logo-footer.png" alt="Canaan">
            </div>
        </div>
    </div>
</footer>