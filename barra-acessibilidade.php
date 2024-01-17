<div class="navbar-inner bg-dark" id="barra-de-acessibilidade">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-8 col">
                <ul class="nav nav-pills nav-anchor">
                    <span>
                        <a class="link-topo" href="#conteudo">Ir para o conteúdo [1]</a>
                    </span>
                        <span>
                            <a class="link-topo" href="#menu">Ir para o menu [2]</a>
                        </span>
                            <span>
                                <a class="link-topo" href="#footer">Ir para o rodapé [3]</a>
                            </span>
                                <span>
                                    <a href="#" id="altocontraste" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()"><i class="fa fa-adjust" aria-hidden="true"></i></a>
                                </span>
                                    <span>
                                        <a class="link-topo" style="margin-left: 5px;" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/acessibilidade/">Acessibilidade</a>
                                    </span>
                                </ul>
                            </div>

                                <div class="col-md-4 al-r col">
                                    <div class="second-container">
                                    <ul class="nav nav-pills">
                                        <span class="icone-topo text-white">
                                            <a id="increase-font" title="Aumentar fonte">A+</a>
                                        </span>
                                            <span class="icone-topo text-white">
                                                <a id="decrease-font" title="Diminuir fonte">A-</a>
                                            </span>
                                                <span>
                                                    <a class="link-topo" href="https://www.hml.tjrs.jus.br/novo/memorial-tjrs/mapa-do-site/">Mapa do Site</a>
                                                </span>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<script>
    document.addEventListener("keydown", function (event) {
        if (event.altKey) {
            switch (event.key) {
                case "1":
                    window.location.href = "#conteudo";
                    break;
                case "2":
                    window.location.href = "#menu";
                    break;
                case "3":
                    window.location.href = "#footer";
                    break;
            }
        }
    });
</script>
